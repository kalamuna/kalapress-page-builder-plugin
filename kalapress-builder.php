<?php
/*
Plugin Name: KalaPress Builder
Description: Enables block style page builder functionality.
Version: 1.0
Author: Jared Deschner (Kalamuna)
Author URI: https://www.kalamuna.com
*/


// Pull In Configuration File /////////////////////////////////////////////////////////////////////////////////////////////////////////////

require('config.php');

// Pull In Custom Configs From Theme (if provided)
if ( file_exists(get_stylesheet_directory() . '/kalapress-page-builder-config.php') ) {
	include( get_stylesheet_directory() . '/kalapress-page-builder-config.php' );
}

// Enqueue CSS Styles
function kpb_enqueue_scripts() {
	wp_enqueue_style( 'kalapress-page-builder-css',  plugin_dir_url( __FILE__ ) . "styles/scaffold.css");
}
add_action( 'wp_enqueue_scripts', 'kpb_enqueue_scripts' );


// Initialize Everything //////////////////////////////////////////////////////////////////////////////////////////////////////////////////

global $kpb;

// Discover All "Built In" Content Types From Plugin
foreach (scandir(plugin_dir_path( __FILE__ ) . 'content-modules') as $file) {
	if ('.' != $file && '..' != $file) {
		$full_path = plugin_dir_path( __FILE__ ) . 'content-modules/' . $file;
		if (is_dir($full_path)) {
			$kpb['content_types'][$file] = $full_path;
		}
	}
}

// Discover All User Defined and Overridden Content Types From Theme
if (file_exists(get_stylesheet_directory() . '/kalapress-page-builder/content-modules' )):
	foreach (scandir(get_stylesheet_directory() . '/kalapress-page-builder/content-modules') as $file) {
		if ('.' != $file && '..' != $file) {
			$full_path = get_stylesheet_directory() . '/kalapress-page-builder/content-modules/' . $file;
			if (is_dir($full_path)) {
				$kpb['content_types'][$file] = $full_path;
			}
		}
	}
endif;

// Configure ACF Repeater Field ///////////////////////////////////////////////////////////////////////////////////////////////////////////

require( 'setup-acf-fields.php' );

// Function To Display Content On Front End //////////////////////////////////////////////////////////////////////////////////////////////

require( 'render-front-content.php' );