



<section class="block-slider">
<?php
$args = array(
    'post_type' => 'slider',
    'post_status' => 'publish',
    'posts_per_page' => 5,
    'meta_query' => array(
    )
);
$query = new WP_Query( $args );
if ($query->have_posts()) :
       $i = 1;
         ?>
        <div class="block-slider__wrapper">
            <div class="slider--container">
                <div class="slider--view">
                    <ul>
                 
    <?php
     
    while ($query->have_posts()) : $query->the_post();
    $thumb_id = get_post_meta( $post->ID, '_thumbnail_id', true );
    
    $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
       // $images = get_the_post_thumbnail_url(get_the_ID(),'full');
        
       
        ?>
                        <li style="background-image: url('<?php echo $image[0]; ?>');" class="slider--view__slides <?php echo ($i === 1 ? ' is-active' : '' ); ?> ">
                          <img src="<?php //echo $image[0]; ?>"/> 
                      
                            <h2></h2>
                            <h3></h3>                            
                        </li>
                     
        
        <?php
 $i++; 
        ?>
        <?php

    endwhile; ?>

    <div class="dots">
        <?php
        $i = 1;
    while ($query->have_posts()) : $query->the_post(); ?>
    
            <span class=<?php echo ($i === 1 ? ' is-active' : '' ); ?>></span>
       <?php
       $i++; 
    endwhile;  ?>
    
    </div>   <?php
	echo '</ul></div><div class="slider--arrows"><span class="arrow slider--arrows__left">&#x3c;</span><span class="arrow slider--arrows__right">&#x3e;</span></div></div></div>';
endif;

wp_reset_postdata();
?>
   
</section>
<style>
                     .slider--view__slides {background-size: cover; height: 600px;}
                    </style>

