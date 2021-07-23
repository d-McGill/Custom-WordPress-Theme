<?php

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function main_css_enqueue(){
  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');
}

function wp_enqueue_js(){
wp_enqueue_script('customJS', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', 'all');
}



add_action('wp_enqueue_scripts', 'main_css_enqueue');

add_theme_support( 'custom-logo' );

function footer_widget() {

	register_sidebar( array(
		'name'          => 'Footer Text',
		'id'            => 'footer',
		'before_widget' => '<div id="footer-text">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

}

add_action( 'widgets_init', 'footer_widget');

add_theme_support( 'post-thumbnails' );

set_post_thumbnail_size( 1000, 1000, true );

function wpdocs_custom_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


function register_my_menus() {
  register_nav_menus(
    array(
      'new-menu' => __( 'footer-menu' ),
      'head-menu' => __( 'Header-menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );


/**
 * Social media share buttons
 */
function wcr_share_buttons() {
    $url = urlencode(get_the_permalink());
    $title = urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8'));
    $media = urlencode(get_the_post_thumbnail_url(get_the_ID(), 'full'));

    include( locate_template('share-template.php', false, false) );
}




?>
