<?php 
/**
* Sales Page Addons - Title module css processor
* Author & Copyright: NicheAddon
*/

// Title Padding
FLBuilderCSS::dimension_field_rule( array(
	'settings'     => $settings,
	'setting_name' => 'title_padding',
	'selector'     => ".fl-node-$id .spa-title",
	'unit'         => 'px',
	'props'        => array(
		'padding-top'    => 'title_padding_top',
		'padding-right'  => 'title_padding_right',
		'padding-bottom' => 'title_padding_bottom',
		'padding-left'   => 'title_padding_left',
	),
) );

// Title Margin
FLBuilderCSS::dimension_field_rule( array(
	'settings'     => $settings,
	'setting_name' => 'title_margin',
	'selector'     => ".fl-node-$id .spa-title",
	'unit'         => 'px',
	'props'        => array(
		'margin-top'    => 'title_margin_top',
		'margin-right'  => 'title_margin_right',
		'margin-bottom' => 'title_margin_bottom',
		'margin-left'   => 'title_margin_left',
	),
) );

// Title Color
if ( ! empty( $settings->title_color ) ) : ?>
	.fl-node-<?php echo esc_attr($id); ?> .spa-title {
		color: <?php echo sanitize_text_field( FLBuilderColor::hex_or_rgb( $settings->title_color ) ); ?>;
	}
	<?php
endif;

// Alignment
FLBuilderCSS::responsive_rule( array(
	'settings'     => $settings,
	'setting_name' => 'title_alignment',
	'selector'     => ".fl-node-$id .spa-title-wrapper",
	'prop'         => 'text-align',
) );

// Title Typography
FLBuilderCSS::typography_field_rule( array(
	'selector'     => ".fl-node-$id .spa-title",
	'setting_name' => 'title_typography',
	'settings'     => $settings,
) );

// 1st Title Typography
FLBuilderCSS::typography_field_rule( array(
	'selector'     => ".fl-node-$id .spa-title span.first-part",
	'setting_name' => 'first_part_font_family',
	'settings'     => $settings,
) );

// 1st Title Color
if ( ! empty( $settings->first_part_color ) ) : ?>
	.fl-node-<?php echo esc_attr($id); ?> .spa-title span.first-part {
		color: <?php echo sanitize_text_field( FLBuilderColor::hex_or_rgb( $settings->first_part_color ) ); ?>;
	}
	<?php
endif;

// Middle Title Padding
FLBuilderCSS::dimension_field_rule( array(
	'settings'     => $settings,
	'setting_name' => 'middle_title_padding',
	'selector'     => ".fl-node-$id .spa-title span.middle-part",
	'unit'         => 'px',
	'props'        => array(
		'padding-top'    => 'middle_title_padding_top',
		'padding-right'  => 'middle_title_padding_right',
		'padding-bottom' => 'middle_title_padding_bottom',
		'padding-left'   => 'middle_title_padding_left',
	),
) );

// Middle Title Margin
FLBuilderCSS::dimension_field_rule( array(
	'settings'     => $settings,
	'setting_name' => 'middle_title_margin',
	'selector'     => ".fl-node-$id .spa-title span.middle-part",
	'unit'         => 'px',
	'props'        => array(
		'margin-top'    => 'middle_title_margin_top',
		'margin-right'  => 'middle_title_margin_right',
		'margin-bottom' => 'middle_title_margin_bottom',
		'margin-left'   => 'middle_title_margin_left',
	),
) );

// Middle Title Color
if ( ! empty( $settings->middle_part_color ) ) : ?>
	.fl-node-<?php echo esc_attr($id); ?> .spa-title span.middle-part {
		color: <?php echo sanitize_text_field( FLBuilderColor::hex_or_rgb( $settings->middle_part_color ) ); ?>;
	}
	<?php
endif;

// Middle Title BG Color
if ( ! empty( $settings->middle_part_bg_color ) ) : ?>
	.fl-node-<?php echo esc_attr($id); ?> .spa-title span.middle-part::after {
		background-color: <?php echo sanitize_text_field( FLBuilderColor::hex_or_rgb( $settings->middle_part_bg_color ) ); ?>;
	}
	<?php
endif;

// Middle Title Curve BG Color
if ( ! empty( $settings->middle_part_curve_bg_color ) ) : ?>
	.fl-node-<?php echo esc_attr($id); ?> .spa-title span.middle-part-style-curve-css3::after {
		background-color: <?php echo sanitize_text_field( FLBuilderColor::hex_or_rgb( $settings->middle_part_curve_bg_color ) ); ?>;
	}
	<?php
endif;

// Middle Title Curve BG Polygon Color
if ( ! empty( $settings->middle_part_clip_path ) ) : ?>
	.fl-node-<?php echo esc_attr($id); ?> .spa-title span.middle-part-style-curve-css3::after {
		clip-path: polygon(<?php echo sanitize_text_field( FLBuilderColor::hex_or_rgb( $settings->middle_part_clip_path ) ); ?>);
	}
	<?php
endif;

// Middle Title Typography
FLBuilderCSS::typography_field_rule( array(
	'selector'     => ".fl-node-$id .spa-title span.middle-part",
	'setting_name' => 'middle_part_font_family',
	'settings'     => $settings,
) );

// Last Title Typography
FLBuilderCSS::typography_field_rule( array(
	'selector'     => ".fl-node-$id .spa-title span.last-part",
	'setting_name' => 'last_part_font_family',
	'settings'     => $settings,
) );

// Last Title Color
if ( ! empty( $settings->last_part_color ) ) : ?>
	.fl-node-<?php echo esc_attr($id); ?> .spa-title span.last-part {
		color: <?php echo sanitize_text_field( FLBuilderColor::hex_or_rgb( $settings->last_part_color ) ); ?>;
	}
	<?php
endif;