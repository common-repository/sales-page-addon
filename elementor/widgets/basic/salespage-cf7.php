<?php
/*
 * Elementor Sales Page Addon Sample Widget
 * Author & Copyright: NicheAddon
*/

namespace Elementor;

if (!isset(get_option( 'spa_bw_settings' )['sales_page_cf7'])) { // enable & disable

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Sales_Page_Elementor_Addon_CF7 extends Widget_Base{

	/**
	 * Retrieve the widget name.
	*/
	public function get_name(){
		return 'sales_page_basic_cf7';
	}

	/**
	 * Retrieve the widget title.
	*/
	public function get_title(){
		return esc_html__( 'SP CF7', 'sales-page-addon' );
	}

	/**
	 * Retrieve the widget icon.
	*/
	public function get_icon() {
		return 'eicon-envelope';
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
				'label' => esc_html__( 'CF7', 'sales-page-addon' ),
			]
		);
		$this->add_control(
			'cf7_form',
			[
				'label' => esc_html__( 'Select cf7 form', 'sales-page-addon' ),
				'type' => Controls_Manager::SELECT,
				'default' => '',
				'options' => sales_addon_cf7_forms(),
			]
		);

		$this->add_control(
			'cf7_form_style',
			[
				'label' => esc_html__( 'Style', 'sales-page-addon' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style-1',
				'options' => [
					'style-1'  => esc_html__( 'Style 1', 'sales-page-addon' ),
					'style-2'  => esc_html__( 'Style 2', 'sales-page-addon' ),
					'style-3'  => esc_html__( 'Style 3', 'sales-page-addon' ),
					'style-4'  => esc_html__( 'Style 4', 'sales-page-addon' ),
					'style-5'  => esc_html__( 'Style 5', 'sales-page-addon' ),
					'style-6'  => esc_html__( 'Style 6', 'sales-page-addon' ),
					'custom'  => esc_html__( 'Custom', 'sales-page-addon' ),
				],
			]
		);
		$this->end_controls_section();// end: Section

		$this->start_controls_section(
			'style_opt',
			[
				'label' => esc_html__( 'Style', 'sales-page-addon' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'form_font_family',
				'label' => esc_html__( 'Typography - Overall', 'sales-page-addon' ),
				'selector' => '{{WRAPPER}} .spa-form, {{WRAPPER}} .spa-form input[type="text"], {{WRAPPER}} .spa-form input[type="email"], {{WRAPPER}} .spa-form input[type="password"], {{WRAPPER}} .spa-form input[type="tel"], {{WRAPPER}} .spa-form select, {{WRAPPER}} .spa-form textarea, {{WRAPPER}} .spa-form label, {{WRAPPER}} .spa-form p, {{WRAPPER}} .spa-form label, {{WRAPPER}} .spa-form input[type="submit"]',
			]
		);		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'form_label_font_family',
				'label' => esc_html__( 'Typography - Label', 'sales-page-addon' ),
				'selector' => '{{WRAPPER}} .spa-form label',
			]
		);			
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'form_button_font_family',
				'label' => esc_html__( 'Typography - Button', 'sales-page-addon' ),
				'selector' => '{{WRAPPER}} .spa-form  input[type="submit"]',
			]
		);		
		$this->add_control(
			'input_color',
			[
				'label' => esc_html__( 'Input Color', 'sales-page-addon' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .spa-form input[type="text"], {{WRAPPER}} .spa-form input[type="email"], {{WRAPPER}} .spa-form input[type="password"], {{WRAPPER}} .spa-form input[type="tel"], {{WRAPPER}} .spa-form select, {{WRAPPER}} .spa-form textarea' => 'color: {{VALUE}};',
					'{{WRAPPER}} ::-webkit-input-placeholder' => 'color: {{VALUE}};',
					'{{WRAPPER}} ::-moz-placeholder' => 'color: {{VALUE}};',
					'{{WRAPPER}} ::placeholder' => 'color: {{VALUE}} !important;',
					'{{WRAPPER}} ::-ms-input-placeholder' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'input_bg_color',
			[
				'label' => esc_html__( 'Input BG Color', 'sales-page-addon' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .spa-form input[type="text"], {{WRAPPER}} .spa-form input[type="email"], {{WRAPPER}} .spa-form input[type="password"], {{WRAPPER}} .spa-form input[type="tel"], {{WRAPPER}} .spa-form select, {{WRAPPER}} .spa-form textarea' => 'background-color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'input_border_color',
			[
				'label' => esc_html__( 'Input Border Color', 'sales-page-addon' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .spa-form input[type="text"], {{WRAPPER}} .spa-form input[type="email"], {{WRAPPER}} .spa-form input[type="password"], {{WRAPPER}} .spa-form input[type="tel"], {{WRAPPER}} .spa-form select, {{WRAPPER}} .spa-form textarea' => 'border-color: {{VALUE}};',
				],
			]
		);
		$this->add_responsive_control(
			'form_field_margin',
			[
				'label' => esc_html__( 'Field Margin', 'sales-page-addon' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px' ],
				'selectors' => [
					'{{WRAPPER}} .spa-form input[type="text"], {{WRAPPER}} .spa-form input[type="email"], {{WRAPPER}} .spa-form input[type="password"], {{WRAPPER}} .spa-form textarea, {{WRAPPER}} .spa-form select, {{WRAPPER}} .spa-form input[type="submit"]' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'form_field_padding',
			[
				'label' => esc_html__( 'Field Padding', 'sales-page-addon' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px' ],
				'selectors' => [
					'{{WRAPPER}} .spa-form input[type="text"], {{WRAPPER}} .spa-form input[type="email"], {{WRAPPER}} .spa-form input[type="password"], {{WRAPPER}} .spa-form select, {{WRAPPER}} .spa-form textarea' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'submit_btn_color',
			[
				'label' => esc_html__( 'Button Color', 'sales-page-addon' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .spa-form input[type="submit"]' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'submit_btn_bg_color',
			[
				'label' => esc_html__( 'Button Background Color', 'sales-page-addon' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .spa-form input[type="submit"]' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'form_submit_field_padding',
			[
				'label' => esc_html__( 'Button Padding', 'sales-page-addon' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px' ],
				'selectors' => [
					'{{WRAPPER}} .spa-form input[type="submit"]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'field_col_spacing',
			[
				'label' => esc_html__( 'Column Spacing', 'sales-page-addon' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'space-default',
				'options' => [
					'space-default'  => esc_html__( 'Default', 'sales-page-addon' ),
					'space-5'  => esc_html__( 'Space 5', 'sales-page-addon' ),
					'space-10'  => esc_html__( 'Space 10', 'sales-page-addon' ),
					'space-20'  => esc_html__( 'Space 20', 'sales-page-addon' ),
				],
			]
		);
	}

	/**
	 * Render App Works widget output on the frontend.
	 * Written in PHP and used to generate the final HTML.
	*/
	protected function render() {
		$settings = $this->get_settings_for_display();
		$cf7_form = !empty( $settings['cf7_form'] ) ? $settings['cf7_form'] : '';
		$cf7_form_style = !empty( $settings['cf7_form_style'] ) ? $settings['cf7_form_style'] : '';
		$col_spacing = !empty( $settings['field_col_spacing'] ) ? $settings['field_col_spacing'] : '';

		// Turn output buffer on
		ob_start(); ?>
		<div class="spa-form-wrapper">
			<div class="spa-form <?php echo esc_attr($cf7_form_style); ?> <?php echo esc_attr($col_spacing); ?>">
				<?php echo do_shortcode('[contact-form-7 id="'.esc_attr($cf7_form).'"]'); ?>
			</div>
		</div>
		<?php
		// Return outbut buffer
		echo ob_get_clean();

	}

}
Plugin::instance()->widgets_manager->register_widget_type( new Sales_Page_Elementor_Addon_CF7() );

} // enable & disable
