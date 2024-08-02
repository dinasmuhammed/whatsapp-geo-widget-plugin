<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://adwebcomicagency.vercel.app/
 * @since             1.0.0
 * @package           09
 *
 * @wordpress-plugin
 * Plugin Name:       whatsapp-geo-widget
 * Plugin URI:        https://https://github.com/muhammedadnanv/whatsapp-geo-widget.git
 * Description:       This is a description of the plugin.
 * Version:           1.0.0
 * Author:            Muhammed Adnan
 * Author URI:        https://https://adwebcomicagency.vercel.app//
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       09
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( '09_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-09-activator.php
 */
function activate_09() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-09-activator.php';
	09_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-09-deactivator.php
 */
function deactivate_09() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-09-deactivator.php';
	09_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_09' );
register_deactivation_hook( __FILE__, 'deactivate_09' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-09.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_09() {

	$plugin = new 09();
	$plugin->run();

}
run_09();
