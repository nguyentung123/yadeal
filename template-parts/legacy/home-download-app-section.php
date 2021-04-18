<?php ?>
<section class="section" id="download-app-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <!--background-->
        <div class="bg-download-app">

          <!--content-->
          <div class="content">
            <!--title-->
            <h3>CHẠM TAY VÀ TẢI ỨNG DỤNG YADEA</h3>
            <!--description-->
            <p>Quản lý xe dễ dàng, tiện lợi ngay trên điện thoại của bạn.</p>
            <a href="<?php echo site_url('tai-ung-dung'); ?>" class="btn-download-app">Tải Ngay <i
                class="fa fa-caret-right"></i></a>
          </div>
          <!--end content-->

          <!--image-->
          <div class="image">
            <img class="lazy" data-src="<?php echo get_theme_file_uri('assets/img/download-app-image.png'); ?>"
              alt="app">
          </div>
          <!--end image-->

        </div>
        <!--end background-->
      </div>
    </div>
  </div>
</section>
<style>
#download-app-section .bg-download-app {
  background: url("<?php echo get_theme_file_uri('assets/img/download-app-banner.jpg'); ?>") no-repeat;
  background-position: center center;
  background-size: cover;
}

@media (max-width: 768px) {
  #download-app-section .bg-download-app {
    background: url("<?php echo get_theme_file_uri('assets/img/download-app-banner-mobile.jpg'); ?>") no-repeat;
    background-size: cover;
  }
}
</style>