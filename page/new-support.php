<?php
//*Template Name: Chính sách bảo mật
get_header();
?>
<main class="no-overlay">

  <!-- Common Banner -->
  <div class="common-banner" id="privacy-banner-section">

    <!-- Container -->
    <div class="container">

      <!-- Background Holder -->
      <div class="bg-holder">
        <div class="img-holder">
          <img alt="banner privacy icon" src="<?php echo get_theme_file_uri('assets/img/update-dec/privacy-banner-full.png'); ?>">
        </div>
      </div>
      <!-- Background Holder - END -->

      <!-- Main Content -->
      <div class="main-content">
        <h3 class="title">
          CHÍNH SÁCH<br>
          BẢO MẬT THÔNG TIN
        </h3>
        <p class="desc">
          Tại Yadea, ưu tiên hàng đầu của chúng tôi là<br>
          bảo vệ thông tin cá nhân và quyền lợi hợp<br>
          pháp của khách hàng
        </p>
      </div>
      <!-- Main Content -->

    </div>
    <!-- Container - END -->

  </div>
  <!-- Common Banner - END -->


  <!-- Page Main Context -->
  <div class="common-page-content">

    <!-- Container -->
    <div class="container">

      <!-- Support Action Holder -->
      <div class="support-action-holder">

        <!-- Support Action Item -->
        <div class="support-action-item">
          <div class="action-icon">
            <img src="<?php echo get_theme_file_uri('assets/img/update-dec/support-apply-shop.png'); ?>">
          </div>
          <div class="action-context">
            <p>ĐĂNG KÝ LÀM ĐẠI LÝ</p>
          </div>
        </div>
        <!-- Support Action Item - END -->

        <!-- Support Action Item -->
        <div class="support-action-item">
          <div class="action-icon">
            <img src="<?php echo get_theme_file_uri('assets/img/update-dec/support-maintain.png'); ?>">
          </div>
          <div class="action-context">
            <p>CHÍNH SÁCH BẢO HÀNH</p>
          </div>
        </div>
        <!-- Support Action Item - END -->

        <!-- Support Action Item -->
        <div class="support-action-item">
          <div class="action-icon">
            <img src="<?php echo get_theme_file_uri('assets/img/update-dec/support-privacy.png'); ?>">
          </div>
          <div class="action-context">
            <p>CHÍNH SÁCH BẢO MẬT</p>
          </div>
        </div>
        <!-- Support Action Item - END -->

        <!-- Support Action Item -->
        <div class="support-action-item">
          <div class="action-icon">
            <img src="<?php echo get_theme_file_uri('assets/img/update-dec/support-search-store.png'); ?>">
          </div>
          <div class="action-context">
            <p>TÌM CỬA HÀNG</p>
          </div>
        </div>
        <!-- Support Action Item - END -->

      </div>
      <!-- Support Action Holder - END -->

    </div>
    <!-- Container - END -->

  </div>
  <!-- Page Main Context - END -->


    <?php get_template_part('template-parts/common', 'pre-footer'); ?>

</main>
<?php get_footer();?>
