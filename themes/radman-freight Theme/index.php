<?php
/** Template Name: Blog Page */

get_header();
//top banner
get_template_part('template-parts/top-banner');
?>

    <section class="container my-5">
        <div class="row row-cols-1 row-cols-lg-3 justify-content-between px-lg-5 z-5 pb-5">
            <?php
            $args = array(
                'post_type' => 'post',
                'order' => 'ASC',
                'orderby' => 'date',
                'post_status' => 'publish',
                'posts_per_page' => '-1',
                'ignore_sticky_posts' => true
            );
            $loop = new WP_Query($args);
            if ($loop->have_posts()) : $i = 0;
                /* Start the Loop */
                while ($loop->have_posts()) :
                    $loop->the_post();
                    get_template_part('template-parts/post-card');
                endwhile;
            endif;
            wp_reset_postdata(); ?>

        </div>
        <?php
        $links = paginate_links(array(
            'type' => 'array',
            'prev_next' => false,

        ));
        if ($links) : ?>
        <nav aria-label="age navigation example">
            <?php echo '<ul class="pagination justify-content-center align-items-center">';
            // get_previous_posts_link will return a string or void if no link is set.
            if ($prev_posts_link = get_previous_posts_link(__('قبلی'))) :
                echo '<li class="prev-list-item bg-danger py-2 px-3 rounded text-white page-item me-4">';
                echo $prev_posts_link;
                echo '</li>';
            endif;
            echo '<li class="page-item me-4">';
            echo join('</li><li class="page-item me-4">', $links);
            echo '</li>';

            // get_next_posts_link will return a string or void if no link is set.
            if ($next_posts_link = get_next_posts_link(__('بعدی'))) :
                echo '<li class=" next-list-item bg-danger px-3 py-2 rounded text-white page-item me-4">';
                echo $next_posts_link;
                echo '</li>';
            endif;
            echo '</ul>';
            ?>
        </nav>

        <?php
        endif;
        wp_reset_postdata();
        ?>
    </section>
<?php get_footer(); ?>