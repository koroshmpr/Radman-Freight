<section class="position-relative bg-info container z-2 margin-top rounded-section-bottom shadow-sm" >
    <div class="d-flex justify-content-between align-items-center px-lg-5">
        <div>
            <p>اخبار</p>
            <h4 class="text-primary fw-bolder">تاره ترین ها</h4>
        </div>
        <a class="btn btn-primary" href="<?php echo site_url('/news'); ?>">همه اخبار</a>
    </div>
    <div class="row row-cols-1 row-cols-lg-3 justify-content-between px-lg-5 overflow-hidden">
        <?php
        $j = 0;
        $args = array(
            'post_type' => 'news',
            'order' => 'ASC',
            'orderby' => 'date',
            'post_status' => 'publish',
            'posts_per_page' => '3',
            'ignore_sticky_posts' => true
        );
        $loop = new WP_Query($args);
        if ($loop->have_posts()) : $i = 0;
            /* Start the Loop */
            while ($loop->have_posts()) :
                $loop->the_post();
                get_template_part('template-parts/post-card');
                $j++;
            endwhile;
        endif;
        wp_reset_postdata(); ?>

    </div>

</section>