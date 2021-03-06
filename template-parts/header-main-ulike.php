<!-- === HEADER === -->
<header id="page-header">

 <!-- Container -->
 <div class="container header">
  <!-- Desktop Menu Row -->
  <div class="row">

   <!-- Header Logo -->
   <div class="col-lg-2 col-6 header__logo">
    <a href="<?php echo site_url(); ?>">
     <img src="https://sw-hcm-1.vinadata.vn/v1/AUTH_6002c87d444b4c85b63d8a941e0512d7/yadeavietnam/themes/logo.svg"
      class="header__logo__image">
    </a>
   </div><!-- Header Logo -->

   <!-- Header Menu Wrapper -->
   <div class="col-lg-10 col-6 header__menu">

    <!-- Header Main Menu -->
    <ul class="nav justify-content-end mb-hide">
     <li class="nav-item <?php if (is_page('products')) {
 echo 'active';
}
?>" id="sub-menu-trigger">
      <a class="nav-link" href="<?php echo site_url('/products'); ?>">Sản phẩm</a>
     </li>
     <li class="nav-item <?php if (is_page('/shops')) {
 echo 'active';
}
?>">
      <a class="nav-link" href="<?php echo site_url('/shops') ?>">Cửa hàng</a>
     </li>
     <li id="about-us-sub-menu-trigger" class="nav-item <?php if (is_page('/about-us')) {
 echo 'active';
}
?>">
      <a class="nav-link" href="<?php echo site_url('/about') ?>">Về chúng tôi</a>
     </li>
     <li class="nav-item <?php if (is_page('support')) {
 echo 'active';
}
?>">
      <a class="nav-link" href="<?php echo site_url('/support') ?>">Hỗ trợ</a>
     </li>
    </ul>
    <!-- Header Main Menu -->

    <!-- Header Mobile Menu Toggle -->
    <div class="header__menu__btn mb-show-bl" id="mobile-menu-ctrl">
     <i class="fa fa-bars" aria-hidden="true" id="open-menu-btn"></i>
     <i class="fa fa-times" aria-hidden="true" id="close-menu-btn"></i>
    </div>
    <!-- Header Mobile Menu Toggle -->

   </div><!-- Header Menu Wrapper -->


  </div><!-- Desktop Menu Row -->

 </div><!-- Container -->

 <!-- Fixed Position Sub Menu -->
 <?php get_template_part('template-parts/header', 'product-desktop'); ?>


 <!-- Fixed Position Sub Menu -->
 <div class="container sub-menu" id="about-us-sub-menu">
  <!-- Row - About Wrapper -->
  <div class="sub-menu__wrapper row">
   <!-- About Item -->
   <div class="col-md-4 col-6 sub-menu__wrapper__item">

    <!-- About Detail Wrapper -->
    <div class="sub-menu__wrapper__item__detail">
     <a href="<?php echo site_url('/about'); ?>">
      <div class="about-us__thumbnail">
       <img class="img-fluid"
        data-src="https://sw-hcm-1.vinadata.vn/v1/AUTH_6002c87d444b4c85b63d8a941e0512d7/yadeavietnam/themes/about-thumbnail.jpg">
      </div>
      <p class="sub-title">Giới thiệu Yadea</p>
      <p class="txt-gray desc">Công ty TNHH Xe Máy Điện Thông Minh YADEA</p>
      <div class="line"></div>
     </a>
    </div>
   </div><!-- About Item -->

   <!-- About Item -->
   <div class="col-md-4 col-6 sub-menu__wrapper__item">
    <!-- About Detail Wrapper -->
    <div class="sub-menu__wrapper__item__detail">
     <a href="<?php echo site_url('/course'); ?>">
      <div class="about-us__thumbnail">
       <img class="img-fluid"
        data-src="https://sw-hcm-1.vinadata.vn/v1/AUTH_6002c87d444b4c85b63d8a941e0512d7/yadeavietnam/themes/history-thumbnail.jpg">
      </div>
      <p class="sub-title">Quá trình phát triển</p>
      <p class="txt-gray desc">Lịch sử hình thành - quá trình phát triển của YADEA</p>
      <div class="line"></div>
     </a>
    </div>
   </div><!-- About Item -->

   <!-- About Item -->
   <div class="col-md-4 col-6 sub-menu__wrapper__item">

    <!-- About Detail Wrapper -->
    <div class="sub-menu__wrapper__item__detail">
     <a href="<?php echo site_url('/supplier'); ?>">
      <div class="about-us__thumbnail">
       <img class="img-fluid"
        data-src="https://sw-hcm-1.vinadata.vn/v1/AUTH_6002c87d444b4c85b63d8a941e0512d7/yadeavietnam/themes/supplier-thumbnail.jpg">
      </div>
      <p class="sub-title">Đối tác hàng đầu</p>
      <p class="txt-gray desc">Đối tác hàng đầu của chúng tôi</p>
      <div class="line"></div>
     </a>
    </div>
   </div><!-- About Item -->
  </div>
 </div>

 <!-- Mobile Drop Down Menu -->
 <div class="mobile-menu" id="mobile-menu">

  <!-- Overlay -->
  <div class="mobile-menu__overlay"></div>

  <!-- Main Mobile Dropdown Menu -->
  <ul class="nav light-gray-bg" style="z-index: 3;">

   <!-- Product Listing -->
   <li class="nav-item with-sub-menu <?php if (is_page('/products')) {
 echo 'active';
}
?>">
    <a class="nav-link" href="<?php echo site_url('/products'); ?>">Sản phẩm</a>

    <?php get_template_part('template-parts/header', 'product-mobile'); ?>

   </li>

   <!-- Shop Searching Page -->
   <li class="nav-item <?php if (is_page('/shops')) {
 echo 'active';
}
?>">
    <a class="nav-link" href="<?php echo site_url('/shops') ?>">Cửa hàng</a>
   </li>

   <!-- About Us -->
   <li class="nav-item with-sub-menu">
    <a class="nav-link" href="<?php echo site_url('/about') ?>">Về chúng tôi</a>
    <i class="fa fa-plus nav-trigger active" aria-hidden="true"></i>
    <ul class="nav-item__sub-menu" style="">
     <!-- About Item -->
     <li class="about-item">
      <a href="<?php echo site_url('/about') ?>">
       <p class="sub-title">Giới thiệu Yadea</p>
      </a>
     </li>

     <!-- About Item -->
     <li class="about-item">
      <a href="<?php echo site_url('/course') ?>">
       <p class="sub-title">Quá trình phát triển</p>
      </a>
     </li>

     <!-- About Item -->
     <li class="about-item">
      <a href="<?php echo site_url('/supplier') ?>">
       <p class="sub-title">Đối tác hàng đầu</p>
      </a>
     </li>
    </ul>
   </li>

   <!-- Support -->
   <li class="nav-item <?php if (is_page('support')) {
 echo 'active';
}
?>">
    <a class="nav-link" href="<?php echo site_url('/support') ?>">Hỗ trợ</a>
   </li>
  </ul>
  <!-- Main Mobile Dropdown Menu - END -->

 </div>
 <!-- Mobile Drop Down Menu - END -->

 <!-- Sub Menu -->
 <section class="sub-header">
  <!-- Container -->
  <div class="container">

   <!-- Price Row -->
   <div class="sub-menu-row">

    <!-- Features List -->
    <span class="mb-show sub-menu-toggler">
     <i class="fa fa-bars" aria-hidden="true" id="open-sub-menu-btn"></i>
     <i class="fa fa-times" aria-hidden="true" id="close-sub-menu-btn"></i>
    </span>

    <!-- overlay -->
    <div class="close-sub-menu sub-menu-overlay"></div>

    <ul class="sub-menu-main">
     <li class="close-sub-menu">
      <a href="<?=site_url('/yadea-ulike/#section-ulike-feature') ?>">Thông tin sản phẩm</a>
     </li>
     <li class="close-sub-menu">
      <a href="<?=site_url('/chi-tiet/yadea-ulike/') ?>">Thông số kỹ thuật</a>
     </li>
     <li class="close-sub-menu">
      <span>Giá bán lẻ đề xuất: <b>18,990,000 VND</b></span>
     </li>
    </ul>

    <!-- Price CTA -->
    <div class="cta-wrapper">
     <p class="price-holder mb-show" style="margin: 0 10px;">
      Giá bán lẻ đề xuất: <b>18,990,000 VND</b>
     </p>
     <a class="cta open-signup-info-modal track-this-button" id="header-yadea-ulike-buynow-btn"
      style="cursor:pointer;">MUA NGAY</a>
    </div>
    <!-- Price CTA -->
   </div><!-- Price Row -->

  </div>
  <!-- Container -->
 </section>

</header>
<style>
#page-header .sub-header .sub-menu-row .sub-menu-main {
 grid-column: 1/span 4;
 display: flex;
 justify-content: space-between;
}

@media (max-width: 768px) {
 #page-header .sub-header .sub-menu-row .sub-menu-main {
  display: none;
 }
}

@media (max-width: 480px) {
 .cta-wrapper .price-holder {
  font-size: 10px;
 }

 #page-header .sub-header .sub-menu-row .cta-wrapper .cta {
  padding: 0 20px;
 }
}
</style>

<!--===HEADER - END===-->