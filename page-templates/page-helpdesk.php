<?php 

/*
*Template name: Helpdesk
*/
get_header(); ?>

<section class="block-page-helpdesk">
    <div class="container">
        <div class="row">
    <div class="col-sm-12">
            <div class="helpdesk__header">
                <h1><?php echo the_title(); ?></h1>
            </div>
    </div>

    </div>

    <div class="row">
    <div class="col-sm-12">
    <div class="helpdesk__content">
    <?php while (have_posts()) : the_post(); 
                          the_content();
                            endwhile; 
                        ?>
</div>
    </div>
    </div>

    <div class="row helpdesk__items-wrapper">
        <div class="col-md-5 col-sm-12 col-12">
                          <div class="helpdesk__item">
                           <h4><?php echo get_field('helpdesk-title-1');?></h4>
                                 <div class="helpdesk__image">
                           <?php image_acff(get_field('helpdesk-image-1')); ?> 
                           </div>
                                <div class="helpdesk__button">
                                <?php $anyDesk = esc_attr( get_option( 'any_desk' ) ); ?>
                                <a href="<?php echo $anyDesk ?>" class="button button--standard">Pobierz</a>
                                </div>
                          </div>
        </div>
        </div>





    </div>
</section>

              
               
<?php get_footer(); ?>