<?php
/**
 * NK9 Theme — index.php
 * Fallback template. All pages use custom page templates.
 */

get_header();
?>

<main id="main-content" role="main" class="nk-container py-24">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="prose prose-invert max-w-3xl">
        <h1 class="font-display text-h1 tracking-widest text-nk-white"><?php the_title(); ?></h1>
        <div class="font-body text-nk-white/70 leading-relaxed mt-6"><?php the_content(); ?></div>
    </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
