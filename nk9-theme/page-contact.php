<?php
/**
 * Template — Contact / Application Page
 * Auto-applied to the page with slug: contact
 */
get_header();
?>

<!-- Page Header -->
<section class="bg-nk-dark py-20 lg:py-28 border-b border-white/10">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">

            <div>
                <span class="section-label" data-animate>Get Started</span>
                <h1 class="font-display text-6xl sm:text-7xl lg:text-8xl text-nk-white mt-2 leading-none" data-animate>
                    Apply for<br>
                    <span class="text-nk-accent">Training</span>
                </h1>
            </div>

            <div class="lg:pt-8" data-animate>
                <p class="font-body text-lg text-nk-white/70 leading-relaxed mb-6">
                    Fill out the form below. We review every application personally and respond within 24 hours with next steps.
                </p>
                <div class="bg-white/5 border border-white/10 border-l-2 border-l-nk-accent p-6">
                    <p class="font-body text-sm text-nk-white/60 leading-relaxed">
                        We don't take every client. We take the right clients. This form helps us understand your dog and your goals so we can tell you exactly what we'd recommend — and whether we're the right fit.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Application Form -->
<section class="bg-nk-dark py-20 lg:py-28">
    <div class="max-w-4xl mx-auto px-6 lg:px-8">

        <form id="nk9-application-form" class="space-y-8" method="post" action="" novalidate>
            <?php wp_nonce_field('nk9_application', 'nk9_nonce'); ?>

            <!-- Row 1: Name -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6" data-animate>
                <div>
                    <label for="first_name" class="block font-body text-xs uppercase tracking-widest text-nk-white/50 mb-2">
                        First Name <span class="text-nk-accent">*</span>
                    </label>
                    <input type="text" id="first_name" name="first_name" required autocomplete="given-name"
                           class="w-full bg-white/5 border border-white/15 text-nk-white font-body text-sm px-4 py-3.5 focus:outline-none focus:border-nk-accent transition-colors placeholder-white/20"
                           placeholder="First name">
                </div>
                <div>
                    <label for="last_name" class="block font-body text-xs uppercase tracking-widest text-nk-white/50 mb-2">
                        Last Name <span class="text-nk-accent">*</span>
                    </label>
                    <input type="text" id="last_name" name="last_name" required autocomplete="family-name"
                           class="w-full bg-white/5 border border-white/15 text-nk-white font-body text-sm px-4 py-3.5 focus:outline-none focus:border-nk-accent transition-colors placeholder-white/20"
                           placeholder="Last name">
                </div>
            </div>

            <!-- Row 2: Contact -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6" data-animate>
                <div>
                    <label for="email" class="block font-body text-xs uppercase tracking-widest text-nk-white/50 mb-2">
                        Email <span class="text-nk-accent">*</span>
                    </label>
                    <input type="email" id="email" name="email" required autocomplete="email"
                           class="w-full bg-white/5 border border-white/15 text-nk-white font-body text-sm px-4 py-3.5 focus:outline-none focus:border-nk-accent transition-colors placeholder-white/20"
                           placeholder="you@email.com">
                </div>
                <div>
                    <label for="phone" class="block font-body text-xs uppercase tracking-widest text-nk-white/50 mb-2">
                        Phone <span class="text-nk-accent">*</span>
                    </label>
                    <input type="tel" id="phone" name="phone" required autocomplete="tel"
                           class="w-full bg-white/5 border border-white/15 text-nk-white font-body text-sm px-4 py-3.5 focus:outline-none focus:border-nk-accent transition-colors placeholder-white/20"
                           placeholder="(000) 000-0000">
                </div>
            </div>

            <!-- Location -->
            <div data-animate>
                <label for="location" class="block font-body text-xs uppercase tracking-widest text-nk-white/50 mb-2">
                    City / Location <span class="text-nk-accent">*</span>
                </label>
                <input type="text" id="location" name="location" required
                       class="w-full bg-white/5 border border-white/15 text-nk-white font-body text-sm px-4 py-3.5 focus:outline-none focus:border-nk-accent transition-colors placeholder-white/20"
                       placeholder="City, State">
            </div>

            <!-- Divider -->
            <div class="border-t border-white/10 pt-4" data-animate>
                <p class="font-body text-xs uppercase tracking-widest text-nk-accent">About Your Dog</p>
            </div>

            <!-- Row 3: Dog info -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6" data-animate>
                <div>
                    <label for="dog_name" class="block font-body text-xs uppercase tracking-widest text-nk-white/50 mb-2">
                        Dog's Name <span class="text-nk-accent">*</span>
                    </label>
                    <input type="text" id="dog_name" name="dog_name" required
                           class="w-full bg-white/5 border border-white/15 text-nk-white font-body text-sm px-4 py-3.5 focus:outline-none focus:border-nk-accent transition-colors placeholder-white/20"
                           placeholder="Dog's name">
                </div>
                <div>
                    <label for="dog_breed" class="block font-body text-xs uppercase tracking-widest text-nk-white/50 mb-2">
                        Breed <span class="text-nk-accent">*</span>
                    </label>
                    <input type="text" id="dog_breed" name="dog_breed" required
                           class="w-full bg-white/5 border border-white/15 text-nk-white font-body text-sm px-4 py-3.5 focus:outline-none focus:border-nk-accent transition-colors placeholder-white/20"
                           placeholder="Breed">
                </div>
            </div>

            <!-- Dog Age -->
            <div data-animate>
                <label for="dog_age" class="block font-body text-xs uppercase tracking-widest text-nk-white/50 mb-2">
                    Dog's Age <span class="text-nk-accent">*</span>
                </label>
                <select id="dog_age" name="dog_age" required
                        class="w-full bg-nk-dark border border-white/15 text-nk-white font-body text-sm px-4 py-3.5 focus:outline-none focus:border-nk-accent transition-colors appearance-none cursor-pointer">
                    <option value="" disabled selected>Select age range</option>
                    <option value="puppy">Puppy — under 6 months</option>
                    <option value="6-12mo">6–12 months</option>
                    <option value="1-3yr">1–3 years</option>
                    <option value="3yr+">3+ years</option>
                </select>
            </div>

            <!-- Primary concern -->
            <div data-animate>
                <label for="concern" class="block font-body text-xs uppercase tracking-widest text-nk-white/50 mb-2">
                    What specific problem are you trying to solve? <span class="text-nk-accent">*</span>
                </label>
                <textarea id="concern" name="concern" required rows="4"
                          class="w-full bg-white/5 border border-white/15 text-nk-white font-body text-sm px-4 py-3.5 focus:outline-none focus:border-nk-accent transition-colors resize-none placeholder-white/20"
                          placeholder="Describe the behavior issues you're dealing with..."></textarea>
            </div>

            <!-- Training Interest -->
            <div data-animate>
                <p class="block font-body text-xs uppercase tracking-widest text-nk-white/50 mb-4">
                    I'm interested in (check all that apply)
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <?php
                    $interests = [
                        'private_lessons' => 'Private Lessons',
                        'board_and_train' => 'Board & Train',
                        'home_visits'     => 'Home Visits',
                        'not_sure'        => 'Not Sure Yet',
                    ];
                    foreach ($interests as $val => $label) : ?>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input type="checkbox" name="interest[]" value="<?php echo esc_attr($val); ?>"
                                   class="w-4 h-4 bg-white/5 border border-white/15 text-nk-accent focus:ring-0 cursor-pointer">
                            <span class="font-body text-sm text-nk-white/65 group-hover:text-nk-white transition-colors">
                                <?php echo esc_html($label); ?>
                            </span>
                        </label>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- How did you hear -->
            <div data-animate>
                <label for="source" class="block font-body text-xs uppercase tracking-widest text-nk-white/50 mb-2">
                    How did you hear about NK9?
                </label>
                <select id="source" name="source"
                        class="w-full bg-nk-dark border border-white/15 text-nk-white font-body text-sm px-4 py-3.5 focus:outline-none focus:border-nk-accent transition-colors appearance-none cursor-pointer">
                    <option value="" disabled selected>Select one</option>
                    <option value="google">Google</option>
                    <option value="referral">Referral</option>
                    <option value="instagram">Instagram</option>
                    <option value="facebook">Facebook</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <!-- Additional info -->
            <div data-animate>
                <label for="additional" class="block font-body text-xs uppercase tracking-widest text-nk-white/50 mb-2">
                    Anything else we should know? <span class="text-nk-white/25">(optional)</span>
                </label>
                <textarea id="additional" name="additional" rows="3"
                          class="w-full bg-white/5 border border-white/15 text-nk-white font-body text-sm px-4 py-3.5 focus:outline-none focus:border-nk-accent transition-colors resize-none placeholder-white/20"
                          placeholder="Additional context, questions, or concerns..."></textarea>
            </div>

            <!-- Submit -->
            <div data-animate>
                <button type="submit" class="btn-primary w-full sm:w-auto text-base px-12 py-5">
                    Submit Application
                </button>
                <p class="font-body text-xs text-nk-white/35 mt-4 leading-relaxed">
                    No commitment required. We'll reach out within 24 hours to discuss next steps.
                </p>
            </div>

        </form>

        <!-- Success Message (hidden by default, shown via JS or server redirect) -->
        <div id="nk9-form-success" class="hidden mt-12 bg-white/5 border border-nk-accent/40 p-10 text-center">
            <h3 class="font-display text-4xl text-nk-white mb-4">Application Received.</h3>
            <p class="font-body text-nk-white/65 leading-relaxed max-w-xl mx-auto">
                We'll review your information and reach out within 24 hours to discuss next steps. No pressure, no sales pitch — just a straight conversation.
            </p>
        </div>

    </div>
</section>

<?php get_footer(); ?>
