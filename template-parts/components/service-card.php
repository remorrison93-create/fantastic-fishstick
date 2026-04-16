<?php
/**
 * Component: Service Card
 *
 * Expected $args:
 *   title       string  Service name
 *   description string  Short description
 *   link        string  URL to service detail
 *   link_label  string  CTA label (default: "Learn More")
 *   icon        string  Optional SVG icon markup
 */
$title       = $args['title']       ?? '';
$description = $args['description'] ?? '';
$link        = $args['link']        ?? '#';
$link_label  = $args['link_label']  ?? 'Learn More';
$icon        = $args['icon']        ?? '';
?>
<article class="group relative bg-nk-dark border border-white/10 p-8 flex flex-col transition-all duration-300 hover:-translate-y-1 hover:border-nk-accent/50 hover:shadow-[0_0_40px_rgba(241,89,42,0.08)] reveal" data-stagger-child>
    <!-- Accent top border -->
    <div class="absolute top-0 left-0 right-0 h-0.5 bg-nk-accent scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>

    <?php if ( $icon ) : ?>
    <div class="text-nk-accent mb-6 w-10 h-10">
        <?php echo $icon; // Already sanitized before passing ?>
    </div>
    <?php endif; ?>

    <h3 class="font-display text-2xl lg:text-3xl tracking-widest text-nk-white mb-4">
        <?php echo esc_html( $title ); ?>
    </h3>

    <p class="font-body text-sm text-nk-white/60 leading-relaxed flex-grow mb-8">
        <?php echo esc_html( $description ); ?>
    </p>

    <a
        href="<?php echo esc_url( $link ); ?>"
        class="inline-flex items-center gap-2 font-body text-xs font-semibold uppercase tracking-wider text-nk-accent hover:text-nk-white transition-colors duration-200 group/link"
    >
        <?php echo esc_html( $link_label ); ?>
        <svg class="w-4 h-4 translate-x-0 group-hover/link:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
    </a>
</article>
