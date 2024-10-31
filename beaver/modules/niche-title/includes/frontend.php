<?php
/**
 * Sales Page Addons - Title module frontend output
 * Author & Copyright: NicheAddon
 *
 * $module An instance of module class.
 * $settings The module's settings.
 */

// Settings
$title_tag = !empty($settings->title_tag) ? $settings->title_tag : 'h2';
$first_part_title = !empty($settings->first_part_title) ? $settings->first_part_title : '';
$middle_part_title = !empty($settings->middle_part_title) ? $settings->middle_part_title : '';
$last_part_title = !empty($settings->last_part_title) ? $settings->last_part_title : '';
$middle_style = !empty($settings->middle_style) ? 'middle-part-style-' . $settings->middle_style : 'middle-part-style-none';
?>
<div class="spa-title-wrapper">
  <<?php echo esc_attr($title_tag); ?> class="spa-title"><span class="first-part"><?php echo wp_kses_post($first_part_title); ?></span><span class="middle-part <?php echo esc_attr($middle_style); ?>"><?php echo wp_kses_post($middle_part_title); ?></span><span class="last-part"><?php echo wp_kses_post($last_part_title); ?></span></<?php echo esc_attr($title_tag); ?>>
</div>
