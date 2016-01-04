<?php get_header(); ?>
		<div id="content">
			<br/><br/>
			<div id="posts" class="grid_7 single">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post">
					<h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					<span class="date"><strong>By:</strong> Author | <strong>Published:</strong> <?php the_time('F jS, Y') ?></span>
					<?php 
					$Thumbnail = get_post_meta($post->ID, 'Thumbnail', $single = true);
					if($Thumbnail !== '') { ?>

					<a href="<?php the_permalink() ?>" class="img-thumb" ><img src="<?php echo get_post_meta($post->ID, "Thumbnail", true);?>" style="float: right; margin-left: 20px; margin-right: 0;width: 145px; height: 120px;" /></a>
					
					<?php } ?>
					<?php the_content('Read the rest of this entry &raquo;'); ?>	
					
					<br/><br/>
					
					<?php comments_template(); ?>
				</div>
				
			
				<?php endwhile; else: ?>
			
					<p>Sorry, no posts matched your criteria.</p>
			
				<?php endif; ?>
			</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>