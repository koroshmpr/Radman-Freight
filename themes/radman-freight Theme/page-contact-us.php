<?php
get_header();
//top banner
get_template_part('template-parts/top-banner'); ?>

<section class="container bg-info margin-top z-3 rounded-section pb-5">
    <div class="row py-5 justify-content-between px-lg-5">
        <div class="col-12 col-lg-6  justify-content-start">
            <h2><?= get_field('contact_title'); ?></h2>
            <p><?= get_field('contact_content'); ?></p>
            <?php get_template_part('template-parts/social-media'); ?>
        </div>
        <div class="col-12 col-lg-5 d-flex flex-wrap justify-content-between mt-3 mt-lg-0">
            <div class="col me-1 bg-white p-1 rounded-1 d-flex align-items-center">
                <img class="col-4" src="/wp-content/uploads/2022/12/Frame-48096225.png" alt="email">
                <div class="col-8">
                    <h5>ایمیل</h5>
                    <a href="mailto:<?= get_field('email','option'); ?>" class="m-0 text-dark">
                        <?= get_field('email','option'); ?></a>
                </div>
            </div>
            <div class="col ms-1 bg-white p-1 rounded-1 d-flex align-items-center">
                <img class="col-4" src="/wp-content/uploads/2022/12/Frame-48096225.png" alt="tel">
                <div>
                    <h5>تلفن</h5>
                    <a href="tel:<?= get_field('tel','option'); ?>" class="m-0 text-dark">
                        <?= get_field('tel','option'); ?>
                    </a>
                </div>
            </div>
            <div class="col-12  my-2 bg-white p-1 rounded-1 d-flex align-items-center">
                <img class="col-2" src="/wp-content/uploads/2022/12/Frame-48096225.png" alt="address">
                <div>
                    <h5>آدرس</h5>
                    <p class="m-0"><?= get_field('address','option'); ?> </p>
                </div>
            </div>
        </div>
    </div>
    <!--    form and contact form-->
    <div class="row justify-content-between px-lg-5 align-items-center pb-3">
        <div class="col-12 col-lg-6">
            <h5 class="fw-bolder"><?= get_field('form_title'); ?></h5>
            <p><?= get_field('form_content'); ?></p>
            <?= do_shortcode( '[gravityform id="2" title="false" description="false" ajax="true"]' ); ?>
        </div>
        <div class="col-12 col-lg-6">
            <?php
            $google_map_iframe = get_field('google_map_iframe', 'option');
            if ($google_map_iframe): ?>
                <div class="h-100">
                    <?php echo $google_map_iframe; ?>
<!--                    <a href="https://goo.gl/maps/2dUeBwPYSwTo8tNE7"-->
<!--                       class="btn bg-white d-flex justify-content-between align-items-center position-absolute bottom-0 mb-4 mx-3 w-auto end-0 start-0">-->
<!--                        باز کردن نقشه-->
<!--                        <i class="bi bi-box-arrow-up-right"></i>-->
<!--                    </a>-->
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>
