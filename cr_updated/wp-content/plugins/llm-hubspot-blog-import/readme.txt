=== LLM Hubspot Blog Import ===
Contributors: failcookie, limelightmarketing
Tags: hubspot,hubspot blog,hubspot blog wordpress,hubspot posts to wordpress,hubspot to wordpress
Requires at least: 4.4
Tested up to: 4.7.3
Stable tag: 1.0.1
License: GPL2

Import blog posts from Hubspot to Wordpress. Converts all Featured Images, Topics and HTML content to Wordpress friendly content.

== Description ==
LLM Hubspot Blog Import is a simple plugin that will import your blog posts from Hubspot to Wordpress and maintain Wordpress support for future development.

This plugin will move over the original blog HTML content, featured image and topics. Please see the FAQ section to learn more on how we handle topics and authors during the import process.

This plugin is designed to be incredibly simple to use and hassle-free. You must have acess to a Hubspot account and the ability to see the Hubspot API key for your account.

<strong>This plugin requires PHP 5.6+.</strong>

== Installation ==
1. Download and activate the plugin through the \'Plugins\' menu in WordPress.
2. Click the \'Settings\' link on the Plugins page to start the process.
3. Grab your Hubspot API key by visiting the following link: https://app.hubspot.com/keys/get
NOTE: If you are in control of multiple Hubspot accounts, you will want to make sure you are logged into the correct account before copying your API key.
4. Paste your API key and click the \'Sync Hubspot Data\' button to begin.
5. The process may take up to 3 minutes - depending on how much data is being processed.

== Frequently Asked Questions ==
= What happens if the Hubspot Author email doesn\'t exist in my Wordpress setup? =
A new user will be created using the Hubspot Author Email and Full Name (as first name in Wordpress). A password is randomly generated and the user will not be informed of the account creation.

= How do you handle Hubspot Topics? =
If the Hubspot Topic slug is the same as an existing Wordpress Category slug, then the import will tag the existing category. If the Category doesn\'t exist, then a new Category will be created and tagged.

= Will there be duplicate content? =
The first sync with Hubspot will tag each new post with a Hubspot ID. All new posts will be refreshed during every sync, including Published Status, Published Date, etc. Featured Image will also be refreshed and the old image will be deleted.

== Screenshots ==
1. Settings Page

== Changelog ==
1.0.1 - Fixed some error messages and added an error callback for ajax.
1.0 - Initial release.