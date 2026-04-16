<?php
$quote    = $args['quote']    ?? '';
$name     = $args['name']     ?? '';
$location = $args['location'] ?? '';
$result   = $args['result']   ?? '';
?>
<div class="bg-nk-dark p-8 flex flex-col gap-6" data-animate-child>

    <!-- Quote icon -->
    <svg class="w-7 h-7 text-nk-accent opacity-70 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
    </svg>

    <!-- Quote text -->
    <p class="font-body text-nk-warm/90 leading-relaxed italic flex-1 text-sm">
        &ldquo;<?php echo esc_html($quote); ?>&rdquo;
    </p>

    <!-- Attribution -->
    <div class="border-t border-white/10 pt-5">
        <div class="flex items-start justify-between gap-4 flex-wrap">
            <div>
                <p class="font-body font-semibold text-nk-white text-sm"><?php echo esc_html($name); ?></p>
                <p class="font-body text-xs text-nk-white/40 mt-0.5"><?php echo esc_html($location); ?></p>
            </div>
            <?php if (!empty($result)) : ?>
                <span class="inline-block bg-nk-accent text-white font-body font-semibold text-xs uppercase tracking-wider px-3 py-1 flex-shrink-0">
                    <?php echo esc_html($result); ?>
                </span>
            <?php endif; ?>
        </div>
    </div>

</div>
