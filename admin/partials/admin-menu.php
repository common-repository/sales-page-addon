<?php

if ( !defined( 'ABSPATH' ) ) {
    exit;
}
// Exit if accessed
function sales_addon_admin_menu_func()
{
    if ( spa_is_beaver_builder() || spa_is_elementor_builder() ) {
        add_submenu_page(
            'spa_admin_page',
            'Templates',
            'Templates',
            'manage_options',
            'sales-page-addon-templates',
            'sales_addon_admin_options_func'
        );
    }
}

add_action( 'admin_menu', 'sales_addon_admin_menu_func' );