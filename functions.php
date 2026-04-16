<?php
/**
 * NK9 Theme Functions
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// ─────────────────────────────────────────────
// Theme Setup
// ─────────────────────────────────────────────
function nk9_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script',
    ] );

    register_nav_menus( [
        'primary' => __( 'Primary Navigation', 'nk9-theme' ),
        'footer'  => __( 'Footer Navigation', 'nk9-theme' ),
    ] );
}
add_action( 'after_setup_theme', 'nk9_theme_setup' );

// ─────────────────────────────────────────────
// Enqueue Scripts & Styles
// ─────────────────────────────────────────────
function nk9_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style(
        'nk9-google-fonts',
        'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@400;500;600;700&display=swap',
        [],
        null
    );

    // Tailwind compiled CSS
    wp_enqueue_style(
        'nk9-style',
        get_template_directory_uri() . '/assets/css/style.css',
        [ 'nk9-google-fonts' ],
        wp_get_theme()->get( 'Version' )
    );

    // Alpine.js (CDN — lightweight reactivity for nav/forms)
    wp_enqueue_script(
        'alpinejs',
        'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js',
        [],
        '3.x',
        true
    );
    // Alpine must be deferred
    add_filter( 'script_loader_tag', function( $tag, $handle ) {
        if ( 'alpinejs' === $handle ) {
            return str_replace( ' src', ' defer src', $tag );
        }
        return $tag;
    }, 10, 2 );

    // Theme JS
    wp_enqueue_script(
        'nk9-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        wp_get_theme()->get( 'Version' ),
        true
    );
}
add_action( 'wp_enqueue_scripts', 'nk9_enqueue_assets' );

// ─────────────────────────────────────────────
// Custom Post Types
// ─────────────────────────────────────────────
function nk9_register_post_types() {

    // Trainers
    register_post_type( 'trainer', [
        'labels' => [
            'name'          => __( 'Trainers', 'nk9-theme' ),
            'singular_name' => __( 'Trainer', 'nk9-theme' ),
            'add_new_item'  => __( 'Add New Trainer', 'nk9-theme' ),
            'edit_item'     => __( 'Edit Trainer', 'nk9-theme' ),
        ],
        'public'       => false,
        'show_ui'      => true,
        'show_in_menu' => true,
        'supports'     => [ 'title', 'thumbnail' ],
        'menu_icon'    => 'dashicons-groups',
        'rewrite'      => false,
    ] );

    // Testimonials
    register_post_type( 'testimonial', [
        'labels' => [
            'name'          => __( 'Testimonials', 'nk9-theme' ),
            'singular_name' => __( 'Testimonial', 'nk9-theme' ),
            'add_new_item'  => __( 'Add New Testimonial', 'nk9-theme' ),
            'edit_item'     => __( 'Edit Testimonial', 'nk9-theme' ),
        ],
        'public'       => false,
        'show_ui'      => true,
        'show_in_menu' => true,
        'supports'     => [ 'title' ],
        'menu_icon'    => 'dashicons-format-quote',
        'rewrite'      => false,
    ] );

    // Services
    register_post_type( 'service', [
        'labels' => [
            'name'          => __( 'Services', 'nk9-theme' ),
            'singular_name' => __( 'Service', 'nk9-theme' ),
            'add_new_item'  => __( 'Add New Service', 'nk9-theme' ),
            'edit_item'     => __( 'Edit Service', 'nk9-theme' ),
        ],
        'public'       => false,
        'show_ui'      => true,
        'show_in_menu' => true,
        'supports'     => [ 'title', 'thumbnail' ],
        'menu_icon'    => 'dashicons-clipboard',
        'rewrite'      => false,
    ] );
}
add_action( 'init', 'nk9_register_post_types' );

// ─────────────────────────────────────────────
// ACF JSON Save/Load Paths
// ─────────────────────────────────────────────
function nk9_acf_json_save_point( $path ) {
    return get_template_directory() . '/acf-json';
}
add_filter( 'acf/settings/save_json', 'nk9_acf_json_save_point' );

function nk9_acf_json_load_point( $paths ) {
    $paths[] = get_template_directory() . '/acf-json';
    return $paths;
}
add_filter( 'acf/settings/load_json', 'nk9_acf_json_load_point' );

// ─────────────────────────────────────────────
// Helper: Get ACF field with fallback
// ─────────────────────────────────────────────
function nk9_field( $key, $post_id = null, $fallback = '' ) {
    if ( function_exists( 'get_field' ) ) {
        $value = get_field( $key, $post_id );
        return $value ?: $fallback;
    }
    return $fallback;
}

// ─────────────────────────────────────────────
// Remove WordPress version from head
// ─────────────────────────────────────────────
remove_action( 'wp_head', 'wp_generator' );

// ─────────────────────────────────────────────
// Contact Form 7: disable auto-formatting
// ─────────────────────────────────────────────
add_filter( 'wpcf7_autop_or_not', '__return_false' );
