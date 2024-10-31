<?php

// cf7 - Checkbox
if ( ! function_exists( 'sales_page_cf7_render' ) ) {
  function sales_page_cf7_render() {
    $options = get_option( 'spa_bw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='spa_bw_settings[sales_page_cf7]' id='sales_page_cf7-id' <?php checked( isset($options['sales_page_cf7']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// rich editor - Checkbox
if ( ! function_exists( 'sales_page_rich_editor_render' ) ) {
  function sales_page_rich_editor_render() {
    $options = get_option( 'spa_bw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='spa_bw_settings[sales_page_rich_editor]' id='sales_page_rich_editor-id' <?php checked( isset($options['sales_page_rich_editor']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// Mailchimp- Checkbox
if ( ! function_exists( 'sales_page_mailchimp_render' ) ) {
  function sales_page_mailchimp_render() {
    $options = get_option( 'spa_bw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='spa_bw_settings[sales_page_mailchimp]' id='sales_page_mailchimp-id' <?php checked( isset($options['sales_page_mailchimp']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}

// title - Checkbox
if ( ! function_exists( 'sales_page_title_render' ) ) {
  function sales_page_title_render() {
    $options = get_option( 'spa_bw_settings' );
    ?>
    <label class="switch">
      <input type='checkbox' name='spa_bw_settings[sales_page_title]' id='sales_page_title-id' <?php checked( isset($options['sales_page_title']), 1 ); ?> value='1' />
      <span class="slider round"></span>
    </label>
    <?php
  }
}