			<div class="grid_5">
					<div id="calltoaction">
						<h3><?php echo get_option('calltoaction-headline'); ?></h3>
						<h4><a href="#" class="showpopup"><?php echo get_option('calltoaction-subheadline'); ?></a></h4>
					</div>
				<?php 
				if (get_option('day1') != "" || get_option('day1-d') != "") { ?>
					<div class="icon">
						<h3><?php echo get_option('day1'); ?></h3>
						<p><?php echo get_option('day1-d'); ?></p>
					</div>
				<?php } ?>
				<?php 
				if (get_option('day2') != "" || get_option('day2-d') != "") { ?>
					<div class="icon">
						<h3><?php echo get_option('day2'); ?></h3>
						<p><?php echo get_option('day2-d'); ?></p>
					</div>
				<?php } ?>
				<?php 
				if (get_option('day3') != "" || get_option('day3-d') != "") { ?>
					<div class="icon">
						<h3><?php echo get_option('day3'); ?></h3>
						<p><?php echo get_option('day3-d'); ?></p>
					</div>
				<?php } ?>
				<?php 
				if (get_option('day4') != "" || get_option('day4-d') != "") { ?>
					<div class="icon">
						<h3><?php echo get_option('day4'); ?></h3>
						<p><?php echo get_option('day4-d'); ?></p>
					</div>
				<?php } ?>
				<?php 
				if (get_option('day5') != "" || get_option('day5-d') != "") { ?>
					<div class="icon">
						<h3><?php echo get_option('day5'); ?></h3>
						<p><?php echo get_option('day5-d'); ?></p>
					</div>
				<?php } ?>
				<br clear="all" />
				<div id="sidebar">
					<?php if ( !function_exists('dynamic_sidebar') 
						|| !dynamic_sidebar('Main Sidebar') ) : ?>
				       <p style="padding: 20px;"><strong>Main Sidebar Widget:</strong> Go to your admin dashboard to add widgets to this area.</p>
				    <?php endif;?>
				</div>