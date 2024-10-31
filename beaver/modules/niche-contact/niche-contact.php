<?php

/**
* This is an example module with only the basic
* setup necessary to get it working.
*
* @class FL_Niche_Contact
*/
class FL_Niche_Contact extends FLBuilderModule {
  public function __construct() {
    parent::__construct(array(
      'name'          => esc_html__('Form', 'sales-page-addon'),
      'description'   => esc_html__('NicheAddons module.', 'sales-page-addon'),
      'category'		=> esc_html__('Niche Addon Modules', 'sales-page-addon'),
      'partial_refresh' => true,
      'icon'            => 'dashicons-editor-table',
    ));
  }
}

/**
* Register the module and its form settings.
*/
FLBuilder::register_module('FL_Niche_Contact', array(
  'general'       => array( // Tab
    'title'         => esc_html__('General', 'sales-page-addon'), // Tab title
    'sections'      => array( // Tab Sections
      'general'       => array( // Section
        'title'         => esc_html__('Contact Form', 'sales-page-addon'), // Section Title
        'fields'        => array( // Section Fields
          'contact_form' => array(
            'type'          => 'text',
            'label'         => esc_html__('Contact Form', 'sales-page-addon'),
            'default'       => '',
            'placeholder'   => esc_html__('[contact-form-7 id="4" title="Contact form"]', 'sales-page-addon'),
          ),
          'form_style' => array(
            'type' => 'select',
            'label' => esc_html__('Style', 'sales-page-addon') ,
            'default' => 'style-1',
            'options' => array(
              'style-1'  => esc_html__( 'Style 1', 'sales-page-addon' ),
              'style-2'  => esc_html__( 'Style 2', 'sales-page-addon' ),
              'style-3'  => esc_html__( 'Style 3', 'sales-page-addon' ),
              'style-4'  => esc_html__( 'Style 4', 'sales-page-addon' ),
              'style-5'  => esc_html__( 'Style 5', 'sales-page-addon' ),
              'style-6'  => esc_html__( 'Style 6', 'sales-page-addon' ),
              'custom'  => esc_html__( 'Custom', 'sales-page-addon' ),
            ) ,
          ) ,
        )
      )
    )
  ),
  'style'   => array(
    'title'    => esc_html__( 'Style', 'sales-page-addon' ),
    'sections' => array(

      'form'      => array(
        'title'  => esc_html__( 'Form', 'sales-page-addon' ),
        'fields' => array(
          'form_padding'      => array(
            'type'       => 'dimension',
            'label'      => esc_html__( 'Form Input Padding', 'sales-page-addon' ),
            'responsive' => true,
            'slider'     => true,
            'units'      => array( 'px' ),
            'preview'    => array(
              'type'     => 'css',
              'selector' => '.spa-form input[type="text"], .spa-form input[type="email"], .spa-form input[type="password"], .post-password-form input[type="password"], .spa-form input[type="tel"], .spa-form input[type="search"], .spa-form input[type="date"], .spa-form input[type="time"], .spa-form input[type="datetime-local"], .spa-form input[type="event-month"], .spa-form input[type="url"], .spa-form input[type="number"], .spa-form textarea, .spa-form select',
              'property' => 'padding',
            ),
          ),
          'form_margin'      => array(
            'type'       => 'dimension',
            'label'      => esc_html__( 'Form Margin', 'sales-page-addon' ),
            'responsive' => true,
            'slider'     => true,
            'units'      => array( 'px' ),
            'preview'    => array(
              'type'     => 'css',
              'selector' => '.spa-form input[type="text"], .spa-form input[type="email"], .spa-form input[type="password"], .post-password-form input[type="password"], .spa-form input[type="tel"], .spa-form input[type="search"], .spa-form input[type="date"], .spa-form input[type="time"], .spa-form input[type="datetime-local"], .spa-form input[type="event-month"], .spa-form input[type="url"], .spa-form input[type="number"], .spa-form textarea, .spa-form select',
              'property' => 'margin',
            ),
          ),
          'field_col_spacing' => array(
            'type' => 'select',
            'label' => esc_html__('Column Spacing', 'sales-page-addon') ,
            'default' => 'space-default',
            'options' => array(
              'space-default'  => esc_html__( 'Default', 'sales-page-addon' ),
              'space-5'  => esc_html__( 'Space 5', 'sales-page-addon' ),
              'space-10'  => esc_html__( 'Space 10', 'sales-page-addon' ),
              'space-20'  => esc_html__( 'Space 20', 'sales-page-addon' ),
            ),
          ),
          'form_typography' => array(
            'type'       => 'typography',
            'label'      => esc_html__( 'Typography - Overall', 'sales-page-addon' ),
            'responsive' => true,
            'preview'    => array(
              'type'     => 'css',
              'selector' => '.spa-form input[type="text"], .spa-form input[type="email"], .spa-form input[type="password"], .post-password-form input[type="password"], .spa-form input[type="tel"], .spa-form input[type="search"], .spa-form input[type="date"], .spa-form input[type="time"], .spa-form input[type="datetime-local"], .spa-form input[type="event-month"], .spa-form input[type="url"], .spa-form input[type="number"], .spa-form textarea, .spa-form select, .spa-form select, .spa-form label, .spa-form p, .spa-form label, .spa-form input[type="submit"]',
            ),
          ),
          'form_label_typography' => array(
            'type'       => 'typography',
            'label'      => esc_html__( 'Typography - Label', 'sales-page-addon' ),
            'responsive' => true,
            'preview'    => array(
              'type'     => 'css',
              'selector' => '.spa-form label',
            ),
          ),
          'form_color'      => array(
            'type'        => 'color',
            'connections' => array( 'color' ),
            'label'       => esc_html__( 'Form Text Color', 'sales-page-addon' ),
            'show_reset'  => true,
            'show_alpha'  => true,
            'preview'     => array(
              'type'      => 'css',
              'selector'  => '.spa-form input[type="text"], .spa-form input[type="email"], .spa-form input[type="password"], .spa-form input[type="tel"], .spa-form select, .spa-form textarea',
              'property'  => 'color',
            ),
          ),
          'placeholder_color'      => array(
            'type'        => 'color',
            'connections' => array( 'color' ),
            'label'       => esc_html__( 'Placeholder Text Color', 'sales-page-addon' ),
            'show_reset'  => true,
            'show_alpha'  => true,
            'preview'     => array(
              'type'      => 'css',
              'selector'  => '.spa-form input:not([type="submit"])::-webkit-input-placeholder, .spa-form input:not([type="submit"])::-moz-placeholder, .spa-form input:not([type="submit"])::-ms-input-placeholder, .spa-form input:not([type="submit"])::-o-placeholder, .spa-form textarea::-webkit-input-placeholder, .spa-form textarea::-moz-placeholder, .spa-form textarea::-ms-input-placeholder, .spa-form textarea::-o-placeholder',
              'property'  => 'color',
            ),
          ),
          'form_bg_color'      => array(
            'type'        => 'color',
            'connections' => array( 'color' ),
            'label'       => esc_html__( 'Form Field Background Color', 'sales-page-addon' ),
            'show_reset'  => true,
            'show_alpha'  => true,
            'preview'     => array(
              'type'      => 'css',
              'selector'  => '.spa-form input[type="text"], .spa-form input[type="email"], .spa-form input[type="password"], .post-password-form input[type="password"], .spa-form input[type="tel"], .spa-form input[type="search"], .spa-form input[type="date"], .spa-form input[type="time"], .spa-form input[type="datetime-local"], .spa-form input[type="event-month"], .spa-form input[type="url"], .spa-form input[type="number"], .spa-form textarea, .spa-form select',
              'property'  => 'background',
            ),
          ),
          'form_border'  => array(
            'type'       => 'border',
            'label'      => esc_html__( 'Field Border', 'sales-page-addon' ),
            'responsive' => true,
            'preview'    => array(
              'type'      => 'css',
              'selector'  => '.spa-form input[type="text"], .spa-form input[type="email"], .spa-form input[type="password"], .post-password-form input[type="password"], .spa-form input[type="tel"], .spa-form input[type="search"], .spa-form input[type="date"], .spa-form input[type="time"], .spa-form input[type="datetime-local"], .spa-form input[type="event-month"], .spa-form input[type="url"], .spa-form input[type="number"], .spa-form textarea, .spa-form select',
              'important' => true,
            ),
          ),
          
        ),
      ),
      
      'button'      => array(
        'title'  => esc_html__( 'Button', 'sales-page-addon' ),
        'fields' => array(
          'btn_padding'      => array(
            'type'       => 'dimension',
            'label'      => esc_html__( 'Button Padding', 'sales-page-addon' ),
            'responsive' => true,
            'slider'     => true,
            'units'      => array( 'px' ),
            'preview'    => array(
              'type'     => 'css',
              'selector' => '.spa-form input[type="submit"]',
              'property' => 'padding',
            ),
          ),
          'btn_margin'      => array(
            'type'       => 'dimension',
            'label'      => esc_html__( 'Button Margin', 'sales-page-addon' ),
            'responsive' => true,
            'slider'     => true,
            'units'      => array( 'px' ),
            'preview'    => array(
              'type'     => 'css',
              'selector' => '.spa-form input[type="submit"]',
              'property' => 'margin',
            ),
          ),
          'btn_typography' => array(
            'type'       => 'typography',
            'label'      => esc_html__( 'Button Typography', 'sales-page-addon' ),
            'responsive' => true,
            'preview'    => array(
              'type'     => 'css',
              'selector' => '.spa-form input[type="submit"]',
            ),
          ),
          'btn_color'      => array(
            'type'        => 'color',
            'connections' => array( 'color' ),
            'label'       => esc_html__( 'Button Color', 'sales-page-addon' ),
            'show_reset'  => true,
            'show_alpha'  => true,
            'preview'     => array(
              'type'      => 'css',
              'selector'  => '.spa-form input[type="submit"]',
              'property'  => 'color',
            ),
          ),
          'btn_bg_color'      => array(
            'type'        => 'color',
            'connections' => array( 'color' ),
            'label'       => esc_html__( 'Button Background Color', 'sales-page-addon' ),
            'show_reset'  => true,
            'show_alpha'  => true,
            'preview'     => array(
              'type'      => 'css',
              'selector'  => '.spa-form input[type="submit"]',
              'property'  => 'background',
            ),
          ),
          'btn_border'  => array(
            'type'       => 'border',
            'label'      => esc_html__( 'Border', 'sales-page-addon' ),
            'responsive' => true,
            'preview'    => array(
              'type'      => 'css',
              'selector'  => '.spa-form input[type="submit"]',
              'important' => true,
            ),
          ),
          'btn_hover_color'      => array(
            'type'        => 'color',
            'connections' => array( 'color' ),
            'label'       => esc_html__( 'Button Hover Color', 'sales-page-addon' ),
            'show_reset'  => true,
            'show_alpha'  => true,
            'preview'     => array(
              'type'      => 'css',
              'selector'  => '.spa-form input[type="submit"]:hover',
              'property'  => 'color',
            ),
          ),
          'btn_hover_bg_color'      => array(
            'type'        => 'color',
            'connections' => array( 'color' ),
            'label'       => esc_html__( 'Button Hover Background Color', 'sales-page-addon' ),
            'show_reset'  => true,
            'show_alpha'  => true,
            'preview'     => array(
              'type'      => 'css',
              'selector'  => '.spa-form input[type="submit"]:hover',
              'property'  => 'background',
            ),
          ),
          'btn_hover_border'  => array(
            'type'       => 'border',
            'label'      => esc_html__( 'Border hover', 'sales-page-addon' ),
            'responsive' => true,
            'preview'    => array(
              'type'      => 'css',
              'selector'  => '.spa-form input[type="submit"]:hover',
              'important' => true,
            ),
          ),
        ),
      ),

    ),
  ),
));