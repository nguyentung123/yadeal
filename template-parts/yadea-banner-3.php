<?php
$banner3Query = new WP_Query(array(
    'post_type'      => 'banner_3',
    'posts_per_page' => 5
));

if($banner3Query->have_posts()){ ?>
    <!-- Section Home Product 3 -->
    <section class="section" id="home-banner-3">

        <!-- Slider Banner 3 -->
        <div class="container-fluid slider" id="slider-style-3">
            <?php while($banner3Query->have_posts()) {
                $banner3Query->the_post();
                ?>
                <div class="slider__item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-12 slider__item__context">
                                <h1 class="page-title">
                                    <?php echo get_field('banner_title'); ?>
                                </h1>
                                <h3 class="page-sub-title uppercase">
                                    <span class="txt-main">Banner</span> Example
                                </h3>
                                <?php if(get_field('banner_text')) { ?>
                                    <p class="desc">
                                        <?php echo get_field('banner_text'); ?>
                                    </p>
                                <?php } ?>

                                <?php if(get_field('banner_btn_text') AND get_field('banner_link')){?>
                                    <a class="btn product-cta border-gray btn-trans effect effect-main mb-hide"
                                        href="<?php echo get_field('banner_link'); ?>">
                                        <span><?php echo get_field('banner_btn_text'); ?></span>
                                    </a>

                                    <a class="btn product-cta mb-show-ib btn-grad"
                                        href="<?php echo get_field('banner_link'); ?>">
                                        <span><?php echo get_field('banner_btn_text'); ?></span>
                                    </a>
                                <?php } ?>

                            </div>
                            <div class="col-lg-8 col-12 slider__item__image">
                                <img src="https://picsum.photos/820/820" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
<?php }
wp_reset_postdata();
