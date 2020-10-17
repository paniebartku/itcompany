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
                    
                    <div class="row block-cs__loop"><?php
                   $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
$args = array(
  'posts_per_page' => 2,
  'paged' => $paged,
  'post_type' => 'case-studies'
);?>
                    <?php $loop = new WP_Query($args );
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
                            
                             <?php
                     endwhile; 

                     $total_pages = $loop->max_num_pages;

                     if ($total_pages > 1){
                 
                         $current_page = max(1, get_query_var('paged'));
                 ?>
                 <div class="block-cs__pagination"> 
                     <?php
                         echo paginate_links(array(
                             'base' => get_pagenum_link(1) . '%_%',
                             'format' => '/page/%#%',
                             'current' => $current_page,
                             'total' => $total_pages,
                             'prev_text'    => __('« poprzednie'),
                             'next_text'    => __('następne »'),
                         ));
                     }    ?>
                     </div>
                     <?php
                 
                        
                        endif; 
                   
                    wp_reset_postdata();
                    ?>
                    <?php
     ?>
                 


    </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>