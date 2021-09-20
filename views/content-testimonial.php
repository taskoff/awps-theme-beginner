<div class="post-wrapper col-md-4 p-2">
    <div class="img-wrapper text-center">
        <?php 
        echo '<a href="'.esc_url(get_permalink()).'" rel="lightbox">'; 
            the_post_thumbnail();
        echo '</a>'
        ?>
        <!--  -->
    </div>
    <div class="post-body">
       
        <div class="post-excerpt text-center">
            <?php the_excerpt(); 
             echo '<a href="'.esc_url(get_permalink()).'" rel="lightbox">'; ?>
           
            <?php echo '</a>' ?>
        </div>
        <div class="post-footer">
            <?php the_title( sprintf('<h4 class="entry-title text-center"><a href="%s">', esc_url( get_permalink() ) ),'</a></h4>' ); ?>
        </div>
    </div>

</div>