<section class=" position-relative container z-5 margin-top rounded-section overflow-hidden shadow-sm pb-5">
    <img class="z--1 position-absolute object-fit top-0 start-0 w-100 h-100"
         src="/wp-content/uploads/2022/12/Rectangle-1213.png"
         alt="background">
    <div class="row align-items-center">
        <div class="col-12 col-lg-6 px-lg-5">
            <p><?= get_field('testimony_small_title' , 'option');?></p>
            <h5 class="fw-bolder fs-4 py-4"><?= get_field('testimony_title' , 'option');?></h5>
            <p><?= get_field('testimony_content' , 'option');?></p>
        </div>
        <div class="col-12 col-lg-6"></div>
    </div>
    <div class="d-flex justify-content-between px-lg-5 overflow-scroll animate__animated animate__slideInRight">
        <?php
        while (have_rows('costumers' , 'option')): the_row();;
        ?>
        <img class="px-4 px-lg-0" src="<?= get_sub_field('costumers_logo' , 'option')['url'] ;?>"
             alt="<?= get_sub_field('costumers_logo' , 'option')['title'] ;?>">
        <?php endwhile; ?>
    </div>
</section>