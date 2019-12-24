<!-- === HEADER === -->
<header id="page-header">

    <!-- Container -->
    <div class="container header">
        <!-- Desktop Menu Row -->
        <div class="row">

            <!-- Header Logo -->
            <div class="col-lg-2 col-6 header__logo">
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php echo get_theme_file_uri('assets/img/logo.png'); ?>" class="header__logo__image">
                </a>
            </div><!-- Header Logo -->

            <!-- Header Menu Wrapper -->
            <div class="col-lg-10 col-6 header__menu">

                <!-- Header Main Menu -->
                <ul class="nav justify-content-end mb-hide">
                    <li class="nav-item <?php if(is_page('products')) echo 'active'; ?>" id="sub-menu-trigger" style="display: none;">
                        <a class="nav-link" href="<?php echo site_url('/products'); ?>">Sản phẩm</a>
                    </li>
                    <li class="nav-item <?php if(is_page('/shops')) echo 'active'; ?>" style="display: none;">
                        <a class="nav-link" href="<?php echo site_url('/shops') ?>">Cửa hàng</a>
                    </li>
                    <li id="about-us-sub-menu-trigger" class="nav-item <?php if(is_page('/about-us')) echo 'active'; ?>">
                        <a class="nav-link" href="<?php echo site_url('/about') ?>">Về chúng tôi</a>
                    </li>
                    <li class="nav-item <?php if(is_page('support')) echo 'active'; ?>">
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
                            <img class="img-fluid" src="<?php echo get_theme_file_uri('assets/img/about-thumbnail.jpg'); ?>">
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
                            <img class="img-fluid" src="<?php echo get_theme_file_uri('assets/img/history-thumbnail.jpg'); ?>">
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
                            <img class="img-fluid" src="<?php echo get_theme_file_uri('assets/img/supplier-thumbnail.jpg'); ?>">
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
        <ul class="nav light-gray-bg">

            <!-- Product Listing -->
            <li class="nav-item with-sub-menu <?php if(is_page('/products')) echo 'active'; ?>" style="display: none;">
                <a class="nav-link" href="<?php echo site_url('/products'); ?>">Sản phẩm</a>

                <?php get_template_part('template-parts/header', 'product-mobile'); ?>

            </li>

            <!-- Shop Searching Page -->
            <li class="nav-item <?php if(is_page('/shops')) echo 'active'; ?>" style="display: none;">
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
            <li class="nav-item <?php if(is_page('support')) echo 'active'; ?>">
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
                        <a href="<?=site_url('/yadea-g5/teaser/#section-product-info');?>">Thông tin sản phẩm</a>
                    </li>
                    <li class="close-sub-menu" style="display: none;">
                        <a href="<?=site_url('/yadea-g5/teaser/#follow-event-section')?>">Sự kiện ra mắt</a>
                    </li>
                    <li class="close-sub-menu">
                        <a href="<?=site_url('/yadea-g5/teaser/#specs-section')?>">Thông số kỹ thuật</a>
                    </li>
                </ul>

                <!-- Price CTA -->
                <div class="cta-wrapper">
                    <a class="cta apply-info-modal track-this-button" id="apply-information-yadea-g5-header-section">ĐĂNG KÝ</a>
                </div>
                <!-- Price CTA -->
            </div><!-- Price Row -->

        </div>
        <!-- Container -->
    </section>

</header>
<!-- === HEADER - END === -->