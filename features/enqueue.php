<?php
/* ================================
 * Enqueue Scripts And Style
 * ================================ */
function yadea_theme_scripts() {
    /* ========== STYLESHEET ========== */
	// Bootstrap Stylesheet
    wp_enqueue_style( 'boostrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );

    // Slick Carousel Stylesheet
    wp_enqueue_style( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css' );

    // Fonts Provided By Google
    wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Encode+Sans+Semi+Expanded:100,200,300,400,500,600,700,800,900&amp;subset=vietnamese' );

    // Main Stylesheet
    wp_enqueue_style( 'yadea-main-stylesheet', get_theme_file_uri('assets/css/styles.css'), array(), microtime());

    // Main Stylesheet
    wp_enqueue_style( 'yadea-wp-fix', get_theme_file_uri('assets/css/wp-yadea-custom.css'));

    // Flipclock
    wp_enqueue_style( 'yadea-flipclock-stylesheet', get_theme_file_uri('assets/css/flipclock.css'));
    /* ========== STYLESHEET - END ========== */


    /* ========== SCRIPTS ========== */
    // jQuery
    wp_enqueue_script('yadea_jquery', get_theme_file_uri('assets/js/jquery-3.3.1.min.js'));

    // flipclock
    wp_enqueue_script('yadea_flipclock', get_theme_file_uri('assets/js/flipclock.js'), array('yadea_jquery'), '1.0', true);

    // Popper
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('yadea_jquery'), '1.0', true);

    // Bootstrap
    wp_enqueue_script('bootstrap_script', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('yadea_jquery'), '1.0', true);

    // Slick
    wp_enqueue_script('slick_carousel', get_theme_file_uri('assets/js/slick.min.js'), array('yadea_jquery'), '1.0', true);

    // Main Script
    wp_enqueue_script('yadea_main_script', get_theme_file_uri('assets/js/scripts-bundled.js'), array('yadea_jquery'), microtime(), true);
    wp_localize_script('yadea_main_script', 'yadeaVietnamVariables', array(
        'root_url'      => get_site_url(),
        'assets_url'    => get_theme_file_uri() . '/assets/',
        'oxygen_start'  => get_theme_mod('oxygen_start'),
        'oxygen_end'    => get_theme_mod('oxygen_end')
    ));
    /* ========== SCRIPTS - END ========== */
}
add_action( 'wp_enqueue_scripts', 'yadea_theme_scripts' );