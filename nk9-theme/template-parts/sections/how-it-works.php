<section id="how-it-works" class="bg-nk-warm py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <!-- Section header -->
        <div class="text-center mb-16" data-animate>
            <span class="section-label-dark">The Process</span>
            <h2 class="font-display text-5xl lg:text-6xl text-nk-dark mt-1">
                Simple. Structured. Effective.
            </h2>
        </div>

        <!-- Steps -->
        <?php
        $steps = [
            [
                'number'      => '01',
                'title'       => 'Apply',
                'description' => 'Fill out our intake form. Tell us about your dog and what you need fixed.',
            ],
            [
                'number'      => '02',
                'title'       => 'Evaluation',
                'description' => 'We assess your dog\'s behavior, temperament, and what\'s driving the problems.',
            ],
            [
                'number'      => '03',
                'title'       => 'Custom Plan',
                'description' => 'You receive a structured training plan built for your dog — not a generic program.',
            ],
            [
                'number'      => '04',
                'title'       => 'Results',
                'description' => 'We train. You practice. Your dog changes. We support you through it.',
            ],
        ];
        ?>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-14" data-stagger>
            <?php foreach ($steps as $step) :
                get_template_part('template-parts/components/step-card', null, $step);
            endforeach; ?>
        </div>

        <!-- CTA -->
        <div class="text-center" data-animate>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-primary">
                Start Your Application &rarr;
            </a>
        </div>

    </div>
</section>
