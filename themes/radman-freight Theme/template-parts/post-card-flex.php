<article class="my-2">
    <a class="text-dark row align-items-center" href="<?php the_permalink();?>">
        <img class="col-5 rounded-2"  src="<?php echo the_post_thumbnail_url(); ?>"
             alt="<?php the_title(); ?>">
            <div class="col-7">
                <p class="m-0">
                    <?php
                    $category_detail = get_the_category($post->ID);//$post->ID
                    foreach ($category_detail as $category) { ?>
                        <span class="text-decoration-none me-2 small fw-lighter">
                        <?php echo $category->name ?>
                    </span>
                    <?php } ?>
                </p>
                <h6 class="fw-bolder "> <?= get_the_title();?></h6>
            </div>

    </a>
</article>