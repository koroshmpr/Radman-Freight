<article class="p-3 animate__animated animate__fadeInRight">
    <div class="text-dark row position-relative" href="<?php the_permalink(); ?>">
        <div class="p-3 bg-white rounded-1 col-10">
            <img width="45" height="40" src="<?= get_field('services_image')['url']; ?>" alt="<?php get_field('services_image')
            ['title']; ?>">
            <h5 class="fw-bolder py-3"> <?= get_the_title(); ?></h5>
            <p><?= wp_trim_words(get_the_content(), 14); ?></p>
            <div class="col-12">
                <img class="object-fit rounded" width="310" height="360"  src="<?= get_the_post_thumbnail_url(); ?>"
                     alt="<?=
                get_the_title();
                ?>">
            </div>
        </div>
        <a class="mb-2 me-2 col-3 btn-primary position-absolute
        bottom-0 end-0 z-7 py-3 px-2 rounded-right text-center border border-3 border-white"
           href="<?php the_permalink(); ?>">
            <i class="bi bi-arrow-left"></i>
        </a>
    </div>
</article>