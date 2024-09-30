<section class="overflow-hidden z-5 position-relative container
rounded-section-bottom shadow-sm min-vh-40 pt-5 animate__animated animate__slideInDown">
    <img class="z--1 position-absolute top-0 start-0 w-100 h-100 object-fit filter-br"
         src="<?= get_field('banner_image', 'option')['url']; ?>"
         alt="<?= get_field('banner_image', 'option')['title']; ?>">
    <div class="pt-5 mt-5 px-lg-5">
        <nav class="row" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ul class="breadcrumb d-flex fw-bold gap-2 list-unstyled"
                style="color:<?= get_field('banner_color', 'option'); ?>">
                <li class="breadcrumb-item">
                    <a href="/">صفحه اصلی</a>
                </li>
                <?php if (get_queried_object()->post_type == 'post'): ?>
                    >
                    <li class="breadcrumb-item">بلاگ</li>
                    >
                <?php elseif (get_queried_object()->post_type == 'services'): ?>
                    >
                    <li class="breadcrumb-item">سرویس‌ها</li>
                    >
                <?php elseif (get_queried_object()->post_type == 'news'): ?>
                    >
                    <li class="breadcrumb-item">تازه ترین‌ها</li>
                    >
                <?php elseif (get_queried_object()->post_type == 'c-satisfaction'): ?>
                    >
                    <li class="breadcrumb-item">رضایت مشتری</li>
                    >
                <?php endif; ?>
            </ul>
        </nav>
        <h1 class="fw-bold d-inline"
            style="color:<?= get_field('banner_color', 'option'); ?>">
            <?php wp_title(' ', true, 'right');
            ?>
        </h1>
    </div>
</section>