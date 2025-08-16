<?php
/**
 * Plugin Name: WPS Mass Embedder
 * Plugin URI: https://www.wp-script.com/adult-wordpress-plugins/adult-mass-videos-embedder/
 * Description: Mass import thousands of Adult Videos from the best Porn Tubes
 * Author: WP-Script
 * Author URI: https://www.wp-script.com
 * Version: 2.2.1
 * Text Domain: amve_lang
 * Domain Path: /languages
 * Requires PHP: 7.2
 *
 * @package amve\main
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// AMVE constants.
define( 'AMVE_VERSION', '2.2.1' );
define( 'AMVE_DIR', plugin_dir_path( __FILE__ ) );
define( 'AMVE_URL', plugin_dir_url( __FILE__ ) );
define( 'AMVE_FILE', __FILE__ );

// AMVE requires wp-script-core plugin.
require_once ABSPATH . 'wp-admin/includes/plugin.php';
if ( ! is_plugin_active( 'wp-script-core/wp-script-core.php' ) ) {
	require_once AMVE_DIR . 'tgmpa/class-tgm-plugin-activation.php';
	require_once AMVE_DIR . 'tgmpa/config.php';
	return;
}

// AMVE Autoload classes.
require_once 'vendor/autoload.php';

/**
 * Create the plugin instance in a function and call it.
 */
if ( ! function_exists( 'AMVE' ) ) {
	/**
	 * Run the plugin.
	 *
	 * @return AMVE The plugin instance or null if the plugin is not connected.
	 */
	function amve() {
		return AMVE::instance();
	}
}
if ( ! function_exists( 'amve_check_plugin_status' ) ) {
	/**
	 * Init hook callback to run the AMVE only if it is connected.
	 *
	 * @return void
	 */
	function amve_check_plugin_status() {
		if ( function_exists( 'WPSCORE' ) && 'connected' === WPSCORE()->get_product_status( 'AMVE' ) ) {
			amve();
		}
	}
}
add_action( 'init', 'amve_check_plugin_status' );
