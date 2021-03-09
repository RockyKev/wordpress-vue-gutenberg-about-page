<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              #
 * @since             1.0.0
 * @package           Vue Gutenberg About Us
 *
 * @wordpress-plugin
 * Plugin Name:       Vue Gutenberg About Us
 * Plugin URI:        #
 * Description:       This creates a Vue App that generates Gutenberg Blocks to make a about page
 * Version:           1.0.0
 * Author:            Rocky Kev
 * Author URI:        #
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       author-generator-vue
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}
/**

* Currently plugin version.
 */
define('VUE_CONTACT_US', '1.0.0');
