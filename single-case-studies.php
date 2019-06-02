<?php get_header(); ?>

<section class="block-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="block-single__title">
                    <h1> <?php echo the_title(); ?></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
            <?php while (have_posts()) : the_post(); 
                          the_content();
                    endwhile;  ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>