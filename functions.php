<?php

function addStyleSheets():void {
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'addStyleSheets');


register_nav_menus(
	array(
		'main-menu' => 'primary',
	)
);

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

register_sidebar( array(
'name' => 'Footer Sidebar 1',
'id' => 'footer-sidebar-1',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

add_theme_support( 'custom-logo' );
add_theme_support('title-tag');

function create_posttype() {
	register_post_type( 'portfolio',
	  array(
		'labels' => array(
		  'name' => __( 'Portfolio' ),
		  'singular_name' => __( 'Project' )
		),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'portfolio'),
	  )
	);
  }
  add_action( 'init', 'create_posttype' );
  
  function get_my_menu()

{

    return wp_get_nav_menu_items('main-menu');

}


add_action('rest_api_init', function () {

    register_rest_route('wp/v2', 'menu', array(
        'methods' => 'GET',
        'callback' => 'get_my_menu',
    ));

});

