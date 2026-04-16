<section class="bg-nk-dark py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <!-- Image -->
            <div data-animate>
                <?php
                $trainer = new WP_Query([
                    'post_type'      => 'trainer',
                    'posts_per_page' => 1,
                    'post_status'    => 'publish',
                    'orderby'        => 'menu_order',
                    'order'          => 'ASC',
                ]);

                if ($trainer->have_posts()) :
                    $trainer->the_post();
                    $img = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    wp_reset_postdata();
                    if ($img) : ?>
                        <img src="<?php echo esc_url($img); ?>"
                             alt="Steve Walter — Lead Trainer"
                             class="w-full object-cover aspect-[4/5] grayscale contrast-110">
                    <?php else : ?>
                        <div class="w-full aspect-[4/5] bg-white/5 border border-white/10 flex items-center justify-center">
                            <span class="font-body text-xs uppercase tracking-widest text-nk-white/20">Trainer Photo</span>
                        </div>
                    <?php endif;
                else : ?>
                    <div class="w-full aspect-[4/5] bg-white/5 border border-white/10 flex items-center justify-center">
                        <span class="font-body text-xs uppercase tracking-widest text-nk-white/20">Trainer Photo</span>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Text -->
            <div>
                <span class="section-label" data-animate>Lead Trainer</span>
                <h2 class="font-display text-5xl lg:text-6xl text-nk-white mt-1 mb-8 leading-tight" data-animate>
                    Trained by Discipline.<br>Driven by Results.
                </h2>

                <div class="space-y-4 mb-10" data-animate>
                    <p class="font-body text-nk-white/75 leading-relaxed">
                        Steve Walter has spent over a decade working with dogs that other trainers gave up on. His approach is built on clear communication, structured expectations, and consistency — not gimmicks, not shortcuts.
                    </p>
                    <p class="font-body text-nk-white/75 leading-relaxed">
                        NK9 is not a franchise. It's not a weekend certification course. It's a professional training operation built on real results with real dogs.
                    </p>
                </div>

                <!-- Credentials -->
                <ul class="space-y-3 mb-10" data-animate>
                    <?php
                    $credentials = [
                        '10+ Years Professional Training Experience',
                        'Balanced Training Methodology',
                        'Board &amp; Train Program Director',
                        'Aggression Rehabilitation Specialist',
                    ];
                    foreach ($credentials as $c) : ?>
                        <li class="flex items-center gap-3 font-body text-sm text-nk-white/70">
                            <span class="w-4 h-px bg-nk-accent flex-shrink-0"></span>
                            <?php echo wp_kses_post($c); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <div data-animate>
                    <a href="<?php echo esc_url(home_url('/trainers')); ?>" class="btn-secondary">
                        Meet the Full Team &rarr;
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
