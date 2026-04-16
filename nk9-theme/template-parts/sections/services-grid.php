<section class="bg-nk-dark py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <!-- Section header -->
        <div class="mb-14" data-animate>
            <span class="section-label">What We Offer</span>
            <h2 class="font-display text-5xl lg:text-6xl text-nk-white mt-1 max-w-2xl">
                Training Built Around Your Dog's Real Problems
            </h2>
        </div>

        <!-- Services grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8" data-stagger>
            <?php
            $services = new WP_Query([
                'post_type'      => 'service',
                'posts_per_page' => 3,
                'post_status'    => 'publish',
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            ]);

            if ($services->have_posts()) :
                while ($services->have_posts()) : $services->the_post();
                    get_template_part('template-parts/components/service-card', null, [
                        'title'       => get_the_title(),
                        'description' => get_field('service_description'),
                        'href'        => get_field('service_cta_url') ?: home_url('/services'),
                        'cta_label'   => get_field('service_cta_label') ?: 'Learn More',
                    ]);
                endwhile;
                wp_reset_postdata();
            else :
                // Static fallback services
                $defaults = [
                    [
                        'title'       => 'Private Lessons',
                        'description' => 'One-on-one sessions focused on your specific issues. You and your dog learn together.',
                        'href'        => home_url('/services#private-lessons'),
                        'cta_label'   => 'Learn More',
                    ],
                    [
                        'title'       => 'Board & Train',
                        'description' => 'Your dog lives and trains with us. Maximum results, minimum disruption to your schedule.',
                        'href'        => home_url('/services#board-and-train'),
                        'cta_label'   => 'Learn More',
                    ],
                    [
                        'title'       => 'Home Visits',
                        'description' => 'We come to you. Address behavior problems in the exact environment where they happen.',
                        'href'        => home_url('/services#home-visits'),
                        'cta_label'   => 'Learn More',
                    ],
                ];
                foreach ($defaults as $s) :
                    get_template_part('template-parts/components/service-card', null, $s);
                endforeach;
            endif;
            ?>
        </div>

    </div>
</section>
