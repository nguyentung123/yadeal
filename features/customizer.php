<?php
/**
 * Setup Theme Customizer
 */

add_action('customize_register', 'yadea_customizer_setting');
function yadea_customizer_setting($wp_customize){
    //<editor-fold desc="Footer">
    // Create Social Links Section
    $wp_customize->add_section('footer', array(
      'title'    => 'Footer Contacts',
      'priority' => 30
    ));

    // Add Setting That Belong To Footer Section
    /* ===== Facebook ===== */
    $wp_customize->add_setting('facebook_page', array(
        'default'     => 'https://www.facebook.com/yadeabrand/',
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control('facebook_page', array(
       'label'    => 'Facebook Page',
       'section'  => 'footer',
       'settings' => 'facebook_page',
        'type' => 'url',
    ));

    /* ===== Youtube ===== */
    $wp_customize->add_setting('youtube_page', array(
        'default'     => 'https://www.youtube.com/channel/UC5fgsCayf-viU_GD_f9xA7g',
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control('youtube_page', array(
        'label'    => 'Youtube Page',
        'section'  => 'footer',
        'settings' => 'youtube_page',
        'type'     => 'url',
    ));

    /* ===== Instagram ===== */
    $wp_customize->add_setting('insta_page', array(
        'default'     => 'https://www.facebook.com/yadeabrand/',
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control('insta_page', array(
        'label'    => 'Instagram Page',
        'section'  => 'footer',
        'settings' => 'insta_page',
        'type'     => 'url',
    ));

    /* ===== Phone Number ===== */
    $wp_customize->add_setting('footer_phone', array(
        'default'     => 'SDT: 0909310376',
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control('footer_phone', array(
        'label'    => 'Phone Number',
        'section'  => 'footer',
        'settings' => 'footer_phone',
        'type'     => 'text',
    ));

    /* ===== Email ===== */
    $wp_customize->add_setting('footer_email', array(
        'default'     => 'abcc"gmail.com',
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control('footer_email', array(
        'label'    => 'Email',
        'section'  => 'footer',
        'settings' => 'footer_email',
        'type'     => 'email',
    ));

    /* ===== Copy right ===== */
    $wp_customize->add_setting('footer_copy_right', array(
        'default'     => 'Copyright ©2019 All Rights Reversed',
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control('footer_copy_right', array(
        'label'    => 'Copy right',
        'section'  => 'footer',
        'settings' => 'footer_copy_right',
        'type'     => 'text',
    ));
    //</editor-fold>


    //<editor-fold desc="Support Page Customizer">
    // Create Social Links Section
    $wp_customize->add_section('support-page-detail', array(
        'title'    => 'Support Page',
        'priority' => 31
    ));

    // Add Setting That Belong To Social Link Section
    /* ===== Phone Number ===== */
    $wp_customize->add_setting('contact_detail_phone', array(
        'default'     => 'Chăm sóc khách hàng: 0123456789',
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control('contact_detail_phone', array(
        'label'    => 'Điện thoại liên hệ',
        'section'  => 'support-page-detail',
        'settings' => 'contact_detail_phone',
        'type'     => 'textarea',
    ));

    /* ===== Physical Address ===== */
    $wp_customize->add_setting('contact_detail_address', array(
        'default'     => '74-76 Nguyễn Khang, P. Yên Hoà, Q, Cầu Giấy, Hà Nội',
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control('contact_detail_address', array(
        'label'    => 'Địa chỉ liên hệ',
        'section'  => 'support-page-detail',
        'settings' => 'contact_detail_address',
        'type'     => 'textarea',
    ));

    /* ===== Email ===== */
    $wp_customize->add_setting('contact_detail_email', array(
        'default'     => 'Chăm sóc khách hàng: - Phòng kinh doanh: abc@gmail.com - Phòng marketing: xyz@gmail.com',
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control('contact_detail_email', array(
        'label'    => 'Email liên hệ',
        'section'  => 'support-page-detail',
        'settings' => 'contact_detail_email',
        'type'     => 'textarea',
    ));
    //</editor-fold>



//<editor-fold desc="Support Page Customizer">
    // Create Social Links Section
    $wp_customize->add_section('oxygen', array(
        'title'    => 'Oxygen',
        'priority' => 35
    ));

    /* ===== number trees ===== */
    $wp_customize->add_setting('oxygen_start', array(
        'default'     => 55975441,
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control('oxygen_start', array(
        'label'    => 'Số oxygen',
        'section'  => 'oxygen',
        'settings' => 'oxygen_start',
        'type'     => 'number'
    ));

    /* ===== number trees ===== */
    $wp_customize->add_setting('number_trees', array(
        'default'     => 5597676,
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control('number_trees', array(
        'label'    => 'Số cây xanh tương ứng',
        'section'  => 'oxygen',
        'settings' => 'number_trees',
        'type'     => 'number'
    ));

    //add all serie check show home
    $wp_customize->add_section('show-series', array(
        'title'    => 'Show Series trang chủ',
        'priority' => 36
    ));

    $terms = get_terms( array(
        'taxonomy' => 'series',
        'hide_empty' => false,
        'orderby ' => 'id'
    ) );
    foreach ($terms as $term_item){
        /* ===== Physical Address ===== */
        $wp_customize->add_setting($term_item->slug, array(
            'default'     => '',
            'transport'   => 'refresh',
        ));
        $wp_customize->add_control($term_item->slug, array(
            'label'    => $term_item->name,
            'section'  => 'show-series',
            'settings' => $term_item->slug,
            'type'     => 'checkbox'
        ));
    }


}

// Enqueue Live Preview
add_action('customize_preview_init', 'yadea_customizer');
function yadea_customizer(){
    wp_enqueue_script('yadea_customizer',
        get_theme_file_uri('assets/js/customizer.js'),
        array('jquery', 'customizer-preview'),
        microtime(),
        true
    );
}