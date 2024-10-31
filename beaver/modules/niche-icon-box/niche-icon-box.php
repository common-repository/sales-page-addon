<?php

/**
 * Sales Page Addons - Icon box module
 * Author & Copyright: NicheAddon
 * @class FL_Niche_Icon_box
 */
class FL_Niche_Icon_box extends FLBuilderModule {
  public function __construct() {
    parent::__construct(array(
      'name'          => esc_html__('Icon box', 'sales-page-addon'),
      'description'   => esc_html__('NicheAddons icon box module.', 'sales-page-addon'),
      'category'    => esc_html__('Niche Addon Modules', 'sales-page-addon'),
      'partial_refresh' => true,
      'icon'            => 'dashicons-image-filter',
    ));
  }
}

/**
* Register the module and its form settings.
*/
FLBuilder::register_module('FL_Niche_Icon_box', array(
  'general'       => array( // Tab
    'title'         => esc_html__('General', 'sales-page-addon'), // Tab title
    'sections'      => array( // Tab Sections
      'general'       => array( // Section
        'title'         => esc_html__('Icon box', 'sales-page-addon'), // Section Title
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
          'view' => array(
            'type'    => 'select',
            'label'   => esc_html__( 'View', 'sales-page-addon' ),
            'default' => 'default',
            'options' => array(
              'default' => esc_html__( 'Default', 'sales-page-addon' ),
              'stacked' => esc_html__( 'Stacked', 'sales-page-addon' ),
              'framed' => esc_html__( 'Framed', 'sales-page-addon' ),
            ),
          ),
          'shape' => array(
            'type'    => 'select',
            'label'   => esc_html__( 'Shape', 'sales-page-addon' ),
            'default' => 'circle',
            'options' => array(
              'circle' => esc_html__( 'Circle', 'sales-page-addon' ),
              'square' => esc_html__( 'Square', 'sales-page-addon' ),
            ),
          ),
          'box_style' => array(
            'type'    => 'select',
            'label'   => esc_html__( 'Style', 'sales-page-addon' ),
            'default' => 'default',
            'options' => array(
              'default' => esc_html__( 'Default', 'sales-page-addon' ),
              'progress' => esc_html__( 'Progress Type', 'sales-page-addon' ),
            ),
            'toggle' => array(
              'progress' => array(
                'fields' => array(
                  'step_text'
                ),
              )
            ),
          ),
          'icon_order' => array(
            'type'    => 'select',
            'label'   => esc_html__( 'Content Order', 'sales-page-addon' ),
            'default' => 'default',
            'options' => array(
              'default' => esc_html__( 'Icon First', 'sales-page-addon' ),
              'reverse' => esc_html__( 'Content Fitst', 'sales-page-addon' ),
            ),
          ),
          'position' => array(
            'type'    => 'select',
            'label'   => esc_html__( 'Icon Position', 'sales-page-addon' ),
            'default' => 'top',
            'options' => array(
              'left' => esc_html__( 'Left', 'sales-page-addon' ),
              'top' => esc_html__( 'Top', 'sales-page-addon' ),
              'right' => esc_html__( 'Right', 'sales-page-addon' ),
            ),
            'toggle'  => array(
              'horizontal_alignment' => array(
                'fields' => array( 'top' ),
              ),
            ),
          ),
          'horizontal_alignment' => array(
            'type' => 'align',
            'label' => esc_html__('Align', 'sales-page-addon') ,
            'default' => 'left',
          ),
          'vertical_alignment' => array(
            'type'    => 'select',
            'label'   => esc_html__( 'Vertical Alignment', 'sales-page-addon' ),
            'default' => 'top',
            'options' => array(
              'top' => esc_html__( 'Top', 'sales-page-addon' ),
              'middle' => esc_html__( 'Middle', 'sales-page-addon' ),
              'bottom' => esc_html__( 'Bottom', 'sales-page-addon' ),
            ),
          ),

          'icon_title' => array(
            'type'          => 'text',
            'label'         => esc_html__('Title', 'sales-page-addon'),
            'default'       => esc_html__( 'This is the heading', 'sales-page-addon' ),
            'placeholder'   => esc_html__('Title text', 'sales-page-addon'),
          ),

          'step_text' => array(
            'type'          => 'text',
            'label'         => esc_html__('Step No.', 'sales-page-addon'),
            'default'       => esc_html__( '1', 'sales-page-addon' ),
            'placeholder'   => esc_html__('1', 'sales-page-addon'),
          ),

          'sub_title' => array(
            'type'          => 'textarea',
            'label'         => esc_html__('Content', 'sales-page-addon'),
            'default'       => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'sales-page-addon' ),
            'placeholder'   => esc_html__('Content text', 'sales-page-addon'),
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
          'icon_spacing'      => array(
            'type'       => 'dimension',
            'label'      => esc_html__( 'Icon Spacing', 'sales-page-addon' ),
            'responsive' => true,
            'slider'     => true,
            'units'      => array( 'px' ),
            'preview'    => array(
              'type'     => 'css',
              'selector' => '.spa-icon-box .spa-icon',
              'property' => 'margin',
            ),
          ),
          'icon_width_height'    => array(
            'type'    => 'unit',
            'label'   => esc_html__( 'Icon Width & Height', 'sales-page-addon' ),
            'slider'  => true,
            'units'   => array( 'px' ),
            'default'    => '80',
            'sanitize'   => 'floatval',
            'responsive' => true,
            'preview' => array(
              'type'      => 'css',
              'rules'     => array(
                array(
                  'selector'  => '.spa-icon-box .spa-icon',
                  'property'  => 'height',
                  'unit'      => 'px',
                  'important' => true,
                ),
                array(
                  'selector'  => '.spa-icon-box .spa-icon',
                  'property'  => 'width',
                  'unit'      => 'px',
                  'important' => true,
                ),
                array(
                  'selector'  => '.spa-icon-box .spa-icon i',
                  'property'  => 'line-height',
                  'unit'      => 'px',
                  'important' => true,
                ),   
              ),
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
              'selector'  => '.spa-icon-box .spa-icon',
              'property'  => 'color',
            ),
          ),
          'bg_color'      => array(
            'type'        => 'color',
            'connections' => array( 'color' ),
            'label'       => esc_html__( 'Background Color', 'sales-page-addon' ),
            'show_reset'  => true,
            'show_alpha'  => true,
            'preview'     => array(
              'type'      => 'css',
              'selector'  => '.spa-icon-box .spa-icon',
              'property'  => 'background',
            ),
          ),
          'icon_border'  => array(
            'type'       => 'border',
            'label'      => esc_html__( 'Border', 'sales-page-addon' ),
            'responsive' => true,
            'preview'    => array(
              'type'      => 'css',
              'selector'  => '.spa-icon-box .spa-icon',
              'important' => true,
            ),
          ),
          'icon_size'    => array(
            'type'    => 'unit',
            'label'   => esc_html__( 'Icon Size', 'sales-page-addon' ),
            'slider'  => true,
            'responsive' => true,
            'units'   => array( 'px' ),
            'default'    => '50',
            'sanitize'   => 'floatval',
            'preview' => array(
              'type'      => 'css',
              'selector'  => '.spa-icon-box .spa-icon i',
              'property'  => 'font-size',
              'unit'      => 'px',
              'important' => true,
            ),
          ),
          'icon_hover_color'      => array(
            'type'        => 'color',
            'connections' => array( 'color' ),
            'label'       => esc_html__( 'Icon Hover Color', 'sales-page-addon' ),
            'show_reset'  => true,
            'show_alpha'  => true,
            'preview'     => array(
              'type'      => 'css',
              'selector'  => '.spa-icon-box:hover .spa-icon',
              'property'  => 'color',
            ),
          ), 
          'bg_hover_color'      => array(
            'type'        => 'color',
            'connections' => array( 'color' ),
            'label'       => esc_html__( 'Background Hover Color', 'sales-page-addon' ),
            'show_reset'  => true,
            'show_alpha'  => true,
            'preview'     => array(
              'type'      => 'css',
              'selector'  => '.spa-icon-box:hover .spa-icon',
              'property'  => 'background',
            ),
          ),
          'icon_hover_border'  => array(
            'type'       => 'border',
            'label'      => esc_html__( 'Border Hover', 'sales-page-addon' ),
            'responsive' => true,
            'preview'    => array(
              'type'      => 'css',
              'selector'  => '.spa-icon-box:hover .spa-icon',
              'important' => true,
            ),
          ),
        ),
      ),
      
      'title'      => array(
        'title'  => esc_html__( 'Title', 'sales-page-addon' ),
        'fields' => array(
          'title_padding'      => array(
            'type'       => 'dimension',
            'label'      => esc_html__( 'Title Padding', 'sales-page-addon' ),
            'responsive' => true,
            'slider'     => true,
            'units'      => array( 'px' ),
            'preview'    => array(
              'type'     => 'css',
              'selector' => '.spa-icon-box-title',
              'property' => 'padding',
              'important' => true,
            ),
          ),
          'title_color'      => array(
            'type'        => 'color',
            'connections' => array( 'color' ),
            'label'       => esc_html__( 'Title Color', 'sales-page-addon' ),
            'show_reset'  => true,
            'show_alpha'  => true,
            'preview'     => array(
              'type'      => 'css',
              'selector'  => '.spa-icon-box-title',
              'property'  => 'color',
            ),
          ),
          'title_typography' => array(
            'type'       => 'typography',
            'label'      => esc_html__( 'Title Typography', 'sales-page-addon' ),
            'responsive' => true,
            'preview'    => array(
              'type'     => 'css',
              'selector' => '.spa-icon-box-title',
            ),
          ),
        ),
      ),

      'content'      => array(
        'title'  => esc_html__( 'Content', 'sales-page-addon' ),
        'fields' => array(
          'content_padding'      => array(
            'type'       => 'dimension',
            'label'      => esc_html__( 'Content Padding', 'sales-page-addon' ),
            'responsive' => true,
            'slider'     => true,
            'units'      => array( 'px' ),
            'preview'    => array(
              'type'     => 'css',
              'selector' => '.spa-icon-box-description',
              'property' => 'padding',
              'important' => true,
            ),
          ),
          'content_color'      => array(
            'type'        => 'color',
            'connections' => array( 'color' ),
            'label'       => esc_html__( 'Content Color', 'sales-page-addon' ),
            'show_reset'  => true,
            'show_alpha'  => true,
            'preview'     => array(
              'type'      => 'css',
              'selector'  => '.spa-icon-box-description',
              'property'  => 'color',
              'important' => true,
            ),
          ),
          'content_typography' => array(
            'type'       => 'typography',
            'label'      => esc_html__( 'Content Typography', 'sales-page-addon' ),
            'responsive' => true,
            'preview'    => array(
              'type'     => 'css',
              'selector' => '.spa-icon-box-description',
              'important' => true,
            ),
          ),
        ),
      ),

    ),
  ),
));