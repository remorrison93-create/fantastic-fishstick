<?php
/**
 * Template — Services Page
 * Auto-applied to the page with slug: services
 */
get_header();

$services_data = [
    'private-lessons' => [
        'title'        => 'Private Lessons',
        'tagline'      => 'Hands-on. Focused. Transferable.',
        'who'          => 'Owners who want to be hands-on in their dog\'s training and learn the skills themselves.',
        'included'     => [
            '1-hour sessions at our facility or your location',
            'Focus on specific behaviors: leash manners, recall, impulse control, reactivity',
            'Owner education — you learn the system, not just the commands',
            'Written session notes and homework after every visit',
        ],
        'results'      => [
            'Consistent, predictable behavior on and off leash',
            'An owner who understands how to maintain results at home',
            'No more embarrassing walks or unpredictable reactions',
        ],
        'cta_label'    => 'Apply for Private Lessons',
        'bg'           => 'bg-nk-dark',
        'text_color'   => 'text-nk-white',
        'label_color'  => 'text-nk-accent',
        'muted_color'  => 'text-nk-white/65',
        'border_color' => 'border-white/10',
        'btn'          => 'btn-primary',
        'flip'         => false,
    ],
    'board-and-train' => [
        'title'        => 'Board & Train',
        'tagline'      => 'Maximum results. Minimum disruption.',
        'who'          => 'Owners who want maximum results with minimum disruption. Your dog lives with us and trains every day.',
        'included'     => [
            '2–4 week residential training program',
            'Daily structured sessions with professional trainers',
            'Real-world exposure and socialization',
            'Daily photo and video updates',
            'Transfer session at end of program — we teach you the system',
        ],
        'results'      => [
            'A dog that responds to commands reliably — not just at our facility',
            'Foundational obedience that holds up in any environment',
            'A clear training system you can maintain at home',
        ],
        'cta_label'    => 'Apply for Board & Train',
        'bg'           => 'bg-nk-warm',
        'text_color'   => 'text-nk-dark',
        'label_color'  => 'text-nk-accent',
        'muted_color'  => 'text-nk-dark/65',
        'border_color' => 'border-nk-dark/10',
        'btn'          => 'btn-primary',
        'flip'         => true,
    ],
    'home-visits' => [
        'title'        => 'Home Visits',
        'tagline'      => 'Fix the problem where it happens.',
        'who'          => 'Owners dealing with in-home behavior issues: jumping, resource guarding, territorial aggression, door bolting.',
        'included'     => [
            'Sessions conducted in your home',
            'Environment-specific behavior modification',
            'Household management strategies that actually work',
            'Owner coaching in the exact problem environment',
        ],
        'results'      => [
            'Address the exact problem in the exact place it happens',
            'Practical, home-specific management and correction strategies',
            'Clear rules your whole household can follow consistently',
        ],
        'cta_label'    => 'Book a Home Visit',
        'bg'           => 'bg-nk-dark',
        'text_color'   => 'text-nk-white',
        'label_color'  => 'text-nk-accent',
        'muted_color'  => 'text-nk-white/65',
        'border_color' => 'border-white/10',
        'btn'          => 'btn-primary',
        'flip'         => false,
    ],
];
?>

<!-- Page Header -->
<section class="bg-nk-dark py-20 lg:py-28 border-b border-white/10">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <span class="section-label" data-animate>Our Services</span>
        <h1 class="font-display text-6xl sm:text-7xl lg:text-8xl text-nk-white mt-2 max-w-4xl leading-none" data-animate>
            Every Program Is Built to Fix the Problem — Not Just Manage It
        </h1>
    </div>
</section>

<?php foreach ($services_data as $slug => $s) : ?>
<section id="<?php echo esc_attr($slug); ?>" class="<?php echo esc_attr($s['bg']); ?> py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start <?php echo $s['flip'] ? 'lg:flex lg:flex-row-reverse' : ''; ?>">

            <!-- Content -->
            <div>
                <span class="section-label" data-animate><?php echo esc_html($s['tagline']); ?></span>
                <h2 class="font-display text-6xl lg:text-7xl <?php echo esc_attr($s['text_color']); ?> mt-1 mb-8 leading-none" data-animate>
                    <?php echo esc_html($s['title']); ?>
                </h2>

                <!-- Who it's for -->
                <div class="mb-10" data-animate>
                    <p class="font-body text-xs uppercase tracking-widest <?php echo esc_attr($s['label_color']); ?> mb-3">Who It's For</p>
                    <p class="font-body <?php echo esc_attr($s['muted_color']); ?> leading-relaxed">
                        <?php echo esc_html($s['who']); ?>
                    </p>
                </div>

                <!-- What's included -->
                <div class="mb-10" data-animate>
                    <p class="font-body text-xs uppercase tracking-widest <?php echo esc_attr($s['label_color']); ?> mb-4">What's Included</p>
                    <ul class="space-y-3">
                        <?php foreach ($s['included'] as $item) : ?>
                            <li class="flex items-start gap-3 font-body text-sm <?php echo esc_attr($s['muted_color']); ?> leading-relaxed">
                                <span class="w-4 h-px bg-nk-accent flex-shrink-0 mt-2.5"></span>
                                <?php echo esc_html($item); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Results -->
                <div class="mb-10" data-animate>
                    <p class="font-body text-xs uppercase tracking-widest <?php echo esc_attr($s['label_color']); ?> mb-4">Results You Can Expect</p>
                    <ul class="space-y-3">
                        <?php foreach ($s['results'] as $result) : ?>
                            <li class="flex items-start gap-3 font-body text-sm <?php echo esc_attr($s['muted_color']); ?> leading-relaxed">
                                <span class="w-4 h-px bg-nk-accent flex-shrink-0 mt-2.5"></span>
                                <?php echo esc_html($result); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div data-animate>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="<?php echo esc_attr($s['btn']); ?>">
                        <?php echo esc_html($s['cta_label']); ?>
                    </a>
                </div>
            </div>

            <!-- Image placeholder -->
            <div data-animate>
                <div class="w-full aspect-[4/5] bg-white/5 border <?php echo esc_attr($s['border_color']); ?> flex items-center justify-center">
                    <span class="font-body text-xs uppercase tracking-widest text-nk-white/20">
                        <?php echo esc_html($s['title']); ?> Photo
                    </span>
                </div>
            </div>

        </div>
    </div>
</section>
<?php endforeach; ?>

<!-- Final CTA -->
<?php get_template_part('template-parts/sections/final-cta'); ?>

<?php get_footer(); ?>
