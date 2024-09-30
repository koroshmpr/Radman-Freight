<?php
get_header();
//top banner
get_template_part('template-parts/top-banner'); ?>
    <section class="container py-5 mb-5">
        <div class="row">
            <!--        content-->
            <div class="col-12 col-lg-9">
                <div class="d-flex align-items-center gap-3">
                    <img width="40" height="40" src="<?= get_field('services_image')['url']; ?>"
                         alt="<?= get_field('services_image')['title']; ?>">
                    <h2 class="fw-bold text-primary my-3"><?php the_title(); ?></h2>
                </div>
                <article>
                    <?php the_content(); ?>
                    <div class="my-2">
                        <h5 class="my-5">
                            ارسال نظر
                        </h5>
                        <?php
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                        ?>
                    </div>
                </article>
            </div>
            <!--        sidebar-->
            <?php get_template_part('template-parts/layout/sidebar'); ?>
        </div>

    </section>

<?php get_footer(); ?>