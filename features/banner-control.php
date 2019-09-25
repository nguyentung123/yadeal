<?php
/* ================================
 * Banner Control Based On Indexing
 * ================================ */
function show_banner($index){
    $banner_options = get_option('yadea_banners_option');

    if($banner_options['banner_1']['order'] == $index && $banner_options['banner_1']['show']){
        get_template_part( 'template-parts/yadea', 'banner-1' );
    } else {
        if($banner_options['banner_2']['order'] == $index && $banner_options['banner_2']['show']){
            get_template_part( 'template-parts/yadea', 'banner-2' );
        } else {
            if($banner_options['banner_3']['order'] == $index && $banner_options['banner_3']['show']){
                get_template_part( 'template-parts/yadea', 'banner-3' );
            }
        }
    }
}