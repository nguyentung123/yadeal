<?php
//*Template Name: Hướng dẫn sử dụng
get_header();
?>
<main class="no-overlay support-pages">

  <!-- Common Banner -->
  <div class="common-banner" id="instruction-banner-section">

    <!-- Container -->
    <div class="container">

      <!-- Background Holder -->
      <div class="bg-holder" id="support-instruction-banner-bg">
        <div class="img-holder">
          <img alt="banner privacy icon"
               src="<?php echo get_theme_file_uri('assets/img/update-dec/instruction-banner.png'); ?>">
        </div>
      </div>
      <!-- Background Holder - END -->

      <!-- Main Content -->
      <div class="main-content">
        <h3 class="title">
          HƯỚNG DẪN SỬ DỤNG
        </h3>
        <p class="desc">
          Những lưu ý để điều khiển xe an toàn và bảo<br>
          dưỡng xe đúng cách
        </p>
      </div>
      <!-- Main Content -->

    </div>
    <!-- Container - END -->

  </div>
  <!-- Common Banner - END -->


  <!-- After Banner Content -->
  <div class="after-banner-content">

    <!-- Container -->
    <div class="container">

      <!-- Desc -->
      <p class="desc">
        Cảm ơn bạn đã chọn xe máy điện YADEA. Tất cả các bộ phận của xe máy điện thông minh<br>
        YADEA đều là các bộ phận tiêu chuẩn do nhà máy quy định. Để đảm bảo hiệu suất tốt nhất cho<br>
        xe của bạn, chúng tôi đưa ra những lưu ý đặc biệt dưới đây trong quá trình sử dụng sản phẩm
      </p>
      <!-- Desc - END -->

    </div>
    <!-- Container - END -->

  </div>
  <!-- After Banner Content - END -->

  <!-- Bike Version Picker -->
    <?php
    $allInstructionQueryArgs = [
        'posts_per_page' => -1,
        'post_type'      => 'huong-dan-su-dung',
    ];
    $allInstructionQuery = new WP_Query($allInstructionQueryArgs);
    if ($allInstructionQuery->have_posts()): ?>
      <div class="bike-version-picker" id="instruction-bike-selection">
        <div class="container">

          <!-- Title -->
          <h3 class="title">
            Chọn mẫu xe
          </h3>
          <!-- Title - END -->

          <ul class="bike-list">
              <?php
              while ($allInstructionQuery->have_posts()):
                  $allInstructionQuery->the_post();
                  $postModel = get_field('bike-model');
                  $list_color_pro = get_field('product_colors', $postModel);
                  $url_img = get_theme_file_uri('assets/img/product1.png');
                  if ($list_color_pro AND $list_color_pro[0]['product_color_image']):
                      $url_img = $list_color_pro[0]['product_color_image'];
                      ?>

                    <!-- Bike Item -->
                    <li class="bike-item">
                      <a href="<?php echo get_permalink(); ?>">
                        <div class="img-holder">
                          <img src="<?php echo $url_img; ?>" class="bike-thumbnail">
                        </div>
                        <p class="bike-name">
                            <?php echo get_the_title($postModel); ?>
                        </p>
                      </a>
                    </li>
                    <!-- Bike Item - END -->

                  <?php endif; ?>
              <?php
              endwhile;
              ?>
          </ul>
        </div>
      </div>
    <?php
    endif;
    wp_reset_postdata();
    ?>


  <!-- Bike Version Picker - END -->

    <?php get_template_part('template-parts/common', 'pre-footer'); ?>

</main>
<?php get_footer(); ?>
