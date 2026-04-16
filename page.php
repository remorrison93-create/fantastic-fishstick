<?php
/**
 * NK9 Theme — page.php
 * Default page template (used if no custom template is set)
 */

get_header();
?>

<main id="main-content" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- Page header -->
    <section class="bg-nk-dark py-20 border-b border-white/10">
        <div class="nk-container max-w-3xl">
            <h1 class="font-display text-h1 tracking-widest text-nk-white leading-tight">
                <?php the_title(); ?>
            </h1>
        </div>
    </section>

    <!-- Content -->
    <section class="bg-nk-dark py-16">
        <div class="nk-container max-w-3xl">
            <div class="font-body text-nk-white/70 leading-relaxed space-y-4">
                <?php the_content(); ?>
            </div>
        </div>
    </section>

    <?php endwhile; endif; ?>

    <?php get_template_part( 'template-parts/sections/final-cta' ); ?>

</main>

<?php get_footer(); ?>
