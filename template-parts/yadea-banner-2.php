<?php
$banner2Query = new WP_Query(array(
    'post_type'      => 'banner_2',
    'posts_per_page' => 5
));

if($banner2Query->have_posts()){ ?>
    <!-- Section Home Banner 2 -->
    <section class="section" id="home-banner-2">

        <!-- Banner 2 Main Slider -->
        <div class="main-content product-slider" >
            <div class="product-slider__wrapper" id="slider-style-2">

                <?php while($banner2Query->have_posts()) {
                    $banner2Query->the_post();
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

                                    <?php if(get_field('banner_btn_text')  AND get_field('banner_link')){
                                        ?>
                                        <a class="btn product-cta btn-trans border-white effect effect-white mb-hide"
                                            href="<?php echo get_field('banne_link'); ?>">
                                            <span><?php echo get_field('banner_btn_text'); ?></span>
                                        </a>

                                        <a class="btn product-cta border-white bg-white txt-black mb-show-ib"
                                            href="<?php echo get_field('banner_link'); ?>">
                                            <span><?php echo get_field('banner_btn_text'); ?></span>
                                        </a>
                                    <?php } ?>

                                </div>
                            </div>
                        </div><!-- Product Context -->

                        <!-- Product Background -->
                        <div class="product-slider__wrapper__item__bg">
                            <img src="https://picsum.photos/1920/800" class="mb-hide">
                            <img src="https://picsum.photos/610/820" class="mb-show-bl">
                        </div>
                        <!-- Product Background -->

                    </div><!-- Slider item -->

                <?php } ?>
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
