<?php 

// Form Padding
FLBuilderCSS::dimension_field_rule( array(
	'settings'     => $settings,
	'setting_name' => 'form_padding',
	'selector'     => ".fl-node-$id .spa-form input[type='text'], .fl-node-$id .spa-form input[type='email'], .fl-node-$id .spa-form input[type='password'], .post-password-form input[type='password'], .fl-node-$id .spa-form input[type='tel'], .fl-node-$id .spa-form input[type='search'], .fl-node-$id .spa-form input[type='date'], .fl-node-$id .spa-form input[type='time'], .fl-node-$id .spa-form input[type='datetime-local'], .fl-node-$id .spa-form input[type='event-month'], .fl-node-$id .spa-form input[type='url'], .fl-node-$id .spa-form input[type='number'], .fl-node-$id .spa-form textarea, .fl-node-$id .spa-form select",
	'unit'         => 'px',
	'props'        => array(
		'padding-top'    => 'form_padding_top',
		'padding-right'  => 'form_padding_right',
		'padding-bottom' => 'form_padding_bottom',
		'padding-left'   => 'form_padding_left',
	),
) );

// Form Margin
FLBuilderCSS::dimension_field_rule( array(
	'settings'     => $settings,
	'setting_name' => 'form_margin',
	'selector'     => ".fl-node-$id .spa-form input[type='text'], .fl-node-$id .spa-form input[type='email'], .fl-node-$id .spa-form input[type='password'], .post-password-form input[type='password'], .fl-node-$id .spa-form input[type='tel'], .fl-node-$id .spa-form input[type='search'], .fl-node-$id .spa-form input[type='date'], .fl-node-$id .spa-form input[type='time'], .fl-node-$id .spa-form input[type='datetime-local'], .fl-node-$id .spa-form input[type='event-month'], .fl-node-$id .spa-form input[type='url'], .fl-node-$id .spa-form input[type='number'], .fl-node-$id .spa-form textarea, .fl-node-$id .spa-form select",
	'unit'         => 'px',
	'props'        => array(
		'margin-top'    => 'form_margin_top',
		'margin-right'  => 'form_margin_right',
		'margin-bottom' => 'form_margin_bottom',
		'margin-left'   => 'form_margin_left',
	),
) );

// Form Typography
FLBuilderCSS::typography_field_rule( array(
	'selector'     => ".fl-node-$id .spa-form input[type='text'], .fl-node-$id .spa-form input[type='email'], .fl-node-$id .spa-form input[type='password'], .post-password-form input[type='password'], .fl-node-$id .spa-form input[type='tel'], .fl-node-$id .spa-form input[type='search'], .fl-node-$id .spa-form input[type='date'], .fl-node-$id .spa-form input[type='time'], .fl-node-$id .spa-form input[type='datetime-local'], .fl-node-$id .spa-form input[type='event-month'], .fl-node-$id .spa-form input[type='url'], .fl-node-$id .spa-form input[type='number'], .fl-node-$id .spa-form textarea, .fl-node-$id .spa-form select, .fl-node-$id .spa-form select, .fl-node-$id .spa-form p, .fl-node-$id .spa-form label, .fl-node-$id .spa-form input[type='submit']",
	'setting_name' => 'form_typography',
	'settings'     => $settings,
) );

// Form Label Typography
FLBuilderCSS::typography_field_rule( array(
	'selector'     => ".fl-node-$id .spa-form label",
	'setting_name' => 'form_label_typography',
	'settings'     => $settings,
) );

// Form Color
if ( ! empty( $settings->placeholder_color ) ) : ?>
	.fl-node-<?php echo esc_attr($id); ?> ::-webkit-input-placeholder {
		color: <?php echo sanitize_text_field( FLBuilderColor::hex_or_rgb( $settings->placeholder_color ) ); ?> !important;
	}
	.fl-node-<?php echo esc_attr($id); ?> ::-moz-placeholder {
		color: <?php echo sanitize_text_field( FLBuilderColor::hex_or_rgb( $settings->placeholder_color ) ); ?> !important;
	}
	.fl-node-<?php echo esc_attr($id); ?> ::-ms-input-placeholder {
		color: <?php echo sanitize_text_field( FLBuilderColor::hex_or_rgb( $settings->placeholder_color ) ); ?> !important;
	}
	.fl-node-<?php echo esc_attr($id); ?> ::placeholder {
		color: <?php echo sanitize_text_field( FLBuilderColor::hex_or_rgb( $settings->placeholder_color ) ); ?> !important;
	}
	<?php
endif;

// Form Color
if ( ! empty( $settings->form_color ) ) : ?>
	.fl-node-<?php echo esc_attr($id); ?> .spa-form input[type='text'], .fl-node-<?php echo esc_attr($id); ?> .spa-form input[type='email'], .fl-node-<?php echo esc_attr($id); ?> .spa-form input[type='password'], .post-password-form input[type='password'], .fl-node-<?php echo esc_attr($id); ?> .spa-form input[type='tel'], .fl-node-<?php echo esc_attr($id); ?> .spa-form input[type='search'], .fl-node-<?php echo esc_attr($id); ?> .spa-form input[type='date'], .fl-node-<?php echo esc_attr($id); ?> .spa-form input[type='time'], .fl-node-<?php echo esc_attr($id); ?> .spa-form input[type='datetime-local'], .fl-node-<?php echo esc_attr($id); ?> .spa-form input[type='event-month'], .fl-node-<?php echo esc_attr($id); ?> .spa-form input[type='url'], .fl-node-<?php echo esc_attr($id); ?> .spa-form input[type='number'], .fl-node-<?php echo esc_attr($id); ?> .spa-form textarea, .fl-node-<?php echo esc_attr($id); ?> .spa-form select {
		color: <?php echo sanitize_text_field(FLBuilderColor::hex_or_rgb( $settings->form_color )); ?>;
	}
	<?php
endif;

// Form Background Color
if ( ! empty( $settings->form_bg_color ) ) : ?>
	.fl-node-<?php echo esc_attr($id); ?> .spa-form input[type='text'], .fl-node-<?php echo esc_attr($id); ?> .spa-form input[type='email'], .fl-node-<?php echo esc_attr($id); ?> .spa-form input[type='password'], .post-password-form input[type='password'], .fl-node-<?php echo esc_attr($id); ?> .spa-form input[type='tel'], .fl-node-<?php echo esc_attr($id); ?> .spa-form input[type='search'], .fl-node-<?php echo esc_attr($id); ?> .spa-form input[type='date'], .fl-node-<?php echo esc_attr($id); ?> .spa-form input[type='time'], .fl-node-<?php echo esc_attr($id); ?> .spa-form input[type='datetime-local'], .fl-node-<?php echo esc_attr($id); ?> .spa-form input[type='event-month'], .fl-node-<?php echo esc_attr($id); ?> .spa-form input[type='url'], .fl-node-<?php echo esc_attr($id); ?> .spa-form input[type='number'], .fl-node-<?php echo esc_attr($id); ?> .spa-form textarea, .fl-node-<?php echo esc_attr($id); ?> .spa-form select {
		background: <?php echo sanitize_text_field(FLBuilderColor::hex_or_rgb( $settings->form_bg_color )); ?>;
	}
	<?php
endif;

// Form Border
FLBuilderCSS::border_field_rule( array(
	'settings'     => $settings,
	'setting_name' => 'form_border',
	'selector'     => "body .fl-node-$id .spa-form input[type='text'], body .fl-node-$id .spa-form input[type='email'], body .fl-node-$id .spa-form input[type='password'], .post-password-form input[type='password'], body .fl-node-$id .spa-form input[type='tel'], body .fl-node-$id .spa-form input[type='search'], body .fl-node-$id .spa-form input[type='date'], body .fl-node-$id .spa-form input[type='time'], body .fl-node-$id .spa-form input[type='datetime-local'], body .fl-node-$id .spa-form input[type='event-month'], body .fl-node-$id .spa-form input[type='url'], body .fl-node-$id .spa-form input[type='number'], body .fl-node-$id .spa-form textarea, .fl-node-$id .spa-form select, .fl-node-$id .spa-form.style-2 .spa-sub-form-left input[type='email']",
) );

// Button Padding
FLBuilderCSS::dimension_field_rule( array(
	'settings'     => $settings,
	'setting_name' => 'btn_padding',
	'selector'     => "body .fl-node-$id .spa-form input[type='submit']",
	'unit'         => 'px',
	'props'        => array(
		'padding-top'    => 'btn_padding_top',
		'padding-right'  => 'btn_padding_right',
		'padding-bottom' => 'btn_padding_bottom',
		'padding-left'   => 'btn_padding_left',
	),
) );

// Button Margin
FLBuilderCSS::dimension_field_rule( array(
	'settings'     => $settings,
	'setting_name' => 'btn_margin',
	'selector'     => "body .fl-node-$id .spa-form input[type='submit']",
	'unit'         => 'px',
	'props'        => array(
		'margin-top'    => 'btn_margin_top',
		'margin-right'  => 'btn_margin_right',
		'margin-bottom' => 'btn_margin_bottom',
		'margin-left'   => 'btn_margin_left',
	),
) );

// Button Height
if ( ! empty( $settings->form_padding ) ) : ?>
	.fl-node-<?php echo esc_attr($id); ?> .spa-form input[type='submit'] {
		height: auto !important;
	}
	<?php
endif;

// Button Typography
FLBuilderCSS::typography_field_rule( array(
	'selector'     => "body .fl-node-$id .spa-form input[type='submit']",
	'setting_name' => 'btn_typography',
	'settings'     => $settings,
) );

// Button Color
if ( ! empty( $settings->btn_color ) ) : ?>
	.fl-node-<?php echo esc_attr($id); ?> .spa-form input[type='submit'] {
		color: <?php echo sanitize_text_field(FLBuilderColor::hex_or_rgb( $settings->btn_color )); ?>;
	}
	<?php
endif;

// Button Background Color
if ( ! empty( $settings->btn_bg_color ) ) : ?>
	.fl-node-<?php echo esc_attr($id); ?> .spa-form input[type='submit'] {
		background: <?php echo sanitize_text_field(FLBuilderColor::hex_or_rgb( $settings->btn_bg_color )); ?>;
	}
	<?php
endif;

// Button Border
FLBuilderCSS::border_field_rule( array(
	'settings'     => $settings,
	'setting_name' => 'btn_border',
	'selector'     => "body .fl-node-$id .spa-form input[type='submit']",
) );

// Button hover Color
if ( ! empty( $settings->btn_hover_color ) ) : ?>
	.fl-node-<?php echo esc_attr($id); ?> .spa-form input[type='submit']:hover {
		color: <?php echo sanitize_text_field(FLBuilderColor::hex_or_rgb( $settings->btn_hover_color )); ?>;
	}
	<?php
endif;

// Button Background Hover Color
if ( ! empty( $settings->btn_hover_bg_color ) ) : ?>
	.fl-node-<?php echo esc_attr($id); ?> .spa-form input[type='submit']:hover {
		background: <?php echo sanitize_text_field(FLBuilderColor::hex_or_rgb( $settings->btn_hover_bg_color )); ?>;
	}
	<?php
endif;

// Button Hover Border
FLBuilderCSS::border_field_rule( array(
	'settings'     => $settings,
	'setting_name' => 'btn_hover_border',
	'selector'     => "body .fl-node-$id .spa-form input[type='submit']:hover",
) );