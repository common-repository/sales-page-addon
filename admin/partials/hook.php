<?php

if ( !defined( 'ABSPATH' ) ) {
    exit;
}
// Exit if accessed

if ( spa_is_elementor_builder() ) {
    /**
     * Elementor custom font icons
     */
    function sales_addon_add_font_icons_tabs( $tabs = array() )
    {
        $tabs['linearicons'] = array(
            'name'          => 'linearicons',
            'label'         => esc_html__( 'Linearicons', 'sales-page-addon' ),
            'labelIcon'     => 'lnr lnr-home',
            'prefix'        => 'lnr-',
            'displayPrefix' => 'lnr',
            'url'           => '',
            'enqueue'       => '',
            'fetchJson'     => SALES_PAGE_ADDON_PLUGIN_URL . '/elementor/lib/icons/linearicons.json',
            'ver'           => '3.0.1',
        );
        $tabs['themify'] = array(
            'name'          => 'themify',
            'label'         => esc_html__( 'Themify', 'sales-page-addon' ),
            'labelIcon'     => 'ti ti-target',
            'prefix'        => 'ti-',
            'displayPrefix' => 'ti',
            'url'           => '',
            'enqueue'       => '',
            'fetchJson'     => SALES_PAGE_ADDON_PLUGIN_URL . '/elementor/lib/icons/themify.json',
            'ver'           => '3.0.1',
        );
        return $tabs;
    }
    
    add_filter( 'elementor/icons_manager/additional_tabs', 'sales_addon_add_font_icons_tabs' );
}


if ( spa_is_beaver_builder() ) {
    /**
     * Beaver custom font icons
     */
    function sales_addon_add_font_icons_beaver( $sets )
    {
        $path = '';
        $url = '';
        $linearicons_data = json_decode( file_get_contents( SALES_PAGE_ADDON_PLUGIN_URL . '/elementor/lib/icons/linearicons.json' ) );
        $themifyicons_data = json_decode( file_get_contents( SALES_PAGE_ADDON_PLUGIN_URL . '/elementor/lib/icons/themify.json' ) );
        $linearicons = array();
        $themifyicons = array();
        foreach ( $linearicons_data->icons as $linearicon ) {
            $linearicons[] = 'lnr-' . $linearicon;
        }
        foreach ( $themifyicons_data->icons as $themifyicon ) {
            $themifyicons[] = 'ti-' . $themifyicon;
        }
        $sets['linearicons'] = array(
            'name'       => esc_html__( 'Linearicons', 'sales-page-addon' ),
            'prefix'     => 'lnr',
            'type'       => 'linearicons',
            'path'       => $path,
            'url'        => $url,
            'stylesheet' => SALES_PAGE_ADDON_PLUGIN_URL . 'assets/css/linearicons.css',
            'icons'      => $linearicons,
        );
        $sets['themify'] = array(
            'name'       => esc_html__( 'Themify', 'sales-page-addon' ),
            'prefix'     => 'ti',
            'type'       => 'themify',
            'path'       => $path,
            'url'        => $url,
            'stylesheet' => SALES_PAGE_ADDON_PLUGIN_URL . 'assets/css/themify-icons.min.css',
            'icons'      => $themifyicons,
        );
        return $sets;
    }
    
    add_filter( 'fl_builder_icon_sets', 'sales_addon_add_font_icons_beaver' );
}

/*
* Checking available plugins
*/
function sales_addon_available_builders()
{
    $builder_arr = array();
    if ( spa_is_elementor_builder() ) {
        $builder_arr[] = 'elementor';
    }
    if ( spa_is_beaver_builder() ) {
        $builder_arr[] = 'beaver';
    }
    update_option( 'sales-page-builders', $builder_arr );
    if ( get_option( 'sales-page-builders' ) ) {
        
        if ( !get_option( 'sales-page-builder-active' ) ) {
            add_option( 'sales-page-builder-active', $builder_arr[0] );
        } else {
            
            if ( count( get_option( 'sales-page-builders' ) ) > 1 ) {
                
                if ( in_array( get_option( 'sales-page-builder-active' ), get_option( 'sales-page-builders' ) ) ) {
                } else {
                    update_option( 'sales-page-builder-active', $builder_arr[0] );
                }
            
            } else {
                update_option( 'sales-page-builder-active', $builder_arr[0] );
            }
        
        }
    
    }
}

add_action(
    'admin_init',
    'sales_addon_available_builders',
    10,
    3
);
/*
* json mime
*/
function sales_addon_add_json_mime_types( $mimes )
{
    $mimes['json'] = 'application/json';
    return $mimes;
}

add_filter( 'upload_mimes', 'sales_addon_add_json_mime_types' );