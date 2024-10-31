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
$icon       = !empty( $settings->icon ) ? $settings->icon : '';
$image      = !empty( $settings->image ) ? $settings->image : '';
$view       = !empty( $settings->view ) ? $settings->view : '';
$shape      = !empty( $settings->shape ) ? $settings->shape : '';
$box_style  = !empty( $settings->box_style ) ? $settings->box_style : '';
$position   = !empty( $settings->position ) ? $settings->position : '';
$horizontal_alignment  = !empty( $settings->horizontal_alignment ) ? $settings->horizontal_alignment : 'default';
$vertical_alignment   = !empty( $settings->vertical_alignment ) ? $settings->vertical_alignment : '';
$icon_order = !empty( $settings->icon_order ) ? $settings->icon_order : '';
$icon_type  = !empty( $settings->icon_type ) ? $settings->icon_type : '';
$icon_title = !empty( $settings->icon_title ) ? $settings->icon_title : '';
$sub_title  = !empty( $settings->sub_title ) ? $settings->sub_title : '';

if ($icon_type === 'image') {
  $image_url = wp_get_attachment_url( $image );
  $image = $image_url ? '<img src="'.esc_url($image_url).'" alt="icon-image">' : '';
  $final_icon = $image;
} else {
  $icon = $icon ? '<i class="'.esc_attr($icon).'" aria-hidden="true"></i>' : '';
  $final_icon = $icon;
} 

?>
<div class="spa-beaver-module-container">
  <div class="spa-icon-box-style-<?php echo esc_attr($box_style); ?> spa-icon-view-<?php echo esc_attr($view); ?> spa-icon-shape-<?php echo esc_attr($shape); ?> spa-icon-position-<?php echo esc_attr($position); ?> spa-icon-vertical-align-<?php echo esc_attr($vertical_alignment); ?> spa-icon-horizontal-align-<?php echo esc_attr($horizontal_alignment); ?> spa-icon-<?php echo esc_attr($icon_order); ?> spa-icon-box">
    
      <div class="spa-icon-box-wrapper">
        <?php if($final_icon) : ?>
        <div class="spa-icon-box-icon">
          <span class="spa-icon">
            <?php echo $final_icon; ?>
          </span>
        </div>
        <?php endif; if($icon_title || $sub_title) : ?>
        <div class="spa-icon-box-content">
          <?php if($icon_title) : ?>
          <div class="spa-icon-box-title-wrapper">
            <div class="spa-icon-box-title">
              <?php echo wp_kses_post( $icon_title ); ?>
            </div>
          </div>
          <?php endif; if($sub_title) : ?>
          <div class="spa-icon-box-description"><?php echo wp_kses_post( $sub_title ); ?></div>
          <?php endif; ?>
        </div>
        <?php endif; ?>
      </div>
    
  </div>
</div>