<?php
////variant color product
//$color_product = array(
//    'red'=>'Red',
//    'white'=>'White'
//);

//add Theme Option admin
//if( function_exists('acf_add_options_page') ) {
//    acf_add_options_page('Theme Options');
//}

//render acf
function acf_render($before,$content='',$after){
    return ($content)?$before.$content.$after:'';
}

//add class li in nav menu
function add_additional_class_on_li($classes, $item, $args) {
    if($args->add_li_class) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

//get all thong so ky thuat product
function get_all_specifications(){
    $args = array(
        'posts_per_page'   => -1,
        'orderby'          => 'date',
        'order'            => 'DESC',
        'post_type'        => 'specifications',
        'post_status'      => 'publish'
    );
    $query = new WP_Query($args);
    $all_specifications = array();
    if($query->have_posts()):while ($query->have_posts()):$query->the_post();
        $all_field = get_fields();
        $id_pro = get_field('select_product')->ID;
        $all_field_specifications = array('id' => $id_pro,'val'=>$all_field);
        array_push($all_specifications,$all_field_specifications);
    endwhile; endif;wp_reset_postdata();
    return $all_specifications;
}

function multiexplode ($delimiters,$string) {
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}

function cmp($a, $b){
    return $a->series_priority - $b->series_priority;
}

if( !function_exists ('integerToRoman') ){
    function integerToRoman($integer)
    {
        // Convert the integer into an integer (just to make sure)
        $integer = intval($integer);
        $result = '';

        // Create a lookup array that contains all of the Roman numerals.
        $lookup = array('M' => 1000,
                        'CM' => 900,
                        'D' => 500,
                        'CD' => 400,
                        'C' => 100,
                        'XC' => 90,
                        'L' => 50,
                        'XL' => 40,
                        'X' => 10,
                        'IX' => 9,
                        'V' => 5,
                        'IV' => 4,
                        'I' => 1);

        foreach($lookup as $roman => $value){
            // Determine the number of matches
            $matches = intval($integer/$value);

            // Add the same number of characters to the string
            $result .= str_repeat($roman,$matches);

            // Set the integer to be the remainder of the integer and the value
            $integer = $integer % $value;
        }

        // The Roman numeral should be built, return it
        return $result;
    }
}

?>