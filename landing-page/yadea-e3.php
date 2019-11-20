<?php
/*
Template Name: Yadea E3 Product Landing Page
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta property="fb:app_id" content="575722139842209" />

    <title>YADEA E3 | Phong cách của tôi | Xe máy điện thông minh</title>
    <base href="<?php echo get_theme_file_uri('landing-page/yadea-e3/'); ?>" target="_blank">
    <meta property="fb:app_id" content="575722139842209" />

    <!-- META DATA -->
    <meta name="description" content="Xe máy điện thông minh YADEA E3 phong cách trẻ trung phù hợp học sinh sinh viên nhân viên văn phòng, Quãng đường dài phù hợp học sinh, xem thông tin thông số kĩ thuật xe điện, so sánh xe điện, xem giá xe máy điện YADEA E3, hình ảnh thực tế xe E3">
    <meta name="keyword" content="yadea E3, E3, xe E3, xe yadea E3, xe máy điện yadea E3, xe điện yadea E3, xe máy điện E3, so sánh yadea E3, đánh giá yadea E3, giá yadea E3, hình ảnh yadea E3, thông số yadea E3, so sánh E3, đánh giá E3, giá E3, hình ảnh E3, thông số E3, xe máy điện thông minh, xe điện thông minh, xe máy điện, xe điện.">
    <meta property="og:url" content="https://yadeavietnam.vn/yadea-e3">

    <meta property="og:image" content="<?php echo get_theme_file_uri('landing-page/yadea-e3/img/fbshare.jpg'); ?>">
    <meta property="og:image:secure_url" content="<?php echo get_theme_file_uri('landing-page/yadea-e3/img/fbshare.jpg'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="YADEA E3 | Phong cách của tôi | Xe máy điện thông minh">
    <meta property="og:description" content="Xe máy điện thông minh YADEA E3 phong cách trẻ trung phù hợp học sinh sinh viên nhân viên văn phòng, Quãng đường dài phù hợp học sinh, xem thông tin thông số kĩ thuật xe điện, so sánh xe điện, xem giá xe máy điện YADEA E3, hình ảnh thực tế xe E3">
    <!-- META DATA - END -->
    <!-- META DATA -->
    <!-- META DATA - END -->

    <!-- STYLESHEET -->
    <!-- Vendor -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/vendors/slick.css">

    <!-- Yadea Main Stylesheet -->
    <link rel="stylesheet" href="css/core/styles.css">

    <!-- Yadea E3 Main Style Sheet Main Stylesheet -->
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

<!-- === HEADER === -->
<?php get_template_part('template-parts/header', 'main-teaser') ?>
<!-- === HEADER - END === -->

<!-- LOADING OVERLAY -->
<div id="loading-overlay">
    <img src="https://yadeavietnam.vn/wp-content/themes/yadea-theme/assets/img/logo.png"
         class="loading-image">
</div>
<!-- LOADING OVERLAY -->

<!-- === MAIN CONTENT === -->
<div class="page-wrapper" id="yadea-e3-page">

    <!-- Banner -->
    <section class="section section-banner">

        <!-- Background -->
        <div class="bg-holder">
            <img src="img/banner-bg.jpg" alt="banner background" class="mb-hide">
            <img src="img/banner-bg-mb.jpg" class="mb-show">
        </div>

        <!-- Bike Image -->
        <div class="bike-img">
            <img src="img/e3-banner-product.png" alt="e3 bike">
        </div>

        <!-- Main Content -->
        <div class="main-content">

            <!-- Logo -->
            <div class="logo-img">
                <img src="img/e3-logo.png" alt="">
            </div>

            <!-- Cta Holder -->
            <div class="cta-holder">
                <a class="cta">Mua ngay <i class="fa fa-caret-right" aria-hidden="true"></i></a>
            </div>

        </div>
    </section>
    <!-- Banner - END -->


    <!-- Section Divider -->
    <section class="section section-divider"
             style="background-image: url('img/section-divider-bg.jpg'); ">

        <!-- Background Holder -->
        <div class="bg-holder"></div>
        <!-- Background Holder - END -->

        <!-- Main Content -->
        <div class="main-content">
            <div class="img-holder">
                <img src="img/feature-title1.png">
            </div>
        </div>
        <!-- Main Content - END -->

    </section>
    <!-- Section Divider - END -->


    <!-- Section Design Intro -->
    <section class="section section-design-intro" id="section-e3-design">

        <!-- Custom Container -->
        <div class="custom-container">

            <!-- Main Content -->
            <div class="main-content">
                <h3 class="title">THIẾT KẾ DÀNH CHO ĐÔ THỊ</h3>
                <h4 class="sub-title">Tối giản mà không đơn giản</h4>
                <p class="desc">
                    Không ngừng sáng tạo, các chuyên gia hàng đầu Italy đã cho ra mắt thiết kế xe máy điện đô thị
                    nhỏ gọn, tiện dụng. YADEA E3 sẵn sàng cùng bạn xuyên qua mọi ngõ ngách, vượt qua mọi con đường
                    đông đúc.
                </p>
            </div>
            <!-- Main Content - END -->

            <!-- Image List -->
            <div class="design-image-list">

                <!-- Image Item -->
                <div class="img-holder">
                    <img src="img/real-img1.jpg" alt="">
                </div>

                <!-- Image Item -->
                <div class="img-holder">
                    <img src="img/real-img2.jpg" alt="">
                </div>

            </div>
            <!-- Image List -->

        </div>
        <!-- Custom Container - END -->

    </section>
    <!-- Section Design Intro - END -->


    <!-- Section Bike Container -->
    <section class="section section-bike-container">
        <!-- Main Content -->
        <div class="main-content">
            <h3 class="title">GÓI TRỌN CẢ THẾ GIỚI <br class="mb-hide">CỦA BẠN</h3>
            <h4 class="sub-title">Cốp rộng dung tích 20L</h4>
            <p class="desc">
                Cốp xe SIÊU RỘNG có mọi thứ bạn cần, chứa mọi đồ dùng bạn muốn mang theo. Với dung tích 20 lít,
                cốp xe YADEA E3 có thể chứa tới 2 chiếc mũ bảo hiểm và hàng tá phụ kiện khác của bạn.
            </p>
        </div>
        <!-- Main Content - END -->

        <!-- Effect  Holder -->
        <div class="effect-holder">
            <div class="container-img">
                <img src="img/bike-container.png" alt="" class="mb-hide">
                <img src="img/bike-container-mb.png" alt="" class="mb-show">
            </div>

            <div class="inside-img">
                <img src="img/container-inside.png" alt="">
            </div>
        </div>
        <!-- Effect Holder END -->
    </section>
    <!-- Section Bike Container - END -->


    <!-- Light Section -->
    <section class="section section-light">

        <!-- Main Content -->
        <div class="main-content">
            <h3 class="title">BẬT SÁNG TẦM NHÌN</h3>
            <h4 class="sub-title">LED cao cấp toàn xe</h4>
            <p class="desc">
                Được thiết kế khoa học, hệ thống chiếu sáng không góc chết của YADEA E3 giúp bạn lái xe an toàn ngay
                cả trong điều kiện thiếu sáng.  Không chỉ bật tầm nhìn, tạo phong cách, đèn LED còn có khả năng tiết
                kiệm năng lượng tốt, chiếu sáng bền bỉ theo năm tháng.
            </p>
        </div>
        <!-- Main Content -->

        <!-- Effect Holder -->
        <div class="effect-holder">
            <div class="bike-light-img">
                <img src="img/light.png" alt="" class="mb-hide">
                <img src="img/light-mb.png" class="mb-show">
            </div>

            <div class="light-effect">
                <img src="img/led-effect.png">
            </div>
        </div>
        <!-- Effect Holder -->

    </section>
    <!-- Light Section - END -->


    <!-- Water Resistance -->
    <section class="section section-water-resistance">

        <!-- Main Content -->
        <div class="main-content">
            <h3 class="title">CHỐNG NƯỚC BỀN BỈ</h3>
            <h4 class="sub-title">Chỉ số chống nước IPX7</h4>
            <p class="desc">
                YADEA E3 có thể băng qua những con phố ngập nước lên tới  1 mét, sẵn sàng đồng hành cùng bạn mọi lúc
                mọi nơi. Trong một cuộc thử nghiệm ở điều kiền mưa lớn, vỏ xe bị tháo rời hoàn toàn khỏi khung, để
                lộ cáp điện và động cơ. Sau 24h, YADEA E3 đã xuất sắc vượt qua thử thách, hoạt động bình thường.
            </p>
        </div>
        <!-- Main Content -->

        <!-- Image Holder -->
        <div class="effect-holder">
            <div class="bike-holder">
                <img src="img/frontwheel.png" class="mb-hide">
                <img src="img/backwheel.png" class="mb-show">
            </div>
            <div class="front-water">
                <img src="img/water.png">
            </div>
            <div class="back-water">
                <img src="img/water.png">
            </div>
        </div>
        <!-- Image Holder - END -->

    </section>
    <!-- Water Resistance - END -->


    <!-- Section Divider -->
    <section class="section section-divider"
             style="background-image: url(img/section-divider-bg.jpg)">

        <!-- Main Content -->
        <div class="main-content">
            <div class="img-holder">
                <img src="img/feature-title2.png">
            </div>
        </div>
        <!-- Main Content - END -->

    </section>
    <!-- Section Divider - END -->


    <!-- Driving Position Section -->
    <section class="section section-driving-position">

        <!-- Container -->
        <div class="container">

            <!-- Driving Position Layout -->
            <div class="driving-position-layout">

                <!-- Main Content -->
                <div class="main-content">
                    <h3 class="title">THOẢI MÁI MỌI LÚC MỌI NƠI</h3>
                    <h4 class="sub-title">Thiết kế theo tỉ lệ vàng</h4>
                    <p class="desc">
                        Với khoang để chân rộng và ghi đông xe vừa tầm tay, hãy vô tư lượn phố hàng giờ trên
                        YADEA E3 mà chẳng lo mỏi mệt. Cấu trúc chỗ ngồi được thiết kết khoa học, góc hợp giữa
                        cơ thể và thân xe tạo thành tỉ lệ vàng hoàn hảo.
                    </p>
                </div>
                <!-- Main Content -->

                <!-- Image Holder -->
                <div class="effect-holder">
                    <div class="bike-img">
                        <img src="img/bike-full.png">
                    </div>
                    <div class="draw-img">
                        <img src="img/bike-draw.png">
                    </div>
                </div>
                <!-- Image Holder - END -->

            </div>
            <!-- Driving Position Layout - END -->

        </div>
        <!-- Container - END -->

        <!-- Boundary -->
        <div class="boundary-holder mb-show">
            <!-- Bottom Boundary -->
            <div class="bottom-boundary">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 150">
                    <polygon class="cls-1" points="0 0 0 150 300 0 0 0"/>
                </svg>
            </div>
        </div>

    </section>
    <!-- Driving Position Section - END -->


    <!-- Screen Display -->
    <section class="section section-screen-display">

        <!-- Screen Main Content -->
        <div class="main-content screen-content">
            <h3 class="title">THÔNG SỐ HIỂN THỊ RÕ RÀNG</h3>
            <h4 class="sub-title">Màn hình điện tử cao cấp</h4>
            <p class="desc">
                Được đặt ở vị trí vừa tầm nhìn, màn hình điện tử cao cấp của YADEA E3 cho phép bạn dễ dàng theo
                dõi tình trạng pin xe, vận tốc, quãng đường… chỉ với 1 cái liếc mắt. Mọi thông số, chỉ số được
                trình bày rõ ràng, trực quan ngay trên màn hình LCD thế hệ mới.
            </p>
        </div>
        <!-- Screen Main Content - END -->

        <!-- Effect Holder -->
        <div class="effect-holder">

            <!-- Charging Main Content -->
            <div class="main-content charging-content mb-hide">
                <h3 class="title">KHÔNG LO HẾT PIN ĐIỆN THOẠI</h3>
                <h4 class="sub-title">Cổng sạc USB</h4>
                <p class="desc">
                    Chỉ cần kết nối với cổng sạc USB, bố trí sẵn trên YADEA ULIKE, điện thoại di động của bạn có
                    thể được sạc pin ngay tức thì. Pin đầy, sẵn sàng kết nối, chẩng lo bỏ lỡ những điều quan trọng.
                </p>
            </div>
            <!-- Charging Main Content - END -->

            <!-- Background and description -->
            <div class="bg-holder">
                <div class="img-holder">
                    <img src="img/screen.png" class="mb-hide">
                    <img src="img/screen-mb.png" class="mb-show">
                </div>
            </div>
            <!-- Background and description - END -->
        </div>
        <!-- Effect Holder - END -->

        <div class="marker-group">
            <!-- Screen marker Item -->
            <div class="marker distance">
                <span class="name">Quãng đường</span>
                <div class="line"></div>
                <span class="dot">
                        <div class="dot-effect"></div>
                    </span>
            </div>

            <!-- Screen marker Item -->
            <div class="marker speed">
                <span class="name">Vận tốc</span>
                <div class="line"></div>
                <span class="dot">
                        <div class="dot-effect"></div>
                    </span>
            </div>

            <!-- Screen marker Item -->
            <div class="marker battery-noti">
                <span class="name">Vạch báo pin</span>
                <div class="line"></div>
                <span class="dot">
                        <div class="dot-effect"></div>
                    </span>
            </div>

            <!-- Screen marker Item -->
            <div class="marker charging-port">
                <span class="name">Cổng USB</span>
                <div class="line"></div>
                <span class="dot">
                        <div class="dot-effect"></div>
                    </span>
            </div>
        </div>

        <!-- Boundary Holder -->
        <div class="boundary-holder">
            <div class="boundary-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 77">
                    <polygon class="cls-1" points="0 77 300 77 300 0 0 77"/>
                </svg>
            </div>
        </div>
    </section>
    <!-- Screen Display - END -->


    <!-- Mobile USB Section -->
    <section class="section section-usb-charging mb-show">

        <!-- Main Content -->
        <div class="main-content">
            <h3 class="title">KHÔNG LO <br>HẾT PIN ĐIỆN THOẠI</h3>
            <h4 class="sub-title">Cổng sạc USB</h4>
            <p class="desc">
                Chỉ cần kết nối với cổng sạc USB, bố trí sẵn trên
                YADEA ULIKE, điện thoại di động của bạn có
                thể được sạc pin ngay tức thì. Pin đầy, sẵn sàng
                kết nối, chẩng lo bỏ lỡ những điều quan trọng.
            </p>
        </div>

        <!-- Effect Holder -->
        <div class="effect-holder">
            <div class="img-holder">
                <img src="img/usb-charging.png">
            </div>

            <div class="effect-item-description">
                <span class="name">
                    Cổng USB
                </span>
                <div class="line"></div>
            </div>
        </div>
    </section>
    <!-- Mobile USB Section -->


    <!-- Easy Control Section -->
    <section class="section section-easy-control">

        <!-- Main Content -->
        <div class="main-content">
            <h3 class="title">ĐIỀU KHIỂN XE DỄ DÀNG</h3>
            <h4 class="sub-title">Giao diện nút bấm thân thiện</h4>
            <p class="desc">
                Được thiết kế khoa học, phù hợp với phản ứng tâm lý và thói quen của người lái. Để có thể dễ dàng và
                thuận tiện khi điều khiển xe, chiếc YADEA E3 của bạn được trang bị các tính năng phong phú.
            </p>
        </div>
        <!-- Main Content - END -->

        <!-- Effect Holder -->
        <div class="effect-holder">

            <!-- Image Holder -->
            <div class="img-holder">
                <img src="img/bike-control.png" class="mb-hide">
                <img src="img/control-mb.png" class="mb-show">
            </div>
            <!-- Image Holder - END -->

        </div>
        <!-- Effect Holder - END -->

        <!-- Description Holder -->
        <div class="description-holder">
            <!-- Description Item -->
            <div class="desctiption-item item-1">
                <p class="name">
                    <span class="label">
                        Đỗ xe
                    </span>
                    <span class="shadow-effect"></span>
                </p>
                <p class="desc">
                    * Parking: hay còn gọi là nút Đỗ Xe. chế độ <br class="mb-hide">
                    ĐỖ XE AN TOÀN hoạt động, giúp bạn tránh khỏi <br class="mb-hide">
                    những cú vọt ga bất ngờ khi đang dừng xe tạm thời.<br class="mb-hide">
                </p>
                <span class="line"></span>
            </div>
            <!-- Description Item - END -->

            <!-- Description Item -->
            <div class="desctiption-item item-2">
                <p class="name">
                    <span class="label">
                       Chế độ lái
                    </span>
                    <span class="shadow-effect"></span>
                </p>
                <p class="desc">
                    Cho phép bạn chuyển và chọn chế độ lái <br>phù hợp.<br>
                    ECO: phù hợp đi đường ổn định, đường <br>
                    trường, tiết kiệm điện năng<br>
                    SPORT: Phù hợp cho muốn tăng tốc, <br>hoặc leo dốc
                </p>
                <span class="line"></span>
            </div>
            <!-- Description Item - END -->
        </div>
        <!-- Description Holder - END -->

        <!-- Arrow Control -->
        <div class="arrow-control-holder stage-left mb-show">
            <div class="control-button to-control-left">
                <img src="img/arrow-left-mb.png">
            </div>
            <div class="control-button to-control-right">
                <img src="img/arrow-right-mb.png">
            </div>
        </div>

        <!-- Background Holder -->
        <div class="background-holder mb-hide">

            <!-- Boundary Bottom -->
            <div class="boundary-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 77">
                    <polygon class="cls-1" points="0 77 300 77 300 0 0 77"/>
                </svg>
            </div>

        </div>
    </section>
    <!-- Easy Control Section - END -->


    <!-- Anti Thief -->
    <section class="section section-anti-thief">

        <!-- Main Content -->
        <div class="main-content">
            <h3 class="title">CHỐNG TRỘM MẠNH MẼ</h3>
            <h4 class="sub-title">Báo động tức thì</h4>
            <p class="desc">
                Nhờ hệ thống chống trộm, chiếc xe YADEA E3 của bạn sẽ được bảo vệ ở bất cứ nơi đâu. Ở trạng thái
                khóa, khi có người lạ tác dụng lực lên xe, YADEA E3 sẽ phát ra tín hiệu bảo vệ, báo động ngay
                lập tức.
            </p>
        </div>
        <!-- Main Content - END -->

        <!-- Effect Holder -->
        <div class="effect-holder">
            <div class="bike-img">
                <div class="main-bike">
                    <img src="img/bike-back-angle.png">
                </div>

                <div class="bike-shadow shadow-1">
                    <img src="img/bike-shadow-1.png">
                </div>

                <div class="bike-shadow shadow-2">
                    <img src="img/bike-shadow-2.png">
                </div>
            </div>

            <div class="ring-img">
                <img class="bell" src="img/bell-icon.png">
                <img class="wave" src="img/bell-wave.png">
            </div>

            <div class="light-img">
                <img src="img/back-light.png">
            </div>

            <div class="sound-img sound-1">
                <img src="img/lightning-icon-1.png">
            </div>

            <div class="sound-img sound-2">
                <img src="img/lightning-icon-2.png">
            </div>
        </div>
        <!-- Effect Holder -->

    </section>
    <!-- Anti Thief - END -->


    <!-- Section Divider -->
    <section class="section section-divider"
             style="background-image: url(img/section-divider-bg.jpg)">

        <!-- Main Content -->
        <div class="main-content">
            <div class="img-holder">
                <img src="img/feature-title3.png">
            </div>
        </div>
        <!-- Main Content - END -->

    </section>
    <!-- Section Divider - END -->


    <!-- Saving Energy -->
    <section class="section section-saving-energy">
        <!-- Main Content -->
        <div class="main-content">
            <h3 class="title">TIẾT KIỆM ĐIỆN NĂNG</h3>
            <h4 class="sub-title">Động cơ GTR băng thông rộng</h4>
            <p class="desc">
                Động cơ GTR thế hệ mới cho băng thông rông hơn cho hiệu suất chuyển đổi cao hơn, tiết kiệm điện
                năng hơn. Với vận tốc tối đa lên tới 38km/h. Xe lướt đi êm ái, vun vút khám phá khắp thành phố cùng bạn.
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
        <!-- Main Content - END -->

        <!-- Effect Holder -->
        <div class="effect-holder">
            <div class="img-holder">
                <img src="img/bike-back.png">
            </div>
        </div>
        <!-- Effect Holder - END -->

        <!-- Background Holder -->
        <div class="background-holder">
            <img class="boundary" src="img/boundary.png">
        </div>
        <!-- Background Holder -->

    </section>
    <!-- Saving Energy - END -->


    <!-- Saving Energy 2 -->
    <section class="section section-saving-energy-2">
        <!-- Container -->
        <div class="container">

            <!-- Main Content -->
            <div class="main-content">
                <h3 class="title">TIẾT KIỆM ĐIỆN NĂNG</h3>
                <h4 class="sub-title">Động cơ GTR băng thông rộng</h4>
            </div>
            <!-- Main Content - END -->

            <!-- Saving Energy Feature -->
            <div class="saving-energy-feature">

                <!-- Saving Energy Item -->
                <div class="saving-energy-item">
                    <div class="img-holder"
                         style="background-image: url(img/save-energy1.jpg);">
                    </div>
                    <div class="saving-energy-desc">
                        <p class="name">KHUNG XE BỀN CHẮC:</p>
                        <p class="desc">
                            Được áp dụng công nghệ hàn tự động hóa hiện đại và tiện hai đầu chuẩn
                            xác đến từng milimét. 
                        </p>
                    </div>
                </div>

                <!-- Saving Energy Item -->
                <div class="saving-energy-item">
                    <div class="img-holder"
                         style="background-image: url(img/save-energy2.jpg);"></div>
                    <div class="saving-energy-desc">
                        <p class="name">PHANH ĐĨA TRƯỚC:</p>
                        <p class="desc">
                            Giảm tốc an toàn và nhanh chóng; dừng xe tức thời khi gặp phải tình huống bất ngờ
                            trên đường.
                        </p>
                    </div>
                </div>

                <!-- Saving Energy Item -->
                <div class="saving-energy-item">
                    <div class="img-holder"
                         style="background-image: url(img/save-energy3.jpg);">></div>
                    <div class="saving-energy-desc">
                        <p class="name">GIẢM XÓC THỦY LỰC</p>
                        <p class="desc">
                            Lò xo thép cao cấp có hành trình dài, tạo cảm giác êm ái, sẵn sàng vượt qua mọi ổ gà,
                            hố xóc lồi lõm
                        </p>
                    </div>
                </div>

                <!-- Saving Energy Item -->
                <div class="saving-energy-item">
                    <div class="img-holder"
                         style="background-image: url(img/save-energy4.jpg);">></div>
                    <div class="saving-energy-desc">
                        <p class="name">LỐP KHÔNG SĂM</p>
                        <p class="desc">
                            Bền gấp 1,2 lần so với lốp thường. Với thiết kế xẻ rãnh đặc biệt, được sản xuất từ chất
                            liệu cao cấp, lốp chống nước tốt, có độ bám mặt đường cao.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Saving Energy Feature -->

        </div>
        <!-- Container - END -->
    </section>
    <!-- Saving Energy 2 - END -->


    <!-- Feature Section -->
    <section class="section section-features">

        <!-- Container -->
        <div class="container">

            <!-- Main Content -->
            <div class="main-content">
                <h3 class="title">
                    CHỐNG RUNG - CHỐNG NƯỚC - CHỐNG BỤI
                </h3>
                <h4 class="sub-title">
                    Bền bỉ qua thời gian
                </h4>
            </div>

            <!-- Feature List -->
            <div class="feature-list">

                <!-- Feature Item -->
                <div class="feature-item">
                    <div class="img-holder mb-hide"
                         style="background-image: url(img/feature-img-1.png)">
                    </div>
                    <div class="img-holder mb-show"
                         style="background-image: url(img/feature-img-1-mb.png)">
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
                         style="background-image: url(img/feature-img-2.png)">
                    </div>
                    <div class="img-holder mb-show"
                         style="background-image: url(img/feature-img-2-mb.png)">
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
                         style="background-image: url(img/feature-img-3.png)">
                    </div>
                    <div class="img-holder mb-show"
                         style="background-image: url(img/feature-img-3-mb.png)">
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
                         style="background-image: url(img/gallery/13.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/2.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/4.jpg)">
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
                         style="background-image: url(img/gallery/5.jpg)">
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
                         style="background-image: url(img/gallery/10.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/5.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/6.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/3.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/1.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/4.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/2.jpg)">
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
                         style="background-image: url(img/gallery/13.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/2.jpg)">
                    </div>
                    <div class="img-item"
                         style="background-image: url(img/gallery/4.jpg)">
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
                         style="background-image: url(img/gallery/5.jpg)">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Image List - END -->


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
            <div class="prize-estimation" style="display: none">
                <p class="price-holder">
                    Giá dự kiến: <span class="highlight">00.000.000 <span class="small">vnđ</span></span>
                </p>
            </div>
            <!-- Prize Estimation - END -->


            <!-- Spec Estimation -->
            <div class="spec-estimation" style="display: none">
                <h2 class="spec-title">THÔNG SỐ DỰ KIẾN <br class="mb-show">YADEA E3</h2>

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
    <section class="section section-news-slider" style="display: none;">

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
            <div class="fb-comments" data-href="https://yadeavietnam.vn/yadea-e3" data-width="100%" data-numposts="5"></div>
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

<!-- Yadea e3 Main Script -->
<script src="js/scripts-bundled.js"></script>
<!-- ====== SCRIPT REFERENCES - END ====== -->

</body>
</html>