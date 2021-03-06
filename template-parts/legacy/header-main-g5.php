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
                    <li class="nav-item <?php if(is_page('products')) echo 'active'; ?>" id="sub-menu-trigger">
                        <a class="nav-link" href="<?php echo site_url('/products'); ?>">Sản phẩm</a>
                    </li>
                    <li class="nav-item <?php if(is_page('/shops')) echo 'active'; ?>">
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
            <li class="nav-item with-sub-menu <?php if(is_page('/products')) echo 'active'; ?>">
                <a class="nav-link" href="<?php echo site_url('/products'); ?>">Sản phẩm</a>

                <?php get_template_part('template-parts/header', 'product-mobile'); ?>

            </li>

            <!-- Shop Searching Page -->
            <li class="nav-item <?php if(is_page('/shops')) echo 'active'; ?>">
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

    <!-- Price Tag -->
    <section class="price-tag">
        <!-- Container -->
        <div class="container">

            <!-- Price Row -->
            <div class="price-row">

                <!-- Features List -->
                <span class="mb-show g5-price-tag-menu">
                    <i class="fa fa-bars open-g5-menu" aria-hidden="true" id="open-g5-menu-btn"></i>
                    <i class="fa fa-times close-g5-menu" aria-hidden="true" id="close-g5-menu-btn"></i>
                </span>

                <ul class="features-list">
                    <li class="feature-item close-g5-menu">
                        <a href="https://yadeavietnam.vn/chi-tiet/yadea-g5/">Thông số kỹ thuật</a>
                    </li>
                    <li class="feature-item close-g5-menu">
                        <a href="https://yadeavietnam.vn/yadea-g5/#g5-intro-video">Sản phẩm</a>
                    </li>
                    <li class="feature-item close-g5-menu">
                      <a href="https://yadeavietnam.vn/yadea-g5/#news-slider-section">Tin tức</a>
                    </li>
<!--                    <li class="feature-item close-g5-menu">-->
<!--                        <span>Giá: <b>39,990,000 VND</b></span>-->
<!--                    </li>-->
                    <li class="overlay close-g5-menu"></li>
                </ul>

                <!-- Price CTA -->
                <div class="price-cta-wrapper">
                    <p class="price-holder">
                        Giá: <span class="price-value">39,990,000 VND</span>
                    </p>
                    <a class="price-cta open-signup-info-modal track-this-button" 
					   id="header-yadea-g5-buynow-btn"
					   style="cursor:pointer;">MUA NGAY</a>
                </div>
                <!-- Price CTA -->
            </div><!-- Price Row -->

        </div>
        <!-- Container -->
    </section>

</header>
<!-- === HEADER - END === -->