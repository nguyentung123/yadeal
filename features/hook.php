<?php
//banner 1
function get_banner_1() {
    $banner1Query = new WP_Query(array(
        'post_type'        => 'banner_1',
        'post_status'      =>'publish',
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

    if ($banner1Query->have_posts()): ?>
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
                                <?php while ($banner1Query->have_posts()):
                                    $banner1Query->the_post(); ?>

                                    <!-- Indicator Item 1 -->
                                    <div class="main-content__context__wrapper__item">
                                        <h1 class="title mb-bold">
                                            <?php echo get_field('banner_title'); ?>
                                        </h1>

                                        <?php if (get_field('banner_subtitle')): ?>
                                            <h3 class="sub-title uppercase txt-gray">
                                                <?php echo get_field('banner_subtitle'); ?>
                                            </h3>
                                        <?php endif; ?>

                                        <?php if (get_field('banner_text')): ?>
                                            <p class="desc txt-gray">
                                                <?php echo get_field('banner_text'); ?>
                                            </p>
                                        <?php endif; ?>

                                        <?php if (get_field('button_btn_text') AND get_field('banner_link')):
                                            $slug_title = str_replace(' ','-',strtolower(get_field('banner_title')));
                                            ?>
                                            <a id="banner-1-<?php echo $slug_title;?>-cta-btn-click"
                                               class="btn product-cta border-gray btn-trans effect effect-main mb-hide"
                                               href="<?php echo get_field('banner_link'); ?>">
                                                <span><?php echo get_field('button_btn_text'); ?></span>
                                            </a>

                                            <a id="banner-1-<?php echo $slug_title;?>-cta-btn-click"
                                               class="btn product-cta mb-show-ib btn-grad"
                                               href="<?php echo get_field('banner_link'); ?>">
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
                        <?php if ($banner1Query->have_posts()): ?>
                            <div id="slider-style-1">
                                <?php while ($banner1Query->have_posts()): ?>
                                    <?php
                                    $banner1Query->the_post();
                                    $banner_type = get_field('banner_1_type');
                                    ?>

                                    <?php if($banner_type == 'image'):?>

                                        <div class="main-content__slider__item slide-image">
                                            <?php
                                            $placeHolder = get_theme_file_uri('assets/img/placeholder/image-placeholder.png');
                                            $mbBg = get_field('banner_1_mobile_bg') ? get_field('banner_1_mobile_bg') : $placeHolder;
                                            $mainBg = get_field('banner_1_desktop_bg') ? get_field('banner_1_desktop_bg') : $placeHolder;
                                            echo '<img src="' .$mainBg . '" class="mb-hide">';
                                            echo '<img src="'. $mbBg . '" class="mb-show-bl">';
                                            ?>
                                        </div>

                                    <?php else: ?>
                                        <?php $videoFile = get_field('banner_1_video'); ?>
                                        <?php if($videoFile): ?>
                                            <div class="main-content__slider__item slide-video">
                                                <div class="video-holder">
                                                    <video width="100%" height="100%" autobuffer="" autoplay="" muted="" loop="" playsinline="">
                                                        <source src="<?php echo $videoFile; ?>" type="video/mp4">
                                                    </video>
                                                </div>
                                            </div>
                                        <?php
                                        endif;
                                    endif;
                                    ?>

                                <?php endwhile; ?>
                            </div>

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
}
add_action('show_banner_1','get_banner_1');

//banner 2
function get_banner_2()
{
    $banner2Query = new WP_Query(array(
        'post_type'      => 'banner_2',
        'post_status'    => 'publish',
        'posts_per_page' => 5,
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

    if($banner2Query->have_posts()): ?>
        <!-- Section Home Banner 2 -->
        <section class="section" id="home-banner-2">

            <!-- Banner 2 Main Slider -->
            <div class="main-content product-slider" >

                <!-- Slider Wrapper -->
                <div class="product-slider__wrapper" id="slider-style-2">

                    <?php while ($banner2Query->have_posts()):
                        $banner2Query->the_post(); ?>

                        <!-- Slider item -->
                        <div class="slider product-slider__wrapper__item light-gray-bg">

                            <!-- Product Context -->
                            <div class="product-slider__wrapper__item__context">
                                <div class="container">
                                    <div class="product-slider__wrapper__item__context__wrapper">
                                        <h1 class="page-title">
                                            <?php echo get_field('banner_title'); ?>
                                        </h1>
                                        <?php if(get_field('banner_subtitle')): ?>
                                            <p class="sub-title">
                                                <?php echo get_field('banner_subtitle'); ?>
                                            </p>
                                        <?php endif; ?>

                                        <?php if(get_field('button_btn_text')  AND get_field('banner_link')): ?>
                                            <?php $slug_title = str_replace(' ','-',strtolower(get_field('banner_title')));?>

                                            <a id="banner-2-<?php echo $slug_title;?>-cta-btn-click"
                                               class="btn product-cta btn-trans border-white effect effect-white mb-hide"
                                               href="<?php echo get_field('banner_link'); ?>">
                                                <span><?php echo get_field('button_btn_text'); ?></span>
                                            </a>

                                            <a id="banner-2-<?php echo $slug_title;?>-cta-btn-click"
                                               class="btn product-cta border-white bg-white txt-black mb-show-ib"
                                               href="<?php echo get_field('banner_link'); ?>">
                                                <span><?php echo get_field('button_btn_text'); ?></span>
                                            </a>

                                        <?php endif; ?>

                                    </div>
                                </div>
                            </div><!-- Product Context -->

                            <!-- Product Background -->

                            <?php
                            $placeHolder = get_theme_file_uri('assets/img/placeholder/image-placeholder.png');
                            $mbBg = get_field('banner_2_mobile_bg') ? get_field('banner_2_mobile_bg') : $placeHolder;
                            $mainBg = get_field('banner_2_desktop_bg') ? get_field('banner_2_desktop_bg') : $placeHolder;
                            ?>
                            <div class="product-slider__wrapper__item__bg mb-hide" style="background-image: url( '<?php echo $mainBg; ?>' )">  </div>
                            <div class="product-slider__wrapper__item__bg mb-show-bl" style="background-image: url( '<?php echo $mbBg; ?>' )">  </div>
                            <!-- Product Background -->

                        </div><!-- Slider item -->

                    <?php endwhile; ?>
                </div>

                <div class="slider-paging mb-hide" id="slider-style-2-paging">
                    <span class="slider-paging__page page-mold">00</span>
                    <span class="slider-paging__page current-page active">03</span>
                    <span class="slider-paging__page current-page inactive">03</span>
                    <span class="slider-paging__page all-page">05</span>
                </div>
            </div>
        </section><!-- Section Home Banner 2 - END -->
    <?php endif;
    wp_reset_postdata();

}
add_action('show_banner_2','get_banner_2');

//banner 3
function get_banner_3()
{
    $banner3Query = new WP_Query(array(
        'post_type' => 'banner_3',
        'post_status'=>'publish',
        'posts_per_page' => 5,
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

    if($banner3Query->have_posts()): ?>
        <!-- Section Home Banner 3 -->
        <section class="section" id="home-banner-3">

            <!-- Slider Banner 3 -->
            <div class="container-fluid slider" id="slider-style-3">
                <?php while ($banner3Query->have_posts()) : ?>
                    <?php $banner3Query->the_post(); ?>
                    <div class="slider__item">
                        <div class="container">
                            <div class="row">

                                <!-- Slider Context -->
                                <div class="col-lg-4 col-12 slider__item__context">
                                    <?php echo acf_render('<h1 class="page-title">',get_field('banner_title'),'</h1>'); ?>
                                    <?php echo acf_render('<h3 class="page-sub-title uppercase">',get_field('banner_subtitle'),'</h3>'); ?>
                                    <?php echo acf_render('<p class="desc">',get_field('banner_text'),'</p>'); ?>
                                    <?php
                                    $link_read_more = get_field('banner_link');
                                    $text_read_more = get_field('button_btn_text');

                                    if($link_read_more):
                                        $slug_title = str_replace(' ','-',strtolower(get_field('banner_title')));?>

                                        <a id="banner-3-<?php echo $slug_title;?>-cta-btn-click"
                                           class="btn product-cta border-gray btn-trans effect effect-main mb-hide"
                                           href="<?php echo $link_read_more;?>">
                                            <span><?php echo $text_read_more;?></span>
                                        </a>

                                        <a id="banner-3-<?php echo $slug_title;?>-cta-btn-click" c
                                           class="btn product-cta mb-show-ib btn-grad"
                                           href="<?php echo $link_read_more;?>">
                                            <span><?php echo $text_read_more;?></span>
                                        </a>

                                    <?php endif; ?>
                                </div>

                                <!-- Slider Background -->
                                <div class="col-lg-8 col-12 slider__item__image">
                                    <?php
                                    $placeHolder = get_theme_file_uri('assets/img/placeholder/image-placeholder.png');
                                    $mbBg = get_field('banner_3_mobile_bg') ? get_field('banner_3_mobile_bg') : $placeHolder;
                                    $mainBg = get_field('banner_3_desktop_bg') ? get_field('banner_3_desktop_bg') : $placeHolder;

                                    echo '<img src="'.$mainBg.'" class="mb-hide img-fluid">';
                                    echo '<img src="'.$mbBg.'" class="mb-show-bl img-fluid">';
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>
        </section>
        <!-- Section Home Banner 3 - END -->
    <?php endif;
    wp_reset_postdata();

}
add_action('show_banner_3','get_banner_3');

/*breadcrumbs*/
function breadcrumbs() {
    if(!is_home()) {
        echo '<section class="section light-gray-bg blog-heading" id="support-head">
                <div class="container blog-heading__title"><h2 class="title">'.get_the_title().'</h2>
                    <ul class="blog-heading__breadcrumb horizontal-list">';
        echo '<li><a href="' . home_url('/') . '">Trang chủ</a></li>';
        if(is_category()) {
            $category = get_term_by('id', get_query_var('cat'), 'category');
            echo '<li aria-current="page">'.$category->name.'</li>';
        }
        elseif (is_page()) {
            echo '<li aria-current="page">'.get_the_title().'</li>';
        }
    }
    echo '</ul></div></section>';
}
add_shortcode( 'breadcrumbs', 'breadcrumbs' );