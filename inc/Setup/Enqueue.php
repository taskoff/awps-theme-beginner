<?php

namespace Awps\Setup;

/**
 * Enqueue.
 */
class Enqueue 
{
	/**
	 * register default hooks and actions for WordPress
	 * @return
	 */
	public function register() 
	{
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
	}

	/**
	 * Notice the mix() function in wp_enqueue_...
	 * It provides the path to a versioned asset by Laravel Mix using querystring-based 
	 * cache-busting (This means, the file name won't change, but the md5. Look here for 
	 * more information: https://github.com/JeffreyWay/laravel-mix/issues/920 )
	 */
	public function enqueue_scripts() 
	{
		// Deregister the built-in version of jQuery from WordPress
		if ( ! is_customize_preview() ) {
			wp_deregister_script( 'jquery' );
		}
		// wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/assets/dist/css/font-awesome.min.css', array(), '4.7.0', 'all'); 

		// Font awesome
		wp_enqueue_script( 'wpb-fa', 'https://use.fontawesome.com/0adbb8195e.js', array(), '1.0.0', true );

		// CSS
		wp_enqueue_style( 'main', mix('css/style.css'), array(), '1.0.0', 'all' );

		// JS
		wp_enqueue_script( 'main', mix('js/app.js'), array(), '1.0.0', true );
		wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/src/scripts/my-scripts.js', array(), '1.0.0', true);


		// Activate browser-sync on development environment
		if ( getenv( 'APP_ENV' ) === 'development' ) :
			wp_enqueue_script( '__bs_script__', getenv('WP_SITEURL') . ':3000/browser-sync/browser-sync-client.js', array(), null, true );
		endif;

		// Extra
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}
