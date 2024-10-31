<?php

/**
* This is an example module with only the basic
* setup necessary to get it working.
*
* @class FL_Niche_List
*/
class FL_Niche_List extends FLBuilderModule {
  public function __construct() {
    parent::__construct(array(
      'name'          => esc_html__('List', 'sales-page-addon'),
      'description'   => esc_html__('NicheAddons list module.', 'sales-page-addon'),
      'category'		=> esc_html__('Niche Addon Modules', 'sales-page-addon'),
      'partial_refresh' => true,
      'icon'            => 'star-filled.svg',
    ));
  }
}

/**
* Register the module and its form settings.
*/
FLBuilder::register_module('FL_Niche_List', array(
  'general'       => array( // Tab
    'title'         => esc_html__('General', 'sales-page-addon'), // Tab title
    'sections'      => array( // Tab Sections
      'general'       => array( // Section
        'title'         => esc_html__('List', 'sales-page-addon'), // Section Title
        'fields'        => array( // Section Fields
          'icon_type' => array(
            'type'    => 'select',
            'label'   => esc_html__( 'Icon Type', 'sales-page-addon' ),
            'default' => 'icon',
            'options' => array(
              'icon' => esc_html__( 'Icon', 'sales-page-addon' ),
              'image' => esc_html__( 'Image', 'sales-page-addon' ),
            ),
            'toggle'  => array(
              'icon' => array(
                'fields' => array( 'icon' ),
              ),
              'image' => array(
                'fields' => array( 'image' ),
              ),
            ),
          ),
          'icon'    => array(
            'type'    => 'icon',
            'label'   => esc_html__( 'Icon', 'sales-page-addon' ),
          ),
          'image' => array(
            'type'          => 'photo',
            'label'         => esc_html__('Image', 'sales-page-addon'),
            'show_remove'   => true,
          ),
          'list' => array(
            'type'          => 'textarea',
            'label'         => esc_html__( 'List Text', 'sales-page-addon' ),
            'limit'         => 100, // limit the number of repeaters
            'multiple'      => true,
          ),
        )
      )
    )
  ),
  'style'   => array(
    'title'    => esc_html__( 'Style', 'sales-page-addon' ),
    'sections' => array(
      
      'icon'      => array(
        'title'  => esc_html__( 'Icon', 'sales-page-addon' ),
        'fields' => array(
          'icon_spacing'    => array(
            'type'    => 'unit',
            'label'   => esc_html__( 'Icon top Spacing', 'sales-page-addon' ),
            'slider'  => true,
            'responsive' => true,
            'units'   => array( 'px' ),
            'preview' => array(
              'type'      => 'css',
              'selector'  => 'ul.niche-list li i, ul.niche-list li img',
              'property'  => 'top',
              'unit'      => 'px',
              'important' => true,
            ),
          ),
          'icon_color'      => array(
            'type'        => 'color',
            'connections' => array( 'color' ),
            'label'       => esc_html__( 'Icon Color', 'sales-page-addon' ),
            'show_reset'  => true,
            'show_alpha'  => true,
            'preview'     => array(
              'type'      => 'css',
              'selector'  => 'ul.niche-list li i',
              'property'  => 'color',
            ),
          ),
          'icon_size'    => array(
            'type'    => 'unit',
            'label'   => esc_html__( 'Icon Size', 'sales-page-addon' ),
            'slider'  => true,
            'responsive' => true,
            'units'   => array( 'px' ),
            'preview' => array(
              'type'      => 'css',
              'selector'  => 'ul.niche-list li i',
              'property'  => 'font-size',
              'unit'      => 'px',
              'important' => true,
            ),
          ),
          'image_size'    => array(
            'type'    => 'unit',
            'label'   => esc_html__( 'Image Size', 'sales-page-addon' ),
            'slider'  => true,
            'responsive' => true,
            'units'   => array( 'px' ),
            'preview' => array(
              'type'      => 'css',
              'selector'  => 'ul.niche-list li img',
              'property'  => 'width',
              'unit'      => 'px',
              'important' => true,
            ),
          ),
        ),
      ),

      'content'      => array(
        'title'  => esc_html__( 'List', 'sales-page-addon' ),
        'fields' => array(
          'content_padding'      => array(
            'type'       => 'dimension',
            'label'      => esc_html__( 'List Padding', 'sales-page-addon' ),
            'responsive' => true,
            'slider'     => true,
            'units'      => array( 'px' ),
            'preview'    => array(
              'type'     => 'css',
              'selector' => 'ul.niche-list li',
              'property' => 'padding',
            ),
          ),
          'content_color'      => array(
            'type'        => 'color',
            'connections' => array( 'color' ),
            'label'       => esc_html__( 'List Color', 'sales-page-addon' ),
            'show_reset'  => true,
            'show_alpha'  => true,
            'preview'     => array(
              'type'      => 'css',
              'selector'  => 'ul.niche-list li',
              'property'  => 'color',
            ),
          ),
          'content_typography' => array(
            'type'       => 'typography',
            'label'      => esc_html__( 'List Typography', 'sales-page-addon' ),
            'responsive' => true,
            'preview'    => array(
              'type'     => 'css',
              'selector' => 'ul.niche-list li',
            ),
          ),
          'content_alignment' => array(
            'type' => 'align',
            'label' => esc_html__('Align', 'sales-page-addon') ,
            'default' => 'left',
            'responsive' => true,
            'preview' => array(
              'type' => 'css',
              'selector' => '.ul.niche-list',
              'property' => 'text-align',
              'important' => false,
            ),
          ),          
        ),
      ),

    ),
  ),
));