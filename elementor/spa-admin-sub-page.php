<?php

if ( !function_exists( 'spa_bw_settings_init' ) ) {
    function spa_bw_settings_init()
    {
        register_setting( 'Spa_Basic_Widgets', 'spa_bw_settings' );
        // Card Title - Basic Widgets
        add_settings_section(
            'Spa_Basic_Widgets_Section',
            esc_html__( 'Basic Widgets', 'sales-page-addon' ),
            '',
            'Spa_Basic_Widgets'
        );
        $spa_basic_widgets['cf7'] = esc_html__( 'CF7', 'sales-page-addon' );
        $spa_basic_widgets['mailchimp'] = esc_html__( 'Mailchimp', 'sales-page-addon' );
        $spa_basic_widgets['title'] = esc_html__( 'Title', 'sales-page-addon' );
        $spa_basic_widgets['rich_editor'] = esc_html__( 'Rich Editor', 'sales-page-addon' );
        foreach ( $spa_basic_widgets as $key => $value ) {
            // Label
            add_settings_field(
                'sales_page_' . $key,
                $value,
                'sales_page_' . $key . '_render',
                'Spa_Basic_Widgets',
                'Spa_Basic_Widgets_Section',
                array(
                'label_for' => 'sales_page_' . $key . '-id',
            )
            );
        }
    }

}
if ( !function_exists( 'spa_pw_settings_init' ) ) {
    function spa_pw_settings_init()
    {
        register_setting( 'Spa_Pro_Widgets', 'spa_pw_settings' );
        if ( spa_fs()->is_free_plan() ) {
            // Card Title - Pro Widgets
            add_settings_section(
                'Spa_Pro_Widgets_Section',
                esc_html__( 'Pro Widgets - Upgrade to Make These Widgets Work.', 'sales-page-addon' ),
                '',
                'Spa_Pro_Widgets'
            );
        }
        $spa_pro_widgets['accordion'] = esc_html__( 'Accordion', 'sales-page-addon' );
        $spa_pro_widgets['coupon'] = esc_html__( 'Coupon', 'sales-page-addon' );
        $spa_pro_widgets['button'] = esc_html__( 'Button', 'sales-page-addon' );
        $spa_pro_widgets['icon_box'] = esc_html__( 'Icon Box', 'sales-page-addon' );
        $spa_pro_widgets['image_box'] = esc_html__( 'Image Box', 'sales-page-addon' );
        $spa_pro_widgets['number_box'] = esc_html__( 'Number Box', 'sales-page-addon' );
        $spa_pro_widgets['portfolio_carousel'] = esc_html__( 'Portfolio Carousel', 'sales-page-addon' );
        $spa_pro_widgets['pricing_table'] = esc_html__( 'Pricing Table', 'sales-page-addon' );
        $spa_pro_widgets['pricing_toggle'] = esc_html__( 'Pricing Toggle', 'sales-page-addon' );
        $spa_pro_widgets['testimonial_slider'] = esc_html__( 'Testimonial Slider', 'sales-page-addon' );
        $spa_pro_widgets['testimonial'] = esc_html__( 'Testimonial', 'sales-page-addon' );
        $spa_pro_widgets['video_gallery'] = esc_html__( 'Video Gallery', 'sales-page-addon' );
        foreach ( $spa_pro_widgets as $key => $value ) {
            // Label
            add_settings_field(
                'sales_page_' . $key,
                $value,
                'sales_page_' . $key . '_render',
                'Spa_Pro_Widgets',
                'Spa_Pro_Widgets_Section',
                array(
                'label_for' => 'sales_page_' . $key . '-id',
            )
            );
        }
    }

}
// Output on Admin Page
if ( !function_exists( 'spa_admin_sub_page' ) ) {
    function spa_admin_sub_page()
    {
        ?>
    <h2 class="title">Enable & Disable - Sales Page Addons</h2>
    <div class="card spa-fields-card spa-fields-basic">
      <form action='options.php' method='post'>
        <?php 
        settings_fields( 'Spa_Basic_Widgets' );
        do_settings_sections( 'Spa_Basic_Widgets' );
        submit_button( esc_attr__( 'Save Basic Widgets Settings', 'sales-page-addon' ), 'basic-submit-class' );
        ?>
      </form>
    </div>
    <div class="card spa-fields-card spa-fields-unique">
      <form action='options.php' method='post'>
        <?php 
        settings_fields( 'Spa_Pro_Widgets' );
        do_settings_sections( 'Spa_Pro_Widgets' );
        
        if ( spa_fs()->is_free_plan() ) {
            ?>
        <p class="submit">
          <a href="<?php 
            echo  esc_url( admin_url( '/' ) ) ;
            ?>admin.php?page=spa_admin_page-pricing" class="button unique-submit-class"><?php 
            esc_html_e( 'Upgrade to save', 'sales-page-addon' );
            ?></a>
        </p>
        <?php 
        }
        
        ?>
      </form>
    </div>    
    <?php 
    }

}