<?php
/**
 * Template Name: Home Page Template
 *
 
 */

get_header(); ?>

<main class="home-page-main">
    <div class="hero-section pt-20 pt-md-10 pb-md-10" style="background-image: url( <?php echo get_template_directory_uri() . '/assets/dist/images/slide-1.1.jpg' ?>)">
        <div class="container">
            <h1 class="site-title text-center">Welcome To Legal Firm</h1>
            <p class="under-title-text h4 mt-md-2 mb-6">This should be used to tell a story and let your users know a little more about your service.</p>
            <div class="btn-wrapper text-center">
                <a href="#" class="btn">Free Consultation</a>
            </div>
        </div>
    </div>
    <div class="counters-wrapper container pb-5 pt-5 ">
        <div class="row justify-around">
            <div class="count-box mb-sm-2 mb-md-0 pl-sm-2">
                <div class="icon-box">
                <i class="fa fa-gavel" aria-hidden="true"></i>
                </div>
                <div class="counter-box">
                <div id="counter-value-1" class="digits">100</div>
                    <p class="text">Cases Won</p>
                </div>        
            </div>
            <div class="count-box mb-sm-2 mb-md-0 pl-sm-2">
                <div class="icon-box row">
                <i class="fa fa-book" aria-hidden="true"></i>
                </div>
                <div class="counter-box  ">
                <div id="counter-value-2" class="digits">100</div>
                    <p class="text">Skilled Lawyers</p>
                </div>        
            </div>
            <div class="count-box mb-sm-2 mb-md-0 pl-sm-2">
                <div class="icon-box row">
                <i class="fa fa-balance-scale" aria-hidden="true"></i>
                </div>
                <div class="counter-box">
                <div id="counter-value-3" class="digits">100</div>
                    <p class="text">Happy Clients</p>
                </div>        
            </div>
            <div class="count-box pl-sm-2">
                <div class="icon-box row">
                <i class="fa fa-trophy" aria-hidden="true"></i>
                </div>
                <div class="counter-box">
                <div id="counter-value-4" class="digits">100</div>
                    <p class="text">Great Rewards</p>
                </div>        
            </div>
        </div>
    </div>
    <section id="about-section-1" class="about-section pt-10">
        <div class="container">
            <div class="row">
                <div class="person-img-wrapper col-xs-12 col-md-6">
                    <img src="<?php echo get_template_directory_uri() . '/assets/dist/images/team-4-1.png' ?>" alt="">
                </div>
               
                <div class="about-us-wrapper up-effect col-xs-12 col-md-6 mt-7">
                    <h2 class="about-us-title">About Our Firm</h2>
                    <div class="line-divider"></div>
                    <p class="first-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sede do eiusmod tempor incididunt ut labore dolore magna aliqa Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    <p>Euis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupida.</p>
                    <img src="<?php echo get_template_directory_uri() . '/assets/dist/images/signture.png' ?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="practice-section-1" class="practice-section pt-10 pb-10">
        <div class="container">
            <div class="row justify-center">
                <div class="practice-section-header up-effect col-md-6">
                    <h2 class="practice-title text-center ">
                        Practice Areas
                    </h2>
                    <p class="head-description text-center mt-2 mb-3">Lorem ipsum dolor amet, consectetur adipisice elitesede eiusmod tempor incidide labeore dolore magna.</p>
                    <div class="line-divider"></div>
                </div>
            </div>
            <div class="row justify-between pt-1">
                <div class="col-md-4 single-feat-box  mt-4">
                    <div class="icon-box pt-1 pr-1">
                    <i class="fa fa-gavel" aria-hidden="true"></i>
                    </div>
                    <div class="feature-box">
                        <h3 class="feture-title h5">Criminal Law</h3>
                        <p class="feature-text">Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
                    </div>        
                
                </div>
                <div class="col-md-4 single-feat-box mt-4">
                    <div class="icon-box pt-1 pr-1">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    </div>
                    <div class="feature-box">
                        <h3 class="feture-title h5">Real Estate Law</h3>
                        <p class="feature-text">Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
                    </div>        
                
                </div>
                <div class="col-md-4 single-feat-box mt-4">
                    <div class="icon-box pt-1 pr-1">
                    <i class="fa fa-balance-scale" aria-hidden="true"></i>
                    </div>
                    <div class="feature-box">
                        <h3 class="feture-title h5">Family Law</h3>
                        <p class="feature-text">Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
                    </div>        
                
                </div>
                <div class="col-md-4 single-feat-box mt-4">
                    <div class="icon-box pt-1 pr-1 ">
                    <i class="fa fa-balance-scale" aria-hidden="true"></i>
                    </div>
                    <div class="feature-box">
                        <h3 class="feture-title h5">International Law</h3>
                        <p class="feature-text">Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
                    </div>        
                
                </div>
                <div class="col-md-4 single-feat-box mt-4">
                    <div class="icon-box pt-1 pr-1">
                    <i class="fa fa-gavel" aria-hidden="true"></i>
                    </div>
                    <div class="feature-box">
                        <h3 class="feture-title h5">Financial Law</h3>
                        <p class="feature-text">Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
                    </div>        
                
                </div>
                <div class="col-md-4 single-feat-box mt-4">
                    <div class="icon-box pt-1 pr-1">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    </div>
                    <div class="feature-box">
                        <h3 class="feture-title h5">Technology Law</h3>
                        <p class="feature-text">Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
                    </div>        
                
                </div>
            </div>
        </div>
    </section>
    <section id="experted-section-1" class="experted-section pt-10 pb-10">
        <div class="container">
            <div class="row justify-center">
                <div class="experted-section-header up-effect col-md-6 mb-7">
                    <h2 class="experted-title text-center ">
                        Experted Attorneys
                    </h2>
                    <p class="head-description text-center mt-2 mb-3">Lorem ipsum dolor amet, consectetur adipisice elitesede eiusmod tempor incidide labeore dolore magna.</p>
                    <div class="line-divider"></div>
                </div>
            </div>
            
            <div class="row">
                <div class="member-box col-md-4">
                <div class="img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '/assets/dist/images/team-1-1.jpg' ?>" alt="">
                    <div class="social-icons-box row justify-center">
                        <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook pr-2" aria-hidden="true"></i></a>
						<a href="https://twitter.com/?lang=bg" target="_blank"><i class="fa fa-twitter pr-2" aria-hidden="true"></i></i></a>
						<a href="https://www.linkedin.com/feed/" target="_blank"><i class="fa fa-linkedin pr-2" aria-hidden="true"></i></i></a>
						<a href="https://www.google.com/" target="_blank"><i class="fa fa-google" aria-hidden="true"></i></i></a>
                    </div>
                </div>
                <div class="info-box pt-3">
                    <h5 class="text-center">Mark Smith</h5>
                    <h6 class="text-center">CEO & Manager</h6>
                </div>
                </div>
                <div class="member-box col-md-4">
                <div class="img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '/assets/dist/images/team-2-1.jpg' ?>" alt="">
                    <div class="social-icons-box row justify-center">
                        <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook pr-2" aria-hidden="true"></i></a>
						<a href="https://twitter.com/?lang=bg" target="_blank"><i class="fa fa-twitter pr-2" aria-hidden="true"></i></i></a>
						<a href="https://www.linkedin.com/feed/" target="_blank"><i class="fa fa-linkedin pr-2" aria-hidden="true"></i></i></a>
						<a href="https://www.google.com/" target="_blank"><i class="fa fa-google" aria-hidden="true"></i></i></a>
                    </div>
                </div>
                <div class="info-box pt-3">
                    <h5 class="text-center">John Smith</h5>
                    <h6 class="text-center">Family Lawyer</h6>
                </div>
                </div>
                <div class="member-box col-md-4">
                <div class="img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '/assets/dist/images/team-3-1.jpg' ?>" alt="">
                    <div class="social-icons-box row justify-center">
                        <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook pr-2" aria-hidden="true"></i></a>
						<a href="https://twitter.com/?lang=bg" target="_blank"><i class="fa fa-twitter pr-2" aria-hidden="true"></i></i></a>
						<a href="https://www.linkedin.com/feed/" target="_blank"><i class="fa fa-linkedin pr-2" aria-hidden="true"></i></i></a>
						<a href="https://www.google.com/" target="_blank"><i class="fa fa-google" aria-hidden="true"></i></i></a>
                    </div>
                </div>
                <div class="info-box pt-3">
                    <h5 class="text-center">Jhon Jhon</h5>
                    <h6 class="text-center">Financial Lawyer</h6>
                </div>
                </div>
            </div>
        </div>
    </section>
    <div id="why-us-section-1" class="why-us-section">
        <div class="row">
            <div class="img-wrapper col-xs-12 col-sm-12 col-md-5" style="background-image: url( <?php echo get_template_directory_uri() . '/assets/dist/images/bg-1-1.jpg' ?>)">
            </div>
            
            <div class="why-us-description col-xs-12 col-sm-12 col-md-7 pl-10 pl-md-2 pr-10 pr-md-2 pt-7">
                    <div class="wy-us-header up-effect">
                        <h2 class="why-us-title ">
                            Why Hire Us ?
                        </h2>
                        <p class="head-description mt-2 mb-3">Lorem ipsum dolor amet, consectetur adipisice elitesede eiusmod tempor incidide labeore dolore magna.</p>
                        <div class="line-divider"></div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-md-6 mt-4">
                            <div class="icon-box pt-1 pr-1">
                            <i class="fa fa-balance-scale" aria-hidden="true"></i>
                            </div>
                            <div class="feature-box">
                                <h3 class="feture-title h5">Exclusively Areas</h3>
                                <p class="feature-text">Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
                            </div>        
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="icon-box pt-1 pr-1">
                                <i class="fa fa-book" aria-hidden="true"></i>
                            </div>
                            <div class="feature-box">
                                <h3 class="feture-title h5">Group Of Lawyers</h3>
                                <p class="feature-text">Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
                            </div>        
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="icon-box pt-1 pr-1">
                            <i class="fa fa-gavel" aria-hidden="true"></i>
                            </div>
                            <div class="feature-box">
                                <h3 class="feture-title h5">Cases Results</h3>
                                <p class="feature-text">Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
                            </div>        
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="icon-box pt-1 pr-1">
                            <i class="fa fa-balance-scale" aria-hidden="true"></i>
                            </div>
                            <div class="feature-box">
                                <h3 class="feture-title h5">Experts In Law</h3>
                                <p class="feature-text">Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
                            </div>        
                        </div>
                    </div>
            </div>

           
        </div>
    </div>
    <section id="clients-feedback-section-1" class="clients-feedback pt-10 pb-10">
        <div class="container">
            <div class="row justify-center">
                <div class="col-md-6">
                    <h2 class="clients-title text-center up-effect">
                        Clients Feedback
                    </h2>
                    <p class="head-description text-center mt-2 mb-3">Lorem ipsum dolor amet, consectetur adipisice elitesede eiusmod tempor incidide labeore dolore magna.</p>
                    <div class="line-divider"></div>
                </div>

            </div>
            <div class="client-wrapper row pt-5">
                <?php 
                            $args = array('post_type' => 'book', 'post_per_page' => 3 );
                            $loop = new WP_Query( $args );
    
                            if( $loop->have_posts() ): ?>
                                
                                    <?php while( $loop->have_posts() ): $loop->the_post(); ?>
                                        
                                            <?php get_template_part('views/content', 'testimonial'); ?>
                                       
                                    <?php endwhile; ?>
                              
                            <?php endif;
                                wp_reset_postdata();
                            ?>   
            </div>
        </div>
    </section>
    <div class="client-section pt-5 pb-5">
        <div class="container">
            <div class="clients-icons-box row justify-between">
                <div class="img-wrapper col-md-2">
                    <img src="<?php echo get_template_directory_uri() . '/assets/dist/images/1.jpg' ?>" alt="">
                </div>
                <div class="img-wrapper col-md-2">
                    <img src="<?php echo get_template_directory_uri() . '/assets/dist/images/2.jpg' ?>" alt="">
                </div>
                <div class="img-wrapper col-md-2">
                    <img src="<?php echo get_template_directory_uri() . '/assets/dist/images/3.jpg' ?>" alt="">
                </div>
                <div class="img-wrapper col-md-2">
                    <img src="<?php echo get_template_directory_uri() . '/assets/dist/images/4.jpg' ?>" alt="">
                </div>
                <div class="img-wrapper col-md-2">
                    <img src="<?php echo get_template_directory_uri() . '/assets/dist/images/5.jpg' ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <section id="free-consult-section-1" class="free-consult">
        <div class="row">
            <div class="form-wrapper col-xs-12 col-sm-12 col-md-7 pt-10 pl-10 pr-10">
                    <h2 class="practice-title">
                        Free Consultation
                    </h2>
                    <p class="head-description mt-2 mb-3">Lorem ipsum dolor amet, consectetur adipisice elitesede eiusmod tempor incidide labeore dolore magna.</p>
                    <div class="line-divider"></div>
                <?php echo do_shortcode('[contact-form-7 id="62" title="Форма за контакти 1"]') ?>

            </div>
            <div class="img-wrapper col-xs-12 col-sm-12 col-md-5" style="background-image: url( <?php echo get_template_directory_uri() . '/assets/dist/images/bg-2-1.jpg' ?>)">
            </div>
    </section>
   

</main>

<?php get_footer() ?>


