<section class="block-cs">
<div class="block-cs__wrapper">
<div class="container">

<div class="row block-cs__header">
  
<?php $referenceHeader = get_field('reference_header');
         if(!empty($referenceHeader)){
            echo "<h2>".$referenceHeader."</h2>" ;
         }?>

</div>
    <div class="row block-cs__loop">
    <?php $loop = new WP_Query( array( 'post_type' => 'case-studies'));
        if ( $loop->have_posts() ) :
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <?php $featured = get_field('featured_post');
            if($featured == true){ ?>
            <div class="col-lg-4">
                <div class="block-cs__loop--card">
                    <div class="block-cs__loop--image">
                    <?php
                    $image = image_acf(get_field('cs-logo'));
                    do_action('unique_action_tag', $image );
                    ?>
                    </div>
                    <blockquote class="block-cs__loop--blockquote sameHeightClass"><?php echo get_field('cs-excerpt') ?></blockquote>
                    <div class="block-cs__loop--author">
                        <span><?php echo get_field('cs-person') ?></span>
                        <span><?php echo get_field('cs-job') ?></span>
                    </div>
                    <div class="block-cs__loop--readmore">
                        <a class="button button--small" href="<?php echo the_permalink(); ?>">Więcej</a>
                    </div>
                </div>
            </div>
            <?php } ?>
          
        <?php endwhile; 
       endif;
   wp_reset_postdata();
?>
    </div>
</div>


         

</div>
</section>