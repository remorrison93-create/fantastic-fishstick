<?php
/**
 * Template Name: Training Philosophy
 * Template Post Type: page
 */

get_header();
?>

<main id="main-content" role="main">

    <!-- Page Header -->
    <section class="bg-nk-dark py-20 border-b border-white/10" aria-label="Philosophy header">
        <div class="nk-container max-w-3xl">
            <span class="section-label">Our Approach</span>
            <h1 class="font-display text-h1 tracking-widest text-nk-white leading-tight mb-6 reveal">
                We Don&rsquo;t Manage Problems.<br>We Fix Them.
            </h1>
            <p class="font-body text-lg text-nk-white/60 leading-relaxed reveal">
                NK9&rsquo;s approach is built on clarity, consistency, and honest communication &mdash; with your dog and with you.
            </p>
        </div>
    </section>

    <!-- Section 1: Our Approach -->
    <section class="bg-nk-dark py-24 border-b border-white/10" aria-label="Our approach">
        <div class="nk-container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <div>
                    <span class="section-label">The Method</span>
                    <h2 class="font-display text-h2 tracking-widest text-nk-white mb-8 reveal">
                        Balanced Training.<br>Real Results.
                    </h2>
                    <div class="font-body text-sm text-nk-white/60 leading-relaxed space-y-4 reveal">
                        <p>
                            We use balanced training. That means we use both positive reinforcement and appropriate corrections &mdash; the same way every credible working dog program in the world operates.
                        </p>
                        <p>
                            We don&rsquo;t subscribe to ideology. We subscribe to results. If it works safely and ethically for the dog, we use it. If it doesn&rsquo;t, we don&rsquo;t.
                        </p>
                    </div>
                </div>

                <!-- What balanced training means -->
                <div class="bg-white/5 border border-white/10 p-8 reveal">
                    <p class="font-body text-xs uppercase tracking-wider text-nk-accent mb-6">What Balanced Training Means</p>
                    <ul class="space-y-5">
                        <?php
                        $balanced_items = [
                            'Clear communication so dogs understand what\'s expected',
                            'Rewards for correct behavior — food, praise, play',
                            'Appropriate, proportional corrections when needed',
                            'No confusion, no grey areas, no inconsistency',
                        ];
                        foreach ( $balanced_items as $item ) : ?>
                        <li class="flex items-start gap-4">
                            <span class="w-1.5 h-1.5 rounded-full bg-nk-accent mt-2 shrink-0" aria-hidden="true"></span>
                            <span class="font-body text-sm text-nk-white/70 leading-relaxed"><?php echo esc_html( $item ); ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- Section 2: Why Not "Force-Free Only" -->
    <section class="bg-nk-warm py-24 border-b border-nk-dark/10" aria-label="Training philosophy detail">
        <div class="nk-container max-w-3xl">

            <span class="section-label section-label--dark">Straight Talk</span>
            <h2 class="font-display text-h2 tracking-widest text-nk-dark mb-8 reveal">
                No Ideology. No Excuses.
            </h2>

            <div class="font-body text-sm text-nk-dark/70 leading-relaxed space-y-4 reveal">
                <p>
                    The dog training industry is full of heated debates about methods. We stay out of it. Our job is to solve your dog&rsquo;s behavior problem safely and reliably &mdash; not to win an argument on the internet.
                </p>
                <p>
                    Every dog is different. Every problem has a context. We approach each case with the tools and knowledge to find what actually works &mdash; not what fits a particular school of thought.
                </p>
                <p>
                    What we don&rsquo;t do: use harsh, disproportionate, or fear-based corrections. What we do: communicate clearly, build confidence in the dog, and create lasting behavioral change.
                </p>
            </div>

        </div>
    </section>

    <!-- Section 3: What We Expect From You -->
    <section class="bg-nk-dark py-24" aria-label="Client expectations">
        <div class="nk-container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">

                <div>
                    <span class="section-label">Client Expectations</span>
                    <h2 class="font-display text-h2 tracking-widest text-nk-white mb-8 reveal">
                        Training Is a Partnership.<br>We Do Our Part.
                    </h2>
                    <div class="font-body text-sm text-nk-white/60 leading-relaxed space-y-4 reveal">
                        <p>
                            Training doesn&rsquo;t end when your dog leaves our facility. Results are maintained through consistency at home. We&rsquo;ll teach you the system &mdash; but you have to use it.
                        </p>
                        <p>
                            If you&rsquo;re looking for a magic fix that requires nothing from you, NK9 is not the right fit. If you&rsquo;re willing to put in the work, we&rsquo;ll show you exactly what to do.
                        </p>
                    </div>
                </div>

                <!-- Expectations checklist -->
                <div class="reveal">
                    <p class="font-body text-xs uppercase tracking-wider text-nk-white/40 mb-6">What We Ask of You</p>
                    <ul class="space-y-4">
                        <?php
                        $expectations = [
                            'Follow the training plan at home — every day, not just sometimes',
                            'Apply consistency across all family members',
                            'Attend follow-up sessions as recommended',
                            'Communicate openly with your trainer',
                            'Give the process time — real change doesn\'t happen overnight',
                        ];
                        foreach ( $expectations as $exp ) : ?>
                        <li class="flex items-start gap-4 bg-white/5 border border-white/10 p-4">
                            <svg class="w-4 h-4 text-nk-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="font-body text-sm text-nk-white/70 leading-relaxed"><?php echo esc_html( $exp ); ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="bg-nk-accent py-20" aria-label="Apply CTA">
        <div class="nk-container text-center">
            <h2 class="font-display text-h2 tracking-widest text-white mb-6 reveal">
                If You&rsquo;re Ready to Commit &mdash;
            </h2>
            <div class="reveal">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-light">
                    Apply Now
                </a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
