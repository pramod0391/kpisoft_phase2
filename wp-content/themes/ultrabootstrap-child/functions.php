<?php
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);
function enqueue_child_theme_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
  wp_enqueue_style( 'Nunito-font', 'https://fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap');
  wp_enqueue_style( 'slick-min', get_stylesheet_directory_uri().'/css/slick.min.css');
  wp_enqueue_style( 'slick-theme-min', get_stylesheet_directory_uri().'/css/slick-theme-min.css');
  wp_enqueue_style( 'zen1', get_stylesheet_directory_uri().'/css/zen1.css' );
  wp_enqueue_style( 'zen2', get_stylesheet_directory_uri().'/css/zen2.css' );
  wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri().'/css/custom-styles.css' );
  wp_enqueue_style( 'test-style', get_stylesheet_directory_uri().'/css/p_styles.css' );
  wp_enqueue_script( 'slickminjs', get_stylesheet_directory_uri() . '/js/slick.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/custom-js.js', array(), '1.0.0', true );
}

// wp_register_script( 'custom-js', get_stylesheet_directory_uri() . '/js/custom-js.js', array(), '1.0.0', true );
// wp_enqueue_script( 'custom-js' );
// $translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
// //after wp_enqueue_script
// wp_localize_script( 'custom-js', 'child_dir', $translation_array );


//add SVG to allowed file uploads
function add_file_types_to_uploads($file_types){

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );

    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

function footer_copy() {    
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Copy right', 'ultrabootstrap' ),
    'id'            => 'footer-copy_rights',
    'description'   => '',
    'before_widget' => '<div class="copy_rights text-center">',
    'after_widget'  => '</div>',    
  ) );
}
add_action( 'widgets_init', 'footer_copy',5 );

function footer_logo() {    
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Logo', 'ultrabootstrap' ),
    'id'            => 'footer-logo',
    'description'   => '',
    'before_widget' => '<div class="footer_logo">',
    'after_widget'  => '</div>',    
  ) );
}
add_action( 'widgets_init', 'footer_logo',6 );

$role_object = get_role( 'editor' );

$role_object->add_cap( 'edit_theme_options' );

function CaseStudy() {
 
   $labelseve = array(
        'name'                => _x( 'CaseStudy', 'Post Type General Name', 'ultrabootstrap' ),
        'singular_name'       => _x( 'Casestudy', 'Post Type Singular Name', 'ultrabootstrap' ),
        'menu_name'           => __( 'CaseStudy', 'ultrabootstrap' ),
        'parent_item_colon'   => __( 'Parent Casestudy', 'ultrabootstrap' ),
        'all_items'           => __( 'All Casestudies', 'ultrabootstrap' ),
        'view_item'           => __( 'View Casestudy', 'ultrabootstrap' ),
        'add_new_item'        => __( 'Add New Casestudy', 'ultrabootstrap' ),
        'add_new'             => __( 'Add New', 'ultrabootstrap' ),
        'edit_item'           => __( 'Edit Casestudy', 'ultrabootstrap' ),
        'update_item'         => __( 'Update Casestudy', 'ultrabootstrap' ),
        'search_items'        => __( 'Search Casestudy', 'ultrabootstrap' ),
        'not_found'           => __( 'Not Found', 'ultrabootstrap' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'ultrabootstrap' ),
    );
     
    $argseve = array(
        'label'               => __( 'casestudy', 'ultrabootstrap' ),
        'description'         => __( 'Casestudy', 'ultrabootstrap' ),
        'labels'              => $labelseve,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'category' ),
        'hierarchical'        => false,
        'rewrite'             => array('slug' => 'success-stories'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'casestudy', $argseve );
}
add_action( 'init', 'CaseStudy',0 );



// add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);
// function my_wp_nav_menu_objects( $items, $args ) {  
//   $menu = wp_get_nav_menu_object($args->menu);  
  
//   // modify primary only
//   if( $args->theme_location == 'primary' ) {    
//     // vars
//     $black_band_text = get_field('text_on_black_band', $menu);
//     $black_band_link = get_field('text_on_black_band_link', $menu);    
    
//      if( $black_band_text ) {
//         $items .= '<div class="top_header_text">';
//         $items .= $black_band_text;
//         $items .= '</div>';
//      }    

//   }  
//   // return
//   return $items;
  
// }


// add_filter('wp_nav_menu_items', 'my_wp_nav_menu_items', 10, 2);
// function my_wp_nav_menu_items( $items, $args ) {  
//   // get menu
//   $menu = wp_get_nav_menu_object($args->menu);  
  
//   // modify primary only
//   if( $args->theme_location == 'primary' ) {    
//     // vars
//     $logo = get_field('text_on_black_band', $menu);   
    
//     // prepend logo
//     $html_logo = '<div class="top_header_text">'.$logo.'</div>'; 
  
//     // append html
//     $items = $html_logo . $items;
    
//   }
  
  
//   // return
//   return $items;
  
// }



function my_menu_notitle( $menu ){
  return $menu = preg_replace('/ title=\"(.*?)\"/', '', $menu );

}
add_filter( 'wp_nav_menu', 'my_menu_notitle' );
add_filter( 'wp_page_menu', 'my_menu_notitle' );
add_filter( 'wp_list_categories', 'my_menu_notitle' );

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/* Remove feed links */
remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'index_rel_link' ); // index link
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version
/* Remove feed links */

function remove_json_api () {

    // Remove the REST API lines from the HTML Header
    remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

    // Remove the REST API endpoint.
    remove_action( 'rest_api_init', 'wp_oembed_register_route' );

    // Turn off oEmbed auto discovery.
    add_filter( 'embed_oembed_discover', '__return_false' );

    // Don't filter oEmbed results.
    remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );

    // Remove oEmbed discovery links.
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

    // Remove oEmbed-specific JavaScript from the front-end and back-end.
    remove_action( 'wp_head', 'wp_oembed_add_host_js' );

   // Remove all embeds rewrite rules.
   //add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );

}
add_action( 'after_setup_theme', 'remove_json_api' );

/* To Disable Yoast SEO Schema JSON-LD Start */

function bybe_remove_yoast_json($data){
    $data = array();
    return $data;
  }
add_filter('wpseo_json_ld_output', 'bybe_remove_yoast_json', 10, 1);

/* To Disable Yoast SEO Schema JSON-LD End */


function custom_posts(){ 
  /* Custom Post News Start */
    $labels = array(
        'name'                => _x( 'News', 'Post Type General Name', 'ultrabootstrap' ),
        'singular_name'       => _x( 'News', 'Post Type Singular Name', 'ultrabootstrap' ),
        'menu_name'           => __( 'News', 'ultrabootstrap' ),
        'parent_item_colon'   => __( 'Parent News', 'ultrabootstrap' ),
        'all_items'           => __( 'All News', 'ultrabootstrap' ),
        'view_item'           => __( 'View News', 'ultrabootstrap' ),
        'add_new_item'        => __( 'Add New News', 'ultrabootstrap' ),
        'add_new'             => __( 'Add New', 'ultrabootstrap' ),
        'edit_item'           => __( 'Edit News', 'ultrabootstrap' ),
        'update_item'         => __( 'Update News', 'ultrabootstrap' ),
        'search_items'        => __( 'Search News', 'ultrabootstrap' ),
        'not_found'           => __( 'Not Found', 'ultrabootstrap' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'ultrabootstrap' ),
    );
     
    $args = array(
        'label'               => __( 'news', 'ultrabootstrap' ),
        'description'         => __( 'News', 'ultrabootstrap' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        //'taxonomies'          => array( 'course_category' ),
        'hierarchical'        => false,
        'rewrite'             => array('slug' => 'news'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'news', $args );
  /* Custom Post News End */

  /* Custom Post Press Releases Start */
    $labels = array(
        'name'                => _x( 'PressReleases', 'Post Type General Name', 'ultrabootstrap' ),
        'singular_name'       => _x( 'PressRelease', 'Post Type Singular Name', 'ultrabootstrap' ),
        'menu_name'           => __( 'PressReleases', 'ultrabootstrap' ),
        'parent_item_colon'   => __( 'Parent PressRelease', 'ultrabootstrap' ),
        'all_items'           => __( 'All PressRelease', 'ultrabootstrap' ),
        'view_item'           => __( 'View PressRelease', 'ultrabootstrap' ),
        'add_new_item'        => __( 'Add New PressRelease', 'ultrabootstrap' ),
        'add_new'             => __( 'Add PressRelease', 'ultrabootstrap' ),
        'edit_item'           => __( 'Edit PressRelease', 'ultrabootstrap' ),
        'update_item'         => __( 'Update PressRelease', 'ultrabootstrap' ),
        'search_items'        => __( 'Search PressRelease', 'ultrabootstrap' ),
        'not_found'           => __( 'Not Found', 'ultrabootstrap' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'ultrabootstrap' ),
    );
     
    $args = array(
        'label'               => __( 'pressrelease', 'ultrabootstrap' ),
        'description'         => __( 'PressRelease', 'ultrabootstrap' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        //'taxonomies'          => array( 'course_category' ),
        'hierarchical'        => false,
        'rewrite'             => array('slug' => 'press-release'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'pressrelease', $args );
  /* Custom Post Press Releases End */

  /* Custom Post Events Start */
    $labels = array(
        'name'                => _x( 'Events', 'Post Type General Name', 'ultrabootstrap' ),
        'singular_name'       => _x( 'Event', 'Post Type Singular Name', 'ultrabootstrap' ),
        'menu_name'           => __( 'Events', 'ultrabootstrap' ),
        'parent_item_colon'   => __( 'Parent Event', 'ultrabootstrap' ),
        'all_items'           => __( 'All Event', 'ultrabootstrap' ),
        'view_item'           => __( 'View Event', 'ultrabootstrap' ),
        'add_new_item'        => __( 'Add New Event', 'ultrabootstrap' ),
        'add_new'             => __( 'Add Event', 'ultrabootstrap' ),
        'edit_item'           => __( 'Edit Event', 'ultrabootstrap' ),
        'update_item'         => __( 'Update Event', 'ultrabootstrap' ),
        'search_items'        => __( 'Search Event', 'ultrabootstrap' ),
        'not_found'           => __( 'Not Found', 'ultrabootstrap' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'ultrabootstrap' ),
    );
     
    $args = array(
        'label'               => __( 'events', 'ultrabootstrap' ),
        'description'         => __( 'Events', 'ultrabootstrap' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'category' ),
        'hierarchical'        => false,
        'rewrite'             => array('slug' => 'event'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'events', $args );
  /* Custom Post Events End */

  /* Custom Post Webinar Start */
    $webinars_labels = array(
        'name'                => _x( 'Webinars', 'Post Type General Name', 'ultrabootstrap' ),
        'singular_name'       => _x( 'Webinar', 'Post Type Singular Name', 'ultrabootstrap' ),
        'menu_name'           => __( 'Webinars', 'ultrabootstrap' ),
        'parent_item_colon'   => __( 'Parent Webinar', 'ultrabootstrap' ),
        'all_items'           => __( 'All Webinar', 'ultrabootstrap' ),
        'view_item'           => __( 'View Webinar', 'ultrabootstrap' ),
        'add_new_item'        => __( 'Add New Webinar', 'ultrabootstrap' ),
        'add_new'             => __( 'Add Webinar', 'ultrabootstrap' ),
        'edit_item'           => __( 'Edit Webinar', 'ultrabootstrap' ),
        'update_item'         => __( 'Update Webinar', 'ultrabootstrap' ),
        'search_items'        => __( 'Search Webinar', 'ultrabootstrap' ),
        'not_found'           => __( 'Not Found', 'ultrabootstrap' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'ultrabootstrap' ),
    );
     
    $webinars_args = array(
        'label'               => __( 'webinars', 'ultrabootstrap' ),
        'description'         => __( 'Webinars', 'ultrabootstrap' ),
        'labels'              => $webinars_labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),        
        'taxonomies'          => array( 'category' ),
        'hierarchical'        => false,
        'rewrite'             => array('slug' => 'webinar'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'webinars', $webinars_args );  
   
    // add_action( 'init', 'webinar_categroy', 0 ); 
    // function webinar_categroy() {     
    //   $webinar_cat_labels = array(
    //     'name' => _x( 'Categories', 'taxonomy general name' ),
    //     'singular_name' => _x( 'Category', 'taxonomy singular name' ),
    //     'search_items' =>  __( 'Search Category' ),
    //     'all_items' => __( 'All Category' ),
    //     'parent_item' => __( 'Parent Category' ),
    //     'parent_item_colon' => __( 'Parent Category:' ),
    //     'edit_item' => __( 'Edit Category' ), 
    //     'update_item' => __( 'Update Category' ),
    //     'add_new_item' => __( 'Add New Category' ),
    //     'new_item_name' => __( 'New Category Name' ),
    //     'menu_name' => __( 'Categories' ),
    //   ); 
    //   register_taxonomy('categories',array('webinars'), array(
    //     'hierarchical' => true,
    //     'labels' => $webinar_cat_labels,
    //     'show_ui' => true,
    //     'show_admin_column' => true,
    //     'query_var' => true,
    //     'rewrite' => array( 'slug' => 'webinar-categroy' ),
    //   ));
    // }


  /* Custom Post Webinar End */

  /* Custom Post Whitepaper Start */
    $labels = array(
        'name'                => _x( 'Whitepapers', 'Post Type General Name', 'ultrabootstrap' ),
        'singular_name'       => _x( 'Whitepaper', 'Post Type Singular Name', 'ultrabootstrap' ),
        'menu_name'           => __( 'Whitepapers', 'ultrabootstrap' ),
        'parent_item_colon'   => __( 'Parent Whitepaper', 'ultrabootstrap' ),
        'all_items'           => __( 'All Whitepaper', 'ultrabootstrap' ),
        'view_item'           => __( 'View Whitepaper', 'ultrabootstrap' ),
        'add_new_item'        => __( 'Add New Whitepaper', 'ultrabootstrap' ),
        'add_new'             => __( 'Add Whitepaper', 'ultrabootstrap' ),
        'edit_item'           => __( 'Edit Whitepaper', 'ultrabootstrap' ),
        'update_item'         => __( 'Update Whitepaper', 'ultrabootstrap' ),
        'search_items'        => __( 'Search Whitepaper', 'ultrabootstrap' ),
        'not_found'           => __( 'Not Found', 'ultrabootstrap' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'ultrabootstrap' ),
    );
     
    $args = array(
        'label'               => __( 'whitepapers', 'ultrabootstrap' ),
        'description'         => __( 'Whitepapers', 'ultrabootstrap' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'whitepapers_category','category' ),
        'hierarchical'        => false,
        'rewrite'             => array('slug' => 'whitepaper'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'whitepapers', $args );
  /* Custom Post Whitepaper End */

  /* Custom Post Ebooks Start */
    $labels = array(
        'name'                => _x( 'Ebooks', 'Post Type General Name', 'ultrabootstrap' ),
        'singular_name'       => _x( 'Ebook', 'Post Type Singular Name', 'ultrabootstrap' ),
        'menu_name'           => __( 'Ebooks', 'ultrabootstrap' ),
        'parent_item_colon'   => __( 'Parent Ebook', 'ultrabootstrap' ),
        'all_items'           => __( 'All Ebooks', 'ultrabootstrap' ),
        'view_item'           => __( 'View Ebook', 'ultrabootstrap' ),
        'add_new_item'        => __( 'Add New Ebook', 'ultrabootstrap' ),
        'add_new'             => __( 'Add Ebook', 'ultrabootstrap' ),
        'edit_item'           => __( 'Edit Ebook', 'ultrabootstrap' ),
        'update_item'         => __( 'Update Ebook', 'ultrabootstrap' ),
        'search_items'        => __( 'Search Ebook', 'ultrabootstrap' ),
        'not_found'           => __( 'Not Found', 'ultrabootstrap' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'ultrabootstrap' ),
    );
     
    $args = array(
        'label'               => __( 'ebooks', 'ultrabootstrap' ),
        'description'         => __( 'Ebooks', 'ultrabootstrap' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'ebooks_category','category' ),
        'hierarchical'        => false,
        'rewrite'             => array('slug' => 'ebook'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'ebooks', $args );
  /* Custom Post Ebooks End */

  /* Custom Post Testimonials Start */
    $labels = array(
        'name'                => _x( 'Testimonials', 'Post Type General Name', 'ultrabootstrap' ),
        'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'ultrabootstrap' ),
        'menu_name'           => __( 'Testimonials', 'ultrabootstrap' ),
        'parent_item_colon'   => __( 'Parent Testimonial', 'ultrabootstrap' ),
        'all_items'           => __( 'All Testimonials', 'ultrabootstrap' ),
        'view_item'           => __( 'View Testimonial', 'ultrabootstrap' ),
        'add_new_item'        => __( 'Add New Testimonial', 'ultrabootstrap' ),
        'add_new'             => __( 'Add Testimonial', 'ultrabootstrap' ),
        'edit_item'           => __( 'Edit Testimonial', 'ultrabootstrap' ),
        'update_item'         => __( 'Update Testimonial', 'ultrabootstrap' ),
        'search_items'        => __( 'Search Testimonial', 'ultrabootstrap' ),
        'not_found'           => __( 'Not Found', 'ultrabootstrap' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'ultrabootstrap' ),
    );
     
    $args = array(
        'label'               => __( 'testimonial', 'ultrabootstrap' ),
        'description'         => __( 'Testimonials', 'ultrabootstrap' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        //'taxonomies'          => array( 'course_category' ),
        'hierarchical'        => false,
        'rewrite'             => array('slug' => 'testimonial'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'testimonial', $args );
  /* Custom Post Testimonials End */
}
add_action('init', 'custom_posts');

function custom_posts_per_page( $query ) {

if ( $query->is_archive() ) {
    set_query_var('posts_per_page', 5);
}
}
add_action( 'pre_get_posts', 'custom_posts_per_page' );