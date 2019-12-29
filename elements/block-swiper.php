<section class="block-swiper">
<div class="swiper-container">
    <div class="swiper-wrapper">
    <?php
    $args = array(
    'post_type' => 'slider',
    'post_status' => 'publish',
    'posts_per_page' => 5,
    
);
$query = new WP_Query( $args );

  while ($query->have_posts()) : $query->the_post();
  
  $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
 
      ?>
      <div class="swiper-slide" style="background-image: url('<?php echo $image[0]; ?>');" >

      <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                            
                                        
                                        <div class="swiper-slide--view__title">
                                            <h2><?php echo get_field('slider_title'); ?></h2>
                                            <p>Lorem ipsum dolor sit amet</p>
                                            <a href="<?php echo get_field('slider_link') ?>" class="button button--slider">Zobacz</a>
                                        </div>
                            </div>
                            </div>
              
                            </div>  
      </div>
     <?php
    endwhile; 
    wp_reset_postdata(); 
    ?>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
  </section>