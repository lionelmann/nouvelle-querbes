<?php

//Include cuztom helper files https://github.com/Gizburdt/Wordpress-Cuztom-Helper ver: 2.9.1
include('includes/wp-cuztom-helper/cuztom.php');

// Register Menus
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      //'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Clean up menu ids and classes but leave current-menu-item
add_filter('nav_menu_css_class', 'remove_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'remove_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'remove_css_attributes_filter', 100, 1);
function remove_css_attributes_filter($var) {
	return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}

//Featured image support
add_theme_support( 'post-thumbnails' );
add_image_size( 'banner', 1400, 800, true );

//Remove width and height attributes from inserted images
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

//Add class to next and previous post_link
function add_class_next_post_link($html){
    $html = str_replace('<a','<a class="older"',$html);
    return $html;
}
add_filter('next_post_link','add_class_next_post_link',10,1);
function add_class_previous_post_link($html){
    $html = str_replace('<a','<a class="newer"',$html);
    return $html;
}
add_filter('previous_post_link','add_class_previous_post_link',10,1);

//Pagination
function pagination() {
    global $wp_query;
    $big = 999999999; // need an unlikely integer

    echo paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages
    ) );
}

// Remove jQuery Migrate
add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );

function dequeue_jquery_migrate( &$scripts){
  if(!is_admin()){
    $scripts->remove( 'jquery');
    $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
  }
}

//Enqueue scripts - Reference: http://codex.wordpress.org/Function_Reference/wp_enqueue_script
function my_scripts() {
    wp_deregister_script( 'jquery' ); //deregister and re-enqueue to load in footer
    wp_enqueue_script( 'jquery','/wp-includes/js/jquery/jquery.js',false,'1.10.2',true );  
    wp_register_script('app', get_template_directory_uri() . '/js/app.js', array('jquery'), '1.0', true);
    wp_enqueue_script('app');
}
add_action('wp_enqueue_scripts', 'my_scripts');

//Enqueue styles
function my_styles() {
        wp_register_style('style', get_template_directory_uri() . '/style.css', '1.2');
        wp_enqueue_style( 'style' );
}
add_action('wp_enqueue_scripts', 'my_styles');