<?php 

/*
*Template name: News
*/
get_header(); ?>
<style>

</style>

<section class="block-page">
<div class="container">
<div class="row">
	
	
		
		

		<?php 
        $args = array('posts_per_page' => -1, 'post_type' => 'post');
		query_posts($args);
		if( have_posts() ): $i = 0;
			
			while( have_posts() ): the_post(); ?>
				
				<?php 
					if($i==0): $column = 12; 
					elseif($i > 0 && $i <= 2): $column = 6; $class = ' ';
					elseif($i > 2): $column = 6; $class = ' ';
					endif;
				?>
				
					<div class="col-sm-<?php echo $column; echo $class; ?> blog-item">
						<?php if( has_post_thumbnail() ):
							$image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
						endif; ?>
                        <?php if($i === 0){?>
						<div class="" style="background-image: url(<?php echo $image; ?>);">
							
							<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
							<p><?php the_excerpt(); ?></p>
							<small><?php the_category(' '); ?></small>
						</div>
                        <?php }else { ?>
                        	<div class="" >
							
							<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
							<img class="img-fluid" src="<?php echo $image ?>"/>
							<p><?php the_excerpt(); ?></p>
							<small><?php the_category(' '); ?></small>
						</div>
                        <?php } ?>
					</div>
			
			<?php $i++; endwhile; ?>
			
		<?php endif;
				wp_reset_query();
		?>
	
	


	
</div>
</div>
</section>


<?php get_footer(); ?>