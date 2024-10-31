<?php

/**
 * @class FL_Niche_IconGroupModule
 */
class FL_Niche_IconGroupModule extends FLBuilderModule {

	/**
	 * @method __construct
	 */
	public function __construct() {
		parent::__construct(array(
			'name'            => esc_html__( 'Icon Group', 'sales-page-addon' ),
			'description'     => esc_html__( 'NicheAddons icon group module.', 'sales-page-addon' ),
			'category'        => esc_html__( 'Niche Addon Modules', 'sales-page-addon' ),
			'partial_refresh' => true,
			'icon'            => 'star-filled.svg',
		));
	}
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('FL_Niche_IconGroupModule', array(
	'icons' => array(
		'title'    => esc_html__( 'Icons', 'sales-page-addon' ),
		'sections' => array(
			'general' => array(
				'title'  => '',
				'fields' => array(
					'icons' => array(
						'type'         => 'form',
						'label'        => esc_html__( 'Icon', 'sales-page-addon' ),
						'form'         => 'icon_group_form', // ID from registered form below
						'preview_text' => 'icon', // Name of a field to use for the preview text
						'multiple'     => true,
					),
				),
			),
		),
	),
	'style' => array( // Tab
		'title'    => esc_html__( 'Style', 'sales-page-addon' ), // Tab title
		'sections' => array( // Tab Sections
			'structure' => array( // Section
				'title'  => esc_html__( 'Icon', 'sales-page-addon' ), // Section Title
				'fields' => array( // Section Fields
					'size'    => array(
						'type'       => 'unit',
						'label'      => esc_html__( 'Size', 'sales-page-addon' ),
						'default'    => '30',
						'sanitize'   => 'floatval',
						'responsive' => true,
						'units'      => array( 'px', 'em', 'rem' ),
						'slider'     => true,
						'preview'    => array(
							'type' => 'none',
						),
					),
					'spacing' => array(
						'type'     => 'unit',
						'label'    => esc_html__( 'Spacing', 'sales-page-addon' ),
						'default'  => '10',
						'sanitize' => 'absint',
						'units'    => array( 'px', 'pt', '%' ),
						'slider'   => true,
						'preview'  => array(
							'type'     => 'css',
							'selector' => '{node} .fl-icon + .fl-icon',
							'property' => 'margin-left',
						),
					),
					'align'   => array(
						'type'       => 'align',
						'label'      => esc_html__( 'Alignment', 'sales-page-addon' ),
						'default'    => 'center',
						'responsive' => true,
						'preview'    => array(
							'type'     => 'css',
							'selector' => '.fl-icon-group',
							'property' => 'text-align',
						),
					),
				),
			),
			'colors'    => array( // Section
				'title'  => esc_html__( 'Icon Colors', 'sales-page-addon' ), // Section Title
				'fields' => array( // Section Fields
					'color'          => array(
						'type'        => 'color',
						'connections' => array( 'color' ),
						'label'       => esc_html__( 'Color', 'sales-page-addon' ),
						'show_reset'  => true,
						'show_alpha'  => true,
						'preview'     => array(
							'type'      => 'css',
							'selector'  => '.fl-icon i, .fl-icon i::before',
							'property'  => 'color',
							'important' => true,
						),
					),
					'hover_color'    => array(
						'type'        => 'color',
						'connections' => array( 'color' ),
						'label'       => esc_html__( 'Hover Color', 'sales-page-addon' ),
						'show_reset'  => true,
						'show_alpha'  => true,
						'preview'     => array(
							'type'      => 'css',
							'selector'  => '.fl-icon i:hover, .fl-icon i:hover::before',
							'property'  => 'color',
							'important' => true,
						),
					),
					'bg_color'       => array(
						'type'        => 'color',
						'connections' => array( 'color' ),
						'label'       => esc_html__( 'Background Color', 'sales-page-addon' ),
						'show_reset'  => true,
						'show_alpha'  => true,
					),
					'bg_hover_color' => array(
						'type'        => 'color',
						'connections' => array( 'color' ),
						'label'       => esc_html__( 'Background Hover Color', 'sales-page-addon' ),
						'show_reset'  => true,
						'show_alpha'  => true,
						'preview'     => array(
							'type' => 'none',
						),
					),
					'three_d'        => array(
						'type'    => 'select',
						'label'   => esc_html__( 'Gradient', 'sales-page-addon' ),
						'default' => '0',
						'options' => array(
							'0' => esc_html__( 'No', 'sales-page-addon' ),
							'1' => esc_html__( 'Yes', 'sales-page-addon' ),
						),
					),
				),
			),
		),
	),
));

/**
 * Register a settings form to use in the "form" field type above.
 */
FLBuilder::register_settings_form('icon_group_form', array(
	'title' => esc_html__( 'Add Icon', 'sales-page-addon' ),
	'tabs'  => array(
		'general' => array( // Tab
			'title'    => esc_html__( 'General', 'sales-page-addon' ), // Tab title
			'sections' => array( // Tab Sections
				'general' => array( // Section
					'title'  => '', // Section Title
					'fields' => array( // Section Fields
						'icon'    => array(
							'type'  => 'icon',
							'label' => esc_html__( 'Icon', 'sales-page-addon' ),
						),
						'link'    => array(
							'type'          => 'link',
							'label'         => esc_html__( 'Link', 'sales-page-addon' ),
							'show_target'   => true,
							'show_nofollow' => true,
						),
						'sr_text' => array(
							'type'    => 'text',
							'label'   => esc_html__( 'Screen Reader Text', 'sales-page-addon' ),
							'default' => '',
						),
					),
				),
			),
		),
		'style'   => array( // Tab
			'title'    => esc_html__( 'Style', 'sales-page-addon' ), // Tab title
			'sections' => array( // Tab Sections
				'colors' => array( // Section
					'title'  => esc_html__( 'Colors', 'sales-page-addon' ), // Section Title
					'fields' => array( // Section Fields
						'duo_color1'     => array(
							'label'      => esc_html__( 'DuoTone Primary Color', 'sales-page-addon' ),
							'type'       => 'color',
							'default'    => '',
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type' => 'none',
							),
						),
						'duo_color2'     => array(
							'label'      => esc_html__( 'DuoTone Secondary Color', 'sales-page-addon' ),
							'type'       => 'color',
							'default'    => '',
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type' => 'none',
							),
						),
						'color'          => array(
							'type'        => 'color',
							'connections' => array( 'color' ),
							'label'       => esc_html__( 'Color', 'sales-page-addon' ),
							'show_reset'  => true,
							'show_alpha'  => true,
						),
						'hover_color'    => array(
							'type'        => 'color',
							'connections' => array( 'color' ),
							'label'       => esc_html__( 'Hover Color', 'sales-page-addon' ),
							'show_reset'  => true,
							'show_alpha'  => true,
							'preview'     => array(
								'type' => 'none',
							),
						),
						'bg_color'       => array(
							'type'        => 'color',
							'connections' => array( 'color' ),
							'label'       => esc_html__( 'Background Color', 'sales-page-addon' ),
							'show_reset'  => true,
							'show_alpha'  => true,
						),
						'bg_hover_color' => array(
							'type'        => 'color',
							'connections' => array( 'color' ),
							'label'       => esc_html__( 'Background Hover Color', 'sales-page-addon' ),
							'show_reset'  => true,
							'show_alpha'  => true,
							'preview'     => array(
								'type' => 'none',
							),
						),
					),
				),
			),
		),
	),
));
