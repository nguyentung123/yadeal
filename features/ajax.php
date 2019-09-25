<?php
/*ajax signup shop*/
add_action( 'wp_ajax_fc_signup_shop_form', 'fc_signup_shop_form' );
add_action( 'wp_ajax_nopriv_fc_signup_shop_form', 'fc_signup_shop_form' );
function fc_signup_shop_form() {
    ob_start();
    $name = check_input($_POST['name']);
    $email = check_input($_POST['email']);
    $name_company = check_input($_POST['name_company']);
    $website = check_input($_POST['website']);
    $message = check_input($_POST['message']);

    if($name && $email) {
        // Create new post Signup shop
        $post_content = 'Name: '.$name.'<br>'.'Email: '.$email.'<br>'.'Company name: '.$name_company.'<br>'.'Website: '.$website.'<br>'.'Message: '.$message;
        $my_post = array(
            'post_title' => 'Name: '.$name.' - Email: '.$email,
            'post_content' => $post_content,
            'post_status' => 'pending',
            'post_type' => 'applicant',
            'post_author' => -1
        );
        //insert post type
        wp_insert_post( $my_post );
    }
    else{
        return false;
    }
    $result = ob_get_clean();
    wp_send_json_success($result);
}

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
?>