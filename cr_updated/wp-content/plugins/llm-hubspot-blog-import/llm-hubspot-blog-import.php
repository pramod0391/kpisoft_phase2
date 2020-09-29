<?php
/**
 * @link https://limelightmarketing.com
 * @since 1.0.1
 * @package llm-hubspot-blog-import
 * @wordpress-plugin
 *
 * Plugin Name: LLM Hubspot Blog Import
 * Plugin URI: https://gitlab.com/limelight-marketing/llm-hubspot-blog-import
 * Description: Import blog posts from Hubspot to Wordpress. Converts all Featured Images, Topics and HTML content to Wordpress friendly content.
 * Version: 1.0.1
 * Author: LimeLight Marketing
 * Author URI: https://limelightmarketing.com
 * License: GPL2
 *
 * Requires at least: 4.4
 * Tested up to: 4.7.3
 * Text Domain: llmhubspotblogimport
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Only supporting PHP7+
if ( version_compare( phpversion(), '5.6', '<' ) ) {
	wp_die( 'PHP 5.6 or higher required!' );
}

if ( ! class_exists( 'LlmHubspotBlogImport' ) ) {

	final class LlmHubspotBlogImport {
		/**
		 * The single instance of the class.
		 */
		protected static $_instance = null;

		/**
		 * Main Instance.
		 *
		 * Ensures only one instance of plugin is loaded or can be loaded.
		 */
		public static function instance()
		{
			if (is_null(self::$_instance)) {
				self::$_instance = new self();
			}

			return self::$_instance;
		}

		public function __construct()
		{
			$this->defineConstants();
			$this->includes();
			$this->initHooks();
		}

		/**
		 * Define LlmRets Constants.
		 */
		private function defineConstants()
		{
			$upload_dir = wp_upload_dir();

			$this->define('LLMHUBSPOTBLOGIMPORT_PLUGIN_FILE', __FILE__);
			$this->define('LLMHUBSPOTBLOGIMPORT_PLUGIN_BASENAME', plugin_basename(__FILE__));
			$this->define('LLMHUBSPOTBLOGIMPORT_DELIMITER', '|');
			$this->define('LLMHUBSPOTBLOGIMPORT_LOG_DIR', $upload_dir['basedir'] . '/llmctatracking-logs/');
			$this->define('LLMHUBSPOTBLOGIMPORT_SESSION_CACHE_GROUP', 'llmrets_session_id');
		}

		/**
		 * Define constant if not already set.
		 *
		 * @param  string $name
		 * @param  string|bool $value
		 */
		private function define($name, $value)
		{
			if ( ! defined($name)) {
				define($name, $value);
			}
		}

		/**
		 * Hook into actions and filters.
		 */
		private function initHooks()
		{
			register_activation_hook( __FILE__, array( 'LlmHubspotBlogImport\Install', 'install' ) );
		}

		/**
		 * Include required core files used in admin and on the frontend.
		 */
		public function includes()
		{
			include_once('src/Install.php');
			include_once('src/Save.php');
			include_once('src/BackgroundSave.php');
			if ($this->is_request('admin')) {
				include_once('src/Admin.php');
			}
		}

		/**
		 * What type of request is this?
		 *
		 * @param  string $type admin, ajax, cron or frontend.
		 * @return bool
		 */
		private function is_request( $type ) {
			switch ( $type ) {
				case 'admin' :
					return is_admin();
				case 'ajax' :
					return defined( 'DOING_AJAX' );
				case 'cron' :
					return defined( 'DOING_CRON' );
				case 'frontend' :
					return ( ! is_admin() || defined( 'DOING_AJAX' ) ) && ! defined( 'DOING_CRON' );
			}
		}

		/**
		 * Get the plugin url.
		 * @return string
		 */
		public function pluginUrl()
		{
			return untrailingslashit(plugins_url('/', __FILE__));
		}

		/**
		 * Get the plugin path.
		 * @return string
		 */
		public function pluginPath()
		{
			return untrailingslashit(plugin_dir_path(__FILE__));
		}

		function pluginAddSettingsLink( $links )
		{
			$link = [
				'<a href="'.admin_url('options-general.php?page=llm-hubspot-blog-import-settings').'">' . __( 'Settings' ) . '</a>'
			];
			$links = array_merge($link, $links);

			return $links;
		}
	}
	/**
	 * Main instance
	 *
	 * Returns the main instance to prevent the need to use globals.
	 */
	function LlmHubspotBlogImport()
	{

		global $llmHubspotBlogImport;

		if ( ! isset($llmHubspotBlogImport)) {
			$llmHubspotBlogImport = new LlmHubspotBlogImport();
		}

		return $llmHubspotBlogImport;
	}
}

// Declare settings link on plugin page
add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), function ( $links ) {
	$link = [
		'<a href="'.admin_url('options-general.php?page=llm-hubspot-blog-import-settings').'">' . __( 'Settings' ) . '</a>'
	];
	$links = array_merge($link, $links);

	return $links;
});

LlmHubspotBlogImport();