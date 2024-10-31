<?php
/**
 * Sales Page Addons - Title module
 * Author & Copyright: NicheAddon
 * @class FL_Magic_Wind
 */

class FL_Magic_Wind extends FLBuilderModule
{
    public function __construct()
    {
        parent::__construct(array(
            'name' => esc_html__('Magic Wind', 'sales-page-addon') ,
            'description' => esc_html__('NicheAddons image/text magic positioning module.', 'sales-page-addon') ,
            'category' => esc_html__('Niche Addon Modules', 'sales-page-addon') ,
            'partial_refresh' => true,
            'icon' => 'dashicons-buddicons-topics',
        ));
    }

    /**
     * @method get_classname
     */
    public function get_classname() {
        $classname = 'spa-magic-wind';

        if ( ! empty( $this->settings->display_type ) ) {
            $classname .= ' spa-magic-wind-type-' . $this->settings->display_type;
        }
        if ( ! empty( $this->settings->alignment ) ) {
            $classname .= ' spa-magic-wind-align-' . $this->settings->alignment;
        }
        if ( ! empty( $this->settings->display ) ) {
            $classname .= ' spa-magic-wind-display-' . $this->settings->display;
        }
        if ( ! empty( $this->settings->btn_position ) && $this->settings->btn_position == 'absolute') {
            $classname .= ' spa-magic-wind-position-absolute';
        }

        return $classname;
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('FL_Magic_Wind', array(
    'general' => array( // Tab
        'title' => esc_html__('General', 'sales-page-addon') , // Tab title
        'sections' => array( // Tab Sections
            'general' => array( // Section
                'title' => esc_html__('Title', 'sales-page-addon') , // Section Title
                'fields' => array( // Section Fields
                    'display_type'  => array(
                        'type'    => 'select',
                        'label'   => __( 'Type', 'sales-page-addon' ),
                        'default' => 'text',
                        'options' => array(
                            'text' => __( 'Text', 'sales-page-addon' ),
                            'image'  => __( 'Image', 'sales-page-addon' ),
                        ),
                        'toggle'  => array(
                            'text'     => array(
                                'fields' => array( 'text', 'text_tag' ),
                            ),
                            'image' => array(
                                'fields' => array( 'image' ),
                            ),
                        ),
                    ),
                    'image' => array(
                        'type'   => 'photo',
                        'label'  => esc_html__('Image', 'sales-page-addon'),
                        'show_remove'   => true,
                    ),
                    'text' => array(
                        'type' => 'textarea',
                        'label' => esc_html__('Text', 'sales-page-addon') ,
                        'default' => esc_html__('Type any text here', 'sales-page-addon') ,
                        'placeholder' => esc_html__('Type any text here', 'sales-page-addon') ,
                    ) ,
                    'text_tag' => array(
                        'type' => 'select',
                        'label' => esc_html__('HTML Tag', 'sales-page-addon') ,
                        'default' => 'h2',
                        'options' => array(
                            'h1' => esc_html__('H1', 'sales-page-addon') ,
                            'h2' => esc_html__('H2', 'sales-page-addon') ,
                            'h3' => esc_html__('H3', 'sales-page-addon') ,
                            'h4' => esc_html__('H4', 'sales-page-addon') ,
                            'h5' => esc_html__('H5', 'sales-page-addon') ,
                            'h6' => esc_html__('H6', 'sales-page-addon') ,
                            'div' => esc_html__('div', 'sales-page-addon') ,
                            'span' => esc_html__('span', 'sales-page-addon') ,
                            'p' => esc_html__('p', 'sales-page-addon') ,
                        ) ,
                    ) ,
                )
            )
        )
    ) ,
    'style' => array(
        'title' => esc_html__('Style', 'sales-page-addon') ,
        'sections' => array(

            'title' => array(
                'title' => esc_html__('Style', 'sales-page-addon') ,
                'fields' => array(
                    'alignment' => array(
                        'type' => 'align',
                        'label' => esc_html__('Align', 'sales-page-addon') ,
                        'default' => 'left',
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.spa-magic-wind-wrapper',
                            'property' => 'text-align',
                            'important' => true,
                        ),
                    ),
                    'display' => array(
                        'type'    => 'select',
                        'label'   => esc_html__( 'Display', 'sales-page-addon' ),
                        'default' => 'block',
                        'options' => array(
                            'block' => esc_html__( 'Block', 'sales-page-addon' ),
                            'inline-block'  => esc_html__( 'Inline Block', 'sales-page-addon' ),
                        ),
                    ),
                    'position' => array(
                        'type'    => 'select',
                        'label'   => esc_html__( 'Position', 'sales-page-addon' ),
                        'default' => 'relative',
                        'options' => array(
                            'relative' => esc_html__( 'Default', 'sales-page-addon' ),
                            'absolute'  => esc_html__( 'Absolute', 'sales-page-addon' ),
                        ),
                        'toggle'  => array(
                            'absolute'  => array(
                                'fields' => array( 'position_dimension' ),
                            ),
                        ),
                    ),
                    'position_dimension' => array(
                        'type'       => 'dimension',
                        'label'      => __( 'Position Dimension', 'sales-page-addon' ),
                        'responsive' => true,
                        'slider'     => true,
                        'units'   => array(
                            'px',
                            'vw',
                            '%',
                        ),
                    ),
                    'item_padding' => array(
                        'type' => 'dimension',
                        'label' => esc_html__('Padding', 'sales-page-addon') ,
                        'responsive' => true,
                        'slider' => true,
                        'units'   => array(
                            'px',
                            'vw',
                            '%',
                        ),
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.spa-magic-wind-wrapper',
                            'property' => 'padding',
                        ) ,
                    ) ,
                    'item_margin' => array(
                        'type' => 'dimension',
                        'label' => esc_html__('Margin', 'sales-page-addon') ,
                        'responsive' => true,
                        'slider' => true,
                        'units'   => array(
                            'px',
                            'vw',
                            '%',
                        ),
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.spa-magic-wind-wrapper',
                            'property' => 'margin',
                        ) ,
                    ) ,
                    'color' => array(
                        'type' => 'color',
                        'connections' => array(
                            'color'
                        ) ,
                        'label' => esc_html__('Color', 'sales-page-addon') ,
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.spa-magic-wind',
                            'property' => 'color',
                        ) ,
                    ) ,
                    'typography' => array(
                        'type' => 'typography',
                        'label' => esc_html__('Title Typography', 'sales-page-addon') ,
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.spa-magic-wind',
                        ) ,
                    ) ,
                    'bg_color'          => array(
                        'type'        => 'color',
                        'connections' => array( 'color' ),
                        'label'       => esc_html__( 'Background Color', 'sales-page-addon' ),
                        'default'     => '',
                        'show_reset'  => true,
                        'show_alpha'  => true,
                    ),
                ) ,
            ) ,

        ) ,
    ) ,
));