<?php 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed 

if( !function_exists('sales_addon_info_grabber_cb') ) {
	function sales_addon_info_grabber_cb() {

		$url = (isset($_POST['link'])) ? $_POST['link'] : '';
		$builder = (isset($_POST['builder'])) ? esc_attr($_POST['builder']) : '';
		$template_name = (isset($_POST['template_name'])) ? esc_attr($_POST['template_name']) : '';

		// copy($url, SALES_PAGE_ADDON_PLUGIN_ADMIN_PATH . '/partials/templates/temp/temp.json');

		if($builder && $builder == 'elementor') {
			if(spa_is_elementor_builder()) {
				// sales_page_addon_elementor_builder_import(SALES_PAGE_ADDON_PLUGIN_ADMIN_PATH . '/partials/templates/temp/temp.json');
				sales_page_addon_elementor_builder_import($url);
			}
		}

		if($builder && $builder == 'beaver') {
			if(spa_is_beaver_builder()) {
				// Media Handle
				require_once( SALES_PAGE_ADDON_PLUGIN_ADMIN_PATH . '/partials/functions/image.php');
				sales_page_addon_beaver_builder_import( $url, $template_name );
			}
		}
	    
		wp_die();
	}
	add_action( 'wp_ajax_sales_addon_info_grabber', 'sales_addon_info_grabber_cb' );
	add_action( 'wp_ajax_nopriv_sales_addon_info_grabber', 'sales_addon_info_grabber_cb' );
}

// Gallery Filter (Type/Category)
if( !function_exists('sales_addon_filter_cb') ) {
	function sales_addon_filter_cb() {
		
		$templates = sales_addon_template_options();
		
		$form_ser_data = (isset($_POST['data'])) ? sanitize_text_field( $_POST['data'] ) : '';
	    $form_data = array();
	    parse_str($form_ser_data, $form_data);
		
		$filter_keys = array();
		if( !empty($form_data['type']) && !empty($form_data['cat']) ) {
			foreach ( $templates as $key => $template ) {
				if( $form_data['type'] == $template['type'] && in_array($form_data['cat'], $template['categories'])) {
					$filter_keys[] = $key;
				}
			}			
		} elseif ( $form_data['type'] && empty($form_data['cat']) ) {
			foreach ( $templates as $key => $template ) {
				if( $form_data['type'] == $template['type'] ) {
					$filter_keys[] = $key;
				}
			}
		} elseif ($form_data['cat'] && empty($form_data['type']) ) {
			foreach ($templates as $key => $template) {
				if(in_array($form_data['cat'], $template['categories'])) {
					$filter_keys[] = $key;
				}
			}
		}
	    
		if( $filter_keys && !empty($filter_keys) ) {
			sales_addon_template_filter_fallback($filter_keys);
		} else {
			sales_addon_template_default_fallback();
		}
		
		wp_die();
	}
	add_action( 'wp_ajax_sales_addon_filter', 'sales_addon_filter_cb' );
	add_action( 'wp_ajax_nopriv_sales_addon_filter', 'sales_addon_filter_cb' );
}

// Gallery Filter (Search)
if( !function_exists('sales_addon_search_cb') ) {
	function sales_addon_search_cb() {
		
		$templates = sales_addon_template_options();
		
		$search_str = (isset($_POST['search_str'])) ? sanitize_text_field($_POST['search_str']) : '';
		
		$filter_keys = array();
		if( $search_str ) {
			foreach ($templates as $key => $template) {
			    if (stristr($template['name'], $search_str) == '') { } else {
			    	$filter_keys[] = $key;
			    }
			}						
		}

		if( $filter_keys && !empty($filter_keys) ) {
			sales_addon_template_filter_fallback($filter_keys);
		} else {
			sales_addon_template_default_fallback();
		}
		wp_die();
	}
	add_action( 'wp_ajax_sales_addon_search', 'sales_addon_search_cb' );
	add_action( 'wp_ajax_nopriv_sales_addon_search', 'sales_addon_search_cb' );
}

// Builder Change
if( !function_exists('sales_addon_builder_change_cb') ) {
	function sales_addon_builder_change_cb() {
		
		$builder = (isset($_POST['builder'])) ? sanitize_text_field($_POST['builder']) : '';

		if( $builder ) {
			update_option('sales-page-builder-active', $builder);
			if( get_option( 'sales-page-builder-active') ) {
				sales_addon_template_default_fallback();
			}
		}
		wp_die();
	}
	add_action( 'wp_ajax_sales_addon_builder_change', 'sales_addon_builder_change_cb' );
	add_action( 'wp_ajax_nopriv_sales_addon_builder_change', 'sales_addon_builder_change_cb' );
}