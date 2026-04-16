<?php
// Default page template fallback.
// Specific pages use dedicated templates (front-page.php, page-services.php, etc.)
get_header();
?>
<div class="max-w-4xl mx-auto px-6 lg:px-8 py-32">
    <?php while (have_posts()) : the_post(); ?>
        <h1 class="font-display text-6xl text-nk-white mb-8"><?php the_title(); ?></h1>
        <div class="font-body text-nk-white opacity-80 leading-relaxed prose prose-invert max-w-none">
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>
</div>
<?php get_footer(); ?>
