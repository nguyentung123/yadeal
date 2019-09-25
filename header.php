<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Yadea_Theme
 */

?>

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
                <!--Get Menu-->

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

                <div class="header__menu__btn mb-show-bl" id="mobile-menu-ctrl">
                    <i class="fa fa-bars" aria-hidden="true" id="open-menu-btn"></i>
                    <i class="fa fa-times" aria-hidden="true" id="close-menu-btn"></i>
                </div>
            </div><!-- Header Menu Wrapper -->


        </div><!-- Desktop Menu Row -->

    </div><!-- Container -->

    <!-- Fixed Position Sub Menu -->
    <?php

    $args = array(
        "post_type" => 'product',
        "post_status" => 'publish',
        'posts_per_page'=>-1
    );
    $query=new WP_Query($args);
    if($query->have_posts()):
    ?>
    <div class="container sub-menu mb-hide" id="page-sub-menu">

        <!-- Row - Product Wrapper -->
        <div class="sub-menu__wrapper row">
            <?php $number_show=0; while ($query->have_posts()):$query->the_post(); if($number_show>=6){break;}
                $show = get_field('show_in_menu_header');
                if($show[0]=='show'){
                    $number_show++;
            ?>

            <!-- Product Item -->
            <div class="col-md-4 col-6 sub-menu__wrapper__item">

                <!-- Product Detail Wrapper -->
                <div class="sub-menu__wrapper__item__detail">
                    <!-- Color Variation -->
                    <?php
                        $list_color_pro = get_field('product_colors');
                        if($list_color_pro):
                    ?>

                    <ul class="color-variations horizontal-list text-right pr-15">
                        <?php foreach( $list_color_pro as $color_pro): ?>
                            <li class="color-variations__item <?php echo $color_pro; ?>"></li>
                        <?php endforeach; ?>
                    </ul><!-- Color Variation -->
                    <?php endif;?>

                    <!-- Product Image -->
                    <div class="product-image">
                        <?php
                        $url_img = get_the_post_thumbnail_url($post->ID)? get_the_post_thumbnail_url($post->ID):get_theme_file_uri('assets/img/product1.png');
                        ?>
                        <a href="<?php echo site_url('/products'); ?>"><img src="<?php echo $url_img;?>" class="img-fluid"></a>
                    </div><!-- Product Image -->

                    <!-- Product Context -->
                    <div class="product-context text-center">
                        <h4 class="product-name page-desc">
                            <a href="<?php echo site_url('/products'); ?>">
                                <?php echo get_field('product_name')?get_field('product_name'):get_the_title();?>
                            </a>
                        </h4>
                    </div><!-- Product Context -->
                </div>
            </div><!-- Product Item -->

            <?php
                }
            ?>
            <?php endwhile;?>
        </div>
    </div>
    <?php endif; wp_reset_postdata();?>

    <!-- Fixed Position Sub Menu -->
    <div class="container sub-menu" id="about-us-sub-menu">
        <!-- Row - About Wrapper -->
        <div class="sub-menu__wrapper row">
            <!-- About Item -->
            <div class="col-md-4 col-6 sub-menu__wrapper__item">

                <!-- About Detail Wrapper -->
                <div class="sub-menu__wrapper__item__detail">
                    <a href="<?php echo site_url('/about') ?>">
                        <div class="about-us__thumbnail">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/about-thumbnail.jpg">
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
                    <a href="<?php echo site_url('/course') ?>">
                        <div class="about-us__thumbnail">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/history-thumbnail.jpg">
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
                    <a href="<?php echo site_url('/supplier') ?>">
                        <div class="about-us__thumbnail">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/supplier-thumbnail.jpg">
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
        <div class="mobile-menu__overlay"></div>
        <ul class="nav light-gray-bg">
            <li class="nav-item with-sub-menu <?php if(is_page('/shops')) echo 'active'; ?>">
                <a class="nav-link" href="<?php echo site_url('/products'); ?>">Sản phẩm</a>
                <i class="fa fa-plus nav-trigger active" aria-hidden="true"></i>
                <?php

                $args = array(
                    "post_type" => 'product',
                    "post_status" => 'publish',
                    'posts_per_page'=>-1
                );
                $query=new WP_Query($args);
                if($query->have_posts()):
                ?>
                <ul class="nav-item__sub-menu">
                    <?php $number_show=0; while ($query->have_posts()):$query->the_post(); if($number_show>=6){break;}
                        $show = get_field('show_in_menu_header');
                        if($show[0]=='show'){
                        $number_show++;
                    ?>
                    <!-- Product Item -->
                    <li class="product-item">
                        <a href="<?php echo site_url('/products'); ?>">
                            <!-- Product image -->
                            <?php
                            $url_img = get_the_post_thumbnail_url($post->ID)? get_the_post_thumbnail_url($post->ID):get_theme_file_uri('assets/img/product1.png');
                            ?>
                            <img class="product-image" src="<?php echo $url_img; ?>">
                            <!-- Color Variation -->
                            <?php
                            $list_color_pro = get_field('product_colors');
                            if($list_color_pro):
                                ?>
                                <ul class="color-variations horizontal-list text-right pr-15">
                                    <?php foreach( $list_color_pro as $color_pro): ?>
                                        <li class="color-variations__item <?php echo $color_pro; ?>"></li>
                                    <?php endforeach; ?>
                                </ul><!-- Color Variation -->
                            <?php endif;?>

                            <!-- Product Name -->
                            <h5 class="product-name text-center"><?php echo get_field('product_name')?get_field('product_name'):get_the_title();?></h5>
                        </a>

                    </li>
                            <?php
                        } endwhile;?>
                </ul>
                <?php endif; wp_reset_postdata();?>
            </li>
            <li class="nav-item <?php if(is_page('/shops')) echo 'active'; ?>">
                <a class="nav-link" href="<?php echo site_url('/shops') ?>">Cửa hàng</a>
            </li>
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
            <li class="nav-item <?php if(is_page('support')) echo 'active'; ?>">
                <a class="nav-link" href="<?php echo site_url('/support') ?>">Hỗ trợ</a>
            </li>
        </ul>
    </div>

</header>
<!-- === HEADER - END === -->
