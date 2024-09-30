<div class="position-relative bg-primary container margin-top rounded-section shadow-sm z-1
    animate__animated animate__slideInDown" >
    <div class="row px-4 pb-3 text-white">
        <div class="col-6 col-lg-3 d-grid">
            <h6 class=" fw-bolder">مرکز تماس</h6>
            <p class="mb-0"><?= get_field('tel_title','option'); ?></p>
            <a href="tel:<?= get_field('tel','option'); ?>"><?= get_field('tel','option'); ?></a>
            <a href="tel:<?= get_field('tel_second','option'); ?>"><?= get_field('tel_second','option'); ?></a>
        </div><div class="col-6 col-lg-3">
            <h6 class="fw-bolder">آدرس</h6>
            <p><?= get_field('address','option'); ?></p>
        </div>
        <div class="col-12 col-lg-6 mt-3 mt-lg-0 z-5">
            <h6 class="fw-bolder">دریافت مشاوره</h6>
            <div class="position-relative form-Counseling">
                <?php
                echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]');
                ?>
            </div>

        </div>
    </div>
</div>