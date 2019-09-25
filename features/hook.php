<?php
//banner 1
function get_banner_1()
{
    $banner1Query = new WP_Query(array(
        'post_type' => 'banner_1',
        'post_status'=>'publish',
        'posts_per_page' => -1,
    ));

    if ($banner1Query->have_posts()) { ?>
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
                                <?php $number_show=0;while ($banner1Query->have_posts()) {
                                    $banner1Query->the_post(); if($number_show>=5){break;}
                                    $show = get_field('choose_banner_show');
                                    if($show[0]=='show'){
                                        $number_show++;
                                    ?>

                                    <!-- Indicator Item 1 -->
                                    <div class="main-content__context__wrapper__item">
                                        <h1 class="title mb-bold">
                                            <?php echo get_field('banner_title'); ?>
                                        </h1>

                                        <?php if (get_field('banner_subtitle')) { ?>
                                            <h3 class="sub-title uppercase txt-gray">
                                                <?php echo get_field('banner_subtitle'); ?>
                                            </h3>
                                        <?php } ?>

                                        <?php if (get_field('banner_text')) { ?>
                                            <p class="desc txt-gray">
                                                <?php echo get_field('banner_text'); ?>
                                            </p>
                                        <?php } ?>

                                        <?php if (get_field('button_btn_text') AND get_field('banner_link')) {
                                            $slug_title = str_replace(' ','-',strtolower(get_field('banner_title')));
                                            ?>
                                            <a id="banner-1-<?php echo $slug_title;?>-cta-btn-click" class="btn product-cta btn-trans border-gray effect effect-black mb-hide"
                                               href="<?php echo get_field('banner_link'); ?>">
                                                <span><?php echo get_field('button_btn_text'); ?></span>
                                            </a>

                                            <a id="banner-1-<?php echo $slug_title;?>-cta-btn-click" class="btn product-cta mb-show-ib btn-grad"
                                               href="<?php echo get_field('banner_link'); ?>">
                                                <span><?php echo get_field('button_btn_text'); ?></span>
                                            </a>
                                        <?php } ?>

                                    </div>

                                <?php }} ?>
                            </div>
                        </div><!-- Context Wrapper -->
                    </div>

                    <!-- Right Slider -->

                    <div class="col-lg-8 col-12 main-content__slider">
                        <?php
                        $banner1Query = new WP_Query(array(
                            'post_type' => 'banner_1',
                            'post_status'=>'publish',
                            'posts_per_page' => -1,
                        ));
                        if ($banner1Query->have_posts()) {
                        ?>
                        <div id="slider-style-1">
                            <?php $number_show=0;while ($banner1Query->have_posts()) {
                                $banner1Query->the_post(); if($number_show>=5){break;}?>
                                <?php
                                $show = get_field('choose_banner_show');
                                if($show[0]=='show'){
                                    $number_show++;

                                    $check_show = get_field('banner_1_type');
                                    if($check_show=='image'){?>
                                        <div class="main-content__slider__item slide-image">
                                            <?php
                                                $img_slider = get_field('banner_1_desktop_bg');
                                                if($img_slider){
                                                    echo '<img src="'.$img_slider.'" class="mb-hide">';
                                                }
                                                $img_slider_mobile = get_field('banner_1_mobile_bg');
                                                if($img_slider){
                                                    echo '<img src="'.$img_slider_mobile.'" class="mb-show-bl">';
                                                }
                                            ?>
                                        </div>
                                <?php
                                    }
                                    else{
                                        $id_youtube = get_field('banner_1_youtube');
                                        if($id_youtube) {?>
                                            <div class="main-content__slider__item slide-video">
                                                <div class="video-holder" id="video-player-1" data-src="<?php echo $id_youtube;?>"
                                                     data-slide="0"></div>
                                            </div>
                                            <?php
                                        }
                                    }
                                ?>

                            <?php }} ?>
                        </div>

                        <div class="slider-paging" id="slider-style-1-paging">
                            <span class="slider-paging__page page-mold">00</span>
                            <span class="slider-paging__page current-page active">03</span>
                            <span class="slider-paging__page current-page inactive">03</span>
                            <span class="slider-paging__page all-page">05</span>
                        </div>
                        <?php }?>
                    </div><!-- Right Slider -->

                </div><!-- Row -->

            </div><!-- Main Content -->

        </section>
        <!-- Section Home Banner 1 - END -->

    <?php }

    wp_reset_postdata();
}
add_action('show_banner_1','get_banner_1');

//banner 2
function get_banner_2()
{
    $banner2Query = new WP_Query(array(
        'post_type'      => 'banner_2',
        'post_status'=>'publish',
        'posts_per_page' => -1
    ));

    if($banner2Query->have_posts()){ ?>
        <!-- Section Home Banner 2 -->
        <section class="section" id="home-banner-2">

            <!-- Banner 2 Main Slider -->
            <div class="main-content product-slider" >
                <div class="product-slider__wrapper" id="slider-style-2">

                    <?php $number_show=0;while ($banner2Query->have_posts()) {
                        $banner2Query->the_post(); if($number_show>=5){break;}
                        $show = get_field('choose_banner_show');
                        if($show[0]=='show'){
                            $number_show++;
                            ?>

                        <!-- Slider item -->
                        <div class="slider product-slider__wrapper__item light-gray-bg">

                            <!-- Product Context -->
                            <div class="product-slider__wrapper__item__context">
                                <div class="container">
                                    <div class="product-slider__wrapper__item__context__wrapper">
                                        <h1 class="page-title">
                                            <?php echo get_field('banner_title'); ?>
                                        </h1>
                                        <?php if(get_field('banner_subtitle')) { ?>
                                            <p class="sub-title">
                                                <?php echo get_field('banner_subtitle'); ?>
                                            </p>
                                        <?php } ?>

                                        <?php if(get_field('button_btn_text')  AND get_field('banner_link')){
                                            $slug_title = str_replace(' ','-',strtolower(get_field('banner_title')));
                                            ?>
                                            <a id="banner-2-<?php echo $slug_title;?>-cta-btn-click" class="btn product-cta btn-trans border-white effect effect-white mb-hide"
                                               href="<?php echo get_field('banner_link'); ?>">
                                                <span><?php echo get_field('button_btn_text'); ?></span>
                                            </a>

                                            <a id="banner-2-<?php echo $slug_title;?>-cta-btn-click" class="btn product-cta border-white bg-white txt-black mb-show-ib"
                                               href="<?php echo get_field('banner_link'); ?>">
                                                <span><?php echo get_field('button_btn_text'); ?></span>
                                            </a>
                                        <?php } ?>

                                    </div>
                                </div>
                            </div><!-- Product Context -->

                            <!-- Product Background -->
                            <div class="product-slider__wrapper__item__bg">
                                <?php
                                    $img_slider = get_field('banner_2_desktop_bg');
                                    if($img_slider){
                                        echo '<img src="'.$img_slider.'" class="mb-hide">';
                                    }
                                    $img_slider_mobile = get_field('banner_2_mobile_bg');
                                    if($img_slider){
                                        echo '<img src="'.$img_slider_mobile.'" class="mb-show-bl">';
                                    }
                                ?>
                            </div>
                            <!-- Product Background -->

                        </div><!-- Slider item -->

                    <?php }} ?>
                </div>
                <div class="slider-paging mb-hide" id="slider-style-2-paging">
                    <span class="slider-paging__page page-mold">00</span>
                    <span class="slider-paging__page current-page active">03</span>
                    <span class="slider-paging__page current-page inactive">03</span>
                    <span class="slider-paging__page all-page">05</span>
                </div>
            </div>
        </section><!-- Section Home Banner 2 - END -->
    <?php }
    wp_reset_postdata();

}
add_action('show_banner_2','get_banner_2');

//banner 3
function get_banner_3()
{
    $banner3Query = new WP_Query(array(
        'post_type' => 'banner_3',
        'post_status'=>'publish',
        'posts_per_page' => -1
    ));

    if($banner3Query->have_posts()){ ?>
        <!-- Section Home Banner 3 -->
        <section class="section" id="home-banner-3">

            <!-- Slider Banner 3 -->
            <div class="container-fluid slider" id="slider-style-3">
                <?php $number_show=0;while ($banner3Query->have_posts()) {
                    $banner3Query->the_post(); if($number_show>=5){break;}
                    $show = get_field('choose_banner_show');
                    if($show[0]=='show'){
                        $number_show++;
                        ?>
                <div class="slider__item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-12 slider__item__context">
                                <?php echo acf_render('<h1 class="page-title">',get_field('banner_title'),'</h1>'); ?>
                                <?php echo acf_render('<h3 class="page-sub-title uppercase">',get_field('banner_subtitle'),'</h3>'); ?>
                                <?php echo acf_render('<p class="desc">',get_field('banner_text'),'</p>'); ?>
                                <?php
                                    $link_read_more = get_field('banner_link');
                                    $text_read_more = get_field('button_btn_text');
                                    if($link_read_more){
                                        $slug_title = str_replace(' ','-',strtolower(get_field('banner_title')));
                                ?>
                                <a id="banner-3-<?php echo $slug_title;?>-cta-btn-click" class="btn product-cta border-gray btn-trans effect effect-main mb-hide" href="<?php echo $link_read_more;?>">
                                    <span><?php echo $text_read_more;?></span>
                                </a>

                                <a id="banner-3-<?php echo $slug_title;?>-cta-btn-click" class="btn product-cta mb-show-ib btn-grad" href="<?php echo $link_read_more;?>">
                                    <span><?php echo $text_read_more;?></span>
                                </a>
                                <?php }?>
                            </div>
                            <div class="col-lg-8 col-12 slider__item__image">
                                <?php
                                $img_slider = get_field('banner_3_desktop_bg');
                                if($img_slider){
                                    echo '<img src="'.$img_slider.'" class="mb-hide img-fluid">';
                                }
                                $img_slider_mobile = get_field('banner_3_mobile_bg');
                                if($img_slider){
                                    echo '<img src="'.$img_slider_mobile.'" class="mb-show-bl img-fluid">';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }}?>

            </div>
        </section>
        <!-- Section Home Banner 3 - END -->
    <?php }
    wp_reset_postdata();

}
add_action('show_banner_3','get_banner_3');

/*breadcrumbs*/
function breadcrumbs() {
    if(!is_home()) {
        echo '<section class="section light-gray-bg blog-heading" id="support-head">
                <div class="container blog-heading__title"><h2 class="title">'.get_the_title().'</h2>
                    <ul class="blog-heading__breadcrumb horizontal-list">';
        echo '<li><a href="' . home_url('/') . '">Home</a></li>';
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