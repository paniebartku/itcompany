<?php get_header(); ?>

<section class="block-archive">
<div class="container">
<div class="row">
	
	
		
		<div class="row">

		<?php if( have_posts() ): ?>
			
			<header class="page-header">
				<?php 
					
					the_archive_title('<h1 class="">', '</h1>');
					the_archive_description('<div class="">', '</div>');
					
				?>
			</header>
		</div>	
		<div class="row">
			<?php while( have_posts() ): the_post(); ?>
				
				<?php get_template_part('content', 'archive'); ?>
			
			<?php endwhile; ?>
		</div>			
	
			
			<?php endif; ?>
			
	

	
</div>
</div>
</section>
<?php get_footer(); ?>