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

      <div class="container swiper__inside">
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                        <?php 
                                        $sliderTitle =  get_field('slider_title');
                                        $sliderDescription =  get_field('slider_description');
                                        $sliderLink = get_field('slider_link');
                                        $sliderLinkDescription = get_field('slider_link_description');
                                        ?>
                                        <?php if(!empty($sliderTitle)): ?>
                                        <div class="swiper-slide--view__title">
                                            <h2><?php echo $sliderTitle; ?></h2>
                                            <p><?php echo $sliderDescription; ?></p>
                                            <?php if(!empty($sliderLink)): ?>
                                            <a href="<?php echo $sliderLink;?>" class="button button--slider"><?php echo $sliderLinkDescription; ?></a>
                                            <?php endif; ?>
                                        </div>
                                        <?php endif; ?>
                                     
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