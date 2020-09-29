<?php

namespace LlmHubspotBlogImport;

/**
 * Install
 *
 * Installation related functions and actions.
 * @package LlmHubspotBlogImport
 */

if ( ! defined('ABSPATH')) {
    exit;
}

class Install
{
    public function __construct()
    {
        // Remove this when we are ready to have a full install/uninstall process.
        self::hooks();
        self::mkdir();
        self::addSettingOptions();
    }

    public static function install()
    {
        self::mkdir();
	    self::addSettingOptions();
    }

    public static function hooks()
    {
        add_action( 'admin_init', [__CLASS__, 'addSettingOptions']);
    }

    public static function mkdir()
    {
        //
    }

    public static function addSettingOptions()
    {
        // Register our settings
        register_setting('llm-hubspot-blog-import-settings', 'llm_hubspot_blog_import_hubspot_api_key');
        // Import progress option
        add_option( 'llm-hubspot-blog-import-progress', '0', '', 'yes');
    }
}

return new Install();