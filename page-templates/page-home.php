<?php
/**
 * Template Name: Home
 * Template Post Type: page
 */

get_header();
?>

<main id="main-content" role="main">
    <?php get_template_part( 'template-parts/sections/hero' ); ?>
    <?php get_template_part( 'template-parts/sections/social-proof' ); ?>
    <?php get_template_part( 'template-parts/sections/services-grid' ); ?>
    <?php get_template_part( 'template-parts/sections/how-it-works' ); ?>
    <?php get_template_part( 'template-parts/sections/trainer-authority' ); ?>
    <?php get_template_part( 'template-parts/sections/final-cta' ); ?>
</main>

<?php get_footer(); ?>
