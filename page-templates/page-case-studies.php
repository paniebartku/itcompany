<?php 

/*
*Template name: CaseStudies
*/
get_header(); ?>
<section class="block-page-about">
    <div class="container">
    <div class="row">
    <?php if( is_active_sidebar( 'about-sidebar-1' ) ){ ?>
            <div class="col-lg-4">
                <div class="block-page-about__sidebar">
                    <?php if( is_active_sidebar( 'about-sidebar-1' ) ){ 
                    dynamic_sidebar( 'about-sidebar-1' );
                    }else {echo '';}?>
                </div>
            </div>
            <?php } ?>


          <?php  if( is_active_sidebar( 'about-sidebar-1' ) ){ ?>
            <div class="offset-lg-1 col-lg-7">
          <?php } else { ?>   
            <div class="col-sm-12">
          <?php } ?>
                <div class="block-page-about__wrapper">
                    <div class="wrapper__header">
                        <h1><?php echo the_title(); ?></h1>
                    </div>
                    <div class="wrapper__content">
                    <?php while (have_posts()) : the_post(); 
                          the_content();
                            endwhile; 
                        ?>
                    </div>
                    <div class="wrapper__list">
                    
                    <div class="row block-cs__loop">
                    <?php $loop = new WP_Query( array( 'post_type' => 'case-studies'));
                        if ( $loop->have_posts() ) :
                            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        
                            <div class="col-lg-12">
                                <div class="block-cs__loop--card">
                                    <div class="block-cs__loop--image">
                                    <?php
                                    $image = image_acf(get_field('cs-logo'));
                                    do_action('unique_action_tag', $image );
                                    ?>
                                    </div>
                                    <blockquote><?php echo get_field('cs-excerpt') ?></blockquote>
                                    <div class="block-cs__loop--author">
                                        <span><?php echo get_field('cs-person') ?></span>
                                        <span><?php echo get_field('cs-job') ?></span>
                                    </div>
                                    <div class="block-cs__loop--readmore">
                                        <a class="button button--small" href="<?php echo the_permalink(); ?>">Więcej</a>
                                    </div>
                                </div>
                            </div>
                                            
                        
                            <?php endwhile; 
                        endif;
                    wp_reset_postdata();
                    ?>
    </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>