<?php
/**
 * Component: Testimonial Card
 *
 * Expected $args:
 *   quote    string  The testimonial text
 *   name     string  Client name
 *   location string  City, State
 *   result   string  Result badge text (e.g. "Off-leash reliability in 3 weeks")
 */
$quote    = $args['quote']    ?? '';
$name     = $args['name']     ?? '';
$location = $args['location'] ?? '';
$result   = $args['result']   ?? '';
?>
<blockquote class="bg-white/5 border border-white/10 p-8 flex flex-col gap-6 reveal" data-stagger-child>

    <!-- Quote mark -->
    <svg class="w-8 h-8 text-nk-accent/40 shrink-0" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
        <path d="M10 8C5.6 8 2 11.6 2 16s3.6 8 8 8h1v4l6-4h.5C22.4 24 26 20.4 26 16V8H10zm14 8c0 2.8-2.2 5-5 5h-1l-4 2.7V21h-4c-2.8 0-5-2.2-5-5V10h19v6z"/>
    </svg>

    <p class="font-body text-sm text-nk-warm/80 leading-relaxed italic flex-grow">
        &ldquo;<?php echo esc_html( $quote ); ?>&rdquo;
    </p>

    <footer class="flex flex-col gap-2">
        <cite class="not-italic font-body text-sm font-semibold text-nk-white">
            <?php echo esc_html( $name ); ?>
            <?php if ( $location ) : ?>
                <span class="font-normal text-nk-white/40"> &mdash; <?php echo esc_html( $location ); ?></span>
            <?php endif; ?>
        </cite>

        <?php if ( $result ) : ?>
        <span class="inline-flex items-center gap-1.5 font-body text-xs font-semibold uppercase tracking-wider text-nk-accent">
            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
            </svg>
            <?php echo esc_html( $result ); ?>
        </span>
        <?php endif; ?>
    </footer>

</blockquote>
