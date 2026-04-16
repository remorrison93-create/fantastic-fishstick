<?php
/**
 * Template Name: Contact / Apply
 * Template Post Type: page
 */

get_header();
?>

<main id="main-content" role="main">

    <!-- Page Header -->
    <section class="bg-nk-dark py-20 border-b border-white/10" aria-label="Contact header">
        <div class="nk-container max-w-3xl">
            <span class="section-label">Get Started</span>
            <h1 class="font-display text-h1 tracking-widest text-nk-white leading-tight mb-4 reveal">
                Apply for Training
            </h1>
            <p class="font-body text-base text-nk-white/60 leading-relaxed reveal">
                Fill out the form below. We review every application personally and respond within 24 hours with next steps.
            </p>
        </div>
    </section>

    <!-- Form Section -->
    <section class="bg-nk-dark py-16" aria-label="Application form">
        <div class="nk-container">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-16">

                <!-- Left: Context + what happens next -->
                <div class="lg:col-span-1">

                    <!-- Pre-form qualifier -->
                    <div class="bg-nk-accent/10 border border-nk-accent/30 p-6 mb-8 reveal">
                        <p class="font-body text-sm text-nk-white/80 leading-relaxed">
                            We don&rsquo;t take every client. We take the right clients. This form helps us understand your dog and your goals so we can tell you exactly what we&rsquo;d recommend &mdash; and whether we&rsquo;re the right fit.
                        </p>
                    </div>

                    <!-- What happens next -->
                    <div class="reveal">
                        <p class="font-body text-xs uppercase tracking-wider text-nk-accent mb-4">What Happens Next</p>
                        <ol class="space-y-4">
                            <?php
                            $next_steps = [
                                'We review your application personally',
                                'You receive a response within 24 hours',
                                'We discuss your dog\'s situation and recommend a program',
                                'If it\'s a fit, we send you a booking link',
                            ];
                            foreach ( $next_steps as $i => $step ) : ?>
                            <li class="flex items-start gap-3">
                                <span class="font-display text-lg text-nk-accent/40 leading-none mt-0.5 w-5 shrink-0">
                                    <?php echo str_pad( $i + 1, 2, '0', STR_PAD_LEFT ); ?>
                                </span>
                                <span class="font-body text-sm text-nk-white/60 leading-relaxed">
                                    <?php echo esc_html( $step ); ?>
                                </span>
                            </li>
                            <?php endforeach; ?>
                        </ol>
                    </div>

                    <!-- Contact details -->
                    <div class="mt-10 pt-8 border-t border-white/10 reveal">
                        <p class="font-body text-xs uppercase tracking-wider text-nk-white/40 mb-4">Prefer to Call?</p>
                        <a href="tel:+19725550000" class="font-body text-base text-nk-white hover:text-nk-accent transition-colors duration-200">
                            (972) 555-0000
                        </a>
                        <p class="font-body text-xs text-nk-white/40 mt-1">Mon–Sat, 8am–6pm CST</p>
                    </div>

                </div>

                <!-- Right: Form -->
                <div class="lg:col-span-2 reveal">

                    <?php
                    // Contact Form 7 shortcode — replace 1234 with actual CF7 form ID
                    if ( function_exists( 'wpcf7' ) ) :
                        echo do_shortcode( '[contact-form-7 id="nk9-application" title="NK9 Application"]' );
                    else :
                    ?>
                    <!-- Fallback plain HTML form (replace with CF7 shortcode after plugin install) -->
                    <form
                        class="nk9-application-form space-y-6"
                        action="#"
                        method="post"
                        novalidate
                        x-data="nk9Form()"
                        @submit.prevent="submitForm"
                    >
                        <!-- Name row -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="nk9-field-group">
                                <label class="nk9-label" for="first_name">First Name <span class="text-nk-accent">*</span></label>
                                <input class="nk9-input" type="text" id="first_name" name="first_name" required autocomplete="given-name">
                            </div>
                            <div class="nk9-field-group">
                                <label class="nk9-label" for="last_name">Last Name <span class="text-nk-accent">*</span></label>
                                <input class="nk9-input" type="text" id="last_name" name="last_name" required autocomplete="family-name">
                            </div>
                        </div>

                        <!-- Contact row -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="nk9-field-group">
                                <label class="nk9-label" for="email">Email <span class="text-nk-accent">*</span></label>
                                <input class="nk9-input" type="email" id="email" name="email" required autocomplete="email">
                            </div>
                            <div class="nk9-field-group">
                                <label class="nk9-label" for="phone">Phone <span class="text-nk-accent">*</span></label>
                                <input class="nk9-input" type="tel" id="phone" name="phone" required autocomplete="tel">
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="nk9-field-group">
                            <label class="nk9-label" for="location">City / Location <span class="text-nk-accent">*</span></label>
                            <input class="nk9-input" type="text" id="location" name="location" required autocomplete="address-level2">
                        </div>

                        <!-- Dog info -->
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                            <div class="nk9-field-group">
                                <label class="nk9-label" for="dog_name">Dog&rsquo;s Name <span class="text-nk-accent">*</span></label>
                                <input class="nk9-input" type="text" id="dog_name" name="dog_name" required>
                            </div>
                            <div class="nk9-field-group">
                                <label class="nk9-label" for="dog_breed">Breed <span class="text-nk-accent">*</span></label>
                                <input class="nk9-input" type="text" id="dog_breed" name="dog_breed" required>
                            </div>
                            <div class="nk9-field-group">
                                <label class="nk9-label" for="dog_age">Age <span class="text-nk-accent">*</span></label>
                                <select class="nk9-input nk9-select" id="dog_age" name="dog_age" required>
                                    <option value="">Select age</option>
                                    <option value="puppy">Puppy (under 6 months)</option>
                                    <option value="6-12mo">6–12 months</option>
                                    <option value="1-3yr">1–3 years</option>
                                    <option value="3yr+">3+ years</option>
                                </select>
                            </div>
                        </div>

                        <!-- Primary concern -->
                        <div class="nk9-field-group">
                            <label class="nk9-label" for="primary_concern">
                                What specific problem are you trying to solve? <span class="text-nk-accent">*</span>
                            </label>
                            <textarea class="nk9-input nk9-textarea" id="primary_concern" name="primary_concern" rows="4" required placeholder="Describe the behavior issues in detail. The more specific, the better."></textarea>
                        </div>

                        <!-- Training interest -->
                        <div class="nk9-field-group">
                            <p class="nk9-label">Training Interest</p>
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 mt-2">
                                <?php
                                $training_options = [
                                    'private_lessons'  => 'Private Lessons',
                                    'board_and_train'  => 'Board &amp; Train',
                                    'home_visits'      => 'Home Visits',
                                    'not_sure'         => 'Not Sure Yet',
                                ];
                                foreach ( $training_options as $value => $label ) : ?>
                                <label class="nk9-checkbox-label">
                                    <input class="nk9-checkbox" type="checkbox" name="training_interest[]" value="<?php echo esc_attr( $value ); ?>">
                                    <span class="font-body text-sm text-nk-white/70"><?php echo $label; ?></span>
                                </label>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <!-- How did you hear -->
                        <div class="nk9-field-group">
                            <label class="nk9-label" for="referral_source">How did you hear about NK9?</label>
                            <select class="nk9-input nk9-select" id="referral_source" name="referral_source">
                                <option value="">Select one</option>
                                <option value="google">Google</option>
                                <option value="referral">Referral</option>
                                <option value="instagram">Instagram</option>
                                <option value="facebook">Facebook</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <!-- Additional notes -->
                        <div class="nk9-field-group">
                            <label class="nk9-label" for="additional_notes">Anything else we should know? <span class="text-nk-white/30">(optional)</span></label>
                            <textarea class="nk9-input nk9-textarea" id="additional_notes" name="additional_notes" rows="3" placeholder="Previous training history, vet notes, household info, etc."></textarea>
                        </div>

                        <!-- Submit -->
                        <div class="pt-2">
                            <button type="submit" class="btn-primary w-full sm:w-auto" :disabled="submitting">
                                <span x-show="!submitting">Submit Application</span>
                                <span x-show="submitting" x-cloak>Submitting&hellip;</span>
                            </button>
                        </div>

                        <!-- Success message -->
                        <div
                            x-show="submitted"
                            x-cloak
                            class="bg-nk-accent/10 border border-nk-accent/30 p-6"
                            role="alert"
                        >
                            <p class="font-body text-sm text-nk-white leading-relaxed">
                                <strong class="text-nk-accent">Application received.</strong> We&rsquo;ll review your information and reach out within 24 hours to discuss next steps. No pressure, no sales pitch &mdash; just a straight conversation.
                            </p>
                        </div>

                    </form>

                    <script>
                    function nk9Form() {
                        return {
                            submitting: false,
                            submitted: false,
                            submitForm() {
                                this.submitting = true;
                                // Replace with actual form submission logic (AJAX / CF7 / backend)
                                setTimeout(() => {
                                    this.submitting = false;
                                    this.submitted = true;
                                }, 800);
                            }
                        }
                    }
                    </script>

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>

<?php
/*
 * ─────────────────────────────────────────────────────────────────
 * FORM STYLES — added inline here; extracted to style.css in prod
 * ─────────────────────────────────────────────────────────────────
 */
?>
<style>
.nk9-label {
    display: block;
    font-family: 'Inter', sans-serif;
    font-size: 0.75rem;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: rgba(255,255,255,0.5);
    margin-bottom: 0.5rem;
}
.nk9-input {
    display: block;
    width: 100%;
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.12);
    color: #ffffff;
    font-family: 'Inter', sans-serif;
    font-size: 0.875rem;
    padding: 0.75rem 1rem;
    transition: border-color 0.2s ease;
    appearance: none;
    -webkit-appearance: none;
}
.nk9-input:focus {
    outline: none;
    border-color: #f1592a;
}
.nk9-input::placeholder {
    color: rgba(255,255,255,0.2);
}
.nk9-select {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='rgba(255,255,255,0.4)'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 0.75rem center;
    background-size: 1rem;
    padding-right: 2.5rem;
    cursor: pointer;
}
.nk9-select option {
    background: #272727;
    color: #ffffff;
}
.nk9-textarea {
    resize: vertical;
    min-height: 100px;
}
.nk9-checkbox-label {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    cursor: pointer;
    padding: 0.625rem 0.75rem;
    border: 1px solid rgba(255,255,255,0.1);
    transition: border-color 0.2s ease;
}
.nk9-checkbox-label:hover {
    border-color: rgba(241,89,42,0.4);
}
.nk9-checkbox {
    width: 1rem;
    height: 1rem;
    accent-color: #f1592a;
    cursor: pointer;
    flex-shrink: 0;
}
[x-cloak] { display: none !important; }
</style>
