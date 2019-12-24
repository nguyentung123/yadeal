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

            <!-- Container -->
            <div class="container">

                <!-- Product Detail Layout -->
                <div class="product-detail-layout">

                    <!-- Left Slider Detail -->
                    <div class="bike-detail-slider">

                        <!--Slick carousel-->
                        <div class="slide-container">

                            <!-- Slide Holder -->
                            <div class="slide-content">

                                <!--Slide item-->
                                <?php if(count($list_color_pro) > 0):
                                    foreach ($list_color_pro as $img_item):
                                        $name_color_img = $img_item['product_color_name'];
                                        $name_img = $img_item['product_color_image'];

                                        ?>
                                        <div class="slide-item <?php echo $name_color_img; ?>">

                                            <!--Image and dots-->
                                            <div class="slide-item-image">
                                                <img src="<?php echo $name_img; ?>"
                                                     alt="<?php echo get_the_title() . $name_color_img; ?>">
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
                                    </div>
                                <?php endif; ?>

                            </div>

                            <!-- Slider DOTS Custom -->
                            <ul class="slide-dots-custom">
                                <?php if(count($list_color_pro) > 0): ?>
                                    <?php foreach ($list_color_pro as $key => $img_item): ?>
                                        <li class="<?php echo $img_item['product_color_name']; if($key==0){echo ' active-color';}?> ">
                                            <button><?php echo $key + 1; ?></button>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                            <!-- Slider DOTS Custom -->

                        </div>
                    </div>
                    <!-- Left Slider Detail - END -->


                    <!-- Right Product Detail -->
                    <div class="bike-detail-summary">
                        <h3 class="product-name"><?php echo get_the_title(); ?></h3>

                        <h4 class="product-price">
                            Giá <b><?php echo number_format(get_field('product_price')); ?> VNĐ</b>
                        </h4>

                        <div class="product-detail">
                            <?php echo get_field('product_intro'); ?>
                        </div>

                        <div class="product-detail">
                            <?php echo get_the_content(); ?>
                        </div>
                        <div class="cta-holder">
                            <a class="btn product-cta main open-signup-info-modal">Mua Ngay</a>
                        </div>
                    </div>
                    <!-- Right Product Detail - END -->

                </div>
                <!-- Product Detail Layout - END -->

            </div>
            <!-- Container - END -->

        </section>
    <?php endif;?>
    <!-- Section slick carousel-->



    <!-- Section parameter information-->
    <?php if($specifications['product_spec_size'] OR $specifications['product_spec_frame'] OR $specifications['product_spec_engine']): ?>
        <section class="param-detail" id="param-detail">
            <div class="container">

                <?php if($specifications['product_spec_size'] AND count($specifications['product_spec_size']) > 0):?>
                    <?php $productSizeData = $specifications['product_spec_size'] ?>
                    <!--Title main-->
                    <div class="col-lg-12">
                        <h3>
                            Thông số kỹ thuật chung
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

                <?php if($specifications['product_spec_engine'] AND count($specifications['product_spec_engine']) > 0):?>
                    <?php $productEngineData = $specifications['product_spec_engine'] ?>
                    <!--Title main-->
                    <div class="col-lg-12">
                        <h3>
                            Động cơ và pin
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

                <?php if($specifications['product_spec_frame'] AND count($specifications['product_spec_frame']) > 0):?>
                    <?php $productFrameData = $specifications['product_spec_frame'] ?>
                    <!--Title main-->
                    <div class="col-lg-12">
                        <h3>
                            Khung xe và ngoại quan
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

            </div>
        </section>
    <?php endif;?>
    <!-- Section parameter information-->



    <!-- Section slide image reality-->
    <?php
    $productImageSet = get_field('product_image_real_set');

    if($productImageSet AND count($productImageSet) >= 3): ?>
        <!-- Section Real Image Slider -->
        <section class="product-real-image-section" id="product-real-image-section">

            <!-- Container -->
            <div class="container">

                <div class="heading">
                    <h3 class="title">HÌNH ẢNH THỰC TẾ <?php echo strtoupper(get_the_title()); ?></h3>
                </div>

                <!-- Slider Holder -->
                <div class="slider holder">
                    <ul class="real-img-slider">

                        <?php foreach($productImageSet as $image):?>
                            <!-- Slide item -->
                            <li class="slide-item">
                                <a class="venobox" href="<?php echo $image['url'];?>">
                                    <img draggable="false"
                                         src="<?php echo $image['url'];?>"
                                        style="width: 100%;">
                                </a>
                            </li>
                        <?php endforeach;?>

                    </ul>
                </div>
            </div>

        </section>
        <!-- Section Real Image Slider - END -->
    <?php endif; ?>
    <!-- Section slide image reality-->

  <!-- Social Comment Section -->
  <div class="social-comment" style="padding: 3em 0 4em;">
    <!-- Container -->
    <div class="container small">
      <div class="fb-comments" data-href="https://www.yadeavietnam.vn/<?php echo get_post_field( 'post_name'); ?>" data-width="100%" data-numposts="5"></div>
    </div>
    <!-- Container -->
  </div>
  <!-- Social Comment Section -->
</main>

<!-- Signup Information Modal -->
<div class="signup-info-modal">
  <!-- Overlay -->
  <div class="overlay close-signup-info-modal"></div>

  <!-- Main Dialog -->
  <div class="signup-info-modal-dialog">
    <div class="close-signup-info-modal">
      <img src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/popup/close-btn.jpg'); ?>">
    </div>

    <!-- Left Signup Form Content -->
    <div class="left-content">
      <h3 class="popup-title">ĐĂNG KÝ MUA XE</h3>
      <h4 class="popup-sub-title">(ĐỂ ĐƯỢC NHÂN VIÊN GỌI TƯ VẤN)</h4>

      <!-- Signup Form -->
      <form class="signup-information-form"
            method="GET"
            action="https://script.google.com/macros/s/AKfycbwXBPuXcNA0vtLMvizQ0ZGtjsfG8qfanzSxQ7kVfWUxtvz6BJk/exec">
        <input type="hidden" name="bike-type" value="<?php echo get_post_field( 'post_name'); ?>">
        <input type="hidden" name="registered_day" value="20/11/2019">
        <input type="hidden" name="status" value="pending">
        <div class="input-holder">
          <label for="user-name">Họ và tên:</label>
          <input type="text" name="user-name" required>
        </div>
        <div class="input-holder">
          <label for="user-phone-number">Số điện thoại:</label>
          <input type="text" name="user-phone-number" class="" required minlength="9" maxlength="11">
        </div>
        <div class="input-holder">
          <label for="user-email">Email:</label>
          <input type="email" name="user-email">
        </div>
        <div class="submit-holder">
          <button type="submit"
                  class="track-this-button"
                  id="specs-page-popup-<?php echo get_post_field( 'post_name'); ?>-buynow-signup-btn">
                        <span class="btn-context">
                           Đăng ký <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </span>
            <span class="loading-context">
                            <i class="fa fa-spinner fa-spin fa-fw"></i>
                        </span>
          </button>
          <p class="submit-feedback"> </p>
        </div>
      </form>
    </div>

    <!-- Right Search Shop Content -->
    <div class="right-content">
      <h3 class="right-title">HOẶC</h3>
      <a class="right-cta track-this-button"
         id="specs-page-popup-findstore-<?php echo get_post_field( 'post_name'); ?>-btn"
         href="<?php echo site_url('/shop'); ?>">TÌM CỬA HÀNG <br>GẦN NHẤT <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
      <div class="right-bg">
        <img src="<?php echo get_theme_file_uri('landing-page/yadea-g5/img/popup/shop-img.jpg'); ?>">
      </div>
    </div>
  </div>
</div>
<!-- Signup Information Modal - END -->

<!-- Image Viewer Venobox Setup -->
<link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/css/vendors/venobox.css'); ?>">
<script src="<?php echo get_theme_file_uri('assets/js/venobox.min.js'); ?>"></script>
<script>
    $(document).ready(function(){
        $('.venobox').venobox({
            framewidth: window.innerWidth * 0.75 + 'px',
        });
    });
</script>
<?php
get_footer();
?>
