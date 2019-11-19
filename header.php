<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta property="fb:app_id" content="575722139842209" />

    <?php wp_head(); ?>

    <!-- META DATA -->
    <?php if(is_page()): ?>
        <?php if(get_field('page_meta_title')): ?>
            <title><?php echo get_field('page_meta_title'); ?></title>
            <meta property="og:title" content="<?php echo get_field('page_meta_title'); ?>">
        <?php else: ?>
            <title><?php echo get_the_title() . ' | YADEA - ' .  get_bloginfo( 'description'); ?></title>
            <meta property="og:title" content="<?php echo get_the_title() . ' | YADEA - ' .  get_bloginfo( 'description'); ?>">
        <?php endif; ?>
        <meta property="og:type" content="website">
        <?php if(get_field('page_description')): ?>
            <meta name="description" content="<?php echo get_field('page_description'); ?>">
            <meta property="og:description" content="<?php echo get_field('page_description'); ?>">
        <?php endif; ?>

        <?php if(get_field('page_keywords')): ?>
            <meta name="keyword" content="<?php echo get_field('page_keywords'); ?>">
        <?php endif; ?>

        <meta property="og:url" content="<?php echo get_permalink(); ?>">

        <?php if(has_post_thumbnail()): ?>
            <meta property="og:image" content="<?php echo get_the_post_thumbnail_url(); ?>">
            <meta property="og:image:secure_url" content="<?php echo get_the_post_thumbnail_url(); ?>">
        <?php else: ?>
            <meta property="og:image" content="<?php echo get_theme_file_uri('assets/img/fbshare.png'); ?>">
            <meta property="og:image:secure_url" content="<?php echo get_theme_file_uri('assets/img/fbshare.png'); ?>">
        <?php endif; ?>
    <?php endif; ?>

    <?php if(is_singular('product')): ?>
        <title><?php echo get_the_title() . ' | YADEA - ' .  get_bloginfo( 'description'); ?></title>
        <meta property="og:title" content="<?php echo get_the_title() . ' | YADEA - ' .  get_bloginfo( 'description'); ?>">

        <?php if(get_field('product_description')): ?>
            <meta name="description" content="<?php echo get_field('product_description'); ?>">
            <meta property="og:description" content="<?php echo get_field('product_description'); ?>">
        <?php endif; ?>

        <?php if(get_field('product_keywords')): ?>
            <meta name="keyword" content="<?php echo get_field('product_keywords'); ?>">
        <?php endif; ?>

        <?php if(has_post_thumbnail()): ?>
            <meta property="og:image" content="<?php echo get_the_post_thumbnail_url(); ?>">
            <meta property="og:image:secure_url" content="<?php echo get_the_post_thumbnail_url(); ?>">
        <?php else: ?>
            <meta property="og:image" content="<?php echo get_theme_file_uri('assets/img/fbshare.png'); ?>">
            <meta property="og:image:secure_url" content="<?php echo get_theme_file_uri('assets/img/fbshare.png'); ?>">
        <?php endif; ?>
    <?php endif; ?>

    <?php if(is_404()): ?>
        <title><?php echo 'Không tìm thấy trang | YADEA - ' .  get_bloginfo( 'description'); ?></title>
        <meta property="og:title" content="<?php echo 'Không tìm thấy trang | YADEA - ' .  get_bloginfo( 'description'); ?>">
        <meta property="og:image" content="<?php echo get_theme_file_uri('assets/img/fbshare.png'); ?>">
        <meta property="og:image:secure_url" content="<?php echo get_theme_file_uri('assets/img/fbshare.png'); ?>">
    <?php endif; ?>

    <!-- META DATA -->

    <!-- TRACKING CODE -->
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PM2J8PG');</script>
    <!-- End Google Tag Manager -->


    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '528659447702850');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=528659447702850&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
    <!-- TRACKING CODE - END -->
</head>
<body <?php body_class("fixed-header with-overlay"); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PM2J8PG"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- ====== LOADING OVERLAY ===== -->
<div id="loading-overlay">
    <img src="<?php echo get_theme_file_uri('assets/img/logo.png'); ?>" class="loading-image">
</div>

<!-- ====== MAIN CONTENT ====== -->

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

</header>
<!-- === HEADER - END === -->
