<?php
$banner1Query = new WP_Query(array(
    'post_type'        => 'banner_1',
    'post_status'      => 'publish',
    'posts_per_page'   => 5,
    'orderby'        => 'meta_value_num',
    'order'          => 'ASC',
    'meta_key'       => 'banner_priority',
    'meta_query'       => array(
        array(
            'key'     => 'choose_banner_show',
            'value'   => 'show',
            'compare' => 'LIKE'
        )
    )
));

if ($banner1Query->have_posts()) : ?>
    <!-- Section Home Banner 1 -->
    <section class="section" id="home-banner-1">

        <!-- Main Content -->
        <div class="container-fluid">

            <!-- Row -->
            <div class="row main-content">

                <!-- Left Slider -->
                <div class="col-lg-4 col-12 main-content__context text-center">

                    <!-- Context Wrapper -->
                    <div class="main-content__context__wrapper">
                        <div id="slider-style-1-indicator">
                            <?php while ($banner1Query->have_posts()) :
                                $banner1Query->the_post(); ?>

                                <!-- Indicator Item 1 -->
                                <div class="main-content__context__wrapper__item">
                                    <h1 class="title mb-bold">
                                        <?php echo get_field('banner_title'); ?>
                                    </h1>

                                    <?php if (get_field('banner_subtitle')) : ?>
                                        <h3 class="sub-title txt-gray">
                                            <?php echo get_field('banner_subtitle'); ?>
                                        </h3>
                                    <?php endif; ?>

                                    <?php if (get_field('banner_text')) : ?>
                                        <p class="desc txt-gray">
                                            <?php echo get_field('banner_text'); ?>
                                        </p>
                                    <?php endif; ?>

                                    <?php if (get_field('button_btn_text') and get_field('banner_link')) :
                                        $slug_title = str_replace(' ', '-', strtolower(get_field('banner_title')));
                                    ?>
                                        <a id="banner-1-<?php echo $slug_title; ?>-cta-btn-click" class="btn product-cta border-gray btn-trans effect effect-main mb-hide" href="<?php echo get_field('banner_link'); ?>">
                                            <span><?php echo get_field('button_btn_text'); ?></span>
                                        </a>

                                        <a id="banner-1-<?php echo $slug_title; ?>-cta-btn-click" class="btn product-cta mb-show-ib btn-grad" href="<?php echo get_field('banner_link'); ?>">
                                            <span><?php echo get_field('button_btn_text'); ?></span>
                                        </a>
                                    <?php endif; ?>

                                </div>

                            <?php endwhile; ?>

                        </div>
                    </div>
                    <!-- Context Wrapper -->

                </div><!-- Left Slider -->

                <!-- Right Slider -->
                <div class="col-lg-8 col-12 main-content__slider">
                    <?php if ($banner1Query->have_posts()) : ?>
                        <div id="slider-style-1">
                            <?php while ($banner1Query->have_posts()) : ?>
                                <?php
                                $banner1Query->the_post();
                                $banner_type = get_field('banner_1_type');
                                ?>

                                <?php if ($banner_type == 'image') : ?>

                                    <?php echo get_field('banner_link') ? '<a href="' . get_field('banner_link') . '">' : ''; ?>

                                    <div class="main-content__slider__item slide-image">
                                        <?php
                                        $placeHolder = get_theme_file_uri('assets/img/placeholder/image-placeholder.png');
                                        $mbBg = get_field('banner_1_mobile_bg') ? get_field('banner_1_mobile_bg') : $placeHolder;
                                        $mainBg = get_field('banner_1_desktop_bg') ? get_field('banner_1_desktop_bg') : $placeHolder;
                                        ?>
                                        <picture>
                                            <source media="(max-width: 768px)" srcset="<?php echo $mbBg ?>">
                                            <img src="<?php echo $mainBg ?>">
                                        </picture>
                                    </div>

                                    <?php echo get_field('banner_link') ? '</a>' : ''; ?>

                                <?php else : ?>
                                    <?php echo get_field('banner_link') ? '<a href="' . get_field('banner_link') . '">' : '';
                                    $videoFile = null;
                                    $videoFileMb = null;
                                    $videoFileMb = get_field('banner_1_video_mobile');
                                    $videoFile = get_field('banner_1_video');
                                    if ($videoFile) : ?>
                                        <div class="main-content__slider__item slide-video">
                                            <div class="video-holder">
                                                <video class="video-js" width="100%" height="100%" autobuffer="" autoplay="" muted="" playsinline="">
                                                    <source src="<?php echo $videoFile; ?>">
                                                    <source src="<?php echo $videoFileMb; ?>" media="all and (max-width: 768px)">
                                                </video>
                                            </div>
                                        </div> <?php
                                            endif;
                                            echo get_field('banner_link') ? '</a>' : '';
                                        endif;
                                                ?> <?php endwhile; ?> </div>
                        <div class="slider-paging" id="slider-style-1-paging">
                            <span class="slider-paging__page page-mold">00</span>
                            <span class="slider-paging__page current-page active">03</span>
                            <span class="slider-paging__page current-page inactive">03</span>
                            <span class="slider-paging__page all-page">05</span>
                        </div>
                    <?php endif; ?>
                </div>
                <!-- Right Slider -->

            </div><!-- Row -->

        </div><!-- Main Content -->

    </section>
    <!-- Section Home Banner 1 - END -->
<?php endif;
wp_reset_postdata();
