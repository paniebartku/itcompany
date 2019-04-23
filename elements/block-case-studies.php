<section class="block-cs">
<div class="block-cs__wrapper">
<div class="container">

<div class="row block-cs__header">
  
        <h2>Case Studies</h2>


</div>
    <div class="row block-cs__loop">
    <?php   $loop = new WP_Query( array( 'post_type' => 'case-studies'));
        if ( $loop->have_posts() ) :
            while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <div class="col-lg-4">
                <div class="block-cs__loop--image">
                

                <?php
                $elo = image_acf(get_field('cs-logo'));
                do_action('unique_action_tag', $elo );
                ?>
             
                </div>
                <blockquote><?php echo get_field('cs-excerpt') ?></blockquote>
            </div>
          
        <?php endwhile; 
       endif;
   wp_reset_postdata();
?>
    </div>
</div>


         

</div>
</section>