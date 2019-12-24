<?php
//* Template Name: Products*/
get_header();
?>

<!-- === MAIN CONTENT === -->
<main>
    <!-- Product Header Control -->
    <section class="section light-gray-bg" id="products-head">

        <!-- Container -->
        <div class="container">

            <!-- Title -->
            <h2 class="series-name text-center">
                Lựa chọn phong cách riêng của bạn
            </h2>

            <?php
            $terms = get_terms( array(
                'taxonomy'     => 'series',
                'hide_empty'   => true,
            ));

            // Wordpress does not sort term by default, do it manually
            foreach ($terms as $term_item){
                $term_item -> series_priority = get_field('series_priority', $term_item);
            }

            usort($terms, "cmp");


            if($terms):
                ?>
                <!-- Products Control -->
                <div class="products-control text-center mb-hide">

                    <!-- All Product -->
                    <a class="products-control__item active" data-target="all" href="#all">
                        <span class="product-control__item__link" data-target="all">Tất cả</span>
                    </a>

                    <?php foreach ($terms as $terms_item):?>
                        <?php // Show Term If Term Have Any Post ?>
                        <a class="products-control__item" data-target="<?php echo $terms_item->slug;?>" href="#<?php echo $terms_item->slug; ?>">
                            <span class="product-control__item__link" data-target="<?php echo $terms_item->slug;?>"><?php echo $terms_item->name;?></span>
                        </a>
                    <?php endforeach; ?>
                    <!-- L Series -->

                </div><!-- Products Control -->

                <div class="products-control-mb mb-show-bl">
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
                        <?php foreach ($terms as $terms_item):?>
                            <a class="products-control__item" data-target="<?php echo $terms_item->slug;?>" href="#<?php echo $terms_item->slug; ?>">
                                <span class="product-control__item__link" data-target="<?php echo $terms_item->slug;?>"><?php echo $terms_item->name;?></span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif;?>

        </div><!-- Container -->

    </section>
    <!-- Product Header Control -->


    <!-- Product Main List -->
    <section class="section" id="product-list">

        <!-- Container - All Products Wrapper -->
        <div class="container series">
            <?php foreach ($terms as $term_item):?>

                <?php
                $args = array(
                    'posts_per_page'   => -1,
                    'orderby'          => 'date',
                    'order'            => 'DESC',
                    'post_type'        => 'product',
                    'post_status'      => 'publish',
                    'ignore_sticky_posts' => true,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'series',
                            'field' => 'term_id',
                            'terms' => $term_item->term_id,
                        )
                    )
                );

                $query=new WP_Query($args);

                if($query->have_posts()):?>

                    <!-- Series Block -->
                    <div class="series__block" data-value="<?php echo $term_item->slug;?>">

                        <!-- Series Title -->
                        <div class="series__block__title">
                            <h2 class="series-title">
                                <?php echo str_replace( ' ', '-', $term_item->name); ?>
                            </h2>
                        </div><!-- Series Title -->

                        <!-- Series Product List -->
                        <div class="series__block__products">

                            <?php while ($query->have_posts()):
                                $query->the_post();?>
                                <!-- Row - Product Item -->
                                <div class="row series__block__products__item">

                                    <!-- Product Image -->
                                    <div class="col-lg-6 col-12 series__block__products__item__image">
                                        <?php
                                        // Choose 1 Image To Show On The Page
                                        $url_img_pro = get_theme_file_uri('assets/img/placeholder/image-placeholder.png');

                                        if(count(get_field('product_colors')) > 0){
                                            $url_img_pro = get_field('product_colors')[0]['product_color_image'];
                                        }
                                        ?>
                                        <img src="<?php echo $url_img_pro; ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 series__block__products__item__detail">
                                        <?php echo acf_render('<h2 class="product-name">',get_the_title(),'</h2>');?>

                                        <?php $price_pro = get_field('product_price');
                                        if($price_pro):
                                            ?>
                                            <h4 class="price">
                                                <?php echo number_format($price_pro);?> VND
                                            </h4>
                                        <?php endif;?>

                                        <p class="desc"><?php echo get_field('product_slogan'); ?></p>
                                        <?php echo get_field('product_intro'); ?>

                                        <?php
                                        $productLandingPage = get_permalink();
                                        if( get_field('product_landing_page') ){
                                            $productLandingPage = get_field('product_landing_page');
                                        }
                                        ?>

                                        <a href="<?php echo $productLandingPage; ?>"
                                           class="btn product-cta btn-grad btn-sh effect effect-main">
                                            <span>TÌM HIỂU THÊM</span>
                                        </a>

                                        <a href="<?php echo site_url('/support/tim-cua-hang/');?>" style="display: none;"
                                           class="btn product-cta btn-trans border-gray btn-sh effect effect-main">
                                            <span><i class="fa fa-shopping-cart" aria-hidden="true"></i> MUA NGAY</span>
                                        </a>
                                    </div>
                                </div><!-- Row - Product Item -->
                            <?php endwhile; ?>

                        </div><!-- Series Product List -->

                    </div><!-- Series Block -->
                <?php endif;
                wp_reset_postdata();
            endforeach; ?>
        </div><!-- Container - All Products Wrapper -->

    </section>
    <!-- Product Main List -->

</main>
<!-- === MAIN CONTENT - END === -->


<!--get footer-->
<?php get_footer();?>
