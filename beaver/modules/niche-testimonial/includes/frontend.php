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
$style = !empty( $settings->style ) ? $settings->style : '';
$name = !empty( $settings->name ) ? $settings->name : '';
$location = !empty( $settings->location ) ? $settings->location : '';
$star_rating = !empty( $settings->star_rating ) ? $settings->star_rating : '';
$image = !empty( $settings->image ) ? $settings->image : '';
$quote_image_url = !empty( $settings->quote_image_url ) ? $settings->quote_image_url : '';
$content = !empty( $settings->content ) ? $settings->content : '';

$image_url = $image ? wp_get_attachment_url( $image ) : '';
$quote_image_url = $quote_image_url ? wp_get_attachment_url( $quote_image_url ) : '';

if ($style === 'four') {
  $style_cls = ' style-four';
} elseif ($style === 'three') {
  $style_cls = ' style-three';
} elseif ($style === 'two') {
  $style_cls = ' style-two';
} else {
  $style_cls = ' style-one';
}
?>
<div class="niche-testimonial-item<?php echo esc_attr($style_cls); ?>">
  <?php if ($style === 'four') { ?>
    <div class="niche-testimonial-middle-part">
      <div class="niche-testimonial-top-part-left">
        <div class="niche-testimonial-quote-symbol">
          <?php if($quote_image_url) : ?>
          <img src="<?php echo esc_url($quote_image_url); ?>" alt="Image">
          <?php endif; ?>
        </div>
      </div>
      <div class="niche-testimonial-top-part-right">
        <div class="niche-testimonial-content"><?php echo wp_kses_post( $content ); ?></div>
      </div>
    </div>
    <div class="niche-testimonial-top-part">
      <div class="niche-testimonial-top-part-left">
        <div class="niche-testimonial-image">
          <img src="<?php echo esc_url($image_url); ?>" alt="Image">
        </div>
      </div>
      <div class="niche-testimonial-top-part-right">
        <div class="niche-testimonial-title">
          <h3 class="niche-testimonial-name"><?php echo esc_attr($name); ?></h3>
          <div class="niche-testimonial-location"><?php echo esc_attr($location); ?></div> 
          <div class="niche-testimonial-star-rating">
          <?php if($star_rating) : ?>
            <span class="niche-testimonial-star-rating-item">
              <?php 
              $star_rating = round($star_rating); 
              $star_rating_o = (5 - $star_rating); 
              for ($i = 0; $i < $star_rating; $i++) { ?>
                <i aria-hidden="true" class="fas fa-star"></i>
              <?php }
              if($star_rating_o) {
              for ($i = 0; $i < $star_rating_o; $i++) { ?>
                <i aria-hidden="true" class="far fa-star"></i>
              <?php } } ?>
            </span>
          <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  <?php } elseif ($style === 'three') { ?>
    <div class="niche-testimonial-top-part">
      <div class="niche-testimonial-top-part-left">
        <div class="niche-testimonial-image">
          <img src="<?php echo esc_url($image_url); ?>" alt="Image">
        </div>
        <div class="niche-testimonial-title">
          <h3 class="niche-testimonial-name"><?php echo esc_attr($name); ?></h3>
          <div class="niche-testimonial-location"><?php echo esc_attr($location); ?></div> 
        </div>
      </div>
      <div class="niche-testimonial-top-part-right">
        <div class="niche-testimonial-star-rating">
          <?php if($star_rating) : ?>
            <span class="niche-testimonial-star-rating-item"><?php echo esc_attr($star_rating); ?> <i aria-hidden="true" class="fas fa-star"></i></span>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="niche-testimonial-middle-part">
      <div class="niche-testimonial-content"><?php echo wp_kses_post( $content ); ?></div>
    </div>
  <?php } elseif ($style === 'two') { ?>
    <div class="niche-testimonial-top-part">
      <div class="niche-testimonial-top-part-left">
        <div class="niche-testimonial-image">
          <img src="<?php echo esc_url($image_url); ?>" alt="Image">
        </div>
        <div class="niche-testimonial-title">
          <h3 class="niche-testimonial-name"><?php echo esc_attr($name); ?></h3>
          <div class="niche-testimonial-location"><?php echo esc_attr($location); ?></div> 
        </div>
      </div>
      <div class="niche-testimonial-top-part-right">
        <div class="niche-testimonial-quote-symbol">
          <?php if($quote_image_url) : ?>
          <img src="<?php echo esc_url($quote_image_url); ?>" alt="Image">
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="niche-testimonial-middle-part">
      <div class="niche-testimonial-content"><?php echo wp_kses_post( $content ); ?></div>
    </div>
  <?php } else { ?>
    <div class="niche-testimonial-top-part">
      <div class="niche-testimonial-title">
        <h3 class="niche-testimonial-name"><?php echo esc_attr($name); ?></h3>
        <div class="niche-testimonial-location"><?php echo esc_attr($location); ?></div> 
      </div>
      <div class="niche-testimonial-image">
        <img src="<?php echo esc_url($image_url); ?>" alt="Image">
      </div>
    </div>
    <div class="niche-testimonial-middle-part">
      <div class="niche-testimonial-content"><?php echo wp_kses_post( $content ); ?></div>
    </div>
    <div class="niche-testimonial-bottom-part">
      <div class="niche-testimonial-meta">
        <div class="niche-testimonial-icons">
          <ul>
            <li><i aria-hidden="true" class="fas fa-thumbs-up"></i></li>
            <li><i aria-hidden="true" class="fas fa-thumbs-down"></i></li>
            <li><i aria-hidden="true" class="fas fa-comment-alt"></i></li>
          </ul>
        </div>
      </div>
    </div>
  <?php } ?>
</div>