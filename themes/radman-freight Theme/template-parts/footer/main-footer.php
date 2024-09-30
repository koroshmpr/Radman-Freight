<div class="container z-1 margin-top rounded-section-bottom pb-5">
    <div class="row justify-content-lg-between align-items-center justify-content-center">
        <div class="col-11 col-lg-6 mx-lg-2 px-lg-4 border-end border-1">
            <h4><?= get_field('footer_title', 'option'); ?></h4>
            <p><?= get_field('footer_content', 'option'); ?></p>
        </div>
        <div class="col-11 col-lg-6 row row-cols-1 row-cols-lg-3">
            <div>
                <h6 class="fw-bolder">سرتیترها</h6>
                <?php
                $locations = get_nav_menu_locations();
                $menu = wp_get_nav_menu_object($locations['headerMenuLocation']);
                if ($menu) :
                    wp_nav_menu(array(
                        'theme_location' => 'footerLocationThree',
                        'menu_class' => 'list-unstyled d-flex justify-content-start d-lg-block flex-wrap gap-3',
                        'container' => false,
                        'menu_id' => 'navbarTogglerMenu',
                        'item_class' => 'nav-item my-lg-1',
                        'link_class' => 'lazy text-decoration-none text-dark',
                        'depth' => 1,
                    ));
                endif; ?>
            </div>
            <div>
                <h6 class="fw-bolder">خدمات ما</h6>
                <?php
                $locations = get_nav_menu_locations();
                $menu_footer_one = wp_get_nav_menu_object($locations['footerLocationOne']);
                if ($menu) :
                    wp_nav_menu(array(
                        'theme_location' => 'footerLocationOne',
                        'menu_class' => 'list-unstyled d-flex justify-content-start d-lg-block flex-wrap gap-3',
                        'container' => false,
                        'menu_id' => 'navbarTogglerMenu',
                        'item_class' => 'nav-item my-lg-1',
                        'link_class' => 'lazy text-decoration-none text-dark',
                        'depth' => 1,
                    ));
                endif; ?>
            </div>
            <div>
                <h6 class="fw-bolder">مقالات</h6>
                <?php
                $locations = get_nav_menu_locations();
                $menu_footer_Two = wp_get_nav_menu_object($locations['footerLocationTwo']);
                if ($menu) :
                    wp_nav_menu(array(
                        'theme_location' => 'footerLocationTwo',
                        'menu_class' => 'list-unstyled d-flex justify-content-start d-lg-block flex-wrap gap-3',
                        'container' => false,
                        'menu_id' => 'navbarTogglerMenu',
                        'item_class' => 'nav-item my-lg-1',
                        'link_class' => 'lazy text-decoration-none text-dark',
                        'depth' => 1,
                    ));
                endif;
                ?>
            </div>
        </div>
    </div>

</div>