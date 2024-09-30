<section class="container z-8 bg-info rounded-section-bottom margin-top shadow-sm pb-3">
    <div class="row row-cols-1 row-cols-lg-5 px-5">
        <?php
        $j = 0;
        $services = array(
            'post_type' => 'services',
            'post_status' => 'publish',
            'posts_per_page' => '5',
            'ignore_sticky_posts' => true
        );
        $loop_services = new WP_Query($services);
        if ($loop_services->have_posts()) : $i = 0;
            /* Start the Loop */
            while ($loop_services->have_posts()) :
                $loop_services->the_post();?>
                <a class="animate__animated animate__fadeInDown animate__delay-<?= $j; ?>s"
                   href="<?php the_permalink(); ?>">
                    <img width="45" height="40" src="<?= get_field('services_image')['url']; ?>"
                         alt="<?= get_field('services_image')['title']; ?>">
                    <h5 class="fw-bold text-primary my-3"><?php the_title(); ?></h5>
                    <p class="text-primary p-0"><?= wp_trim_words(get_the_content(), 9); ?></p>
                </a>
            <?php
                $j++;
            endwhile;
        endif;
        wp_reset_postdata(); ?>

    </div>
</section>
