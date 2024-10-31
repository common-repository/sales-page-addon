<?php

if ( !defined( 'ABSPATH' ) ) {
    exit;
}
// Exit if accessed
/**
 * Templates default fallback
 */
function sales_addon_template_default_fallback()
{
    $templates = sales_addon_template_options();
    $builder = get_option( 'sales-page-builder-active' );
    if ( is_array( $templates ) && !empty($templates) ) {
        foreach ( $templates as $template ) {
            
            if ( in_array( $builder, $template['categories'] ) ) {
                ?>
  <div class="theme <?php 
                echo  esc_attr( implode( ' ', $template['categories'] ) ) ;
                ?>">
    <div class="theme-screenshot">
      <img class="sales-addon-theme-image" src="<?php 
                echo  esc_url( $template['thumbnail'] ) ;
                ?>" alt="" style="top: 0px;">
    </div>
    <div class="theme-id-container">
      <h2 class="theme-name"><?php 
                echo  esc_html( $template['name'] ) ;
                ?></h2>
      <div class="theme-actions" style="opacity: 1">
        <?php 
                
                if ( spa_fs()->is_free_plan() ) {
                    
                    if ( $template['upgradeable'] || $template['type'] === 'free' ) {
                        $demo_url = $template['demo_url']['free'];
                    } else {
                        $demo_url = $template['demo_url']['pro'];
                    }
                    
                    ?>
        <a class="button activate" target="_blank" href="<?php 
                    echo  esc_url( $demo_url ) ;
                    ?>"><?php 
                    echo  esc_html__( 'Demo', 'sales-page-addon' ) ;
                    ?></a>
        <?php 
                }
                
                ?>

        <?php 
                ?>
        <?php 
                // Only for free users
                if ( spa_fs()->is_free_plan() ) {
                    
                    if ( $template['type'] === 'pro' ) {
                        ?>
            <a class="button button-primary up-btn" href="admin.php?page=spa_admin_page-pricing"><?php 
                        echo  esc_html__( 'Upgrade', 'sales-page-addon' ) ;
                        ?></a>
          <?php 
                    } else {
                        ?>
            <a class="button button-primary sales-addon-tem-action" href="#0" data-link="<?php 
                        echo  $template['download_url'][$builder] ;
                        ?>" data-template-name="<?php 
                        echo  esc_attr( $template['name'] ) ;
                        ?>" data-builder="<?php 
                        echo  esc_attr( $builder ) ;
                        ?>"><span class="dashicons dashicons-download"></span> <?php 
                        echo  esc_html__( 'Import', 'sales-page-addon' ) ;
                        ?></a>
          <?php 
                    }
                
                }
                ?>
      </div>
    </div>
    <?php 
                
                if ( $template['upgradeable'] && spa_fs()->is_free_plan() ) {
                    ?>
    <div class="theme-premium-button">
        <a class="button button-primary button-full up-btn" href="admin.php?page=spa_admin_page-pricing"><?php 
                    echo  esc_html__( 'Upgrade to import full template', 'sales-page-addon' ) ;
                    ?></a>
        <a class="button button-danger button-full up-btn" href="<?php 
                    echo  esc_url( $template['demo_url']['pro'] ) ;
                    ?>"><?php 
                    echo  esc_html__( 'Check full version demo', 'sales-page-addon' ) ;
                    ?></a>
    </div>
    <?php 
                }
                
                ?>
  </div>
  <?php 
            }
        
        }
    }
}

/**
 * Templates filter
 */
function sales_addon_template_filter_fallback( $filter_keys = array() )
{
    $templates = sales_addon_template_options();
    $builder = get_option( 'sales-page-builder-active' );
    if ( $filter_keys ) {
        foreach ( $filter_keys as $template_key ) {
            
            if ( in_array( $builder, $templates[$template_key]['categories'] ) ) {
                ?>
      <div class="theme <?php 
                echo  esc_attr( implode( ' ', $templates[$template_key]['categories'] ) ) ;
                ?>">
        <div class="theme-screenshot">
          <img class="sales-addon-theme-image" src="<?php 
                echo  esc_url( $templates[$template_key]['thumbnail'] ) ;
                ?>" alt="" style="top: 0px;">
        </div>
        <div class="theme-id-container">
          <h2 class="theme-name"><?php 
                echo  esc_html( $templates[$template_key]['name'] ) ;
                ?></h2>
          <div class="theme-actions" style="opacity: 1">
            
            <?php 
                
                if ( spa_fs()->is_free_plan() ) {
                    
                    if ( $template[$template_key]['upgradeable'] || $template[$template_key]['type'] === 'free' ) {
                        $demo_url = $template[$template_key]['demo_url']['free'];
                    } else {
                        $demo_url = $template[$template_key]['demo_url']['pro'];
                    }
                    
                    ?>          
            <a class="button activate" href="<?php 
                    echo  esc_url( $demo_url ) ;
                    ?>"><?php 
                    echo  esc_html__( 'Demo', 'sales-page-addon' ) ;
                    ?></a>
            <?php 
                }
                
                ?>
            
            <?php 
                ?>            
            
            <?php 
                // Only for free users
                if ( spa_fs()->is_free_plan() ) {
                    
                    if ( $templates[$template_key]['type'] === 'pro' ) {
                        ?>
                <a class="button button-primary up-btn" href="admin.php?page=spa_admin_page-pricing"><?php 
                        echo  esc_html__( 'Upgrade', 'sales-page-addon' ) ;
                        ?></a>
              <?php 
                    } else {
                        ?>
                <a class="button button-primary sales-addon-tem-action" href="#0" data-link="<?php 
                        echo  esc_url( $templates[$template_key]['download_url'][$builder] ) ;
                        ?>" data-template-name="<?php 
                        echo  esc_attr( $template[$template_key]['name'] ) ;
                        ?>" data-builder="<?php 
                        echo  esc_attr( $builder ) ;
                        ?>"><span class="dashicons dashicons-download"></span> <?php 
                        echo  esc_html__( 'Import', 'sales-page-addon' ) ;
                        ?></a>
              <?php 
                    }
                
                }
                ?>
          </div>
        </div>
        <?php 
                
                if ( $templates[$template_key]['upgradeable'] && spa_fs()->is_free_plan() ) {
                    ?>
        <div class="theme-premium-button">
            <a class="button button-primary button-full up-btn" href="admin.php?page=spa_admin_page-pricing"><?php 
                    echo  esc_html__( 'Upgrade to import full template', 'sales-page-addon' ) ;
                    ?></a>
            <a class="button button-danger button-full up-btn" href="<?php 
                    echo  esc_url( $template[$template_key]['demo_url']['pro'] ) ;
                    ?>"><?php 
                    echo  esc_html__( 'Check full version demo', 'sales-page-addon' ) ;
                    ?></a>
        </div>
        <?php 
                }
                
                ?>        
      </div>
      <?php 
            }
        
        }
    }
}

/**
 * Get all contact form 7
 */
function sales_addon_cf7_forms()
{
    $contact_forms = new WP_Query( array(
        'post_type'      => 'wpcf7_contact_form',
        'posts_per_page' => -1,
    ) );
    $output = array();
    while ( $contact_forms->have_posts() ) {
        $contact_forms->the_post();
        $output[get_the_ID()] = get_the_title();
    }
    return $output;
}
