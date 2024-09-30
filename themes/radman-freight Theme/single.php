<?php
get_header();
//top banner
get_template_part('template-parts/top-banner'); ?>
    <section class="container py-5 mb-5">
        <div class="row">
            <!--        content-->
            <article class="col-12 col-lg-9 pt-5 pe-lg-5 text-justify">
                <h2 class="py-3"> <?= the_title(); ?></h2>
                <?= the_content(); ?>
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

            <!--        sidebar-->
            <?php get_template_part('template-parts/layout/sidebar'); ?>
        </div>

    </section>

<?php get_footer(); ?>