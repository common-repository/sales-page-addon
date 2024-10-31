<?php 
// Name Color
if ( ! empty( $settings->name_color ) ) : ?>
	.fl-node-<?php echo $id; ?> .niche-testimonial-item .niche-testimonial-name {
		color: <?php echo FLBuilderColor::hex_or_rgb( $settings->name_color ); ?>;
	}
	<?php
endif;

// Name Typography
FLBuilderCSS::typography_field_rule( array(
	'selector'     => ".fl-node-$id .niche-testimonial-item .niche-testimonial-name",
	'setting_name' => 'name_typography',
	'settings'     => $settings,
) );

// location Color
if ( ! empty( $settings->location_color ) ) : ?>
	.fl-node-<?php echo $id; ?> .niche-testimonial-item .niche-testimonial-location {
		color: <?php echo FLBuilderColor::hex_or_rgb( $settings->location_color ); ?>;
	}
	<?php
endif;

// location Typography
FLBuilderCSS::typography_field_rule( array(
	'selector'     => ".fl-node-$id .niche-testimonial-item .niche-testimonial-location",
	'setting_name' => 'location_typography',
	'settings'     => $settings,
) );

// content Color
if ( ! empty( $settings->content_color ) ) : ?>
	.fl-node-<?php echo $id; ?> .niche-testimonial-item .niche-testimonial-content {
		color: <?php echo FLBuilderColor::hex_or_rgb( $settings->content_color ); ?>;
	}
	<?php
endif;

// content Typography
FLBuilderCSS::typography_field_rule( array(
	'selector'     => ".fl-node-$id .niche-testimonial-item .niche-testimonial-content",
	'setting_name' => 'content_typography',
	'settings'     => $settings,
) );