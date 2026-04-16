<?php
/**
 * Front Page Template — NK9 Home
 * Assigned in: Settings > Reading > Your homepage displays > A static page
 */
get_header();

get_template_part('template-parts/sections/hero');
get_template_part('template-parts/sections/social-proof');
get_template_part('template-parts/sections/services-grid');
get_template_part('template-parts/sections/how-it-works');
get_template_part('template-parts/sections/trainer-authority');
get_template_part('template-parts/sections/final-cta');

get_footer();
