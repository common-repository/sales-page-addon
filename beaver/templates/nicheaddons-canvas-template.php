<?php
/*
 * Template Name: NicheAddons Canvas
 * Description: NicheAddons Page Template.
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="profile" href="https://gmpg.org/xfn/11"/>
  <?php if ( ! current_theme_supports( 'title-tag' ) ) : ?>
    <title><?php echo esc_html( wp_get_document_title() ); ?></title>
  <?php endif;
  wp_head();?>
</head>
<body <?php echo body_class(); ?>>
<?php wp_body_open(); ?>
<?php
while ( have_posts() ) :
  the_post();
  the_content();

  // If comments are open or we have at least one comment, load up the comment template.
  if ( comments_open() || get_comments_number() ) :
    comments_template();
  endif;
  ?>
<?php endwhile; ?>
<?php wp_footer(); ?>
</body>
</html>