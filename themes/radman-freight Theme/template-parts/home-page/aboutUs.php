<section class="container z-7 rounded-section-bottom px-lg-5 py-5 min-vh-100 bg-white overflow-hidden">
    <div class="row justify-content-center">
        <div class="col-11 col-lg-5 mt-lg-5 pt-lg-5">
            <p><?= get_field('about_us_small_title');?></p>
            <h4><?= get_field('about_us_title');?></h4>
            <p><?= get_field('about_us_content');?></p>
            <ul>
                <?php
                while (have_rows('advantages')): the_row();;
                    ?>
                    <li><?= get_sub_field('adv_list');?></li>
                <?php endwhile; ?>
            </ul>
            <a href="<?= site_url('/about-us')?>" class="btn btn-primary ">درباره ما</a>
        </div>
        <div class="col-12 col-lg-6 pt-4 pt-lg-0">
            <div class="position-relative pb-5 pb-lg-0">
                <img class="ms-lg-5 pt-2 animate__animated animate__fadeInRight col-12 col-lg-6 rounded"
                     src="<?= get_field('aboutus_image_1')['url'];?>"
                     alt="radman1">
                <img class="d-none d-lg-inline col-8 position-absolute top-50 start-50 z-1 me-5
                animate__animated animate__fadeInRight animate__delay-1s rounded"
                     src="<?= get_field('aboutus_image_2')['url'];?>"
                     alt="radman2">
                <img class="d-none d-lg-inline position-absolute top-100 start-0 mt-2
                animate__animated animate__fadeInRight animate__delay-2s rounded"
                     src="<?= get_field('aboutus_image_3')['url'];?>"
                     alt="radman3">
            </div>

        </div>
    </div>

</section>