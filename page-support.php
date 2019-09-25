<?php
get_header();
?>

    <!-- === MAIN CONTENT === -->

    <!-- Support Head -->
    <section class="section light-gray-bg blog-heading" id="support-head">
        <div class="container blog-heading__title">
            <h2 class="title">Hỗ trợ</h2>

            <ul class="blog-heading__breadcrumb horizontal-list">
                <li>Home</li>
                <li>Support Page</li>
            </ul>
        </div>
    </section>
    <!-- Support Head -->


    <!-- Support Body -->
    <section class="section" id="support-body">

        <!-- Container -->
        <div class="container">

            <!-- Support Type List -->
            <div class="row support-type text-center">

                <!-- Support Item -->
                <div class="support-type__item col-lg-3 col-6">
                    <div class="support-type__item__image">
                        <img src="<?php echo get_theme_file_uri('assets/img/icons/shield-main.png'); ?>">
                    </div>
                    <div class="support-type__item__detail">
                        <p class="page-desc">Thông tin bảo hành</p>
                        <a class="sm-cta">Tìm hiểu thêm</a>
                    </div>
                </div>

                <!-- Support Item -->
                <div class="support-type__item col-lg-3 col-6">
                    <div class="support-type__item__image">
                        <img src="<?php echo get_theme_file_uri('assets/img/icons/pin-main.png'); ?>">
                    </div>
                    <div class="support-type__item__detail">
                        <p class="page-desc">Hệ thống cửa hàng</p>
                        <a class="sm-cta">Tìm hiểu thêm</a>
                    </div>
                </div>

                <!-- Support Item -->
                <div class="support-type__item col-lg-3 col-6">
                    <div class="support-type__item__image">
                        <img src="<?php echo get_theme_file_uri('assets/img/icons/book-main.png'); ?>">
                    </div>
                    <div class="support-type__item__detail">
                        <p class="page-desc">Tài liệu hướng <br> dẫn sử dụng</p>
                        <a class="sm-cta">Tìm hiểu thêm</a>
                    </div>
                </div>

                <!-- Support Item -->
                <div class="support-type__item col-lg-3 col-6">
                    <div class="support-type__item__image">
                        <img src="<?php echo get_theme_file_uri('assets/img/icons/envelop-main.png'); ?>">
                    </div>
                    <div class="support-type__item__detail">
                        <p class="page-desc">Đăng ký làm đại lý</p>
                        <a class="sm-cta">Tìm hiểu thêm</a>
                    </div>
                </div>
            </div><!-- Support Type List -->


            <!-- Contact Info -->
            <div class="contact-info">
                <h2 class="contact-info__title txt-main mb-30">Thông tin liên hệ</h2>

                <ul class="contact-info__details">
                    <li class="contact-info__details__item">
                    <span class="contact-info__details__item__icon">
                        <img src="<?php echo get_theme_file_uri('assets/img/icons/phone-main.png'); ?>'">
                    </span>
                        <p class="address-detail__phone">
                            <?php echo get_theme_mod('contact_detail_phone',''); ?>
                        </p>
                    </li>
                    <li class="contact-info__details__item">
                    <span class="contact-info__details__item__icon">
                        <img src="<?php echo get_theme_file_uri('assets/img/icons/pin-tiny.png'); ?>">
                    </span>
                        <p class="address-detail__address">
                            <?php echo get_theme_mod('contact_detail_address',''); ?>
                        </p>
                    </li>
                    <li class="contact-info__details__item">
                    <span class="contact-info__details__item__icon">
                        <img src="<?php echo get_theme_file_uri('assets/img/icons/envelop-tiny.png'); ?>">
                    </span>
                        <p class="address-detail__email">
                            <?php echo get_theme_mod('contact_detail_email',''); ?>
                        </p>
                    </li>
                </ul>
            </div><!-- Contact Info -->

        </div><!-- Container -->
    </section>
    <!-- Support Body -->

    <!-- ====== MAIN CONTENT - END ====== -->

<?php
get_footer();
