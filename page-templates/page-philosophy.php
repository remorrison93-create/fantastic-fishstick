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

    <!-- Section 1: Steve Walter — Founder Introduction -->
    <section class="bg-nk-dark py-24 border-b border-white/10" aria-label="Founder introduction">
        <div class="nk-container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <div class="reveal">
                    <img
                        src="https://nitrocanine.com/mystaging01/wp-content/uploads/2026/03/steve-blade-focus.png"
                        alt="Steve Walter — Nitro K-9 Lead Trainer"
                        class="w-full rounded-lg object-cover object-top"
                        style="max-height: 460px;"
                    >
                </div>

                <div>
                    <span class="section-label">Our Approach</span>
                    <h2 class="font-display text-h2 tracking-widest text-nk-white mb-8 reveal">
                        Training Built on Communication,<br>Not Commands
                    </h2>
                    <div class="font-body text-sm text-nk-white/60 leading-relaxed space-y-4 reveal">
                        <p>
                            Founded by Steve Walter, a professional dog trainer with over 40 years of experience, Nitro K-9 has trained thousands of dogs across the U.S. and internationally. From severe behavioral cases to high-level working dogs, our training is built on proven systems &mdash; not trends.
                        </p>
                        <p>We are known for working with the cases others can&rsquo;t fix:</p>
                    </div>
                    <div class="grid grid-cols-2 gap-3 mt-6 reveal">
                        <?php
                        $specialties = [
                            'Aggression',
                            'Anxiety &amp; fear',
                            'Reactivity &amp; lack of control',
                            'Shut-down or unstable dogs',
                        ];
                        foreach ( $specialties as $s ) : ?>
                        <div class="flex items-start gap-2">
                            <span class="w-2 h-2 rounded-full bg-nk-accent shrink-0 mt-1" aria-hidden="true"></span>
                            <span class="font-body text-sm text-nk-white/70 font-semibold leading-snug"><?php echo $s; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Section 2: Commands to Communication -->
    <section class="bg-nk-warm py-24 border-b border-nk-dark/10" aria-label="Commands to communication">
        <div class="nk-container max-w-3xl">

            <span class="section-label section-label--dark">Commands to Communication</span>
            <h2 class="font-display text-h2 tracking-widest text-nk-dark mb-8 reveal">
                Most People Tell Their Dog What to Do.<br>Very Few Learn How to Listen.
            </h2>

            <div class="font-body text-sm text-nk-dark/70 leading-relaxed space-y-4 reveal">
                <p>
                    At Nitro K-9, we teach both. You will learn how to clearly communicate expectations to your dog, while also developing the awareness to read your dog&rsquo;s state of mind, energy, and responses in real time.
                </p>
                <p>
                    Because the moment you begin to feel what your dog is experiencing, everything changes. Focus sharpens. Confusion disappears.
                </p>
                <p>
                    The desire to work &mdash; and to please &mdash; explodes. And the relationship becomes something most people never experience.
                </p>
            </div>

        </div>
    </section>

    <!-- Section 3: The Power of Balance -->
    <section class="bg-nk-dark py-24 border-b border-white/10" aria-label="The power of balance">
        <div class="nk-container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <div>
                    <span class="section-label">The Method</span>
                    <h2 class="font-display text-h2 tracking-widest text-nk-white mb-8 reveal">
                        Balanced Training.<br>Real Results.
                    </h2>
                    <div class="font-body text-sm text-nk-white/60 leading-relaxed space-y-4 reveal">
                        <p>
                            No two dogs are the same &mdash; so why would training be one-size-fits-all? Some dogs need a softer touch. Some need more clarity, more pressure, more direction.
                        </p>
                        <p>
                            A correction is not about force. It&rsquo;s about reaching the dog. The right correction, applied at the right time, with the right intensity, creates clarity &mdash; not fear. Dogs relax. Anxiety fades. Aggression begins to resolve. Because the dog finally understands.
                        </p>
                        <p>
                            We use both positive reinforcement and appropriate corrections &mdash; the same way every credible working dog program in the world operates. We don&rsquo;t subscribe to ideology. We subscribe to results.
                        </p>
                    </div>
                </div>

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

    <!-- Section 4: Built from the World's Best Training Systems -->
    <section class="bg-nk-warm py-24 border-b border-nk-dark/10" aria-label="Training system foundations">
        <div class="nk-container">

            <div class="max-w-3xl mb-12">
                <span class="section-label section-label--dark">Our Foundations</span>
                <h2 class="font-display text-h2 tracking-widest text-nk-dark mb-8 reveal">
                    Built from the World&rsquo;s Best Training Systems
                </h2>
                <div class="font-body text-sm text-nk-dark/70 leading-relaxed space-y-4 reveal">
                    <p>
                        The Nitro K-9 system is built from proven methodologies used to develop police and military dogs &mdash; animals that must perform under pressure, in real-world environments, with absolute reliability.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 reveal">
                <?php
                $systems = [ 'K.N.P.V.', 'French Ring', 'Schutzhund / IGP', 'Mondio Ring', 'Belgian Ring' ];
                foreach ( $systems as $sys ) : ?>
                <div class="bg-nk-dark border border-white/10 p-5 text-center">
                    <span class="font-body text-xs uppercase tracking-widest text-nk-accent font-bold"><?php echo esc_html( $sys ); ?></span>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <!-- Section 5: Real World Training -->
    <section class="bg-nk-dark py-24 border-b border-white/10" aria-label="Real world training">
        <div class="nk-container max-w-3xl">

            <span class="section-label">Where We Train</span>
            <h2 class="font-display text-h2 tracking-widest text-nk-white mb-8 reveal">
                A Dog That Only Listens in Your Living Room<br>Is Not Trained.
            </h2>

            <div class="font-body text-sm text-nk-white/60 leading-relaxed space-y-4 reveal">
                <p>
                    We train in parks, on sidewalks, in stores, and in real-world distractions &mdash; because your dog doesn&rsquo;t live in a vacuum. If your dog can&rsquo;t perform in the environment where problems actually occur, the training hasn&rsquo;t finished.
                </p>
            </div>

        </div>
    </section>

    <!-- Section 6: European Training -->
    <section class="bg-nk-warm py-24 border-b border-nk-dark/10" aria-label="European training standard">
        <div class="nk-container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <div>
                    <span class="section-label section-label--dark">The European Standard</span>
                    <h2 class="font-display text-h2 tracking-widest text-nk-dark mb-8 reveal">
                        In Much of Europe, Well-Trained Dogs Are the Standard &mdash; Not the Exception.
                    </h2>
                    <div class="font-body text-sm text-nk-dark/70 leading-relaxed space-y-4 reveal">
                        <p>
                            Dogs sit calmly in caf&eacute;s. They ride trains. They exist peacefully in high-distraction environments. That&rsquo;s not magic &mdash; it&rsquo;s method.
                        </p>
                        <p>
                            At the core of that culture is a simple truth: <strong class="text-nk-dark font-semibold">Repetition = Results.</strong> Consistency done correctly, over time, produces a dog that is calm, reliable, and a pleasure to live with.
                        </p>
                    </div>
                </div>

                <div class="bg-nk-dark border border-white/10 p-8 reveal">
                    <p class="font-body text-xs uppercase tracking-wider text-nk-accent mb-6">Energy Is Communication</p>
                    <div class="font-body text-sm text-nk-white/70 leading-relaxed space-y-4">
                        <p>
                            Dogs constantly read your tension, confidence, and clarity. When you learn to control your energy and understand theirs, communication becomes fluid and precise.
                        </p>
                        <p>
                            We teach not just what to do, but how to communicate while doing it. That&rsquo;s why our system works across all training levels &mdash; from first-time owners to experienced handlers.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Section 7: No Ideology -->
    <section class="bg-nk-dark py-24 border-b border-white/10" aria-label="No ideology">
        <div class="nk-container max-w-3xl">

            <span class="section-label">Straight Talk</span>
            <h2 class="font-display text-h2 tracking-widest text-nk-white mb-8 reveal">
                No Ideology. No Excuses.
            </h2>

            <div class="font-body text-sm text-nk-white/60 leading-relaxed space-y-4 reveal">
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

    <!-- Section 8: What We Expect From You -->
    <section class="bg-nk-warm py-24 border-b border-nk-dark/10" aria-label="Client expectations">
        <div class="nk-container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">

                <div>
                    <span class="section-label section-label--dark">Client Expectations</span>
                    <h2 class="font-display text-h2 tracking-widest text-nk-dark mb-8 reveal">
                        Training Is a Partnership.<br>We Do Our Part.
                    </h2>
                    <div class="font-body text-sm text-nk-dark/70 leading-relaxed space-y-4 reveal">
                        <p>
                            Training doesn&rsquo;t end when your dog leaves our facility. Results are maintained through consistency at home. We&rsquo;ll teach you the system &mdash; but you have to use it.
                        </p>
                        <p>
                            If you&rsquo;re looking for a magic fix that requires nothing from you, NK9 is not the right fit. If you&rsquo;re willing to put in the work, we&rsquo;ll show you exactly what to do.
                        </p>
                    </div>
                </div>

                <div class="reveal">
                    <p class="font-body text-xs uppercase tracking-wider text-nk-dark/40 mb-6">What We Ask of You</p>
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
                        <li class="flex items-start gap-4 bg-nk-dark/5 border border-nk-dark/10 p-4">
                            <svg class="w-4 h-4 text-nk-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="font-body text-sm text-nk-dark/70 leading-relaxed"><?php echo esc_html( $exp ); ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- Section 9: The End Result -->
    <section class="bg-nk-dark py-24 border-b border-white/10" aria-label="The end result">
        <div class="nk-container max-w-3xl text-center">

            <span class="section-label" style="display: block; text-align: center;">The End Result</span>
            <h2 class="font-display text-h2 tracking-widest text-nk-white mb-8 reveal">
                A Calm, Focused Dog.<br>A Relationship Built on Trust.
            </h2>

            <div class="font-body text-sm text-nk-white/60 leading-relaxed space-y-4 reveal">
                <p>
                    When everything comes together, you get a calm, focused dog, a clear line of communication, and a deeper bond than you thought possible.
                </p>
                <p>
                    This is not just dog training. This is a relationship &mdash; built on clarity, trust, and respect.
                </p>
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
