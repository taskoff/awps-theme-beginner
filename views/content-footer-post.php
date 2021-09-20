<?php if( has_post_thumbnail() ): ?>
            
            <div class="col-xs-12 col-sm-4">
            <div class="post-img-wrapper">
                <?php 
                echo '<a href="'.esc_url(get_permalink()).'" rel="lightbox">'; 
                    the_post_thumbnail();
                echo '</a>'
                ?>
                <!--  -->
            </div>
            </div>
            <div class="col-xs-12 col-sm-8">
                <header class="post-header">
                    <?php the_title( sprintf('<h5 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h5>' ); ?>
                    <small><?php the_category(' '); ?></small>
                </header>
                
            
            </div>
       
        
        <?php endif; ?>