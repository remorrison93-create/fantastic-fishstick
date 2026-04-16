<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-nk-dark text-nk-white font-body antialiased' ); ?>>
<?php wp_body_open(); ?>

<!-- ───────────────────────────────────────────
     NAVBAR
     sticky, dark bg, collapses to hamburger on mobile
─────────────────────────────────────────────── -->
<header
    id="site-header"
    x-data="{ open: false, scrolled: false }"
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 80 })"
    :class="scrolled ? 'bg-nk-dark shadow-xl' : 'bg-nk-dark/90 backdrop-blur-sm'"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
    role="banner"
>
    <div class="nk-container">
        <nav class="flex items-center justify-between h-16 lg:h-20" aria-label="Primary navigation">

            <!-- Logo -->
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center group" aria-label="Nitro K9 — Home">
                <span class="font-display text-3xl lg:text-4xl tracking-widest text-nk-white group-hover:text-nk-accent transition-colors duration-300">NK9</span>
                <span class="hidden sm:block font-body text-xs uppercase tracking-widest-plus text-nk-warm/60 ml-3 mt-1">Nitro K9</span>
            </a>

            <!-- Desktop nav links -->
            <div class="hidden lg:flex items-center gap-8">
                <?php
                $nav_items = [
                    home_url( '/' )            => 'Home',
                    home_url( '/services' )    => 'Services',
                    home_url( '/philosophy' )  => 'Philosophy',
                    home_url( '/trainers' )    => 'Trainers',
                ];
                foreach ( $nav_items as $url => $label ) :
                    $is_active = ( untrailingslashit( get_permalink() ) === untrailingslashit( $url ) );
                ?>
                <a
                    href="<?php echo esc_url( $url ); ?>"
                    class="font-body text-sm uppercase tracking-wider text-nk-white/80 hover:text-nk-white transition-colors duration-200 relative pb-1 <?php echo $is_active ? 'after:absolute after:bottom-0 after:left-0 after:right-0 after:h-0.5 after:bg-nk-accent text-nk-white' : ''; ?>"
                >
                    <?php echo esc_html( $label ); ?>
                </a>
                <?php endforeach; ?>
            </div>

            <!-- Desktop CTA -->
            <div class="hidden lg:block">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-primary text-xs">
                    Apply Now
                </a>
            </div>

            <!-- Mobile hamburger -->
            <button
                @click="open = !open"
                class="lg:hidden flex flex-col justify-center items-center w-10 h-10 gap-1.5"
                :aria-expanded="open"
                aria-label="Toggle menu"
            >
                <span :class="open ? 'rotate-45 translate-y-2' : ''" class="block w-6 h-0.5 bg-nk-white transition-transform duration-300"></span>
                <span :class="open ? 'opacity-0' : ''" class="block w-6 h-0.5 bg-nk-white transition-opacity duration-300"></span>
                <span :class="open ? '-rotate-45 -translate-y-2' : ''" class="block w-6 h-0.5 bg-nk-white transition-transform duration-300"></span>
            </button>
        </nav>
    </div>

    <!-- Mobile overlay menu -->
    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        class="lg:hidden bg-nk-dark border-t border-white/10"
        @click.away="open = false"
    >
        <div class="nk-container py-8 flex flex-col gap-6">
            <?php
            $mobile_items = [
                home_url( '/' )           => 'Home',
                home_url( '/services' )   => 'Services',
                home_url( '/philosophy' ) => 'Philosophy',
                home_url( '/trainers' )   => 'Trainers',
            ];
            foreach ( $mobile_items as $url => $label ) : ?>
            <a
                href="<?php echo esc_url( $url ); ?>"
                class="font-display text-3xl tracking-widest text-nk-white hover:text-nk-accent transition-colors duration-200"
                @click="open = false"
            >
                <?php echo esc_html( $label ); ?>
            </a>
            <?php endforeach; ?>
            <a
                href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
                class="btn-primary mt-2 text-center"
                @click="open = false"
            >
                Apply Now
            </a>
        </div>
    </div>
</header>

<!-- Spacer to offset sticky nav -->
<div class="h-16 lg:h-20"></div>
