<?php
/* ================================
 * Enqueue Scripts And Style
 * ================================ */
function yadea_theme_scripts()
{
    /* ========== STYLESHEET ========== */
    // Bootstrap Stylesheet
    wp_enqueue_style('boostrap',  get_theme_file_uri('assets/css/vendors/bootstrap.min.css'));

    // Slick Carousel Stylesheet
    wp_enqueue_style('slick', get_theme_file_uri('assets/css/vendors/slick.css'));

    // Fonts Provided By Google
    wp_enqueue_style('font', 'https://fonts.googleapis.com/css?family=Encode+Sans+Semi+Expanded:400,600,700,800,900&amp;subset=vietnamese');

    // Main Stylesheet
    if (WP_DEV_MODE) {
        wp_enqueue_style('yadea-main-stylesheet', get_theme_file_uri('assets/css/styles.css'), array(), microtime());
    } else {
        wp_enqueue_style('yadea-main-stylesheet', get_theme_file_uri('assets/css/dist/styles.min.css'), array(), false);
    }


    // Flipclock
    wp_enqueue_style('yadea-flipclock-stylesheet', get_theme_file_uri('assets/css/flipclock.css'));
    /* ========== STYLESHEET - END ========== */


    /* ========== SCRIPTS ========== */
    // jQuery
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_theme_file_uri('assets/js/jquery-3.3.1.min.js'));

    // flipclock
    wp_enqueue_script('yadea_flipclock', get_theme_file_uri('assets/js/dist/flipclock-min.js'), array('jquery'), '1.0', true);

    // Slick
    wp_enqueue_script('slick_carousel', get_theme_file_uri('assets/js/slick.min.js'), array('jquery'), '1.0', true);

    // Main Script
    if (WP_DEV_MODE) {
        wp_enqueue_script('yadea_main_script', get_theme_file_uri('assets/js/scripts-bundled.js'), array('jquery'), microtime(), true);
    } else {
        wp_enqueue_script('yadea_main_script', get_theme_file_uri('assets/js/dist/scripts-bundled-min.js'), array('jquery'), null, true);
    }

    wp_localize_script('yadea_main_script', 'yadeaVietnamVariables', array(
        'root_url'      => get_site_url(),
        'assets_url'    => get_theme_file_uri() . '/assets/',
    ));
    /* ========== SCRIPTS - END ========== */
}
add_action('wp_enqueue_scripts', 'yadea_theme_scripts');