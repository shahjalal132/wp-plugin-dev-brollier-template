<?php

/**
 * Plugin Name: Autoloader Plugin
 * Plugin URI:  #
 * Author:      Shah jalal
 * Author URI:  github.com/shahjalal132
 * Description: Autoloader plugin
 * Version:     0.1.0
 * text-domain: autoloader-plugin
 */

defined( "ABSPATH" ) || exit( "Direct Access Not Allowed" );

// Define plugin path
if ( !defined( 'AUTOLOADER_PLUGIN_PATH' ) ) {
    define( 'AUTOLOADER_PLUGIN_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
}

// Define plugin url
if ( !defined( 'AUTOLOADER_PLUGIN_URL' ) ) {
    define( 'AUTOLOADER_PLUGIN_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );
}

if ( !defined( 'AUTOLOADER_ASSETS_PATH' ) ) {
    define( 'AUTOLOADER_ASSETS_PATH', AUTOLOADER_PLUGIN_URL . '/assets' );
}

// require autoloader files
require_once AUTOLOADER_PLUGIN_PATH . '/inc/helpers/autoloader.php';
require_once AUTOLOADER_PLUGIN_PATH . '/load.php';

function autoloader_get_theme_instance() {
    \AUTOLOADER\Inc\Autoloader::get_instance();
}

autoloader_get_theme_instance();