<?php

namespace LlmHubspotBlogImport;

/**
 * BackgroundSave
 * @package LlmHubspotBlogImport
 */

include_once( LlmHubspotBlogImport()->pluginPath() . '/includes/wp-async-request.php' );
include_once( LlmHubspotBlogImport()->pluginPath() . '/includes/wp-background-process.php' );

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class BackgroundSave extends \WP_Background_Process {

	/**
	 * @var string
	 */
	protected $action = 'llm_hubspot_blog_import_background_save_image';

	/**
	 * Dispatch updater.
	 *
	 * Updater will still run via cron job if this fails for any reason.
	 */
	public function dispatch() {
		parent::dispatch();
	}

	/**
	 * Handle cron healthcheck
	 *
	 * Restart the background process if not already running
	 * and data exists in the queue.
	 */
	public function handle_cron_healthcheck() {
		if ( $this->is_process_running() ) {
			// Background process already running.
			return;
		}

		if ( $this->is_queue_empty() ) {
			// No data to process.
			$this->clear_scheduled_event();

			return;
		}

		$this->handle();
	}

	/**
	 * Schedule fallback event.
	 */
	protected function schedule_event() {
		if ( ! wp_next_scheduled( $this->cron_hook_identifier ) ) {
			wp_schedule_event( time() + 10, $this->cron_interval_identifier, $this->cron_hook_identifier );
		}
	}

	/**
	 * Task
	 *
	 * Override this method to perform any actions required on each
	 * queue item. Return the modified item for further processing
	 * in the next pass through. Or, return false to remove the
	 * item from the queue.
	 *
	 * @param mixed $item Queue item to iterate over
	 *
	 * @return mixed
	 */
	protected function task( $item ) {
		// Variables
		$image_url = $item['imageUrl'];
		$image_alt_text = $item['imageAltText'];
		$post_id   = $item['post_id'];
		// Gives us access to the download_url() and wp_handle_sideload() functions
		require_once( ABSPATH . 'wp-admin/includes/file.php' );

		// Download file to temp dir
		$temp_file = download_url( $image_url );

		if ( ! is_wp_error( $temp_file ) ) {

			// Array based on $_FILE as seen in PHP file uploads
			$file = [
				'name'     => basename( $image_url ), // ex: wp-header-logo.png
				'type'     => wp_check_filetype( $temp_file, null )['type'],
				'tmp_name' => $temp_file,
				'error'    => 0,
				'size'     => filesize( $temp_file ),
			];

			$overrides = [
				'test_form' => false,
				'test_size' => true,
			];

			// Move the temporary file into the uploads directory
			$results = wp_handle_sideload( $file, $overrides );

			if ( empty( $results['error'] ) ) {
				$filename  = $results['file']; // Full path to the file
				$local_url = $results['url'];  // URL to the file in the uploads dir
				$type      = $results['type']; // MIME type of the file

				// Set attachment data
				$attachment = [
					'post_mime_type' => $type,
					'post_title'     => sanitize_file_name( $image_alt_text ),
					'post_content'   => '',
					'post_status'    => 'inherit'
				];

				// Create the attachment
				$attach_id = wp_insert_attachment( $attachment, $filename, $post_id );

				// Include image.php
				require_once( ABSPATH . 'wp-admin/includes/image.php' );

				// Delete old featured image, if exists
				if (has_post_thumbnail($post_id)) {
					$oldthumbnail = get_post_thumbnail_id($post_id);
					wp_delete_attachment($oldthumbnail, true);
				}

				// Define attachment metadata
				$attach_data = wp_generate_attachment_metadata( $attach_id, $filename );

				// Assign metadata to attachment
				wp_update_attachment_metadata( $attach_id, $attach_data );

				// And finally assign featured image to post
				set_post_thumbnail( $post_id, $attach_id );
			}
		}

		return false;
	}

	/**
	 * Complete
	 *
	 * Override if applicable, but ensure that the below actions are
	 * performed, or, call parent::complete().
	 */
	protected function complete() {
		parent::complete();
	}

}