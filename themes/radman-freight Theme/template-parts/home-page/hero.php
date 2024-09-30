<section class="z-9 py-5 container vh-110 heroSlider shadow-sm rounded-section-bottom position-relative
overflow-hidden">
    <!--    svg-->
    <span class="position-absolute top-50 start-0 translate-middle animate__animated animate__fadeInLeft
    animate__delay-1s">
        <?php get_template_part('template-parts/svg/circle-top'); ?>
    </span>
    <span class="position-absolute top-100 start-100 translate-middle animate__animated animate__fadeInRight
    animate__delay-1s">
        <?php get_template_part('template-parts/svg/circle-bot'); ?>
    </span>
    <!--    slider -->
    <div class="swiper hero-slide h-100 overflow-hidden">
        <div class="swiper-button-prev swiper-button-prev-unique text-primary"></div>
        <div class="swiper-button-next swiper-button-next-unique text-primary"></div>
        <div class="swiper-wrapper">
            <?php
            while (have_rows('slider_hero')): the_row(); ?>
                <!--            content slide-->
                <div data-color="<?php the_sub_field('slider_color'); ?>"
                     class="swiper-slide row align-items-center mx-0 h-100 ps-lg-5 justify-content-center
                     justify-content-lg-evenly mt-4 overflow-hidden">
                    <div class="col-lg-5 col-10 animate__animated animate__fadeInLeft px-lg-0">
                        <h4 style="color:<?php the_sub_field('slider_text_color'); ?>">
                            <?php the_sub_field('slider_small_title'); ?></h4>
                        <h1 style="color:<?php the_sub_field('slider_text_color'); ?>"
                            class="py-4 fw-bolder">
                            <?php the_sub_field('slider_big_title'); ?></h1>
                        <p class="text-justify" style="color:<?php the_sub_field('slider_text_color'); ?>">
                            <?php the_sub_field('slider_content'); ?></p>
                        <a href="<?php the_sub_field('slider_btn_link'); ?>"
                           class="btn fw-bold btn-primary">
                            <?php the_sub_field('slider_btn_title'); ?>
                        </a>
                    </div>
                    <!--                    image slide-->
                    <div class="col-lg-5 col-10 d-flex justify-content-center align-items-center h-100 pt-3 p-0">
                        <div class="position-relative w-100 h-100 sea">
                            <div class="position-absolute top-0 start-0 w-100 h-100 animate__animated animate__fadeInRight animate__delay-1s overflow-hidden rounded-section image-back">
                                <div class="img-slide w-100"
                                     style="background: url('<?= get_sub_field('slider_background')['url']; ?>')"
                                ></div>
                            </div>

                            <span class="z-1 ship position-absolute animate__animated animate__slideInUp animate__delay-2s">
                                <img class="animate__item"
                                     src="<?= get_sub_field('slider_item')['url']; ?>"
                                     alt="<?= get_sub_field('slider_background')['title']; ?>">
                            </span>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>