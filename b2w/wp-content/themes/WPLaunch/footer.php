</div>
		</div>
		<div id="moreFooter" class="clearfix">
			<div class="column grid_3">
					<?php if ( !function_exists('dynamic_sidebar') 
						|| !dynamic_sidebar('Footer #1') ) : ?>
				       <p style="padding: 20px;"><strong>Footer Column #1 Widget:</strong> Go to your admin dashboard to add widgets to this area.</p>
				    <?php endif;?>
			</div>
			<div class="column grid_3">
					<?php if ( !function_exists('dynamic_sidebar') 
						|| !dynamic_sidebar('Footer #2') ) : ?>
				       <p style="padding: 20px;"><strong>Footer Column #2 Widget:</strong> Go to your admin dashboard to add widgets to this area.</p>
				    <?php endif;?>
			</div>
			<div class="column grid_3">
					<?php if ( !function_exists('dynamic_sidebar') 
						|| !dynamic_sidebar('Footer #3') ) : ?>
				       <p style="padding: 20px;"><strong>Footer Column #3 Widget:</strong> Go to your admin dashboard to add widgets to this area.</p>
				    <?php endif;?>
			</div>
			<div class="column grid_3">
					<?php if ( !function_exists('dynamic_sidebar') 
						|| !dynamic_sidebar('Footer #4') ) : ?>
				       <p style="padding: 20px;"><strong>Footer Column #4 Widget:</strong> Go to your admin dashboard to add widgets to this area.</p>
				    <?php endif;?>
			</div>
		</div>
	</div>
	<div id="footer">
		<p>Copyright 2011 - <?php bloginfo('name'); ?> - all rights reserved. - <?php bloginfo('description'); ?></p>
		<br clear="all" /><br clear="all" />
	</div>
	
	<!-- Popin Optin Box -->
	<div id="optinWrapper">
		<div id="optinPopup">
			<h2 class="title">This is the Optin Popup Header</h2>
			<div id="popupContent">
				<?php include(TEMPLATEPATH.'/optin.php'); ?>
				<br clear="all" />
				<p style="font-size: 11px;"><a href="#" class="closepopup">Click here to close.</a></p>
			</div>
		</div>
	</div>
</body>
</html>