<?php
//*Template Name: Tải ứng dụng
get_header();
?>

<main class="no-overlay" id="download-app-support-page">

  <!-- Your code goes here -->
  <section class="section" id="download-app-page">
    <div class="container download-container">
      <!-- content -->
      <div class="download-content">
        <!-- title -->
        <h3>ỨNG DỤNG YADEA THÔNG MINH</h3>

        <!-- sub title -->
        <span>Kết nối mọi hành trình của bạn</span>

        <!-- description -->
        <p class="line-mobile">
          Định vị GPS toàn cầu | Bảo vệ xe thông minh 24/24 | Kiểm tra tình trạng xe tức thời.
        </p>
        <p>
          Lắng nghe và giải quyết nhanh chóng những vấn đề trên mỗi hành trình của bạn.
        </p>

        <!-- button download -->
        <div class="btn-download">
          <a href="https://apps.apple.com/vn/app/yadea/id1494084771">
            <img src="<?php echo get_theme_file_uri('assets/img/update-jan/btn-download-appstore.png'); ?>">
          </a>
          <a href="https://play.google.com/store/apps/details?id=com.yadea.smartmotovn">
            <img src="<?php echo get_theme_file_uri('assets/img/update-jan/btn-download-googleplay.png'); ?>">
          </a>
        </div>
      </div>
      <!-- end content -->

      <!-- image & slide -->
      <div class="image">

        <!-- image car -->
        <img src="<?php echo get_theme_file_uri('assets/img/update-jan/image-car.png'); ?>" alt="">

        <!-- slide process app -->
        <div class="slide-process-container">
          <div class="slide-process">
            <div class="item">
              <img src="<?php echo get_theme_file_uri('assets/img/update-jan/process-01.png'); ?>" alt="">
            </div>
            <div class="item">
              <img src="<?php echo get_theme_file_uri('assets/img/update-jan/process-02.png'); ?>" alt="">
            </div>
            <div class="item">
              <img src="<?php echo get_theme_file_uri('assets/img/update-jan/process-03.png'); ?>" alt="">
            </div>
            <div class="item">
              <img src="<?php echo get_theme_file_uri('assets/img/update-jan/process-04.png'); ?>" alt="">
            </div>
          </div>
        </div>

      </div>
      <!-- end image & slide  -->

    </div>
  </section>

    <?php get_template_part('template-parts/common', 'pre-footer'); ?>

</main>

<style>
  /* Hot Fix */
  #download-app-page .download-container .download-content .btn-download a{
    transition: all ease-in 100ms;
  }

  #download-app-page .download-container .download-content .btn-download a:hover{
    opacity: 0.75;
    filter: brightness(1.25);
    transition: all ease-out 150ms;
  }

  @media (min-width: 1024px){
    #download-app-page .download-container .image{
      transform: translateX(10%);
    }
  }

  @media (max-width: 991px){
    #download-app-page .download-container .image {
      transform: translateX(-2%);
    }
  }
</style>

<?php get_footer(); ?>
