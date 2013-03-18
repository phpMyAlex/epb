<?php
/* --------------------------------------------------------------- Widgets */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Cart',
		'id' => 'cart',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );

	register_sidebar( array(
		'name' => 'Right',
		'id' => 'right',
		'before_widget' => '<div id="widget">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );
/* --------------------------------------------------------------- Widgets End */

/* --------------------------------------------------------------- Readmore */
function new_excerpt_more($more) {
       global $post;
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
/* --------------------------------------------------------------- Readmore End */

/* --------------------------------------------------------------- Thumbnails */
if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' ); 
}
/* --------------------------------------------------------------- Thumbnails End */

/* --------------------------------------------------------------- Menus */
add_theme_support( 'menus' );

function register_my_menus() {
  register_nav_menus(
    array( 'main-menu' => __( 'Main Menu' ), 'left-menu' => __( 'Left Menu' ), 'footer-menu' => __( 'Footer Menu' ) )
  );
}
add_action( 'init', 'register_my_menus' );
/* --------------------------------------------------------------- Menus End */

/* --------------------------------------------------------------- Admin Area */
add_action('admin_init', 'my_remove_menu_elements', 102);

function my_remove_menu_elements(){
	remove_submenu_page( 'themes.php', 'theme-editor.php' );
}
/* --------------------------------------------------------------- Admin Area End */

/* --------------------------------------------------------------- Media Sizes Update */
update_option('thumbnail_size_w', 150);
update_option('thumbnail_size_h', 150);
update_option('thumbnail_crop', 1);
update_option('medium_size_w', 540);
update_option('medium_size_h', 300);
update_option('medium_crop', 1);
update_option('large_size_w', 940);
update_option('large_size_h', 800);
update_option('large_crop', 1);
/* --------------------------------------------------------------- Media Sizes End */
?>