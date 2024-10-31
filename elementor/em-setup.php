<?php

/*
 * All Elementor Init
 * Author & Copyright: NicheAddon
*/

if ( !defined( 'ABSPATH' ) ) {
    exit;
    // Exit if accessed directly.
}


if ( !class_exists( 'Sales_Page_Elementor_Addon_Core_Elementor_init' ) ) {
    class Sales_Page_Elementor_Addon_Core_Elementor_init
    {
        /*
         * Minimum Elementor Version
         */
        const  MINIMUM_ELEMENTOR_VERSION = '2.0.0' ;
        /*
         * Minimum PHP Version
         */
        const  MINIMUM_PHP_VERSION = '5.6' ;
        /*
         * Instance
         */
        private static  $instance ;
        /*
         * Main Sales Page Addon plugin Class Constructor
         */
        public function __construct()
        {
            add_action( 'plugins_loaded', [ $this, 'init' ] );
        }
        
        /*
         * Class instance
         */
        public static function getInstance()
        {
            if ( null === self::$instance ) {
                self::$instance = new self();
            }
            return self::$instance;
        }
        
        /*
         * Initialize the plugin
         */
        public function init()
        {
            // Check for required Elementor version
            
            if ( !version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
                add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ] );
                return;
            }
            
            // Check for required PHP version
            
            if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
                add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] );
                return;
            }
            
            // elementor Custom Group Controls Include
            self::controls_helper();
            // Elementor Basic Categories
            add_action( 'elementor/elements/categories_registered', [ $this, 'basic_widget_categories' ] );
            // Elementor Basic Widgets Registered
            add_action( 'elementor/widgets/widgets_registered', [ $this, 'sales_page_basic_widgets_registered' ] );
        }
        
        /*
         * Admin notice
         * Warning when the site doesn't have a minimum required Elementor version.
         */
        public function admin_notice_minimum_elementor_version()
        {
            if ( isset( $_GET['activate'] ) ) {
                unset( $_GET['activate'] );
            }
            $message = sprintf(
                /* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
                esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'sales-page-addon' ),
                '<strong>' . esc_html__( 'Sales Page Addon', 'sales-page-addon' ) . '</strong>',
                '<strong>' . esc_html__( 'Elementor', 'sales-page-addon' ) . '</strong>',
                self::MINIMUM_ELEMENTOR_VERSION
            );
            printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
        }
        
        /*
         * Admin notice
         * Warning when the site doesn't have a minimum required PHP version.
         */
        public function admin_notice_minimum_php_version()
        {
            if ( isset( $_GET['activate'] ) ) {
                unset( $_GET['activate'] );
            }
            $message = sprintf(
                /* translators: 1: Plugin name 2: PHP 3: Required PHP version */
                esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'sales-page-addon' ),
                '<strong>' . esc_html__( 'Sales Page Addon', 'sales-page-addon' ) . '</strong>',
                '<strong>' . esc_html__( 'PHP', 'sales-page-addon' ) . '</strong>',
                self::MINIMUM_PHP_VERSION
            );
            printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
        }
        
        /*
         * Class Group Controls
         */
        public static function controls_helper()
        {
            if ( file_exists( SALES_PAGE_ADDON_PLUGIN_PATH . '/elementor/lib/lib.php' ) ) {
                require_once SALES_PAGE_ADDON_PLUGIN_PATH . '/elementor/lib/lib.php';
            }
        }
        
        /*
         * Widgets elements categories
         */
        public function basic_widget_categories( $elements_manager )
        {
            $elements_manager->add_category( 'sales_page-basic-category', [
                'title' => esc_html__( 'Sales Page Basic Elements : By Niche Addons', 'sales-page-addon' ),
            ] );
        }
        
        public function sales_page_unique_widget_categories( $elements_manager )
        {
            $elements_manager->add_category( 'sales_page-unique-category', [
                'title' => esc_html__( 'Unique Sales Page Elements : By Niche Addons', 'sales-page-addon' ),
            ] );
        }
        
        /*
         * Widgets registered
         */
        public function sales_page_basic_widgets_registered()
        {
            if ( file_exists( SALES_PAGE_ADDON_PLUGIN_PATH . '/elementor/widgets/basic/salespage-cf7.php' ) ) {
                include_once SALES_PAGE_ADDON_PLUGIN_PATH . '/elementor/widgets/basic/salespage-cf7.php';
            }
            if ( file_exists( SALES_PAGE_ADDON_PLUGIN_PATH . '/elementor/widgets/basic/salespage-mailchimp.php' ) ) {
                include_once SALES_PAGE_ADDON_PLUGIN_PATH . '/elementor/widgets/basic/salespage-mailchimp.php';
            }
            if ( file_exists( SALES_PAGE_ADDON_PLUGIN_PATH . '/elementor/widgets/basic/salespage-title.php' ) ) {
                include_once SALES_PAGE_ADDON_PLUGIN_PATH . '/elementor/widgets/basic/salespage-title.php';
            }
            if ( file_exists( SALES_PAGE_ADDON_PLUGIN_PATH . '/elementor/widgets/basic/salespage-text-editor.php' ) ) {
                include_once SALES_PAGE_ADDON_PLUGIN_PATH . '/elementor/widgets/basic/salespage-text-editor.php';
            }
        }
        
        public function sales_page_unique_widgets_registered()
        {
        }
    
    }
    //end class
    if ( class_exists( 'Sales_Page_Elementor_Addon_Core_Elementor_init' ) ) {
        Sales_Page_Elementor_Addon_Core_Elementor_init::getInstance();
    }
}


if ( !function_exists( 'sales_page_elementor_default_typo_color_active' ) ) {
    function sales_page_elementor_default_typo_color_active()
    {
        update_option( 'elementor_disable_color_schemes', 'yes' );
        update_option( 'elementor_disable_typography_schemes', 'yes' );
    }
    
    add_action( 'after_switch_theme', 'sales_page_elementor_default_typo_color_active' );
}


if ( !function_exists( 'sales_page_elementor_default_typo_color_active_after' ) ) {
    function sales_page_elementor_default_typo_color_active_after()
    {
        update_option( 'elementor_disable_color_schemes', 'yes' );
        update_option( 'elementor_disable_typography_schemes', 'yes' );
    }
    
    add_action( 'pt-ocdi/after_content_import_execution', 'sales_page_elementor_default_typo_color_active_after' );
}

/* Add Featured Image support in event organizer */
add_post_type_support( 'tribe_organizer', 'thumbnail' );
/* Excerpt Length */
if ( !class_exists( 'Sales_Page_Elementor_Addon_Excerpt' ) ) {
    class Sales_Page_Elementor_Addon_Excerpt
    {
        public static  $length = 55 ;
        public static  $types = array(
            'short'   => 25,
            'regular' => 55,
            'long'    => 100,
        ) ;
        public static function length( $new_length = 55 )
        {
            Sales_Page_Elementor_Addon_Excerpt::$length = $new_length;
            add_filter( 'excerpt_length', 'Sales_Page_Elementor_Addon_Excerpt::new_length' );
            Sales_Page_Elementor_Addon_Excerpt::output();
        }
        
        public static function new_length()
        {
            
            if ( isset( Sales_Page_Elementor_Addon_Excerpt::$types[Sales_Page_Elementor_Addon_Excerpt::$length] ) ) {
                return Sales_Page_Elementor_Addon_Excerpt::$types[Sales_Page_Elementor_Addon_Excerpt::$length];
            } else {
                return Sales_Page_Elementor_Addon_Excerpt::$length;
            }
        
        }
        
        public static function output()
        {
            the_excerpt();
        }
    
    }
}
// Custom Excerpt Length
if ( !function_exists( 'sales_page_excerpt' ) ) {
    function sales_page_excerpt( $length = 55 )
    {
        Sales_Page_Elementor_Addon_Excerpt::length( $length );
    }

}

if ( !function_exists( 'sales_page_new_excerpt_more' ) ) {
    function sales_page_new_excerpt_more( $more )
    {
        return '...';
    }
    
    add_filter( 'excerpt_more', 'sales_page_new_excerpt_more' );
}

if ( !function_exists( 'sales_page_paging_nav' ) ) {
    function sales_page_paging_nav( $numpages = '', $pagerange = '', $paged = '' )
    {
        if ( empty($pagerange) ) {
            $pagerange = 2;
        }
        
        if ( empty($paged) ) {
            $paged = 1;
        } else {
            $paged = $paged;
        }
        
        
        if ( $numpages == '' ) {
            global  $wp_query ;
            $numpages = $wp_query->max_num_pages;
            if ( !$numpages ) {
                $numpages = 1;
            }
        }
        
        global  $wp_query ;
        $big = 999999999;
        
        if ( $wp_query->max_num_pages != '1' ) {
            ?>
      <div class="spa-pagination">
        <?php 
            echo  paginate_links( array(
                'base'      => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                'format'    => '?paged=%#%',
                'prev_text' => '<i class="fa fa-angle-double-left" aria-hidden="true"></i>',
                'next_text' => '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
                'current'   => $paged,
                'total'     => $numpages,
                'type'      => 'list',
            ) ) ;
            ?>
      </div>
    <?php 
        }
    
    }

}
if ( !function_exists( 'sales_page_clean_string' ) ) {
    function sales_page_clean_string( $string )
    {
        $string = str_replace( ' ', '', $string );
        return preg_replace( '/[^\\da-z ]/i', '', $string );
    }

}
/* Validate px entered in field */
if ( !function_exists( 'sales_page_core_check_px' ) ) {
    function sales_page_core_check_px( $num )
    {
        return ( is_numeric( $num ) ? $num . 'px' : $num );
    }

}