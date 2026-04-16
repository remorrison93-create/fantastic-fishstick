<?php
/**
 * Section: Social Proof / Testimonials
 * Warm bg, 3-column grid, pulls from testimonial CPT
 */

$testimonials_query = new WP_Query( [
    'post_type'      => 'testimonial',
    'posts_per_page' => 3,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
    'post_status'    => 'publish',
] );

// Fallback testimonials if no CPT entries yet
$fallback_testimonials = [
    [
        'quote'    => "We tried two other trainers before NK9. Within the first week of board and train, our dog stopped bolting out the door. Steve doesn't waste your time — he fixes the problem.",
        'name'     => 'Marcus T.',
        'location' => 'Dallas, TX',
        'result'   => 'Off-leash reliability in 3 weeks',
    ],
    [
        'quote'    => "I was embarrassed to walk my dog. He'd lunge at everything. After private lessons with NK9, I finally feel in control. The structure they teach works.",
        'name'     => 'Jennifer R.',
        'location' => 'Plano, TX',
        'result'   => 'Leash reactivity eliminated',
    ],
    [
        'quote'    => "Board & Train was the best investment I've made for my dog and my sanity. They sent daily updates, explained everything, and the results held up at home.",
        'name'     => 'Derek M.',
        'location' => 'Frisco, TX',
        'result'   => 'Reliable obedience, zero regression',
    ],
];
?>
<section class="bg-nk-warm py-24" id="testimonials" aria-label="Client testimonials">
    <div class="nk-container">

        <!-- Section header -->
        <div class="text-center mb-16">
            <span class="section-label section-label--dark">Client Results</span>
            <h2 class="font-display text-h2 tracking-widest text-nk-dark reveal">
                Dogs Transformed. Owners Relieved.
            </h2>
        </div>

        <!-- Cards grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6" data-stagger>

            <?php if ( $testimonials_query->have_posts() ) : ?>

                <?php while ( $testimonials_query->have_posts() ) : $testimonials_query->the_post(); ?>
                <?php
                get_template_part( 'template-parts/components/testimonial-card', null, [
                    'quote'    => nk9_field( 'testimonial_quote' ),
                    'name'     => nk9_field( 'testimonial_name' ),
                    'location' => nk9_field( 'testimonial_location' ),
                    'result'   => nk9_field( 'testimonial_result' ),
                ] );
                ?>
                <?php endwhile; wp_reset_postdata(); ?>

            <?php else : ?>

                <?php foreach ( $fallback_testimonials as $t ) : ?>
                <?php
                get_template_part( 'template-parts/components/testimonial-card', null, [
                    'quote'    => $t['quote'],
                    'name'     => $t['name'],
                    'location' => $t['location'],
                    'result'   => $t['result'],
                ] );
                ?>
                <?php endforeach; ?>

            <?php endif; ?>

        </div>

    </div>
</section>
