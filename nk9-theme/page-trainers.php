<?php
/**
 * Template — Trainers Page
 * Auto-applied to the page with slug: trainers
 */
get_header();
?>

<!-- Page Header -->
<section class="bg-nk-dark py-20 lg:py-28 border-b border-white/10">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <span class="section-label" data-animate>The Team</span>
        <h1 class="font-display text-6xl sm:text-7xl lg:text-8xl text-nk-white mt-2 max-w-4xl leading-none" data-animate>
            The People Behind the Results
        </h1>
        <p class="font-body text-xl text-nk-white/60 mt-8 max-w-2xl leading-relaxed" data-animate>
            Every NK9 trainer is held to the same standard: real skills, real results, real accountability.
        </p>
    </div>
</section>

<!-- Trainers Grid -->
<section class="bg-nk-dark py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <?php
        $trainers = new WP_Query([
            'post_type'      => 'trainer',
            'posts_per_page' => -1,
            'post_status'    => 'publish',
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        ]);

        if ($trainers->have_posts()) :
        ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12" data-stagger>
                <?php while ($trainers->have_posts()) : $trainers->the_post();
                    $credentials_raw = get_field('trainer_credentials');
                    $credentials     = [];
                    if (is_array($credentials_raw)) {
                        foreach ($credentials_raw as $row) {
                            if (!empty($row['credential_item'])) {
                                $credentials[] = $row['credential_item'];
                            }
                        }
                    }
                    get_template_part('template-parts/components/trainer-card', null, [
                        'name'        => get_the_title(),
                        'title'       => get_field('trainer_title'),
                        'bio'         => get_field('trainer_bio'),
                        'credentials' => $credentials,
                        'image_url'   => get_the_post_thumbnail_url(get_the_ID(), 'large'),
                    ]);
                endwhile;
                wp_reset_postdata();
                ?>
            </div>

        <?php else : ?>

            <!-- Static fallback — Steve Walter -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12" data-stagger>
                <?php
                get_template_part('template-parts/components/trainer-card', null, [
                    'name'        => 'Steve Walter',
                    'title'       => 'Founder & Lead Trainer',
                    'bio'         => "Steve Walter started NK9 with a single mission: to provide professional-grade dog training to serious dog owners. Over the past decade, he's worked with hundreds of dogs across all breeds and behavioral profiles — from basic obedience to severe aggression rehabilitation.\n\nSteve's training philosophy is simple: clear expectations, consistent execution, honest feedback. He doesn't believe in babying dogs or their owners. He believes in results.",
                    'credentials' => [
                        '10+ Years Professional Dog Training',
                        'Board & Train Program Director',
                        'Aggression Rehabilitation Specialist',
                        'Balanced Training Practitioner',
                    ],
                    'image_url'   => '',
                ]);
                ?>
            </div>

        <?php endif; ?>

    </div>
</section>

<!-- NK9 Standards bar -->
<section class="bg-nk-warm py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div data-animate>
                <span class="section-label-dark">Our Standard</span>
                <h2 class="font-display text-5xl text-nk-dark mt-1 leading-tight">
                    Every Trainer. Same Standard.
                </h2>
            </div>
            <div data-animate>
                <p class="font-body text-nk-dark/65 leading-relaxed">
                    Additional NK9 trainers are vetted, trained, and held to the same standard as our lead trainer. Every team member operates within the NK9 system — no independent interpretation, no guesswork.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<?php get_template_part('template-parts/sections/final-cta'); ?>

<?php get_footer(); ?>
