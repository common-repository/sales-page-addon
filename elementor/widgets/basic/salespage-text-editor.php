<?php
/*
 * Elementor Sales Page Addon Sample Widget
 * Author & Copyright: NicheAddon
*/

namespace Elementor;

if (!isset(get_option( 'spa_bw_settings' )['sales_page_rich_editor'])) { // enable & disable

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Sales_Page_Elementor_Addon_Rich_Editor extends Widget_Base{

	/**
	 * Retrieve the widget name.
	*/
	public function get_name(){
		return 'sales_page_basic_rich_editor';
	}

	/**
	 * Retrieve the widget title.
	*/
	public function get_title(){
		return esc_html__( 'SP Rich Editor', 'sales-page-addon' );
	}

	/**
	 * Retrieve the widget icon.
	*/
	public function get_icon() {
		return 'eicon-text';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	*/
	public function get_categories() {
		return ['sales_page-basic-category'];
	}

	/**
	 * Register Sales Page Addon Sample widget controls.
	 * Adds different input fields to allow the user to change and customize the widget settings.
	*/
	protected function _register_controls(){

		$this->start_controls_section(
			'section_opt',
			[
				'label' => esc_html__( 'Editor', 'sales-page-addon' ),
			]
		);

		$this->add_control(
			'rich_editor',
			[
				'label' => '',
				'type' => Controls_Manager::WYSIWYG,
				'default' => '<p>' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'sales-page-addon' ) . '</p>',
			]
		);

		$this->end_controls_section();// end: Section

		$this->start_controls_section(
			'section_style',
			[
				'label' => esc_html__( 'Text', 'sales-page-addon' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'align',
			[
				'label' => esc_html__( 'Alignment', 'sales-page-addon' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-right',
					],
					'justify' => [
						'title' => esc_html__( 'Justified', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-justify',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .spa-rich-text-editor' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'text_color',
			[
				'label' => esc_html__( 'Text Color', 'sales-page-addon' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}}' => 'color: {{VALUE}};',
				]
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typography',
			]
		);

		$this->add_control(
			'sample_icon',
			[
				'label' => esc_html__( 'Sample Icon', 'sales-page-addon' ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);

		$this->end_controls_section();
		// Text End

		// H2 Start
		$this->start_controls_section(
			'section_h2',
			[
				'label' => esc_html__( 'H2', 'sales-page-addon' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'h2_align',
			[
				'label' => esc_html__( 'Alignment', 'sales-page-addon' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-right',
					],
					'justify' => [
						'title' => esc_html__( 'Justified', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-justify',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .spa-rich-text-editor h2' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'h2_color',
			[
				'label' => esc_html__( 'H2 Color', 'sales-page-addon' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} h2' => 'color: {{VALUE}};',
				]
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'h2_typography',
				'selector' => '{{WRAPPER}} .spa-rich-text-editor h2',
				'separator' => 'before',
			]
		);

		$this->end_controls_section();
		// H2 End

		// H3 Start
		$this->start_controls_section(
			'section_h3',
			[
				'label' => esc_html__( 'H3', 'sales-page-addon' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'h3_align',
			[
				'label' => esc_html__( 'Alignment', 'sales-page-addon' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-right',
					],
					'justify' => [
						'title' => esc_html__( 'Justified', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-justify',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .spa-rich-text-editor h3' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'h3_color',
			[
				'label' => esc_html__( 'H3 Color', 'sales-page-addon' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} h3' => 'color: {{VALUE}};',
				]
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'h3_typography',
				'selector' => '{{WRAPPER}} .spa-rich-text-editor h3',
				'separator' => 'before',
			]
		);

		$this->end_controls_section();
		// H3 End

		// H4 Start
		$this->start_controls_section(
			'section_h4',
			[
				'label' => esc_html__( 'H4', 'sales-page-addon' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'h4_align',
			[
				'label' => esc_html__( 'Alignment', 'sales-page-addon' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-right',
					],
					'justify' => [
						'title' => esc_html__( 'Justified', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-justify',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .spa-rich-text-editor h4' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'h4_color',
			[
				'label' => esc_html__( 'H4 Color', 'sales-page-addon' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} h4' => 'color: {{VALUE}};',
				]
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'h4_typography',
				'selector' => '{{WRAPPER}} .spa-rich-text-editor h4',
				'separator' => 'before',
			]
		);

		$this->end_controls_section();
		// H4 End

		// Link Start
		$this->start_controls_section(
			'section_link',
			[
				'label' => esc_html__( 'Link (a tag)', 'sales-page-addon' ),
				'tab' => Controls_Manager::TAB_STYLE
			]
		);

		$this->add_responsive_control(
			'link_align',
			[
				'label' => esc_html__( 'Alignment', 'sales-page-addon' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-right',
					],
					'justify' => [
						'title' => esc_html__( 'Justified', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-justify',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .spa-rich-text-editor a' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->start_controls_tabs( 'tabs_link_style' );
		$this->start_controls_tab(
			'tab_link_normal',
			[
				'label' => esc_html__( 'Normal', 'elementor' ),
			]
		);

		$this->add_control(
			'link_color',
			[
				'label' => esc_html__( 'Text Color', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .spa-rich-text-editor a' => 'fill: {{VALUE}}; color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'tab_link_hover',
			[
				'label' => esc_html__( 'Hover', 'elementor' ),
			]
		);

		$this->add_control(
			'link_hover_color',
			[
				'label' => esc_html__( 'Text Color', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .spa-rich-text-editor a:hover, {{WRAPPER}} .spa-rich-text-editor a:focus' => 'color: {{VALUE}};',
					'{{WRAPPER}} .spa-rich-text-editor a:hover svg, {{WRAPPER}} .spa-rich-text-editor a:focus svg' => 'fill: {{VALUE}};',
				],
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'link_typography',
				'selector' => '{{WRAPPER}} .spa-rich-text-editor a',
				'separator' => 'before',
			]
		);

		$this->end_controls_section();
		// Link End
		
		// Unordered Start
		$this->start_controls_section(
			'section_unordered_list',
			[
				'label' => esc_html__( 'Unordered list', 'sales-page-addon' ),
				'tab' => Controls_Manager::TAB_STYLE
			]
		);

		$this->add_responsive_control(
			'unordered_list_align',
			[
				'label' => esc_html__( 'Alignment', 'sales-page-addon' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-right',
					],
					'justify' => [
						'title' => esc_html__( 'Justified', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-justify',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .spa-rich-text-editor ul' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'unordered_list_color',
			[
				'label' => esc_html__( 'Text Color', 'sales-page-addon' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .spa-rich-text-editor ul' => 'color: {{VALUE}};',
				]
			]
		);
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'unordered_list_typography',
				'selector' => '{{WRAPPER}} .spa-rich-text-editor ul',
			]
		);

		$this->end_controls_section();
		// Unordered End

		// SUB Start
		$this->start_controls_section(
			'section_sub',
			[
				'label' => esc_html__( 'SUB', 'sales-page-addon' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'sub_align',
			[
				'label' => esc_html__( 'Alignment', 'sales-page-addon' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-right',
					],
					'justify' => [
						'title' => esc_html__( 'Justified', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-justify',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .spa-rich-text-editor sub' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'sub_color',
			[
				'label' => esc_html__( 'SUB Color', 'sales-page-addon' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} sub' => 'color: {{VALUE}};',
				]
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'sub_typography',
				'selector' => '{{WRAPPER}} .spa-rich-text-editor sub',
				'separator' => 'before',
			]
		);

		$this->end_controls_section();
		// SUB End

		// Strong Start
		$this->start_controls_section(
			'section_strong',
			[
				'label' => esc_html__( 'Strong', 'sales-page-addon' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'strong_align',
			[
				'label' => esc_html__( 'Alignment', 'sales-page-addon' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-right',
					],
					'justify' => [
						'title' => esc_html__( 'Justified', 'sales-page-addon' ),
						'icon' => 'eicon-text-align-justify',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .spa-rich-text-editor strong' => 'text-align: {{VALUE}};',
					'{{WRAPPER}} .spa-rich-text-editor b' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'strong_color',
			[
				'label' => esc_html__( 'Strong Color', 'sales-page-addon' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} strong' => 'color: {{VALUE}};',
					'{{WRAPPER}} b' => 'color: {{VALUE}};',
				]
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'strong_typography',
				'selector' => '{{WRAPPER}} .spa-rich-text-editor strong',
				'separator' => 'before',
			]
		);

		$this->end_controls_section();
		// Strong End

	}

	/**
	 * Render text editor widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();
		$editor_content = $this->get_settings_for_display( 'rich_editor' );

		$editor_content = $this->parse_text_editor( $editor_content );

		$this->add_render_attribute( 'rich_editor', 'class', [ 'spa-rich-text-editor', 'elementor-clearfix' ] );

		$this->add_inline_editing_attributes( 'rich_editor', 'advanced' );
		?>
		<div <?php echo $this->get_render_attribute_string( 'rich_editor' ); ?>><?php echo $editor_content; ?></div>
		<div class="my-icon-wrapper" style="font-size: 50px">
			<?php Icons_Manager::render_icon( $settings['sample_icon'], [ 'aria-hidden' => 'true' ] ); ?>
		</div>
		<?php
	}

	/**
	 * Render text editor widget as plain content.
	 *
	 * Override the default behavior by printing the content without rendering it.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function render_plain_content() {
		// In plain mode, render without shortcode
		echo $this->get_settings( 'rich_editor' );
	}

	/**
	 * Render text editor widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 2.9.0
	 * @access protected
	 */
	protected function content_template() {
		?>
		<#
		view.addRenderAttribute( 'rich_editor', 'class', [ 'spa-rich-text-editor', 'elementor-clearfix' ] );

		view.addInlineEditingAttributes( 'rich_editor', 'advanced' );
		#>
		<div {{{ view.getRenderAttributeString( 'rich_editor' ) }}}>{{{ settings.rich_editor }}}</div>
		<?php
	}

}
Plugin::instance()->widgets_manager->register_widget_type( new Sales_Page_Elementor_Addon_Rich_Editor() );

} // enable & disable
