<?php
/**
 * Component: Trainer Card
 *
 * Expected $args:
 *   name         string    Trainer full name
 *   title        string    Job title
 *   bio          string    Bio paragraph
 *   credentials  array     List of credential strings
 *   image_url    string    URL to trainer photo
 *   image_alt    string    Alt text for photo
 */
$name        = $args['name']        ?? '';
$title       = $args['title']       ?? '';
$bio         = $args['bio']         ?? '';
$credentials = $args['credentials'] ?? [];
$image_url   = $args['image_url']   ?? '';
$image_alt   = $args['image_alt']   ?? esc_attr( $name );
?>
<article class="grid grid-cols-1 lg:grid-cols-2 gap-0 reveal">

    <!-- Photo -->
    <div class="relative bg-nk-dark/50 overflow-hidden min-h-80 lg:min-h-0">
        <?php if ( $image_url ) : ?>
        <img
            src="<?php echo esc_url( $image_url ); ?>"
            alt="<?php echo esc_attr( $image_alt ); ?>"
            class="w-full h-full object-cover object-top"
            loading="lazy"
        >
        <?php else : ?>
        <!-- Placeholder when no photo uploaded -->
        <div class="absolute inset-0 flex items-center justify-center bg-nk-dark border border-white/10">
            <svg class="w-20 h-20 text-white/10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/>
            </svg>
        </div>
        <?php endif; ?>

        <!-- Accent overlay strip -->
        <div class="absolute bottom-0 left-0 right-0 h-1 bg-nk-accent"></div>
    </div>

    <!-- Content -->
    <div class="bg-nk-dark border border-white/10 border-l-0 p-8 lg:p-12 flex flex-col justify-center">

        <div class="mb-6">
            <p class="section-label"><?php echo esc_html( $title ); ?></p>
            <h2 class="font-display text-h2 tracking-widest text-nk-white">
                <?php echo esc_html( $name ); ?>
            </h2>
        </div>

        <p class="font-body text-sm text-nk-white/60 leading-relaxed mb-8">
            <?php echo nl2br( esc_html( $bio ) ); ?>
        </p>

        <?php if ( ! empty( $credentials ) ) : ?>
        <ul class="space-y-2">
            <?php foreach ( $credentials as $credential ) : ?>
            <li class="flex items-center gap-3 font-body text-sm text-nk-white/80">
                <span class="w-1 h-1 rounded-full bg-nk-accent shrink-0"></span>
                <?php echo esc_html( $credential ); ?>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>

    </div>
</article>
