<section class="relative min-h-screen flex items-center bg-nk-dark overflow-hidden">

    <!-- Accent left border -->
    <div class="absolute left-0 top-0 bottom-0 w-1 bg-nk-accent z-10"></div>

    <!-- Background gradient -->
    <div class="absolute inset-0 bg-gradient-to-br from-nk-dark via-nk-dark to-black z-0"></div>

    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 py-28 lg:py-0 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center w-full">

        <!-- Text -->
        <div class="pl-4 lg:pl-8">
            <span class="section-label" data-animate-hero>Professional Dog Training</span>

            <h1 class="font-display text-7xl sm:text-8xl lg:text-9xl text-nk-white leading-none mt-2 mb-6" data-animate-hero>
                Control<br>
                Your Dog.<br>
                <span class="text-nk-accent">Rebuild Your</span><br>
                Relationship.
            </h1>

            <p class="font-body text-lg text-nk-white/75 max-w-lg leading-relaxed mb-10" data-animate-hero>
                NK9 works with frustrated dog owners who are done making excuses and ready for real results. We train dogs. We train owners. We deliver outcomes.
            </p>

            <div class="flex flex-wrap items-center gap-6" data-animate-hero>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-primary">
                    Apply for Training
                </a>
                <a href="#how-it-works"
                   class="font-body text-xs font-semibold uppercase tracking-widest text-nk-white/60 hover:text-nk-accent transition-colors">
                    See How It Works &rarr;
                </a>
            </div>

            <!-- Trust strip -->
            <div class="flex flex-wrap gap-8 mt-14 pt-10 border-t border-white/10" data-animate-hero>
                <div class="flex items-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-nk-accent flex-shrink-0"></span>
                    <span class="font-body text-xs uppercase tracking-widest text-nk-white/50">Balanced Training</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-nk-accent flex-shrink-0"></span>
                    <span class="font-body text-xs uppercase tracking-widest text-nk-white/50">Board &amp; Train Available</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-nk-accent flex-shrink-0"></span>
                    <span class="font-body text-xs uppercase tracking-widest text-nk-white/50">Results-Focused</span>
                </div>
            </div>
        </div>

        <!-- Hero Image -->
        <div class="hidden lg:block" data-animate-hero>
            <?php
            $hero_image = get_theme_mod('nk9_hero_image');
            if ($hero_image) : ?>
                <img src="<?php echo esc_url($hero_image); ?>"
                     alt="NK9 Professional Dog Training"
                     class="w-full h-full object-cover max-h-[700px]">
            <?php else : ?>
                <!-- Placeholder — replace with actual hero image in Appearance > Customize -->
                <div class="w-full aspect-[4/5] bg-white/5 border border-white/10 flex items-center justify-center">
                    <span class="font-body text-xs uppercase tracking-widest text-nk-white/20">Hero Image</span>
                </div>
            <?php endif; ?>
        </div>

    </div>
</section>
