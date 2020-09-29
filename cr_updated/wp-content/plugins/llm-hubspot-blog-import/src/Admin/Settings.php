<?php

namespace LlmHubspotBlogImport\Admin;

/**
 * Settings
 *
 * Plugin settings and setting pages.
 * @package LlmHubspotBlogImport
 */

use LlmHubspotBlogImport\BackgroundSave;
use LlmHubspotBlogImport\Save;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Settings {
	public function __construct() {
		$this->hooks();
	}

	public function hooks() {
		add_action( 'admin_menu', [ $this, 'menuOptions' ] );
		add_action( 'wp_ajax_process_save_blogs', [ $this, 'process_save_blogs' ] );
		add_action( 'wp_ajax_processingHeartbeat', [ $this, 'processingHeartbeat' ] );
		add_action( 'heartbeat_received', [ $this, 'refresh_scheduled_background_process' ], 10, 3 );
	}

	public function customEnqueue() {
		//
	}

	public function refresh_scheduled_background_process() {
		$backgroundProcess = new BackgroundSave();
		$backgroundProcess->handle_cron_healthcheck();
	}

	public function process_save_blogs() {
		// Start pulling info
		$checkold = new Save();
		$checkold->blogListFeed();
		echo 'Success';
		wp_die();
	}

	/**
	 * Create the menu options for Settings
	 */
	public function menuOptions() {
		// This page will be under "Settings"
		add_options_page( 'LLM Hubspot Blog Import', 'LLM Hubspot Blog Import Settings', 'manage_options',
			'llm-hubspot-blog-import-settings', [ $this, 'createAdminPage' ] );
	}

	/**
	 * Admin Page Specific Code
	 */
	public function createAdminPage() {
		$apiKey = get_option( 'llm_hubspot_blog_import_hubspot_api_key' );
		?>

		<div class="wrap">
			<h2>LLM Hubspot Blog Import Settings</h2>

			<form method="post" action="options.php">
				<?php settings_fields( 'llm-hubspot-blog-import-settings' ); ?>
				<?php do_settings_sections( 'llm-hubspot-blog-import-settings' ); ?>
				<table class="form-table">
					<tr valign="top">
						<th scope="row">Hubspot API Key</th>
						<td>
							<input type="text" name="llm_hubspot_blog_import_hubspot_api_key" value="<?php echo esc_attr( $apiKey ); ?>" style="width: 325px"/>
							<p>Please get your API key of your Hubspot account from the
								<a href="https://app.hubspot.com/keys/get" target="_blank">API key section</a></p>
						</td>
					</tr>
				</table>
				<?php submit_button(); ?>
			</form>
		</div>
		<?php if ( ! empty( $apiKey ) ) : ?>
			<div class="wrap">
				<hr>
				<div style="padding-top: 50px">
					<form action="options-general.php?page=llm-hubspot-blog-import-settings" method="post" id="process-save">
						<input type="hidden" value="process_save_blogs" name="action"/>
						<input type="submit" value="Sync Hubspot Data" class="button-primary">
					</form>
				</div>
			</div>
		<?php endif; ?>
		<script>
            jQuery(function ($) {
                var ajaxurl = '<?php echo admin_url( 'admin-ajax.php' ); ?>';
                $("#process-save").submit(function (e) {
                    var form = $(this);
                    var button = form.find("input[type='submit']");
                    e.preventDefault();
                    $.ajax({
                        dataType: 'json',
                        data: $(this).serialize(),
                        url: ajaxurl,
                        method: 'post',
                        beforeSend: function () {
                            button.prop('disabled', true);
                            button.val('Processing...');
                        },
                        success: function (data) {
                            button.prop('disabled', false);
                            button.val('Done! Press this button to sync again');
                        },
                        error: function () {
                            button.prop('disabled', false);
                            button.val('An error has occurred - Please try again');
                        }
                    });
                });
                setInterval(function() {
                    var input = $("#process-save").find("input[type='submit']").val();
                    if(input == 'Processing...') {
                        $.ajax({
                            dataType: 'json',
                            data: {action : 'processingHeartbeat'},
                            url: ajaxurl,
                            method: 'post',
                            success: function (data) {
                                //
                            }
                        });
                    }
                }, 4000);
            });
		</script>
		<?php
	}

	/**
	 * Ajax to grab progress reports on background tasks.
	 */
	public function processingHeartbeat() {
		$backgroundProcess = new BackgroundSave();
		$backgroundProcess->handle_cron_healthcheck();
		wp_die();
	}

	/**
	 * Ajax to grab progress reports on background tasks.
	 */
	public function importProgressCallback() {
		global $wpdb;

		$progress = intval( get_option( 'llm-rets-feed-import-progress' ) );
		echo $progress;

		wp_die();
	}
}

/**
 * Run the class at start
 */
return new Settings();