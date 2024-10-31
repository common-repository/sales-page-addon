<?php

/*
Plugin Name: Sales Page Addon - Elementor & Beaver Builder
Plugin URI: https://nicheaddons.com/demos/sales-page/
Description: Generate more leads for your landing page with this Sales Page Addon. Yes, get ready to boost all your businesses and increase your profits. This Sales Page Addon gives you a landing page, which is well optimized for performance, and sales page friendly design most importantly, just a single click is more than enough to import our Sales Page Addon Templates.
Author: NicheAddons
Author URI: https://nicheaddons.com/
Version: 1.4.2
Text Domain: sales-page-addon
*/
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
// Exit if accessed
/**
 * Plugin Name - Version
 */
define( 'SALES_PAGE_ADDON_PLUGIN_NAME', 'sales-page-addon' );
define( 'SALES_PAGE_ADDON_PLUGIN_VERSION', '1.0' );
/**
 * Elementor Plugin Dir
 */
define( 'SALES_PAGE_ADDON_ELEMENTOR_PLUGIN_DIR', WP_PLUGIN_DIR . '/elementor' );
/**
 * Plugin URL
 */
define( 'SALES_PAGE_ADDON_PLUGIN_URL', plugins_url( '/', __FILE__ ) );
/**
 * Plugin PATH
 */
define( 'SALES_PAGE_ADDON_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
/**
 * Plugin Admin PATH/URL
 */
define( 'SALES_PAGE_ADDON_PLUGIN_ADMIN_PATH', SALES_PAGE_ADDON_PLUGIN_PATH . 'admin' );
define( 'SALES_PAGE_ADDON_PLUGIN_ADMIN_URL', SALES_PAGE_ADDON_PLUGIN_URL . 'admin' );
define( 'SALES_PAGE_ADDON_PLUGIN_ADMIN_CSS', SALES_PAGE_ADDON_PLUGIN_ADMIN_URL . '/css' );
define( 'SALES_PAGE_ADDON_PLUGIN_ADMIN_JS', SALES_PAGE_ADDON_PLUGIN_ADMIN_URL . '/js' );
include_once ABSPATH . 'wp-admin/includes/plugin.php';
/**
 * if beaver builder plugins is active
 */
function spa_is_beaver_builder()
{
    if ( is_plugin_active( 'bb-plugin/fl-builder.php' ) || is_plugin_active( 'beaver-builder-lite-version/fl-builder.php' ) ) {
        return true;
    }
}

/**
 * if elementor builder plugins is active
 */
function spa_is_elementor_builder()
{
    if ( is_plugin_active( 'elementor/elementor.php' ) ) {
        return true;
    }
}

/**
 * if WooCommerce is active
 */
function spa_is_woocommerce()
{
    if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
        return true;
    }
}

// Pro Codes

if ( !function_exists( 'spa_fs' ) ) {
    // Create a helper function for easy SDK access.
    function spa_fs()
    {
        global  $spa_fs ;
        
        if ( !isset( $spa_fs ) ) {
            // Include Freemius SDK.
            require_once SALES_PAGE_ADDON_PLUGIN_PATH . '/freemius/start.php';
            $spa_fs = fs_dynamic_init( array(
                'id'             => '8263',
                'slug'           => 'sales-page-addon',
                'premium_slug'   => 'sales-page-addon-pro',
                'type'           => 'plugin',
                'public_key'     => 'pk_c53bc58e2b17b1c8ec3f710a4ca63',
                'is_premium'     => false,
                'premium_suffix' => 'Premium',
                'has_addons'     => false,
                'has_paid_plans' => true,
                'menu'           => array(
                'slug'           => 'spa_admin_page',
                'override_exact' => true,
                'support'        => false,
                'parent'         => array(
                'slug' => 'spa_admin_page',
            ),
            ),
                'is_live'        => true,
            ) );
        }
        
        return $spa_fs;
    }
    
    // Init Freemius.
    spa_fs();
    // Signal that SDK was initiated.
    do_action( 'spa_fs_loaded' );
    function spa_fs_settings_url()
    {
        return admin_url( 'admin.php?page=spa_admin_page' );
    }
    
    spa_fs()->add_filter( 'connect_url', 'spa_fs_settings_url' );
    spa_fs()->add_filter( 'after_skip_url', 'spa_fs_settings_url' );
    spa_fs()->add_filter( 'after_connect_url', 'spa_fs_settings_url' );
    spa_fs()->add_filter( 'after_pending_connect_url', 'spa_fs_settings_url' );
}

/**
 * Enqueue Files for BackEnd
 */

if ( !function_exists( 'spa_admin_scripts_styles' ) ) {
    function spa_admin_scripts_styles()
    {
        wp_enqueue_style( 'spa-admin-styles', SALES_PAGE_ADDON_PLUGIN_URL . 'assets/css/admin-styles.css', true );
    }
    
    add_action( 'admin_enqueue_scripts', 'spa_admin_scripts_styles' );
}

/**
 * Admin Pages
 */
require_once SALES_PAGE_ADDON_PLUGIN_PATH . '/elementor/spa-admin-page.php';
require_once SALES_PAGE_ADDON_PLUGIN_PATH . '/elementor/spa-admin-sub-page.php';
require_once SALES_PAGE_ADDON_PLUGIN_PATH . '/elementor/spa-admin-basic-fields.php';
require_once SALES_PAGE_ADDON_PLUGIN_PATH . '/elementor/spa-admin-pro-fields.php';
add_action( 'admin_init', 'spa_bw_settings_init' );
add_action( 'admin_init', 'spa_pw_settings_init' );

if ( !function_exists( 'spa_admin_menu' ) ) {
    add_action( 'admin_menu', 'spa_admin_menu' );
    function spa_admin_menu()
    {
        add_menu_page(
            'Sales Page Addon',
            'Sales Page Addon',
            'manage_options',
            'spa_admin_page',
            'spa_admin_page',
            'dashicons-cart',
            80
        );
        add_submenu_page(
            'spa_admin_page',
            'Welcome',
            'Welcome',
            'manage_options',
            'spa_admin_page'
        );
        if ( spa_is_elementor_builder() ) {
            add_submenu_page(
                'spa_admin_page',
                'Enable & Disable',
                'Enable & Disable',
                'manage_options',
                'spa_admin_sub_page',
                'spa_admin_sub_page'
            );
        }
    }

}

/**
 * Flush the rewrite rules when needed.
 */

if ( !function_exists( 'sales_page_activate' ) ) {
    function sales_page_activate()
    {
        if ( !get_option( 'sales_page_flush_rewrite_rules_flag' ) ) {
            add_option( 'sales_page_flush_rewrite_rules_flag', true );
        }
        do_action( 'sales_page_after_active_plugins' );
    }
    
    register_activation_hook( __FILE__, 'sales_page_activate' );
}

/**
 * Initial Elementor Based File
 */
if ( spa_is_elementor_builder() ) {
    if ( file_exists( SALES_PAGE_ADDON_PLUGIN_PATH . '/elementor/em-setup.php' ) ) {
        require_once SALES_PAGE_ADDON_PLUGIN_PATH . '/elementor/em-setup.php';
    }
}
/**
 * Initial Beaver Based File
 */
if ( spa_is_beaver_builder() ) {
    if ( file_exists( SALES_PAGE_ADDON_PLUGIN_PATH . '/beaver/bv-setup.php' ) ) {
        require_once SALES_PAGE_ADDON_PLUGIN_PATH . '/beaver/bv-setup.php';
    }
}
// Plugin language

if ( !function_exists( 'sales_page_plugin_language_setup' ) ) {
    function sales_page_plugin_language_setup()
    {
        load_plugin_textdomain( 'sales-page-addon', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
    }
    
    add_action( 'init', 'sales_page_plugin_language_setup' );
}

// Warning when the site doesn't have Elementor installed or activated.

if ( !function_exists( 'sales_page_admin_notice_missing_main_plugin' ) ) {
    function sales_page_admin_notice_missing_main_plugin()
    {
        $builders = get_option( 'sales-page-builders' );
        $builder = '';
        if ( spa_is_beaver_builder() ) {
            $builder = 'beaver';
        }
        if ( spa_is_elementor_builder() ) {
            $builder = 'elementor';
        }
        if ( isset( $_GET['activate'] ) ) {
            unset( $_GET['activate'] );
        }
        
        if ( in_array( $builder, $builders ) ) {
        } else {
            $message = sprintf( esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'sales-page-addon' ), '<strong>' . esc_html__( 'Sales Page Addon', 'sales-page-addon' ) . '</strong>', '<strong>' . esc_html__( 'Elementor or Beaver', 'sales-page-addon' ) . '</strong>' );
            printf( '<div class="notice notice-error is-dismissible"><p>%1$s</p></div>', $message );
        }
    
    }
    
    add_action( 'admin_notices', 'sales_page_admin_notice_missing_main_plugin' );
}

// Both Free and Pro activated
if ( is_plugin_active( 'sales-page-addon/sales-page-addon.php' ) && is_plugin_active( 'sales-page-addon-pro/sales-page-addon.php' ) ) {
    add_action( 'admin_notices', 'sales_page_admin_notice_deactivate_free' );
}
// Warning when the site have Both Free and Pro activated.
if ( !function_exists( 'sales_page_admin_notice_deactivate_free' ) ) {
    function sales_page_admin_notice_deactivate_free()
    {
        if ( isset( $_GET['activate'] ) ) {
            unset( $_GET['activate'] );
        }
        $message = sprintf(
            /* translators: 1: Plugin name */
            esc_html__( 'Please deactivate the free version of "%1$s".', 'sales-page-addon' ),
            '<strong>' . esc_html__( 'Sales Page Addon', 'sales-page-addon' ) . '</strong>'
        );
        printf( '<div class="notice notice-error is-dismissible"><p>%1$s</p></div>', $message );
    }

}
// Enable & Dissable Notice

if ( !function_exists( 'sales_page_admin_notice_enable_dissable' ) ) {
    function sales_page_admin_notice_enable_dissable()
    {
        
        if ( isset( $_GET['settings-updated'] ) ) {
            $message = sprintf( esc_html__( 'Widgets Settings Saved.', 'sales-page-addon' ) );
            printf( '<div class="notice notice-success is-dismissible"><p>%1$s</p></div>', $message );
        }
    
    }
    
    add_action( 'admin_notices', 'sales_page_admin_notice_enable_dissable' );
}

// Admin Init
require_once SALES_PAGE_ADDON_PLUGIN_PATH . '/admin/admin-init.php';
// Enqueue Files for Elementor Editor

if ( spa_is_elementor_builder() ) {
    // Css Enqueue
    add_action( 'elementor/editor/before_enqueue_scripts', function () {
        wp_enqueue_style(
            'sales_page-ele-editor-linearicons',
            SALES_PAGE_ADDON_PLUGIN_URL . 'assets/css/linearicons.css',
            [],
            '1.0.0'
        );
        wp_enqueue_style(
            'sales_page-ele-editor-themify',
            SALES_PAGE_ADDON_PLUGIN_URL . 'assets/css/themify-icons.min.css',
            [],
            '1.0.0'
        );
    } );
    // Js Enqueue
    add_action( 'elementor/frontend/after_enqueue_scripts', function () {
    } );
}

// Enqueue Files for FrontEnd

if ( !function_exists( 'sales_page_scripts_styles' ) ) {
    function sales_page_scripts_styles()
    {
        // Styles
        wp_enqueue_style(
            'niche-frame',
            SALES_PAGE_ADDON_PLUGIN_URL . 'assets/css/niche-frame.css',
            array(),
            '1.0',
            'all'
        );
        wp_enqueue_style(
            'font-awesome',
            SALES_PAGE_ADDON_PLUGIN_URL . 'assets/css/font-awesome.min.css',
            array(),
            '4.7.0',
            'all'
        );
        wp_enqueue_style(
            'themify-icons',
            SALES_PAGE_ADDON_PLUGIN_URL . 'assets/css/themify-icons.min.css',
            array(),
            '1.0.0',
            'all'
        );
        wp_enqueue_style(
            'linearicons',
            SALES_PAGE_ADDON_PLUGIN_URL . 'assets/css/linearicons.css',
            array(),
            '1.0.0',
            'all'
        );
        wp_enqueue_style(
            'sales_page-styles',
            SALES_PAGE_ADDON_PLUGIN_URL . 'assets/css/styles.css',
            array(),
            '0.1.1',
            'all'
        );
    }
    
    add_action( 'wp_enqueue_scripts', 'sales_page_scripts_styles' );
}
