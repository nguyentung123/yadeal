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

    <i class="fa fa-plus nav-trigger active" aria-hidden="true"></i>
    <ul class="nav-item__sub-menu">
        <?php while ($productHeaderQuery->have_posts()): ?>
            <?php $productHeaderQuery->the_post(); ?>

            <!-- Product Item -->
            <li class="product-item">
                <a href="<?php echo get_permalink(); ?>">
                    <?php $list_color_pro = get_field('product_colors'); ?>
                    <!-- Product image -->
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
                    <img class="product-image" src="<?php echo $url_img; ?>">


                    <!-- Color Variation -->
                    <?php if(count($list_color_pro) > 0): ?>
                        <ul class="color-variations horizontal-list text-right pr-15">
                            <?php foreach ($list_color_pro as $color_item): ?>
                                <li class="color-variations__item <?php echo $color_item['product_color_name'];?> "></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <!-- Product Name -->
                    <h5 class="product-name text-center">
                        <?php echo get_field('product_name') ? get_field('product_name') : get_the_title(); ?>
                    </h5>
                </a>

            </li>
        <?php endwhile; ?>
    </ul>
<?php endif; ?>
<?php wp_reset_postdata(); ?>