<?php get_header(); ?>
		<div id="content">
			<br/><br/>
			<div id="posts" class="grid_7 single">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post">
					<h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					
					<?php the_excerpt('Read the rest of this entry &raquo;'); ?>	
					
				</div>
				
			
				<?php endwhile; else: ?>
			
					<p>Sorry, no posts matched your criteria.</p>
			
				<?php endif; ?>
			</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>