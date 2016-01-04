<?php

//Custom Fields
$project_feature_title 	= get_post_meta(7, 'project_feature_title', true);
$project_feature_body 	= get_post_meta(7, 'project_feature_body', true);
	
?>

<!-- PROJECT FEATURES
=================================================== -->
<section id="project-features">
	<div class="container">
		
		<h2><?php echo $project_feature_title; ?></h2>
		<p class="lead"><?php echo $project_feature_body; ?></p>
		
		<div class="row">
			
			<?php $loop = new WP_Query( array( 'post_type' => 'project_feature', 'orderby' => 'post_id', 'order' => 'ASC' )); ?>
			<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
			
				<div class="col-sm-4">
					
					<?php
						
						if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						}	
						
					?>
					
					<h3><?php the_title(); ?></h3>
					<p><?php the_content(); ?></p>
				</div><!-- end col -->
			
			
			<?php endwhile; ?>
			
			<?php wp_reset_query(); ?>
			
		</div><!-- row -->
		
	</div><!-- container -->
	
</section><!-- project-features -->
		