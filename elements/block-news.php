<section class="block-news">
    <div class="container">
        <div class="row block-news__header">
            <h2>Aktualności</h2>
        </div>
        <div class="row block-news__content">
        <?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 1));
        if ( $loop->have_posts() ) :
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
           
           
            <div class="col-lg-8">
       
                  
               
                       <?php echo the_title(); 
                        echo the_content();
                       ?>
           
            </div>
            <div class="col-lg-4">
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
 ?>
            <figure>
                <img class="img-fluid" src="<?php echo $image[0];?>" />
            </figure>
            
            </div>
           
          
        <?php endwhile; 
       endif;
   wp_reset_postdata();
?>     
        </div>
        <div class="row block-news__button">
            <div class="col-lg-12">
                <a href="#" class="button button--standard">Zobacz wszystkie</a>
            </div>
        </div>
    </div>    
</section>