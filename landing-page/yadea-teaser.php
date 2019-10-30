<?php
/*
Template Name: Yadea G5 Teaser
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Yadea Teaser Page</title>

    <!-- META DATA -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="<?php echo get_theme_file_uri('landing-page/yadea-teaser/'); ?>" target="_blank">
    <!-- META DATA - END -->

    <!-- STYLESHEET -->
    <!-- Vendor -->
    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Semi+Expanded:100,200,300,400,500,600,700,800,900&amp;subset=vietnamese" rel="stylesheet">

    <!-- Slick Slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">

    <!-- Yadea Main Stylesheet -->
    <link rel="stylesheet" href="css/vendors/slick.css">
    <link rel="stylesheet" href="css/styles-main.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- STYLESHEET - END -->

    <!-- TRACKING CODE -->
    <!-- TRACKING CODE - END -->
</head>
<body class="show-overlay">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0&appId=972749199527382&autoLogAppEvents=1"></script>

<!-- === HEADER === -->
<header id="page-header">

    <!-- Container -->
    <div class="container header">
        <!-- Desktop Menu Row -->
        <div class="row">

            <!-- Header Logo -->
            <div class="col-lg-2 col-6 header__logo">
                <a href="index.html">
                    <img draggable=false draggable="false" src="img/logo.png"
                         class="header__logo__image">
                </a>
            </div><!-- Header Logo -->

            <!-- Header Menu Wrapper -->
            <div class="col-lg-10 col-6 header__menu">
                <ul class="nav justify-content-end mb-hide">
                    <li class="nav-item" id="sub-menu-trigger">
                        <a class="nav-link" href="products.html">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop-listing.html">Cửa hàng</a>
                    </li>
                    <li class="nav-item" id="about-us-sub-menu-trigger">
                        <a class="nav-link" href="about.html">Về chúng tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="support.html">Hỗ trợ</a>
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
    <div class="container sub-menu" id="about-us-sub-menu">
        <!-- Row - About Wrapper -->
        <div class="sub-menu__wrapper row">
            <!-- About Item -->
            <div class="col-md-4 col-6 sub-menu__wrapper__item">

                <!-- About Detail Wrapper -->
                <div class="sub-menu__wrapper__item__detail">
                    <a href="about.html">
                        <div class="about-us__thumbnail">
                            <img draggable=false draggable="false" class="img-fluid" src="img/about-thumbnail.jpg">
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
                    <a href="course.html">
                        <div class="about-us__thumbnail">
                            <img draggable=false draggable="false" class="img-fluid" src="img/history-thumbnail.jpg">
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
                    <a href="supplier.html">
                        <div class="about-us__thumbnail">
                            <img draggable=false draggable="false" class="img-fluid" src="img/supplier-thumbnail.jpg">
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
            <li class="nav-item">
                <a class="nav-link">Sản phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="products.html">Cửa hàng</a>
            </li>
            <li class="nav-item with-sub-menu active">
                <a class="nav-link">Về chúng tôi</a>
                <i class="fa fa-plus nav-trigger active" aria-hidden="true"></i>
                <ul class="nav-item__sub-menu">
                    <!-- About Item -->
                    <li class="about-item">
                        <a href="about.html">
                            <p class="sub-title">Giới thiệu Yadea</p>
                        </a>
                    </li>

                    <!-- About Item -->
                    <li class="about-item">
                        <a href="course.html">
                            <p class="sub-title">Quá trình phát triển</p>
                        </a>
                    </li>

                    <!-- About Item -->
                    <li class="about-item">
                        <a href="supplier.html">
                            <p class="sub-title">Đối tác hàng đầu</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="support.html">Hỗ trợ</a>
            </li>
        </ul>
    </div>

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
                        <a href="#section-product-info">Thông tin sản phẩm</a>
                    </li>
                    <li class="close-sub-menu">
                        <a href="#follow-event-section">Sự kiện ra mắt</a>
                    </li>
                    <li class="close-sub-menu">
                        <a href="#specs-section">Thông số kỹ thuật</a>
                    </li>
                </ul>

                <!-- Price CTA -->
                <div class="cta-wrapper">
                    <a class="cta" href="#">MUA NGAY</a>
                </div>
                <!-- Price CTA -->
            </div><!-- Price Row -->

        </div>
        <!-- Container -->
    </section>
</header>
<!-- === HEADER - END === -->

<!-- === PAGE OVERLAY === -->
<div class="page-overlay">
    <img draggable=false src="img/logo.png">
</div>
<!-- === PAGE OVERLAY - END === -->

<!-- === MAIN CONTENT === -->
<div class="page-wrapper" id="yadea-teaser-page">

    <!-- Section Banner -->
    <section class="section banner-section">

        <div class="screen-wrapper">
            <!-- Heading -->
            <div class="banner-heading">

                <!-- Bike Image Holder -->
                <div class="bike-img-holder">

                    <!-- Image 1 -->
                    <div class="image-1">
                        <img draggable=false src="img/banner-bg.png">
                    </div>

                    <!-- Image 2 -->
                    <div class="image-2">
                        <img draggable=false src="img/banner-bg-2.png">
                    </div>

                    <!-- Image 3 -->
                    <div class="image-3">
                        <img draggable=false src="img/banner-bg-3.png">
                    </div>
                </div>
                <!-- Bike Image Holder END -->

                <div class="heading-title-holder">
                    <img draggable=false class="mb-hide" src="img/banner-title.png">
                    <img draggable=false class="mb-show" src="img/banner-title-mb.png">
                </div>
            </div>
            <!-- Heading End -->

            <!-- Welcome Text -->
            <div class="banner-welcome">
                <h3 class="welcome-title">
                    YADEA G5 SẮP RA MẮT
                </h3>

                <h4 class="welcome-date">
                    20.11.2019
                </h4>
            </div>
            <!-- Welcome Text - End -->

            <!-- Clock -->
            <div class="clock-holder" id="countdown-clock">
                <div class="time-value-holder days">
                    <div class="effect-holder">
                        <svg viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg">
                            <circle class="background-circle"
                                    cx="150" cy="150" r="135"/>
                            <circle class="progress-circle"
                                    cx="150" cy="150" r="135"/>
                        </svg>
                    </div>
                    <div class="time-label-holder">
                        <span class="time-value" id="date-holder">00</span>
                        <span class="time-context">Ngày</span>
                    </div>
                </div>
                <div class="time-value-holder hours">
                    <div class="effect-holder">
                        <svg viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg">
                            <circle class="background-circle"
                                    cx="150" cy="150" r="135"/>
                            <circle class="progress-circle"
                                    cx="150" cy="150" r="135"/>
                        </svg>
                    </div>
                    <div class="time-label-holder">
                        <span class="time-value" id="hours-holder">00</span>
                        <span class="time-context">Giờ</span>
                    </div>
                </div>
                <div class="time-value-holder minutes">
                    <div class="effect-holder">
                        <svg viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg">
                            <circle class="background-circle"
                                    cx="150" cy="150" r="135"/>
                            <circle class="progress-circle"
                                    cx="150" cy="150" r="135"/>
                        </svg>
                    </div>
                    <div class="time-label-holder">
                        <span class="time-value" id="minutes-holder">00</span>
                        <span class="time-context">Phút</span>
                    </div>
                </div>
            </div>
            <!-- Clock - End -->

            <!-- Apply Information -->
            <div class="apply-information-form">
                <a class="apply-info-modal">
                    ĐĂNG KÝ NHẬN THÔNG TIN <i class="fa fa-caret-right" aria-hidden="true"></i>
                </a>
                <a class="more-detail">
                    Chi tiết
                </a>
            </div>
            <!-- Apply Information - END -->

            <span class="arrow-effect">
            <img draggable=false src="img/icons/arrow-down.svg">
            <img draggable=false src="img/icons/arrow-down.svg">
            <img draggable=false src="img/icons/arrow-down.svg">
            <img draggable=false src="img/icons/arrow-down.svg">
        </span>
        </div>

    </section>
    <!-- Section Banner - END -->


    <!-- Section Intro Clip -->
    <section class="section section-intro-clip">

        <!-- Background Holder -->
        <div class="bg-holder">
            <img draggable=false src="img/video-thumbnail.jpg" alt="">
        </div>
        <!-- Background Holder END -->

        <!-- Main Content -->
        <div class="main-content">
            <h3 class="title">
                KHÁM PHÁ ĐIỀU BẤT NGỜ
            </h3>
            <a class="play-btn play-modal-video" data-video-id="L3GTusyCP-Y">
                <img draggable=false src="img/icons/play-icon.png" class="mb-hide">
                <img draggable=false src="img/icons/play-icon2.png" class="mb-show">
            </a>
        </div>
        <!-- Main Content - END -->
    </section>
    <!-- Section Intro Clip - END -->


    <!-- More Detail Date -->
    <section class="section section-info-date" id="section-product-info">

        <!-- First Layer -->
        <div class="first-layer">
            <!-- Background Holder -->
            <div class="bg-holder">
                <img draggable=false src="img/bike-bg.jpg" class="mb-hide">
                <img draggable=false src="img/bike-bg-mb.jpg" class="mb-show">
            </div>
            <!-- Background Holder END -->
        </div>

        <!-- Three Column Effect Layout Desktop -->
        <div class="three-column-layout mb-hide">

            <!-- Layout Item - Design -->
            <div class="layout-item design-layout">

                <!-- Title -->
                <h3 class="layout-title">
                    THIẾT KẾ CAO CẤP
                </h3>

                <!-- Column Holder -->
                <div class="column-holder">

                    <!-- Left -->
                    <div class="left">
                        <span class="column-label">
                            Màn Hình LCD 7"
                        </span>
                        <div class="img-holder">
                            <img draggable=false src="img/intro/left-control2.png">
                        </div>
                    </div>

                    <!-- Center -->
                    <div class="center">
                        <div class="clip-wrapper">
                            <span class="column-label">
                                Cá Tính Dẫn Đầu Xu Hướng
                            </span>
                            <div class="img-holder overflow-visible">
                                <img draggable=false src="img/intro/center-bike2.png" draggable="false">
                            </div>
                        </div>
                    </div>

                    <!-- Right -->
                    <div class="right">
                        <span class="column-label">
                            Đen LED Toàn Xe
                        </span>
                        <div class="img-holder">
                            <div class="bike-holder">
                                <img draggable=false src="img/intro/right-light2.png">
                            </div>
                            <div class="effect-holder">
                                <img draggable=false src="img/intro/right-light2-effect.png">
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Column Holder - END -->
            </div>

            <!-- Layout Item - Smart -->
            <div class="layout-item smart-layout">

                <!-- Title -->
                <h3 class="layout-title">
                    THÔNG MINH CHUẨN THỜI ĐẠI SỐ
                </h3>

                <!-- Column Holder -->
                <div class="column-holder">

                    <!-- Left -->
                    <div class="left">
                        <span class="column-label">
                            Mở Khóa cảm Ứng ITO 1 Chạm
                        </span>
                        <div class="img-holder">
                            <img draggable=false src="img/intro/left-lock2.png">
                        </div>
                    </div>

                    <!-- Center -->
                    <div class="center">
                        <div class="clip-wrapper">
                            <span class="column-label">
                                Định vị GPS
                            </span>
                            <div class="img-holder">
                                <div class="map-holder">
                                    <img draggable=false src="img/intro/center-map2.png">
                                </div>
                                <div class="pin-holder">
                                    <img draggable=false src="img/intro/center-map2-pin.png">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right -->
                    <div class="right">
                        <span class="column-label">
                            Kiểm Tra<br>Tình Trạng Xe Qua Apps
                        </span>
                        <div class="img-holder">
                            <img draggable=false src="img/intro/right-phone.png">
                        </div>
                    </div>

                </div>
                <!-- Column Holder - END -->
            </div>

            <!-- Layout Item - Performance -->
            <div class="layout-item performance-layout">

                <!-- Title -->
                <h3 class="layout-title">
                    HIỆU NĂNG MẠNH MẼ
                </h3>

                <!-- Column Holder -->
                <div class="column-holder">

                    <!-- Left -->
                    <div class="left">
                        <span class="column-label">
                            Động cơ độc quyền GTR 3.0
                        </span>
                        <div class="img-holder">
                            <div class="bike-holder">
                                <img draggable=false src="img/intro/left-engine3.png">
                            </div>
                            <div class="engine-holder">
                                <img draggable="false" src="img/intro/left-engine-highlight.png">
                            </div>
                        </div>
                    </div>

                    <!-- Center -->
                    <div class="center">
                        <div class="clip-wrapper">
                            <span class="column-label">
                                Pin Lithium Thế Hệ Mới
                            </span>
                            <div class="img-holder">
                                <div class="battery-holder">
                                    <img draggable=false src="img/intro/center-battery2.png">
                                </div>
                                <div class="effect-holder">
                                    <img draggable=false src="img/intro/battery-effect.png">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right -->
                    <div class="right">
                        <span class="column-label">
                            Chống nước IPX7
                        </span>
                        <div class="img-holder">
                            <img draggable=false src="img/intro/right-water.png">
                        </div>
                    </div>

                </div>
                <!-- Column Holder - END -->

            </div>

            <!-- Final Page -->
            <div class="final-page"
                 style="background-image: url('img/bike-blur-bg.jpg');">
                <img draggable=false class="mold" src="img/bike-blur-bg.jpg">

                <!-- Main Content -->
                <div class="main-content">
                    <h3 class="line-1">
                        Thông tin chi tiết sẽ có vào ngày
                    </h3>
                    <h4 class="line-2">
                        20.11.2019
                    </h4>
                </div>
            </div>
        </div>

        <!-- Three Column Effect Layout Mobile -->
        <div class="three-column-layout-mb mb-show">

            <!-- Layout Item 1 -->
            <div class="layout-item performance-layout">

                <!-- Mold -->
                <div class="mold">
                    <img draggable=false src="img/bike-blur-bg-mb.png">
                </div>

                <!-- Title -->
                <h3 class="layout-title">
                    HIỆU NĂNG MẠNH MẼ
                </h3>

                <!-- Column Holder -->
                <div class="column-holder">

                    <!-- Left -->
                    <div class="left">
                        <span class="column-label">
                            Pin Lithium Panasonic<br>Thế Hệ Mới
                        </span>
                        <div class="img-holder">
                            <div class="battery-holder">
                                <img draggable=false src="img/intro/center-battery2.png">
                            </div>
                            <div class="effect-holder">
                                <img draggable=false src="img/intro/battery-effect.png">
                            </div>
                        </div>
                    </div>

                    <!-- Center -->
                    <div class="center">
                        <div class="clip-wrapper">
                            <span class="column-label">
                                Động cơ độc quyền <br>GTR 3.0
                            </span>
                            <div class="img-holder">
                                <div class="bike-holder">
                                    <img draggable=false src="img/intro/left-engine3.png">
                                </div>
                                <div class="engine-holder">
                                    <img draggable="false" src="img/intro/left-engine-highlight.png">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right -->
                    <div class="right">
                        <span class="column-label">
                            Chống nước IPX7
                        </span>
                        <div class="img-holder">
                            <img draggable=false src="img/intro/right-water.png">
                        </div>
                    </div>

                </div>
                <!-- Column Holder - END -->
            </div>

            <!-- Layout Item 2 -->
            <div class="layout-item smart-layout">
                <!-- Mold -->
                <div class="mold">
                    <img draggable=false src="img/bike-blur-bg-mb.png">
                </div>

                <!-- Title -->
                <h3 class="layout-title">
                    THÔNG MINH CHUẨN THỜI ĐẠI SỐ
                </h3>

                <!-- Column Holder -->
                <div class="column-holder">

                    <!-- Left -->
                    <div class="left">
                        <span class="column-label">
                            Mở Khóa cảm Ứng ITO<br> 1 Chạm
                        </span>
                        <div class="img-holder">
                            <img draggable=false src="img/intro/left-lock.png">
                        </div>
                    </div>

                    <!-- Center -->
                    <div class="center">
                        <div class="clip-wrapper">
                            <span class="column-label">
                                Định vị GPS
                            </span>
                            <div class="img-holder">
                                <div class="map-holder">
                                    <img draggable=false src="img/intro/center-map2.png">
                                </div>
                                <div class="pin-holder">
                                    <img draggable=false src="img/intro/center-map2-pin.png">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right -->
                    <div class="right">
                        <span class="column-label">
                            Kiểm Tra<br>Tình Trạng Xe Qua Apps
                        </span>
                        <div class="img-holder">
                            <img draggable=false src="img/intro/right-phone-mb.png">
                        </div>
                    </div>
                </div>
                <!-- Column Holder - END -->
            </div>

            <!-- Layout Item 3 -->
            <div class="layout-item design-layout">
                <!-- Mold -->
                <div class="mold">
                    <img draggable=false src="img/bike-blur-bg-mb.png">
                </div>

                <!-- Title -->
                <h3 class="layout-title">
                    THIẾT KẾ CAO CẤP
                </h3>

                <!-- Column Holder -->
                <div class="column-holder">

                    <!-- Left -->
                    <div class="left">
                        <span class="column-label">
                            Màn Hình LCD 7"
                        </span>
                        <div class="img-holder">
                            <img draggable=false src="img/intro/left-control.png">
                        </div>
                    </div>

                    <!-- Center -->
                    <div class="center">
                        <div class="clip-wrapper">
                            <span class="column-label">
                                Cá Tính <br>Dẫn Đầu Xu Hướng
                            </span>
                            <div class="img-holder">
                                <img draggable=false src="img/intro/center-bike.png">
                            </div>
                        </div>
                    </div>

                    <!-- Right -->
                    <div class="right">
                        <span class="column-label">
                            Đen LED Toàn Xe
                        </span>
                        <div class="img-holder">
                            <div class="bike-holder">
                                <img draggable=false src="img/intro/right-light2.png">
                            </div>
                            <div class="effect-holder">
                                <img draggable=false src="img/intro/right-light2-effect.png">
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Column Holder - END -->
            </div>

            <!-- Final Page -->
            <div class="final-page"
                 style="background-image: url('img/bike-blur-bg-mb.jpg');">
                <img draggable=false class="mold" src="img/bike-blur-bg-mb.jpg">

                <!-- Main Content -->
                <div class="main-content">
                    <h3 class="line-1">
                        Thông tin chi tiết sẽ có vào ngày
                    </h3>
                    <h4 class="line-2">
                        00.00.2019
                    </h4>
                </div>
            </div>
        </div>

    </section>
    <!-- More Detail Date - END -->


    <!-- Auto Play Clip -->
    <section class="section section-autoplay-clip">
        <div class="video-holder">
            <video id="vid" playsinline="" autoplay="" muted="" loop="">
                <source id="mp4" src="video/intro-g5.mp4" type="video/mp4">
            </video>
        </div>
    </section>
    <!-- Auto Play Clip - END -->


    <!-- Follow Event -->
    <section class="section section-follow-event" id="follow-event-section">

        <!-- Background Holder -->
        <div class="bg-holder">
            <img draggable=false src="img/apply-attendant-bg.jpg" class="mb-hide">
            <img draggable=false src="img/apply-attendant-bg-mb.jpg" class="mb-show">
        </div>
        <!-- Background Holder - END -->

        <!-- Main Content -->
        <div class="main-content">
            <h3 class="title">
                THEO DÕI SỰ KIỆN <br class="mb-show">ĐỂ CẬP NHẬT THÔNG TIN
            </h3>
            <a class="cta-holder">
                Theo dõi ngay <span class="arrow-entity">&#8811;</span>
            </a>
        </div>
        <!-- Main Content - END -->

    </section>
    <!-- Follow Event - END -->


    <!-- Prize Detail Section -->
    <section class="section prize-detail">

        <!-- Container -->
        <div class="container">

            <!-- Heading -->
            <div class="prize-heading">
                <h3 class="title">
                    XEM LIVESTREAM CHỤP HÌNH G5<br>
                    NHẬN NGAY QUÀ KHỦNG
                </h3>
            </div>
            <!-- Heading - END -->


            <!-- Prize List -->
            <div class="prize-list-layout">

                <!-- Left Side, Yadea Coupon -->
                <div class="left-prize">

                    <!-- Prize Holder -->
                    <div class="prize-holder">
                        <div class="img-holder back">
                            <img draggable=false src="img/yadea-ticket1.png">
                        </div>

                        <div class="img-holder front">
                            <img draggable=false src="img/yadea-ticket2.png">
                        </div>
                    </div>
                    <!-- Prize Holder -->

                    <!-- Detail -->
                    <div class="detail">
                        <span class="context">
                            <span class="highlight">50</span> phiếu mua hàng
                        </span>
                        <span class="context">
                            trị giá <span class="highlight small">5.000.000 đ</span>
                        </span>
                    </div>
                    <!-- Detail -->

                </div>
                <!-- Left Side, Yadea Coupon - END -->


                <!-- Center OPPO Reno 2 -->
                <div class="center-prize">

                    <!-- Prize Image Holder -->
                    <div class="prize-holder">
                        <div class="img-holder">
                            <img draggable=false src="img/oppo-reno2.png" class="mb-hide">
                            <img draggable=false src="img/oppo-reno-mb2.png" class="mb-show">
                        </div>

                        <div class="img-effect-holder">
                            <img draggable=false src="img/live-event2.jpg" class="mb-hide">
                            <img draggable=false src="img/live-event2-mb.jpg" class="mb-show">
                        </div>
                    </div>
                    <!-- Prize Holder -->

                    <!-- Detail -->
                    <div class="detail">
                        <span class="context">
                            <span class="highlight">10</span> OPPO RENO2
                        </span>
                    </div>
                    <!-- Detail END -->
                </div>
                <!-- Center OPPO Reno 2 - END -->


                <!-- Right Side, CGV Ticket -->
                <div class="right-prize">

                    <!-- Prize Holder -->
                    <div class="prize-holder">
                        <div class="img-holder back">
                            <img draggable=false src="img/galaxy-ticket1.png">
                        </div>

                        <div class="img-holder front">
                            <img draggable=false src="img/galaxy-ticket2.png">
                        </div>
                    </div>
                    <!-- Prize Holder -->

                    <!-- Detail -->
                    <div class="detail">
                        <span class="context">
                            <span class="highlight">50</span> cặp vé xem phim CGV
                        </span>
                    </div>
                    <!-- Detail -->

                </div>
                <!-- Right Side, CGV Ticket - END -->


            </div>
            <!-- Prize List - END -->

            <!-- Prize Detail On Mobile -->
            <div class="mb-show prize-detail-mb">
                <p class="context">
                    <span class="highlight">10</span> OPPO RENO2
                </p>

                <p class="context">
                    <span class="highlight">50</span>
                    phiếu mua hàng trị giá <span class="highlight small">5.000.000 đ</span>
                </p>
                <p class="context">
                    <span class="highlight">50</span> cặp vé xem phim CGV
                </p>
            </div>

            <!-- CTA Holder -->
            <div class="cta-holder txt-center">
                <a class="cta">
                    <span class="context">
                        Xem thể lệ và tham gia ngay <span class="arrow-entity">&#8811;</span>
                    </span>
                </a>
            </div>
            <!-- CTA Holder -->
        </div>
        <!-- Container - END -->

    </section>
    <!-- Prize Detail Section - END -->


    <!-- Spec and Color Slider -->
    <section class="section section-spec-slider" id="specs-section">
        <!-- Container -->
        <div class="container">

            <!-- Color Slider Holder -->
            <div class="color-slider-holder" id="g5-color-slider">

                <!-- Color Variation Slider -->
                <ul class="g5-color-listing">

                    <!-- Color Item -->
                    <li class="g5-color-item gray">
                        <img draggable=false src="img/bike-gray.png">
                        <div class="shadow-effect"></div>
                    </li>

                    <!-- Color Item -->
                    <li class="g5-color-item black">
                        <img draggable=false src="img/bike-black.png">
                        <div class="shadow-effect"></div>
                    </li>

                    <!-- Color Item -->
                    <li class="g5-color-item white">
                        <img draggable=false src="img/bike-white.png">
                        <div class="shadow-effect"></div>
                    </li>

                    <!-- Color Item -->
                    <li class="g5-color-item red">
                        <img draggable=false src="img/bike-red.png">
                        <div class="shadow-effect"></div>
                    </li>

                </ul>
                <!-- Color Variation Slider -->

                <div class="custom-button">
                    <li class="slider-button button-gray active"></li>
                    <li class="slider-button button-black"></li>
                    <li class="slider-button button-white"></li>
                    <li class="slider-button button-red"></li>
                </div>
            </div>
            <!-- Color Slider Holder - END -->

            <!-- Prize Estimation -->
            <div class="prize-estimation">
                <a class="price-holder">
                    Giá dự kiến: <span class="highlight">00.000.000 <span class="small">vnđ</span></span>
                </a>
            </div>
            <!-- Prize Estimation - END -->


            <!-- Spec Estimation -->
            <div class="spec-estimation">
                <h2 class="spec-title">THÔNG SỐ DỰ KIẾN <br class="mb-show">YADEA G5</h2>

                <!-- Spec List -->
                <div class="spec-list">
                    <!-- Spec Item -->
                    <div class="spec-row">
                        <span class="label">Generated</span>
                        <span class="value">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do"</span>
                    </div>

                    <!-- Spec Item -->
                    <div class="spec-row">
                        <span class="label">Generated</span>
                        <span class="value">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do"</span>
                    </div>

                    <!-- Spec Item -->
                    <div class="spec-row">
                        <span class="label">Generated</span>
                        <span class="value">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do"</span>
                    </div>

                    <!-- Spec Item -->
                    <div class="spec-row">
                        <span class="label">Generated</span>
                        <span class="value">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do"</span>
                    </div>

                    <!-- Spec Item -->
                    <div class="spec-row">
                        <span class="label">Generated</span>
                        <span class="value">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do"</span>
                    </div>

                    <!-- Spec Item -->
                    <div class="spec-row">
                        <span class="label">Generated</span>
                        <span class="value">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do"</span>
                    </div>
                </div>


            </div>
            <!-- Spec Estimation - END -->
        </div>
        <!-- Container - END -->
    </section>
    <!-- Spec and Color Slider - END -->


    <!-- News Slider -->
    <section class="section section-news-slider">

        <!-- Container -->
        <div class="container">

            <!-- News Holder -->
            <div class="news-layout-holder">

                <!-- News List -->
                <ul class="news-list">

                    <!-- News Item -->
                    <li class="news-item">
                        <div class="content-holder">
                            <!-- Thumbnail -->
                            <div class="thumbnail-holder">
                                <a class="news-link-wrapper">
                                    <img draggable=false src="img/news-thumnail.jpg">
                                </a>
                            </div>

                            <!-- Context -->
                            <div class="context">
                                <a class="news-link-wrapper">
                                    <h3 class="title">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </li>

                    <!-- News Item -->
                    <li class="news-item">
                        <div class="content-holder">
                            <!-- Thumbnail -->
                            <div class="thumbnail-holder">
                                <a class="news-link-wrapper">
                                    <img draggable=false src="img/news-thumnail.jpg">
                                </a>
                            </div>

                            <!-- Context -->
                            <div class="context">
                                <a class="news-link-wrapper">
                                    <h3 class="title">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </li>

                    <!-- News Item -->
                    <li class="news-item">
                        <div class="content-holder">
                            <!-- Thumbnail -->
                            <div class="thumbnail-holder">
                                <a class="news-link-wrapper">
                                    <img draggable=false src="img/news-thumnail.jpg">
                                </a>
                            </div>

                            <!-- Context -->
                            <div class="context">
                                <a class="news-link-wrapper">
                                    <h3 class="title">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </li>

                    <!-- News Item -->
                    <li class="news-item">
                        <div class="content-holder">
                            <!-- Thumbnail -->
                            <div class="thumbnail-holder">
                                <a class="news-link-wrapper">
                                    <img draggable=false src="img/news-thumnail.jpg">
                                </a>
                            </div>

                            <!-- Context -->
                            <div class="context">
                                <a class="news-link-wrapper">
                                    <h3 class="title">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- News List -->

            </div>
            <!-- News Holder - END -->

        </div>
        <!-- Container - END -->

    </section>
    <!-- News Slider - END -->


    <!-- Social Comments -->
    <section class="social-comment">
        <!-- Container -->
        <div class="container small">
            <div class="fb-comments" data-href="https://yadeavietnam.vn/" data-width="100%" data-numposts="5"></div>
        </div>
        <!-- Container -->
    </section>
    <!-- Social Comments - END -->

    <!-- === FOOTER === -->
    <footer class="footer light-gray-bg pt-90" id="page-footer">

        <!-- Container -->
        <div class="container footer__body">

            <!-- Row -->
            <div class="row main-content">

                <!-- Footer Content Column -->
                <div class="col-lg-3 col-12">

                    <!-- Footer Column Title -->
                    <h3 class="footer__body__col-title">
                        Xe máy điện thông minh
                    </h3><!-- Footer Column Title -->

                    <!-- Footer Link List -->
                    <div class="menu-xe-may-dien-thong-minh-container"><ul id="menu-xe-may-dien-thong-minh" class="footer__body__links"><li id="menu-item-407" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-407 footer__body__links__item"><a href="https://nihato2.com/chi-tiet/yadea-g5/">Yadea G5</a></li>
                            <li id="menu-item-408" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-408 footer__body__links__item"><a href="https://nihato2.com/chi-tiet/yadea-eb128/">Yadea EB128</a></li>
                            <li id="menu-item-409" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-409 footer__body__links__item"><a href="https://nihato2.com/chi-tiet/yadea-c-umi/">Yadea C-Umi</a></li>
                            <li id="menu-item-410" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-410 footer__body__links__item"><a href="https://nihato2.com/chi-tiet/yadea-z3/">Yadea Z3</a></li>
                        </ul></div>                <!-- Footer Link List -->

                </div><!-- Footer Content Column -->

                <!-- Footer Content Column -->
                <div class="col-lg-3 col-12">

                    <!-- Footer Column Title -->
                    <h3 class="footer__body__col-title">
                        Hỗ trợ
                    </h3><!-- Footer Column Title -->

                    <!-- Footer Links List -->
                    <div class="menu-menu-footer-support-container"><ul id="menu-menu-footer-support" class="footer__body__links"><li id="menu-item-142" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-142 footer__body__links__item"><a href="https://nihato2.com/support/tim-cua-hang/">Tìm cửa hàng</a></li>
                            <li id="menu-item-143" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-143 footer__body__links__item"><a href="https://nihato2.com/support/bao-hanh/">Bảo hành</a></li>
                            <li id="menu-item-144" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-144 footer__body__links__item"><a href="https://nihato2.com/support/huong-dan-su-dung/">Hướng dẫn sử dụng</a></li>
                        </ul></div>                <!-- Footer Links List -->

                </div><!-- Footer Content Column -->

                <!-- Footer Content Column -->
                <div class="col-lg-3 col-12">

                    <!-- Footer Column Title -->
                    <h3 class="footer__body__col-title">
                        Theo dõi Yadea tại
                    </h3><!-- Footer Column Title -->

                    <!-- Footer Link List -->
                    <ul class="footer__body__links horizontal-list">
                        <li class="footer__body__links__social">
                            <a href="https://www.instagram.com/" target="_blank" class="social__link-insta">
                                <img draggable=false src="https://nihato2.com/wp-content/themes/yadea-theme/assets/img/icons/instagram.png">
                            </a>
                        </li>
                        <li class="footer__body__links__social">
                            <a href="https://www.youtube.com/channel/UC5fgsCayf-viU_GD_f9xA7g" target="_blank" class="social__link-youtube">
                                <img draggable=false src="https://nihato2.com/wp-content/themes/yadea-theme/assets/img/icons/youtube.png">
                            </a>
                        </li>
                        <li class="footer__body__links__social">
                            <a href="https://www.facebook.com/yadeabrand/" target="_blank" class="social__link-facebook">
                                <img draggable=false src="https://nihato2.com/wp-content/themes/yadea-theme/assets/img/icons/facebook.png">
                            </a>
                        </li>
                    </ul><!-- Footer Link List -->

                </div><!-- Footer Content Column -->

                <!-- Footer Content Column -->
                <div class="col-lg-3 col-12">

                    <!-- Footer Column Title -->
                    <h3 class="footer__body__col-title">
                        Liên hệ
                    </h3><!-- Footer Column Title -->

                    <!-- Footer Link List -->
                    <ul class="footer__body__links">
                        <li class="footer__body__links__item">
                            <span class="footer__phone">SDT: 0909310376</span>
                        </li>
                        <li class="footer__body__links__item">
                                <span>Email:
                                    <a href="mailto:abcc@gmail.com" class="footer__email">
                                        abcc"gmail.com
                                    </a>
                                </span>
                        </li>
                    </ul><!-- Footer Link List -->

                </div><!-- Footer Content Column -->


            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer__bottom text-center mt-60">

            <!-- Footer Copyright -->
            <p class="footer__bottom__copyright text-center txt-gray">
                Copyright ©2019 All Rights Reversed
            </p><!-- Footer Copyright -->

        </div> <!-- Footer Bottom -->

    </footer>
    <!-- === FOOTER - END === -->
</div>
<!-- ====== MAIN CONTENT - END ====== -->






<!-- === REUSABLE ELEMENT === -->
<!-- Video Modals -->
<div class="video-modal" id="video-modal">
    <div class="video-holder" id="video-modal-video">

    </div>
    <span class="close-video-modal">
        <i class="fa fa-times" aria-hidden="true"></i>
    </span>
</div>
<!-- Video Modals -->

<!-- Apply Form -->
<div class="apply-g5-event-modal">
    <div class="modal-overlay close-apply-modal"></div>
    <div class="apply-g5-content">
        <span class="close-apply-modal">
            &times;
        </span>
        <div class="main-content">
            <h3 class="modal-title">PHIẾU ĐĂNG KÝ</h3>
            <form class="form-wrapper"
                  id="apply-info-g5-form"
                  method="GET"
                  action="https://script.google.com/macros/s/AKfycbzMCxerSP3KJRlkxqMtZIuPsTl23OF7FFiat2o50BrRe1r9OGk/exec">
                <div class="form-row">
                    <label for="user_fullname">Họ và tên: </label>
                    <input class="input-control" name="user_fullname" required>
                </div>
                <div class="form-row">
                    <label for="user_phonenumber">Số điện thoại: </label>
                    <input class="input-control phone-number-input"
                           minlength="9"
                           maxlength="10"
                           name="user_phonenumber" required>
                </div>
                <div class="form-row">
                    <label for="user_email">Email: </label>
                    <input class="input-control" type="email" name="user_email">
                </div>

                <p class="submit-feedback"></p>

                <div class="submit-holder">
                    <button class="submit-btn" type="submit">Đăng ký</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Apply Form -->
<!-- === REUSABLE ELEMENT === -->



<!-- ====== SCRIPT REFERENCES  ====== -->
<!-- jQuery-->
<script src="js/jquery-3.3.1.min.js"></script>

<!-- Slick -->
<script src="js/slick.min.js"></script>

<!-- Yadea Main Script -->
<script src="js/yadea-main.js"></script>

<!-- Yadea Teaser Main Script -->
<script src="js/scripts-bundled.js"></script>
<!-- ====== SCRIPT REFERENCES - END ====== -->

</body>
</html>