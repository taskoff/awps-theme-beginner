<?php
/**
 *
 * This theme uses PSR-4 and OOP logic instead of procedural coding
 * Every function, hook and action is properly divided and organized inside related folders and files
 * Use the file `inc/Custom/Custom.php` to write your custom functions
 *
 * @package awps
 */

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) :
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
endif;

if ( class_exists( 'Awps\\Init' ) ) :
	Awps\Init::register_services();
endif;

add_theme_support( 'custom-logo' );

function marchos_widget_setup() {
	
	
	register_sidebar(
		array(	
			'name'	=> 'footer-widget-area',
			'id'	=> 'footer-widget-area',
			'class'	=> 'custom',
			'description' => 'Footer Widget Area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	
}
add_action('widgets_init','marchos_widget_setup');

//  ============= Correct Excerpt lenght And remove [...]===================== 

function marchos_custom_excerpt_length( $length ) {
    return 18;
}
add_filter( 'excerpt_length', 'marchos_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );