<?php
get_header();
?>

<!-- === MAIN CONTENT === -->
<?php
    $seriesList = array();
?>
<!-- Product Header Control -->
<section class="section light-gray-bg" id="products-head">

    <!-- Container -->
    <div class="container">

        <!-- Title -->
        <h2 class="series-name text-center">
            Lựa chọn phong cách riêng của bạn
        </h2>

        <!-- Products Control -->
        <div class="products-control text-center mb-hide">

            <?php
            $allSeries = new WP_Query(array(
                'post_type'      => 'product_series',
                'posts_per_page' => -1,
            ));

            if($allSeries -> have_posts()){ ?>
                <!-- All Product -->
                <a class="products-control__item active" data-target="all" href="#all">
                    <span class="product-control__item__link" data-target="all">Tất cả</span>
                </a>
                <?php while ($allSeries -> have_posts()){
                    $allSeries -> the_post();
                    $processName = str_replace(' ', '-',strtolower(get_the_title()));
                    array_push($seriesList, get_the_ID());
                    ?>

                    <a class="products-control__item" data-target="<?php echo $processName; ?>"
                       href="#<?php echo $processName; ?>">
                            <span class="product-control__item__link" data-target="<?php echo $processName; ?>">
                                <?php the_title(); ?>
                            </span>
                    </a>

                <?php }
            }
            ?>
        </div><!-- Products Control -->

        <div class="products-control-mb mb-show-bl">
            <?php
            if($allSeries -> have_posts()){ ?>
                <!-- All Product -->
                <a class="action-holder btn product-cta btn-grad">
                    Tất cả
                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                </a>
                <div class="products-control" id="mobile-control-list">
                    <!-- All Product -->
                    <a class="products-control__item active" href="#all" data-target="all">
                        <span class="product-control__item__link" data-target="all">Tất cả</span>
                    </a>
                    <?php
                    while($allSeries -> have_posts()){
                        $allSeries -> the_post();
                        $processName = str_replace(' ', '-',strtolower(get_the_title())); ?>
                        <!-- L Series -->
                        <a class="products-control__item" data-target="<?php echo $processName; ?>"
                           href="#<?php echo $processName; ?>">
                            <span class="product-control__item__link" data-target="<?php echo $processName; ?>"><?php the_title(); ?></span>
                        </a>
                    <?php } ?>
                </div>
            <?php }
            wp_reset_postdata();
            ?>
        </div>

    </div><!-- Container -->


    <?php print_r($seriesList); ?>
</section>
<!-- Product Header Control -->


<!-- Product Main List -->
<section class="section" id="product-list">

    <!-- Container - All Products Wrapper -->
    <div class="container series">

        <!-- Series Block -->
        <div class="series__block" data-value="l-series">

            <!-- Series Title -->
            <div class="series__block__title">
                <img src="img/images/l-series.png" class="series__block__title__img">
            </div><!-- Series Title -->

            <!-- Series Product List -->
            <div class="series__block__products">

                <!-- Row - Product Item -->
                <div class="row series__block__products__item">
                    <div class="col-lg-6 col-12 series__block__products__item__image">
                        <img src="img/images/product-1.png">
                    </div>
                    <div class="col-lg-6 col-12 series__block__products__item__detail">
                        <h2 class="product-name">
                            Yamaha <br class="mb-hide"> Suzuki Exciter
                        </h2>
                        <h4 class="price">
                            16,000,000 VND
                        </h4>
                        <p class="desc">
                            Đi đầu trong phân khúc xe naked bike đường phố và phân khối lớn.
                        </p>
                        <a class="btn product-cta btn-grad btn-sh">Read More</a>
                        <a class="btn product-cta btn-trans border-gray btn-sh">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            Buy now
                        </a>
                    </div>
                </div><!-- Row - Product Item -->

                <!-- Row - Product Item -->
                <div class="row series__block__products__item">
                    <div class="col-lg-6 col-12 series__block__products__item__image">
                        <img src="img/images/product-2.png">
                    </div>
                    <div class="col-lg-6 col-12 series__block__products__item__detail">
                        <h2 class="product-name">
                            Honda FRD<br class="mb-hide">
                            Suzuki
                        </h2>
                        <h4 class="price">
                            16,000,000
                        </h4>
                        <p class="desc">
                            Đi đầu trong phân khúc xe naked bike đường phố và phân khối lớn.
                        </p>
                        <a class="btn product-cta btn-grad btn-sh">Read More</a>
                        <a class="btn product-cta btn-trans border-gray btn-sh">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            Buy now
                        </a>
                    </div>
                </div><!-- Row - Product Item -->

            </div><!-- Series Product List -->

        </div><!-- Series Block -->


        <!-- Series Block -->
        <div class="series__block" data-value="f-series">

            <!-- Series Title -->
            <div class="series__block__title">
                <img src="img/images/f-series.png" class="series__block__title__img">
            </div><!-- Series Title -->

            <!-- Series Product List -->
            <div class="series__block__products">

                <!-- Row - Product Item -->
                <div class="row series__block__products__item">
                    <div class="col-lg-6 col-12 series__block__products__item__image">
                        <img src="img/images/product-3.png">
                    </div>
                    <div class="col-lg-6 col-12 series__block__products__item__detail">
                        <h2 class="product-name">
                            Toyota Oppo<br class="mb-hide">
                            Exciter
                        </h2>
                        <h4 class="price">
                            16.000.000
                        </h4>
                        <p class="desc">
                            Đi đầu trong phân khúc xe naked bike đường phố và phân khối lớn.
                        </p>
                        <a class="btn product-cta btn-grad btn-sh">Read More</a>
                        <a class="btn product-cta btn-trans border-gray btn-sh">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            Buy now
                        </a>
                    </div>
                </div><!-- Row - Product Item -->

                <!-- Row - Product Item -->
                <div class="row series__block__products__item">
                    <div class="col-lg-6 col-12 series__block__products__item__image">
                        <img src="img/images/product-4.png">
                    </div>
                    <div class="col-lg-6 col-12 series__block__products__item__detail">
                        <h2 class="product-name">
                            MTP Suzuki<br class="mb-hide">
                            Ducati
                        </h2>
                        <h4 class="price">
                            16.000.000
                        </h4>
                        <p class="desc">
                            Đi đầu trong phân khúc xe naked bike đường phố và phân khối lớn.
                        </p>
                        <a class="btn product-cta btn-grad btn-sh">Read More</a>
                        <a class="btn product-cta btn-trans border-gray btn-sh">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            Buy now
                        </a>
                    </div>
                </div><!-- Row - Product Item -->

            </div><!-- Series Product List -->

        </div><!-- Series Block -->


        <!-- Series Block -->
        <div class="series__block" data-value="g-series">

            <!-- Series Title -->
            <div class="series__block__title">
                <img src="img/images/g-series.png" class="series__block__title__img">
            </div><!-- Series Title -->

            <!-- Series Product List -->
            <div class="series__block__products">

                <!-- Row - Product Item -->
                <div class="row series__block__products__item">
                    <div class="col-lg-6 col-12 series__block__products__item__image">
                        <img src="img/images/product-5.png">
                    </div>
                    <div class="col-lg-6 col-12 series__block__products__item__detail">
                        <h2 class="product-name">
                            Yamaha <br class="mb-hide"> Suzuki Exciter
                        </h2>
                        <h4 class="price">
                            16.000.000 VND
                        </h4>
                        <p class="desc">
                            Đi đầu trong phân khúc xe naked bike đường phố và phân khối lớn.
                        </p>
                        <a class="btn product-cta btn-grad btn-sh">Read More</a>
                        <a class="btn product-cta btn-trans border-gray btn-sh">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            Buy now
                        </a>
                    </div>
                </div><!-- Row - Product Item -->

                <!-- Row - Product Item -->
                <div class="row series__block__products__item">
                    <div class="col-lg-6 col-12 series__block__products__item__image">
                        <img src="img/images/product-6.png">
                    </div>
                    <div class="col-lg-6 col-12 series__block__products__item__detail">
                        <h2 class="product-name">
                            Motorola<br class="mb-hide">
                            Nokia Yamaha
                        </h2>
                        <h4 class="price">
                            16.000.000 VND
                        </h4>
                        <p class="desc">
                            Đi đầu trong phân khúc xe naked bike đường phố và phân khối lớn.
                        </p>
                        <a class="btn product-cta btn-grad btn-sh">Read More</a>
                        <a class="btn product-cta btn-trans border-gray btn-sh">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            Buy now
                        </a>
                    </div>
                </div><!-- Row - Product Item -->

            </div><!-- Series Product List -->

        </div><!-- Series Block -->

    </div><!-- Container - All Products Wrapper -->


</section>
<!-- Product Main List -->


<!-- ====== MAIN CONTENT - END ====== -->

<?php
get_footer();
?>
