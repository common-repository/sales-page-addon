<?php 
/**
* Sales Page Addons - Title module css processor
* Author & Copyright: NicheAddon
*/

// Padding
FLBuilderCSS::dimension_field_rule( array(
	'settings'     => $settings,
	'setting_name' => 'item_padding',
	'selector'     => ".fl-node-$id .spa-magic-wind-wrapper",
	'props'        => array(
		'padding-top'    => 'item_padding_top',
		'padding-right'  => 'item_padding_right',
		'padding-bottom' => 'item_padding_bottom',
		'padding-left'   => 'item_padding_left',
	),
) );

// Margin
FLBuilderCSS::dimension_field_rule( array(
	'settings'     => $settings,
	'setting_name' => 'item_margin',
	'selector'     => ".fl-node-$id .spa-magic-wind-wrapper",
	'props'        => array(
		'margin-top'    => 'item_margin_top',
		'margin-right'  => 'item_margin_right',
		'margin-bottom' => 'item_margin_bottom',
		'margin-left'   => 'item_margin_left',
	),
) );

// Color
if ( ! empty( $settings->color ) ) : ?>
	.fl-node-<?php echo esc_attr($id); ?> .spa-magic-wind {
		color: <?php echo sanitize_text_field( FLBuilderColor::hex_or_rgb( $settings->color ) ); ?>;
	}
	<?php
endif;

// Alignment
FLBuilderCSS::responsive_rule( array(
	'settings'     => $settings,
	'setting_name' => 'alignment',
	'selector'     => ".fl-node-$id .spa-magic-wind-wrapper",
	'prop'         => 'text-align',
) );

// Typography
FLBuilderCSS::typography_field_rule( array(
	'selector'     => ".fl-node-$id .spa-magic-wind",
	'setting_name' => 'typography',
	'settings'     => $settings,
) );

// BG Color
if ( ! empty( $settings->bg_color ) ) : ?>
	.fl-node-<?php echo esc_attr($id); ?> .spa-magic-wind-wrapper {
		background: <?php echo sanitize_text_field( FLBuilderColor::hex_or_rgb( $settings->bg_color ) ); ?> !important;
	}
	<?php
endif;

// Display
if ( ! empty( $settings->display ) ) : ?>
	.fl-node-<?php echo esc_attr($id); ?> .spa-magic-wind-wrapper {
		display: <?php echo sanitize_text_field( $settings->display ); ?>;
	}
	<?php
endif;

// Title Alignment
if ( ! empty( $settings->position ) ) : ?>
	.fl-node-<?php echo esc_attr($id); ?> .spa-magic-wind-wrapper {
		position: <?php echo sanitize_text_field( $settings->position ); ?>;
	}
	<?php
endif;

// Dimension
FLBuilderCSS::dimension_field_rule( array(
	'settings'     => $settings,
	'setting_name' => 'position_dimension',
	'selector'     => ".fl-node-$id .spa-magic-wind-wrapper",
	'props'        => array(
		'top'    => 'position_dimension_top',
		'right'  => 'position_dimension_right',
		'bottom' => 'position_dimension_bottom',
		'left'   => 'position_dimension_left',
	),
) );