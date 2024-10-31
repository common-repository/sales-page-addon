<?php 
// Icon Space
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id ul.niche-list li img, .fl-node-$id ul.niche-list li i",
	'props'    => array(
		'top' => array(
			'value' => $settings->icon_spacing,
			'unit'  => 'px',
		),
	),
) );

// Icon Color
if ( ! empty( $settings->icon_color ) ) : ?>
	.fl-node-<?php echo esc_attr($id); ?> ul.niche-list li i {
		color: <?php echo sanitize_text_field( FLBuilderColor::hex_or_rgb( $settings->icon_color ) ); ?>;
	}
	<?php
endif;

// Icon Size
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id ul.niche-list li i",
	'props'    => array(
		'font-size' => array(
			'value' => $settings->icon_size,
			'unit'  => 'px',
		),
	),
) );

// Image Size
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id ul.niche-list li img",
	'props'    => array(
		'width' => array(
			'value' => $settings->image_size,
			'unit'  => 'px',
		),
	),
) );

// List Padding
FLBuilderCSS::dimension_field_rule( array(
	'settings'     => $settings,
	'setting_name' => 'content_padding',
	'selector'     => ".fl-node-$id ul.niche-list li",
	'unit'         => 'px',
	'props'        => array(
		'padding-top'    => 'content_padding_top',
		'padding-right'  => 'content_padding_right',
		'padding-bottom' => 'content_padding_bottom',
		'padding-left'   => 'content_padding_left',
	),
) );

// List Color
if ( ! empty( $settings->content_color ) ) : ?>
	.fl-node-<?php echo esc_attr($id); ?> ul.niche-list li {
		color: <?php echo sanitize_text_field( FLBuilderColor::hex_or_rgb( $settings->content_color )); ?>;
	}
	<?php
endif;

// List Typography
FLBuilderCSS::typography_field_rule( array(
	'selector'     => ".fl-node-$id ul.niche-list li",
	'setting_name' => 'content_typography',
	'settings'     => $settings,
) );

// List Alignment
if ( ! empty( $settings->title_alignment ) ) : ?>
	.fl-node-<?php echo esc_attr($id); ?> .ul.niche-list {
		text-align: <?php echo sanitize_text_field( $settings->title_alignment ); ?>;
	}
	<?php
endif;