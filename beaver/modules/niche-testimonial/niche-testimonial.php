<?php

/**
* This is an example module with only the basic
* setup necessary to get it working.
*
* @class FL_Niche_Testimonial
*/
class FL_Niche_Testimonial extends FLBuilderModule {
  public function __construct() {
    parent::__construct(array(
      'name'          => esc_html__('Testimonial', 'sales-page-addon'),
      'description'   => esc_html__('NicheAddons testimonial module.', 'sales-page-addon'),
      'category'		=> esc_html__('Niche Addon Modules', 'sales-page-addon'),
      'partial_refresh' => true,
      'icon'            => '<span class="dashicons dashicons-index-card"></span>',
    ));
  }
}

/**
* Register the module and its form settings.
*/
FLBuilder::register_module('FL_Niche_Testimonial', array(
  'general'       => array( // Tab
    'title'         => esc_html__('General', 'sales-page-addon'), // Tab title
    'sections'      => array( // Tab Sections
      'general'       => array( // Section
        'title'         => esc_html__('Testimonials', 'sales-page-addon'), // Section Title
        'fields'        => array( // Section Fields
          'style' => array(
            'type'    => 'select',
            'label'   => esc_html__( 'Style', 'sales-page-addon' ),
            'default' => 'one',
            'options' => array(
              'one' => esc_html__( 'Style One', 'sales-page-addon' ),
              'two' => esc_html__( 'Style Two', 'sales-page-addon' ),
              'three' => esc_html__( 'Style Three', 'sales-page-addon' ),
              'four' => esc_html__( 'Style Four', 'sales-page-addon' ),
            ),
            'toggle'  => array(
              'two' => array(
                'fields' => array( 'quote_image_url' ),
              ),
              'three' => array(
                'fields' => array( 'star_rating' ),
              ),
              'four' => array(
                'fields' => array( 'quote_image_url', 'star_rating' ),
              ),
            ),
          ),
          'name' => array(
            'type'          => 'textarea',
            'label'         => esc_html__('Name', 'sales-page-addon'),
            'default'       => '',
            'placeholder'   => esc_html__('Name text', 'sales-page-addon'),
          ),
          'location' => array(
            'type'          => 'textarea',
            'label'         => esc_html__('Location/Designation', 'sales-page-addon'),
            'default'       => '',
            'placeholder'   => esc_html__('Location text', 'sales-page-addon'),
          ),
          'image' => array(
            'type'          => 'photo',
            'label'         => esc_html__('Image', 'sales-page-addon'),
            'show_remove'   => true,
          ),
          'quote_image_url' => array(
            'type'          => 'photo',
            'label'         => esc_html__('Quote Image', 'sales-page-addon'),
            'show_remove'   => true,
          ),
          'star_rating' => array(
            'type'          => 'text',
            'label'         => esc_html__('Star Rating', 'sales-page-addon'),
            'default'       => '',
            'placeholder'   => esc_html__('4.5', 'sales-page-addon'),
          ),
          'content' => array(
            'type'        => 'editor',
            'label'       => '',
            'rows'        => 13,
            'wpautop'     => false,
            'preview'     => array(
              'type'     => 'text',
              'selector' => '.fl-rich-text',
            ),
            'connections' => array( 'string' ),
          ),
        )
      )
    )
  ),
  'style'   => array(
    'title'    => esc_html__( 'Style', 'sales-page-addon' ),
    'sections' => array(
      'name' => array(
        'title'  => esc_html__( 'Name', 'sales-page-addon' ),
        'fields' => array(
          'name_color'      => array(
            'type'        => 'color',
            'connections' => array( 'color' ),
            'show_reset'  => true,
            'show_alpha'  => true,
            'label'       => esc_html__( 'Name Color', 'sales-page-addon' ),
            'preview'     => array(
              'type'      => 'css',
              'selector'  => '{node} .niche-testimonial-item .niche-testimonial-name',
              'property'  => 'color',
              'important' => true,
            ),
          ),
          'name_typography' => array(
            'type'       => 'typography',
            'label'      => esc_html__( 'Name Typography', 'sales-page-addon' ),
            'responsive' => true,
            'preview'    => array(
              'type'      => 'css',
              'selector'  => '{node} .niche-testimonial-item .niche-testimonial-name',
              'important' => true,
            ),
          ),
        ),
      ),
      'location' => array(
        'title'  => esc_html__( 'Location', 'sales-page-addon' ),
        'fields' => array(
          'location_color'      => array(
            'type'        => 'color',
            'connections' => array( 'color' ),
            'show_reset'  => true,
            'show_alpha'  => true,
            'label'       => esc_html__( 'Location Color', 'sales-page-addon' ),
            'preview'     => array(
              'type'      => 'css',
              'selector'  => '{node} .niche-testimonial-item .niche-testimonial-location',
              'property'  => 'color',
              'important' => true,
            ),
          ),
          'location_typography' => array(
            'type'       => 'typography',
            'label'      => esc_html__( 'Location Typography', 'sales-page-addon' ),
            'responsive' => true,
            'preview'    => array(
              'type'      => 'css',
              'selector'  => '{node} .niche-testimonial-item .niche-testimonial-location',
              'important' => true,
            ),
          ),
        ),
      ),
      'content' => array(
        'title'  => esc_html__( 'Contant', 'sales-page-addon' ),
        'fields' => array(
          'content_color'      => array(
            'type'        => 'color',
            'connections' => array( 'color' ),
            'show_reset'  => true,
            'show_alpha'  => true,
            'label'       => esc_html__( 'Contant Color', 'sales-page-addon' ),
            'preview'     => array(
              'type'      => 'css',
              'selector'  => '{node} .niche-testimonial-item .niche-testimonial-content',
              'property'  => 'color',
              'important' => true,
            ),
          ),
          'content_typography' => array(
            'type'       => 'typography',
            'label'      => esc_html__( 'Contant Typography', 'sales-page-addon' ),
            'responsive' => true,
            'preview'    => array(
              'type'      => 'css',
              'selector'  => '{node} .niche-testimonial-item .niche-testimonial-content',
              'important' => true,
            ),
          ),
        ),
      ),
    ),
  ),
));