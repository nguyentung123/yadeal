<?php
//*Template Name: Đăng ký lái thử xe
get_header();
?>
<main class="no-overlay signup-test-drive-page">

  <!-- Banner -->
  <div class="test-drive-banner">

    <!-- Background -->
    <div class="background-holder">
      <div class="img-holder">
        <img class="mb-hide" src="<?php echo get_theme_file_uri('assets/img/update-dec/test-drive-banner.jpg'); ?>">
        <img class="mb-show" src="<?php echo get_theme_file_uri('assets/img/update-dec/test-drive-banner-mb.jpg'); ?>">
      </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
      <h3 class="title">
        BẬT, LÁI<br>
        <span class="mb-hide">VÀ TRẢI NGHIỆM</span>
        <span class="mb-show-ib">VÀ YÊU HƠN</span>
        <br>
        <span class="mb-hide">THEO CÁCH CỦA BẠN</span>
        <span class="mb-show-ib">HÀNH TRÌNH</span>
        <br class="mb-show">
        <span class="mb-show-ib">CỦA CHÍNH BẠN</span>
      </h3>
    </div>
  </div>
  <!-- Banner - END -->

  <!-- Test Drive Content -->
  <section class="test-drive-main-content">

    <!-- Container -->
    <div class="container">

      <?php
      $args = array(
            'posts_per_page'   => -1,
            'post_type'        => 'product',
      );
      $productQuery = new WP_Query($args);

      if($productQuery -> have_posts()): ?>

          <!-- Title -->
          <div class="form-title">
            <h3 class="title">ĐĂNG KÝ LÁI THỬ XE YADEA</h3>
          </div>

          <!-- Main Signup Form -->
          <form id="signup-test-drive"
                method="get"
                data-callback-link="<?php echo site_url('dang-ky-lai-thu/thank-you'); ?>"
                action="https://script.google.com/macros/s/AKfycbya5SD9MJnSu-VWmiykZJBApbQMMqN2z-AwOTjz7diBQE2nGeXp/exec">

            <input type="hidden" name="submit_date" value="">
            <input type="hidden" name="status" value="pending">

            <!-- Form Block -->
            <div class="form-block">
              <label class="label" for="bike-type-input">
                Dòng xe muốn lái thử <span class="required-mark">*</span>
              </label>
              <select name="bike_type" id="bike-type-input" required>
                <option value="">Chọn model bạn muốn đăng ký</option>
                  <?php while ($productQuery -> have_posts()):
                      $productQuery -> the_post();
                      ?>
                    <option value="<?php echo get_post_field('post_name', get_the_ID() ); ?>"><?php echo get_the_title(); ?></option>
                <?php endwhile; ?>
              </select>
            </div>
            <!-- Form Block - END -->

            <!-- Form Block -->
            <div class="form-block">
              <label class="label" for="applicant-name-input">
                Họ và tên <span class="required-mark">*</span>
              </label>
              <input name="applicant_name" id="applicant-name-input" type="text" required>
            </div>
            <!-- Form Block - END -->

            <!-- Form Block -->
            <div class="form-block">
              <label class="label" for="phone-number-input">
                Số điện thoại <span class="required-mark">*</span>
              </label>
              <input name="phone_number" id="phone-number-input" type="text"
                     class="phone-number" minlength="9" maxlength="11" required>
            </div>
            <!-- Form Block - END -->

            <!-- Form Block -->
            <div class="form-block">
              <label class="label" for="email-input">
                Email <span class="required-mark">*</span>
              </label>
              <input name="email" id="email-input" type="email" required>
            </div>
            <!-- Form Block - END -->

            <!-- Form Block -->
            <div class="form-block">
              <label class="label" for="user-address-input">
                Địa chỉ nơi ở<span class="required-mark">*</span>
              </label>
              <input name="user_address" id="user-address-input" type="text" required>
            </div>
            <!-- Form Block - END -->

            <!-- Feedback Holder -->
            <div class="feedback-holder">
              <div class="spinner" style="text-align: center;">
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
              <p class="feedback-context"></p>
            </div>

            <!-- Submit CTA -->
            <div class="cta-holder">
              <button class="btn shadow-cta" type="submit">
                <span class="shadow"></span>
                <span class="context track-this-button" id="sign-up-test-driving">
               ĐĂNG KÝ <span class="arrow">&#8811;</span>
            </span>
              </button>
            </div>
            <!-- Submit CTA - END  -->

          </form>
          <!-- Main Signup Form - END -->

        <?php
        endif;
        wp_reset_postdata();
      ?>

    </div>
    <!-- Container - END -->
  </section>

    <?php get_template_part('template-parts/common', 'pre-footer'); ?>

</main>
<?php get_footer();?>
