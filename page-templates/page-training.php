<?php 

/*
*Template name: Training
*/
get_header(); ?>
<section class="block-page-sidebar">
    <div class="container">
    <div class="row">
    <?php if( is_active_sidebar( 'training-sidebar-1' ) ){ ?>
            <div class="col-lg-4">
                <div class="block-page-sidebar__sidebar">
                    <?php if( is_active_sidebar( 'training-sidebar-1' ) ){ 
                    dynamic_sidebar( 'training-sidebar-1' );
                    }else {echo '';}?>
                </div>
            </div>
            <?php } ?>


          <?php  if( is_active_sidebar( 'training-sidebar-1' ) ){ ?>
            <div class="offset-lg-1 col-lg-7">
          <?php } else { ?>   
            <div class="col-sm-12">
          <?php } ?>
                <div class="block-page-sidebar__wrapper">
                    <div class="wrapper__header">
                        <h1><?php echo the_title(); ?></h1>
                    </div>
                    <div class="wrapper__content">
                    <?php while (have_posts()) : the_post(); 
                          the_content();
                            endwhile; 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>