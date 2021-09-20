<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package awps
 */

?>

	</div><!-- #content -->

	<?php
	if ( is_customize_preview() ) {
		echo '<div id="awps-footer-control" style="margin-top:-30px;position:absolute;"></div>';
	}
	?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container pt-10 pb-10">
			<div class="row">
				<div class="logo-wrapper col-md-4">
					<div class="site-branding">
								<?php if ( ! has_custom_logo() ) { ?>
                	        	<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
                	        	<?php
                	        	} else {
                	        	    the_custom_logo();
                	        	}
                	        	?>
							</div>
							<p>Proin gravida nibh vel velit auctor aliquet anean lorem quis. bindum auctor, nisi elite conset ipsums sagtis id duis sed odio sit.</p>
							<div class="social-icons-box row">
								<a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook pr-2" aria-hidden="true"></i></a>
								<a href="https://twitter.com/?lang=bg" target="_blank"><i class="fa fa-twitter pr-2" aria-hidden="true"></i></i></a>
								<a href="https://www.linkedin.com/feed/" target="_blank"><i class="fa fa-linkedin pr-2" aria-hidden="true"></i></i></a>
								<a href="https://www.google.com/" target="_blank"><i class="fa fa-google" aria-hidden="true"></i></i></a>

							</div>
					</div>
				<div class="posts-wrapper col-md-4">
					<h5>Blog post</h5>
					<?php 
        				$args = array('post_type' => 'post', 'post_per_page' => 3 );
        				$loop = new WP_Query( $args );

        				if( $loop->have_posts() ): ?>
        				    
        				        <?php while( $loop->have_posts() ): $loop->the_post(); ?>
									<div class="single-post-box p-1 row">
        				            	<?php get_template_part('views/content', 'footer-post'); ?>
									</div>
        				        <?php endwhile; ?>
        				  
        				<?php endif;

        				wp_reset_postdata();
            
        			?>   
				</div>
				<div class="contacts-wrapper col-md-4">
					<h5>Get In Touch</h5>
					<p><i class="fa fa-map-marker" aria-hidden="true"></i> <span class="pl-2">1220 Petersham town, Wardll St New South Wales Australia PA 6550.</span></p>			
					<p><i class="fa fa-phone" aria-hidden="true"></i><span class="pl-2">(04) 491 570 110</span></p>
					<p><i class="fa fa-envelope" aria-hidden="true"></i><span class="pl-2">contact@email.com</span></p>
				</div>
			</div>
		</div>
		<div class="bottom-footer p-2">
			<p class="text-center">© 2021, All Rights Reserved</p>
		</div>

		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
