<?php
/**
 * NK9 Theme — functions.php
 */

if (!defined('ABSPATH')) exit;

// ============================================================
// THEME SETUP
// ============================================================
function nk9_setup(): void {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', [
        'search-form', 'comment-form', 'comment-list',
        'gallery', 'caption', 'style', 'script',
    ]);

    register_nav_menus([
        'primary' => __('Primary Navigation', 'nk9-theme'),
        'footer'  => __('Footer Navigation', 'nk9-theme'),
    ]);
}
add_action('after_setup_theme', 'nk9_setup');

// ============================================================
// ENQUEUE ASSETS
// ============================================================
function nk9_enqueue_assets(): void {
    // Google Fonts
    wp_enqueue_style(
        'nk9-google-fonts',
        'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@400;500;600;700&display=swap',
        [],
        null
    );

    // Compiled Tailwind CSS
    wp_enqueue_style(
        'nk9-style',
        get_template_directory_uri() . '/assets/css/style.css',
        ['nk9-google-fonts'],
        '1.0.0'
    );

    // Alpine.js (deferred via filter below)
    wp_enqueue_script(
        'alpinejs',
        'https://unpkg.com/alpinejs@3.13.3/dist/cdn.min.js',
        [],
        '3.13.3',
        true
    );

    // Main JS
    wp_enqueue_script(
        'nk9-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'nk9_enqueue_assets');

// Defer Alpine.js
add_filter('script_loader_tag', function (string $tag, string $handle): string {
    if ($handle === 'alpinejs') {
        return str_replace(' src=', ' defer src=', $tag);
    }
    return $tag;
}, 10, 2);

// ============================================================
// CUSTOM POST TYPES
// ============================================================
function nk9_register_post_types(): void {
    // Trainers
    register_post_type('trainer', [
        'labels' => [
            'name'          => 'Trainers',
            'singular_name' => 'Trainer',
            'add_new_item'  => 'Add New Trainer',
            'edit_item'     => 'Edit Trainer',
            'all_items'     => 'All Trainers',
        ],
        'public'       => false,
        'show_ui'      => true,
        'show_in_menu' => true,
        'supports'     => ['title', 'thumbnail'],
        'menu_icon'    => 'dashicons-groups',
        'rewrite'      => false,
        'menu_position' => 20,
    ]);

    // Testimonials
    register_post_type('testimonial', [
        'labels' => [
            'name'          => 'Testimonials',
            'singular_name' => 'Testimonial',
            'add_new_item'  => 'Add New Testimonial',
            'edit_item'     => 'Edit Testimonial',
            'all_items'     => 'All Testimonials',
        ],
        'public'       => false,
        'show_ui'      => true,
        'show_in_menu' => true,
        'supports'     => ['title'],
        'menu_icon'    => 'dashicons-format-quote',
        'rewrite'      => false,
        'menu_position' => 21,
    ]);

    // Services
    register_post_type('service', [
        'labels' => [
            'name'          => 'Services',
            'singular_name' => 'Service',
            'add_new_item'  => 'Add New Service',
            'edit_item'     => 'Edit Service',
            'all_items'     => 'All Services',
        ],
        'public'       => false,
        'show_ui'      => true,
        'show_in_menu' => true,
        'supports'     => ['title', 'thumbnail'],
        'menu_icon'    => 'dashicons-clipboard',
        'rewrite'      => false,
        'menu_position' => 22,
    ]);
}
add_action('init', 'nk9_register_post_types');

// ============================================================
// ACF JSON — SAVE & LOAD PATH
// ============================================================
add_filter('acf/settings/save_json', function (): string {
    return get_template_directory() . '/acf-json';
});

add_filter('acf/settings/load_json', function (array $paths): array {
    $paths[] = get_template_directory() . '/acf-json';
    return $paths;
});

// ============================================================
// BODY OPEN HOOK SUPPORT
// ============================================================
if (!function_exists('wp_body_open')) {
    function wp_body_open(): void {
        do_action('wp_body_open');
    }
}
