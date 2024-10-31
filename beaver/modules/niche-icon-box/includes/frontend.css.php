<?php 
// Icon Space
FLBuilderCSS::dimension_field_rule( array(
	'settings'     => $settings,
	'setting_name' => 'icon_spacing',
	'selector'     => ".fl-node-$id .spa-icon-box .spa-icon",
	'unit'         => 'px',
	'props'        => array(
		'margin-top'    => 'icon_spacing_top',
		'margin-right'  => 'icon_spacing_right',
		'margin-bottom' => 'icon_spacing_bottom',
		'margin-left'   => 'icon_spacing_left',
	),
) );

// Icon Width
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .spa-icon-box .spa-icon",
	'props'    => array(
		'width' => array(
			'value' => $settings->icon_width_height,
			'unit'  => 'px',
		),
		'height' => array(
			'value' => $settings->icon_width_height,
			'unit'  => 'px',
		),
	),
) );

// Icon Line Height
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .spa-icon-box .spa-icon i",
	'props'    => array(
		'line-height' => array(
			'value' => $settings->icon_width_height,
			'unit'  => 'px',
		),
	),
) );

// Icon Color
if ( ! empty( $settings->icon_color ) ) : ?>
	.fl-node-<?php echo esc_attr($id); ?> .spa-icon-box .spa-icon {
		color: <?php echo sanitize_text_field( FLBuilderColor::hex_or_rgb( $settings->icon_color ) ); ?>;
	}
	<?php
endif;

// Icon Background
if ( ! empty( $settings->bg_color ) ) : ?>
	.fl-node-<?php echo esc_attr($id); ?> .spa-icon-box .spa-icon {
		background: <?php echo sanitize_text_field( FLBuilderColor::hex_or_rgb( $settings->bg_color ) ); ?>;
	}
	<?php
endif;

// Icon Border
FLBuilderCSS::border_field_rule( array(
	'settings'     => $settings,
	'setting_name' => 'icon_border',
	'selector'     => ".fl-node-$id .spa-icon-box .spa-icon",
) );

// Icon Size
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .spa-icon-box .spa-icon i",
	'props'    => array(
		'font-size' => array(
			'value' => $settings->icon_size,
			'unit'  => 'px',
		),
	),
) );

// Icon Hover Color
if ( ! empty( $settings->icon_hover_color ) ) : ?>
	.fl-node-<?php echo esc_attr($id); ?> .spa-icon-box:hover .spa-icon {
		color: <?php echo sanitize_text_field( FLBuilderColor::hex_or_rgb( $settings->icon_hover_color ) ); ?>;
	}
	<?php
endif;

// Icon Hover Background
if ( ! empty( $settings->bg_hover_color ) ) : ?>
	.fl-node-<?php echo esc_attr($id); ?> .spa-icon-box:hover .spa-icon {
		background: <?php echo sanitize_text_field( FLBuilderColor::hex_or_rgb( $settings->bg_hover_color ) ); ?>;
	}
	<?php
endif;

// Icon Hover Border
FLBuilderCSS::border_field_rule( array(
	'settings'     => $settings,
	'setting_name' => 'icon_hover_border',
	'selector'     => ".fl-node-$id .spa-icon-box:hover .spa-icon",
) );

// Title Padding
FLBuilderCSS::dimension_field_rule( array(
	'settings'     => $settings,
	'setting_name' => 'title_padding',
	'selector'     => ".fl-node-$id .spa-icon-box-title",
	'unit'         => 'px',
	'props'        => array(
		'padding-top'    => 'title_padding_top',
		'padding-right'  => 'title_padding_right',
		'padding-bottom' => 'title_padding_bottom',
		'padding-left'   => 'title_padding_left',
	),
) );

// Title Color
if ( ! empty( $settings->title_color ) ) : ?>
	.fl-node-<?php echo esc_attr($id); ?> .spa-icon-box-title {
		color: <?php echo sanitize_text_field( FLBuilderColor::hex_or_rgb( $settings->title_color ) ); ?>;
	}
	<?php
endif;

// Title Typography
FLBuilderCSS::typography_field_rule( array(
	'selector'     => ".fl-node-$id .spa-icon-box-title",
	'setting_name' => 'title_typography',
	'settings'     => $settings,
) );

// Content Padding
FLBuilderCSS::dimension_field_rule( array(
	'settings'     => $settings,
	'setting_name' => 'content_padding',
	'selector'     => ".fl-node-$id .spa-icon-box-description",
	'unit'         => 'px',
	'props'        => array(
		'padding-top'    => 'content_padding_top',
		'padding-right'  => 'content_padding_right',
		'padding-bottom' => 'content_padding_bottom',
		'padding-left'   => 'content_padding_left',
	),
) );

// Content Color
if ( ! empty( $settings->content_color ) ) : ?>
	.fl-node-<?php echo esc_attr($id); ?> .spa-icon-box-description {
		color: <?php echo sanitize_text_field( FLBuilderColor::hex_or_rgb( $settings->content_color ) ); ?>;
	}
	<?php
endif;

// Content Typography
FLBuilderCSS::typography_field_rule( array(
	'selector'     => ".fl-node-$id .spa-icon-box-description",
	'setting_name' => 'content_typography',
	'settings'     => $settings,
) );