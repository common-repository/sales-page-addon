<?php
/**
 * Sales Page Addons - Title module frontend output
 * Author & Copyright: NicheAddon
 *
 * $module An instance of module class.
 * $settings The module's settings.
 */

// Settings
$text_tag = !empty($settings->text_tag) ? $settings->text_tag : 'div';
$type     = !empty($settings->display_type) ? $settings->display_type : '';
$text     = !empty($settings->text) ? $settings->text : '';
$image    = !empty($settings->image) ? $settings->image : '';
$image_url = $image ? wp_get_attachment_url( $image ) : '';
?>
<div class="spa-magic-wind-wrapper">
  <<?php echo esc_attr($text_tag); ?> class="<?php echo esc_attr($module->get_classname()); ?>">
    <?php if($type == 'image' && $image_url): ?>
      <img src="<?php echo esc_url($image_url); ?>" alt="icon-image">
    <?php else: ?>
      <?php echo wp_kses_post($text); ?>
    <?php endif; ?>
  </<?php echo esc_attr($text_tag); ?>>
</div>