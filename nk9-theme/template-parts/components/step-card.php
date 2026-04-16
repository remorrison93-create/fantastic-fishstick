<?php
$number      = $args['number']      ?? '01';
$title       = $args['title']       ?? '';
$description = $args['description'] ?? '';
?>
<div class="relative" data-animate-child>

    <!-- Number -->
    <div class="font-display text-8xl text-nk-accent/20 leading-none mb-4 select-none" aria-hidden="true">
        <?php echo esc_html($number); ?>
    </div>

    <!-- Divider -->
    <div class="w-8 h-0.5 bg-nk-accent mb-5"></div>

    <!-- Title -->
    <h3 class="font-display text-3xl text-nk-dark mb-3">
        <?php echo esc_html($title); ?>
    </h3>

    <!-- Description -->
    <p class="font-body text-sm text-nk-dark/65 leading-relaxed">
        <?php echo esc_html($description); ?>
    </p>

</div>
