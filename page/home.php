<?php
//* Template Name: Home*/
get_header();
?>

<!-- === MAIN CONTENT === -->
<main style="overflow: hidden">
    <!-- Section Home Banner 1 -->
    <?php do_action('show_banner_1'); ?>
    <!-- Section Home Banner 1 - END -->



    <!-- Section Home Banner 2 -->
    <?php do_action('show_banner_2'); ?>
    <!-- Section Home Banner 2 - END -->

    <?php
    $terms = get_terms( array(
        'taxonomy' => 'series',
        'hide_empty' => false,
        'orderby ' => 'id'
    ) );

    ?>
    <section class="section" id="home-products-1">

        <!-- Products Container -->
        <div class="container-fluid product-showcase">

            <!-- Row -->
            <div class="row">

                <!-- Product Item -->
                <?php
                $terms = get_terms( array(
                    'taxonomy' => 'series',
                    'hide_empty' => false,
                    'orderby ' => 'id'
                ) );
                foreach ($terms as $key => $term_item){
                    $series_item = get_theme_mod($term_item->slug);
                    if($series_item){
                    ?>
                    <div class="col-lg-4 col-12 product-showcase__item">

                        <!-- Product Item Top -->
                        <div class="product-showcase__item__top text-center">
                            <h3 class="series-name"><?php echo $term_item->name;?></h3>
                            <?php
                            $slogan = get_field('series_slogan',$term_item);

                            echo acf_render('<a href="'.site_url("/products/#").$term_item->slug.'" style="display: block" class="series-slogan mt-15">',$slogan,'</a>');
                            ?>
                        </div><!-- Product Item Top -->

                        <!-- Product Item Body -->
                        <?php
                        $list_img_real = get_field('feature_images',$term_item);
                        $title_pro = get_field('feature_name_product',$term_item);
                        $slogan_pro = get_field('feature_slogan_product',$term_item);
                        if($list_img_real||$title_pro||$slogan_pro){
                            ?>
                            <div class="product-showcase__item__body">

                                <!-- Hover Swap Picture Effect -->
                                <?php if($list_img_real):?>
                                <div class="image-holder state-1">
                                    <?php
                                    for($key=0;$key<3;$key++){
                                        echo '<img src="'.$list_img_real[$key]['url'].'" class="image-holder__item item-'.($key+1).'">';
                                    }
                                    ?>
                                </div>
                                <?php endif;?><!-- Hover Swap Picture Effect -->

                                <div class="product-detail text-center">
                                    <?php echo acf_render('<h3 class="product-name">',$title_pro,'</h3>')?>
                                    <?php echo acf_render('<a href="'.site_url("/products/#").$term_item->slug.'" style="display: block" class="product-slogan">',$slogan_pro,'</a>')?>

                                </div>
                            </div>
                        <?php }?>
                    </div>
                <?php }}?><!-- Product Item -->

            </div>

        </div><!-- Products Container -->

    </section>


    <?php
    $terms = get_terms( array(
        'taxonomy' => 'series',
        'hide_empty' => false,
        'orderby ' => 'id'
    ) );
    foreach ($terms as $key => $term_item):
        $series_item = get_theme_mod($term_item->slug);
        if($series_item && $key%2==0){?>

        <section style="display: none" class="section" id="home-products-<?php echo $key+1;?>">

            <!-- Products Container -->
            <div class="container-fluid product-showcase">

                <!-- Row -->
                <?php
                $args = array(
                    "post_type" => 'product',
                    "post_status" => 'publish',
                    'posts_per_page'=>3,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'series',
                            'field' => 'term_id',
                            'terms' => $term_item->term_id,
                        )
                    )
                );
                $query = new WP_Query($args);
                if($query->have_posts()):
                ?>
                <div class="row">

                    <!-- Product Item -->
                    <?php while ($query->have_posts()):$query->the_post();?>
                    <div class="col-lg-4 col-12 product-showcase__item">

                        <!-- Product Item Top -->
                        <div class="product-showcase__item__top text-center">
                            <h3 class="series-name"><?php echo $term_item->name;?></h3>
                            <?php
                                $slogan = get_field('series_slogan',$term_item);
                                echo acf_render('<h4 class="series-slogan mt-15">',$slogan,'</h4>');
                            ?>
                        </div><!-- Product Item Top -->

                        <!-- Product Item Body -->
                        <?php
                            $list_img_real = get_field('product_image_set');
                            $title_pro = get_field('product_name');
                            $slogan_pro = get_field('product_slogan');
                            if($list_img_real||$title_pro||$slogan_pro):
                        ?>
                        <div class="product-showcase__item__body">

                            <!-- Hover Swap Picture Effect -->
                            <?php if($list_img_real):?>
                            <div class="image-holder state-1">
                                <?php
                                for($key=0;$key<3;$key++){
                                    echo '<img src="'.$list_img_real[$key]['url'].'" class="image-holder__item item-'.($key+1).'">';
                                }
                                ?>
                            </div>
                            <?php endif;?><!-- Hover Swap Picture Effect -->

                            <div class="product-detail text-center">
                                <?php echo acf_render('<h3 class="product-name">',$title_pro,'</h3>')?>
                                <?php echo acf_render('<h4 class="product-slogan">',$slogan_pro,'</h4>')?>

                            </div>
                        </div>
                        <?php endif;?>
                    </div>
                    <?php endwhile;?><!-- Product Item -->

                </div>
                <?php endif; wp_reset_postdata();?><!-- Row -->

            </div><!-- Products Container -->

        </section>

            <?php
        }
        else if($series_item && $key%2!=0){?>
            <section style="display: none" class="section" id="home-products-<?php echo $key+1;?>">

                <!-- Main Content -->
                <div class="container-fluid main-content product-showcase">

                    <!-- Product Showcase Top -->
                    <div class="product-showcase__top text-center">
                        <h3 class="series-name"><?php echo $term_item->name;?></h3>
                        <?php
                        $slogan = get_field('series_slogan',$term_item);
                        echo acf_render('<h4 class="series-slogan mt-15">',$slogan,'</h4>');
                        ?>
                    </div>

                    <div class="row product-showcase__body">

                        <!-- Product Item -->
                        <?php
                        $args = array(
                            "post_type" => 'product',
                            "post_status" => 'publish',
                            'posts_per_page'=>1,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'series',
                                    'field' => 'term_id',
                                    'terms' => $term_item->term_id,
                                )
                            )
                        );
                        $query = new WP_Query($args);
                        if($query->have_posts()):
                            ?>
                            <?php while ($query->have_posts()):$query->the_post();?>
                            <div class="col-lg-6 col-12 product-showcase__body__item">
                                <?php
                                $list_img_real = get_field('product_image_set');
                                $title_pro = get_field('product_name');
                                $slogan_pro = get_field('product_slogan');
                                if($list_img_real||$title_pro||$slogan_pro):
                                    ?>
                                    <!-- Images Holder -->
                                    <div class="image-holder state-1">
                                        <?php if($list_img_real):?>
                                            <div class="image-holder state-1">
                                                <?php
                                                for($key=0;$key<3;$key++){
                                                    echo '<img src="'.$list_img_real[$key]['url'].'" class="image-holder__item item-'.($key+1).'">';
                                                }
                                                ?>
                                            </div>
                                        <?php endif;?>

                                    </div>

                                    <!-- Product Detail -->
                                    <div class="product-showcase__body__item__detail pb-20">
                                        <?php echo acf_render('<h3 class="product-name">',$title_pro,'</h3>')?>
                                        <?php echo acf_render('<h4 class="product-slogan">',$slogan_pro,'</h4>')?>
                                    </div>
                                <?php endif;?>
                            </div>
                        <?php endwhile;?>
                        <?php endif; wp_reset_postdata();?>
                        <!-- Product Item -->
                        <?php
                        $args = array(
                            "post_type" => 'product',
                            "post_status" => 'publish',
                            'posts_per_page'=>1,
                            'offset'=>1,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'series',
                                    'field' => 'term_id',
                                    'terms' => $term_item->term_id,
                                )
                            )
                        );
                        $query = new WP_Query($args);
                        if($query->have_posts()): while ($query->have_posts()):$query->the_post();
                            ?>
                            <div class="col-lg-6 col-12  product-showcase__body__item">
                                <?php
                                $feature_img = get_the_post_thumbnail_url($post->ID);
                                $title_pro = get_field('product_name');
                                $slogan_pro = get_field('product_slogan');
                                if($feature_img||$title_pro||$slogan_pro):
                                    ?>
                                    <!-- Images Holder -->
                                    <div class="product-showcase__body__item__full-bg">
                                        <?php echo acf_render('<img src="',$feature_img,'">')?>
                                    </div>

                                    <!-- Product Detail -->
                                    <div class="product-showcase__body__item__detail pb-20">
                                        <?php echo acf_render('<h3 class="product-name txt-white">',$title_pro,'</h3>')?>
                                        <?php echo acf_render('<h4 class="product-slogan txt-white">',$slogan_pro,'</h4>')?>
                                    </div>
                                <?php endif;?>
                            </div>
                        <?php endwhile; endif; wp_reset_postdata();?>
                    </div>

                </div>
            </section>
            <?php
        }
        ?>

    <?php endforeach;?>





    <!-- Section Home Product 3 -->
    <?php do_action('show_banner_3'); ?>
    <!-- Section Home Product 3 - END -->

    <!-- Section Flip Clock JS -->
    <section class="section" id="home-flip-clock">
        <div class="container">
            <!-- Title -->
            <h3>Các bạn đã đồng hành cùng yadea</h3>
            <div class="row flip-content">
                <!--Image button compare-->
                <div class="btn-image-compare">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/button-compare.png" alt="compare">
                </div>
                <!--Number decrement-->
                <div class="col-lg-6">
                    <div class="item item-first">
                        <h4>Giảm thiểu</h4>
                        <div class="flip-item">
                            <div class="number number-decrease"></div>
                            <span class="unit01">Kg</span>
                        </div>
                        <p>Khí CO2 thải ra</p>
                        <div class="item-image">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/decrease.png" alt="decrease">
                        </div>
                    </div>
                </div>
                <!--Number increment-->
                <div class="col-lg-6">
                    <div class="item">
                        <h4>Trồng</h4>
                        <div class="flip-item">
                            <div class="number number-increase"></div>
                            <span class="unit02">Cây xanh</span>
                        </div>
                        <p>Làm sạch không khí</p>
                        <div class="item-image">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/increase.png" alt="increase">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Flip Clock JS -->
</main>
<!-- === MAIN CONTENT - END === -->


<!--get footer-->
<?php get_footer();?>
