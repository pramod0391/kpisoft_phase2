<?php

namespace LlmHubspotBlogImport;

/**
 * Save
 *
 * @package LlmHubspotBlogImport
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Save {
	public function __construct() {
		$this->hooks();
	}

	public function hooks() {
		//
	}

	public function blogListFeed() {
		// Set variables
		$apiKey  = get_option( 'llm_hubspot_blog_import_hubspot_api_key' );
		$getArgs = [
			'timeout' => 120
		];
		// Grab all blog posts
		$response = wp_remote_get( 'https://api.hubapi.com/content/api/v2/blog-posts?hapikey=' . $apiKey . '&archived=false&limit=99999',
			$getArgs );
		$body     = json_decode( wp_remote_retrieve_body( $response ), true );
		$results  = $body['objects'];
		$this->saveBlogList( $results );
	}

	public function saveBlogList( $results ) {
		$backgroundProcess = new BackgroundSave();
		if ( ! empty( $results ) ) {
			foreach ( $results as $item ) {
				$postStatus = 'publish';
				// Check that author exists in Hubspot Blog
				if ( isset( $item['blog_author'] ) && $item['blog_author']['email'] !== '' ) {
					// Look for user in system
					$user = get_user_by( 'email', $item['blog_author']['email'] );

					// If user doesn't exist, then create user with HubSpot details
					if ( $user == false ) {
						$user = wp_insert_user( [
							'user_login'   => $item['blog_author']['email'],
							'user_email'   => $item['blog_author']['email'],
							'first_name'   => $item['blog_author']['full_name'],
							'user_pass'    => substr( str_shuffle( 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789' ),
								0, 10 ),
							'display_name' => '',
						] );
						$user = get_user_by( 'id', $user );
					}
				} else {
					$user = wp_get_current_user();
				}

				// Define the blog status
				if ( $item['state'] == 'DRAFT' ) {
					$postStatus = 'draft';
				} elseif ( $item['state'] == 'SCHEDULED' ) {
					$postStatus = 'future';
				}

				// Define category
				$categories = $this->getHsTopics($item['topic_ids']);

				// Add Blog Post
				$args   = [
					'posts_per_page' => 1,
					'post_type'      => 'post',
					'meta_key'       => 'hubspot_id',
					'meta_value'     => $item['id'],
					'meta_compare'   => '='
				];
				$exists = new \WP_Query( $args );

				if ( $exists->post_count == 0 ) {
					$post_id = wp_insert_post( [
						'post_title'   => $item['name'],
						'post_content' => $item['post_body'],
						'post_status'  => $postStatus,
						'post_category' => $categories,
						'post_type'    => 'post',
						'post_date'    => date( 'Y-m-d H:i:s', $item['publish_date'] / 1000 ),
						'post_author'  => $user->ID
					] );
				} else {
					while ( $exists->have_posts() ) {
						$exists->the_post();
						$post_id = wp_update_post( [
							'ID'           => get_the_ID(),
							'post_title'   => $item['name'],
							'post_content' => $item['post_body'],
							'post_status'  => $postStatus,
							'post_category' => $categories,
							'post_type'    => 'post',
							'post_date'    => date( 'Y-m-d H:i:s', $item['publish_date'] / 1000 ),
							'post_author'  => $user->ID
						] );
					}
					wp_reset_postdata();
				}

				if ( ! empty( $post_id ) && ! is_null( $post_id ) ) {
					// Get and Save Featured Image
					$image_url = $item['featured_image'];
					if ( $image_url !== '' && isset( $image_url ) ) {
						if ( wp_remote_retrieve_response_code( wp_remote_get( $image_url ) ) == 200 ) {
							$itemarray = [
								'post_id'      => $post_id,
								'imageUrl'     => $image_url,
								'imageAltText' => $item['featured_image_alt_text']
							];
							$backgroundProcess->push_to_queue( $itemarray );
						}
					}
					if ( ! add_post_meta( $post_id, 'hubspot_id', $item['id'], true ) ) {
						update_post_meta( $post_id, 'hubspot_id', $item['id'] );
					}
					wp_reset_postdata();
				}
			}
			$backgroundProcess->save()->dispatch();
		}
		$backgroundProcess->handle_cron_healthcheck();
	}

	public function getHsTopics( $topicIds ) {
		// Set variables
		$apiKey  = get_option( 'llm_hubspot_blog_import_hubspot_api_key' );
		$getArgs = [
			'timeout' => 120
		];
		$topics = [];
		foreach ($topicIds as $topicId) {
			// Grab all blog posts
			$response = wp_remote_get( 'https://api.hubapi.com/blogs/v3/topics/' . $topicId . '?hapikey=' . $apiKey,
				$getArgs );
			$topics[]   = json_decode( wp_remote_retrieve_body( $response ), true );
		}

		return $this->getWpCategory( $topics );
	}

	public function getWpCategory( $topics ) {
		$categories = [];
		foreach ( $topics as $topic ) {
			$category = get_category_by_slug( $topic['slug'] );
			if ( $category ) {
				$categories[] = $category->cat_ID;
			} else {
				$catarr   = [
					'cat_name'             => $topic['name'],
					'category_description' => $topic['description'],
					'category_nicename'    => $topic['slug'],
					'taxonomy'             => 'category'
				];
				$category = wp_insert_category( $catarr );
				$category = get_category( $category );
				$categories =  $category->cat_ID;
			}
		}

		return $categories;
	}
}

return new Save();