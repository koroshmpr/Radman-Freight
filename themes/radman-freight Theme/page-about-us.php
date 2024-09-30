<?php
get_header();
//top banner
get_template_part('template-parts/top-banner'); ?>

<section class="container bg-info margin-top rounded-section z-4 pb-5">
    <!--    about us part-->
    <div class="row align-items-center justify-content-center">
<!--        contenct-->
        <div class="col-12 col-lg-6 ps-lg-5">
            <h2><?= get_field('title');?></h2>
            <p><?= get_field('content');?></p>
            <a class="btn-primary rounded" href="<?php echo site_url('/services'); ?>">مشاهده سرویس</a>
        </div>
<!--        image-->
        <div class="col-12 col-lg-5">
            <img class="ratio ratio-1x1 rounded pt-5 pt-lg-0" src="<?= get_field('image')['url']; ?>" alt="">
        </div>
    </div>
    <!--    Statistics-->
    <div class="row justify-content-center text-center py-5">
        <div class="col-12 col-lg-7">
            <h4 class="fw-bolder"><?= get_field('title_statistics');?></h4>
            <p><?= get_field('content_statistics');?></p>
            <div class="row row-cols-2 row-cols-lg-4  justify-content-center text-center py-5">
                <?php
                $j = 0 ;
                while (have_rows('statistics_list')): the_row();;
                    ?>
                    <div class="animate__animated animate__fadeInUp animate__delay-<?= $j;?>s">
                        <h5 class="fw-bolder fs-4"><?= get_sub_field('list_statistics_value');?></h5>
                        <p><?= get_sub_field('list_statistics_title');?></p>
                    </div>
                <?php
                    $j++;
                endwhile; ?>
            </div>
        </div>
    </div>
    <!--    services-->
    <div class="row justify-content-center">
        <div class="col-12 col-lg-6 text-center">
            <h4 class="fw-bolder"><?= get_field('title_services');?></h4>
            <p><?= get_field('content_services');?></p>
        </div>

        <div class="row row-cols-1 row-cols-lg-3 justify-content-between px-lg-5 z-5">
            <?php
            $args = array(
                'post_type' => 'services',
                'post_status' => 'publish',
                'posts_per_page' => '3',
                'ignore_sticky_posts' => true
            );
            $loop = new WP_Query($args);
            if ($loop->have_posts()) : $i = 0;
                /* Start the Loop */
                while ($loop->have_posts()) :
                    $loop->the_post();
                    get_template_part('template-parts/services-card');
                endwhile;
            endif;
            wp_reset_postdata(); ?>
        </div>
</section>
<?php
//testimony
get_template_part('template-parts/home-page/testimony');
//cta
get_template_part('template-parts/home-page/contact');
//cta
get_template_part('template-parts/home-page/map');

get_footer(); ?>
