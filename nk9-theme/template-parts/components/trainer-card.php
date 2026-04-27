<?php
$name        = $args['name']        ?? '';
$title       = $args['title']       ?? '';
$bio         = $args['bio']         ?? '';
$credentials = $args['credentials'] ?? [];
$image_url   = $args['image_url']   ?? '';
$profile_url = $args['profile_url'] ?? '';
?>
<div class="group flex flex-col" data-animate-child>

    <!-- Photo — links to profile if available -->
    <div class="aspect-[3/4] overflow-hidden mb-6 bg-white/5">
        <?php if ($image_url) : ?>
            <?php if ($profile_url) : ?>
                <a href="<?php echo esc_url($profile_url); ?>">
            <?php endif; ?>
                <img src="<?php echo esc_url($image_url); ?>"
                     alt="<?php echo esc_attr($name); ?>"
                     class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500">
            <?php if ($profile_url) : ?>
                </a>
            <?php endif; ?>
        <?php else : ?>
            <div class="w-full h-full bg-white/5 border border-white/10 flex items-center justify-center">
                <span class="font-body text-xs uppercase tracking-widest text-nk-white/20">Photo</span>
            </div>
        <?php endif; ?>
    </div>

    <!-- Info -->
    <div class="flex flex-col flex-1">
        <h3 class="font-display text-4xl text-nk-white mb-1"><?php echo esc_html($name); ?></h3>
        <p class="font-body text-xs uppercase tracking-widest text-nk-accent mb-5"><?php echo esc_html($title); ?></p>

        <p class="font-body text-sm text-nk-white/65 leading-relaxed mb-6 flex-1">
            <?php echo nl2br(esc_html($bio)); ?>
        </p>

        <?php if (!empty($credentials)) : ?>
            <ul class="space-y-2 mb-6">
                <?php foreach ($credentials as $credential) : ?>
                    <li class="flex items-center gap-3 font-body text-xs text-nk-white/50">
                        <span class="w-3 h-px bg-nk-accent flex-shrink-0"></span>
                        <?php echo esc_html($credential); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <!-- View Profile link -->
        <?php if ($profile_url) : ?>
            <a href="<?php echo esc_url($profile_url); ?>"
               class="inline-flex items-center gap-2 font-body text-xs font-semibold uppercase tracking-widest text-nk-accent hover:text-nk-white transition-colors mt-auto self-start">
                View Profile
                <span aria-hidden="true">&rarr;</span>
            </a>
        <?php endif; ?>
    </div>

</div>
