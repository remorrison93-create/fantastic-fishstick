<?php
/**
 * Template Name: Trainers
 * Template Post Type: page
 */

get_header();

$trainers_query = new WP_Query( [
    'post_type'      => 'trainer',
    'posts_per_page' => -1,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
    'post_status'    => 'publish',
] );

// Fallback trainer data
$fallback_trainers = [
    [
        'name'        => 'Steve Walter',
        'title'       => 'Founder &amp; Lead Trainer',
        'bio'         => "Steve Walter started NK9 with a single mission: to provide professional-grade dog training to serious dog owners. Over the past decade, he's worked with hundreds of dogs across all breeds and behavioral profiles — from basic obedience to severe aggression rehabilitation.\n\nSteve's training philosophy is simple: clear expectations, consistent execution, honest feedback. He doesn't believe in babying dogs or their owners. He believes in results.",
        'credentials' => [
            '10+ Years Professional Dog Training',
            'Board &amp; Train Program Director',
            'Aggression Rehabilitation Specialist',
            'Balanced Training Practitioner',
        ],
        'image_url'   => '',
        'image_alt'   => 'Steve Walter, Lead Trainer at Nitro K9',
    ],
];
?>

<main id="main-content" role="main">

    <!-- Page Header -->
    <section class="bg-nk-dark py-20 border-b border-white/10" aria-label="Trainers header">
        <div class="nk-container">
            <span class="section-label">Our Team</span>
            <h1 class="font-display text-h1 tracking-widest text-nk-white max-w-2xl leading-tight reveal">
                The People Behind the Results
            </h1>
            <p class="font-body text-base text-nk-white/60 mt-4 max-w-xl reveal">
                Every NK9 trainer is held to the same standard: real skills, real results, real accountability.
            </p>
        </div>
    </section>

    <!-- Trainer Profiles -->
    <section class="bg-nk-dark py-0" aria-label="Trainer profiles">

        <?php if ( $trainers_query->have_posts() ) : ?>

            <?php $i = 0; while ( $trainers_query->have_posts() ) : $trainers_query->the_post(); ?>
            <?php
            $raw_credentials = nk9_field( 'trainer_credentials' );
            $credentials = [];
            if ( is_array( $raw_credentials ) ) {
                foreach ( $raw_credentials as $row ) {
                    if ( isset( $row['credential_item'] ) ) {
                        $credentials[] = $row['credential_item'];
                    } elseif ( is_string( $row ) ) {
                        $credentials[] = $row;
                    }
                }
            }
            ?>
            <div class="border-b border-white/10 <?php echo $i > 0 ? 'py-0' : ''; ?>">
                <?php
                get_template_part( 'template-parts/components/trainer-card', null, [
                    'name'        => get_the_title(),
                    'title'       => nk9_field( 'trainer_title' ),
                    'bio'         => nk9_field( 'trainer_bio' ),
                    'credentials' => $credentials,
                    'image_url'   => get_the_post_thumbnail_url( get_the_ID(), 'large' ) ?: '',
                    'image_alt'   => get_the_title() . ', NK9 Trainer',
                ] );
                ?>
            </div>
            <?php $i++; endwhile; wp_reset_postdata(); ?>

        <?php else : ?>

            <?php foreach ( $fallback_trainers as $trainer ) : ?>
            <div class="border-b border-white/10">
                <?php get_template_part( 'template-parts/components/trainer-card', null, $trainer ); ?>
            </div>
            <?php endforeach; ?>

        <?php endif; ?>

    </section>

    <!-- NK9 Standards section -->
    <section class="bg-nk-warm py-24" aria-label="NK9 team standards">
        <div class="nk-container max-w-3xl text-center">
            <span class="section-label section-label--dark">The NK9 Standard</span>
            <h2 class="font-display text-h2 tracking-widest text-nk-dark mb-8 reveal">
                Every Trainer. Same Standard.
            </h2>
            <p class="font-body text-sm text-nk-dark/70 leading-relaxed mb-6 reveal">
                NK9 trainers are not certified through weekend courses or online programs. Every trainer on this team has been trained, evaluated, and held accountable within the NK9 system. They know what they&rsquo;re doing &mdash; and more importantly, they know why.
            </p>
            <p class="font-body text-sm text-nk-dark/70 leading-relaxed reveal">
                When you work with NK9, you&rsquo;re not getting a generalist. You&rsquo;re getting a specialist who has earned their position through demonstrated results.
            </p>
        </div>
    </section>

    <?php get_template_part( 'template-parts/sections/final-cta' ); ?>

</main>

<?php get_footer(); ?>
