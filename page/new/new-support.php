<?php
//*Template Name: Trung tâm hỗ trợ - Update
get_header();
?>
<main class="no-overlay support-pages">

    <!-- Common Banner -->
    <div class="common-banner" id="support-banner-section">

        <!-- Container -->
        <div class="container">

            <!-- Background Holder -->
            <div class="bg-holder" id="support-main-banner-bg">
                <div class="img-holder">
                    <img alt="banner privacy icon" src="<?php echo get_theme_file_uri('assets/img/update-dec/support-banner.png'); ?>">
                </div>
            </div>
            <!-- Background Holder - END -->

            <!-- Main Content -->
            <div class="main-content">
                <h3 class="title">
                    TRUNG TÂM HỖ TRỢ
                </h3>
                <p class="desc">
                    YADEA cam kết mang đến cho <br class="mb-show">khách hàng<br class="mb-hide"> những chính sách và<br class="mb-show"> dịch vụ chất lượng nhất
                </p>
            </div>
            <!-- Main Content -->

        </div>
        <!-- Container - END -->

    </div>
    <!-- Common Banner - END -->


    <!-- Page Main Context -->
    <div class="common-page-actions">

        <!-- Container -->
        <div class="container">

            <!-- Support Action Holder -->
            <div class="support-action-holder">

                <!-- Support Action Item -->
                <a class="support-action-item" id="trigger-as-shop">
                    <div class="action-icon">
                        <img src="<?php echo get_theme_file_uri('assets/img/update-dec/support-apply-shop.png'); ?>">
                    </div>
                    <div class="action-context">
                        <p>ĐĂNG KÝ LÀM ĐẠI LÝ</p>
                    </div>
                </a>
                <!-- Support Action Item - END -->

                <!-- Support Action Item -->
                <a class="support-action-item" href="<?php echo site_url('support/chinh-sach-bao-hanh'); ?>">
                    <div class="action-icon">
                        <img src="<?php echo get_theme_file_uri('assets/img/update-dec/support-maintain.png'); ?>">
                    </div>
                    <div class="action-context">
                        <p>CHÍNH SÁCH BẢO HÀNH</p>
                    </div>
                </a>
                <!-- Support Action Item - END -->

                <!-- Support Action Item -->
                <a class="support-action-item" href="<?php echo site_url('support/chinh-sach-bao-mat'); ?>">
                    <div class="action-icon">
                        <img src="<?php echo get_theme_file_uri('assets/img/update-dec/support-privacy.png'); ?>">
                    </div>
                    <div class="action-context">
                        <p>CHÍNH SÁCH BẢO MẬT</p>
                    </div>
                </a>
                <!-- Support Action Item - END -->

                <!-- Support Action Item -->
                <a class="support-action-item" href="<?php echo site_url('shops'); ?>">
                    <div class="action-icon">
                        <img src="<?php echo get_theme_file_uri('assets/img/update-dec/support-search-store.png'); ?>">
                    </div>
                    <div class="action-context">
                        <p>TÌM CỬA HÀNG</p>
                    </div>
                </a>
                <!-- Support Action Item - END -->

                <!-- Support Action Item -->
                <a class="support-action-item" href="<?php echo site_url('huong-dan-su-dung'); ?>">
                    <div class="action-icon">
                        <img src="<?php echo get_theme_file_uri('assets/img/update-dec/support-document.png'); ?>">
                    </div>
                    <div class="action-context">
                        <p>HƯỚNG DẪN SỬ DỤNG</p>
                    </div>
                </a>
                <!-- Support Action Item - END -->

                <!-- Support Action Item -->
                <a class="support-action-item" href="<?php echo site_url('dang-ky-lai-thu'); ?>">
                    <div class="action-icon">
                        <img src="<?php echo get_theme_file_uri('assets/img/update-dec/support-test-drive.png'); ?>">
                    </div>
                    <div class="action-context">
                        <p>ĐĂNG KÝ LÁI THỬ</p>
                    </div>
                </a>
                <!-- Support Action Item - END -->

                <!-- Support Action Item -->
                <a class="support-action-item" href="<?php echo site_url('tai-ung-dung'); ?>">
                    <div class="action-icon">
                        <img src="<?php echo get_theme_file_uri('assets/img/update-dec/support-download.png'); ?>">
                    </div>
                    <div class="action-context">
                        <p>TẢI ỨNG DỤNG YADEA</p>
                    </div>
                </a>
                <!-- Support Action Item - END -->

            </div>
            <!-- Support Action Holder - END -->

        </div>
        <!-- Container - END -->

    </div>
    <!-- Page Main Context - END -->


    <?php get_template_part('template-parts/common', 'pre-footer'); ?>

</main>

<!-- === MODAL ===-->
<div class="modal" id="signup-as-shop">
    <?php
    $yadea_apply_shop_form = wp_create_nonce( 'yadea_apply_shop_form_nonce' );
    ?>

    <div class="modal-overlay close-modal"></div>
    <div class="modal-content">
        <a class="close-modal">&times;</a>
        <form id="signup-as-shop-form"
              action="https://script.google.com/macros/s/AKfycbzuEn-S39FTFxywlYFlnTZ_GA6rPJBvTStj8LelAK-shCql6bc/exec"
              method="post">

            <input type="hidden" name="status" value="Pending">
            <input type="hidden" name="submit_date" value="<?php echo date("d/m/Y G:i"); ?>">

            <!-- Name Field -->
            <div class="form-field">
                <label for="name">Họ và tên <span class="txt-main">*</span></label>
                <input id="name" name="applicant_name" type="text" placeholder="Họ và tên người đăng ký">
            </div>

            <!-- Email -->
            <div class="form-field">
                <label for="email">Email <span class="txt-main">*</span></label>
                <input id="email" name="applicant_email" type="email" placeholder="Email liên hệ">
            </div>

            <!-- Company Name -->
            <div class="form-field">
                <label for="company-name">Tên công ty</label>
                <input id="company-name" name="applicant_company_name" type="text" placeholder="Tên công ty">
            </div>

            <!-- Website -->
            <div class="form-field">
                <label for="website">Website</label>
                <input id="website" name="applicant_website" type="text" placeholder="Họ và tên người đăng ký">
            </div>

            <!-- Message -->
            <div class="form-field">
                <label for="message">Lời nhắn</label>
                <textarea id="message" resize="none" name="applicant_message" type="text" placeholder="Lời nhắn"></textarea>
            </div>

            <!-- Finish Message -->
            <div class="form-field">
                <p class="submit-feedback"></p>
            </div>

            <!-- Submit Button -->
            <div class="form-field">
                <button type="submit"
                        class="btn product-cta btn-grad btn-sh effect effect-main">
                    <span>Đăng ký</span>
                </button>
                <span class="loading-form" style="display: none;">
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
<?php get_footer();?>
