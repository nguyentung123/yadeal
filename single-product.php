<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Yadea_Theme
 */

get_header();
$specifications = get_specifications_by_id($post->ID);
?>
<main>
    <!-- Section slick carousel-->
    <?php
    $list_img = get_field('product_image_set');
    if($list_img):
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
                                foreach($list_img as $img_item) {
                                    $name_color_img = explode('/',$img_item['url']);
                                    ?>
                                    <div class="slide-item <?php echo explode('.',$name_color_img[count($name_color_img)-1])[0];?>">
                                        <!--Image and dots-->
                                        <div class="slide-item-image">
                                            <img src="<?php echo $img_item['url'];?>" alt="<?php echo $img_item['alt'];?>">
                                        </div>
                                        <!--Caption info-->
                                        <div class="slide-item-caption">
                                            <?php if(get_field('product_price')):?>
                                                <h3>
                                                    <span>Giá:</span>
                                                    <?php echo get_field('product_price');?> VND
                                                </h3>
                                            <?php endif;?>
                                            <a href="<?php echo site_url('/support/tim-cua-hang/');?>">Mua Ngay</a>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <ul class="slide-dots-custom">
                                <?php
                                $list_color_pro = get_field('product_colors');
                                if($list_color_pro) {
                                    foreach ($list_color_pro as $key => $color_pro) { ?>
                                        <li class="<?php echo $color_pro; if($key==0){echo 'active-color';}?> ">
                                            <button><?php echo $key+1; ?></button>
                                        </li>
                                        <?php
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif;?>
    <!-- Section slick carousel-->



    <!-- Section parameter information-->
    <?php
    if($specifications):
        ?>
        <section class="param-detail" id="param-detail">
            <div class="container">
                <div class="row">
                    <!--Title main-->
                    <div class="col-lg-12">
                        <h3>
                            Thông số kỹ thuật
                        </h3>
                    </div>
                    <?php
                    $pos = 0;
                    foreach ($specifications['val'] as $key=>$specification_item):$pos++;
                        if($pos==1){continue;}
                        ?>
                        <div class="col-lg-12">
                            <!--Sub title-->
                            <?php $label_item_field = get_field_object($key)['label']; ?>
                            <h4><?php echo ($label_item_field);?></h4>
                            <!--Content-->
                            <div class="content">
                                <div class="content-table">
                                    <?php $list_label=array(); if(have_rows($key)):while (have_rows($key)):the_row();
                                        foreach ($specification_item as $key_children => $value){
                                            array_push($list_label,get_sub_field_object($key_children)['label']);
                                        }
                                        break;
                                    endwhile;endif;?>
                                    <?php $pos_label=0; foreach ($specification_item as $key_children => $value):?>
                                        <?php if($value):?>
                                            <div class="item">
                                                <p><?php echo $list_label[$pos_label];?></p>
                                                <b><?php echo $value; ?></b>
                                            </div>
                                        <?php endif;?>
                                        <?php $pos_label++;endforeach;?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </section>
    <?php endif;?>
    <!-- Section parameter information-->



    <!-- Section slide image reality-->
    <?php
    $list_img_real = get_field('product_image_real_set');
    if($list_img_real):
        ?>
        <section class="slide-image-reality" id="slide-image-reality">
            <div class="container">
                <div class="row">
                    <!-- Title main-->
                    <div class="col-lg-12">
                        <h3>Hình ảnh thực tế <?php the_title();?></h3>
                    </div>
                    <div class="col-lg-12">
                        <!-- Slick carousel image-->
                        <div class="slide-content">
                            <?php
                            $count = 0;
                            foreach($list_img_real as $key => $value){
                                $count++;if($count>8)break;
                                echo '<img src="'.$value['url'].'" class="image-holder__item item-'.($key+1).'">';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif;?>
    <!-- Section slide image reality-->
</main>

<?php
get_footer();
?>
