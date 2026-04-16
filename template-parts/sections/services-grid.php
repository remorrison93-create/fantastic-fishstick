<?php
/**
 * Section: Services Overview Grid
 * Dark bg, 3-column card grid, pulls from service CPT
 */

$services_query = new WP_Query( [
    'post_type'      => 'service',
    'posts_per_page' => 3,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
    'post_status'    => 'publish',
] );

// Fallback service data
$fallback_services = [
    [
        'title'       => 'Private Lessons',
        'description' => 'One-on-one sessions focused on your specific issues. You and your dog learn together — building skills that hold up in the real world.',
        'link'        => home_url( '/services#private-lessons' ),
        'icon'        => '<svg fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-full h-full"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>',
    ],
    [
        'title'       => 'Board &amp; Train',
        'description' => 'Your dog lives and trains with us. Maximum results, minimum disruption to your schedule. Most transformative program we offer.',
        'link'        => home_url( '/services#board-and-train' ),
        'icon'        => '<svg fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-full h-full"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>',
    ],
    [
        'title'       => 'Home Visits',
        'description' => 'We come to you. Address behavior problems in the exact environment where they happen — no translation required.',
        'link'        => home_url( '/services#home-visits' ),
        'icon'        => '<svg fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-full h-full"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>',
    ],
];
?>
<section class="bg-nk-dark py-24" id="services" aria-label="Services overview">
    <div class="nk-container">

        <!-- Section header -->
        <div class="mb-16">
            <span class="section-label">What We Offer</span>
            <h2 class="font-display text-h2 tracking-widest text-nk-white reveal max-w-xl">
                Training Built Around Your Dog's Real Problems
            </h2>
        </div>

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6" data-stagger>

            <?php if ( $services_query->have_posts() ) : ?>

                <?php while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
                <?php
                $desc = nk9_field( 'service_who_its_for' ) ?: get_the_excerpt();
                get_template_part( 'template-parts/components/service-card', null, [
                    'title'       => get_the_title(),
                    'description' => $desc,
                    'link'        => get_permalink(),
                    'link_label'  => 'Learn More',
                ] );
                ?>
                <?php endwhile; wp_reset_postdata(); ?>

            <?php else : ?>

                <?php foreach ( $fallback_services as $s ) : ?>
                <?php
                get_template_part( 'template-parts/components/service-card', null, $s );
                ?>
                <?php endforeach; ?>

            <?php endif; ?>

        </div>

        <!-- Bottom CTA -->
        <div class="mt-14 text-center">
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-primary">
                Apply for Training
            </a>
        </div>

    </div>
</section>
