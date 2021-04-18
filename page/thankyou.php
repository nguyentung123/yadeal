<?php
//*Template Name: Cảm ơn khách hàng
get_header();
?>
<main class="no-overlay thankyou-page">

  <!-- Thank you context -->
  <section class="section section-thankyou-context">

    <!-- Container -->
    <div class="container">

      <!-- Main Content -->
      <div class="main-content">
        <h2 class="title">ĐĂNG KÝ THÀNH CÔNG</h2>
        <p class="thankyou-note">
          Cảm ơn bạn đã tin tưởng chọn YADEA<br>
          Tư vấn viên của YADEA Việt Nam sẽ liên hệ lại với bạn trong thời gian sớm nhất
        </p>
        <hr class="custom-line">
        <p class="thankyou-note">
          Đến lái và trải nghiệm trực tiếp xe YADEA<br>
          tại cửa hàng gần bạn nhất
        </p>
        <div class="cta-holder">
          <a class="btn shadow-cta" href="<?php echo site_url('/shops'); ?>">
            <span class="shadow"></span>
            <span class="context track-this-button">
               TÌM NGAY <span class="arrow">&#8811;</span>
            </span>
          </a>
        </div>
      </div>
      <!-- Main Content -->

      <div class="thankyou-img">
        <div class="img-holder">
          <img alt="thank you for buying YADEA" src="<?php echo get_theme_file_uri('assets/img/update-dec/thankyou-img.jpg'); ?>">
        </div>
      </div>
    </div>
    <!-- Container - END -->

  </section>
  <!-- Thank you context - END -->

</main>
<!-- === MODAL ===-->
<?php get_footer();?>
