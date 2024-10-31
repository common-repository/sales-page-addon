<?php
/*
 * Elementor Sales Page Addon Sample Widget
 * Author & Copyright: NicheAddon
*/

namespace Elementor;

if (!isset(get_option( 'spa_bw_settings' )['sales_page_title'])) { // enable & disable

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Sales_Page_Elementor_Addon_Title extends Widget_Base{

	/**
	 * Retrieve the widget name.
	*/
	public function get_name(){
		return 'sales_page_basic_title';
	}

	/**
	 * Retrieve the widget title.
	*/
	public function get_title(){
		return esc_html__( 'SP Title', 'sales-page-addon' );
	}

	/**
	 * Retrieve the widget icon.
	*/
	public function get_icon() {
		return 'eicon-t-letter';
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
				'label' => esc_html__( 'Title', 'sales-page-addon' ),
			]
		);
		$this->add_control(
			'first_part_title',
			[
				'label' => esc_html__( 'First part of title', 'sales-page-addon' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'First part ', 'sales-page-addon' ),
				'placeholder' => esc_html__( 'Type first part of title here', 'sales-page-addon' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'middle_part_title',
			[
				'label' => esc_html__( 'Middle part of title', 'sales-page-addon' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'nice middle', 'sales-page-addon' ),
				'placeholder' => esc_html__( 'Type middle part of title here', 'sales-page-addon' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'last_part_title',
			[
				'label' => esc_html__( 'Last part of title', 'sales-page-addon' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( ' last part of title', 'sales-page-addon' ),
				'placeholder' => esc_html__( 'Type last part of title here', 'sales-page-addon' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'title_tag',
			[
				'label' => esc_html__( 'HTML Tag', 'sales-page-addon' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'h2',
				'options' => [
					'h1'  => esc_html__( 'H1', 'sales-page-addon' ),
					'h2'  => esc_html__( 'H2', 'sales-page-addon' ),
					'h3'  => esc_html__( 'H3', 'sales-page-addon' ),
					'h4'  => esc_html__( 'H4', 'sales-page-addon' ),
					'h5'  => esc_html__( 'H5', 'sales-page-addon' ),
					'h6'  => esc_html__( 'H6', 'sales-page-addon' ),
					'div'  => esc_html__( 'div', 'sales-page-addon' ),
					'span'  => esc_html__( 'span', 'sales-page-addon' ),
					'p'  => esc_html__( 'p', 'sales-page-addon' ),
				],
			]
		);		
		$this->add_responsive_control(
			'title_alignment',
			[
				'label' => esc_html__( 'Alignment', 'sales-page-addon' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'sales-page-addon' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'sales-page-addon' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'sales-page-addon' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'default' => 'center',
				'selectors' => [
					'{{WRAPPER}} .spa-title-wrapper' => 'text-align: {{VALUE}};',
				],
			]
		);
		$this->end_controls_section();// end: Section
		
		$this->start_controls_section(
			'style_opt',
			[
				'label' => esc_html__( 'Style - Overall', 'sales-page-addon' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'title_font_family',
				'label' => esc_html__( 'Typography', 'sales-page-addon' ),
				'selector' => '{{WRAPPER}} .spa-title, {{WRAPPER}} .spa-title span.first-part, {{WRAPPER}} .spa-title span.middle-part, {{WRAPPER}} .spa-title span.last-part',
			]
		);		
		$this->add_responsive_control(
			'title_margin',
			[
				'label' => esc_html__( 'Margin', 'sales-page-addon' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px' ],
				'selectors' => [
					'{{WRAPPER}} .spa-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'title_padding',
			[
				'label' => esc_html__( 'Padding', 'sales-page-addon' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px' ],
				'selectors' => [
					'{{WRAPPER}} .spa-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'title_shadow',
				'label' => esc_html__( 'Text Shadow', 'sales-page-addon' ),
				'selector' => '{{WRAPPER}} .spa-title',
			]
		);

		$this->end_controls_section();

		// 1st Start
		$this->start_controls_section(
			'first_part',
			[
				'label' => esc_html__( 'First Part', 'sales-page-addon' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'first_part_color',
			[
				'label' => esc_html__( 'Color', 'sales-page-addon' ),
				'type' => Controls_Manager::COLOR,
				'default' => "#555",
				'selectors' => [
					'{{WRAPPER}} .spa-title span.first-part' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'first_part_font_family',
				'label' => esc_html__( 'Typography', 'sales-page-addon' ),
				'selector' => '{{WRAPPER}} .spa-title span.first-part',
			]
		);

		$this->end_controls_section();

		// 1st Start
		$this->start_controls_section(
			'middle_part',
			[
				'label' => esc_html__( 'Middle Part', 'sales-page-addon' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'middle_part_color',
			[
				'label' => esc_html__( 'Color', 'sales-page-addon' ),
				'type' => Controls_Manager::COLOR,
				'default' => "#F3601D",
				'selectors' => [
					'{{WRAPPER}} .spa-title span.middle-part' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'middle_part_font_family',
				'label' => esc_html__( 'Typography', 'sales-page-addon' ),
				'selector' => '{{WRAPPER}} .spa-title span.middle-part',
			]
		);

		$this->add_control(
			'middle_style',
			[
				'label' => esc_html__( 'Style', 'sales-page-addon' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'none',
				'options' => [
					'none'  => esc_html__( 'None', 'sales-page-addon' ),
					'underline'  => esc_html__( 'Underline', 'sales-page-addon' ),
					'italic'  => esc_html__( 'Italic', 'sales-page-addon' ),
					'styled'  => esc_html__( 'Styled Background', 'sales-page-addon' ),
					'styled-1'  => esc_html__( 'Styled Background 1', 'sales-page-addon' ),
					'color-bg'  => esc_html__( 'Color Background', 'sales-page-addon' ),
					'curve'  => esc_html__( 'Curved Background', 'sales-page-addon' ),
					'curve-css3'  => esc_html__( 'Curved CSS3 Background', 'sales-page-addon' ),
				],
			]
		);

		$this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name' => 'middle_part_bg_color',
				'label' => esc_html__( 'Background', 'sales-page-addon' ),
				'condition' => [
					'middle_style' => 'color-bg',
				],
				'selector' => '{{WRAPPER}} .spa-title span.middle-part::after',
			]
		);

		$this->add_control(
			'middle_part_curve_bg_color',
			[
				'label' => esc_html__( 'Background Color', 'sales-page-addon' ),
				'type' => Controls_Manager::COLOR,
				'default' => "#000",
				'condition' => [
					'middle_style' => 'curve-css3',
				],
				'selectors' => [
					'{{WRAPPER}} .spa-title span.middle-part-style-curve-css3::after' => 'background-color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'clip_path',
			[
				'label' => esc_html__( 'Clip Path', 'sales-page-addon' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '13% 0, 93% 4%, 100% 95%, 0% 100%', 'sales-page-addon' ),
				'placeholder' => esc_html__( '13% 0, 93% 4%, 100% 95%, 0% 100%', 'sales-page-addon' ),
				'condition' => [
					'middle_style' => 'curve-css3',
				],
				'selectors' => [
					'{{WRAPPER}} .spa-title span.middle-part-style-curve-css3::after' => 'clip-path: polygon({{VALUE}});',
				],
			]
		);
		$this->add_responsive_control(
			'middle_title_padding',
			[
				'label' => esc_html__( 'Padding', 'sales-page-addon' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px' ],
				'selectors' => [
					'{{WRAPPER}} .spa-title span.middle-part' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		// 1st Start
		$this->start_controls_section(
			'last_part_part',
			[
				'label' => esc_html__( 'Last Part', 'sales-page-addon' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'last_part_color',
			[
				'label' => esc_html__( 'Color', 'sales-page-addon' ),
				'type' => Controls_Manager::COLOR,
				'default' => "#555",
				'selectors' => [
					'{{WRAPPER}} .spa-title span.last-part' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'last_part_font_family',
				'label' => esc_html__( 'Typography', 'sales-page-addon' ),
				'selector' => '{{WRAPPER}} .spa-title span.last-part',
			]
		);

		$this->end_controls_section();// end: Section
	}

	/**
	 * Render App Works widget output on the frontend.
	 * Written in PHP and used to generate the final HTML.
	*/
	protected function render() {
		$settings = $this->get_settings_for_display();
		$title_tag = !empty( $settings['title_tag'] ) ? $settings['title_tag'] : 'h2';
		$first_part_title = !empty( $settings['first_part_title'] ) ? $settings['first_part_title'] : '';
		$middle_part_title = !empty( $settings['middle_part_title'] ) ? $settings['middle_part_title'] : '';
		$last_part_title = !empty( $settings['last_part_title'] ) ? $settings['last_part_title'] : '';
		$middle_style = !empty( $settings['middle_style'] ) ? 'middle-part-style-'.$settings['middle_style'] : 'middle-part-style-none';

		// Turn output buffer on
		ob_start(); ?>
		<div class="spa-title-wrapper">
			<<?php echo esc_attr($title_tag); ?> class="spa-title">
				<span class="first-part"><?php echo wp_kses_post($first_part_title); ?></span>
				<span class="middle-part <?php echo esc_attr($middle_style); ?>"><?php echo wp_kses_post($middle_part_title); ?></span>
				<span class="last-part"><?php echo wp_kses_post($last_part_title); ?></span>
				</<?php echo esc_attr($title_tag); ?>>
		</div>
		<?php
		// Return outbut buffer
		echo ob_get_clean();

	}

	protected function _content_template() {
		?>
		<#
		
		var title_tag = settings.title_tag ? settings.title_tag : 'h2';
		var first_part_title = settings.first_part_title ? settings.first_part_title : '';
		var middle_part_title = settings.middle_part_title ? settings.middle_part_title : '';
		var last_part_title = settings.last_part_title ? settings.last_part_title : '';

		var middle_style = settings.middle_style ? 'middle-part-style-' + settings.middle_style : 'middle-part-style-none';

		var title = '<' + title_tag + ' class="spa-title"><span class="first-part">'+first_part_title+'</span><span class="middle-part '+middle_style+'">'+middle_part_title+'</span><span class="last-part">'+last_part_title+'</span></'+title_tag+'>';

		#>
		<div class="spa-title-wrapper">
			{{{ title }}}
		</div>
		<?php
	}	

}
Plugin::instance()->widgets_manager->register_widget_type( new Sales_Page_Elementor_Addon_Title() );

} // enable & disable
