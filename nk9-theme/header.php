<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-nk-dark text-nk-white'); ?>>
<?php wp_body_open(); ?>

<header
    id="site-header"
    x-data="{ open: false, scrolled: false }"
    @scroll.window="scrolled = (window.scrollY > 80)"
    :class="scrolled ? 'bg-nk-dark shadow-xl' : 'bg-transparent'"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
>
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">

            <!-- Logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="font-display text-3xl tracking-wider text-nk-white hover:text-nk-accent transition-colors duration-200">
                NK9
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center gap-8">
                <a href="<?php echo esc_url(home_url('/')); ?>"
                   class="font-body text-xs font-semibold uppercase tracking-widest transition-colors duration-200 <?php echo is_front_page() ? 'text-nk-accent' : 'text-nk-white hover:text-nk-accent'; ?>">
                    Home
                </a>
                <a href="<?php echo esc_url(home_url('/services')); ?>"
                   class="font-body text-xs font-semibold uppercase tracking-widest transition-colors duration-200 <?php echo is_page('services') ? 'text-nk-accent' : 'text-nk-white hover:text-nk-accent'; ?>">
                    Services
                </a>
                <a href="<?php echo esc_url(home_url('/philosophy')); ?>"
                   class="font-body text-xs font-semibold uppercase tracking-widest transition-colors duration-200 <?php echo is_page('philosophy') ? 'text-nk-accent' : 'text-nk-white hover:text-nk-accent'; ?>">
                    Philosophy
                </a>
                <a href="<?php echo esc_url(home_url('/trainers')); ?>"
                   class="font-body text-xs font-semibold uppercase tracking-widest transition-colors duration-200 <?php echo is_page('trainers') ? 'text-nk-accent' : 'text-nk-white hover:text-nk-accent'; ?>">
                    Trainers
                </a>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-primary ml-4">
                    Apply Now
                </a>
            </nav>

            <!-- Mobile Hamburger -->
            <button
                @click="open = !open"
                class="lg:hidden flex flex-col justify-center items-center w-10 h-10 gap-1.5 focus:outline-none"
                aria-label="Toggle navigation"
                :aria-expanded="open"
            >
                <span :class="open ? 'rotate-45 translate-y-2' : ''"
                      class="block w-6 h-px bg-nk-white transition-all duration-300 origin-center"></span>
                <span :class="open ? 'opacity-0 scale-x-0' : ''"
                      class="block w-6 h-px bg-nk-white transition-all duration-300"></span>
                <span :class="open ? '-rotate-45 -translate-y-2' : ''"
                      class="block w-6 h-px bg-nk-white transition-all duration-300 origin-center"></span>
            </button>

        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        class="lg:hidden fixed inset-0 bg-nk-dark z-40 flex flex-col items-center justify-center gap-6"
        style="display: none;"
    >
        <a @click="open = false" href="<?php echo esc_url(home_url('/')); ?>"
           class="font-display text-6xl text-nk-white hover:text-nk-accent transition-colors">Home</a>
        <a @click="open = false" href="<?php echo esc_url(home_url('/services')); ?>"
           class="font-display text-6xl text-nk-white hover:text-nk-accent transition-colors">Services</a>
        <a @click="open = false" href="<?php echo esc_url(home_url('/philosophy')); ?>"
           class="font-display text-6xl text-nk-white hover:text-nk-accent transition-colors">Philosophy</a>
        <a @click="open = false" href="<?php echo esc_url(home_url('/trainers')); ?>"
           class="font-display text-6xl text-nk-white hover:text-nk-accent transition-colors">Trainers</a>
        <a @click="open = false" href="<?php echo esc_url(home_url('/contact')); ?>"
           class="btn-primary mt-4 text-base px-12 py-5">Apply Now</a>
    </div>

</header>

<main id="main-content" class="pt-20">
