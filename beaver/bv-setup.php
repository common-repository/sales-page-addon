<?php

/**
 * A class that handles loading custom modules and custom
 * fields if the builder is installed and activated.
 */
class Sales_Page_Beaver_Loader
{
    /**
     * Initializes the class once all plugins have loaded.
     */
    public static function init()
    {
        add_action( 'plugins_loaded', __CLASS__ . '::setup_hooks' );
    }
    
    /**
     * Setup hooks if the builder is installed and activated.
     */
    public static function setup_hooks()
    {
        // Load custom modules.
        add_action( 'init', __CLASS__ . '::load_modules' );
    }
    
    /**
     * Loads our custom modules.
     */
    public static function load_modules()
    {
        // Only for premium users
        require_once SALES_PAGE_ADDON_PLUGIN_PATH . '/beaver/modules/niche-contact/niche-contact.php';
        require_once SALES_PAGE_ADDON_PLUGIN_PATH . '/beaver/modules/niche-icon-box/niche-icon-box.php';
        require_once SALES_PAGE_ADDON_PLUGIN_PATH . '/beaver/modules/niche-list/niche-list.php';
        require_once SALES_PAGE_ADDON_PLUGIN_PATH . '/beaver/modules/niche-testimonial/niche-testimonial.php';
        require_once SALES_PAGE_ADDON_PLUGIN_PATH . '/beaver/modules/niche-title/niche-title.php';
        require_once SALES_PAGE_ADDON_PLUGIN_PATH . '/beaver/modules/niche-magic-wind/niche-magic-wind.php';
        require_once SALES_PAGE_ADDON_PLUGIN_PATH . '/beaver/modules/niche-icon-group/niche-icon-group.php';
    }

}
Sales_Page_Beaver_Loader::init();
// Page Template
class Sales_Page_Beaver_Templater
{
    private static  $instance ;
    protected  $templates ;
    public static function get_instance()
    {
        if ( null == self::$instance ) {
            self::$instance = new Sales_Page_Beaver_Templater();
        }
        return self::$instance;
    }
    
    private function __construct()
    {
        $this->templates = array();
        
        if ( version_compare( floatval( get_bloginfo( 'version' ) ), '4.7', '<' ) ) {
            add_filter( 'page_attributes_dropdown_pages_args', array( $this, 'niche_register_project_templates' ) );
        } else {
            add_filter( 'theme_page_templates', array( $this, 'niche_add_new_template' ) );
        }
        
        add_filter( 'wp_insert_post_data', array( $this, 'niche_register_project_templates' ) );
        add_filter( 'template_include', array( $this, 'niche_view_project_template' ) );
        $this->templates = array(
            'templates/nicheaddons-canvas-template.php' => 'NicheAddons Canvas',
        );
    }
    
    public function niche_add_new_template( $posts_templates )
    {
        $posts_templates = array_merge( $posts_templates, $this->templates );
        return $posts_templates;
    }
    
    public function niche_register_project_templates( $atts )
    {
        $cache_key = 'page_templates-' . md5( get_theme_root() . '/' . get_stylesheet() );
        $templates = wp_get_theme()->get_page_templates();
        if ( empty($templates) ) {
            $templates = array();
        }
        wp_cache_delete( $cache_key, 'themes' );
        $templates = array_merge( $templates, $this->templates );
        wp_cache_add(
            $cache_key,
            $templates,
            'themes',
            1800
        );
        return $atts;
    }
    
    public function niche_view_project_template( $template )
    {
        if ( is_search() ) {
            return $template;
        }
        global  $post ;
        if ( !$post ) {
            return $template;
        }
        if ( !isset( $this->templates[get_post_meta( $post->ID, '_wp_page_template', true )] ) ) {
            return $template;
        }
        $filepath = apply_filters( 'page_templater_plugin_dir_path', plugin_dir_path( __FILE__ ) );
        $file = $filepath . get_post_meta( $post->ID, '_wp_page_template', true );
        
        if ( file_exists( $file ) ) {
            return $file;
        } else {
            echo  $file ;
        }
        
        return $template;
    }

}
add_action( 'plugins_loaded', array( 'Sales_Page_Beaver_Templater', 'get_instance' ) );