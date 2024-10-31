<?php

/**
 * List module.
 */

// Settings
$list = !empty( $settings->list ) ? $settings->list : '';
$icon_type = !empty( $settings->icon_type ) ? $settings->icon_type : '';
$icon = !empty( $settings->icon ) ? $settings->icon : '';
$image = !empty( $settings->image ) ? $settings->image : '';

$image_url = wp_get_attachment_url( $image );

?>
<div class="niche-list-wrap">
  <ul class="niche-list">
    <?php 
    if ( is_array( $list ) && !empty( $list ) ){
      foreach ( $list as $each_list ) { ?>
        <li>
          <?php if($icon_type === 'image' && $image_url): ?>
          <span class="list-icon"><img src="<?php echo esc_url($image_url); ?>" alt="Image"></span><?php echo esc_attr($each_list); ?>
          <?php else: ?>
          <span class="list-icon"><i class="<?php echo esc_attr($icon); ?>" aria-hidden="true"></i></span><?php echo esc_attr($each_list); ?>
          <?php endif; ?>
        </li>
        <?php
      }
    } ?>
  </ul>
</div>
