<?php
/**
 * Config plugin file.
 *
 * @package amve\main
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Navigation config
 */
self::$config['nav'] = array(
	'30'           => array(
		'slug'     => 'amve-import-videos',
		'callback' => 'amve_import_videos_page',
		'title'    => 'Mass Embedder',
		'icon'     => 'fa-play-circle',
	),
	'amve-options' => array(
		'slug' => 'amve-options',
	),
);

/**
 * JS config
 */
self::$config['scripts']['js'] = array(
	// vendors.
	'AMVE_bootstrap-select.js' => array(
		'in_pages'  => array( 'amve-import-videos' ),
		'path'      => 'admin/vendors/bootstrap-select/bootstrap-select.min.js',
		'require'   => array(),
		'version'   => '1.12.4',
		'in_footer' => false,
	),

	'AMVE_vue-paginate.js'     => array(
		'in_pages'  => array( 'amve-import-videos' ),
		'path'      => 'admin/vendors/vue-paginate/vue-paginate.min.js',
		'require'   => array(),
		'version'   => '3.6.0',
		'in_footer' => false,
	),

	'AMVE_rxjs.js'             => array(
		'in_pages'  => array( 'amve-import-videos' ),
		'path'      => 'admin/vendors/rxjs/rxjs.umd.min.js',
		'require'   => array(),
		'version'   => '6.6.0',
		'in_footer' => false,
	),

	// pages.
	'AMVE_import-videos.js'    => array(
		'in_pages'  => array( 'amve-import-videos' ),
		'path'      => 'admin/pages/page-import-videos.js',
		'require'   => array(),
		'version'   => AMVE_VERSION,
		'in_footer' => false,
		'localize'  => array(
			'ajax' => true,
			'i18n' => amve_localize(),
		),
	),
);

/**
 * Function to parse ./localize.json file to an array of localized strings.
 *
 * @return array Localized strings.
 */
function amve_localize() {
	$localize = array();

	// Parse localize.php file.
	$localize_file = wp_normalize_path( AMVE_DIR . 'localize.php' );
	if ( file_exists( $localize_file ) ) {
		$localize = include_once $localize_file;
	}

	return $localize;
}

/**
 *  CSS config.
 */
self::$config['scripts']['css'] = array(
	// vendors.
	'AMVE_bootstrap-select.css' => array(
		'in_pages' => array( 'amve-import-videos' ),
		'path'     => 'admin/vendors/bootstrap-select/bootstrap-select.min.css',
		'require'  => array(),
		'version'  => '1.12.4',
		'media'    => 'all',
	),
	// assets.
	'AMVE_admin.css'            => array(
		'in_pages' => array( 'amve-import-videos' ),
		'path'     => 'admin/assets/css/admin.css',
		'require'  => array(),
		'version'  => AMVE_VERSION,
		'media'    => 'all',
	),
);
