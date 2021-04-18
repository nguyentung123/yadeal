<?php
$banner2Query = new WP_Query(array(
  'post_type'      => 'banner_2',
  'post_status'    => 'publish',
  'posts_per_page' => 5,
  'orderby'        => 'meta_value_num',
  'order'          => 'ASC',
  'meta_key'       => 'banner_priority',
  'meta_query'       => array(
    array(
      'key'     => 'choose_banner_show',
      'value'   => 'show',
      'compare' => 'LIKE'
    )
  )
));

if ($banner2Query->have_posts()) : ?>
<!-- Section Home Banner 2 -->
<section class="section" id="home-banner-2">

  <!-- Banner 2 Main Slider -->
  <div class="main-content product-slider">

    <!-- Slider Wrapper -->
    <div class="product-slider__wrapper" id="slider-style-2">

      <?php while ($banner2Query->have_posts()) :
          $banner2Query->the_post(); ?>

      <!-- Slider item -->
      <?php
          $placeHolder = get_theme_file_uri('assets/img/placeholder/image-placeholder.png');
          $mbBg = get_field('banner_2_mobile_bg') ? get_field('banner_2_mobile_bg') : $placeHolder;
          $mainBg = get_field('banner_2_desktop_bg') ? get_field('banner_2_desktop_bg') : $placeHolder;
          $noContent = !(get_field('banner_title') and get_field('banner_subtitle'));
          if ($noContent) : ?>
      <a href="<?php echo get_field('banner_link'); ?>">
        <div class="slider product-slider__wrapper__item light-gray-bg">
          <div class="product-slider__wrapper__item__bg">
            <picture>
              <source srcset="<?php echo  $mbBg; ?>" media="(max-width: 768px)">
              <img src="<?php echo   $mainBg; ?>">
            </picture>
          </div>
        </div>
      </a>
      <?php else : ?>
      <div class="slider product-slider__wrapper__item light-gray-bg">

        <!-- Product Context -->
        <div class="product-slider__wrapper__item__context">
          <div class="product-slider__wrapper__item__context__wrapper">
            <h1 class="page-title">
              <?php echo get_field('banner_title'); ?>
            </h1>
            <?php if (get_field('banner_subtitle')) : ?>
            <p class="sub-title">
              <?php echo get_field('banner_subtitle'); ?>
            </p>
            <?php endif; ?>

            <?php if (get_field('button_btn_text')  and get_field('banner_link')) : ?>
            <?php $slug_title = str_replace(' ', '-', strtolower(get_field('banner_title'))); ?>

            <a id="banner-2-<?php echo $slug_title; ?>-cta-btn-click"
              class="btn product-cta btn-trans border-white effect effect-white mb-hide"
              href="<?php echo get_field('banner_link'); ?>">
              <span><?php echo get_field('button_btn_text'); ?></span>
            </a>

            <a id="banner-2-<?php echo $slug_title; ?>-cta-btn-click"
              class="btn product-cta border-white bg-white txt-black mb-show-ib"
              href="<?php echo get_field('banner_link'); ?>">
              <span><?php echo get_field('button_btn_text'); ?></span>
            </a>

            <?php endif; ?>

          </div>
        </div><!-- Product Context -->

        <!-- Product Background -->

        <div class="product-slider__wrapper__item__bg">
          <picture>
            <source srcset="<?php echo  $mbBg; ?>" media="(max-width: 768px)">
            <img src="<?php echo  $mainBg; ?>">
          </picture>
        </div>
        <!-- Product Background -->

      </div><!-- Slider item -->
      <?php endif; ?>
      <?php endwhile; ?>
    </div>

    <div class="slider-paging mb-hide" id="slider-style-2-paging">
      <span class="slider-paging__page page-mold">00</span>
      <span class="slider-paging__page current-page active">03</span>
      <span class="slider-paging__page current-page inactive">03</span>
      <span class="slider-paging__page all-page">05</span>
    </div>
  </div>
</section><!-- Section Home Banner 2 - END -->
<?php endif;
wp_reset_postdata();