<?php
$banner1Query = new WP_Query(array(
    'post_type' => 'banner_1',
    'posts_per_page' => 5,
));

if($banner1Query->have_posts()){ ?>
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
                            <?php while($banner1Query->have_posts()){
                                $banner1Query->the_post(); ?>

                                <!-- Indicator Item 1 -->
                                <div class="main-content__context__wrapper__item">
                                    <h1 class="title mb-bold">
                                        <?php echo get_field('banner_title'); ?>
                                    </h1>

                                    <?php if(get_field('banner_subtitle')){ ?>
                                        <h3 class="sub-title uppercase txt-gray">
                                            <?php echo get_field('banner_subtitle'); ?>
                                        </h3>
                                    <?php } ?>

                                    <?php if(get_field('banner_text')){?>
                                        <p class="desc txt-gray">
                                            <?php echo get_field('banner_text'); ?>
                                        </p>
                                    <?php } ?>

                                    <?php if(get_field('banner_btn_text') AND get_field('banner_link')) {
                                        ?>
                                        <a class="btn product-cta btn-trans border-gray effect effect-black mb-hide"
                                           href="<?php echo get_field('banner_link'); ?>">
                                            <span><?php echo get_field('banner_btn_text'); ?></span>
                                        </a>

                                        <a class="btn product-cta mb-show-ib btn-grad"
                                           href="<?php echo get_field('banner_link'); ?>">
                                            <span><?php echo get_field('banner_btn_text'); ?></span>
                                        </a>
                                    <?php } ?>

                                </div>

                            <?php } ?>
                        </div>
                    </div><!-- Context Wrapper -->
                </div>

                <!-- Right Slider -->
                <div class="col-lg-8 col-12 main-content__slider" >
                    <div id="slider-style-1">
                        <?php while($banner1Query->have_posts()){
                            $banner1Query->the_post(); ?>
                            <div class="main-content__slider__item slide-image">
                                <img src="https://picsum.photos/1280/600" class="mb-hide">
                                <img src="https://picsum.photos/600/830" class="mb-show-bl">
                            </div>
                        <?php } ?>
                    </div>

                    <div class="slider-paging" id="slider-style-1-paging">
                        <span class="slider-paging__page page-mold">00</span>
                        <span class="slider-paging__page current-page active">03</span>
                        <span class="slider-paging__page current-page inactive">03</span>
                        <span class="slider-paging__page all-page">05</span>
                    </div>
                </div><!-- Right Slider -->

            </div><!-- Row -->

        </div><!-- Main Content -->

    </section>
    <!-- Section Home Banner 1 - END -->

<?php }

wp_reset_postdata();