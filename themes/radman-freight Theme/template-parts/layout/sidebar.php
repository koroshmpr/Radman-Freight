<aside class="col-12 col-lg-3">
    <!--    services-->
    <div>
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
                $loop_services->the_post(); ?>
                <a class="d-flex btn-dark my-2 px-3 rounded-1 gap-2 align-items-center
                justify-content-between animate__animated animate__fadeInRight animate__delay-<?= $j;?>s"
                   href="<?php the_permalink(); ?>">
                    <img style="width: 35px; height: 35px" src="<?= get_field('services_image')['url']; ?>"
                         alt="<?= get_field('services_image')['title']; ?>">
                    <h5 class="fw-bold my-3"><?php the_title(); ?></h5>
                    <span class="fw-bold">></span>
                </a>
            <?php $j++;
            endwhile;
        endif;
        wp_reset_postdata(); ?>
    </div>
    <!--    banner-->
    <a href="tel:<?= get_field('tel','option');?>" class="my-4 rounded overflow-hidden d-flex flex-column justify-content-between align-items-center
    position-relative">
        <h6 class="p-3 text-center">برای دریافت مشاوره برای ارسال بار با ما در ارتباط باشید</h6>
        <? get_template_part('template-parts/svg/phone'); ?>
        <p class="pt-3 text-center">
            <span class="fw-bolder fs-4"><?= get_field('tel','option');?></span>
            <br>
            هر زمان با ما تماس بگیرید
        </p>
        <img class="position-absolute w-100 h-100 top-0 start-0 z--1 object-fit"
             src="<?= get_field('sidebar_image','option')['url'];?>"
             alt="<?= get_field('sidebar_image','option')['title'];?>">
    </a>
    <!--    latest post -->
    <div>
        <h5 class="fw-bolder text-dark">آخرین مقالات</h5>
        <p class="text-dark">پرطرفدارترین دسته های پند پلاس در یک نگاه</p>
        <?php
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => '3',
            'ignore_sticky_posts' => true
        );
        $loop = new WP_Query($args);
        if ($loop->have_posts()) : $i = 0;
            /* Start the Loop */
            while ($loop->have_posts()) :
                $loop->the_post();
                get_template_part('template-parts/post-card-flex');
            endwhile;
        endif;
        wp_reset_postdata(); ?>
    </div>
    <!--    socia media-->
    <div class="mt-3 text-center text-lg-start">
        <h5 class="fw-bolder text-dark pb-3">شبکه های اجتماعی</h5>
        <?php get_template_part('template-parts/social-media');?>
    </div>
</aside>