<?php
$title       = $args['title']       ?? '';
$description = $args['description'] ?? '';
$href        = $args['href']        ?? home_url('/services');
$cta_label   = $args['cta_label']   ?? 'Learn More';
?>
<div class="group bg-white/5 border border-white/10 border-t-2 border-t-nk-accent p-8 flex flex-col gap-6 hover:bg-white/8 transition-all duration-300" data-animate-child>

    <h3 class="font-display text-4xl text-nk-white group-hover:text-nk-accent transition-colors duration-200">
        <?php echo esc_html($title); ?>
    </h3>

    <p class="font-body text-sm text-nk-white/65 leading-relaxed flex-1">
        <?php echo esc_html($description); ?>
    </p>

    <a href="<?php echo esc_url($href); ?>"
       class="font-body text-xs font-semibold uppercase tracking-widest text-nk-accent hover:text-nk-white transition-colors duration-200 flex items-center gap-2 self-start">
        <?php echo esc_html($cta_label); ?>
        <span aria-hidden="true">&rarr;</span>
    </a>

</div>
