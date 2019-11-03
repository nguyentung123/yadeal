<?php
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