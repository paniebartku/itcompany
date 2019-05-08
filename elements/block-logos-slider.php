<section class="block-logos-slider">
<div class="container">
        <div class="row block-logos-slider__header">
            <h2>Wspieramy</h2>
        </div>
        <div class="row block-logos-slider__content glide">
        <div data-glide-el="track" class="glide__track" >
        <ul class="glide__slides block-logos-slider__list">
        <?php $loop = new WP_Query( array( 'post_type' => 'logos', 'posts_per_page' => -1));
        if ( $loop->have_posts() ) :
            while ( $loop->have_posts() ) : $loop->the_post(); 
            $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );

            
            ?>
           
           
           <li class="glide__slide block-logos-slider__slide"><img class="img-fluid" src="<?php echo $image[0] ?>"/></li>
           
          
        <?php endwhile; 
       endif;
   wp_reset_postdata();
   
?>        </ul>
</div>
        </div>
    </div> 

</section>
