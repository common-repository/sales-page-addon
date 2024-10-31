<?php
/**
 * Sales Page Addons - Title module
 * Author & Copyright: NicheAddon
 * @class FL_Niche_Title
 */

class FL_Niche_Title extends FLBuilderModule
{
    public function __construct()
    {
        parent::__construct(array(
            'name' => esc_html__('Title', 'sales-page-addon') ,
            'description' => esc_html__('NicheAddons title module.', 'sales-page-addon') ,
            'category' => esc_html__('Niche Addon Modules', 'sales-page-addon') ,
            'partial_refresh' => true,
            'icon' => 'hamburger-menu.svg',
        ));
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('FL_Niche_Title', array(
    'general' => array( // Tab
        'title' => esc_html__('General', 'sales-page-addon') , // Tab title
        'sections' => array( // Tab Sections
            'general' => array( // Section
                'title' => esc_html__('Title', 'sales-page-addon') , // Section Title
                'fields' => array( // Section Fields
                    'first_part_title' => array(
                        'type' => 'textarea',
                        'label' => esc_html__('First part of title', 'sales-page-addon') ,
                        'default' => esc_html__('First part ', 'sales-page-addon') ,
                        'placeholder' => esc_html__('Type first part of title here', 'sales-page-addon') ,
                    ) ,
                    'middle_part_title' => array(
                        'type' => 'textarea',
                        'label' => esc_html__('Middle part of title', 'sales-page-addon') ,
                        'default' => esc_html__('nice middle', 'sales-page-addon') ,
                        'placeholder' => esc_html__('Type middle part of title here', 'sales-page-addon') ,
                    ) ,
                    'last_part_title' => array(
                        'type' => 'textarea',
                        'label' => esc_html__('Last part of title', 'sales-page-addon') ,
                        'default' => esc_html__(' last part of title', 'sales-page-addon') ,
                        'placeholder' => esc_html__('Type last part of title here', 'sales-page-addon') ,
                    ) ,
                    'title_tag' => array(
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
                    'title_alignment' => array(
                        'type' => 'align',
                        'label' => esc_html__('Align', 'sales-page-addon') ,
                        'default' => 'left',
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.spa-title-wrapper',
                            'property' => 'text-align',
                            'important' => false,
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
                'title' => esc_html__('Style - Overall', 'sales-page-addon') ,
                'fields' => array(
                    'title_padding' => array(
                        'type' => 'dimension',
                        'label' => esc_html__('Padding', 'sales-page-addon') ,
                        'responsive' => true,
                        'slider' => true,
                        'units' => array(
                            'px'
                        ) ,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.spa-title',
                            'property' => 'padding',
                        ) ,
                    ) ,
                    'title_margin' => array(
                        'type' => 'dimension',
                        'label' => esc_html__('Margin', 'sales-page-addon') ,
                        'responsive' => true,
                        'slider' => true,
                        'units' => array(
                            'px'
                        ) ,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.spa-title',
                            'property' => 'margin',
                        ) ,
                    ) ,
                    'title_color' => array(
                        'type' => 'color',
                        'connections' => array(
                            'color'
                        ) ,
                        'label' => esc_html__('Title Color', 'sales-page-addon') ,
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.spa-title',
                            'property' => 'color',
                        ) ,
                    ) ,
                    'title_typography' => array(
                        'type' => 'typography',
                        'label' => esc_html__('Title Typography', 'sales-page-addon') ,
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.spa-title',
                        ) ,
                    ) ,
                ) ,
            ) ,

            'first_part' => array(
                'title' => esc_html__('First Part', 'sales-page-addon') ,
                'fields' => array(
                    'first_part_color' => array(
                        'type' => 'color',
                        'connections' => array(
                            'color'
                        ) ,
                        'label' => esc_html__('Color', 'sales-page-addon') ,
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.spa-title span.first-part',
                            'property' => 'color',
                        ) ,
                    ) ,
                    'first_part_font_family' => array(
                        'type' => 'typography',
                        'label' => esc_html__('Typography', 'sales-page-addon') ,
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '..spa-title span.first-part',
                        ) ,
                    ) ,
                ) ,
            ) ,

            // Middle Part
            'middle_part' => array(
                'title' => esc_html__('Middle Part', 'sales-page-addon') ,
                'fields' => array(
                    'middle_style' => array(
                        'type' => 'select',
                        'label' => esc_html__('Style', 'sales-page-addon') ,
                        'default' => 'none',
                        'options' => array(
                            'none' => esc_html__('None', 'sales-page-addon') ,
                            'underline' => esc_html__('Underline', 'sales-page-addon') ,
                            'italic' => esc_html__('Italic', 'sales-page-addon') ,
                            'styled' => esc_html__('Styled Background', 'sales-page-addon') ,
                            'styled-1' => esc_html__('Styled Background 1', 'sales-page-addon') ,
                            'color-bg' => esc_html__('Color Background', 'sales-page-addon') ,
                            'curve' => esc_html__('Curved Background', 'sales-page-addon') ,
                            'curve-css3' => esc_html__('Curved CSS3 Background', 'sales-page-addon') ,
                        ) ,
                        'toggle' => array(
                            'color-bg' => array(
                                'fields' => array(
                                    'middle_part_bg_color'
                                ) ,
                            ) ,
                            'curve-css3' => array(
                                'fields' => array(
                                    'middle_part_curve_bg_color',
                                    'middle_part_clip_path'
                                ) ,
                            ) ,
                        ) ,
                    ) ,
                    'middle_title_padding' => array(
                        'type' => 'dimension',
                        'label' => esc_html__('Padding', 'sales-page-addon') ,
                        'responsive' => true,
                        'slider' => true,
                        'units' => array(
                            'px'
                        ) ,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.spa-title span.middle-part',
                            'property' => 'padding',
                        ) ,
                    ) ,
                    'middle_title_margin' => array(
                        'type' => 'dimension',
                        'label' => esc_html__('Margin', 'sales-page-addon') ,
                        'responsive' => true,
                        'slider' => true,
                        'units' => array(
                            'px'
                        ) ,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.spa-title span.middle-part',
                            'property' => 'margin',
                        ) ,
                    ) ,
                    'middle_part_color' => array(
                        'type' => 'color',
                        'connections' => array(
                            'color'
                        ) ,
                        'label' => esc_html__('Color', 'sales-page-addon') ,
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.spa-title span.middle-part',
                            'property' => 'color',
                        ) ,
                    ) ,
                    'middle_part_bg_color' => array(
                        'type' => 'color',
                        'connections' => array(
                            'color'
                        ) ,
                        'label' => esc_html__('Background Color', 'sales-page-addon') ,
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.spa-title span.middle-part::after',
                            'property' => 'background-color',
                        ) ,
                    ) ,
                    'middle_part_curve_bg_color' => array(
                        'type' => 'color',
                        'connections' => array(
                            'color'
                        ) ,
                        'label' => esc_html__('Background Color', 'sales-page-addon') ,
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.spa-title span.middle-part-style-curve-css3::after',
                            'property' => 'background-color',
                        ) ,
                    ) ,
                    'middle_part_clip_path' => array(
                        'type' => 'text',
                        'label' => esc_html__('Clip Path', 'sales-page-addon') ,
                        'default' => esc_html__('13% 0, 93% 4%, 100% 95%, 0% 100%', 'sales-page-addon') ,
                        'placeholder' => esc_html__('13% 0, 93% 4%, 100% 95%, 0% 100%', 'sales-page-addon') ,
                        'preview' => array(
                            'type' => 'none',
                        ) ,
                    ) ,
                    'middle_part_font_family' => array(
                        'type' => 'typography',
                        'label' => esc_html__('Typography', 'sales-page-addon') ,
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.spa-title span.middle-part',
                        ) ,
                    ) ,
                ) ,
            ) ,

            'last_part' => array(
                'title' => esc_html__('Last Part', 'sales-page-addon') ,
                'fields' => array(
                    'last_part_color' => array(
                        'type' => 'color',
                        'connections' => array(
                            'color'
                        ) ,
                        'label' => esc_html__('Color', 'sales-page-addon') ,
                        'show_reset' => true,
                        'show_alpha' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.spa-title span.last-part',
                            'property' => 'color',
                        ) ,
                    ) ,
                    'last_part_font_family' => array(
                        'type' => 'typography',
                        'label' => esc_html__('Typography', 'sales-page-addon') ,
                        'responsive' => true,
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.spa-title span.last-part',
                        ) ,
                    ) ,
                ) ,
            ) ,

        ) ,
    ) ,
));