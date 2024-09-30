<article class="p-3 animate__animated animate__slideInRight hover-shadow rounded-1">
    <a class="text-dark" href="<?php the_permalink();?>">
    <img class="ratio rounded object-fit h-200p" src="<?php echo the_post_thumbnail_url(); ?>"
         alt="<?php the_title(); ?>">
    <div class="d-flex align-items-start pt-3 justify-content-evenly">
        <p>
            <?php echo get_the_date('d  F , Y'); ?>
        </p>
        <div class="ps-2 ">
            <h5 class="fw-bolder"> <?= get_the_title();?></h5>
            <p><?= wp_trim_words(get_the_content() , 14);?></p>
        </div>
    </div>
    </a>
</article>