<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
		<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
		<small><?php the_time('F j, Y'); ?>, <?php the_category(); ?></small>
	</header>
	

		
		<?php if( has_post_thumbnail() ): ?>
		
			<div class="col-sm-4">
				<div class="thumbnail"><?php the_post_thumbnail('medium'); ?></div>
			
			
				<?php the_excerpt(); ?>
			</div>
		
		<?php else: ?>
		
			<div class="col-sm-4">
				<?php the_excerpt(); ?>
			</div>
		
		<?php endif; ?>


</article>