



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
         
	echo '<div class="block-slider__wrapper"><div class="slider--container"><div class="slider--view"><ul>';
    while ($query->have_posts()) : $query->the_post();
        $image = get_field('slider_image');
		echo '<li class="slider--view__slides' . ($i === 1 ? ' is-active' : '' ) . '"><img src="'.$image.'"/><p class="">'.get_the_content().'</p></li>';
        $i++;
    
           
	endwhile;
	echo '</ul></div><div class="slider--arrows"><span class="arrow slider--arrows__left">&#x3c;</span><span class="arrow slider--arrows__right">&#x3e;</span></div></div></div>';
endif;
wp_reset_postdata();
?>
</section>


