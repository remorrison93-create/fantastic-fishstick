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

// ============================================================
// SCHEMA MARKUP — STRUCTURED DATA
// ============================================================
function nk9_output_schema(): void {

    // LocalBusiness schema — outputs on every page
    $local_business = [
        '@context'        => 'https://schema.org',
        '@type'           => 'LocalBusiness',
        'name'            => 'Nitro K9',
        'alternateName'   => 'NK9',
        'description'     => 'Professional dog training in the Dallas–Fort Worth area. Specializing in private lessons, board & train, and in-home behavior modification.',
        'url'             => home_url('/'),
        'telephone'       => '+10000000000',
        'email'           => 'info@nitrok9.com',
        'priceRange'      => '$$',
        'address'         => [
            '@type'           => 'PostalAddress',
            'addressLocality' => 'Dallas',
            'addressRegion'   => 'TX',
            'addressCountry'  => 'US',
        ],
        'areaServed'      => [
            ['@type' => 'City', 'name' => 'Dallas'],
            ['@type' => 'City', 'name' => 'Plano'],
            ['@type' => 'City', 'name' => 'Frisco'],
            ['@type' => 'City', 'name' => 'McKinney'],
            ['@type' => 'City', 'name' => 'Allen'],
        ],
        'sameAs'          => [
            'https://www.instagram.com/nitrok9',
            'https://www.facebook.com/nitrok9',
        ],
        'hasOfferCatalog' => [
            '@type' => 'OfferCatalog',
            'name'  => 'Dog Training Services',
            'itemListElement' => [
                [
                    '@type'       => 'Offer',
                    'itemOffered' => [
                        '@type'       => 'Service',
                        'name'        => 'Private Dog Training Lessons',
                        'description' => 'One-on-one sessions focused on your specific issues. You and your dog learn together.',
                    ],
                ],
                [
                    '@type'       => 'Offer',
                    'itemOffered' => [
                        '@type'       => 'Service',
                        'name'        => 'Board and Train Program',
                        'description' => 'Your dog lives and trains with us for 2–4 weeks. Maximum results, minimum disruption to your schedule.',
                    ],
                ],
                [
                    '@type'       => 'Offer',
                    'itemOffered' => [
                        '@type'       => 'Service',
                        'name'        => 'In-Home Dog Training',
                        'description' => 'We come to you and address behavior problems in the exact environment where they happen.',
                    ],
                ],
            ],
        ],
    ];

    echo '<script type="application/ld+json">' . wp_json_encode($local_business, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";

    // Services page — additional Service schema
    if (is_page('services')) {
        $services_schema = [
            '@context' => 'https://schema.org',
            '@type'    => 'ItemList',
            'name'     => 'NK9 Dog Training Services',
            'itemListElement' => [
                [
                    '@type'    => 'ListItem',
                    'position' => 1,
                    'item'     => [
                        '@type'       => 'Service',
                        'name'        => 'Private Dog Training Lessons',
                        'provider'    => ['@type' => 'LocalBusiness', 'name' => 'Nitro K9'],
                        'description' => 'One-on-one sessions focused on your specific issues. Leash manners, recall, impulse control, reactivity. Owner education included.',
                        'areaServed'  => 'Dallas–Fort Worth, TX',
                    ],
                ],
                [
                    '@type'    => 'ListItem',
                    'position' => 2,
                    'item'     => [
                        '@type'       => 'Service',
                        'name'        => 'Board and Train Dog Program',
                        'provider'    => ['@type' => 'LocalBusiness', 'name' => 'Nitro K9'],
                        'description' => '2–4 week residential training program. Daily structured sessions, real-world exposure, daily updates, and owner transfer session.',
                        'areaServed'  => 'Dallas–Fort Worth, TX',
                    ],
                ],
                [
                    '@type'    => 'ListItem',
                    'position' => 3,
                    'item'     => [
                        '@type'       => 'Service',
                        'name'        => 'In-Home Dog Training',
                        'provider'    => ['@type' => 'LocalBusiness', 'name' => 'Nitro K9'],
                        'description' => 'Sessions in your home targeting jumping, resource guarding, territorial aggression, and door bolting.',
                        'areaServed'  => 'Dallas–Fort Worth, TX',
                    ],
                ],
            ],
        ];

        echo '<script type="application/ld+json">' . wp_json_encode($services_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
    }

    // Trainers page — Person schema for Steve
    if (is_page('trainers')) {
        $trainer_schema = [
            '@context'  => 'https://schema.org',
            '@type'     => 'Person',
            'name'      => 'Steve Walter',
            'jobTitle'  => 'Founder & Lead Trainer',
            'worksFor'  => ['@type' => 'LocalBusiness', 'name' => 'Nitro K9'],
            'url'       => home_url('/trainers'),
            'knowsAbout' => [
                'Dog Training',
                'Balanced Training',
                'Board and Train',
                'Aggression Rehabilitation',
                'Obedience Training',
            ],
        ];

        echo '<script type="application/ld+json">' . wp_json_encode($trainer_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
    }

    // Contact page — FAQPage schema
    if (is_page('contact')) {
        $faq_schema = [
            '@context'   => 'https://schema.org',
            '@type'      => 'FAQPage',
            'mainEntity' => [
                [
                    '@type'          => 'Question',
                    'name'           => 'How do I get started with NK9 dog training?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Fill out our application form. We review every application personally and respond within 24 hours with next steps.',
                    ],
                ],
                [
                    '@type'          => 'Question',
                    'name'           => 'What dog training programs does NK9 offer?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'NK9 offers Private Lessons, Board & Train (2–4 week residential program), and In-Home Visits for behavior issues in your home environment.',
                    ],
                ],
                [
                    '@type'          => 'Question',
                    'name'           => 'What areas does NK9 serve?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'NK9 serves the Dallas–Fort Worth area including Dallas, Plano, Frisco, McKinney, and Allen, TX.',
                    ],
                ],
                [
                    '@type'          => 'Question',
                    'name'           => 'What is balanced dog training?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Balanced training uses both positive reinforcement and appropriate corrections to clearly communicate expectations to your dog. It is the same method used by professional working dog programs worldwide.',
                    ],
                ],
            ],
        ];

        echo '<script type="application/ld+json">' . wp_json_encode($faq_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
    }
}
add_action('wp_head', 'nk9_output_schema');
