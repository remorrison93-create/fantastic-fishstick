<?php
/**
 * Single Trainer Profile Page
 * URL: /trainer/{slug}
 */
get_header();

while (have_posts()) : the_post();

$trainer_title   = get_field('trainer_title');
$bio             = get_field('trainer_bio');
$credentials     = get_field('trainer_credentials') ?: [];
$gallery         = get_field('trainer_gallery')     ?: [];
$dogs            = get_field('trainer_dogs')        ?: [];
$fun_facts       = get_field('trainer_fun_facts')   ?: [];
$hero_img        = get_the_post_thumbnail_url(get_the_ID(), 'large');

?>

<!-- Back link -->
<div class="bg-nk-dark border-b border-white/10">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-4">
        <a href="<?php echo esc_url(home_url('/trainers')); ?>"
           class="inline-flex items-center gap-2 font-body text-xs uppercase tracking-widest text-nk-white/40 hover:text-nk-accent transition-colors">
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            All Trainers
        </a>
    </div>
</div>

<!-- ============================================================ -->
<!-- HERO — Photo + Name + Title + Credentials                    -->
<!-- ============================================================ -->
<section class="bg-nk-dark py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <!-- Photo -->
            <div data-animate>
                <?php if ($hero_img) : ?>
                    <img src="<?php echo esc_url($hero_img); ?>"
                         alt="<?php echo esc_attr(get_the_title()); ?>"
                         class="w-full object-cover aspect-[4/5] grayscale">
                <?php else : ?>
                    <div class="w-full aspect-[4/5] bg-white/5 border border-white/10 flex items-center justify-center">
                        <span class="font-body text-xs uppercase tracking-widest text-nk-white/20">Photo</span>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Info -->
            <div>
                <?php if ($trainer_title) : ?>
                    <span class="section-label" data-animate><?php echo esc_html($trainer_title); ?></span>
                <?php endif; ?>

                <h1 class="font-display text-7xl lg:text-8xl text-nk-white leading-none mt-2 mb-8" data-animate>
                    <?php the_title(); ?>
                </h1>

                <?php if (!empty($credentials)) : ?>
                    <ul class="space-y-3 mb-10" data-animate>
                        <?php foreach ($credentials as $row) :
                            if (empty($row['credential_item'])) continue; ?>
                            <li class="flex items-center gap-3 font-body text-sm text-nk-white/60">
                                <span class="w-4 h-px bg-nk-accent flex-shrink-0"></span>
                                <?php echo esc_html($row['credential_item']); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <div data-animate>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-primary">
                        Apply to Train with <?php echo esc_html(strtok(get_the_title(), ' ')); ?>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ============================================================ -->
<!-- BIO                                                           -->
<!-- ============================================================ -->
<?php if ($bio) : ?>
<section class="bg-nk-warm py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

            <div class="lg:col-span-3">
                <span class="section-label-dark" data-animate>About</span>
                <h2 class="font-display text-5xl text-nk-dark mt-1 leading-tight" data-animate>
                    The Trainer
                </h2>
            </div>

            <div class="lg:col-span-9" data-animate>
                <?php
                $paragraphs = array_filter(array_map('trim', explode("\n", $bio)));
                foreach ($paragraphs as $p) : ?>
                    <p class="font-body text-nk-dark/70 leading-relaxed text-lg mb-5 last:mb-0">
                        <?php echo esc_html($p); ?>
                    </p>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>
<?php endif; ?>

<!-- ============================================================ -->
<!-- GALLERY                                                       -->
<!-- ============================================================ -->
<?php if (!empty($gallery)) : ?>
<section class="bg-nk-dark py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="mb-12" data-animate>
            <span class="section-label">Gallery</span>
            <h2 class="font-display text-5xl text-nk-white mt-1">In Action</h2>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3" data-stagger>
            <?php foreach ($gallery as $image) :
                $src   = $image['sizes']['large'] ?? $image['url'];
                $alt   = $image['alt'] ?: get_the_title() . ' training photo';
            ?>
                <div class="overflow-hidden aspect-square bg-white/5" data-animate-child>
                    <img src="<?php echo esc_url($src); ?>"
                         alt="<?php echo esc_attr($alt); ?>"
                         class="w-full h-full object-cover grayscale hover:grayscale-0 hover:scale-105 transition-all duration-500">
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
<?php endif; ?>

<!-- ============================================================ -->
<!-- DOGS                                                          -->
<!-- ============================================================ -->
<?php if (!empty($dogs)) : ?>
<section class="bg-nk-warm py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="mb-12" data-animate>
            <span class="section-label-dark">The Pack</span>
            <h2 class="font-display text-5xl text-nk-dark mt-1">My Dogs</h2>
        </div>

        <div class="flex flex-wrap gap-10" data-stagger>
            <?php foreach ($dogs as $dog) :
                $dog_name  = $dog['dog_name']  ?? '';
                $dog_breed = $dog['dog_breed'] ?? '';
                $dog_photo = $dog['dog_photo'] ?? null;
                $photo_src = $dog_photo['sizes']['medium'] ?? ($dog_photo['url'] ?? '');
            ?>
                <div class="flex flex-col items-center gap-4 text-center" data-animate-child>

                    <!-- Avatar -->
                    <div class="w-28 h-28 rounded-full overflow-hidden bg-nk-dark border-2 border-nk-accent flex-shrink-0">
                        <?php if ($photo_src) : ?>
                            <img src="<?php echo esc_url($photo_src); ?>"
                                 alt="<?php echo esc_attr($dog_name); ?>"
                                 class="w-full h-full object-cover">
                        <?php else : ?>
                            <div class="w-full h-full flex items-center justify-center">
                                <svg class="w-10 h-10 text-nk-white/20" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M4.5 11c0-.69.56-1.25 1.25-1.25S7 10.31 7 11s-.56 1.25-1.25 1.25S4.5 11.69 4.5 11zm9.25-1.25c-.69 0-1.25.56-1.25 1.25s.56 1.25 1.25 1.25S15 11.69 15 11s-.56-1.25-1.25-1.25zM22 9.5c0-1.1-.9-2-2-2h-.5C19 4.46 16.54 2 13.5 2c-1.5 0-2.86.58-3.87 1.53C8.71 2.55 7.39 2 6 2 3.24 2 1 4.24 1 7c0 1.1.45 2.1 1.17 2.82C2.06 10.23 2 10.61 2 11c0 2.76 2.24 5 5 5h1.1c.96 1.19 2.4 2 4.05 2 1.43 0 2.73-.57 3.7-1.49.28.03.57.04.87.04C19.75 16.54 22 14.24 22 11.5c0-.69-.13-1.35-.37-1.95.23-.3.37-.68.37-1.05z"/>
                                </svg>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Name + Breed -->
                    <div>
                        <p class="font-display text-2xl text-nk-dark leading-none">
                            <?php echo esc_html($dog_name); ?>
                        </p>
                        <?php if ($dog_breed) : ?>
                            <p class="font-body text-xs uppercase tracking-widest text-nk-dark/40 mt-1">
                                <?php echo esc_html($dog_breed); ?>
                            </p>
                        <?php endif; ?>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
<?php endif; ?>

<!-- ============================================================ -->
<!-- FUN FACTS                                                     -->
<!-- ============================================================ -->
<?php if (!empty($fun_facts)) : ?>
<section class="bg-nk-dark py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

            <div class="lg:col-span-3">
                <span class="section-label" data-animate>Get to Know Me</span>
                <h2 class="font-display text-5xl text-nk-white mt-1 leading-tight" data-animate>
                    Fun Facts
                </h2>
            </div>

            <div class="lg:col-span-9">
                <ul class="space-y-0" data-stagger>
                    <?php foreach ($fun_facts as $i => $row) :
                        if (empty($row['fun_fact_text'])) continue;
                        $num = str_pad($i + 1, 2, '0', STR_PAD_LEFT);
                    ?>
                        <li class="flex items-start gap-6 py-6 border-b border-white/10 last:border-0" data-animate-child>
                            <span class="font-display text-3xl text-nk-accent/40 leading-none flex-shrink-0 w-8">
                                <?php echo esc_html($num); ?>
                            </span>
                            <p class="font-body text-nk-white/70 leading-relaxed">
                                <?php echo esc_html($row['fun_fact_text']); ?>
                            </p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
    </div>
</section>
<?php endif; ?>

<!-- ============================================================ -->
<!-- FINAL CTA                                                     -->
<!-- ============================================================ -->
<?php get_template_part('template-parts/sections/final-cta'); ?>

<?php endwhile; ?>

<?php get_footer(); ?>
