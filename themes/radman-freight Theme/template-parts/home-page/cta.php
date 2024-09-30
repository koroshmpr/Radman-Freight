<section class="position-relative container z-6 margin-top rounded-section shadow-sm">
    <img class="z--1 position-absolute object-fit top-0 start-0 w-100 h-100 rounded-section"
         src="<?= get_field('cta_image')['url'];?>"
         alt="background">
    <div class="row align-items-center">
        <div class="col-11 col-lg-6 py-lg-5 ps-lg-5">
            <p class="text-white"><?= get_field('cta_small_title');?></p>
            <h4 class="display-4 py-3 text-white fw-bolder d-inline-block">
                <?= get_field('cta_big_title');?>
            </h4>
            <p class="text-white">
                <?= get_field('cta_ps');?>
            </p>
        </div>
    </div>
</section>