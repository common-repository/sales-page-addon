<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed 

if( !function_exists('sales_addon_admin_scripts') ) {
	function sales_addon_admin_scripts() {
        
        wp_enqueue_style( 'wp-color-picker' ); 

		wp_enqueue_style( 'chosen', SALES_PAGE_ADDON_PLUGIN_ADMIN_CSS . '/chosen.min.css', array(), '1.8.7', 'all' );
		wp_enqueue_style( 'niche-frame', SALES_PAGE_ADDON_PLUGIN_URL . 'assets/css/niche-frame.css', array(), SALES_PAGE_ADDON_PLUGIN_VERSION, 'all' );
		wp_enqueue_style( SALES_PAGE_ADDON_PLUGIN_NAME . '-admin-style', SALES_PAGE_ADDON_PLUGIN_ADMIN_CSS . '/style.css', array(), rand(), 'all' );

		wp_enqueue_script( 'wp-color-picker');
		wp_enqueue_script( 'chosen', SALES_PAGE_ADDON_PLUGIN_ADMIN_JS . '/chosen.jquery.min.js', array('jquery'), '1.8.7', true );
		wp_enqueue_script( 'repeatable-fields', SALES_PAGE_ADDON_PLUGIN_ADMIN_JS . '/repeatable-fields.js', array('jquery'), '1.5.0', true );
		wp_enqueue_script( SALES_PAGE_ADDON_PLUGIN_NAME . '-admin-js', SALES_PAGE_ADDON_PLUGIN_ADMIN_JS . '/scripts.js', array('jquery'), rand(), true );

	}
	add_action( 'admin_enqueue_scripts', 'sales_addon_admin_scripts', 99 );
}