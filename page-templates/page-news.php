<?php 

/*
*Template name: News
*/
get_header(); ?>
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
				
					<div class="col-sm-<?php echo $column; echo $class; ?> blog__item">
						<?php if( has_post_thumbnail($post->ID) ):
							$image = wp_get_attachment_url( get_post_thumbnail_id( ( $post->ID ), 'full' ) );

						endif; ?>
                        <?php if($i === 0){?>
						<div class="blog__item--first" style="background-image: url(<?php echo $image; ?>);">
							<div class="first__title">
							<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
							</div>
							<div class="first__excerpt"><?php the_excerpt(); ?>	<small><?php the_category(' , '); ?></small></div>
						<style>
						
						</style>
						</div>
                        <?php }else { ?>
                        	<div class="blog__item--older" >
							
							<?php the_title( sprintf('<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>
							<?php echo get_the_post_thumbnail( $post_id, 'custom-size' ); ?>												
									<?php the_excerpt(); ?>
							<div class="older__readmore">
								<a class="button--slider" href="<?php echo the_permalink(); ?>">Więcej</a>
							</div>
							<small><?php the_category(', '); ?></small>
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