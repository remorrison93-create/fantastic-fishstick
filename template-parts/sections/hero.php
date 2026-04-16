<?php
/**
 * Section: Hero
 * Full-viewport split layout — text left, image/overlay right
 */
?>
<section class="relative min-h-[90vh] flex items-center bg-nk-dark overflow-hidden" aria-label="Hero">

    <!-- Background image (set via inline style or WP featured image) -->
    <div class="absolute inset-0 z-0">
        <?php if ( has_post_thumbnail() ) : ?>
        <img
            src="<?php the_post_thumbnail_url( 'full' ); ?>"
            alt=""
            class="w-full h-full object-cover opacity-20"
            aria-hidden="true"
        >
        <?php else : ?>
        <!-- Fallback: dark grid pattern -->
        <div class="absolute inset-0 opacity-5" style="background-image: linear-gradient(rgba(241,233,210,.3) 1px, transparent 1px), linear-gradient(90deg, rgba(241,233,210,.3) 1px, transparent 1px); background-size: 60px 60px;"></div>
        <?php endif; ?>
        <!-- Gradient overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-nk-dark via-nk-dark/90 to-nk-dark/40"></div>
    </div>

    <!-- Accent line left edge -->
    <div class="absolute left-0 top-0 bottom-0 w-1 bg-nk-accent z-10"></div>

    <div class="relative z-10 nk-container py-24 lg:py-32 w-full">
        <div class="max-w-2xl">

            <!-- Eyebrow -->
            <span
                class="section-label reveal is-visible"
                data-hero-animate
                data-delay="0"
            >
                Professional Dog Training
            </span>

            <!-- Headline -->
            <h1
                class="font-display text-hero tracking-widest text-nk-white leading-none mb-6 reveal is-visible"
                data-hero-animate
                data-delay="100"
            >
                Control Your Dog.<br>
                <span class="text-nk-accent">Rebuild Your</span><br>
                Relationship.
            </h1>

            <!-- Subheadline -->
            <p
                class="font-body text-base lg:text-lg text-nk-white/70 leading-relaxed max-w-lg mb-10 reveal is-visible"
                data-hero-animate
                data-delay="200"
            >
                NK9 works with frustrated dog owners who are done making excuses and ready for real results. We train dogs. We train owners. We deliver outcomes.
            </p>

            <!-- CTAs -->
            <div
                class="flex flex-col sm:flex-row items-start sm:items-center gap-4 mb-14 reveal is-visible"
                data-hero-animate
                data-delay="300"
            >
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-primary">
                    Apply for Training
                </a>
                <a
                    href="#how-it-works"
                    class="inline-flex items-center gap-2 font-body text-sm text-nk-white/60 hover:text-nk-white transition-colors duration-200 group"
                >
                    See How It Works
                    <svg class="w-4 h-4 translate-x-0 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>

            <!-- Trust strip -->
            <div
                class="flex flex-wrap gap-x-8 gap-y-3 reveal is-visible"
                data-hero-animate
                data-delay="400"
            >
                <?php
                $trust_items = [
                    'Balanced Training',
                    'Board &amp; Train Available',
                    'Results-Focused',
                ];
                foreach ( $trust_items as $item ) : ?>
                <div class="flex items-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-nk-accent" aria-hidden="true"></span>
                    <span class="font-body text-xs uppercase tracking-wider text-nk-white/50">
                        <?php echo $item; ?>
                    </span>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>
