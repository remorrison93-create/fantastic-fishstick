<?php
/**
 * Section: Hero
 * Split layout — text left, trainer image right with striped circle accent
 */
?>
<section class="relative min-h-[90vh] flex items-center bg-nk-dark overflow-hidden" aria-label="Hero">

    <div class="relative z-10 nk-container py-16 lg:py-24 w-full">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-0">

            <!-- Left: Text Content -->
            <div class="flex-1 max-w-2xl" data-hero-animate data-delay="0">

                <!-- Eyebrow -->
                <p class="font-body text-sm tracking-[0.25em] text-nk-white/60 uppercase mb-4">
                    Nitro K-9 &nbsp;|&nbsp; Bothell, WA
                </p>

                <!-- Headline -->
                <h1 class="font-display tracking-widest leading-none mb-6" style="font-size: clamp(3rem, 8vw, 6rem);">
                    <span class="text-nk-white">REAL </span><span class="text-nk-accent">DOG TRAINING</span><br>
                    <span class="text-nk-white">REAL </span><span class="text-nk-accent">RESULTS</span>
                </h1>

                <!-- Body / Read More -->
                <div class="font-body text-base lg:text-lg text-nk-white leading-relaxed max-w-xl mb-10">
                    <p>
                        Lorem ipsum dul set e lore to ipsu dul set e lore to ipsum dul set e lore to ipsu dul set e lore to ipsum...
                        <button
                            id="hero-read-more-btn"
                            class="inline font-body text-sm text-nk-white/60 underline underline-offset-2 hover:text-nk-white transition-colors duration-200 ml-1 tracking-wider uppercase"
                            aria-haspopup="dialog"
                            aria-controls="hero-read-more-modal"
                        >Read More</button>
                    </p>
                </div>

                <!-- CTAs -->
                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
                       class="inline-block font-display tracking-widest text-sm px-10 py-4 bg-nk-accent text-nk-white uppercase hover:bg-nk-accent/90 transition-colors duration-200">
                        Sign-Up
                    </a>
                    <a href="<?php echo esc_url( home_url( '/programs' ) ); ?>"
                       class="inline-block font-display tracking-widest text-sm px-10 py-4 bg-transparent text-nk-white uppercase border-2 border-nk-white hover:bg-nk-white hover:text-nk-dark transition-colors duration-200">
                        Programs
                    </a>
                </div>

            </div>

            <!-- Right: Trainer image with striped circle -->
            <div class="flex-1 flex justify-center items-end relative min-h-[480px] lg:min-h-[600px]" data-hero-animate data-delay="200">

                <!-- Striped circle background -->
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[380px] h-[380px] lg:w-[480px] lg:h-[480px] rounded-full overflow-hidden" aria-hidden="true">
                    <div class="w-full h-full rounded-full" style="background: repeating-linear-gradient(0deg, #f1592a 0px, #f1592a 18px, transparent 18px, transparent 36px); opacity: 0.9;"></div>
                </div>

                <!-- Trainer + dogs image -->
                <?php
                $hero_image_url = get_template_directory_uri() . '/assets/images/trainer-hero.png';
                ?>
                <img
                    src="<?php echo esc_url( $hero_image_url ); ?>"
                    alt="Nitro K-9 trainer with dogs"
                    class="relative z-10 max-h-[560px] lg:max-h-[680px] w-auto object-contain object-bottom drop-shadow-2xl"
                >

            </div>

        </div>
    </div>

</section>

<!-- Read More Modal -->
<div
    id="hero-read-more-modal"
    class="fixed inset-0 z-50 flex items-center justify-center p-4 hidden"
    role="dialog"
    aria-modal="true"
    aria-labelledby="hero-modal-title"
>
    <!-- Backdrop -->
    <div id="hero-modal-backdrop" class="absolute inset-0 bg-black/70" aria-hidden="true"></div>

    <!-- Panel -->
    <div class="relative z-10 bg-nk-dark border border-nk-white/10 max-w-2xl w-full max-h-[90vh] overflow-y-auto p-10">

        <!-- Close -->
        <button
            id="hero-modal-close"
            class="absolute top-4 right-6 font-display text-nk-white/70 hover:text-nk-white text-xl tracking-widest transition-colors duration-200"
            aria-label="Close"
        >X</button>

        <!-- Eyebrow -->
        <p class="font-body text-sm tracking-[0.25em] text-nk-white/60 uppercase text-center mb-4">
            Nitro K-9 &nbsp;|&nbsp; Bothell, WA
        </p>

        <!-- Headline -->
        <h2 id="hero-modal-title" class="font-display tracking-widest leading-none text-center mb-8" style="font-size: clamp(2rem, 5vw, 3.5rem);">
            <span class="text-nk-white">REAL </span><span class="text-nk-accent">DOG TRAINING</span><br>
            <span class="text-nk-white">REAL </span><span class="text-nk-accent">RESULTS</span>
        </h2>

        <!-- Full body text -->
        <div class="font-body text-base text-nk-white/80 leading-relaxed space-y-5 text-justify">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
            <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
        </div>

        <!-- Close link -->
        <div class="text-right mt-8">
            <button
                class="hero-modal-close-btn font-body text-sm tracking-[0.2em] text-nk-white/60 underline underline-offset-2 hover:text-nk-white transition-colors duration-200 uppercase"
            >Close</button>
        </div>

    </div>
</div>

<script>
(function () {
    var modal    = document.getElementById('hero-read-more-modal');
    var openBtn  = document.getElementById('hero-read-more-btn');
    var closeBtn = document.getElementById('hero-modal-close');
    var backdrop = document.getElementById('hero-modal-backdrop');
    var closeBtns = document.querySelectorAll('.hero-modal-close-btn');

    function openModal() {
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
        closeBtn.focus();
    }

    function closeModal() {
        modal.classList.add('hidden');
        document.body.style.overflow = '';
        openBtn.focus();
    }

    if (openBtn)  openBtn.addEventListener('click', openModal);
    if (closeBtn) closeBtn.addEventListener('click', closeModal);
    if (backdrop) backdrop.addEventListener('click', closeModal);
    closeBtns.forEach(function(btn) { btn.addEventListener('click', closeModal); });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !modal.classList.contains('hidden')) closeModal();
    });
})();
</script>
