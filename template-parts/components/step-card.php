<?php
/**
 * Component: Step Card (How It Works)
 *
 * Expected $args:
 *   number       int     Step number (1, 2, 3, 4)
 *   title        string  Step name
 *   description  string  Step description
 */
$number      = $args['number']      ?? 1;
$title       = $args['title']       ?? '';
$description = $args['description'] ?? '';
?>
<div class="flex flex-col items-start reveal" data-stagger-child>

    <!-- Step number -->
    <div class="flex items-center gap-4 mb-4">
        <span class="font-display text-6xl leading-none text-nk-accent/20 select-none">
            <?php echo str_pad( intval( $number ), 2, '0', STR_PAD_LEFT ); ?>
        </span>
        <div class="flex-1 h-px bg-nk-dark/20"></div>
    </div>

    <h3 class="font-display text-2xl tracking-widest text-nk-dark mb-3">
        <?php echo esc_html( $title ); ?>
    </h3>

    <p class="font-body text-sm text-nk-dark/60 leading-relaxed">
        <?php echo esc_html( $description ); ?>
    </p>

</div>
