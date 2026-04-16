<?php
/**
 * Template — Training Philosophy
 * Auto-applied to the page with slug: philosophy
 */
get_header();
?>

<!-- Page Header -->
<section class="bg-nk-dark py-20 lg:py-28 border-b border-white/10">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <span class="section-label" data-animate>Our Approach</span>
        <h1 class="font-display text-6xl sm:text-7xl lg:text-8xl text-nk-white mt-2 max-w-4xl leading-none" data-animate>
            We Don't Manage Problems.<br>
            <span class="text-nk-accent">We Fix Them.</span>
        </h1>
        <p class="font-body text-xl text-nk-white/65 mt-8 max-w-2xl leading-relaxed" data-animate>
            NK9's approach is built on clarity, consistency, and honest communication — with your dog and with you.
        </p>
    </div>
</section>

<!-- Section 1 — Our Approach -->
<section class="bg-nk-dark py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">

            <div>
                <span class="section-label" data-animate>The Method</span>
                <h2 class="font-display text-5xl lg:text-6xl text-nk-white mt-1 mb-8 leading-tight" data-animate>
                    Results Over Ideology
                </h2>
                <div class="space-y-5" data-animate>
                    <p class="font-body text-nk-white/70 leading-relaxed">
                        We use balanced training. That means we use both positive reinforcement and appropriate corrections — the same way every credible working dog program in the world operates.
                    </p>
                    <p class="font-body text-nk-white/70 leading-relaxed">
                        We don't subscribe to ideology. We subscribe to results. If it works safely and ethically for the dog, we use it. If it doesn't, we don't.
                    </p>
                    <p class="font-body text-nk-white/70 leading-relaxed">
                        No gimmicks. No confusion. No grey areas. Dogs thrive with structure and clear expectations — and so do the owners who work with them.
                    </p>
                </div>
            </div>

            <!-- What balanced training means -->
            <div data-animate>
                <div class="bg-white/5 border border-white/10 p-10">
                    <h3 class="font-display text-4xl text-nk-white mb-8">What Balanced Training Means</h3>
                    <ul class="space-y-5">
                        <?php
                        $points = [
                            'Clear communication so dogs understand what\'s expected',
                            'Rewards for correct behavior — food, praise, play',
                            'Appropriate, proportional corrections when needed',
                            'No confusion, no grey areas, no inconsistency',
                        ];
                        foreach ($points as $point) : ?>
                            <li class="flex items-start gap-4 font-body text-sm text-nk-white/65 leading-relaxed">
                                <span class="w-5 h-px bg-nk-accent flex-shrink-0 mt-2.5"></span>
                                <?php echo esc_html($point); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Section 2 — Client Expectations -->
<section class="bg-nk-warm py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">

            <div>
                <span class="section-label-dark" data-animate>What We Expect From You</span>
                <h2 class="font-display text-5xl lg:text-6xl text-nk-dark mt-1 mb-8 leading-tight" data-animate>
                    Training Requires Commitment
                </h2>
                <div class="space-y-5" data-animate>
                    <p class="font-body text-nk-dark/70 leading-relaxed">
                        Training doesn't end when your dog leaves our facility. Results are maintained through consistency at home. We'll teach you the system — but you have to use it.
                    </p>
                    <p class="font-body text-nk-dark/70 leading-relaxed">
                        If you're looking for a magic fix that requires nothing from you, NK9 is not the right fit. If you're willing to put in the work, we'll show you exactly what to do.
                    </p>
                </div>
            </div>

            <div data-animate>
                <div class="bg-nk-dark p-10">
                    <h3 class="font-display text-4xl text-nk-white mb-8">Client Expectations</h3>
                    <ul class="space-y-5">
                        <?php
                        $expectations = [
                            'Follow the training plan at home without shortcuts',
                            'Be consistent with rules across all family members',
                            'Attend follow-up sessions as recommended',
                            'Communicate openly with your trainer',
                        ];
                        foreach ($expectations as $exp) : ?>
                            <li class="flex items-start gap-4 font-body text-sm text-nk-white/65 leading-relaxed">
                                <span class="w-5 h-px bg-nk-accent flex-shrink-0 mt-2.5"></span>
                                <?php echo esc_html($exp); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="bg-nk-dark py-20 lg:py-28 border-t border-white/10">
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
        <h2 class="font-display text-5xl lg:text-6xl text-nk-white mb-6" data-animate>
            If You're Ready to Commit — Apply Now
        </h2>
        <p class="font-body text-nk-white/60 mb-10 leading-relaxed" data-animate>
            We work with owners who are serious about results. If that's you, we want to hear from you.
        </p>
        <div data-animate>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-primary">
                Apply for Training
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
