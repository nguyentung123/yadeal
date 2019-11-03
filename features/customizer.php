<?php
/**
 * Setup Theme Customizer
 */

add_action('customize_register', 'yadea_customizer_setting');
function yadea_customizer_setting($wp_customize){
    //<editor-fold desc="Footer">
    // Create Social Links Section
    $wp_customize->add_section('company_contact', array(
      'title'    => 'Thông tin công ty',
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
       'section'  => 'company_contact',
       'settings' => 'facebook_page',
        'type' => 'url',
    ));

    /* ===== Youtube ===== */
    $wp_customize->add_setting('youtube_page', array(
        'default'     => 'https://www.youtube.com/channel/UCwNqzgb1QFon3ZP2jbI71Tg?view_as=subscriber',
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control('youtube_page', array(
        'label'    => 'Youtube Page',
        'section'  => 'company_contact',
        'settings' => 'youtube_page',
        'type'     => 'url',
    ));

    /* ===== Phone Number ===== */
    $wp_customize->add_setting('footer_phone', array(
        'default'     => 'SDT: 0909310376',
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control('footer_phone', array(
        'label'    => 'Phone Number',
        'section'  => 'company_contact',
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
        'section'  => 'company_contact',
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
        'section'  => 'company_contact',
        'settings' => 'footer_copy_right',
        'type'     => 'text',
    ));

    /* ===== Customer Service Phone Number ===== */
    $wp_customize->add_setting('contact_detail_phone', array(
        'default'     => 'Chăm sóc khách hàng: 0123456789',
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control('contact_detail_phone', array(
        'label'    => 'Điện thoại liên hệ',
        'section'  => 'company_contact',
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
        'section'  => 'company_contact',
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
        'section'  => 'company_contact',
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
        'label'    => 'Start Oxygen',
        'section'  => 'oxygen',
        'settings' => 'oxygen_start',
        'type'     => 'number'
    ));

    /* ===== number trees ===== */
    $wp_customize->add_setting('oxygen_end', array(
        'default'     => 5597676,
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control('oxygen_end', array(
        'label'    => 'End Oxygen',
        'section'  => 'oxygen',
        'settings' => 'oxygen_end',
        'type'     => 'number'
    ));

    /* ===== Banner Management ===== */
    $wp_customize->add_section('banner_management', array(
        'title'    => 'Quản lý Banner',
        'priority' => 36
    ));

    // Banner 1 Priority
    $wp_customize->add_setting('banner_1_priority', array(
        'default'     => 4,
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control('banner_1_priority', array(
        'label'        => 'Độ ưu tiên Banner 1',
        'description'  => 'Độ ưu tiên nhỏ sẽ xuất hiện trước',
        'section'      => 'banner_management',
        'settings'     => 'banner_1_priority',
        'type'         => 'number',
        'input_attrs'  => array(
            'min' => 1,
            'max' => 5
        ),
    ));

    // Banner 1 Show / Hide
    $wp_customize->add_setting('banner_1_show', array(
        'default'     => 1,
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control('banner_1_show', array(
        'label'        => 'Ẩn / Hiện banner',
        'section'      => 'banner_management',
        'settings'     => 'banner_1_show',
        'type'         => 'checkbox'
    ));

    // Banner 2 Priority
    $wp_customize->add_setting('banner_2_priority', array(
        'default'     => 3,
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control('banner_2_priority', array(
        'label'        => 'Độ ưu tiên Banner 2',
        'description'  => 'Độ ưu tiên nhỏ sẽ xuất hiện trước',
        'section'      => 'banner_management',
        'settings'     => 'banner_2_priority',
        'type'         => 'number',
        'input_attrs'  => array(
            'min' => 1,
            'max' => 5
        ),
    ));

    // Banner 2 Show / Hide
    $wp_customize->add_setting('banner_2_show', array(
        'default'     => 1,
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control('banner_2_show', array(
        'label'        => 'Ẩn / Hiện banner',
        'section'      => 'banner_management',
        'settings'     => 'banner_2_show',
        'type'         => 'checkbox'
    ));

    // Banner 3 Priority
    $wp_customize->add_setting('banner_3_priority', array(
        'default'     => 1,
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control('banner_3_priority', array(
        'label'        => 'Độ ưu tiên Banner 3',
        'description'  => 'Độ ưu tiên nhỏ sẽ xuất hiện trước',
        'section'      => 'banner_management',
        'settings'     => 'banner_3_priority',
        'type'         => 'number',
        'input_attrs'  => array(
            'min' => 1,
            'max' => 5
        ),
    ));

    // Banner 3 Show / Hide
    $wp_customize->add_setting('banner_3_show', array(
        'default'     => 1,
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control('banner_3_show', array(
        'label'        => 'Ẩn / Hiện banner',
        'section'      => 'banner_management',
        'settings'     => 'banner_3_show',
        'type'         => 'checkbox'
    ));

    // Series Banner 1 Priority
    $wp_customize->add_setting('series_banner_1_priority', array(
        'default'     => 1,
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control('series_banner_1_priority', array(
        'label'        => 'Độ ưu tiên Series Banner 1',
        'description'  => 'Độ ưu tiên nhỏ sẽ xuất hiện trước',
        'section'      => 'banner_management',
        'settings'     => 'series_banner_1_priority',
        'type'         => 'number',
        'input_attrs'  => array(
            'min' => 1,
            'max' => 5
        ),

    ));

    // Series Banner 1 Show / Hide
    $wp_customize->add_setting('series_banner_1_show', array(
        'default'     => 1,
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control('series_banner_1_show', array(
        'label'        => 'Ẩn / Hiện banner',
        'section'      => 'banner_management',
        'settings'     => 'series_banner_1_show',
        'type'         => 'checkbox'
    ));

    // Oxygen Banner Priority
    $wp_customize->add_setting('oxygen_banner_priority', array(
        'default'     => 5,
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control('oxygen_banner_priority', array(
        'label'        => 'Độ ưu tiên Section Oxygen',
        'description'  => 'Độ ưu tiên nhỏ sẽ xuất hiện trước',
        'section'      => 'banner_management',
        'settings'     => 'oxygen_banner_priority',
        'type'         => 'number',
        'input_attrs'  => array(
            'min' => 1,
            'max' => 5
        ),
    ));

    // Oxygen Banner Show / Hide
    $wp_customize->add_setting('oxygen_banner_priority_show', array(
        'default'     => 1,
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control('oxygen_banner_priority_show', array(
        'label'        => 'Ẩn / Hiện banner',
        'section'      => 'banner_management',
        'settings'     => 'oxygen_banner_priority_show',
        'type'         => 'checkbox',
    ));
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