<section class="block-news">
    <div class="container">
        <div class="row block-news__header">
         <?php $newsHeader = get_field('news_header');
         if(!empty($newsHeader)){
            echo "<h2>".$newsHeader."</h2>" ;
         }?>
        </div>
        <div class="row block-news__content">
        <?php 
        $postPerPage = get_field('news_per_page');
        $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => $postPerPage));
        if ( $loop->have_posts() ) :
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
           
           
            <div class="col-lg-8">
       
                <div class="block-news news__header">
                    <h3> <?php echo the_title(); ?></h3>
               </div>
               <div class="block-news news__excerpt">
                        <?php echo the_excerpt(); ?>
                </div>
                <div class="block-news news__tags">
                     <?php  the_category(', ');  ?>
                </div>
                
                <div class="block-news news__read-more">
                    <a href="<?php echo the_permalink() ?>" class="button button--standard">Więcej</a>
                </div>      
           
            </div>
            <div class="col-lg-4">
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
 ?>
 <a href="<?php echo the_permalink(); ?>">
            <figure>
                <img class="img-fluid" src="<?php echo $image[0];?>" />
                <figcaption>
                                <div>
                                    <h5><?php echo 'zobacz'; ?></h5>
                                </div>
                </figcaption>
            </figure>
            </a>
            </div>
           
          
        <?php endwhile; 
       endif;
   wp_reset_postdata();
?>     
        </div>
        <div class="row block-news__button">
            <div class="col-lg-12">
                <?php $newsLink = get_field('news_link'); ?>
                <a href="<?php echo $newsLink; ?>" class="button button--standard">Zobacz wszystkie</a>
            </div>
        </div>
    </div>    
</section>