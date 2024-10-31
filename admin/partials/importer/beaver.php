<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed 
/**
 * Get the field config for a node.
 *
 * @param object $node
 * @return array|null
 */
function sales_page_addon_get_beaver_builder_fields_obj( $node ) {
	if ( 'row' === $node->type ) {
		return FLBuilderModel::get_settings_form_fields( 'row', 'general' );
	} elseif ( 'column' === $node->type ) {
		return FLBuilderModel::get_settings_form_fields( 'col', 'general' );
	} elseif ( 'module' === $node->type && isset( FLBuilderModel::$modules[ $node->settings->type ] ) ) {
		return FLBuilderModel::get_settings_form_fields( $node->settings->type, 'module' );
	}
	return null;
}

/**
 * Array config
 */ 
function sales_page_addon_get_beaver_builder_fields_arr( $node ) {
	if ( 'row' === $node['type'] ) {
		return FLBuilderModel::get_settings_form_fields( 'row', 'general' );
	} elseif ( 'column' === $node['type'] ) {
		return FLBuilderModel::get_settings_form_fields( 'col', 'general' );
	} elseif ( 'module' === $node['type'] && isset( FLBuilderModel::$modules[ $node['settings']['type'] ] ) ) {
		return FLBuilderModel::get_settings_form_fields( $node['settings']['type'], 'module' );
	}
	return null;
}

/**
 * Import function
 */ 
function sales_page_addon_beaver_builder_import( $url, $template_name ) {
	
	$request = wp_remote_get( $url );
	if( is_wp_error( $request ) ) {
		return false; // Bail early
	}
	$body = wp_remote_retrieve_body( $request );

	$data_json = json_decode($body, true);
	$new_obj = $data_json;

	foreach ( $data_json as $node_key => $node ) {
		$new_obj[$node_key] = (object)$new_obj[$node_key];
		
		if(!empty($new_obj[$node_key]->settings)) {
			$new_obj[$node_key]->settings = (object)$new_obj[$node_key]->settings;
		}
		
		$fields = sales_page_addon_get_beaver_builder_fields_arr( $node );
		
		if ( ! $fields ) {
			continue;
		}
	}

	foreach ( $new_obj as $node_key => $node ) {
		// $new_urls = $node->settings;
		$fields = sales_page_addon_get_beaver_builder_fields_obj( $node );
		if ( ! $fields ) {
			continue;
		}
		foreach ( $node->settings as $key => $value ) {
			if ( $key == 'photo_source' &&  'library' == $value ) {
				if ( $new_obj[$node_key]->settings->photo_src ) {

					$img_arr = sales_page_addon_upload_from_url($new_obj[$node_key]->settings->photo_src);
					if($img_arr) {
						$new_obj[$node_key]->settings->photo = $img_arr['attachment_id'];
						$new_obj[$node_key]->settings->photo_src = $img_arr['url'];						
					} else {
						$new_obj[$node_key]->settings->photo = rand();
						$new_obj[$node_key]->settings->photo_src = FL_BUILDER_URL . 'img/no-image.png';	
					}

				}
			}

			// BG Image
			if ( $key == 'bg_image_source' &&  'library' == $value ) {
				if ( $new_obj[$node_key]->settings->bg_image_src ) {
					
					$bg_img_arr = sales_page_addon_upload_from_url($new_obj[$node_key]->settings->bg_image_src);
					if($bg_img_arr) {
						$new_obj[$node_key]->settings->bg_image = $bg_img_arr['attachment_id'];
						$new_obj[$node_key]->settings->bg_image_src = $bg_img_arr['url'];						
					} else {
						$new_obj[$node_key]->settings->bg_image = rand();
						$new_obj[$node_key]->settings->bg_image_src = FL_BUILDER_URL . 'img/no-image.png';	
					}

				}
			}

			// Image
			if ( $key == 'image_src' ) {
				if ( $new_obj[$node_key]->settings->image_src ) {
					
					$image_src_arr = sales_page_addon_upload_from_url($new_obj[$node_key]->settings->image_src);
					if($image_src_arr) {
						$new_obj[$node_key]->settings->image = $image_src_arr['attachment_id'];
						$new_obj[$node_key]->settings->image_src = $image_src_arr['url'];						
					} else {
						$new_obj[$node_key]->settings->image = rand();
						$new_obj[$node_key]->settings->image_src = FL_BUILDER_URL . 'img/no-image.png';	
					}

				}
			}

			// Quote Image
			if ( $key == 'quote_image_url_src' ) {
				if ( $new_obj[$node_key]->settings->quote_image_url_src ) {
					
					$quote_image_url_src_arr = sales_page_addon_upload_from_url($new_obj[$node_key]->settings->quote_image_url_src);
					if($quote_image_url_src_arr) {
						$new_obj[$node_key]->settings->quote_image_url = $quote_image_url_src_arr['attachment_id'];
						$new_obj[$node_key]->settings->quote_image_url_src = $quote_image_url_src_arr['url'];						
					} else {
						$new_obj[$node_key]->settings->quote_image_url = rand();
						$new_obj[$node_key]->settings->quote_image_url_src = FL_BUILDER_URL . 'img/no-image.png';	
					}

				}
			}

			// Poster
			if ( $key == 'poster_src' ) {
				if ( $new_obj[$node_key]->settings->poster_src ) {
					
					$poster_src_arr = sales_page_addon_upload_from_url($new_obj[$node_key]->settings->poster_src);
					if($poster_src_arr) {
						$new_obj[$node_key]->settings->poster = $poster_src_arr['attachment_id'];
						$new_obj[$node_key]->settings->poster_src = $poster_src_arr['url'];						
					} else {
						$new_obj[$node_key]->settings->poster = rand();
						$new_obj[$node_key]->settings->poster_src = FL_BUILDER_URL . 'img/no-image.png';	
					}

				}
			}

			// Icon
			if ( $key == 'icon_type' &&  'image' == $value ) {
				if ( $new_obj[$node_key]->settings->image_src ) {
					
					$icon_type_arr = sales_page_addon_upload_from_url($new_obj[$node_key]->settings->image_src);
					if($icon_type_arr) {
						$new_obj[$node_key]->settings->image = $icon_type_arr['attachment_id'];
						$new_obj[$node_key]->settings->image_src = $icon_type_arr['url'];						
					} else {
						$new_obj[$node_key]->settings->image = rand();
						$new_obj[$node_key]->settings->image_src = FL_BUILDER_URL . 'img/no-image.png';	
					}

				}
			}

		}
	}
	
	$postarr = array(
		'post_type' => 'page',
		'post_status' => 'publish',
		'post_title' => $template_name,
	);
	$new_post_id = wp_insert_post( $postarr );

	if($new_post_id) {
		update_post_meta( $new_post_id, '_fl_builder_data', $new_obj );
		update_post_meta( $new_post_id, '_fl_builder_enabled', 1 );
		update_post_meta( $new_post_id, '_fl_builder_history_position', 0 );
		update_post_meta( $new_post_id, '_wp_page_template', 'templates/nicheaddons-canvas-template.php' );
	}

	return $new_post_id;
}