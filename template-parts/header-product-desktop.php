<?php
$productHeaderQueryOptions = array(
    'post_type'       => 'product',
    'post_status'     => 'publish',
    'posts_per_page'  => 6,
    'order'           => 'ASC',
    'orderby'         => 'meta_value_num',
    'meta_key'        => 'product_priority'
);
$productHeaderQuery = new WP_Query($productHeaderQueryOptions);

if($productHeaderQuery->have_posts()): ?>
    <!-- Product Listing Sub Menu -->
    <div class="container sub-menu mb-hide" id="page-sub-menu">

        <!-- Row - Product Wrapper -->
        <div class="sub-menu__wrapper row product-list-layout">

            <?php while ($productHeaderQuery->have_posts()): ?>
                <?php $productHeaderQuery->the_post(); ?>

                <!-- Product Item -->
                <div class="col-md-4 col-6 product-item">

                    <!-- Product Detail Wrapper -->
                    <div class="product-detail">

                        <!-- Color Variation -->
                        <?php $list_color_pro = get_field('product_colors'); ?>
                        <?php if(count($list_color_pro) > 0): ?>
                            <ul class="color-variations horizontal-list text-right">
                                <?php foreach ($list_color_pro as $color_item): ?>
                                    <li class="color-variations__item <?php echo $color_item['product_color_name'];?> "></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <!-- Color Variation -->

                        <!-- Product Image -->
                        <div class="product-image">
                            <?php
                            $url_img = get_theme_file_uri('assets/img/product1.png');
                            if( has_post_thumbnail() ){
                                $url_img = get_the_post_thumbnail_url();
                            } else {
                                if( $list_color_pro AND $list_color_pro[0]['product_color_image']){
                                    $url_img = $list_color_pro[0]['product_color_image'];
                                }
                            }
                            ?>
                            <a href="<?php echo get_permalink(); ?>">
                                <img src="<?php echo $url_img;?>" class="img-fluid">
                            </a>
                        </div>
                        <!-- Product Image -->

                        <!-- Product Context -->
                        <div class="product-context text-center">
                            <h4 class="product-name page-desc">
                                <a href="<?php echo site_url('/products'); ?>">
                                    <?php echo get_field('product_name')?get_field('product_name'):get_the_title();?>
                                </a>
                            </h4>
                        </div>
                        <!-- Product Context -->

                    </div>
                </div><!-- Product Item -->

            <?php endwhile; ?>
        </div>
    </div>

<?php endif;
wp_reset_postdata(); ?>