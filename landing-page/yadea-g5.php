<?php
/*
Template Name: Yadea G5 Product Landing Page
*/
wp_redirect('yadea-g5/teaser');
exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <title>YADEA G5 | Bật thông minh lướt phong cách | Xe máy điện thông minh</title>
    <meta property="fb:app_id" content="575722139842209" />

    <!-- META DATA -->
    <meta name="description" content="Xe máy điện thông minh YADEA G5, xem thông tin thông số kĩ thuật xe điện, so sánh xe điện, xem giá xe máy điện YADEA G5, hình ảnh thực tế xe G5">
    <meta name="keyword" content="yadea g5, g5, xe g5, xe yadea g5, xe máy điện yadea g5, xe điện yadea g5, xe máy điện g5, so sánh yadea g5, đánh giá yadea g5, giá yadea g5, hình ảnh yadea g5, thông số yadea g5, so sánh g5, đánh giá g5, giá g5, hình ảnh g5, thông số g5, xe máy điện thông minh, xe điện thông minh, xe máy điện, xe điện.">
    <meta property="og:url" content="https://yadeavietnam.vn/yadea-g5">

    <meta property="og:image" content="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/fbshare.jpg'); ?>">
    <meta property="og:image:secure_url" content="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/fbshare.jpg'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="YADEA G5 | Bật thông minh lướt phong cách | Xe máy điện thông minh">
    <meta property="og:description" content="Xe máy điện thông minh YADEA G5, xem thông tin thông số kĩ thuật xe điện, so sánh xe điện, xem giá xe máy điện YADEA G5, hình ảnh thực tế xe G5">
    <!-- META DATA - END -->


    <!-- Bootstrap Stylesheet Reference -->
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">

    <!-- Slick Slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Semi+Expanded:100,200,300,400,500,600,700,800,900&amp;subset=vietnamese" rel="stylesheet">

    <!-- Main Yadea Theme -->
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('landing-page/yadea-g5/css/styles-main.css');?>">

    <!-- Yadea G5 Style -->
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('landing-page/yadea-g5/css/g5-styles.css'); ?>">
    <!-- Main stylesheet Reference -->

</head>
<body class="with-overlay">

<!-- ====== MAIN CONTENT ====== -->

<!-- === HEADER === -->
<?php get_template_part('template-parts/header', 'main-g5') ?>
<!-- === HEADER - END === -->

<!-- === MAIN CONTENT === -->
<!-- Yadea G5 Landing Page Content -->
<div class="page-wrapper" id="yadea-g5-page">

    <!-- Section 1 - Banner -->
    <section class="yadea-g5-banner" id="yadea-g5-banner">

        <!-- Banner BG -->
        <div class="banner-bg">
            <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/banner-g5.jpg'); ?>" class="mb-hide">
            <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/banner-g5-mobile.png'); ?>" class="mb-show">
        </div>

        <!-- Bike Image -->
        <div class="bike-image">
            <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/bike-g5.png'); ?>">
        </div>

        <!-- Product Slogan and Name -->
        <div class="banner-content">
            <p class="product-name">
                <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/g5-name.png'); ?>">
            </p>
            <p class="g5-product-slogan">
                BẬT <span class="slogan-highlight">THÔNG MINH</span>,
                LƯỚT <span class="slogan-highlight">PHONG CÁCH</span>
            </p>
        </div>
    </section>
    <!-- Section 1 - Banner -->


    <!-- Section 2 Video Intro-->
    <section class="g5-intro-video">
        <div class="intro-bg mb-hide"
             style="background-image: url('<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/intro-video-bg.jpg'); ?>')">
        </div>

        <div class="intro-bg mb-show"
             style="background-image: url('<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/intro-video-bg-mb.jpg'); ?> ')">
        </div>

        <!-- Main Content -->
        <div class="video-main-content">
            <img draggable="false" class="play-clip play-modal-video" data-video-id="BnRxdYVE6KA"
                 src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/button-play.png'); ?>">
            <p class="intro-cta">
                <img draggable="false" class="btn-border"
                     src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/border-gradient.svg'); ?>">
                <span class="btn-text">Xem thêm về YADEA</span>
            </p>
        </div>
    </section>
    <!-- Section 2 Video Intro -->


    <!-- Feature Divider - Feature Group 1 -->
    <div class="feature-divider">
        <span class="section-no">
            <div class="grad-border"></div>
            <span class="text">
                1
            </span>
        </span>
        <h3 class="section-title">
            THIẾT KẾ HIỆN ĐẠI <br class="mb-show">& CAO CẤP
        </h3>
    </div>
    <!-- Feature Divider - END -->


    <!-- FEATURE GROUP 1 -->
    <div class="feature-group group-1" id="g5-feature-group-1">

        <!-- Screen LCD TFT -->
        <section class="g5-screen-section" id="g5-screen-section">
            <!-- Context Block -->
            <div class="context-block">
                <h3 class="feature-title">
                    MÀN HÌNH LCD TFT
                </h3>
                <h4 class="feature-sub-title">
                    Đầu tiên tại Việt Nam
                </h4>
                <p class="feature-content">
                    Màn hình màu LCD TFT 7inches mang đến trải nghiệm hình ảnh sắc nét, sinh động. Vừa di chuyển, bạn vừa có thể<br>
                    quan sát các thông số xe ngay trong tầm mắt
                </p>
            </div>

            <!-- Effect -->
            <div class="effect-content">
                <div class="effect-main-img">
                    <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/lcd-img.jpg'); ?>">
                </div>

                <div class="feature-detail is-active detail-1">
                    <div class="feature-detail-context">
                        <p class="title">TỰ ĐỘNG ĐIỀU TIẾT ÁNH SÁNG</p>
                        <p class="desc">Tùy chỉnh theo môi trường: Ban ngày sáng rõ, ban đêm không lo chói mắt</p>
                    </div>
                    <div class="pointer">
                        <div class="mark-holder mark-1 is-active">
                            <span class="pointer-mark">1</span>
                        </div>
                    </div>
                </div>

                <div class="feature-detail is-active detail-2">
                    <div class="feature-detail-context">
                        <p class="title">TỰ ĐỘNG ĐIỀU TIẾT ÁNH SÁNG 2</p>
                        <p class="desc">Tùy chỉnh theo môi trường: Ban ngày sáng rõ, ban đêm không lo chói mắt</p>
                    </div>
                    <div class="pointer">
                        <div class="mark-holder mark-2">
                            <span class="pointer-mark">2</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Screen LCD TFT -->


        <!-- Section LifeStyle -->
        <section class="g5-style-section" id="g5-style-section">

            <!-- Background -->
            <div class="bg">
                <img draggable="false"
                     src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/background-painting.png'); ?>">
            </div>

            <!-- context block -->
            <div class="context-block">
                <h3 class="feature-title">
                    ĐỘC ĐÁO KHẲNG ĐỊNH CÁ TÍNH
                </h3>
                <h4 class="feature-sub-title">
                    Sáng tạo vượt mọi khuôn khổ
                </h4>
                <p class="feature-content">
                    Lướt đi nhẹ nhàng và hãy để cả thế giới chiêm ngưỡng thần thái sang chảnh của bạn. Bạn sẽ hoàn toàn hài lòng với dáng vẻ<br>
                    sang trọng bậc nhất của chiếc Yadea G5. Đâu sẽ là sắc màu độc đáo khẳng định phong cách của bạn:
                </p>
            </div>

            <!-- Desktop Color Video List  -->
            <div class="mb-hide color-select-video">
                <div class="list-holder">
                    <ul class="g5-color-list">

                        <!-- Color Item -->
                        <li class="color-item color-1">
                            <!-- Main image -->
                            <img draggable="false" class="main-img"
                                 src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/model-4.png'); ?>">

                            <!-- Color Name -->
                            <div class="name gray">
                                <div class="background"></div>
                                <span class="context">Xám bạc huyền bí</span>
                            </div>

                            <!-- Play related video -->
                            <span class="play-clip play-ico">
                                <img draggable="false"
                                     src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/button-play.png'); ?>"
                                     class="play-modal-video" data-video-id="IMCf4BDkiO4">
                            </span>
                        </li>

                        <!-- Color Item -->
                        <li class="color-item color-2">
                            <!-- Main image -->
                            <img draggable="false" class="main-img"
                                 src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/model-1.png'); ?>">

                            <!-- Color Name -->
                            <div class="name black">
                                <div class="background"></div>
                                <span class="context">Đen nhám mạnh mẽ</span>
                            </div>

                            <!-- Play related video -->
                            <span class="play-clip play-ico">
                                <img draggable="false"
                                     src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/button-play.png'); ?>"
                                     class="play-modal-video" data-video-id="yRBsjTLT-UE">
                            </span>
                        </li>

                        <!-- Color Item -->
                        <li class="color-item color-3">
                            <!-- Main image -->
                            <img draggable="false" class="main-img"
                                 src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/model-2.png'); ?>" >

                            <!-- Color Name -->
                            <div class="name white">
                                <div class="background"></div>
                                <span class="context">Trắng sứ thời thượng</span>
                            </div>

                            <!-- Play related video -->
                            <span class="play-clip play-ico" data-video-id="BnRxdYVE6KA">
                                <img draggable="false"
                                     src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/button-play.png'); ?>"
                                     class="play-modal-video" data-video-id="BnRxdYVE6KA">
                            </span>
                        </li>

                        <!-- Color Item -->
                        <li class="color-item color-4">
                            <!-- Main image -->
                            <img draggable="false" class="main-img"
                                 src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/model-3.png'); ?>">

                            <!-- Color Name -->
                            <div class="name red">
                                <div class="background"></div>
                                <span class="context">Đỏ kim cá tính</span>
                            </div>

                            <!-- Play related video -->
                            <span class="play-clip play-ico">
                                <img draggable="false"
                                     src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/button-play.png'); ?>"
                                     class="play-modal-video" data-video-id="mYfCgEOEBiA">
                            </span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Mobile Video Slider -->
            <div class="mb-show color-select-video-mb">
                <!-- Slider Touch Control -->
                <div class="navigation-holder">
                    <div class="color-slider-controller next-color-slide"></div>
                    <div class="color-slider-controller prev-color-slide"></div>
                </div>

                <div class="list-holder">
                    <ul class="g5-color-list-mb">

                        <!-- Color Item -->
                        <li class="color-item color-1">
                            <!-- Main image -->
                            <img draggable="false" class="main-img"
                                 src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/model-4.png'); ?>">

                            <!-- Color Name -->
                            <div class="name gray">
                                <div class="background"></div>
                                <span class="context">Xám bạc huyền bí</span>
                            </div>

                            <!-- Play related video -->
                            <span class="play-clip play-ico">
                                <img draggable="false"
                                     src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/button-play.png'); ?>"
                                     class="play-modal-video" data-video-id="IMCf4BDkiO4">
                            </span>
                        </li>

                        <!-- Color Item -->
                        <li class="color-item color-2">
                            <!-- Main image -->
                            <img draggable="false" class="main-img"
                                 src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/model-1.png'); ?>">

                            <!-- Color Name -->
                            <div class="name black">
                                <div class="background"></div>
                                <span class="context">Đen nhám mạnh mẽ</span>
                            </div>

                            <!-- Play related video -->
                            <span class="play-clip play-ico">
                                <img draggable="false"
                                     src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/button-play.png'); ?>"
                                     class="play-modal-video" data-video-id="yRBsjTLT-UE">
                            </span>
                        </li>

                        <!-- Color Item -->
                        <li class="color-item color-3">
                            <!-- Main image -->
                            <img draggable="false" class="main-img"
                                 src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/model-2.png'); ?>" >

                            <!-- Color Name -->
                            <div class="name white">
                                <div class="background"></div>
                                <span class="context">Trắng sứ thời thượng</span>
                            </div>

                            <!-- Play related video -->
                            <span class="play-clip play-ico" data-video-id="BnRxdYVE6KA">
                                <img draggable="false"
                                     src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/button-play.png'); ?>"
                                     class="play-modal-video" data-video-id="BnRxdYVE6KA">
                            </span>
                        </li>

                        <!-- Color Item -->
                        <li class="color-item color-4">
                            <!-- Main image -->
                            <img draggable="false" class="main-img"
                                 src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/model-3.png'); ?>">

                            <!-- Color Name -->
                            <div class="name red">
                                <div class="background"></div>
                                <span class="context">Đỏ kim cá tính</span>
                            </div>

                            <!-- Play related video -->
                            <span class="play-clip play-ico">
                                <img draggable="false"
                                     src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/button-play.png'); ?>"
                                     class="play-modal-video" data-video-id="mYfCgEOEBiA">
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Section LifeStyle - END -->


        <!-- Section Leader -->
        <section class="g5-leading-section" id="g5-leading-section">
            <div class="context-block white">
                <h3 class="feature-title">
                    DẤN ĐẦU XU HƯỚNG TỐI GIẢN
                </h3>
                <h4 class="feature-sub-title">
                    Thiết kế đến từ tương lai
                </h4>
                <p class="feature-content">
                    Không rườm rà, không cầu kỳ, các đường nét thiết kế phóng khoáng, tính tế, mang đậm màu sắc của sự tự do. Lấy cảm hứng từ <br>
                    phong cách tối giản, thân xe là sự kết hợp hoàn hảo của những đường thẳng cứng cắp và đường cong mềm mại, tạo khối gọn gàng,<br>
                    tối ưu không gian lái xe cho bạn
                </p>
            </div>

            <div class="slider-holder">
                <ul class="leading-slider">
                    <!-- Slide Item - Duplicate later -->
                    <li class="slide-item">
                        <div class="img-holder"
                             style="background-image: url('<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/banner-slide-01.jpg');?> ')">
                        </div>
                    </li>

                    <!-- Slide Item - Duplicate later -->
                    <li class="slide-item">
                        <div class="img-holder"
                             style="background-image: url('<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/banner-slide-01.jpg');?> ')">
                        </div>
                    </li>

                    <!-- Slide Item - Duplicate later -->
                    <li class="slide-item">
                        <div class="img-holder"
                             style="background-image: url('<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/banner-slide-01.jpg');?> ')">
                        </div>
                    </li>

                    <!-- Slide Item - Duplicate later -->
                    <li class="slide-item">
                        <div class="img-holder"
                             style="background-image: url('<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/banner-slide-01.jpg'); ?> ')">
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Section Leader - END -->


        <!-- Section Intro By Auto Play -->
        <section class="g5-autoplay-intro-section" id="g5-autoplay-intro-section">
            <!-- Use Auto Play Video Here Without Control -->
            <video width="100%" autobuffer="" autoplay="" muted="" loop="" playsinline="">
                <source src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/scooter360.mp4'); ?>" type="video/mp4">
            </video>
        </section>
        <!-- Section Intro By Auto Play -->


        <!-- LED Effect Section -->
        <section class="g5-led-section" id="g5-led-section">
            <div class="context-block white">
                <h3 class="feature-title">
                    BỨT PHÁ CÔNG NGHỆ ÁNH SÁNG LED
                </h3>
                <h4 class="feature-sub-title">
                    Chất lượng ánh sáng tuyệt hảo
                </h4>
                <p class="feature-content">
                    YADEA G5 trang bị hệ thống đèn LED cao cấp toàn xe, từ đèn chính, đèn xi nhan đến đèn định vị ban ngày mang đến khả năng chiếu sáng vượt <br>
                    trội, bền bỉ theo thời gian, tiết kiệm năng lượng hiệu quả. Dù đi qua ngày nắng chói chang hay đêm đen tối mịt, YADEA G5 cùa bạn vẫn thật nổi bật <br>
                    và phong cách
                </p>
            </div>

            <!-- Leds Effect Holder -->
            <div class="leds-holder">

                <!-- Led Item Left -->
                <div class="led-item left">
                    <div class="img-holder">
                        <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/led-01.jpg'); ?>" class="bike-img">
                        <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/led-effect-01.png'); ?>" class="led-effect">
                    </div>
                </div>

                <!-- Led Item Right -->
                <div class="led-item right">
                    <div class="img-holder">
                        <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/led-02.jpg'); ?>" class="bike-img">
                        <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/led-effect-02.png'); ?>" class="led-effect">
                    </div>
                </div>
            </div>
            <!-- Leds Effect Holder -->

        </section>
        <!-- LED Effect Section - END -->


        <!-- G5 Bike Container Section -->
        <section class="g5-container-section" id="g5-container-section">
            <!-- Context -->
            <div class="context-block white style-2 left">
                <h3 class="feature-title">
                    CỐNG SIÊU RỘNG 26 LÍT
                </h3>
                <h4 class="feature-sub-title">
                    Chứa cả thế giới của bạn
                </h4>
                <p class="feature-content">
                    Không chỉ để vừa hai chiếc mũ bảo hiển quan thuộc,<br>
                    cốp xe chứa được hàng tá đồ dùng cá nhân. YADEA G5<br>
                    sẵn sàng cùng bạn xuống phố với chiếc cốp SIÊU<br>
                    RỘNG, dung tích lên tới 26 lít - Dung tích lớn nhất<br>
                    trên xe máy điện hiện tại ở Việt Nam
                </p>

                <span class="grad-line"></span>
            </div>
            <!-- Context - END -->

            <!-- Container Effect Images -->
            <div class="effect-holder">
                <div class="g5-container-img">
                    <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/bike-container.jpg'); ?>" class="mb-hide">
                    <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/banner-cop-mobile.png'); ?>" class="mb-show">

                    <div class="container-inside">
                        <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/container-inside.png'); ?>">
                    </div>
                </div>
            </div>
            <!-- Container Effect Images - END -->
        </section>
        <!-- G5 Bike Container Section - END -->


        <!-- G5 Side Controller -->
        <section class="g5-side-controller-section" id="g5-side-controller-section">

            <!-- Context -->
            <div class="context-block style-2" id="side-controller-context">
                <h3 class="feature-title">
                    HỆ THỐNG NÚT BẤM KHOA HỌC
                </h3>
                <h4 class="feature-sub-title">
                    Tiện dụng trong lòng bàn tay
                </h4>
                <p class="feature-content">
                    Điều khiển xe dễ dàng hơn, chủ động với sự <br>
                    an toàn của bạn. Các nút bấm được lắp đặt<br>
                    đèn nền, giúp bạn theo tác linh hoạt ngay cả <br>
                    trong điều kiện thiếu sáng.
                </p>
                <span class="grad-line"></span>
            </div>
            <!-- Context - END -->

            <!-- Mold Act As Section Ruler -->
            <div class="mold mobile-hide">
                <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/left-hand.jpg'); ?>" class="mold-img">

                <!-- Left Side -->
                <div class="side-control mb-show left">
                    <div class="controller-img-holder">
                        <div class="controler-img">
                            <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/left-hand2.jpg'); ?>">

                            <a class="cta">
                                <div class="cta-effect"></div>
                                <span class="text">Xem bên còn lại </span>
                                <img draggable="false"
                                     src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/cta-next.png'); ?>">
                            </a>
                        </div>

                        <div class="detail-item light">
                            <p>Đèn ưu tiên</p>
                        </div>

                        <div class="detail-item drive-mode">
                            <p>Chuyển chế độ lái</p>
                        </div>

                        <div class="detail-item parking">
                            <p>Đỗ xe</p>
                        </div>
                    </div>
                </div>
                <!-- Left Side - End -->

                <!-- Right Side -->
                <div class="side-control mb-show right">
                    <div class="controller-img-holder">
                        <div class="controler-img">
                            <img draggable="false"
                                 src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/right-hand2.jpg'); ?>">

                            <a class="cta">
                                <div class="cta-effect"></div>
                                <img draggable="false"
                                     src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/cta-next.png'); ?>"
                                     class="reversed">
                                <span class="text">Xem bên còn lại </span>
                            </a>
                        </div>

                        <div class="detail-item light-mode">
                            <p>Đèn pha</p>
                        </div>

                        <div class="detail-item onk">
                            <p>Kèn</p>
                        </div>

                        <div class="detail-item container-open">
                            <p>Mở cốp xe</p>
                        </div>
                    </div>
                </div>
                <!-- Right Side - End -->
            </div>

            <!-- Left Side -->
            <div class="side-control mb-hide left">
                <div class="controller-img-holder">
                    <div class="controler-img">
                        <img draggable="false"
                             src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/left-hand2.jpg'); ?>">

                        <a class="cta">
                            <div class="cta-effect"></div>
                            <span class="text">Xem bên còn lại </span>
                            <img draggable="false"
                                 src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/cta-next.png'); ?>">
                        </a>
                    </div>

                    <div class="detail-item light">
                        <p>Đèn ưu tiên</p>
                    </div>

                    <div class="detail-item drive-mode">
                        <p>Chuyển chế độ lái</p>
                    </div>

                    <div class="detail-item parking">
                        <p>Đỗ xe</p>
                    </div>
                </div>
            </div>
            <!-- Left Side - End -->

            <!-- Right Side -->
            <div class="side-control mb-hide right">
                <div class="controller-img-holder">
                    <div class="controler-img">
                        <img draggable="false"
                             src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/right-hand2.jpg'); ?>">

                        <a class="cta">
                            <div class="cta-effect"></div>
                            <img draggable="false"
                                 src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/cta-next.png'); ?>" class="reversed">
                            <span class="text">Xem bên còn lại </span>
                        </a>
                    </div>

                    <div class="detail-item light-mode">
                        <p>Đèn pha</p>
                    </div>

                    <div class="detail-item onk">
                        <p>Kèn</p>
                    </div>

                    <div class="detail-item container-open">
                        <p>Mở cốp xe</p>
                    </div>
                </div>
            </div>
            <!-- Right Side - End -->

        </section>
        <!-- G5 Side Controller - END -->


        <!-- Charging USB Section -->
        <section class="g5-charging-usb-section" id="g5-charging-usb-section">
            <!-- Context -->
            <div class="context-block style-2 left">
                <h3 class="feature-title">
                    CỔNG KẾT NỐI USB TIỆN DỤNG
                </h3>
                <h4 class="feature-sub-title">
                    Sạc điện thoại mọi lúc mọi nơi
                </h4>
                <p class="feature-content">
                    Ngay cả khi đang di chuyển trên đường, điện thoại <br>
                    của bạn hoàn toàn có thể sạc đầy pin 100%, thông qua <br>
                    cổng sạc USB. Cổng sạc và hộp đựng điện thoại  <br>
                    được thiết kế thuận tiện ngay trên xe YADEA G5.<br>
                </p>
                <span class="grad-line"></span>
            </div>
            <!-- Context - END -->

            <!-- Effect -->
            <div class="effect-holder">
                <div class="img-holder">
                    <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/charging-usb.jpg'); ?>">

                    <div class="charging-effect">
                        <span class="dot dot-1"></span>
                        <span class="dot dot-2"></span>
                        <span class="dot dot-3"></span>
                        <span class="dot dot-4"></span>
                        <span class="dot dot-5"></span>
                    </div>

                    <div class="lightning-effect">
                        <div class="lightning-holder">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 23 39">
                                <defs>
                                    <clipPath id="clip-path" transform="translate(-86 -137)"><polygon class="cls-1" points="95 137 106 137 100 150 108 150 89 176 96 157 88 157 95 137"/></clipPath>
                                </defs>
                                <defs>
                                    <linearGradient id="grad2" x1="0%" y1="0%" x2="0%" y2="100%">
                                        <stop offset="0%" style="stop-color:rgb(255,126,0);stop-opacity:1" />
                                        <stop offset="100%" style="stop-color:rgb(255,255,0);stop-opacity:1" />
                                    </linearGradient>
                                </defs>
                                <title>lighting</title>
                                <polygon points="9 0 20 0 14 13 22 13 3 39 10 20 2 20 9 0"/>
                                <g class="cls-2">
                                    <rect class="cls-3" width="23" height="39" id="lighting-svg-effect" fill="url(#grad2)"/>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Effect End -->

        </section>
        <!-- Charging USB Section - END -->
    </div>
    <!-- FEATURE GROUP 1 - END -->


    <!-- Feature Divider - Feature Group 2 -->
    <div class="feature-divider">
        <span class="section-no">
            <div class="grad-border"></div>
            <span class="text">
                2
            </span>
        </span>
        <h3 class="section-title">
            HIỆU NĂNG MẠNH MẼ
        </h3>
    </div>
    <!-- Feature Divider - END -->


    <!-- FEATURE GROUP 2 -->
    <div class="feature-group group-2" id="g5-feature-group-2">
        <!-- 2 Options Driving Mode -->
        <section class="g5-driving-mode-section" id="g5-driving-mode-section">

            <!-- Speeding Effect -->
            <div class="speeding-effect">
                <div class="speed-wave wave-1">
                    <img src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/speed-effect.jpg'); ?>">
                </div>
                <div class="speed-wave wave-2">
                    <img src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/speed-effect.jpg'); ?>">
                </div>
                <div class="speed-wave wave-3">
                    <img src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/speed-effect.jpg'); ?>">
                </div>
            </div>

            <!-- Context Block -->
            <div class="context-block white">
                <h3 class="feature-title">
                    HAI CHẾ ĐỘ LÁI TÙY CHỌN
                </h3>
                <h4 class="feature-sub-title">
                    Quyền năng làm chủ địa hình
                </h4>
                <p class="feature-content">
                    YADEA G5 có 2 chế độ lái SPORT và ECO. Nếu muốn xe chạy đầm và tiết kiệm n8ang lượng, hãy bật chế độ ECO. Nếu<br>
                    muốn tăng tốc mạnh mẹ hoặc lên dốc cao, hãy bật chế độ SPORT, YADEA G5 sẽ đưa bạn lướt vi vu khắp thành phố
                </p>
            </div>
            <!-- Context Block - END -->

            <!-- Effect Holder -->
            <div class="effect-holder">
                <div class="drive-mode-options">
                    <div class="mode-select">
                        <span class="mode-btn active" id="eco-mode-option">ECO</span>
                        <span class="mode-btn" id="sport-mode-option">SPORT</span>
                    </div>

                    <div class="mode-specs">
                        <span class="mode-specs-detail sport-detail">Vận tốc tối đa = 60km/h</span>
                        <span class="mode-specs-detail eco-detail active">Vận tốc tối đa = 40km/h</span>
                    </div>
                </div>

                <div class="img-holder">
                    <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/edit/drive-mode.png'); ?>">

                    <!-- Speed Holder -->
                    <div class="number-holder" >
                        <span class="value" id="max-speed-value">0</span>
                    </div>

                    <!-- Mode Icon Holder -->
                    <div class="icon-holder">
                        <span class="icon icon-sport">
                            <img src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/sport-icon.png'); ?>">
                        </span>
                        <span class="icon icon-eco active">
                            <img src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/eco-icon.png'); ?>">
                        </span>
                    </div>
                </div>
            </div>
            <!-- Effect Holder - END -->
        </section>
        <!-- 2 Options Driving Mode - End -->


        <!-- G5 Engine Section -->
        <section class="g5-engine-section" id="g5-engine-section">
            <!-- Context Block -->
            <div class="context-block white">
                <h3 class="feature-title">
                    ĐỘNG CƠ ĐỘC QUYỀN YADEA <br class="mb-show">GTR 3.0
                </h3>
                <h4 class="feature-sub-title">
                    Lướt đi trơn tru. Tốc độ mượt mà
                </h4>
                <p class="feature-content">
                    Tốc độ tối đa lên tới 53km/h. Bộ điều khiển FOC công suất cao 12 ống giúp quản lý và tiết kiệm năng lượng hiệu quả. Hãy ngồi xuống, nhấn ga,<br>
                    tận hưởng cảm giác lái xe thoải mái, lắng nghe tiếng động cơ êm như gió
                </p>
            </div>
            <!-- Context Block - END -->

            <!-- Engine Feature Detail -->
            <div class="engine-feature">
                <ul class="feature-list">
                    <li class="feature-item">
                        <span class="name">Tốc độ</span>
                        <span class="value">53km/h</span>
                    </li>
                    <li class="feature-item">
                        <span class="name">Leo dốc</span>
                        <span class="value">11 độ</span>
                    </li>
                    <li class="feature-item">
                        <span class="name">Công suất</span>
                        <span class="value">1500w</span>
                    </li>
                    <li class="feature-item">
                        <span class="name">Hiệu suất chuyển hao</span>
                        <span class="value">96%</span>
                    </li>
                </ul>
            </div>
            <!-- Engine Feature Detail - END -->

            <div class="engine-img-holder">
                <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/engine.png'); ?>">
            </div>
        </section>
        <!-- G5 Engine Section - End -->


        <!-- G5 Brake Section -->
        <section class="g5-brake-section" id="g5-brake-section">
            <!-- Context Block -->
            <div class="context-block left style-2">
                <h3 class="feature-title">
                    Giảm sóc thủy lực
                </h3>
                <h4 class="feature-sub-title">
                    Êm ai trên mọi chặng đường
                </h4>
                <p class="feature-content">
                    Chất lượng tương đương với các dòng xe máy cao cấp. Lò xo thép<br>
                    hành trình dài, giúp giảm tác động từ mặt đất siêu tốt, giúp bạn<br>
                    thoải mái di chuyển trên mọi địa hình trong thành phố
                </p>

                <!-- Brake Feature -->
                <div class="brake-feature-holder">
                    <ul class="brake-feature-list">
                        <li class="grad-item">
                            <div class="grad-line mb-show"></div>
                        </li>
                        <li class="feature-item">
                            <span class="name">Lò xo thép</span>
                            <span class="value">65mn</span>
                        </li>
                        <li class="feature-item">
                            <span class="name">Biên độ giảm</span>
                            <span class="value">89mn</span>
                        </li>
                        <li class="feature-item">
                            <span class="name">Thực nghiệm gia chấn</span>
                            <span class="value">Cấp 8</span>
                        </li>
                    </ul>
                </div>
                <!-- Brake Feature - END -->
            </div>
            <!-- Context Block - END -->

            <!-- Brake Image Holder -->
            <div class="brake-holder">
                <!-- Mono Picture -->
                <div class="brake-mono-img">
                    <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/brake-mono.jpg'); ?>" class="mb-hide">
                    <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/brake-mono-mb.jpg'); ?>" class="mb-show">
                </div>

                <!-- Highlight Image -->
                <div class="brake-highlight-img">
                    <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/brake-highlight.jpg'); ?>" class="mb-hide">
                    <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/brake-highlight-mb.jpg'); ?>" class="mb-show">
                </div>
            </div>
        </section>
        <!-- G5 Brake Section - END -->
    </div>
    <!-- FEATURE GROUP 2 - END -->


    <!-- Feature Divider - Feature Group 3 -->
    <div class="feature-divider">
        <span class="section-no">
            <div class="grad-border"></div>
            <span class="text">
                3
            </span>
        </span>
        <h3 class="section-title">
            PIN LITHIUM <br class="mb-xs-show">THẾ HỆ MỚI
        </h3>
    </div>
    <!-- Feature Divider - END -->


    <!-- FEATURE GROUP 3 -->
    <div class="feature-group group-3" id="g5-feature-group-3">
        <!-- 2 Options Driving Mode -->
        <section class="g5-lithium-battery-section" id="g5-lithium-battery-section">

            <!-- Context Block -->
            <div class="context-block white">
                <h3 class="feature-title">
                    PIN LITHIUM PANASONIC <br class="mb-xs-show">18650
                </h3>
                <h4 class="feature-sub-title">
                    Đi xa hơn, thỏa thích khám phá
                </h4>
                <p class="feature-content">
                    Pin cao cấp, nhỏ gọm với trọng lượng chỉ từ 10,5kg, cho hiệu suất sử dụng cao và bền bỉ. Với 1 lần sạc, YADEA G5 có thể đi <br>
                    quãng đường lên tới 80km. Cả ngày mặc sức lượn khắp thành phố mà chẳng lo hết pin
                </p>
            </div>
            <!-- Context Block - END -->

            <!-- Mode Selector -->
            <div class="effect-holder">
                <div class="main-info">
                    <span class="value" >
                        <span id="battery-spped">0</span>km
                    </span>
                </div>

                <div class="mode-selectors">
                    <div class="selector-block mode">
                        <div class="select-block name">Chế độ</div>
                        <div class="selection">
                            <span class="value">70</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="5" viewBox="0 0 10 5">
                                <path class="cls-1" d="M644,12126l-4.993-5h9.986Z" fill="#989b9d" transform="translate(-639 -12121)"/>
                            </svg>
                            <ul class="select-list">
                                <li class="data active">70</li>
                                <li class="data">80</li>
                                <li class="data">90</li>
                            </ul>
                        </div>
                    </div>
                    <div class="selector-block weight">
                        <div class="select-block name">Trọng lượng</div>
                        <div class="selection">
                            <span class="value">32</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="5" viewBox="0 0 10 5">
                                <path class="cls-1" d="M644,12126l-4.993-5h9.986Z" fill="#989b9d" transform="translate(-639 -12121)"/>
                            </svg>
                            <ul class="select-list">
                                <li class="data active">32</li>
                                <li class="data">42</li>
                                <li class="data">52</li>
                            </ul>
                        </div>
                    </div>
                    <div class="selector-block heat">
                        <div class="name">Nhiệt độ</div>
                        <div class="selection">
                            <span class="value">100</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="5" viewBox="0 0 10 5">
                                <path class="cls-1" d="M644,12126l-4.993-5h9.986Z" fill="#989b9d" transform="translate(-639 -12121)"/>
                            </svg>

                            <ul class="select-list">
                                <li class="data active">100</li>
                                <li class="data">80</li>
                                <li class="data">70</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mode Selector -->
        </section>
        <!-- 2 Options Driving Mode - End -->


        <!-- Battery Management Section -->
        <section class="g5-battery-management-section" id="g5-battery-management-section">
            <!-- Context Block -->
            <div class="context-block">
                <h3 class="feature-title">
                    HỆ THỐNG QUẢN LÝ PIN BMS <br class="mb-xs-show">THÔNG MINH
                </h3>
                <h4 class="feature-sub-title">
                    An toàn tiết kiệm năng lượng
                </h4>
                <p class="feature-content">
                    Hệ thống giúp quản lý kho năng lượng của pin Lithium thế hệ mới, cho hiệu suất sử dụng pin cao hơn. Vỏ pin được sản xuất theo công nghệ<br>
                    PACK, có khả năng chống va đập, chống cháy, chống nước, hoàn toàn yên tâm về chất lượng và độ an toàn của pin trên xe.
                </p>
            </div>
            <!-- Context Block - END -->

            <!-- Battery management feature -->
            <div class="battery-management-feature-list">
                <ul class="feature-list">
                    <li class="feature-item">
                        <span class="name">Nhiệt độ chịu được</span>
                        <span class="value">-20 đến 50 độ</span>
                    </li>
                    <li class="feature-item">
                        <span class="name">Tuổi thọ</span>
                        <span class="value">3-5 năm</span>
                    </li>
                    <li class="feature-item">
                        <span class="name">Sạc đầy trong</span>
                        <span class="value">7- 8 tiếng</span>
                    </li>
                </ul>
            </div>
            <!-- Battery management feature  -->

            <!-- Effect Holder -->
            <div class="effect-holder">
                <!-- Effect -->
                <div class="effect-img">
                    <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/bms-effect.png'); ?>">
                </div>

                <!-- Battery -->
                <div class="battery-img">
                    <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/bms-battery.png'); ?>">
                </div>
            </div>
            <!-- Effect Holder -->

            <!-- Battery Extra Feature List -->
            <div class="battery-functions">
                <ul class="functions-list">
                    <!-- Item -->
                    <li class="function-item">
                        <div class="item-image">
                            <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/icon-01.png'); ?>">
                        </div>
                        <p>Bảo về đoàn mạch</p>
                    </li>

                    <!-- Item -->
                    <li class="function-item">
                        <div class="item-image">
                            <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/icon-02.png'); ?>">
                        </div>
                        <p>Cell pin cân bằng</p>
                    </li>

                    <!-- Item -->
                    <li class="function-item">
                        <div class="item-image">
                            <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/icon-03.png'); ?>">
                        </div>
                        <p>Chống nước chống rung</p>
                    </li>

                    <!-- Item -->
                    <li class="function-item">
                        <div class="item-image">
                            <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/icon-04.png'); ?>">
                        </div>
                        <p>Bảo vệ nhiệt độ</p>
                    </li>

                    <!-- Item -->
                    <li class="function-item">
                        <div class="item-image">
                            <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/icon-05.png'); ?>">
                        </div>
                        <p>Chống chai pin</p>
                    </li>

                    <!-- Item -->
                    <li class="function-item">
                        <div class="item-image">
                            <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/icon-06.png'); ?>">
                        </div>
                        <p>Bảo vệ quá dòng</p>
                    </li>
                </ul>
            </div>
            <!-- Battery Extra Feature List -->
        </section>
        <!-- Battery Management Section - END -->
    </div>
    <!-- FEATURE GROUP 3 - END -->


    <!-- Feature Divider - Feature Group 4 -->
    <div class="feature-divider">
        <span class="section-no">
            <div class="grad-border"></div>
            <span class="text">
                4
            </span>
        </span>
        <h3 class="section-title">
            THÔNG MINH <br class="mb-xs-show">CHUẨN PHONG CÁCH<br class="mb-show">THỜI ĐẠI SỐ
        </h3>
    </div>
    <!-- Feature Divider - END -->


    <!-- FEATURE GROUP 4 -->
    <div class="feature-group group-4" id="g5-feature-group-4">
        <!-- Smart Sensor -->
        <section class="g5-smart-sensor-section" id="g5-smart-sensor-section">

            <!-- Context Block -->
            <div class="context-block">
                <h3 class="feature-title">
                    CẢM BIẾN THÔNG MINH CÔNG NGHỆ CAO
                </h3>
                <h4 class="feature-sub-title">
                    Quản lý mọi hoạt động của xe
                </h4>
                <p class="feature-content">
                    YADEA G5 được trang bị hệ thống cảm biến toàn xe, kết nối với ứng dụng YADEA. Bạn có thể kiểm soát mọi hoạt <br>
                    động trên xe chỉ với vài thao tác đơn giản ngay trên điện thoại: tình trạng pin, nhật ký hành trình và Cài đặt các <br>
                    thông số trên xe.
                </p>
            </div>
            <!-- Context Block - END -->

            <!-- Particle Background -->
            <div class="particle-bg-holder parallax-bg" id="particle-bg-holder"></div>
            <!-- Particle Background END -->

            <!-- Effect Holder -->
            <div class="effect-holder">

                <!-- Single Feature -->
                <div class="feature-block bike-setting">
                    <div class="content-indicator show-content">
                        <span class="indicator vertical"></span>
                        <span class="indicator horizon"></span>
                    </div>
                    <div class="detail">
                        <p class="title">CÀI ĐẶT THÔNG SỐ XE</p>
                        <p class="desc">
                            Thiết lập hàng rào điện tử <br>
                            bảo vệ xe và mức báo động <br>
                            lượng pin còn lại</p>
                    </div>
                    <div class="icon">
                        <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/icon-07.png'); ?>">
                    </div>
                </div>

                <!-- Single Feature -->
                <div class="feature-block battery-status">
                    <div class="content-indicator show-content">
                        <span class="indicator vertical"></span>
                        <span class="indicator horizon"></span>
                    </div>
                    <div class="detail closed">
                        <p class="title">TÌNH TRẠNG PIN</p>
                        <p class="desc">
                            Thiết lập hàng rào điện tử<br>
                            bảo vệ xe và mức báo động <br>
                            lượng Pin còn lại</p>
                    </div>
                    <div class="icon">
                        <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/icon-08.png'); ?>">
                    </div>
                </div>

                <!-- Single Feature -->
                <div class="feature-block travel-log">
                    <div class="content-indicator show-content">
                        <span class="indicator vertical"></span>
                        <span class="indicator horizon"></span>
                    </div>
                    <div class="detail closed">
                        <p class="title">NHẬT KÝ HÀNH TRÌNH</p>
                        <p class="desc">
                            Thiết lập hàng rào điện tử <br>
                            bảo vệ xe và mức báo động <br>
                            lượng pin còn lại</p>
                    </div>
                    <div class="icon">
                        <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/icon-09.png'); ?>">
                    </div>
                </div>

                <!-- Phone Screen Image -->
                <div class="phone-img-holder">
                    <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/phone-manage.png'); ?>">
                </div>
            </div>
            <!-- Effect Holder -->
        </section>
        <!-- Smart Sensor - End -->


        <!-- Smart GPS -->
        <section class="g5-smart-gps-section" id="g5-smart-gps-section">
            <!-- Context Block -->
            <div class="context-block">
                <h3 class="feature-title">
                    ĐỊNH VỊ GPS THÔNG MINH
                </h3>
                <h4 class="feature-sub-title">
                    Theo dõi chính xác
                </h4>
                <p class="feature-content">
                    Hệ thống định vị được xây dựng trên 3 nền tảng hiện đại: GLONASS, GPS và Bắc Đẩu, giúp xác định vị trí của YADEA G5 mọi <br>
                    lúc mọi nơi ngay trên Smartphone. Chuông báo động sẽ phát tín hiệu tức thì khi xe bị di chuyển và gửi ngay thông báo qua <br> app cho bạn
                </p>
            </div>
            <!-- Context Block - END -->

            <!-- Effect Holder -->
            <div class="effect-holder">
                <div class="map-holder">
                    <div class="map-image">
                        <img src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/edit/map-gps.jpg'); ?>">
                    </div>

                    <div class="pin-image">
                        <img src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/edit/pin.png'); ?>">
                    </div>
                </div>
            </div>
            <!-- Effect Holder -->
        </section>
        <!-- Smart GPS - END -->


        <!-- Touch Unlock -->
        <section class="g5-touch-unlock">
            <!-- Context Block -->
            <div class="context-block white">
                <h3 class="feature-title">
                    MỞ KHÓA 1 CHẠM ITO CỦA ĐỨC
                </h3>
                <h4 class="feature-sub-title">
                    Phong cách thời đại số
                </h4>
                <p class="feature-content">
                    Trân chiếc YADEA G5, công nghệ mở khóa 1 chạm ITO sẽ hiện thực hóa giấc mơ chạm tay để mở khóa. Chỉ với 1 chạm tay, bạn<br>
                    đã có thể khởi động chiếc xe máy điện thông minh thế hệ mới G5 . Đơn giản mà thật phong cách!
                </p>
            </div>
            <!-- Context Block - END -->

            <!-- Effect Holder -->
            <div class="effect-holder">
                <!-- Background -->
                <div class="background-img">
                    <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/lock-bg2.jpg'); ?>">
                </div>

                <!-- Effect Light -->
                <div class="effect-light-holder">

                    <!-- Power Center Light -->
                    <div class="power-btn">
                        <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/powerbtn-effect.png'); ?>">
                    </div>

                    <!-- Left Strip Of Light -->
                    <div class="light-left">
                        <img class="left-1" draggable="false"
                             src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/light-arrow-left.png'); ?>">
                        <img class="left-2" draggable="false"
                             src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/light-arrow-left.png'); ?>">
                        <img class="left-3" draggable="false"
                             src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/light-arrow-left.png'); ?>">
                        <img class="left-4" draggable="false"
                             src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/light-arrow-left.png'); ?>">
                        <img class="left-5" draggable="false"
                             src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/light-arrow-left.png'); ?>">
                        <img class="left-6" draggable="false"
                             src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/light-arrow-left.png'); ?>">
                    </div>

                    <!-- Right Strip Of Light -->
                    <div class="light-right">
                        <img class="right-1" draggable="false"
                             src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/light-arrow-right.png'); ?>">
                        <img class="right-2" draggable="false"
                             src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/light-arrow-right.png'); ?>">
                        <img class="right-3" draggable="false"
                             src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/light-arrow-right.png'); ?>">
                        <img class="right-4" draggable="false"
                             src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/light-arrow-right.png'); ?>">
                        <img class="right-5" draggable="false"
                             src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/light-arrow-right.png'); ?>">
                        <img class="right-6" draggable="false"
                             src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/light-arrow-right.png'); ?>">
                    </div>
                </div>
            </div>
            <!-- Effect Holder - END -->
        </section>
        <!-- Touch Unlock - End -->


        <!-- Analyze Effect -->
        <div class="g5-analyze-bike-section">
            <!-- Context Block -->
            <div class="context-block">
                <h3 class="feature-title">
                    SCAN XE THÔNG MINH
                </h3>
                <h4 class="feature-sub-title">
                    Kiểm tra tình trạng xe nhanh chóng
                </h4>
                <p class="feature-content">
                    Dù ở đâu, chỉ cần kết nối xe với ứng dụng YADEA, bạn đều có thể kiểm tra tại chỗ tình trạng xe chỉ trong 1 phút. Các lỗi và hư hỏng <br>
                    được phát hiện trong quá trình scan sẽ hiển thị chi tiết trên màn hình. Sau đó, ứng dụng YADEA sẽ đề xuất địa điểm sửa chữa xe <br>gần nhất.
                </p>
            </div>
            <!-- Effect Holder -->
            <div class="effect-holder">
                <!-- Phone Holder -->
                <div class="phone-holder">
                    <div class="phone-img">
                        <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/blank-screen.png'); ?>" alt="">
                    </div>

                    <!-- Cheking Text -->
                    <div class="checking-context">
                        <p class="checking-status">
                            Đang kiểm tra <span id="checking-dot">...</span>
                        </p>

                        <p class="gradient-percentage">
                            <span id="percent-value">0</span>
                            <span class="percent-mark">%</span>
                        </p>
                    </div>

                    <!-- Finish Text -->
                    <p class="finish-status">
                        Hoàn tất
                    </p>

                    <!-- Checking Effect -->
                    <div class="checking-effect">
                        <div class="bike-img">
                            <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/up-bike.png'); ?>"/>
                        </div>

                        <div class="second-circle">
                            <div class="analyze-wave"></div>
                        </div>

                        <div class="analyze-indicator">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 171 171"><defs><style>.cls-1{fill:#7a4fd0;}</style></defs><title>Untitled-1</title><rect class="cls-1" x="84.5" width="2" height="7"/><rect class="cls-1" x="176.2915" y="94.1124" width="2" height="7" transform="translate(-82.1484 -103.1449) rotate(3)"/><rect class="cls-1" x="180.5713" y="94.4492" width="2" height="7" transform="matrix(0.9945, 0.1045, -0.1045, 0.9945, -76.2669, -112.4428)"/><rect class="cls-1" x="184.8276" y="95.0096" width="2" height="7" transform="translate(-69.8019 -121.857) rotate(9)"/><rect class="cls-1" x="189.0488" y="95.7919" width="2" height="7" transform="translate(-62.703 -131.3436) rotate(12)"/><rect class="cls-1" x="193.2232" y="96.7941" width="2" height="7" transform="translate(-54.924 -140.8512) rotate(15)"/><rect class="cls-1" x="197.3394" y="98.0134" width="2" height="7" transform="translate(-46.4232 -150.3218) rotate(18)"/><rect class="cls-1" x="201.3862" y="99.4464" width="2" height="7" transform="translate(-37.1649 -159.6911) rotate(21)"/><rect class="cls-1" x="205.3524" y="101.0893" width="2" height="7" transform="translate(-27.1196 -168.8889) rotate(24)"/><rect class="cls-1" x="209.2272" y="102.9375" width="2" height="7" transform="translate(-16.265 -177.8402) rotate(27)"/><rect class="cls-1" x="213" y="104.9859" width="2" height="7" transform="translate(-4.5865 -186.4656) rotate(30)"/><rect class="cls-1" x="216.6604" y="107.229" width="2" height="7" transform="translate(7.9224 -194.6825) rotate(33)"/><rect class="cls-1" x="220.1984" y="109.6606" width="2" height="7" transform="translate(21.2593 -202.4054) rotate(36)"/><rect class="cls-1" x="223.6043" y="112.274" width="2" height="7" transform="translate(35.4129 -209.5473) rotate(39)"/><rect class="cls-1" x="226.8687" y="115.0621" width="2" height="7" transform="translate(50.3628 -216.0206) rotate(42)"/><rect class="cls-1" x="229.9828" y="118.0172" width="2" height="7" transform="translate(66.079 -221.7379) rotate(45)"/><rect class="cls-1" x="232.9379" y="121.1313" width="2" height="7" transform="translate(82.522 -226.613) rotate(48)"/><rect class="cls-1" x="235.726" y="124.3957" width="2" height="7" transform="translate(99.6431 -230.5623) rotate(51)"/><rect class="cls-1" x="238.3394" y="127.8016" width="2" height="7" transform="translate(117.3845 -233.5052) rotate(54)"/><rect class="cls-1" x="240.771" y="131.3396" width="2" height="7" transform="translate(135.6791 -235.3655) rotate(57)"/><rect class="cls-1" x="243.0141" y="135" width="2" height="7" transform="translate(154.4516 -236.0724) rotate(60)"/><rect class="cls-1" x="245.0625" y="138.7728" width="2" height="7" transform="translate(173.6185 -235.561) rotate(63)"/><rect class="cls-1" x="246.9107" y="142.6476" width="2" height="7" transform="translate(193.0888 -233.7737) rotate(66)"/><rect class="cls-1" x="248.5536" y="146.6138" width="2" height="7" transform="translate(212.7649 -230.6605) rotate(69)"/><rect class="cls-1" x="249.9866" y="150.6606" width="2" height="7" transform="translate(232.5429 -226.1801) rotate(72)"/><rect class="cls-1" x="251.2059" y="154.7768" width="2" height="7" transform="translate(252.3139 -220.3004) rotate(75)"/><rect class="cls-1" x="252.2081" y="158.9512" width="2" height="7" transform="translate(271.9645 -212.9992) rotate(78)"/><rect class="cls-1" x="252.9904" y="163.1724" width="2" height="7" transform="translate(291.3779 -204.2643) rotate(81)"/><rect class="cls-1" x="253.5508" y="167.4287" width="2" height="7" transform="translate(310.4353 -194.0946) rotate(84)"/><rect class="cls-1" x="253.8876" y="171.7085" width="2" height="7" transform="translate(329.0162 -182.4996) rotate(87)"/><rect class="cls-1" x="254" y="176" width="2" height="7" transform="translate(347 -169.5) rotate(90)"/><rect class="cls-1" x="253.8876" y="180.2915" width="2" height="7" transform="translate(364.2671 -155.1279) rotate(93)"/><rect class="cls-1" x="253.5508" y="184.5713" width="2" height="7" transform="translate(380.6997 -139.4262) rotate(96)"/><rect class="cls-1" x="252.9904" y="188.8276" width="2" height="7" transform="matrix(-0.1564, 0.9877, -0.9877, -0.1564, 396.1831, -122.4491)"/><rect class="cls-1" x="252.2081" y="193.0488" width="2" height="7" transform="translate(410.6067 -104.2614) rotate(102)"/><rect class="cls-1" x="251.2059" y="197.2232" width="2" height="7" transform="matrix(-0.2588, 0.9659, -0.9659, -0.2588, 423.8653, -84.9381)"/><rect class="cls-1" x="249.9866" y="201.3394" width="2" height="7" transform="translate(435.8596 -64.5642) rotate(108)"/><rect class="cls-1" x="248.5536" y="205.3862" width="2" height="7" transform="translate(446.4976 -43.2341) rotate(111)"/><rect class="cls-1" x="246.9107" y="209.3524" width="2" height="7" transform="translate(455.6955 -21.0504) rotate(114)"/><rect class="cls-1" x="245.0625" y="213.2272" width="2" height="7" transform="translate(463.378 1.876) rotate(117)"/><rect class="cls-1" x="243.0141" y="217" width="2" height="7" transform="translate(469.4797 25.4276) rotate(120)"/><rect class="cls-1" x="240.771" y="220.6604" width="2" height="7" transform="translate(473.9456 49.4807) rotate(123)"/><rect class="cls-1" x="238.3394" y="224.1984" width="2" height="7" transform="translate(476.7314 73.9065) rotate(126)"/><rect class="cls-1" x="235.726" y="227.6043" width="2" height="7" transform="translate(477.8042 98.5723) rotate(129)"/><rect class="cls-1" x="232.9379" y="230.8687" width="2" height="7" transform="translate(477.1428 123.3423) rotate(132)"/><rect class="cls-1" x="229.9828" y="233.9828" width="2" height="7" transform="translate(474.7379 148.079) rotate(135)"/><rect class="cls-1" x="226.8687" y="236.9379" width="2" height="7" transform="translate(470.5925 172.6441) rotate(138)"/><rect class="cls-1" x="223.6043" y="239.726" width="2" height="7" transform="translate(464.7216 196.9) rotate(141)"/><rect class="cls-1" x="220.1984" y="242.3394" width="2" height="7" transform="translate(457.1524 220.7105) rotate(144)"/><rect class="cls-1" x="216.6604" y="244.771" width="2" height="7" transform="translate(447.9238 243.9422) rotate(147)"/><rect class="cls-1" x="213" y="247.0141" width="2" height="7" transform="translate(437.0865 266.4656) rotate(150)"/><rect class="cls-1" x="209.2272" y="249.0625" width="2" height="7" transform="translate(424.702 288.1562) rotate(153)"/><rect class="cls-1" x="205.3524" y="250.9107" width="2" height="7" transform="translate(410.8429 308.8954) rotate(156)"/><rect class="cls-1" x="201.3862" y="252.5536" width="2" height="7" transform="translate(395.5913 328.5715) rotate(159)"/><rect class="cls-1" x="197.3394" y="253.9866" width="2" height="7" transform="translate(379.0391 347.0807) rotate(162)"/><rect class="cls-1" x="193.2232" y="255.2059" width="2" height="7" transform="translate(361.2863 364.328) rotate(165)"/><rect class="cls-1" x="189.0488" y="256.2081" width="2" height="7" transform="translate(342.4408 380.2276) rotate(168)"/><rect class="cls-1" x="184.8276" y="256.9904" width="2" height="7" transform="translate(322.6171 394.704) rotate(171)"/><rect class="cls-1" x="180.5713" y="257.5508" width="2" height="7" transform="translate(301.9352 407.6922) rotate(174)"/><rect class="cls-1" x="176.2915" y="257.8876" width="2" height="7" transform="translate(280.5201 419.1383) rotate(177)"/><rect class="cls-1" x="172" y="258" width="2" height="7" transform="translate(258.5 429) rotate(180)"/><rect class="cls-1" x="167.7085" y="257.8876" width="2" height="7" transform="translate(236.0057 437.2465) rotate(-177)"/><rect class="cls-1" x="163.4287" y="257.5508" width="2" height="7" transform="translate(213.1693 443.859) rotate(-174)"/><rect class="cls-1" x="159.1724" y="256.9904" width="2" height="7" transform="translate(190.1231 448.8303) rotate(-171)"/><rect class="cls-1" x="154.9512" y="256.2081" width="2" height="7" transform="translate(166.9982 452.165) rotate(-168)"/><rect class="cls-1" x="150.7768" y="255.2059" width="2" height="7" transform="translate(143.924 453.8794) rotate(-165)"/><rect class="cls-1" x="146.6606" y="253.9866" width="2" height="7" transform="translate(121.0264 454.0006) rotate(-162)"/><rect class="cls-1" x="142.6138" y="252.5536" width="2" height="7" transform="translate(98.4275 452.5668) rotate(-159)"/><rect class="cls-1" x="138.6476" y="250.9107" width="2" height="7" transform="translate(76.2439 449.6263) rotate(-156)"/><rect class="cls-1" x="134.7728" y="249.0625" width="2" height="7" transform="translate(54.5862 445.237) rotate(-153)"/><rect class="cls-1" x="131" y="247.0141" width="2" height="7" transform="translate(33.5583 439.4656) rotate(-150)"/><rect class="cls-1" x="127.3396" y="244.771" width="2" height="7" transform="translate(13.2562 432.3873) rotate(-147)"/><rect class="cls-1" x="123.8016" y="242.3394" width="2" height="7" transform="translate(-6.2325 424.0842) rotate(-144)"/><rect class="cls-1" x="120.3957" y="239.726" width="2" height="7" transform="translate(-24.8291 414.6449) rotate(-141)"/><rect class="cls-1" x="117.1313" y="236.9379" width="2" height="7" transform="translate(-42.4644 404.1633) rotate(-138)"/><rect class="cls-1" x="114.0172" y="233.9828" width="2" height="7" transform="translate(-59.079 392.7379) rotate(-135)"/><rect class="cls-1" x="111.0621" y="230.8687" width="2" height="7" transform="translate(-74.6236 380.4704) rotate(-132)"/><rect class="cls-1" x="108.274" y="227.6043" width="2" height="7" transform="translate(-89.0593 367.4648) rotate(-129)"/><rect class="cls-1" x="105.6606" y="224.1984" width="2" height="7" transform="translate(-102.3577 353.8264) rotate(-126)"/><rect class="cls-1" x="103.229" y="220.6604" width="2" height="7" transform="translate(-114.5005 339.6607) rotate(-123)"/><rect class="cls-1" x="100.9859" y="217" width="2" height="7" transform="matrix(-0.5, -0.866, 0.866, -0.5, -125.4797, 325.0724)"/><rect class="cls-1" x="98.9375" y="213.2272" width="2" height="7" transform="translate(-135.2972 310.1643) rotate(-117)"/><rect class="cls-1" x="97.0893" y="209.3524" width="2" height="7" transform="translate(-143.9646 295.0363) rotate(-114)"/><rect class="cls-1" x="95.4464" y="205.3862" width="2" height="7" transform="translate(-151.5023 279.7848) rotate(-111)"/><rect class="cls-1" x="94.0134" y="201.3394" width="2" height="7" transform="matrix(-0.309, -0.9511, 0.9511, -0.309, -157.9397, 264.5013)"/><rect class="cls-1" x="92.7941" y="197.2232" width="2" height="7" transform="matrix(-0.2588, -0.9659, 0.9659, -0.2588, -163.3139, 249.2723)"/><rect class="cls-1" x="91.7919" y="193.0488" width="2" height="7" transform="translate(-167.6693 234.1777) rotate(-102)"/><rect class="cls-1" x="91.0096" y="188.8276" width="2" height="7" transform="translate(-171.0567 219.2911) rotate(-99)"/><rect class="cls-1" x="90.4492" y="184.5713" width="2" height="7" transform="translate(-173.5328 204.6784) rotate(-96)"/><rect class="cls-1" x="90.1124" y="180.2915" width="2" height="7" transform="translate(-175.1588 190.398) rotate(-93)"/><rect class="cls-1" x="90" y="176" width="2" height="7" transform="translate(-176 176.5) rotate(-90)"/><rect class="cls-1" x="90.1124" y="171.7085" width="2" height="7" transform="translate(-176.1244 163.0263) rotate(-87)"/><rect class="cls-1" x="90.4492" y="167.4287" width="2" height="7" transform="translate(-175.6021 150.01) rotate(-84)"/><rect class="cls-1" x="91.0096" y="163.1724" width="2" height="7" transform="translate(-174.5043 137.4758) rotate(-81)"/><rect class="cls-1" x="91.7919" y="158.9512" width="2" height="7" transform="translate(-172.9019 125.4399) rotate(-78)"/><rect class="cls-1" x="92.7941" y="154.7768" width="2" height="7" transform="translate(-170.8653 113.9099) rotate(-75)"/><rect class="cls-1" x="94.0134" y="150.6606" width="2" height="7" transform="translate(-168.4628 102.8854) rotate(-72)"/><rect class="cls-1" x="95.4464" y="146.6138" width="2" height="7" transform="translate(-165.7602 92.3583) rotate(-69)"/><rect class="cls-1" x="97.0893" y="142.6476" width="2" height="7" transform="translate(-162.8197 82.313) rotate(-66)"/><rect class="cls-1" x="98.9375" y="138.7728" width="2" height="7" transform="translate(-159.6992 72.7272) rotate(-63)"/><rect class="cls-1" x="100.9859" y="135" width="2" height="7" transform="translate(-156.4516 63.5724) rotate(-60)"/><rect class="cls-1" x="103.229" y="131.3396" width="2" height="7" transform="translate(-153.1242 54.8145) rotate(-57)"/><rect class="cls-1" x="105.6606" y="127.8016" width="2" height="7" transform="translate(-149.7582 46.4147) rotate(-54)"/><rect class="cls-1" x="108.274" y="124.3957" width="2" height="7" transform="translate(-146.388 38.3302) rotate(-51)"/><rect class="cls-1" x="111.0621" y="121.1313" width="2" height="7" transform="translate(-143.0412 30.5151) rotate(-48)"/><rect class="cls-1" x="114.0172" y="118.0172" width="2" height="7" transform="translate(-139.7379 22.921) rotate(-45)"/><rect class="cls-1" x="117.1313" y="115.0621" width="2" height="7" transform="translate(-136.4909 15.4986) rotate(-42)"/><rect class="cls-1" x="120.3957" y="112.274" width="2" height="7" transform="translate(-133.3054 8.1975) rotate(-39)"/><rect class="cls-1" x="123.8016" y="109.6606" width="2" height="7" transform="translate(-130.1791 0.9683) rotate(-36)"/><rect class="cls-1" x="127.3396" y="107.229" width="2" height="7" transform="translate(-127.1024 -6.2374) rotate(-33)"/><rect class="cls-1" x="131" y="104.9859" width="2" height="7" transform="translate(-124.0583 -13.4656) rotate(-30)"/><rect class="cls-1" x="134.7728" y="102.9375" width="2" height="7" transform="translate(-121.0233 -20.7595) rotate(-27)"/><rect class="cls-1" x="138.6476" y="101.0893" width="2" height="7" transform="translate(-117.9671 -28.158) rotate(-24)"/><rect class="cls-1" x="142.6138" y="99.4464" width="2" height="7" transform="translate(-114.8539 -35.6958) rotate(-21)"/><rect class="cls-1" x="146.6606" y="98.0134" width="2" height="7" transform="translate(-111.6423 -43.4019) rotate(-18)"/><rect class="cls-1" x="150.7768" y="96.7941" width="2" height="7" transform="matrix(0.9659, -0.2588, 0.2588, 0.9659, -108.2863, -51.2998)"/><rect class="cls-1" x="154.9512" y="95.7919" width="2" height="7" transform="translate(-104.736 -59.4061) rotate(-12)"/><rect class="cls-1" x="159.1724" y="95.0096" width="2" height="7" transform="translate(-100.9383 -67.7307) rotate(-9)"/><rect class="cls-1" x="163.4287" y="94.4492" width="2" height="7" transform="translate(-96.8377 -76.2759) rotate(-6)"/><rect class="cls-1" x="167.7085" y="94.1124" width="2" height="7" transform="translate(-92.3774 -85.0367) rotate(-3)"/></svg>
                        </div>
                    </div>
                </div>

                <!-- G5 Bike -->
                <div class="bike-holder">
                    <div class="bike-img">
                        <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/bike-g5.png'); ?>">
                    </div>

                    <div class="bike-context-item vcu-controller">
                        <span class="point"></span>
                        <div class="img-holder">
                            <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/vcu.png'); ?>">
                        </div>
                    </div>

                    <div class="bike-context-item battery">
                        <span class="point"></span>
                        <div class="img-holder">
                            <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/analyze-battery.png'); ?>">
                        </div>
                    </div>

                    <div class="bike-context-item center">
                        <span class="point"></span>
                        <div class="img-holder">
                            <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/control-center.png'); ?>">
                        </div>
                    </div>
                </div>

                <!-- Phone Map Holder -->
                <div class="phone-mapping-holder">
                    <div class="img-holder">
                        <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/phone-map.png'); ?>">
                    </div>

                    <div class="shop-marker marker-1"></div>
                    <div class="shop-marker marker-2"></div>
                    <div class="shop-marker marker-3"></div>
                    <div class="shop-marker marker-4"></div>
                </div>
                <!-- Phone Map Holder - END -->
            </div>
            <!-- Effect Holder -->
        </div>

    </div>
    <!-- FEATURE GROUP 4 - END -->


    <!-- Feature Divider - Feature Group 5 -->
    <div class="feature-divider">
         <span class="section-no">
            <div class="grad-border"></div>
            <span class="text">
                5
            </span>
         </span>
        <h3 class="section-title">
            ĐẲNG CẤP TẠO NÊN <br class="mb-xs-show">TỪ CHẤT LƯỢNG
        </h3>
    </div>
    <!-- Feature Divider - END -->


    <!-- FEATURE GROUP 5 -->
    <div class="feature-group group-5" id="g5-feature-group-5">
        <!-- Water Resistance  -->
        <section class="g5-water-resist-section" id="g5-water-resist-section">

            <!-- Context Block -->
            <div class="context-block white">
                <h3 class="feature-title">
                    CHỐNG NƯỚC CHUẨN IP57
                </h3>
                <h4 class="feature-sub-title">
                    Chịu ngập lên đến 30cm
                </h4>
                <p class="feature-content">
                    Để thích ứng với điều kiện khí hậu Việt Nam,  YADEA G5 được thiết kế với khả năng
                    chống bụi, chống nước toàn xe: từ bo mạch điện tử, mạng lưới dây điện cho đến pin
                    Lithium, động cơ GTR 4.0. Trong điều kiện ngập nước, YADEA có thể di chuyển 30 phút,
                    chịu mức nước tối đa lên tới 30cm.
                </p>
            </div>
            <!-- Context Block - END -->

            <!-- Effect Holder -->
            <div class="effect-holder">
                <div class="bg-holder">
                    <img src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/edit/water-resistance.jpg'); ?>" class="mb-hide">
                    <img src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/edit/water-resistance-mb.jpg'); ?>" class="mb-show">
                </div>
            </div>
            <!-- Effect Holder - END -->

        </section>
        <!-- Water Resistance - End -->


        <!-- Steel Frame -->
        <section class="g5-steel-frame-section" id="g5-steel-frame-section">
            <!-- Context Block -->
            <div class="context-block white">
                <h3 class="feature-title">
                    KHUNG XE THÉP CÁN LẠNH
                </h3>
                <h4 class="feature-sub-title">
                    Bền bỉ cùng thời gian
                </h4>
                <p class="feature-content">
                    Khung xe được sơn tĩnh điện 2 lớp bảo vệ. Trải qua 47 quy trình sản xuất trong <br>
                    dây chuyền khép kín giúp tối ưu hóa sự ổn định, tăng độ bền cho khung xe,<br>
                    chống ăn mòn tốt. Mối hàn chính xác, chuẩn từng milimet
                </p>
            </div>
            <!-- Context Block - END -->

            <!-- Effect Holder -->
            <div class="effect-holder">
                <div class="frame-img">
                    <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/low-light.jpg'); ?>" class="low-light">
                    <img draggable="false" src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/steel-frame.jpg'); ?>" class="shine-light">
                </div>
            </div>
            <!-- Effect Holder -->
        </section>
        <!-- Steel Frame - END -->


        <!-- Accessory -->
        <section class="g5-accessory-section" id="g5-accessory-section">
            <!-- Context Block -->
            <div class="context-block">
                <h3 class="feature-title">
                    LINH KIỆN CAO CẤP
                </h3>
                <h4 class="feature-sub-title">
                    Chịu lực mạnh mẽ
                </h4>
                <p class="feature-content">
                    Sau quá trình chọn lọc nguyên vật liệt kỹ lưỡng và sản xuất trên dây chuyền hiện đại, tay lái và càng gắp của YADEA G5 được tạo<br>
                    nên từ hợp kim nhôm cao cấp ADC12 có khả năng chịu lực đáng kinh ngạc
                </p>
            </div>
            <!-- Context Block - END -->

            <!-- Accessory Content -->
            <div class="accessories-holder">
                <div class="accessory-row">

                    <!-- Control Accessory Left  -->
                    <div class="acc-item left">
                        <div class="acc-img-holder">
                            <div class="img-holder"
                                 style="background-image: url('<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/acc-1.jpg'); ?>');">
                            </div>
                        </div>
                        <div class="detail">
                            <p class="name">TAY LÁI</p>
                            <p class="desc">Thử nghiệm với tải 10kg trong điều kiện rung lắc liên tục 300.000 lần, tay lái không xuất hiện các hiện tượng dị thường</p>
                        </div>
                    </div>
                    <!-- Control Accessory Left - END -->

                    <!-- Holder Accessory Right -->
                    <div class="acc-item right">
                        <div class="acc-img-holder">
                            <div class="img-holder" style="background-image: url('<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/acc-2.jpg'); ?>')">
                            </div>
                        </div>
                        <div class="detail">
                            <p class="name">CÀNG GẮP</p>
                            <p class="desc">Thử nghiệm với tải 170kg trong điều kiện rung rắc 1 triệu lần, càng gắp không xuất hiện các hiện tượng lạ thường</p>
                        </div>
                    </div>
                    <!-- Holder Accessory Right - END -->
                </div>
            </div>
        </section>
        <!-- Accessory - END -->
    </div>
    <!-- FEATURE GROUP 5 - END -->


    <!-- Service Introduction -->
    <section class="yadea-product-service-section" id="yadea-service-section-section">
        <div class="background">
            <img draggable="false"
                 src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/service-bg.jpg'); ?>">
        </div>
        <div class="content">
            <div class="container">
                <h2 class="title">YÊN TÂM VỚI DỊCH VỤ CHĂM SÓC TỪ YADEA</h2>
                <p>
                    Pin Lithium Panasonic 18650 cao cấp nhỏ gọm với trọng lương chỉ 10,5kg, cho công suất, hiệu suất cao và bền bỉ.<br class="mb-hide">
                    Với 1 lần sạc, YADEA G5 có thể đi quãng đường lên tới 80km. Cả ngày mặc sức lượn khắp thành phố mà chẳng lo hết pin
                </p>
                <a class="cta service-cta">
                    TÌM HIỂU THÊM
                    <span class="arrow"></span>
                </a>
            </div>
        </div>
    </section>
    <!-- Service Introduction -->


    <!-- Section Real Image Slider -->
    <section class="product-real-image-section" id="product-real-image-section">

        <!-- Container -->
        <div class="container">

            <div class="heading">
                <h3 class="title">HÌNH ẢNH THỰC TẾ YADEA G5</h3>
            </div>

            <!-- Slider Holder -->
            <div class="slider holder">
                <ul class="real-img-slider">

                    <!-- Slide item -->
                    <li class="slide-item">
                        <a class="venobox"
                           href="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/yadea-real.jpg'); ?>">
                            <img draggable="false"
                                 src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/yadea-real.jpg'); ?>">
                        </a>
                    </li>

                    <!-- Slide item -->
                    <li class="slide-item">
                        <a class="venobox"
                           href="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/yadea-real.jpg'); ?>">
                            <img draggable="false"
                                 src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/yadea-real.jpg'); ?>">
                        </a>
                    </li>

                    <!-- Slide item -->
                    <li class="slide-item">
                        <a class="venobox"
                           href="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/yadea-real.jpg'); ?>">
                            <img draggable="false"
                                 src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/yadea-real.jpg'); ?>">
                        </a>
                    </li>

                    <!-- Slide item -->
                    <li class="slide-item">
                        <a class="venobox"
                           href="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/yadea-real.jpg'); ?>">
                            <img draggable="false"
                                 src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/yadea-real.jpg'); ?>">
                        </a>
                    </li>

                </ul>
            </div>
        </div>

    </section>
    <!-- Section Real Image Slider - END -->


    <!-- Product Other Information -->
    <section class="product-other-information" id="product-other-information">

        <!-- Left Page Information -->
        <div class="info-item left-info">
            <div class="bg-img">
                <img draggable="false"
                     src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/other-info-left.jpg'); ?>">
            </div>
            <a class="cta cta-info">Thông số kỹ thuật</a>
        </div>

        <!-- Right Page Information -->
        <div class="info-item right-info">
            <div class="bg-img">
                <img draggable="false"
                     src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/g5/other-info-right.jpg'); ?>">
            </div>
            <a class="cta cta-info">Thông số kỹ thuật</a>
        </div>

    </section>
    <!-- Product Other Information - END -->


    <!-- Social Comment Section -->
    <div class="social-comment"></div>
    <!-- Social Comment Section -->
</div>
<!-- ====== MAIN CONTENT - END ====== -->


<!-- === FOOTER === -->
<?php get_template_part('template-parts/footer', 'main') ?>
<!-- === FOOTER - END === -->


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
<!-- === REUSABLE ELEMENT === -->


<!-- ====== SCRIPT REFERENCES  ====== -->

<!-- jQuery-->
<script src="<?php echo get_theme_file_uri('landing-page/yadea-g5/js/jquery-3.3.1.min.js'); ?>"></script>

<!-- Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<!-- Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Slick Slider -->
<script src="<?php echo get_theme_file_uri('landing-page/yadea-g5/js/slick.min.js'); ?>"></script>

<!-- Slick Slider -->
<script src="<?php echo get_theme_file_uri('landing-page/yadea-g5/js/particles.min.js'); ?>"></script>

<!-- Yadea Main Theme Scripts -->
<script src="<?php echo get_theme_file_uri('landing-page/yadea-g5/js/scripts-bundled-main.js'); ?>"></script>

<!-- VenoBox Additional -->
<link rel="stylesheet" href="<?php echo get_theme_file_uri('landing-page/yadea-g5/css/vendors/venobox.css'); ?>">
<script src="<?php echo get_theme_file_uri('landing-page/yadea-g5/js/venobox.min.js'); ?>"></script>


<script>
    <?php echo 'g5_assets_route = "'. get_theme_file_uri('landing-page/yadea-g5/').'"';  ?>
</script>

<!-- G5 Script -->
<script src="<?php echo get_theme_file_uri('landing-page/yadea-g5/js/scripts-bundled.js'); ?>"></script>

<!-- ====== SCRIPT REFERENCES - END ====== -->
</body>
</html>