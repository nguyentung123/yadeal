<?php
/*
Template Name: Yadea Ulike Product Landing Page
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Yadea U-Like</title>
    <base href="<?php echo get_theme_file_uri('landing-page/yadea-ulike/'); ?>" target="_blank">


    <!-- META DATA -->
    <!-- META DATA - END -->

    <!-- STYLESHEET -->
    <!-- Vendor -->
    <!-- Vendor -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/vendors/slick.css">

    <!-- Yadea Main Stylesheet -->
    <link rel="stylesheet" href="css/core/styles.css">

    <!-- Werpro Main Stylesheet -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- STYLESHEET - END -->

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
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PM2J8PG"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- LOADING OVERLAY -->
<div id="loading-overlay">
    <img src="https://yadeavietnam.vn/wp-content/themes/yadea-theme/assets/img/logo.png"
         class="loading-image">
</div>
<!-- LOADING OVERLAY -->

<!-- === HEADER === -->
<?php get_template_part('template-parts/header', 'main-teaser') ?>
<!-- === HEADER - END === -->


<!-- === MAIN CONTENT === -->
<div class="page-wrapper" id="yadea-ulike-page">

    <!-- Section Banner -->
    <section class="section section-banner">
        <!-- Background -->
        <div class="banner-bg">
            <img src="img/banner-bg.jpg" alt="" class="mb-hide">
            <img src="img/banner-bg-mb.jpg" alt="" class="mb-show">
        </div>
        <!-- Background -->

        <!-- Bike Name Effect -->
        <div class="bike-name-holder">

            <!-- Bike Name -->
            <div class="bike-name">
                <img src="img/name.png" class="mb-hide">
                <img src="img/name-mb.png" alt="" class="mb-show">
            </div>

            <!-- Bike Slogan -->
            <div class="bike-slogan">
                <img src="img/slogan.png" class="mb-hide">
                <img src="img/mobile-slogan.png" class="mb-show">
            </div>
            <!-- Bike Slogan - END -->

        </div>
        <!-- Bike Name Effect - END -->

        <!-- Bike Image -->
        <div class="bike-img">
            <img src="img/banner-bike.png">
        </div>
        <!-- Bike Image - END -->

        <!-- Feature -->
        <div class="banner-feature">

            <!-- Feature List -->
            <div class="feature-list">

                <!-- Feature Item -->
                <li class="feature-item">
                    <div class="icon-holder">
                        <img src="img/banner-road-ico.png">
                    </div>
                    <p class="desc">
                        Đi xa <br> 80km/sạc
                    </p>
                </li>

                <!-- Feature Item -->
                <li class="feature-item">
                    <div class="icon-holder">
                        <img src="img/banner-led-ico.png">
                    </div>
                    <p class="desc">
                        Xi nhan góc rộng<br>270 độ
                    </p>
                </li>

                <!-- Feature Item -->
                <li class="feature-item">
                    <div class="icon-holder">
                        <img src="img/banner-bike-ico.png">
                    </div>
                    <p class="desc">
                        Khoảng để chân rộng<br>
                        310mm
                    </p>
                </li>
            </div>
        </div>
        <!-- Feature -->
    </section>
    <!-- Section Banner - END -->


    <!-- Section Divider -->
    <section class="section section-divider"
             style="background-image: url('img/bg1.jpg'); ">

        <!-- Background Holder -->
        <div class="bg-holder"></div>
        <!-- Background Holder - END -->

        <!-- Main Content -->
        <div class="main-img">
            <div class="img-holder">
                <img src="img/title-1.png">
            </div>
        </div>
        <!-- Main Content - END -->

    </section>
    <!-- Section Divider - END -->


    <!-- Distance Section -->
    <section class="section section-distance">

        <!-- Container -->
        <div class="container">

            <!-- Heading Image -->
            <div class="heading-img">

                <!-- Img Holder -->
                <div class="img-holder">
                    <img src="img/80km.png">
                </div>

                <!-- Waving Effect -->
                <div class="waving-effect">
                    <div class="wave-effect-item item-1"></div>
                    <div class="wave-effect-item item-2"></div>
                    <div class="wave-effect-item item-3"></div>
                    <div class="wave-effect-item item-4"></div>
                    <div class="wave-effect-item item-5"></div>
                </div>

            </div>
            <!-- Heading Image - END -->

            <!-- Context Layout Block -->
            <div class="context-layout">

                <!-- Context Detail -->
                <div class="main-content">
                    <h3 class="title">
                        80 CÂY SỐ<br>
                        ĐI KHẮP PHỐ PHƯỜNG
                    </h3>
                    <h4 class="sub-title">
                        Acquy cao cấp thế hệ mới
                    </h4>
                    <p class="desc">
                        Ngồi ngay ngắn, nhấn ga và hãy để YADEA ULIKE đưa bạn khám
                        phá mọi ngóc ngách của thành phố. Bạn thỏa sức lượn phố mua
                        sắm, hẹn hò cà phê từ sáng đến tối mà chẳng lo xe hết điện.
                        Chỉ với 1 lần sạc, xe có thể đi được quãng đường dài đến 80km.
                    </p>
                </div>
                <!-- Context Detail -->

                <!-- Context Thumbnail -->
                <div class="context-thumbnail">
                    <div class="img-holder">
                        <img src="img/real-img4old.jpg">
                    </div>
                </div>
                <!-- Context Thumbnail - END -->

            </div>
            <!-- Context Block - END -->

        </div>
        <!-- Container -->

    </section>
    <!-- Distance Section - END -->


    <!-- Light Section -->
    <section class="section section-light-section">

        <!-- Main Container -->
        <div class="container">

            <!-- Main Content -->
            <div class="main-content">
                <h3 class="title">LED MẠNH MẼ XUYÊN MÀN ĐÊM</h3>
                <h4 class="sub-title">Hệ thống đèn cao cấp toàn xe</h4>
                <p class="desc">
                    Mang đến trải nghiệm ánh sáng trắng cao cấp, khẳng định vẻ <br class="mb-hide">
                    đẹp thời thượng của YADEA ULIKE. Công nghệ LED thế hệ mới <br class="mb-hide">
                    cho hiệu suất chiếu sáng vượt trội, bền bỉ theo thời gian <br class="mb-hide">
                    và tiết kiệm năng lượng tối đa.
                </p>
            </div>
            <!-- Main Content - END -->

        </div>
        <!-- Main Container - END -->

        <!-- Bike IMG Holder -->
        <div class="effect-holder">

            <div class="led-effect">
                <img src="img/led-effect.png">
            </div>

            <!-- IMG Holder -->
            <div class="img-holder">
                <img src="img/bike-light-full.png">
            </div>

        </div>
        <!-- Bike IMG Holder -->

    </section>
    <!-- Light Section - END -->


    <!-- Mixed Feature Section 1 -->
    <section class="section section-mixed-feature feature-mixed-1">

        <!-- Effect Holder -->
        <div class="mixed-effect">

            <!-- Top Background -->
            <div class="top-background">

                <!-- Boundary Holder -->
                <div class="boundary-holder">
                    <svg version="1.1" class="mb-hide" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 300 59">
                        <polygon class="st0" points="0,0 300,59 300,0"/>
                    </svg>

                    <svg class="mb-show" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 750 330">
                        <polygon class="st0" points="0,0 750,0 750,330"/>
                    </svg>
                </div>
                <!-- Boundary Holder - END -->

            </div>
            <!-- Top Background - END -->

        </div>
        <!-- Effect Holder - END -->

        <!-- Container -->
        <div class="container">

            <!-- Feature Section -->
            <div class="section-comfort">

                <!-- Main Content -->
                <div class="main-content">
                    <h3 class="title">THOẢI MÁI TRÊN TỪNG CÂY SỐ</h3>
                    <h4 class="sub-title">
                        Yên xe cao 720mm,<br>
                        khoang để chân rộng 310mm
                    </h4>
                    <p class="desc">
                        Giúp bạn co duỗi dễ dàng khi ngồi trên xe. Được thiết kế theo tỉ lệ <br class="mb-hide">
                        vàng hoàn hảo, YADEA ULIKE tối ưu cảm giác thoái mái lái xe của <br class="mb-hide">
                        bạn. Hãy tận dụng khoảng không gian rộng rãi này để mang thêm <br class="mb-hide">
                        nhiều vật dụng khác, thật tiện lợi.
                    </p>
                </div>

                <!-- Effect Holder -->
                <div class="effect-holder">
                    <div class="bike-img">
                        <img src="img/bike.png">
                    </div>

                    <div class="bike-overlay">
                        <img src="img/bike-triangle.png">
                    </div>

                    <!-- Triangle Effect -->
                    <div class="bike-triangle">
                        <!-- Shape -->
                        <div class="triangle-holder">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 189 300">
                                <polygon  id="triangle" class="st0" points="1,0 1,300 189,150 "/>
                            </svg>
                        </div>

                        <!-- Detail 1 -->
                        <p class="detail detail-1">
                            720mm
                        </p>

                        <!-- Detail 2 -->
                        <p class="detail detail-2">
                            310mm
                        </p>
                    </div>
                </div>


            </div>
            <!-- Feature Block - END -->

            <!-- Context Layout Block -->
            <div class="section-led">

                <!-- Context Detail -->
                <div class="main-content">

                    <!-- Title -->
                    <h3 class="title">
                        SANG ĐƯỜNG AN TOÀN
                    </h3>

                    <!-- Sub Title -->
                    <h4 class="sub-title">
                        Xi nhan 270 độ
                    </h4>

                    <!-- Desc -->
                    <p class="desc">
                        Tăng khả năng nhận diện từ xa đến 30%. Các phương tiện xung quanh sẽ dễ dàng nhận ra chiếc
                        xe của bạn đang phát tín hiệu sang đường nhờ thiết kế xi nhan độc đáo, có góc chiếu sáng lên
                        tới 270 độ.
                    </p>

                </div>
                <!-- Context Detail -->

                <!-- Context Thumbnail -->
                <div class="context-thumbnail">

                    <!-- Img Holder -->
                    <div class="img-holder">
                        <img class="no-led" src="img/feature1-noled.png">
                        <img class="led" src="img/feature1.jpg">
                    </div>

                </div>
                <!-- Context Thumbnail - END -->
            </div>
            <!-- Context Block - END -->

        </div>
        <!-- Container - END -->

    </section>
    <!-- Mixed Feature Section 1 - END -->


    <!-- Section Divider -->
    <section class="section section-divider"
             style="background-image: url(img/bg2.png);">

        <!-- Main Content -->
        <div class="main-img">
            <div class="img-holder">
                <img src="img/title2.png">
            </div>
        </div>
        <!-- Main Content - END -->

    </section>
    <!-- Section Divider - END -->


    <!-- Mixed Feature Section 2 -->
    <section class="section section-mixed-feature feature-mixed-2">

        <!-- Mixed Effect Holder -->
        <div class="mixed-effect">

            <!-- Layer 1 -->
            <div class="mixed-layer layer-1">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 300 59">
                    <polygon class="st0" points="0,59 300,0 0,0 "/>
                </svg>
            </div>

            <!-- Layer 2 -->
            <div class="mixed-layer layer-2">
                <svg version="1.1" class="mb-hide"
                     id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 300 59">
                    <polygon class="st0" points="0,0 300,59 300,0"/>
                </svg>

                <svg version="1.1" class="mb-show" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 750 260">
                    <polygon class="st0" points="0,0 750,0 750,260 "/>
                </svg>
            </div>

            <!-- Layer 3 -->
            <div class="mixed-layer layer-3">
                <svg version="1.1" class="mb-hide" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 300 59">
                    <polygon class="st0" points="0,59 300,0 0,0 "/>
                </svg>

                <svg version="1.1" class="mb-show" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 750 340">
                    <polygon class="st0" points="0,0 750,0 0,340 "/>
                </svg>
            </div>
        </div>
        <!-- Mixed Effect Holder - END -->

        <!-- Container -->
        <div class="container">

            <!-- Design Feature -->
            <div class="design-feature">

                <!-- Main Context Text -->
                <div class="main-content">
                    <h3 class="title">LÊN XE THỜI THƯỢNG</h3>
                    <h4 class="sub-title">Thiết kế tối giản, hiện đại</h4>
                    <p class="desc">
                        Với dáng vẻ khác biệt, YADEA Ulike sẽ dễ dàng thu hút sự chú ý của bạn ngay từ ánh nhìn<br class="mb-hide">
                        lần đầu tiên. Thiết kế độc đáo giúp xe di chuyển linh hoạt, dễ dàng trong mọi tình huống,<br class="mb-hide">
                        trên mọi cung đường.
                    </p>
                </div>
                <!-- Main Context Text - END -->

                <!-- Images List -->
                <div class="images-list">

                    <!-- Images Layout Holder -->
                    <div class="design-feature-img-layout">

                        <!-- img item -->
                        <div class="img-holder">
                            <img src="img/real-img2.jpg">
                        </div>

                        <!-- img item -->
                        <div class="img-holder">
                            <img src="img/real-img3.jpg">
                        </div>

                        <!-- img item -->
                        <div class="img-holder">
                            <img src="img/real-img4.jpg">
                        </div>
                    </div>

                </div>
                <!-- Images List - END -->

            </div>
            <!-- Design Feature - END -->


            <!-- Colors Feature -->
            <div class="colors-feature">

                <!-- Main Content -->
                <div class="main-content">
                    <h3 class="title">
                        XUỐNG PHỐ THỜI TRANG
                    </h3>
                    <h4 class="sub-title">
                        Sắc màu bật cá tính
                    </h4>
                    <p class="desc">
                        Các gam màu hòa trộn độc đáo, làm nổi bật từng đường nét thiết kế tinh tế, khẳng định <br>
                        phong cách của riêng bạn. Lựa chọn ngay chiếc YADEA U-LIKE cá tính của mình.
                    </p>
                </div>
                <!-- Main Content - END -->

                <!-- Colors Slider -->
                <div class="colors-slider-holder" id="color-sliders">

                    <!-- Color Slider -->
                    <ul class="colors-slider">
                        <!-- Color Item -->
                        <li class="bike-color-item">
                            <img src="img/bike-yellow.png">
                        </li>

                        <!-- Color Item -->
                        <li class="bike-color-item">
                            <img src="img/bike-white.png">
                        </li>

                        <!-- Color Item -->
                        <li class="bike-color-item">
                            <img src="img/bike-black.png">
                        </li>

                        <!-- Color Item -->
                        <li class="bike-color-item">
                            <img src="img/bike-red.png">
                        </li>
                    </ul>
                    <!-- Color Slider - END -->

                    <!-- Color Indicator -->
                    <ul class="colors-indicator">
                        <!-- Color Item -->
                        <li class="color-item yellow active">
                        </li>

                        <!-- Color Item -->
                        <li class="color-item white">
                        </li>

                        <!-- Color Black -->
                        <li class="color-item black">
                        </li>

                        <!-- Color Red -->
                        <li class="color-item red">
                        </li>
                    </ul>
                    <!-- Color Indicator - END -->

                </div>
                <!-- Colors Slider - END -->

            </div>
            <!-- Colors Feature - END -->

        </div>
        <!-- Container - END -->

        <!-- Container Feature -->
        <div class="container-feature">

            <!-- Container -->
            <div class="container">
                <!-- Main Content -->
                <div class="main-content">
                    <h3 class="title">
                        CÙNG BẠN<br>
                        MANG CẢ THẾ GIỚI
                    </h3>
                    <h4 class="sub-title">
                        Cốp rộng dung tích 20L
                    </h4>
                    <p class="desc">
                        Như một ngôi nhà thứ hai của bạn, với chiều rộng lên<br class="mb-hide">
                        tới 310 mm, chiếc cốp siêu rộng của YADEA ULIKE có<br class="mb-hide">
                        thể đựng vừa 2 chiếc mũ bảo hiểm và rất nhiều đồ <br class="mb-hide">
                        dùng cá nhân.
                    </p>
                </div>
                <!-- Main Content  - END -->
            </div>
            <!-- Container - END -->

            <!-- Container Effect Holder -->
            <div class="effect-holder">
                <div class="bike-img">
                    <img src="img/bike-container.png" alt="">
                </div>
                <div class="shadow-img">
                    <img src="img/bike-shadow.png" alt="">
                </div>
            </div>
            <!-- Container Effect Holder -->

        </div>
        <!-- Container Feature - END -->

        <!-- Container -->
        <div class="container">

            <!-- Charging Feature -->
            <div class="charging-feature">

                <!-- Main Content -->
                <div class="main-content">
                    <h3 class="title">KHÔNG LO HẾT PIN ĐIỆN THOẠI</h3>
                    <h4 class="sub-title">Cổng sạc USB</h4>
                    <p class="desc">
                        Chỉ cần kết nối với cổng sạc USB, bố trí sẵn trên YADEA ULIKE, điện thoại di động của bạn<br class="mb-hide">
                        có thể được sạc pin ngay tức thì. Pin đầy, sẵn sàng kết nối, chẩng lo bỏ lỡ những điều<br class="mb-hide">
                        quan trọng.
                    </p>
                </div>
                <!-- Main Content - END -->

                <!-- Thumbnail -->
                <div class="thumbnail">
                    <div class="img-holder">
                        <img src="img/charging.jpg">
                    </div>
                </div>
                <!-- Thumbnail - END -->

            </div>
            <!-- Charging Feature End -->


            <!-- Smart Screen -->
            <div class="smart-screen-feature">

                <!-- Main Content -->
                <div class="main-content">
                    <h3 class="title">HIỂN THỊ THÔNG SỐ RÕ RÀNG</h3>
                    <h4 class="sub-title">Màn hình điện tử cao cấp</h4>
                    <p class="desc">
                        Các thông số hiển thị khoa học và trực quan, <br class="mb-hide">
                        giúp quan sát dễ dàng mọi thông số của xe: vận tốc, tình trạng pin,<br class="mb-hide">
                        quãng đường…trên màn hình LCD cao cấp.
                    </p>
                </div>
                <!-- Main Content - END -->

                <!-- Thumbnail -->
                <div class="thumbnail">
                    <div class="img-holder">
                        <img src="img/screen-feature.jpg" alt="">
                    </div>

                    <!-- Screen Detail Holder -->
                    <div class="detail-holder">

                        <!-- Detail Item -->
                        <div class="detail-item battery">
                            <span class="name">
                                Vạch báo pin
                            </span>
                            <div class="line">
                                <span class="dot">
                                    <span class="wave"></span>
                                </span>
                            </div>
                        </div>

                        <!-- Detail Item -->
                        <div class="detail-item speed">
                            <span class="name">
                                Vận tốc
                            </span>
                            <div class="line">
                                <span class="dot">
                                    <span class="wave"></span>
                                </span>
                            </div>
                        </div>

                        <!-- Detail Item -->
                        <div class="detail-item distance">
                            <span class="name">
                                Quãng đường
                            </span>
                            <div class="line">
                                <span class="dot">
                                    <span class="wave"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Smart Screen - END -->

        </div>
        <!-- Container - END -->

    </section>
    <!-- Mixed Feature Section 2 -->


    <!-- Section Bike Controller -->
    <section class="section section-bike-controller">
        <!-- Main Content -->
        <div class="main-content">
            <h3 class="title">ĐIỀU KHIỂN XE DỄ DÀNG</h3>
            <h4 class="sub-tile">Giao diện nút bấm thân thiện</h4>
            <p class="desc">
                Được thiết kế khoa học, phù hợp với phản ứng tâm lý <br class="mb-hide">
                và thói quen của người lái. Để có thể dễ dàng và thuận tiện<br class="mb-hide">
                khi điều khiển xe, chiếc YADEA ULIKE của bạn được trang <br class="mb-hide">
                bị các tính năng phong phú.
            </p>
        </div>
        <!-- Main Content - END -->

        <!-- Image Holder -->
        <div class="img-holder">

            <!-- Main IMG Holder -->
            <div class="main-img">
                <img src="img/bike-control.png">
            </div>

            <!-- Context Item - Item 1 -->
            <div class="controller-context context-1">
                <div class="line-holder"></div>
                <span class="label">
                    <span class="name">Đỗ xe</span>
                    <span class="effect"></span>
                </span>
                <p class="desc">
                    Chế độ ĐỖ XE AN TOÀN hoạt động, giúp bạn tránh khỏi những cú vọt ga bất ngờ khi đang dừng
                    xe tạm thời.
                </p>
            </div>
            <!-- Context Item - END -->

            <!-- Context Item - Item 2 -->
            <div class="controller-context context-2">
                <div class="line-holder"></div>
                <span class="label">
                    <span class="name">Chế độ lái</span>
                    <span class="effect"></span>
                </span>
                <p class="desc">
                    Cho phép bạn chuyển và chọn chế độ lái phù hợp.<br>
                    <b>ECO:</b> phù hợp đi đường ổn định,<br> đường trường, tiết kiệm điện năng.<br>
                    <b>SPORT:</b> Phù hợp cho muốn tăng tốc,<br> hoặc leo dốc.
                </p>
            </div>
            <!-- Context Item - END -->

        </div>
        <!-- Image Holder - END -->

    </section>
    <!-- Section Bike Controller - END -->


    <!-- Section Divider -->
    <section class="section section-divider"
             style="background-image: url(img/bg3.jpg);">

        <!-- Background Holder -->
        <div class="bg-holder"></div>
        <!-- Background Holder - END -->

        <!-- Main Content -->
        <div class="main-img">
            <div class="img-holder">
                <img src="img/title-3.png">
            </div>
        </div>
        <!-- Main Content - END -->

    </section>
    <!-- Section Divider - END -->


    <!-- Mixed Feature Section 3 -->
    <section class="section section-mixed-feature feature-mixed-3">

        <!-- Mixed Effect -->
        <div class="mixed-effect">

            <!-- Mixed Layer -->
            <div class="mixed-layer">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" class="mb-hide"
                     viewBox="0 0 300 101.5">
                    <polygon class="st0" points="0,0 300,0 0,101 "/>
                </svg>

                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" class="mb-show"
                     viewBox="0 0 750 360">
                    <polygon class="st0" points="0,0 750,0 0,360 "/>
                </svg>
            </div>

        </div>
        <!-- Mixed Effect END -->

        <!-- Engine Feature -->
        <div class="engine-feature">

            <!-- Main Content -->
            <div class="main-content">
                <h3 class="title">CHINH PHỤC ĐƯỜNG TRƯỜNG</h3>
                <h4 class="sub-title">Động cơ GTR băng thông rộng</h4>
                <p class="desc">
                    Quy trình sản xuất khép kín nghiêm ngặt, đảm bảo độ khớp khít tuyệt đối trong từng chi tiết của
                    động cơ GTR. Với vận tốc tối đa lên tới 40km/h. Xe lướt đi êm ái, vun vút khám phá thành phố
                    cùng bạn.
                </p>
                <div class="extra-content mb-hide">
                    <div class="content-item">
                        <span class="label">Công suất:</span>
                        <span class="value">500W</span>
                    </div>
                    <div class="content-item">
                        <span class="label">Chống nước:</span>
                        <span class="value">IPX7</span>
                    </div>
                </div>
            </div>
            <!-- Main Content -->

            <!-- Effect Holder -->
            <div class="effect-holder">
                <div class="img-holder">
                    <img src="img/bike-back.png" alt="">
                </div>

                <div class="extra-content mb-show">
                    <div class="content-item">
                        <span class="label">Công suất:</span>
                        <span class="value">500W</span>
                    </div>
                    <div class="content-item">
                        <span class="label">Chống nước:</span>
                        <span class="value">IPX7</span>
                    </div>
                </div>
            </div>
            <!-- Effect Holder - END -->

        </div>
        <!-- Engine Feature - END -->

        <!-- Anti Thief Feature -->
        <div class="anti-thief-feature">

            <!-- Main content -->
            <div class="main-content">
                <h3 class="title">CHỐNG TRỘM AN TOÀN</h3>
                <h4 class="sub-title">Báo động ngay khi có tác động</h4>
                <p class="desc">
                    Nhờ hệ thống chống trộm, chiếc xe YADEA ULIKE của bạn sẽ được bảo vệ ở bất cứ nơi đâu. Ở trạng
                    thái khóa, khi có người lạ tác dụng lực lên xe, YADEA ULIKE sẽ phát ra tín hiệu bảo vệ, báo
                    động ngay lập tức.
                </p>
            </div>
            <!-- Main content - END -->

            <!-- Effect Holder -->
            <div class="effect-holder">
                <div class="bike-img">
                    <div class="main-bike">
                        <img src="img/bike-backside.png">
                    </div>

                    <div class="bike-shadow shadow-1">
                        <img src="img/bikeback-shadow1.png">
                    </div>

                    <div class="bike-shadow shadow-2">
                        <img src="img/bikeback-shadow2.png">
                    </div>
                </div>

                <div class="ring-img">
                    <img class="bell" src="img/bell-icon.png">
                    <img class="wave" src="img/bell-wave.png">
                </div>

                <div class="sound-img sound-1">
                    <img src="img/lightning-icon-1.png">
                </div>

                <div class="sound-img sound-2">
                    <img src="img/lightning-icon-2.png">
                </div>

            </div>
            <!-- Effect Holder -->

        </div>
        <!-- Anti Thief Feature - END -->

        <!-- Water Resistance -->
        <div class="water-resistance">

            <!-- Main Content -->
            <div class="main-content">
                <h3 class="title">CHỐNG NƯỚC BỀN BỈ</h3>
                <h4 class="sub-title">Chỉ số chống nước IPX7</h4>
                <p class="desc">
                    YADEA E3 có thể băng qua những con phố ngập nước lên tới  1 mét, sẵn sàng đồng hành cùng bạn mọi
                    lúc mọi nơi. Trong một cuộc thử nghiệm ở điều kiền mưa lớn, vỏ xe bị tháo rời hoàn toàn khỏi khung,
                    để lộ cáp điện và động cơ. Sau 24h, YADEA E3 đã xuất sắc vượt qua thử thách, hoạt động bình thường.
                </p>
            </div>
            <!-- Main Content - END -->

            <!-- Effect Holder -->
            <div class="effect-holder">
                <!-- Bike Immg -->
                <div class="bike-img">
                    <img src="img/bike-behind.png" alt="">
                </div>

                <!-- Water Splsh Effect -->
                <div class="water-splash">
                    <img src="img/water-splash.png" alt="">
                </div>
            </div>
            <!-- Effect Holder - END -->

        </div>
        <!-- Water Resistance - END -->

    </section>
    <!-- Mixed Feature Section 3 - END -->


    <!-- Accessories -->
    <section class="section section-accessories">
        <!-- Container -->
        <div class="container">

            <!-- Main Container -->
            <div class="main-content">
                <h3 class="title">LINH KIỆN CAO CẤP</h3>
                <h4 class="sub-title">Đảm bảo chất lượng tốt nhất</h4>
            </div>
            <!-- Main Container - END -->

            <!-- Accessories Holder -->
            <div class="accessories-list">

                <!-- Acc Item -->
                <div class="accessories-item">

                    <!-- Img Holder -->
                    <div class="img-holder">
                        <img src="img/acc1.jpg" alt="">
                    </div>
                    <!-- Img Holder- END -->

                    <!-- Context -->
                    <div class="accessories-context">
                        <h5 class="title">Khung xe bên chắc</h5>
                        <p class="desc">
                            Được áp dụng công nghệ hàn tự động hóa hiện đại <br class="mb-hide">và tiện hai đầu chuẩn xác đến từng milimét. 
                        </p>
                    </div>
                </div>
                <!-- Acc Item - END -->

                <!-- Acc Item -->
                <div class="accessories-item">
                    <!-- Img Holder -->
                    <div class="img-holder">
                        <img src="img/acc2.jpg" alt="">
                    </div>
                    <!-- Img Holder- END -->

                    <!-- Context -->
                    <div class="accessories-context">
                        <h5 class="title">Phanh đĩa trước</h5>
                        <p class="desc">
                            Giảm tốc an toàn và nhanh chóng; dừng xe tức <br class="mb-hide"> thời khi gặp phải tình huống bất ngờ trên đường. 
                        </p>
                    </div>
                </div>
                <!-- Acc Item - END -->

                <!-- Acc Item -->
                <div class="accessories-item">
                    <!-- Img Holder -->
                    <div class="img-holder">
                        <img src="img/acc3.jpg" alt="">
                    </div>
                    <!-- Img Holder- END -->

                    <!-- Context -->
                    <div class="accessories-context">
                        <h5 class="title">Giảm xóc thủy lực</h5>
                        <p class="desc">
                            Lò xo thép cao cấp có hành trình dài, tạo cảm <br class="mb-hide">
                            giác êm ái, sẵn sàng vượt qua mọi ổ gà, hố <br class="mb-hide">
                            xóc lồi lõm.
                        </p>
                    </div>
                </div>
                <!-- Acc Item - END -->

                <!-- Acc Item -->
                <div class="accessories-item">
                    <!-- Img Holder -->
                    <div class="img-holder">
                        <img src="img/acc4.jpg" alt="">
                    </div>
                    <!-- Img Holder- END -->

                    <!-- Context -->
                    <div class="accessories-context">
                        <h5 class="title">Lốp không săm</h5>
                        <p class="desc">
                            Bền gấp 1,2 lần so với lốp thường. Với thiết kế xẻ <br class="mb-hide">
                            rãnh đặc biệt, được sản xuất từ chất liệu cao cấp,  <br class="mb-hide">
                            lốp chống nước tốt, có độ bám mặt đường cao.
                        </p>
                    </div>
                </div>
                <!-- Acc Item - END -->

            </div>
            <!-- Accessories Holder - END -->
        </div>
        <!-- Container - END -->

    </section>
    <!-- Accessories - END -->


    <!-- Feature Section -->
    <section class="section section-features">

        <!-- Container -->
        <div class="container">

            <!-- Main Content -->
            <div class="main-content">
                <h3 class="title">
                    CHỐNG RUNG - CHỐNG NƯỚC - CHỐNG BỤI
                </h3>
            </div>

            <!-- Feature List -->
            <div class="feature-list">

                <!-- Feature Item -->
                <div class="feature-item">
                    <div class="img-holder"
                         style="background-image: url(img/spec-feature1.jpg)">
                    </div>
                    <div class="feature-context">
                        <p class="name">BỘ ĐIỀU KHIỂN STM32</p>
                        <p class="desc">
                            Được sản xuất bởi ST Micro Electronics, một trong những tập đoàn công nghệ hàng đầu
                            hiện nay. Công nghệ đổ khuôn hiện đại giúp chống đoản mạch và bảo vệ bộ vi điều khiển
                            khỏi các tác động từ môi trường.
                        </p>
                    </div>
                </div>
                <!-- Feature Item - END -->

                <!-- Feature Item -->
                <div class="feature-item">
                    <div class="img-holder"
                         style="background-image: url(img/spec-feature2.jpg)">
                    </div>
                    <div class="feature-context">
                        <p class="name">Hệ thống dây điện cao cấp</p>
                        <p class="desc">
                            Có diện tích tiếp xúc lớn, bọc bởi lớp vỏ tản nhiệt cùng các mối nối cao su cách nước
                            cho khả năng chống cháy, chống nước hiệu quả.
                        </p>
                    </div>
                </div>
                <!-- Feature Item - END -->

                <!-- Feature Item -->
                <div class="feature-item">
                    <div class="img-holder"
                         style="background-image: url(img/spec-feature3.jpg)">
                    </div>
                    <div class="feature-context">
                        <p class="name">BỘ SẠC</p>
                        <p class="desc">
                            Gọn nhẹ, an toàn và dễ sử dụng. Công nghệ đúc nguội Epoxy Resin bảo vệ hệ thống bo mạch
                            hiện đại, có tác dụng chống nước, chống lại các rung chấn, va đập ngoài môi trường.
                        </p>
                    </div>
                </div>
                <!-- Feature Item - END -->

            </div>
            <!-- Feature List -->
        </div>
        <!-- Container END -->

    </section>
    <!-- Feature Section - END -->


    <!-- Image Library List -->
    <section class="section section-images-library">
        <div class="image-slider-viewport">
            <div class="slider-track-holder">
                <div class="image-list-group group-1">
                    <div class="img-item"
                         style="background-image: url(img/gallery/1.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/3.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/4.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/2.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/5.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/6.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/10.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/9.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/8.jpg)">
                    </div>
                </div>
                <div class="image-list-group group-2">
                    <div class="img-item"
                         style="background-image: url(img/gallery/11.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/12.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/13.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/14.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/15.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/16.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/17.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/18.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/19.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/6.jpg)">
                    </div>
                </div>
                <div class="image-list-group group-3">
                    <div class="img-item"
                         style="background-image: url(img/gallery/1.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/3.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/4.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/2.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/5.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/6.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/10.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/9.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/8.jpg)">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Image Library List - END -->


    <!-- REUSE -->
    <!-- Spec and Color Slider -->
    <section class="section section-spec-slider" id="specs-section">

        <!-- Container -->
        <div class="custom-container">

            <!-- Color Slider Holder -->
            <div class="color-slider-holder" id="e3-color-slider">

                <!-- Color Variation Slider -->
                <ul class="color-listing">

                    <!-- Color Item -->
                    <li class="bike-color-item gray">
                        <img draggable=false src="img/bike-white.png">
                        <div class="shadow-effect"></div>
                    </li>

                    <!-- Color Item -->
                    <li class="bike-color-item black">
                        <img draggable=false src="img/bike-red.png">
                        <div class="shadow-effect"></div>
                    </li>

                    <!-- Color Item -->
                    <li class="bike-color-item white">
                        <img draggable=false src="img/bike-black.png">
                        <div class="shadow-effect"></div>
                    </li>

                </ul>
                <!-- Color Variation Slider -->

                <div class="custom-button">
                    <li class="slider-button button-white active"></li>
                    <li class="slider-button button-red"></li>
                    <li class="slider-button button-black"></li>
                </div>
            </div>
            <!-- Color Slider Holder - END -->

            <!-- Prize Estimation -->
            <div class="prize-estimation">
                <p class="price-holder">
                    Giá dự kiến: <span class="highlight">00.000.000 <span class="small">vnđ</span></span>
                </p>
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
                            <div class="thumbnail-holder"
                                 style="background-image: url(img/news-thumbnail.png)">
                            </div>

                            <!-- Context -->
                            <div class="context">
                                <a class="news-link-wrapper">
                                    <h3 class="title">
                                        Lorem ipsum dolor sit amet,
                                    </h3>
                                    <p class="desc">
                                        consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    </p>
                                </a>
                            </div>
                        </div>
                    </li>

                    <!-- News Item -->
                    <li class="news-item">
                        <div class="content-holder">
                            <!-- Thumbnail -->
                            <div class="thumbnail-holder"
                                 style="background-image: url(img/news-thumbnail.png)">
                            </div>

                            <!-- Context -->
                            <div class="context">
                                <a class="news-link-wrapper">
                                    <h3 class="title">
                                        Lorem ipsum dolor sit amet,
                                    </h3>
                                    <p class="desc">
                                        consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    </p>
                                </a>
                            </div>
                        </div>
                    </li>

                    <!-- News Item -->
                    <li class="news-item">
                        <div class="content-holder">
                            <!-- Thumbnail -->
                            <div class="thumbnail-holder"
                                 style="background-image: url(img/news-thumbnail.png)">
                            </div>

                            <!-- Context -->
                            <div class="context">
                                <a class="news-link-wrapper">
                                    <h3 class="title">
                                        Lorem ipsum dolor sit amet,
                                    </h3>
                                    <p class="desc">
                                        consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    </p>
                                </a>
                            </div>
                        </div>
                    </li>

                    <!-- News Item -->
                    <li class="news-item">
                        <div class="content-holder">
                            <!-- Thumbnail -->
                            <div class="thumbnail-holder"
                                 style="background-image: url(img/news-thumbnail.png)">
                            </div>

                            <!-- Context -->
                            <div class="context">
                                <a class="news-link-wrapper">
                                    <h3 class="title">
                                        Lorem ipsum dolor sit amet,
                                    </h3>
                                    <p class="desc">
                                        consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    </p>
                                </a>
                            </div>
                        </div>
                    </li>

                    <!-- News Item -->
                    <li class="news-item">
                        <div class="content-holder">
                            <!-- Thumbnail -->
                            <div class="thumbnail-holder"
                                 style="background-image: url(img/news-thumbnail.png)">
                            </div>

                            <!-- Context -->
                            <div class="context">
                                <a class="news-link-wrapper">
                                    <h3 class="title">
                                        Lorem ipsum dolor sit amet,
                                    </h3>
                                    <p class="desc">
                                        consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    </p>
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
</div>
<!-- ====== MAIN CONTENT - END ====== -->



<!-- === FOOTER === -->
<?php get_template_part('template-parts/footer', 'main') ?>
<!-- === FOOTER - END === -->



<!-- === REUSABLE ===
    INSTRUCTION:
    _ Use For Modal, Chat Blog, Elements That Are Shared Among Pages
    _ Those Reusable Element is not inside the main content of the page
-->
<!-- === REUSABLE - END === -->



<!-- ====== SCRIPT REFERENCES  ====== -->
<!-- jQuery-->
<script src="js/jquery-3.3.1.min.js"></script>

<!-- Slick -->
<script src="js/slick.min.js"></script>

<script type='text/javascript'>
    /* <![CDATA[ */
    var yadeaVietnamVariables = {"root_url":"https:\/\/yadeavietnam.vn","assets_url":"https:\/\/yadeavietnam.vn\/wp-content\/themes\/yadea-theme\/assets\/","oxygen_start":"","oxygen_end":""};
    /* ]]> */
</script>
<!-- Yadea Main Script -->
<script src="js/core/scripts-bundled.js"></script>

<!-- Wepro Main Script -->
<script src="js/scripts-bundled.js"></script>
<!-- ====== SCRIPT REFERENCES - END ====== -->

</body>
</html>