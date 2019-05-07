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
           
          
        <?php endwhile; 
       endif;
   wp_reset_postdata();
?>     
        </div>
    </div>    
</section>