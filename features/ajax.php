<?php
function check_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//create alink api oxygen
add_action('rest_api_init', 'wp_rest_api_oxygen');
function wp_rest_api_oxygen() {
    register_rest_route('oxygen', '/api/oxygen', array(
        'methods' => 'GET',
        'callback' => 'wc_rest_api_oxygen_handler',
    ));
}
function wc_rest_api_oxygen_handler() {
    $data['oxygen'] = get_theme_mod('oxygen_start',55975441);
    $data['number_trees'] = get_theme_mod('number_trees',5597676);
    return $data;
}