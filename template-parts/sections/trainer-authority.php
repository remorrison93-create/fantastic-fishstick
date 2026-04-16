<?php
/**
 * Section: Trainer Authority (Steve Walter feature)
 * Dark bg, 50/50 split — image left, text right
 */

// Try to pull lead trainer from CPT
$lead_trainer = null;
$trainer_query = new WP_Query( [
    'post_type'      => 'trainer',
    'posts_per_page' => 1,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
    'post_status'    => 'publish',
] );

if ( $trainer_query->have_posts() ) {
    $trainer_query->the_post();
    $lead_trainer = [
        'name'        => get_the_title(),
        'title'       => nk9_field( 'trainer_title' ),
        'bio'         => nk9_field( 'trainer_bio' ),
        'credentials' => nk9_field( 'trainer_credentials' ) ?: [],
        'image_url'   => get_the_post_thumbnail_url( get_the_ID(), 'large' ),
    ];
    wp_reset_postdata();
}

// Fallback
if ( ! $lead_trainer ) {
    $lead_trainer = [
        'name'  => 'Steve Walter',
        'title' => 'Founder &amp; Lead Trainer',
        'bio'   => "Steve Walter has spent over a decade working with dogs that other trainers gave up on. His approach is built on clear communication, structured expectations, and consistency — not gimmicks, not shortcuts.\n\nNK9 is not a franchise. It's not a weekend certification course. It's a professional training operation built on real results with real dogs.",
        'credentials' => [
            '10+ Years Professional Training Experience',
            'Balanced Training Methodology',
            'Board &amp; Train Specialist',
            'Aggression Rehabilitation Cases',
        ],
        'image_url' => '',
    ];
}
?>
<section class="bg-nk-dark py-0" id="trainer" aria-label="Lead trainer">
    <div class="nk-container">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 border border-white/10">

            <!-- Image -->
            <div class="relative min-h-80 lg:min-h-0 overflow-hidden bg-nk-dark/50">
                <?php if ( ! empty( $lead_trainer['image_url'] ) ) : ?>
                <img
                    src="<?php echo esc_url( $lead_trainer['image_url'] ); ?>"
                    alt="<?php echo esc_attr( $lead_trainer['name'] ); ?>"
                    class="w-full h-full object-cover object-top reveal"
                    loading="lazy"
                >
                <?php else : ?>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center">
                        <svg class="w-24 h-24 text-white/10 mx-auto" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/>
                        </svg>
                        <p class="font-body text-xs text-white/20 mt-3 uppercase tracking-wider">Add trainer photo<br>in WP Admin</p>
                    </div>
                </div>
                <?php endif; ?>
                <div class="absolute bottom-0 left-0 right-0 h-1 bg-nk-accent"></div>
            </div>

            <!-- Content -->
            <div class="p-10 lg:p-16 flex flex-col justify-center">
                <span class="section-label">Lead Trainer</span>
                <h2 class="font-display text-h2 tracking-widest text-nk-white mb-6 reveal">
                    Trained by Discipline.<br>Driven by Results.
                </h2>

                <div class="font-body text-sm text-nk-white/60 leading-relaxed mb-8 space-y-4 reveal">
                    <?php
                    $bio_paragraphs = explode( "\n\n", $lead_trainer['bio'] );
                    foreach ( $bio_paragraphs as $para ) {
                        if ( trim( $para ) ) {
                            echo '<p>' . nl2br( esc_html( trim( $para ) ) ) . '</p>';
                        }
                    }
                    ?>
                </div>

                <?php if ( ! empty( $lead_trainer['credentials'] ) ) : ?>
                <ul class="space-y-3 mb-10 reveal">
                    <?php foreach ( $lead_trainer['credentials'] as $cred ) :
                        $cred_text = is_array( $cred ) ? ( $cred['credential_item'] ?? '' ) : $cred;
                    ?>
                    <li class="flex items-center gap-3 font-body text-sm text-nk-white/80">
                        <span class="w-1.5 h-1.5 rounded-full bg-nk-accent shrink-0" aria-hidden="true"></span>
                        <?php echo esc_html( $cred_text ); ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>

                <div class="reveal">
                    <a href="<?php echo esc_url( home_url( '/trainers' ) ); ?>" class="btn-secondary">
                        Meet the Full Team &rarr;
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
