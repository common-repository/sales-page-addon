<?php

/**
 * This file should be used to render each module instance.
 * You have access to two variables in this file: 
 * 
 * $module An instance of your module class.
 * $settings The module's settings.
 *
 * Example: 
 */

// Settings
$contact_title = !empty( $settings->contact_title ) ? $settings->contact_title : '';
$contact_form = !empty( $settings->contact_form ) ? $settings->contact_form : '';
$form_style = !empty( $settings->form_style ) ? $settings->form_style : '';
$col_spacing = !empty( $settings->col_spacing ) ? $settings->col_spacing : '';
?>

<div class="spa-form-wrapper">
  <div class="spa-form <?php echo esc_attr($form_style); ?> <?php echo esc_attr($col_spacing); ?>">
    <?php echo do_shortcode( $contact_form );?>
  </div>
</div>
