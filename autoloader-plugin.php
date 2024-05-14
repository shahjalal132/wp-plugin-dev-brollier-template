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
