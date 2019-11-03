<?php
// Print out banner depends on the priority
function getBanner($bannerPosition = 1){
    $listBannerOptions = [
        'banner_1'         => array(
            'priority'         => (int)get_theme_mod('banner_1_priority'),
            'show'             => (int)get_theme_mod('banner_1_show'),
        ),
        'banner_2'         => array(
            'priority'         => (int)get_theme_mod('banner_2_priority'),
            'show'             => (int)get_theme_mod('banner_2_show'),
        ),
        'banner_3'         => array(
            'priority'         => (int)get_theme_mod('banner_3_priority'),
            'show'             => (int)get_theme_mod('banner_3_show'),
        ),
        'series_banner_1'  => array(
            'priority'        => (int)get_theme_mod('series_banner_1_priority'),
            'show'            => (int)get_theme_mod('series_banner_1_show'),
        ),
        'oxygen_banner'    => array(
            'priority'        => (int)get_theme_mod('oxygen_banner_priority'),
            'show'            => (int)get_theme_mod('oxygen_banner_priority_show'),
        ),
    ];

    $renderList = array();
    foreach ($listBannerOptions as $key => $value){
        if( $value['priority'] === $bannerPosition AND $value['show'] == 1){
            array_push($renderList, $key);
        }
    }

    if(count($renderList) > 0){
        foreach($renderList as $value){
            switch($value){
                case 'banner_1':
                    get_template_part('template-parts/home', 'banner-1');
                    break;
                case 'banner_2':
                    get_template_part('template-parts/home', 'banner-2');
                    break;
                case 'banner_3':
                    get_template_part('template-parts/home', 'banner-3');
                    break;
                case 'series_banner_1':
                    get_template_part('template-parts/home', 'series-banner-1');
                    break;
                case 'oxygen_banner':
                    get_template_part('template-parts/home', 'oxygen-section');
                    break;
                default:
                    break;
            }
        }
    }
}

/*breadcrumbs*/
function breadcrumbs() {
    if(!is_home()) {
        echo '<section class="section light-gray-bg blog-heading" id="support-head">
                <div class="container blog-heading__title"><h2 class="title">'.get_the_title().'</h2>
                    <ul class="blog-heading__breadcrumb horizontal-list">';
        echo '<li><a href="' . home_url('/') . '">Trang chủ</a></li>';
        if(is_category()) {
            $category = get_term_by('id', get_query_var('cat'), 'category');
            echo '<li aria-current="page">'.$category->name.'</li>';
        }
        elseif (is_page()) {
            echo '<li aria-current="page">'.get_the_title().'</li>';
        }
    }
    echo '</ul></div></section>';
}
add_shortcode( 'breadcrumbs', 'breadcrumbs' );