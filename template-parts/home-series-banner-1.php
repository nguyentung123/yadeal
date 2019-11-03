<?php
$seriesBannerQueryOptions = array(
    'post_type'         => 'banner_series_1',
    'posts_per_page'    => 1,
    'orderby'           => 'meta_value_num',
    'meta_key'          => 'banner_priority',
    'order'             => 'ASC',
    'meta_query'        =>  array(
        array(
            'key'       => 'banner_active',
            'compare'   => 'LIKE',
            'value'     => '1'
        )
    )
);

$seriesBannerQuery = new WP_Query($seriesBannerQueryOptions);

if($seriesBannerQuery -> have_posts()): ?>
    <section class="section" id="home-products-1">

        <!-- Products Container -->
        <div class="container-fluid product-showcase">

            <!-- Row -->
            <div class="row">

                <!-- Product Item -->
                <?php while($seriesBannerQuery -> have_posts()): ?>
                    <?php $seriesBannerQuery -> the_post(); ?>


                    <!-- Banner Item -->
                    <div class="col-lg-4 col-12 product-showcase__item">

                        <!-- Product Item Top -->
                        <div class="product-showcase__item__top text-center">
                            <h3 class="series-name"><?php echo get_the_title(); ?></h3>
                            <a href="<?php echo site_url('/products/#') . str_replace(' ', '-', strtolower(get_the_title())); ?>">
                                <?php echo get_field('banner_slogan'); ?>
                            </a>
                        </div><!-- Product Item Top -->

                        <!-- Product Item Body -->
                        <div class="product-showcase__item__body">

                            <?php
                            $galleryList = get_field('banner_gallery');

                            if(count($galleryList) > 0): ?>

                                <!-- Image Holder -->
                                <div class="image-holder">
                                    <?php foreach( $galleryList as $image): ?>
                                        <img src="<?php echo $image['url']; ?>" class="image-holder__item">
                                    <?php endforeach; ?>
                                </div>
                                <!-- Image Holder - END -->

                            <?php endif;?>


                            <div class="product-detail text-center">
                                <h3 class="product-name">
                                    <?php echo get_the_title(get_field('banner_product')); ?>
                                </h3>
                                <h4 class="product-slogan">
                                    <?php
                                    $productLandingPage = get_permalink(get_field('banner_product'));
                                    if( get_field('product_landing_page', get_field('banner_product')) ){
                                        $productLandingPage = get_field('product_landing_page', get_field('banner_product'));
                                    }
                                    ?>
                                    <a href="<?php echo $productLandingPage; ?>" style="display: inline">
                                        <?php echo get_field('product_slogan', get_field('banner_product')); ?>
                                    </a>
                                </h4>
                            </div>
                        </div>
                        <!-- Product Item Body -->


                    </div>
                    <!-- Banner Item -->


                <?php endwhile; ?>

                <!-- Product Item -->

            </div>

        </div><!-- Products Container -->

    </section>

<?php
endif;
wp_reset_postdata();
?>