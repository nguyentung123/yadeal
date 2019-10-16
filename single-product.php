<?php
get_header();
$specifications = get_field('product_specs');
?>
<main>
    <!-- Section slick carousel-->
    <?php
    $list_color_pro = get_field('product_colors');

    if($list_color_pro):
        ?>
        <section class="slide-detail" id="slide-detail">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!--Slick carousel-->
                        <div class="slide-container">
                            <div class="slide-content">
                                <!--Slide item-->
                                <?php
                                if(count($list_color_pro) > 0):
                                    foreach ($list_color_pro as $img_item):
                                        var_dump($img_item);
                                        $name_color_img = $img_item['product_color_name'];
                                        $name_img = $img_item['product_color_image'];

                                        ?>
                                        <div class="slide-item <?php echo $name_color_img; ?>">
                                            <!--Image and dots-->
                                            <div class="slide-item-image">
                                                <img src="<?php echo $name_img; ?>"
                                                     alt="<?php echo get_the_title() . $name_color_img; ?>">
                                            </div>
                                            <!--Caption info-->
                                            <div class="slide-item-caption">
                                                <?php if (get_field('product_price')): ?>
                                                    <h3>
                                                        <span>Giá:</span>
                                                        <?php echo get_field('product_price'); ?> VND
                                                    </h3>
                                                <?php endif; ?>
                                                <a href="<?php echo site_url('/support/tim-cua-hang/'); ?>">Mua
                                                    Ngay</a>
                                            </div>
                                        </div>
                                    <?php endforeach;
                                else: ?>
                                    <div class="slide-item">
                                        <!--Image and dots-->
                                        <div class="slide-item-image">
                                            <img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>">
                                        </div>
                                        <!--Caption info-->
                                        <div class="slide-item-caption">
                                            <?php if (get_field('product_price')): ?>
                                                <h3>
                                                    <span>Giá:</span>
                                                    <?php echo get_field('product_price'); ?> VND
                                                </h3>
                                            <?php endif; ?>
                                            <a href="<?php echo site_url('/support/tim-cua-hang/'); ?>">Mua
                                                Ngay</a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <ul class="slide-dots-custom">
                                <?php if(count($list_color_pro) > 0): ?>
                                    <?php foreach ($list_color_pro as $key => $img_item): ?>
                                        <li class="<?php echo $img_item['product_color_name']; if($key==0){echo ' active-color';}?> ">
                                            <button><?php echo $key + 1; ?></button>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif;?>
    <!-- Section slick carousel-->



    <!-- Section parameter information-->
    <?php if($specifications): ?>
        <section class="param-detail" id="param-detail">
            <div class="container">

                <?php if($specifications['product_spec_size'] AND count($specifications['product_spec_size']) > 0):?>
                    <?php $productSizeData = $specifications['product_spec_size'] ?>
                    <!--Title main-->
                    <div class="col-lg-12">
                        <h3>
                            Thông số kỹ thuật
                        </h3>
                    </div>
                    <div class="content">
                        <?php foreach($productSizeData as $key => $data_item): ?>
                            <?php if($key == 0): ?>
                                <div class="content-table">
                            <?php elseif($key % 3 == 0 AND $key !== 0): ?>
                                </div>
                                <div class="content-table">
                            <?php endif; ?>

                            <div class="item">
                                <p><?php echo $data_item['product_size_title'] ?></p>
                                <b><?php echo str_replace('\n', '<br>',$data_item['product_size_value']) ?></b>
                            </div>

                            <?php if($key == count($productSizeData) - 1 ):?>
                                </div>
                            <?php endif;?>

                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if($specifications['product_spec_frame'] AND count($specifications['product_spec_frame']) > 0):?>
                    <?php $productFrameData = $specifications['product_spec_frame'] ?>
                    <!--Title main-->
                    <div class="col-lg-12">
                        <h3>
                            Khung Xe
                        </h3>
                    </div>
                    <div class="content">
                        <?php foreach($productFrameData as $key => $data_item): ?>
                            <?php if($key == 0): ?>
                                <div class="content-table">
                            <?php elseif($key % 3 == 0 AND $key !== 0): ?>
                                </div>
                                <div class="content-table">
                            <?php endif; ?>

                            <div class="item">
                                <p><?php echo $data_item['product_frame_title'] ?></p>
                                <b><?php echo str_replace('\n', '<br>', $data_item['product_frame_value']); ?></b>
                            </div>

                            <?php if($key == count($productFrameData) - 1 ):?>
                                </div>
                            <?php endif;?>

                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if($specifications['product_spec_engine'] AND count($specifications['product_spec_engine']) > 0):?>
                    <?php $productEngineData = $specifications['product_spec_engine'] ?>
                    <!--Title main-->
                    <div class="col-lg-12">
                        <h3>
                            Động cơ
                        </h3>
                    </div>
                    <div class="content">
                        <?php foreach($productEngineData as $key => $data_item): ?>
                            <?php if($key == 0): ?>
                                <div class="content-table">
                            <?php elseif($key % 3 == 0 AND $key !== 0): ?>
                                </div>
                                <div class="content-table">
                            <?php endif; ?>

                            <div class="item">
                                <p><?php echo $data_item['product_engine_title'] ?></p>
                                <b><?php echo str_replace('\n', '<br>', $data_item['product_engine_value']); ?></b>
                            </div>

                            <?php if($key == count($productEngineData) - 1 ):?>
                                </div>
                            <?php endif;?>

                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif;?>
    <!-- Section parameter information-->



    <!-- Section slide image reality-->

    <!-- Section slide image reality-->
</main>

<?php
get_footer();
?>
