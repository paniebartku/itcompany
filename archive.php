<?php get_header(); ?>

<section class="block-archive">
<div class="container">
	<div class="row">
	<div class="col-sm-12">
				<?php if( have_posts() ): ?>
		<div class="block-archive__header">
				<?php 
					the_archive_title('<h1 class="">', '</h1>');
					the_archive_description('<div class="">', '</div>');
				?>
		</div>
		</div>
	</div>	


		<div class="row">
			<?php while( have_posts() ): the_post(); ?>
				
				
	<div class="col-lg-6">
	<div class="block-archive__content">
		<?php the_title( sprintf('<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>

        <div class="content__image">
			<?php    if( has_post_thumbnail() ):
			
                    $image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );?>
					<img class="img-fluid" src="<?php echo $image ?>"/>

					<?php endif;   ?>           
		</div>
		<div class="content__excerpt">
		<?php the_excerpt(); ?>
		</div>
		<div class="content__readmore">
								<a class="button--slider" href="<?php echo the_permalink(); ?>">Więcej</a>
		</div>
		<small><?php the_category(', '); ?></small>


	</div>
	</div>
			<?php endwhile; ?>
				
	
			
			<?php endif; ?>
			
	

</div>
</div>
</section>
<?php get_footer(); ?>