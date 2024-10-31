<?php 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed 

function sales_addon_admin_options_func() {
	$builders   		= get_option( 'sales-page-builders' );
	$active_builder   	= get_option( 'sales-page-builder-active' );

	?>
	<div class="wrap sales-addon-template-galleries">
	    <h1 class="wp-heading-inline"><?php echo esc_html__('Sales Template', 'sales-page-addon'); ?></h1>
		<hr>
		<div class="wp-filter">
			<div class="available-builders" style="margin: 0;">
				<ul class="filter-links">
					<li class="plugin-install-popular">
						<a href="#0"><?php echo esc_html__('Select Builder', 'sales-page-addon'); ?>: </a>
					</li>
				</ul>
				<select name="builder" id="" class="sales-addon-builders">
					<?php 
					if(isset($builders) && !empty($builders)) {
					foreach ($builders as $builder_key => $builder_name) { ?>
					<option value="<?php echo esc_attr($builder_name); ?>" <?php selected( $active_builder, $builder_name ); ?>><?php echo esc_html( ucfirst($builder_name) ); ?></option>
					<?php } } ?>
				</select>
			</div>

			<div class="search-form search-plugins" style="margin: 0;">
				<form action="" method="post" class="sales-addon-filter-form">
					<ul class="filter-links">
						<li class="sales-addon-filter-title">
							<a href=""><?php echo esc_html__('Filters', 'sales-page-addon'); ?>: </a>
						</li>
						<li class="sales-addon-filter sales-addon-filter-all">
						    <input type="radio" id="all" name="type" value="" checked="checked">
							<label for="all" class="button"><?php echo esc_html__('All', 'sales-page-addon'); ?></label>
						</li>
						<li class="sales-addon-filter sales-addon-filter-free">
						    <input type="radio" id="free" name="type" value="free">
							<label for="free" class="button"><?php echo esc_html__('Free', 'sales-page-addon'); ?></label>
						</li>
						<li class="sales-addon-filter sales-addon-filter-pro">
						    <input type="radio" id="pro" name="type" value="pro">
							<label for="pro" class="button"><span class="dashicons dashicons-superhero-alt"></span> <?php echo esc_html__('Pro', 'sales-page-addon'); ?></label>
						</li>
					</ul>
					<select name="cat" id="" class="sales-addon-filter sales-addon-filter-cat">
						<option value="" selected="selected"><?php echo esc_html__('Category', 'sales-page-addon'); ?></option>
						<option value="e-book"><?php echo esc_html__('E-Book', 'sales-page-addon'); ?></option>
						<option value="webinar"><?php echo esc_html__('Webinar', 'sales-page-addon'); ?></option>
						<option value="seo"><?php echo esc_html__('SEO', 'sales-page-addon'); ?></option>
						<option value="health"><?php echo esc_html__('Health', 'sales-page-addon'); ?></option>
						<option value="course"><?php echo esc_html__('Course', 'sales-page-addon'); ?></option>
						<option value="financial"><?php echo esc_html__('Financial', 'sales-page-addon'); ?></option>
						<option value="crypto"><?php echo esc_html__('Crypto', 'sales-page-addon'); ?></option>
						<option value="stock-broker"><?php echo esc_html__('Stock Broker', 'sales-page-addon'); ?></option>
						<option value="construction"><?php echo esc_html__('Construction', 'sales-page-addon'); ?></option>
					</select>					
				</form>
				<div class="sales-addon-search-form">
					<input type="search" name="search-templates" id="search-templates" value="" class="wp-filter-search" placeholder="<?php echo esc_attr__('Search templates...', 'sales-page-addon'); ?>">
				</div>
			</div>
		</div>	    
	    
	    <div class="theme-browser rendered sales-addon-themes-wrapper">
	        <div class="sales-addon-theme-preloader">
	        	<span class="spinner"></span>
	        </div>
	        <div class="themes wp-clearfix">
	            <?php  
	            	sales_addon_template_default_fallback();
	            ?>
	        </div>
	    </div>
	</div>
	<?php
}