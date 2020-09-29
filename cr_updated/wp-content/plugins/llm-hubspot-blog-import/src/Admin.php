<?php

namespace LlmHubspotBlogImport;

class Admin
{
    public function __construct()
    {
        $this->hooks();
        $this->includes();
    }

    public function hooks()
    {
        add_action('admin_enqueue_scripts', [$this, 'enqueueScriptsStyles']);
    }

    public function includes()
    {
        include_once('Admin/Settings.php');
    }

    /**
     * Load all of the scripts and styles for the Admin pages
     */
    public function enqueueScriptsStyles()
    {
        wp_enqueue_script('jquery-ui-button');
        wp_enqueue_script('jquery-ui-progressbar');
    }
}

return new Admin();