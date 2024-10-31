<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed 

function sales_page_addon_elementor_builder_import($url) {
	require_once SALES_PAGE_ADDON_ELEMENTOR_PLUGIN_DIR . '/includes/template-library/sources/base.php';
	require_once SALES_PAGE_ADDON_ELEMENTOR_PLUGIN_DIR . '/includes/template-library/sources/local.php';

	$source_local = new Elementor\TemplateLibrary\Source_Local();

	$results = $source_local->import_template( 'sales-addon-' . rand(), $url );
}