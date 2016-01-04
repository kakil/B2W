<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
	
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/src/reset.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/src/960.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php wp_get_archives('type=monthly&format=link'); ?>
	
	<?php include('bg.php'); ?>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		  	$('.subscribe').click(function() {
			 	$('#optinWrapper').show();
			});
			$('.showpopup').click(function() {
			 	$('#optinWrapper').show();
			});
			$('.closepopup').click(function() {
			 	$('#optinWrapper').hide();
			});
		});
	</script>
</head>
<body>
	<div id="wrapper" class="container_12 clearfix">
		<div id="header">
			<div id="logo" class="grid_5">
				<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
				<h3><?php bloginfo('description'); ?></h3>
			</div>
			<div id="navigation" class="grid_7">
				<ul>
					<?php $pages = wp_list_pages('title_li=&sort_column=post_date&sort_order=DESC&depth=-1&echo=0');
					preg_match_all('/(<li.*?>)(.*?)<\/li>/i', $pages, $matches);
					if (!empty($matches[0])) {
					  print '<ul>' . implode("\n", array_slice($matches[0],0,5)) . '</ul>';
					} ?>
				</ul>
			</div>
		</div>