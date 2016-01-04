<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bootstrap_to_WordPress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h3 class="entry-title">', '</h3>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
			<div class="post-details">
				<i class="fa fa-user"></i><?php the_author(); ?>
				<i class="fa fa-clock-o"></i><time><?php the_date(); ?></time>
				<i class="fa fa-folder"></i><?php the_category(', '); ?>
				<i class="fa fa-tags"></i><?php the_tags('', ', ', ''); ?>
				
				<div class="post-comments-badge">
					<a href="<?php comments_link(); ?>"><span class="glyphicon glyphicon-comments"></span> <?php comments_number(0, 1, '%'); ?></a>
				</div><!-- post-comments-badge -->
				
				<?php edit_post_link( 'Edit', '<div><i class="fa fa-pencil"></i>', '</div>'); ?>
			</div><!-- post-details -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

		
	<?php if( has_post_thumbnail() ) {  //check for feature image ?>
		<div class="post-image">
			<?php the_post_thumbnail(); ?>
		</div><!-- post image -->
	<?php } ?>
	
	<div class="post-excerpt">
		<?php the_excerpt(); ?>
	</div><!-- post-excerpt -->

	<footer class="entry-footer">
		<?php bootstrap2wordpress_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
