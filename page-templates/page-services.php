<?php
/**
 * Template Name: Services
 * Template Post Type: page
 */

get_header();

$services = [
    [
        'id'          => 'private-lessons',
        'title'       => 'Private Lessons',
        'who'         => 'Owners who want to be hands-on in their dog\'s training and learn the skills themselves.',
        'included'    => [
            '1-hour in-person sessions at our facility or your location',
            'Focus on specific behaviors: leash manners, recall, impulse control, reactivity',
            'Owner education — you learn the system, not just the commands',
            'Written session notes and homework after every session',
        ],
        'results'     => [
            'Consistent, predictable behavior both on and off leash',
            'An owner who understands how to maintain results at home',
            'No more embarrassing walks or unpredictable reactions',
        ],
        'cta_label'   => 'Apply for Private Lessons',
        'bg'          => 'bg-nk-dark',
        'text_color'  => 'text-nk-white',
        'label_class' => '',
    ],
    [
        'id'          => 'board-and-train',
        'title'       => 'Board &amp; Train',
        'who'         => 'Owners who want maximum results with minimum disruption. Your dog lives with us and trains every day.',
        'included'    => [
            '2–4 week residential program',
            'Daily structured training sessions',
            'Real-world exposure and socialization',
            'Daily photo/video updates sent to you',
            'Transfer session at program end — we teach you the system',
        ],
        'results'     => [
            'A dog that responds to commands reliably — not just at the facility',
            'Foundational obedience that holds up in any environment',
            'A clear training system you can maintain at home',
        ],
        'cta_label'   => 'Apply for Board &amp; Train',
        'bg'          => 'bg-nk-warm',
        'text_color'  => 'text-nk-dark',
        'label_class' => 'section-label--dark',
    ],
    [
        'id'          => 'home-visits',
        'title'       => 'Home Visits',
        'who'         => 'Owners dealing with in-home behavior issues: jumping, resource guarding, territorial aggression, door bolting.',
        'included'    => [
            'Sessions conducted in your home',
            'Environment-specific behavior modification',
            'Household management strategies',
            'Owner coaching in the actual problem environment',
        ],
        'results'     => [
            'Address the exact problem in the exact place it happens',
            'Practical, home-specific management and correction strategies',
            'Clear rules your whole household can follow',
        ],
        'cta_label'   => 'Book a Home Visit',
        'bg'          => 'bg-nk-dark',
        'text_color'  => 'text-nk-white',
        'label_class' => '',
    ],
];
?>

<main id="main-content" role="main">

    <!-- Page Header -->
    <section class="bg-nk-dark py-20 border-b border-white/10" aria-label="Services header">
        <div class="nk-container">
            <span class="section-label">Our Services</span>
            <h1 class="font-display text-h1 tracking-widest text-nk-white max-w-2xl leading-tight reveal">
                Every Program Is Built to Fix the Problem&mdash;Not Just Manage It
            </h1>
        </div>
    </section>

    <!-- Service Sections -->
    <?php foreach ( $services as $service ) : ?>
    <section
        id="<?php echo esc_attr( $service['id'] ); ?>"
        class="<?php echo esc_attr( $service['bg'] ); ?> py-24"
        aria-label="<?php echo esc_attr( strip_tags( $service['title'] ) ); ?>"
    >
        <div class="nk-container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">

                <!-- Left: Title + Who it's for -->
                <div>
                    <span class="section-label <?php echo esc_attr( $service['label_class'] ); ?>">Service</span>
                    <h2 class="font-display text-h2 tracking-widest <?php echo esc_attr( $service['text_color'] ); ?> mb-6 reveal">
                        <?php echo $service['title']; ?>
                    </h2>

                    <p class="font-body text-xs uppercase tracking-wider <?php echo $service['bg'] === 'bg-nk-warm' ? 'text-nk-dark/50' : 'text-nk-white/40'; ?> mb-2">
                        Who it&rsquo;s for
                    </p>
                    <p class="font-body text-base <?php echo $service['bg'] === 'bg-nk-warm' ? 'text-nk-dark/70' : 'text-nk-white/70'; ?> leading-relaxed mb-10 reveal">
                        <?php echo esc_html( $service['who'] ); ?>
                    </p>

                    <div class="reveal">
                        <a
                            href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
                            class="<?php echo $service['bg'] === 'bg-nk-warm' ? 'btn-secondary border-nk-dark text-nk-dark hover:bg-nk-dark hover:text-white' : 'btn-primary'; ?>"
                        >
                            <?php echo $service['cta_label']; ?>
                        </a>
                    </div>
                </div>

                <!-- Right: Included + Results -->
                <div class="space-y-10">

                    <!-- What's included -->
                    <div class="reveal">
                        <p class="font-body text-xs uppercase tracking-wider <?php echo $service['bg'] === 'bg-nk-warm' ? 'text-nk-dark/50' : 'text-nk-white/40'; ?> mb-4">
                            What&rsquo;s Included
                        </p>
                        <ul class="space-y-3">
                            <?php foreach ( $service['included'] as $item ) : ?>
                            <li class="flex items-start gap-3 font-body text-sm <?php echo $service['bg'] === 'bg-nk-warm' ? 'text-nk-dark/70' : 'text-nk-white/70'; ?>">
                                <span class="w-1.5 h-1.5 rounded-full bg-nk-accent mt-1.5 shrink-0" aria-hidden="true"></span>
                                <?php echo esc_html( $item ); ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Results -->
                    <div class="reveal">
                        <p class="font-body text-xs uppercase tracking-wider <?php echo $service['bg'] === 'bg-nk-warm' ? 'text-nk-dark/50' : 'text-nk-white/40'; ?> mb-4">
                            Results You Can Expect
                        </p>
                        <ul class="space-y-3">
                            <?php foreach ( $service['results'] as $result ) : ?>
                            <li class="flex items-start gap-3 font-body text-sm font-medium <?php echo $service['bg'] === 'bg-nk-warm' ? 'text-nk-dark' : 'text-nk-white'; ?>">
                                <svg class="w-4 h-4 text-nk-accent mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <?php echo esc_html( $result ); ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <?php endforeach; ?>

    <?php get_template_part( 'template-parts/sections/final-cta' ); ?>

</main>

<?php get_footer(); ?>
