<?php

// accordion - Checkbox
if ( ! function_exists( 'sales_page_accordion_render' ) ) {
  function sales_page_accordion_render() {
    $options = get_option( 'spa_pw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='spa_pw_settings[sales_page_accordion]' id='sales_page_accordion-id' <?php checked( isset($options['sales_page_accordion']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// button - Checkbox
if ( ! function_exists( 'sales_page_button_render' ) ) {
  function sales_page_button_render() {
    $options = get_option( 'spa_pw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='spa_pw_settings[sales_page_button]' id='sales_page_button-id' <?php checked( isset($options['sales_page_button']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// coupon - Checkbox
if ( ! function_exists( 'sales_page_coupon_render' ) ) {
  function sales_page_coupon_render() {
    $options = get_option( 'spa_pw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='spa_pw_settings[sales_page_coupon]' id='sales_page_coupon-id' <?php checked( isset($options['sales_page_coupon']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// icon_box - Checkbox
if ( ! function_exists( 'sales_page_icon_box_render' ) ) {
  function sales_page_icon_box_render() {
    $options = get_option( 'spa_pw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='spa_pw_settings[sales_page_icon_box]' id='sales_page_icon_box-id' <?php checked( isset($options['sales_page_icon_box']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// number_box - Checkbox
if ( ! function_exists( 'sales_page_number_box_render' ) ) {
  function sales_page_number_box_render() {
    $options = get_option( 'spa_pw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='spa_pw_settings[sales_page_number_box]' id='sales_page_number_box-id' <?php checked( isset($options['sales_page_number_box']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// pricing_table - Checkbox
if ( ! function_exists( 'sales_page_pricing_table_render' ) ) {
  function sales_page_pricing_table_render() {
    $options = get_option( 'spa_pw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='spa_pw_settings[sales_page_pricing_table]' id='sales_page_pricing_table-id' <?php checked( isset($options['sales_page_pricing_table']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// pricing_toggle - Checkbox
if ( ! function_exists( 'sales_page_pricing_toggle_render' ) ) {
  function sales_page_pricing_toggle_render() {
    $options = get_option( 'spa_pw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='spa_pw_settings[sales_page_pricing_toggle]' id='sales_page_pricing_toggle-id' <?php checked( isset($options['sales_page_pricing_toggle']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// testimonial - Checkbox
if ( ! function_exists( 'sales_page_testimonial_render' ) ) {
  function sales_page_testimonial_render() {
    $options = get_option( 'spa_pw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='spa_pw_settings[sales_page_testimonial]' id='sales_page_testimonial-id' <?php checked( isset($options['sales_page_testimonial']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// testimonial slider- Checkbox
if ( ! function_exists( 'sales_page_testimonial_slider_render' ) ) {
  function sales_page_testimonial_slider_render() {
    $options = get_option( 'spa_pw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='spa_pw_settings[sales_page_testimonial_slider]' id='sales_page_testimonial_slider-id' <?php checked( isset($options['sales_page_testimonial_slider']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// portfolio slider- Checkbox
if ( ! function_exists( 'sales_page_portfolio_carousel_render' ) ) {
  function sales_page_portfolio_carousel_render() {
    $options = get_option( 'spa_pw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='spa_pw_settings[sales_page_portfolio_carousel]' id='sales_page_portfolio_carousel-id' <?php checked( isset($options['sales_page_portfolio_carousel']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Video Gallery- Checkbox
if ( ! function_exists( 'sales_page_video_gallery_render' ) ) {
  function sales_page_video_gallery_render() {
    $options = get_option( 'spa_pw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='spa_pw_settings[sales_page_video_gallery]' id='sales_page_video_gallery-id' <?php checked( isset($options['sales_page_video_gallery']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Image Box- Checkbox
if ( ! function_exists( 'sales_page_image_box_render' ) ) {
  function sales_page_image_box_render() {
    $options = get_option( 'spa_pw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='spa_pw_settings[sales_page_image_box]' id='sales_page_image_box-id' <?php checked( isset($options['sales_page_image_box']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}