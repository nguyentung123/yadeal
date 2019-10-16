<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <?php wp_head(); ?>

</head>
<body <?php body_class("fixed-header with-overlay"); ?>>

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
    <?php
    $productHeaderQueryOptions = array(
        'post_type'       => 'product',
        'post_status'     => 'publish',
        'posts_per_page'  => 6,
        'order'           => 'ASC',
        'orderby'         => 'meta_value_num',
        'meta_key'        => 'product_priority'
    );
    $productHeaderQuery = new WP_Query($productHeaderQueryOptions);

    if($productHeaderQuery->have_posts()): ?>
        <!-- Product Listing Sub Menu -->
        <div class="container sub-menu mb-hide" id="page-sub-menu">

            <!-- Row - Product Wrapper -->
            <div class="sub-menu__wrapper row product-list-layout">

                <?php while ($productHeaderQuery->have_posts()): ?>
                    <?php $productHeaderQuery->the_post(); ?>

                    <!-- Product Item -->
                    <div class="col-md-4 col-6 product-item">

                        <!-- Product Detail Wrapper -->
                        <div class="product-detail">

                            <!-- Color Variation -->
                            <?php $list_color_pro = get_field('product_colors'); ?>
                            <?php if(count($list_color_pro) > 0): ?>
                                <ul class="color-variations horizontal-list text-right">
                                    <?php foreach ($list_color_pro as $color_item): ?>
                                        <li class="color-variations__item <?php echo $color_item['product_color_name'];?> "></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>

                            <!-- Color Variation -->

                            <!-- Product Image -->
                            <div class="product-image">
                                <?php
                                    $url_img = get_theme_file_uri('assets/img/product1.png');
                                    if( has_post_thumbnail() ){
                                        $url_img = get_the_post_thumbnail_url();
                                    } else {
                                        if( $list_color_pro AND $list_color_pro[0]['product_color_image']){
                                            $url_img = $list_color_pro[0]['product_color_image'];
                                        }
                                    }
                                ?>
                                <a href="<?php echo site_url('/products'); ?>">
                                    <img src="<?php echo $url_img;?>" class="img-fluid">
                                </a>
                            </div>
                            <!-- Product Image -->

                            <!-- Product Context -->
                            <div class="product-context text-center">
                                <h4 class="product-name page-desc">
                                    <a href="<?php echo site_url('/products'); ?>">
                                        <?php echo get_field('product_name')?get_field('product_name'):get_the_title();?>
                                    </a>
                                </h4>
                            </div>
                            <!-- Product Context -->

                        </div>
                    </div><!-- Product Item -->

                <?php endwhile; ?>
            </div>
        </div>

    <?php endif; ?>


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
            <li class="nav-item with-sub-menu <?php if(is_page('/shops')) echo 'active'; ?>">
                <a class="nav-link" href="<?php echo site_url('/products'); ?>">Sản phẩm</a>

                <?php if($productHeaderQuery->have_posts()): ?>

                    <i class="fa fa-plus nav-trigger active" aria-hidden="true"></i>
                    <ul class="nav-item__sub-menu">
                        <?php while ($productHeaderQuery->have_posts()): ?>
                            <?php $productHeaderQuery->the_post(); ?>

                            <!-- Product Item -->
                            <li class="product-item">
                                <a href="<?php echo site_url('/products'); ?>">
                                    <?php $list_color_pro = get_field('product_colors'); ?>
                                    <!-- Product image -->
                                    <?php
                                        $url_img = get_theme_file_uri('assets/img/product1.png');
                                        if( has_post_thumbnail() ){
                                            $url_img = get_the_post_thumbnail_url();
                                        } else {
                                            if( $list_color_pro AND $list_color_pro[0]['product_color_image']){
                                                $url_img = $list_color_pro[0]['product_color_image'];
                                            }
                                        }
                                    ?>
                                    <img class="product-image" src="<?php echo $url_img; ?>">


                                    <!-- Color Variation -->
                                    <?php if(count($list_color_pro) > 0): ?>
                                        <ul class="color-variations horizontal-list text-right pr-15">
                                            <?php foreach ($list_color_pro as $color_item): ?>
                                                <li class="color-variations__item <?php echo $color_item['product_color_name'];?> "></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>

                                    <!-- Product Name -->
                                    <h5 class="product-name text-center">
                                        <?php echo get_field('product_name') ? get_field('product_name') : get_the_title(); ?>
                                    </h5>
                                </a>

                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </li>

            <!-- Shop Searching Page -->
            <li class="nav-item <?php if(is_page('/shops')) echo 'active'; ?>">
                <a class="nav-link" href="<?php echo site_url('/shops') ?>">Cửa hàng</a>
            </li>

            <!-- About Us -->
            <li class="nav-item with-sub-menu">
                <a class="nav-link">Về chúng tôi</a>
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
