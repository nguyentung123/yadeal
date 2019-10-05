<?php
//* Template Name: Support*/
get_header();
?>

<!-- === MAIN CONTENT === -->
<main>
    <!-- Support Head -->
    <?php echo do_shortcode('[breadcrumbs]');?>
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
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icons/shield-main.png">
                    </div>
                    <div class="support-type__item__detail">
                        <p class="page-desc">Thông tin bảo hành</p>
                        <a class="sm-cta" href="<?php echo site_url('/support/bao-hanh') ?>">Tìm hiểu thêm</a>
                    </div>
                </div>

                <!-- Support Item -->
                <div class="support-type__item col-lg-3 col-6">
                    <div class="support-type__item__image">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icons/pin-main.png">
                    </div>
                    <div class="support-type__item__detail">
                        <p class="page-desc">Hệ thống cửa hàng</p>
                        <a class="sm-cta" href="<?php echo site_url('/shops') ?>">Tìm hiểu thêm</a>
                    </div>
                </div>

                <!-- Support Item -->
                <div class="support-type__item col-lg-3 col-6">
                    <div class="support-type__item__image">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icons/envelop-main.png">
                    </div>
                    <div class="support-type__item__detail">
                        <p class="page-desc">Tài liệu hướng <br> dẫn sử dụng</p>
                        <a class="sm-cta" href="<?php echo site_url('/support/huong-dan-su-dung') ?>">Tìm hiểu thêm</a>
                    </div>
                </div>

                <!-- Support Item -->
                <div class="support-type__item col-lg-3 col-6" id="trigger-as-shop">
                    <div class="support-type__item__image">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icons/shield-main.png">
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
                <?php
                    $address = get_theme_mod('contact_detail_address','74-76 Nguyễn Khang, P. Yên Hoà, Q, Cầu Giấy, Hà Nội');
                    $sdt_cham_soc_khach_hang = get_theme_mod('contact_detail_phone','0123456789');
                    $email_support = get_theme_mod('contact_detail_email','Chăm sóc khách hàng: - Phòng kinh doanh: abc@gmail.com - Phòng marketing: xyz@gmail.com');
                ?>
                <ul class="contact-info__details">
                    <?php if($sdt_cham_soc_khach_hang):?>
                    <li class="contact-info__details__item">
                        <span class="contact-info__details__item__icon">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/icons/phone-main.png">
                        </span>
                        <p><?php echo $sdt_cham_soc_khach_hang;?></p>
                    </li>
                    <?php endif;?>

                    <?php if($address):?>
                    <li class="contact-info__details__item">
                        <span class="contact-info__details__item__icon">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/icons/pin-tiny.png">
                        </span>
                        <p><?php echo $address;?></p>
                    </li>
                    <?php endif;?>

                    <?php if($email_support):?>
                    <li class="contact-info__details__item">
                        <span class="contact-info__details__item__icon">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/icons/envelop-tiny.png">
                        </span>
                        <p style="text-align: left"><?php echo $email_support;?></p>
                    </li>
                    <?php endif;?>
                </ul>
            </div><!-- Contact Info -->

        </div><!-- Container -->
    </section>
    <!-- Support Body -->
</main>
<!-- === MAIN CONTENT - END === -->

<!-- === MODAL ===-->
<div class="modal" id="signup-as-shop">
    <div class="modal-overlay close-modal"></div>
    <div class="modal-content">
        <a class="close-modal">&times;</a>
        <form id="signup-as-shop-form" onsubmit="return false;">
            <div class="form-field">
                <label for="name">Họ và tên <span class="txt-main">*</span></label>
                <input id="name" name="name" type="text" placeholder="Họ và tên người đăng ký">
            </div>
            <div class="form-field">
                <label for="email">Email <span class="txt-main">*</span></label>
                <input id="email" name="email" type="email" placeholder="Email liên hệ">
            </div>
            <div class="form-field">
                <label for="company-name">Tên công ty</label>
                <input id="company-name" name="company-name" type="text" placeholder="Tên công ty">
            </div>
            <div class="form-field">
                <label for="website">Website</label>
                <input id="website" name="website" type="text" placeholder="Họ và tên người đăng ký">
            </div>
            <div class="form-field">
                <label for="message">Lời nhắn</label>
                <textarea id="message" resize="none" name="message" type="text" placeholder="Lời nhắn"></textarea>
            </div>
            <div class="form-field">
                <button type="submit" class="btn product-cta btn-grad btn-sh effect effect-main">
                    <span>Đăng ký</span>
                </button>
                <span class="loading-form">
                    <svg class="lds-spinner" width="200px" height="200px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" style="shape-rendering: auto;animation-play-state: running;animation-delay: 0s;background: none;width: 38px;height: 38px;display: inline-block;margin-bottom: -15px;"><g transform="rotate(0 50 50)" style="animation-play-state: running; animation-delay: 0s;">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#f05125" style="animation-play-state: running; animation-delay: 0s;">
                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite" style="animation-play-state: running; animation-delay: 0s;"></animate>
                        </rect>
                        </g><g transform="rotate(30 50 50)" style="animation-play-state: running; animation-delay: 0s;">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#f05125" style="animation-play-state: running; animation-delay: 0s;">
                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite" style="animation-play-state: running; animation-delay: 0s;"></animate>
                        </rect>
                        </g><g transform="rotate(60 50 50)" style="animation-play-state: running; animation-delay: 0s;">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#f05125" style="animation-play-state: running; animation-delay: 0s;">
                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite" style="animation-play-state: running; animation-delay: 0s;"></animate>
                        </rect>
                        </g><g transform="rotate(90 50 50)" style="animation-play-state: running; animation-delay: 0s;">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#f05125" style="animation-play-state: running; animation-delay: 0s;">
                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite" style="animation-play-state: running; animation-delay: 0s;"></animate>
                        </rect>
                        </g><g transform="rotate(120 50 50)" style="animation-play-state: running; animation-delay: 0s;">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#f05125" style="animation-play-state: running; animation-delay: 0s;">
                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite" style="animation-play-state: running; animation-delay: 0s;"></animate>
                        </rect>
                        </g><g transform="rotate(150 50 50)" style="animation-play-state: running; animation-delay: 0s;">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#f05125" style="animation-play-state: running; animation-delay: 0s;">
                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite" style="animation-play-state: running; animation-delay: 0s;"></animate>
                        </rect>
                        </g><g transform="rotate(180 50 50)" style="animation-play-state: running; animation-delay: 0s;">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#f05125" style="animation-play-state: running; animation-delay: 0s;">
                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite" style="animation-play-state: running; animation-delay: 0s;"></animate>
                        </rect>
                        </g><g transform="rotate(210 50 50)" style="animation-play-state: running; animation-delay: 0s;">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#f05125" style="animation-play-state: running; animation-delay: 0s;">
                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite" style="animation-play-state: running; animation-delay: 0s;"></animate>
                        </rect>
                        </g><g transform="rotate(240 50 50)" style="animation-play-state: running; animation-delay: 0s;">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#f05125" style="animation-play-state: running; animation-delay: 0s;">
                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite" style="animation-play-state: running; animation-delay: 0s;"></animate>
                        </rect>
                        </g><g transform="rotate(270 50 50)" style="animation-play-state: running; animation-delay: 0s;">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#f05125" style="animation-play-state: running; animation-delay: 0s;">
                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite" style="animation-play-state: running; animation-delay: 0s;"></animate>
                        </rect>
                        </g><g transform="rotate(300 50 50)" style="animation-play-state: running; animation-delay: 0s;">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#f05125" style="animation-play-state: running; animation-delay: 0s;">
                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite" style="animation-play-state: running; animation-delay: 0s;"></animate>
                        </rect>
                        </g><g transform="rotate(330 50 50)" style="animation-play-state: running; animation-delay: 0s;">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#f05125" style="animation-play-state: running; animation-delay: 0s;">
                            <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite" style="animation-play-state: running; animation-delay: 0s;"></animate>
                        </rect>
                        </g>
                    </svg>
                </span>
            </div>
        </form>
    </div>
</div>
<!-- === MODAL ===-->

<!--get footer-->
<?php get_footer();?>
