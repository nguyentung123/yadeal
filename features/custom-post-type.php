<?php
/* ================================
 * Theme Custom Post Register
 * ================================ */
function yadea_custom_posts_type(){
	// Banner 1 
	register_post_type('banner_1', array(
		'label'         => 'Banner 1',		
		'description'   => 'Banner 1 Locates In Top Of Homepage',
		'labels'        => array(
			'name'            => 'Banners 1',
			'singular_name'   => 'Banner 1',
			'add_new'         => 'Add New Banner',
			'add_new_item'    => 'Add New Banner',
			'edit_item'       => 'Edit Banner',
			'new_item'        => 'New Banner',
			'view_item'       => 'View Banner',
			'view_items'      => 'View Banners',
			'all_items'       => 'All Banner',
			'attributes'      => 'Banner Attributes',
		),
		'public'              => false,
		'show_ui'             => true,
		'show_in_admin_bar'   => true,
		'exclude_from_search' => true,
		'show_in_nav_menus'   => true,
		'menu_position'       => 10,
		'menu_icon'           => 'dashicons-welcome-widgets-menus',
		'supports'            => array('title', 'thumbnail', 'custom-fields'),
	));

	// Banner 2 
	register_post_type('banner_2', array(
		'label'         => 'Banner 2',		
		'description'   => 'Banner 2 Locates In Top Of Homepage',
		'labels'        => array(
			'name'            => 'Banners 2',
			'singular_name'   => 'Banner 2',
			'add_new'         => 'Add New Banner',
			'add_new_item'    => 'Add New Banner',
			'edit_item'       => 'Edit Banner',
			'new_item'        => 'New Banner',
			'view_item'       => 'View Banner',
			'view_items'      => 'View Banners',
			'all_items'       => 'All Banner',
			'attributes'      => 'Banner Attributes'
		),
		'public'              => false,
		'show_ui'             => true,
		'show_in_admin_bar'   => true,
		'exclude_from_search' => true,
		'show_in_nav_menus'   => true,
		'menu_position'       => 10,
		'menu_icon'           => 'dashicons-welcome-widgets-menus',
		'supports'            => array('title', 'thumbnail', 'custom-fields'),
	));

	// Banner 3
	register_post_type('banner_3', array(
		'label'         => 'Banner 3',		
		'description'   => 'Banner 3 Locates In Top Of Homepage',
		'labels'        => array(
			'name'            => 'Banners 3',
			'singular_name'   => 'Banner 3',
			'add_new'         => 'Add New Banner',
			'add_new_item'    => 'Add New Banner',
			'edit_item'       => 'Edit Banner',
			'new_item'        => 'New Banner',
			'view_item'       => 'View Banner',
			'view_items'      => 'View Banners',
			'all_items'       => 'All Banner',
			'attributes'      => 'Banner Attributes'
		),
		'public'              => false,
		'show_ui'             => true,
		'show_in_admin_bar'   => true,
		'exclude_from_search' => true,
		'show_in_nav_menus'   => true,
		'menu_position'       => 10,
		'menu_icon'           => 'dashicons-welcome-widgets-menus',
		'supports'            => array('title', 'thumbnail', 'custom-fields'),
	));

	// Banner Seires 1
    register_post_type('banner_series_1', array(
        'label'         => 'Banner Series 1',
        'description'   => 'Banner Series With 3 Column Layout',
        'labels'        => array(
            'name'            => 'Banner Series 1',
            'singular_name'   => 'Banner Series 1',
            'add_new'         => 'Add New Banner',
            'add_new_item'    => 'Add New Banner',
            'edit_item'       => 'Edit Banner',
            'new_item'        => 'New Banner',
            'view_item'       => 'View Banner',
            'view_items'      => 'View Banners',
            'all_items'       => 'All Banner',
            'attributes'      => 'Banner Attributes'
        ),
        'public'              => false,
        'show_ui'             => true,
        'show_in_admin_bar'   => true,
        'exclude_from_search' => true,
        'show_in_nav_menus'   => true,
        'menu_position'       => 10,
        'menu_icon'           => 'dashicons-images-alt',
        'supports'            => array('title', 'thumbnail', 'custom-fields'),
    ));

    // Product
    register_post_type('product', array(
        'label'         => 'Sản phẩm',
        'description'   => 'Yadea\'s Products',
        'labels'        => array(
            'name'            => 'Sản phẩm',
            'singular_name'   => 'Sản phẩm',
            'add_new'         => 'Thêm sản phẩm',
            'add_new_item'    => 'Thêm sản phẩm',
            'edit_item'       => 'Edit sản phẩm',
            'new_item'        => 'Sản phẩm mới',
            'view_item'       => 'Xem sản phẩm',
            'view_items'      => 'Xem tất cả sản phẩm',
            'all_items'       => 'Tất cả sản phẩm',
        ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_admin_bar'   => true,
        'exclude_from_search' => false,
        'show_in_nav_menus'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-awards',
        'rewrite'             => array('slug' => 'chi-tiet'),
        'supports'            => array('title', 'thumbnail', 'custom-fields'),
    ));

     // huong dan su dung
     register_post_type('huong-dan-su-dung', array(
        'label'         => 'Hướng dẫn sử dụng',
        'description'   => 'Hướng dẫn sử dụng',
        'labels'        => array(
            'name'            => 'Hướng dẫn sử dụng',
            'singular_name'   => 'Hướng dẫn sử dụng',
            'add_new'         => 'Add New Hướng dẫn sử dụng',
            'add_new_item'    => 'Add New Hướng dẫn sử dụng',
            'edit_item'       => 'Edit Hướng dẫn sử dụng',
            'new_item'        => 'New Hướng dẫn sử dụng',
            'view_item'       => 'View Hướng dẫn sử dụng',
            'view_items'      => 'View Hướng dẫn sử dụng',
            'all_items'       => 'All Hướng dẫn sử dụng'
        ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_admin_bar'   => true,
        'exclude_from_search' => false,
        'show_in_nav_menus'   => false,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-tag',
        'supports'            => array('title', 'thumbnail', 'custom-fields'),
    ));
}
add_action( 'init', 'yadea_custom_posts_type' );


/* ================================
 * Theme Custom Taxonomies
 * ================================ */
function yadea_custom_taxonomies(){
    $labels = [
        'name'              => _x('Series', 'taxonomy general name'),
        'singular_name'     => _x('Series', 'taxonomy singular name'),
        'search_items'      => __('Search Series'),
        'all_items'         => __('All Series'),
        'parent_item'       => __('Series'),
        'parent_item_colon' => __('Series'),
        'edit_item'         => __('Edit Series'),
        'update_item'       => __('Update Series'),
        'add_new_item'      => __('Add New Series'),
        'new_item_name'     => __('New Series Name'),
        'menu_name'         => __('Series'),
    ];
    $args = [
        'hierarchical'      => true, // make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'course'],
    ];

    register_taxonomy('series', ['product'], $args);
}

add_action( 'init', 'yadea_custom_taxonomies' );

