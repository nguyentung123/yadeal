<!-- === FOOTER === -->
<footer class="footer light-gray-bg pt-90" id="page-footer">

    <!-- Container -->
    <div class="container footer__body">

        <!-- Row -->
        <div class="row main-content">

            <!-- Footer Content Column -->
            <div class="col-lg-3 col-12">

                <!-- Footer Column Title -->
                <h3 class="footer__body__col-title">
                    Xe máy điện thông minh
                </h3><!-- Footer Column Title -->

                <!-- Footer Link List -->
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footerMenuLocation1',
                    'menu_class'     => 'footer__body__links',
                    'fallback_cb'    => false,
                    'add_li_class'  => 'footer__body__links__item'
                ) );
                ?>
                <!-- Footer Link List -->

            </div><!-- Footer Content Column -->

            <!-- Footer Content Column -->
            <div class="col-lg-3 col-12">

                <!-- Footer Column Title -->
                <h3 class="footer__body__col-title">
                    Hỗ trợ
                </h3><!-- Footer Column Title -->

                <!-- Footer Links List -->
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footerMenuLocation2',
                    'menu_class'     => 'footer__body__links',
                    'fallback_cb'    => false,
                    'add_li_class'  => 'footer__body__links__item'
                ) );
                ?>
                <!-- Footer Links List -->

            </div><!-- Footer Content Column -->

            <!-- Footer Content Column -->
            <div class="col-lg-3 col-12">

                <!-- Footer Column Title -->
                <h3 class="footer__body__col-title">
                    Theo dõi Yadea tại
                </h3><!-- Footer Column Title -->

                <!-- Footer Link List -->
                <ul class="footer__body__links horizontal-list">
                    <li class="footer__body__links__social">
                        <a href="<?php echo get_theme_mod('youtube_page', 'https://www.youtube.com/'); ?>" target="_blank" class="social__link-youtube">
                            <img src="<?php echo get_theme_file_uri('assets/img/icons/youtube.png'); ?>">
                        </a>
                    </li>
                    <li class="footer__body__links__social">
                        <a href="<?php echo get_theme_mod('facebook_page', 'https://www.facebook.com/'); ?>" target="_blank" class="social__link-facebook">
                            <img src="<?php echo get_theme_file_uri('assets/img/icons/facebook.png'); ?>">
                        </a>
                    </li>
                </ul><!-- Footer Link List -->

            </div><!-- Footer Content Column -->

            <!-- Footer Content Column -->
            <div class="col-lg-3 col-12">

                <!-- Footer Column Title -->
                <h3 class="footer__body__col-title">
                    Liên hệ
                </h3><!-- Footer Column Title -->

                <!-- Footer Link List -->
                <ul class="footer__body__links">
                    <li class="footer__body__links__item">
                        <span class="footer__phone">SDT: <?php echo get_theme_mod('footer_phone', ''); ?></span>
                    </li>
                    <li class="footer__body__links__item">
                        <span>Email:
                            <a href="mailto:<?php echo get_theme_mod('footer_email', 'tmnhat1993@gmail.com'); ?>" class="footer__email">
                                <?php echo get_theme_mod('footer_email', 'tmnhat1993@gmail.com'); ?>
                            </a>
                        </span>
                    </li>
                </ul><!-- Footer Link List -->

            </div><!-- Footer Content Column -->


        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer__bottom text-center mt-60">

        <!-- Footer Copyright -->
        <p class="footer__bottom__copyright text-center txt-gray">
            <?php echo get_theme_mod('footer_copy_right','Copyright ©2019 All Rights Reversed');?>
        </p><!-- Footer Copyright -->

    </div> <!-- Footer Bottom -->

</footer>
<!-- === FOOTER - END === -->