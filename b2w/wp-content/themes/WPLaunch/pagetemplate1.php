<?php
	/*
		Template Name: Page Template #1
	*/
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?> :: <?php bloginfo('description'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/tmp/960.css" media="all">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/tmp/style.css" media="all">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<?php
		$checkFacebook =  get_option('facebook'); 
		if ($checkFacebook != "") { ?>
		<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
	<?php } ?>
	<?php include('bg.php') ?>
</head>
<body>
	<div id="wrapper" class="container_12 clearfix">
		<div id="header">
			<?php
		    	$checkLogo =  get_option('tmp1-logoIMG'); 
			 if ($checkLogo != "") { ?>
				<img src="<?php echo get_option('tmp1-logoIMG') ?>" />
			<?php } else { ?>
			<div id="logo">
				<h1><?php echo get_option('tmp1-logo'); ?></h1>
				<h3><?php echo get_option('tmp1-tagline'); ?></h3>
			</div>
			<?php } ?>
		</div>
		<?php
		    	$checkLayout =  get_option('tmp1-layout'); 
			 if ($checkLayout == "1") { ?>
			<div id="content" class="grid_7">
				<?php echo html_entity_decode(get_option('tmp1-content',htmlentities($my_default_value))); ?>
				<div id="fb-root"></div>
				<fb:comments href="<?php echo get_option('facebook'); ?>"></fb:comments>
			</div>
			<div id="sidebar" class="grid_5">
				<?php echo html_entity_decode(get_option('tmp1-video',htmlentities($my_default_value))); ?>
				<?php echo html_entity_decode(get_option('tmp1-sidebar',htmlentities($my_default_value))); ?>
				<div id="greyBox">
					<?php echo html_entity_decode(get_option('tmp1-optin',htmlentities($my_default_value))); ?>
					<br clear="all" />
					<?php echo html_entity_decode(get_option('tmp1-email',htmlentities($my_default_value))); ?>
					
				</div>
			</div>
		<?php } ?>
		<?php if ($checkLayout == "2") { ?>
			
			<div id="content" class="grid_7">
				<?php echo html_entity_decode(get_option('tmp1-video',htmlentities($my_default_value))); ?>
				<?php echo html_entity_decode(get_option('tmp1-content',htmlentities($my_default_value))); ?>
				<div id="fb-root"></div>
				<fb:comments href="<?php echo get_option('facebook'); ?>"></fb:comments>
			</div>
			
			<div id="sidebar" class="grid_5">
				<?php echo html_entity_decode(get_option('tmp1-sidebar',htmlentities($my_default_value))); ?>
				<div id="greyBox">
					<?php echo html_entity_decode(get_option('tmp1-optin',htmlentities($my_default_value))); ?>
					<br clear="all" />
					<?php echo html_entity_decode(get_option('tmp1-email',htmlentities($my_default_value))); ?>
					
				</div>
			</div>
		<?php } ?>
		<?php if ($checkLayout == "3") { ?>
			<div id="content" class="grid_9" style="margin-left: 138px;">
				<?php echo html_entity_decode(get_option('tmp1-video',htmlentities($my_default_value))); ?>
				<?php echo html_entity_decode(get_option('tmp1-content',htmlentities($my_default_value))); ?>
			</div>
			<div class="grid_7">
				<div id="fb-root"></div>
				<fb:comments href="<?php echo get_option('facebook'); ?>"></fb:comments>
			</div>
			<div class="grid_5">
				<?php echo html_entity_decode(get_option('tmp1-sidebar',htmlentities($my_default_value))); ?>
				<div id="greyBox">
					<?php echo html_entity_decode(get_option('tmp1-optin',htmlentities($my_default_value))); ?>
					<br clear="all" />
					<?php echo html_entity_decode(get_option('tmp1-email',htmlentities($my_default_value))); ?>
					
				</div>
			</div>
			</div>
		<?php } ?>
		<?php if ($checkLayout == "4") { ?>
			<div id="content" class="grid_9"  style="margin-left: 138px;">
				<?php echo html_entity_decode(get_option('tmp1-content',htmlentities($my_default_value))); ?>
			</div>
			<div class="grid_7">
				<div id="fb-root"></div>
				<fb:comments href="<?php echo get_option('facebook'); ?>"></fb:comments>
			</div>
			<div class="grid_5">
				<?php echo html_entity_decode(get_option('tmp1-sidebar',htmlentities($my_default_value))); ?>
				<div id="greyBox">
					<?php echo html_entity_decode(get_option('tmp1-optin',htmlentities($my_default_value))); ?>
					<br clear="all" />
					<?php echo html_entity_decode(get_option('tmp1-email',htmlentities($my_default_value))); ?>
					
				</div>
			</div>
		<?php } ?>
		<hr />
		<?php
			$checkFooter = get_option('tmp1-footer2');
		    if ($checkFooter == "") { ?>
		    <div class="grid_6">
				<?php echo html_entity_decode(get_option('tmp1-footer1',htmlentities($my_default_value))); ?>
			</div>
		<?php }  ?>
		<?php
			$checkFooter2 = get_option('tmp1-footer2');
		    if ($checkFooter2 != "") { ?>
			<div class="grid_3">
				<?php echo html_entity_decode(get_option('tmp1-footer1',htmlentities($my_default_value))); ?>
			</div>
			<div class="grid_3">
				<?php echo html_entity_decode(get_option('tmp1-footer2',htmlentities($my_default_value))); ?>
			</div>
		<?php } ?>
		<?php
			$checkFooter3 = get_option('tmp1-footer4');
		    if ($checkFooter3 == "") { ?>
		    <div class="grid_6">
				<?php echo html_entity_decode(get_option('tmp1-footer3',htmlentities($my_default_value))); ?>
			</div>
		<?php }  ?>
		<?php
			$checkFooter4 = get_option('tmp1-footer4');
		    if ($checkFooter4 != "") { ?>
			<div class="grid_3">
				<?php echo html_entity_decode(get_option('tmp1-footer3',htmlentities($my_default_value))); ?>
			</div>
			<div class="grid_3">
				<?php echo html_entity_decode(get_option('tmp1-footer4',htmlentities($my_default_value))); ?>
			</div>
		<?php } ?>
	</div>
	<div id="footer">
		<p>Copyright 2011 &copy; - <?php echo get_option('tmp1-logo'); ?> 
			:: <?php echo get_option('tmp1-tagline'); ?> - all rights reserved.</p>		
	</div>
</body>
</html>