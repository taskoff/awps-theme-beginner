<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package awps
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- <script src=" https://use.fontawesome.com/0adbb8195e.js"></script> -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<div id="page" class="site" <?php echo ! is_customize_preview() ?: 'style="padding: 0 40px;"'; ?>>

	<div id="wrapper-navbar" class="nav-wrapper">
		<header id="masthead" class="site-header main-nav" role="banner">

			<?php
			if ( is_customize_preview() ) {
				echo '<div id="awps-header-control"></div>';
			}
			?>

			<div class="container pt-2 pt-sm-0 pb-2 pb-sm-0">

				<div class="row">
					<div class="col-xs-4 col-sm-4">

						<div class="site-branding white-ligi pt-sm-1 pt-md-2">
							<?php if ( ! has_custom_logo() ) { ?>
                        	<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
                        	<?php
                        	} else {
                        	    the_custom_logo();
                        	}
                        	?>
						</div><!-- .site-branding -->
						<div class="black-logo pt-sm-1 pt-md-2">
						<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url">
							<img src="<?php echo get_template_directory_uri() . '/assets/dist/images/logo-dark.png' ?>" alt="">
						</a>
						</div>

					</div><!-- .col -->

					<div class="primary-menu-wrapper col-xs-4 col-sm-4 col-md-8">
						<input type="checkbox" id="nav-toggle" class="nav-toggle" >
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<?php
							if ( has_nav_menu( 'primary' ) ) :
								wp_nav_menu(
									array(
										'theme_location' => 'primary',
										'menu_id'        => 'primary-menu',
										'walker'         => new Awps\Core\WalkerNav(),
									)
								);
							endif;
							?>
						</nav>
					</div><!-- .col -->
					<div class="col-md-0 col-xs-4 col-sm-4  nav-toggle-button-box">
						<label for="nav-toggle" class="nav-toggle-button "><i class="fa fa-bars" aria-hidden="true"></i></label>
					</div>

				</div><!-- .row -->
			</div>
			
		</header><!-- #masthead -->
	</div>
	<div id="content" class="site-content">
