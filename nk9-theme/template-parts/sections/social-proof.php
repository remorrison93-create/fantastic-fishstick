<section class="bg-nk-warm py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <!-- Section header -->
        <div class="text-center mb-14" data-animate>
            <span class="section-label-dark">Client Results</span>
            <h2 class="font-display text-5xl lg:text-6xl text-nk-dark mt-1">
                Dogs Transformed. Owners Relieved.
            </h2>
        </div>

        <!-- Testimonial grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8" data-stagger>
            <?php
            $testimonials = new WP_Query([
                'post_type'      => 'testimonial',
                'posts_per_page' => 3,
                'post_status'    => 'publish',
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            ]);

            if ($testimonials->have_posts()) :
                while ($testimonials->have_posts()) : $testimonials->the_post();
                    get_template_part('template-parts/components/testimonial-card', null, [
                        'quote'    => get_field('testimonial_quote'),
                        'name'     => get_field('testimonial_name'),
                        'location' => get_field('testimonial_location'),
                        'result'   => get_field('testimonial_result'),
                    ]);
                endwhile;
                wp_reset_postdata();
            else :
                // Static fallback testimonials
                $defaults = [
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
                foreach ($defaults as $t) :
                    get_template_part('template-parts/components/testimonial-card', null, $t);
                endforeach;
            endif;
            ?>
        </div>

    </div>
</section>
