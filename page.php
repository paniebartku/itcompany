<?php 

get_header(); ?>
<section class="block-page">
    <div class="container">
    <div class="row">

            <div class="col-sm-12">

                <div class="block-page__wrapper">
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