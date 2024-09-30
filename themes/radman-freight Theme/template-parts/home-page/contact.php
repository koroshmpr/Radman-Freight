<section class="overflow-hidden container z-4 bg-primary margin-top min-vh-100 rounded-section-bottom margin-top
shadow-sm pt-5">
    <?php $form = get_field('contact_form' , 'option');?>
    <div class="row align-items-start justify-content-lg-between justify-content-center">
        <div class="col-11 col-lg-5 ps-lg-5 pt-5">
            <p class="text-white "><?= get_field('contact_small_title' , 'option');?></p>
            <h5 class="display-6 text-white fw-bolder my-3"><?= get_field('contact_title' , 'option');?></h5>
            <?= do_shortcode( '[gravityform id=' . $form . ' title="false" description="false" ajax="true"]' ); ?>
        </div>
        <div class="col-11 col-lg-5 px-lg-5 animate__animated animate__fadeInDown pb-5 mb-4 pb-lg-0 mb-lg-0">
            <img class="object-fit w-100"
                 src="<?= get_field('contact_image' , 'option')['url'];?>"
                 alt="<?= get_field('contact_image' , 'option')['title'];?>">
        </div>
    </div>

</section>
