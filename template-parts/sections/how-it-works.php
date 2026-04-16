<?php
/**
 * Section: How It Works
 * Warm bg, 4-step horizontal flow, stacks on mobile
 */
$steps = [
    [
        'number'      => 1,
        'title'       => 'Apply',
        'description' => 'Fill out our intake form. Tell us about your dog and what you need fixed.',
    ],
    [
        'number'      => 2,
        'title'       => 'Evaluation',
        'description' => 'We assess your dog\'s behavior, temperament, and what\'s driving the problems.',
    ],
    [
        'number'      => 3,
        'title'       => 'Custom Plan',
        'description' => 'You receive a structured training plan built for your dog — not a generic program.',
    ],
    [
        'number'      => 4,
        'title'       => 'Results',
        'description' => 'We train. You practice. Your dog changes. We support you through it.',
    ],
];
?>
<section class="bg-nk-warm py-24" id="how-it-works" aria-label="How it works">
    <div class="nk-container">

        <!-- Section header -->
        <div class="mb-16">
            <span class="section-label section-label--dark">The Process</span>
            <h2 class="font-display text-h2 tracking-widest text-nk-dark reveal">
                Simple. Structured. Effective.
            </h2>
        </div>

        <!-- Steps grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-8 mb-16" data-stagger>
            <?php foreach ( $steps as $step ) : ?>
            <?php
            get_template_part( 'template-parts/components/step-card', null, $step );
            ?>
            <?php endforeach; ?>
        </div>

        <!-- CTA -->
        <div class="text-center">
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-secondary border-nk-dark text-nk-dark hover:bg-nk-dark hover:text-nk-white">
                Start Your Application &rarr;
            </a>
        </div>

    </div>
</section>
