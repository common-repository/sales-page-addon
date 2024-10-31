<?php

if ( !defined( 'ABSPATH' ) ) {
    exit;
}
// Exit if accessed
// Enqueue CSS/JS
require_once SALES_PAGE_ADDON_PLUGIN_ADMIN_PATH . '/partials/enqueue.php';
if ( spa_is_beaver_builder() ) {
    // Beaver Importer
    require_once SALES_PAGE_ADDON_PLUGIN_ADMIN_PATH . '/partials/importer/beaver.php';
}
if ( spa_is_elementor_builder() ) {
    // Elementor Importer
    require_once SALES_PAGE_ADDON_PLUGIN_ADMIN_PATH . '/partials/importer/elementor.php';
}
// AJAX
require_once SALES_PAGE_ADDON_PLUGIN_ADMIN_PATH . '/partials/ajax.php';
// Hook
require_once SALES_PAGE_ADDON_PLUGIN_ADMIN_PATH . '/partials/hook.php';
// Custom Functions
require_once SALES_PAGE_ADDON_PLUGIN_ADMIN_PATH . '/partials/custom-func.php';
// Admin Menu
require_once SALES_PAGE_ADDON_PLUGIN_ADMIN_PATH . '/partials/admin-menu.php';
// Options
require_once SALES_PAGE_ADDON_PLUGIN_ADMIN_PATH . '/partials/options.php';
// Templates
require_once SALES_PAGE_ADDON_PLUGIN_ADMIN_PATH . '/partials/admin-menu-items/templates.php';