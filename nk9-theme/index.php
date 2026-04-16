<?php
// Silence is golden.
// This file is a fallback required by WordPress.
// All content is handled by page-specific templates.
get_header();
?>
<div class="max-w-7xl mx-auto px-6 lg:px-8 py-32 text-center">
    <h1 class="font-display text-6xl text-nk-white mb-6">NK9</h1>
    <p class="font-body text-nk-white opacity-60 mb-8">Professional Dog Training</p>
    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-primary">Apply for Training</a>
</div>
<?php get_footer(); ?>
