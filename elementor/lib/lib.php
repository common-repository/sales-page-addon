<?php
namespace Elementor;
/*
 * All Elementor Group Controls Output
 * Author & Copyright: NicheAddon
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'sales_page_insert_elementor' ) ) {
	function sales_page_insert_elementor($atts){
	  if (!class_exists('Elementor\Plugin')){
	      return '';
	  }
	  if (!isset($atts['id']) || empty($atts['id'])){
	      return '';
	  }

	  $post_id = $atts['id'];
	  $response = Plugin::instance()->frontend->get_builder_content_for_display($post_id);
	  return $response;
	}
	add_shortcode('sales_page_elementor_template','Elementor\sales_page_insert_elementor');
}

if ( !class_exists('Salespage_Controls_Helper_Output') ){

	class Salespage_Controls_Helper_Output{

		/**
		* Class Constructor
		*/

		//public function __construct(){}

		/**
		* Get Posts
		*/
		public static function get_posts( $post_type = '', $numberposts = ''){
			$numberposts = -1;
			$gen_posts = get_posts( [
				'post_type' => $post_type,
				'posts_per_page' => $numberposts,
			] );
			$all_posts = [];
			if ( is_array( $gen_posts ) && !empty( $gen_posts ) ) {
			  foreach ( $gen_posts as $sing_post ) {
				$all_posts[$sing_post->ID] = $sing_post->post_title;
			  }
			} else {
			  $all_posts = esc_html__( 'No contact forms found', 'sales-page-addon' );
			}
			return $all_posts;
		}

		/**
		* Get Post terms
		*/
		public static function get_terms_names( $term_name = '', $output = '', $hide_empty = false ){
			$return_val = [];
			$terms = get_terms([
			    'taxonomy'   => $term_name,
			    'hide_empty' => $hide_empty,
			]);

			foreach( $terms as $term ){
				if ( 'id' == $output ){
					$return_val[$term->term_id] = $term->name;
				}
				else{
					$return_val[$term->slug] = $term->name;
				}
			}
			return $return_val;
		}

	}// end class
}