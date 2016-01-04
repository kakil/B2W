<?php get_header(); ?>
		<div id="banner" class="clearfix">
			<div id="info" class="grid_7">
				<h2><?php echo get_option('banner-headline'); ?></h2>
				<p><?php echo get_option('banner-text'); ?></p>
				<a href="#" class="subscribe" style="width: 200px;">Click Here to Sign up</a>
			</div>
			<div id="thumb" class="grid_4">
				<?php 
					$checkImage = get_option('image-url');
					if ($checkImage != "") {
						
						echo "<img src='$checkImage' class='thumb' />";
					}
					else  { ?>
						
						<script type="text/javascript">
							$(document).ready(function() {
							   
							/// Resize embeds
							var maxEmbedWidth = 325;
							 $("object, embed").each(function (i) {
							    var ow = $(this).attr('width');
								var oh = $(this).attr('height');
								if(ow > maxEmbedWidth){
									var s = maxEmbedWidth/ow;
									var nw = Math.floor(ow *s);
									var nh = 250;
									$(this).attr('width', nw);
									$(this).attr('height',nh);
									}
							});
							});
						</script>
						<?php 	
							include(TEMPLATEPATH . '/embed.php');
							}
						?>
			</div>
		</div>
		<div id="content">
			<div id="posts" class="grid_7">
				<?php query_posts('showposts=4'); ?> 
					<?php while (have_posts()) : the_post(); ?>
				<div class="post">
					<h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					<span class="date"><strong>By:</strong> Author | <strong>Published:</strong> <?php the_time('F jS, Y') ?></span>
					
					<?php 
					$Thumbnail = get_post_meta($post->ID, 'Thumbnail', $single = true);
					if($Thumbnail !== '') { ?>

					<a href="<?php the_permalink() ?>" class="img-thumb"><img src="<?php echo get_post_meta($post->ID, "Thumbnail", true);?>" /></a>
					
					<?php } ?>

					<?php the_excerpt('Read the rest of this entry &raquo;'); ?>
					<a href="<?php the_permalink() ?>" class="readmore">Continue Reading..</a>
					<br clear="all" /><br clear="all" />
				</div>
				<?php endwhile; ?>
			</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>