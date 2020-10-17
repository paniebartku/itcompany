<?php get_header(); ?>
<?php
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
                                  ?>
                                  <?php if(!empty($sliderTitle)): ?>
                                  <div class="swiper-slide--view__title">
                                      <h2><?php echo $sliderTitle; ?></h2>
                                      <p><?php echo $sliderDescription; ?></p>
                                      <a href="<?php echo $sliderLink['url'];?>" class="button button--slider"><?php echo $sliderLink['title']; ?></a>
                                  </div>
                                  <?php endif; ?>
                      </div>
                      </div>
        
                      </div>  
</div>

<?php get_footer(); ?>