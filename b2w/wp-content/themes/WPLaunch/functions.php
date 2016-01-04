<?php
		if ( function_exists('register_sidebar') )
		register_sidebar( array(
			'name' => 'Main Sidebar',
		    'before_widget' => '',
		    'after_widget' => '',
		    'before_title' => '<h3>',
		    'after_title' => '</h3>',
		));
		if ( function_exists('register_sidebar') )
		register_sidebar( array(
			'name' => 'Footer #1',
		    'before_widget' => '',
		    'after_widget' => '',
		    'before_title' => '<h3>',
		    'after_title' => '</h3>',
		));
		if ( function_exists('register_sidebar') )
		register_sidebar( array(
			'name' => 'Footer #2',
		    'before_widget' => '',
		    'after_widget' => '',
		    'before_title' => '<h3>',
		    'after_title' => '</h3>',
		));
		if ( function_exists('register_sidebar') )
		register_sidebar( array(
			'name' => 'Footer #3',
		    'before_widget' => '',
		    'after_widget' => '',
		    'before_title' => '<h3>',
		    'after_title' => '</h3>',
		));
		if ( function_exists('register_sidebar') )
		register_sidebar( array(
			'name' => 'Footer #4',
		    'before_widget' => '',
		    'after_widget' => '',
		    'before_title' => '<h3>',
		    'after_title' => '</h3>',
		));
		$themename = "WP Launch Theme";
		$shortname = "wpc";
		
		$options = array (
		
			array(	"name" => "Welcome Message",
					"type" => "title"),
					
			array(	"type" => "open"),
			
			array(	"name" => "Title",
					"desc" => "Enter a title to display for your welcome message.",
					"id" => $shortname."_welcome_title",
					"std" => "",
					"type" => "text"),
					
			array(	"name" => "Message",
					"desc" => "Text to display as welcome message.",
		            "id" => $shortname."_welcome_message",
		            "type" => "textarea"),
			
			array(  "name" => "Disable Welcome Message?",
					"desc" => "Check this box if you would like to DISABLE the welcome message.",
		            "id" => $shortname."_welcome_disable",
		            "type" => "checkbox",
		            "std" => "false"),
			
			array(	"type" => "close")
			
		);
		
		function mytheme_add_admin() {
		
		global $themename, $shortname, $options;
		    
		if((get_option('top-headline') == '')
			||(get_option('calltoaction-headline') == '')
			||(get_option('calltoaction-subheadline') == '')
			||(get_option('calltoaction-graphic') == '')
			||(get_option('banner-text') == '')
			||(get_option('banner-headline') == '')
			||(get_option('image-url') == '')
			||(get_option('autoresponder1') == '')
			||(get_option('video-embed') == '')
			||(get_option('day1') == '')
			||(get_option('day1-d') == '')
			||(get_option('day2') == '')
			||(get_option('day2-d') == '')
			||(get_option('day3') == '')
			||(get_option('day3-d') == '')
			||(get_option('day4') == '')
			||(get_option('day4-d') == '')
			||(get_option('day5') == '')
			||(get_option('day5-d') == '')
			||(get_option('bg') == '')
			||(get_option('type') == '')
			||(get_option('inner-bg') == '')
			||(get_option('icon') == '')
			||(get_option('banner') == '')
			||(get_option('optin-pop') == '')
			||(get_option('tmp1-bg') == '')
			||(get_option('tmp1-header') == '')
			||(get_option('tmp1-logo') == '')
			||(get_option('tmp1-tagline') == '')
			||(get_option('tmp1-logoIMG') == '')
			||(get_option('tmp1-content') == '')
			||(get_option('tmp1-sidebar') == '')
			||(get_option('tmp1-optin') == '')
			||(get_option('tmp1-footer1') == '')
			||(get_option('tmp1-footer2') == '')
			||(get_option('tmp1-footer3') == '')
			||(get_option('tmp1-footer4') == '')
			||(get_option('tmp2-bg') == '')
			||(get_option('tmp2-header') == '')
			||(get_option('tmp2-logo') == '')
			||(get_option('tmp2-tagline') == '')
			||(get_option('tmp2-logoIMG') == '')
			||(get_option('tmp2-content') == '')
			||(get_option('tmp2-sidebar') == '')
			||(get_option('tmp2-optin') == '')
			||(get_option('tmp2-footer1') == '')
			||(get_option('tmp2-footer2') == '')
			||(get_option('tmp2-footer3') == '')
			||(get_option('tmp2-footer4') == '')
			||(get_option('tmp3-bg') == '')
			||(get_option('tmp3-header') == '')
			||(get_option('tmp3-logo') == '')
			||(get_option('tmp3-tagline') == '')
			||(get_option('tmp3-logoIMG') == '')
			||(get_option('tmp3-content') == '')
			||(get_option('tmp3-sidebar') == '')
			||(get_option('tmp3-optin') == '')
			||(get_option('tmp3-footer1') == '')
			||(get_option('tmp3-footer2') == '')
			||(get_option('tmp3-footer3') == '')
			||(get_option('tmp3-footer4') == '')
			||(get_option('tmp4-bg') == '')
			||(get_option('tmp4-header') == '')
			||(get_option('tmp4-logo') == '')
			||(get_option('tmp4-tagline') == '')
			||(get_option('tmp4-logoIMG') == '')
			||(get_option('tmp4-content') == '')
			||(get_option('tmp4-sidebar') == '')
			||(get_option('tmp4-optin') == '')
			||(get_option('tmp4-footer1') == '')
			||(get_option('tmp4-footer2') == '')
			||(get_option('tmp4-footer3') == '')
			||(get_option('tmp4-footer4') == '')
			||(get_option('tmp5-bg') == '')
			||(get_option('tmp5-header') == '')
			||(get_option('tmp5-logo') == '')
			||(get_option('tmp5-tagline') == '')
			||(get_option('tmp5-logoIMG') == '')
			||(get_option('tmp5-content') == '')
			||(get_option('tmp5-sidebar') == '')
			||(get_option('tmp5-optin') == '')
			||(get_option('tmp5-footer1') == '')
			||(get_option('tmp5-footer2') == '')
			||(get_option('tmp5-footer3') == '')
			||(get_option('tmp5-footer4') == '')
			||(get_option('tmp1-layout') == '')
			||(get_option('tmp2-layout') == '')
			||(get_option('tmp3-layout') == '')
			||(get_option('tmp4-layout') == '')
			||(get_option('tmp5-layout') == '')
			
			||(get_option('facebook') == '')
			
			||(get_option('tmp1-video') == '')
			||(get_option('tmp2-video') == '')
			||(get_option('tmp3-video') == '')
			||(get_option('tmp4-video') == '')
			||(get_option('tmp5-video') == '')
			
			||(get_option('tmp1-email') == '')
			||(get_option('tmp2-email') == '')
			||(get_option('tmp3-email') == '')
			||(get_option('tmp4-email') == '')
			||(get_option('tmp5-email') == '')
			
		) {
			 add_option('top-headline', '');
			 add_option('calltoaction-headline', '');
			 add_option('calltoaction-subheadline', '');
			 add_option('calltoaction-graphic', '');
			 add_option('banner-text', '');
		     add_option('banner-headline', '');
			 add_option('image-url', '');
			 add_option('autoresponder1', '');
			 add_option('video-embed', '');
			 add_option('day1', '');
			 add_option('day1-d', '');
			 add_option('day2', '');
			 add_option('day2-d', '');
			 add_option('day3', '');
			 add_option('day3-d', '');
			 add_option('day4', '');
			 add_option('day4-d', '');
			 add_option('day5', '');
			 add_option('day5-d', '');
			 add_option('bg', '');
			 add_option('type', '');
			 add_option('inner-bg', '');
			 add_option('icon', '');
			 add_option('banner', '');
			 add_option('optin-pop', '');
			 add_option('tmp1-bg', '');
			 add_option('tmp1-header', '');
			 add_option('tmp1-logo', '');
			 add_option('tmp1-tagline', '');
			 add_option('tmp1-logoIMG', '');
			 add_option('tmp1-content', '');
			 add_option('tmp1-sidebar', '');
			 add_option('tmp1-optin', '');
			 add_option('tmp1-footer1', '');
			 add_option('tmp1-footer2', '');
			 add_option('tmp1-footer3', '');
			 add_option('tmp1-footer4', '');
			 add_option('tmp2-bg', '');
			 add_option('tmp2-header', '');
			 add_option('tmp2-logo', '');
			 add_option('tmp2-tagline', '');
			 add_option('tmp2-logoIMG', '');
			 add_option('tmp2-content', '');
			 add_option('tmp2-sidebar', '');
			 add_option('tmp2-optin', '');
			 add_option('tmp2-footer1', '');
			 add_option('tmp2-footer2', '');
			 add_option('tmp2-footer3', '');
			 add_option('tmp2-footer4', '');
			 add_option('tmp3-bg', '');
			 add_option('tmp3-header', '');
			 add_option('tmp3-logo', '');
			 add_option('tmp3-tagline', '');
			 add_option('tmp3-logoIMG', '');
			 add_option('tmp3-content', '');
			 add_option('tmp3-sidebar', '');
			 add_option('tmp3-optin', '');
			 add_option('tmp3-footer1', '');
			 add_option('tmp3-footer2', '');
			 add_option('tmp3-footer3', '');
			 add_option('tmp3-footer4', '');
			 add_option('tmp4-bg', '');
			 add_option('tmp4-header', '');
			 add_option('tmp4-logo', '');
			 add_option('tmp4-tagline', '');
			 add_option('tmp4-logoIMG', '');
			 add_option('tmp4-content', '');
			 add_option('tmp4-sidebar', '');
			 add_option('tmp4-optin', '');
			 add_option('tmp4-footer1', '');
			 add_option('tmp4-footer2', '');
			 add_option('tmp4-footer3', '');
			 add_option('tmp4-footer4', '');
			 add_option('tmp5-bg', '');
			 add_option('tmp5-header', '');
			 add_option('tmp5-logo', '');
			 add_option('tmp5-tagline', '');
			 add_option('tmp5-logoIMG', '');
			 add_option('tmp5-content', '');
			 add_option('tmp5-sidebar', '');
			 add_option('tmp5-optin', '');
			 add_option('tmp5-footer1', '');
			 add_option('tmp5-footer2', '');
			 add_option('tmp5-footer3', '');
			 add_option('tmp5-footer4', '');
			 
			 add_option('tmp1-layout', '');
			 add_option('tmp2-layout', '');
			 add_option('tmp3-layout', '');
			 add_option('tmp4-layout', '');
			 add_option('tmp5-layout', '');
			 
			 add_option('facebook', '');
			 
			 add_option('tmp1-video', '');
			 add_option('tmp2-video', '');
			 add_option('tmp3-video', '');
			 add_option('tmp4-video', '');
			 add_option('tmp5-video', '');
			 
			 add_option('tmp1-email', '');
			 add_option('tmp2-email', '');
			 add_option('tmp3-email', '');
			 add_option('tmp4-email', '');
			 add_option('tmp5-email', '');
		}
	
    if ( $_GET['page'] == basename(__FILE__) ) {
    
        if ( 'save' == $_REQUEST['action'] ) {

             if(isset($_REQUEST['top-headline'])) {
				update_option('top-headline', $_REQUEST['top-headline']);
			} 
			 if(isset($_REQUEST['calltoaction-headline'])) {
				update_option('calltoaction-headline', $_REQUEST['calltoaction-headline']);
			} 
			 if(isset($_REQUEST['calltoaction-subheadline'])) {
				update_option('calltoaction-subheadline', $_REQUEST['calltoaction-subheadline']);
			} 
			 if(isset($_REQUEST['calltoaction-graphic'])) {
				update_option('calltoaction-graphic', $_REQUEST['calltoaction-graphic']);
			} 
			 if(isset($_REQUEST['banner-text'])) {
				update_option('banner-text', $_REQUEST['banner-text']);
			} 
			 if(isset($_REQUEST['banner-headline'])) {
				update_option('banner-headline', $_REQUEST['banner-headline']);
			} 
			 if(isset($_REQUEST['image-url'])) {
				update_option('image-url', $_REQUEST['image-url']);
			} 
			 if(isset($_REQUEST['autoresponder1'])) {
				update_option('autoresponder1', $_REQUEST['autoresponder1']);
			} 
			 if(isset($_REQUEST['video-embed'])) {
				update_option('video-embed', $_REQUEST['video-embed']);
			} 
			 if(isset($_REQUEST['day1'])) {
				update_option('day1', $_REQUEST['day1']);
			} 
			 if(isset($_REQUEST['day1-d'])) {
				update_option('day1-d', $_REQUEST['day1-d']);
			} 
			 if(isset($_REQUEST['day2'])) {
				update_option('day2', $_REQUEST['day2']);
			} 
			 if(isset($_REQUEST['day2-d'])) {
				update_option('day2-d', $_REQUEST['day2-d']);
			} 
			 if(isset($_REQUEST['day2'])) {
				update_option('day2', $_REQUEST['day2']);
			} 
			 if(isset($_REQUEST['day2-d'])) {
				update_option('day2-d', $_REQUEST['day2-d']);
			} 
			 if(isset($_REQUEST['day3'])) {
				update_option('day3', $_REQUEST['day3']);
			} 
			 if(isset($_REQUEST['day3-d'])) {
				update_option('day3-d', $_REQUEST['day3-d']);
			} 
			 if(isset($_REQUEST['day4'])) {
				update_option('day4', $_REQUEST['day4']);
			} 
			 if(isset($_REQUEST['day4-d'])) {
				update_option('day4-d', $_REQUEST['day4-d']);
			} 
			 if(isset($_REQUEST['day5'])) {
				update_option('day5', $_REQUEST['day5']);
			} 
			 if(isset($_REQUEST['day5-d'])) {
				update_option('day5-d', $_REQUEST['day5-d']);
			} 
			if(isset($_REQUEST['bg'])) {
				update_option('bg', $_REQUEST['bg']);
			} 
			if(isset($_REQUEST['inner-bg'])) {
				update_option('inner-bg', $_REQUEST['inner-bg']);
			} 
			if(isset($_REQUEST['type'])) {
				update_option('type', $_REQUEST['type']);
			} 
			if(isset($_REQUEST['icon'])) {
				update_option('icon', $_REQUEST['icon']);
			} 
			if(isset($_REQUEST['banner'])) {
				update_option('banner', $_REQUEST['banner']);
			} 
			if(isset($_REQUEST['optin-pop'])) {
				update_option('optin-pop', $_REQUEST['optin-pop']);
			} 
			
			
			if(isset($_REQUEST['tmp1-bg'])) {
				update_option('tmp1-bg', $_REQUEST['tmp1-bg']);
			} 
			if(isset($_REQUEST['tmp1-header'])) {
				update_option('tmp1-header', $_REQUEST['tmp1-header']);
			} 
			if(isset($_REQUEST['tmp1-logo'])) {
				update_option('tmp1-logo', $_REQUEST['tmp1-logo']);
			} 
			if(isset($_REQUEST['tmp1-tagline'])) {
				update_option('tmp1-tagline', $_REQUEST['tmp1-tagline']);
			} 
			if(isset($_REQUEST['tmp1-logoIMG'])) {
				update_option('tmp1-logoIMG', $_REQUEST['tmp1-logoIMG']);
			} 
			if(isset($_REQUEST['tmp1-content'])) {
				update_option('tmp1-content',  htmlentities(stripslashes($_REQUEST['tmp1-content'])));
			} 
			if(isset($_REQUEST['tmp1-sidebar'])) {
				update_option('tmp1-sidebar',  htmlentities(stripslashes($_REQUEST['tmp1-sidebar'])));
			} 
			if(isset($_REQUEST['tmp1-optin'])) {
				update_option('tmp1-optin',  htmlentities(stripslashes($_REQUEST['tmp1-optin'])));
			} 
			if(isset($_REQUEST['tmp1-footer1'])) {
				update_option('tmp1-footer1',  htmlentities(stripslashes($_REQUEST['tmp1-footer1'])));
			} 
			if(isset($_REQUEST['tmp1-footer2'])) {
				update_option('tmp1-footer2',  htmlentities(stripslashes($_REQUEST['tmp1-footer2'])));
			} 
			if(isset($_REQUEST['tmp1-footer3'])) {
				update_option('tmp1-footer3',  htmlentities(stripslashes($_REQUEST['tmp1-footer3'])));
			} 
			if(isset($_REQUEST['tmp1-footer4'])) {
				update_option('tmp1-footer4',  htmlentities(stripslashes($_REQUEST['tmp1-footer4'])));
			} 
			if(isset($_REQUEST['tmp2-header'])) {
				update_option('tmp2-header', $_REQUEST['tmp2-header']);
			} 
			if(isset($_REQUEST['tmp2-logo'])) {
				update_option('tmp2-logo', $_REQUEST['tmp2-logo']);
			} 
			if(isset($_REQUEST['tmp2-tagline'])) {
				update_option('tmp2-tagline', $_REQUEST['tmp2-tagline']);
			} 
			if(isset($_REQUEST['tmp2-logoIMG'])) {
				update_option('tmp2-logoIMG', $_REQUEST['tmp2-logoIMG']);
			} 
			if(isset($_REQUEST['tmp2-content'])) {
				update_option('tmp2-content',  htmlentities(stripslashes($_REQUEST['tmp2-content'])));
			} 
			if(isset($_REQUEST['tmp2-sidebar'])) {
				update_option('tmp2-sidebar',  htmlentities(stripslashes($_REQUEST['tmp2-sidebar'])));
			} 
			if(isset($_REQUEST['tmp2-optin'])) {
				update_option('tmp2-optin',  htmlentities(stripslashes($_REQUEST['tmp2-optin'])));
			} 
			if(isset($_REQUEST['tmp2-footer1'])) {
				update_option('tmp2-footer1',  htmlentities(stripslashes($_REQUEST['tmp2-footer1'])));
			} 
			if(isset($_REQUEST['tmp2-footer2'])) {
				update_option('tmp2-footer2',  htmlentities(stripslashes($_REQUEST['tmp2-footer2'])));
			} 
			if(isset($_REQUEST['tmp2-footer3'])) {
				update_option('tmp2-footer3',  htmlentities(stripslashes($_REQUEST['tmp2-footer3'])));
			} 
			if(isset($_REQUEST['tmp2-footer4'])) {
				update_option('tmp2-footer4',  htmlentities(stripslashes($_REQUEST['tmp2-footer4'])));
			} 
			
			if(isset($_REQUEST['tmp3-header'])) {
				update_option('tmp3-header', $_REQUEST['tmp3-header']);
			} 
			if(isset($_REQUEST['tmp3-logo'])) {
				update_option('tmp3-logo', $_REQUEST['tmp3-logo']);
			} 
			if(isset($_REQUEST['tmp3-tagline'])) {
				update_option('tmp3-tagline', $_REQUEST['tmp3-tagline']);
			} 
			if(isset($_REQUEST['tmp3-logoIMG'])) {
				update_option('tmp3-logoIMG', $_REQUEST['tmp3-logoIMG']);
			} 
			if(isset($_REQUEST['tmp3-content'])) {
				update_option('tmp3-content',  htmlentities(stripslashes($_REQUEST['tmp3-content'])));
			} 
			if(isset($_REQUEST['tmp3-sidebar'])) {
				update_option('tmp3-sidebar',  htmlentities(stripslashes($_REQUEST['tmp3-sidebar'])));
			} 
			if(isset($_REQUEST['tmp3-optin'])) {
				update_option('tmp3-optin',  htmlentities(stripslashes($_REQUEST['tmp3-optin'])));
			} 
			if(isset($_REQUEST['tmp3-footer1'])) {
				update_option('tmp3-footer1',  htmlentities(stripslashes($_REQUEST['tmp3-footer1'])));
			} 
			if(isset($_REQUEST['tmp3-footer2'])) {
				update_option('tmp3-footer2',  htmlentities(stripslashes($_REQUEST['tmp3-footer2'])));
			} 
			if(isset($_REQUEST['tmp3-footer3'])) {
				update_option('tmp3-footer3',  htmlentities(stripslashes($_REQUEST['tmp3-footer3'])));
			} 
			if(isset($_REQUEST['tmp3-footer4'])) {
				update_option('tmp3-footer4',  htmlentities(stripslashes($_REQUEST['tmp3-footer4'])));
			} 
			
			
			if(isset($_REQUEST['tmp4-header'])) {
				update_option('tmp4-header', $_REQUEST['tmp4-header']);
			} 
			if(isset($_REQUEST['tmp4-logo'])) {
				update_option('tmp4-logo', $_REQUEST['tmp4-logo']);
			} 
			if(isset($_REQUEST['tmp4-tagline'])) {
				update_option('tmp4-tagline', $_REQUEST['tmp4-tagline']);
			} 
			if(isset($_REQUEST['tmp4-logoIMG'])) {
				update_option('tmp4-logoIMG', $_REQUEST['tmp4-logoIMG']);
			} 
			if(isset($_REQUEST['tmp4-content'])) {
				update_option('tmp4-content',  htmlentities(stripslashes($_REQUEST['tmp4-content'])));
			} 
			if(isset($_REQUEST['tmp4-sidebar'])) {
				update_option('tmp4-sidebar',  htmlentities(stripslashes($_REQUEST['tmp4-sidebar'])));
			} 
			if(isset($_REQUEST['tmp4-optin'])) {
				update_option('tmp4-optin',  htmlentities(stripslashes($_REQUEST['tmp4-optin'])));
			} 
			if(isset($_REQUEST['tmp4-footer1'])) {
				update_option('tmp4-footer1',  htmlentities(stripslashes($_REQUEST['tmp4-footer1'])));
			} 
			if(isset($_REQUEST['tmp4-footer2'])) {
				update_option('tmp4-footer2',  htmlentities(stripslashes($_REQUEST['tmp4-footer2'])));
			} 
			if(isset($_REQUEST['tmp4-footer3'])) {
				update_option('tmp4-footer3',  htmlentities(stripslashes($_REQUEST['tmp4-footer3'])));
			} 
			if(isset($_REQUEST['tmp4-footer4'])) {
				update_option('tmp4-footer4',  htmlentities(stripslashes($_REQUEST['tmp4-footer4'])));
			} 
			
			if(isset($_REQUEST['tmp4-header'])) {
				update_option('tmp4-header', $_REQUEST['tmp4-header']);
			} 
			if(isset($_REQUEST['tmp4-logo'])) {
				update_option('tmp4-logo', $_REQUEST['tmp4-logo']);
			} 
			if(isset($_REQUEST['tmp4-tagline'])) {
				update_option('tmp4-tagline', $_REQUEST['tmp4-tagline']);
			} 
			if(isset($_REQUEST['tmp4-logoIMG'])) {
				update_option('tmp4-logoIMG', $_REQUEST['tmp4-logoIMG']);
			} 
			if(isset($_REQUEST['tmp4-content'])) {
				update_option('tmp4-content',  htmlentities(stripslashes($_REQUEST['tmp4-content'])));
			} 
			if(isset($_REQUEST['tmp4-sidebar'])) {
				update_option('tmp4-sidebar',  htmlentities(stripslashes($_REQUEST['tmp4-sidebar'])));
			} 
			if(isset($_REQUEST['tmp4-optin'])) {
				update_option('tmp4-optin',  htmlentities(stripslashes($_REQUEST['tmp4-optin'])));
			} 
			if(isset($_REQUEST['tmp4-footer1'])) {
				update_option('tmp4-footer1',  htmlentities(stripslashes($_REQUEST['tmp4-footer1'])));
			} 
			if(isset($_REQUEST['tmp4-footer2'])) {
				update_option('tmp4-footer2',  htmlentities(stripslashes($_REQUEST['tmp4-footer2'])));
			} 
			if(isset($_REQUEST['tmp4-footer3'])) {
				update_option('tmp4-footer3',  htmlentities(stripslashes($_REQUEST['tmp4-footer3'])));
			} 
			if(isset($_REQUEST['tmp4-footer4'])) {
				update_option('tmp4-footer4',  htmlentities(stripslashes($_REQUEST['tmp4-footer4'])));
			} 
			
			if(isset($_REQUEST['tmp1-layout'])) {
				update_option('tmp1-layout', $_REQUEST['tmp1-layout']);
			} 
			if(isset($_REQUEST['tmp2-layout'])) {
				update_option('tmp2-layout', $_REQUEST['tmp2-layout']);
			} 
			if(isset($_REQUEST['tmp3-layout'])) {
				update_option('tmp3-layout', $_REQUEST['tmp3-layout']);
			} 
			if(isset($_REQUEST['tmp4-layout'])) {
				update_option('tmp4-layout', $_REQUEST['tmp4-layout']);
			} 
			if(isset($_REQUEST['tmp5-layout'])) {
				update_option('tmp5-layout', $_REQUEST['tmp5-layout']);
			} 
			
			if(isset($_REQUEST['facebook'])) {
				update_option('facebook', $_REQUEST['facebook']);
			} 
			
			if(isset($_REQUEST['tmp1-video'])) {
				update_option('tmp1-video',  htmlentities(stripslashes($_REQUEST['tmp1-video'])));
			} 
			if(isset($_REQUEST['tmp2-video'])) {
				update_option('tmp2-video',  htmlentities(stripslashes($_REQUEST['tmp2-video'])));
			} 
			if(isset($_REQUEST['tmp3-video'])) {
				update_option('tmp3-video',  htmlentities(stripslashes($_REQUEST['tmp3-video'])));
			} 
			if(isset($_REQUEST['tmp4-video'])) {
				update_option('tmp4-video',  htmlentities(stripslashes($_REQUEST['tmp4-video'])));
			} 
			if(isset($_REQUEST['tmp5-video'])) {
				update_option('tmp5-video',  htmlentities(stripslashes($_REQUEST['tmp5-video'])));
			} 
			
			
			if(isset($_REQUEST['tmp1-email'])) {
				update_option('tmp1-email',  htmlentities(stripslashes($_REQUEST['tmp1-email'])));
			} 
			if(isset($_REQUEST['tmp2-email'])) {
				update_option('tmp2-email',  htmlentities(stripslashes($_REQUEST['tmp2-email'])));
			} 
			if(isset($_REQUEST['tmp3-email'])) {
				update_option('tmp3-email',  htmlentities(stripslashes($_REQUEST['tmp3-email'])));
			} 
			if(isset($_REQUEST['tmp4-email'])) {
				update_option('tmp4-email',  htmlentities(stripslashes($_REQUEST['tmp4-email'])));
			} 
			if(isset($_REQUEST['tmp5-email'])) {
				update_option('tmp5-email',  htmlentities(stripslashes($_REQUEST['tmp5-email'])));
			} 
        } 
    }

    add_theme_page($themename." Options", "".$themename." Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');

}

function mytheme_admin() {

    global $themename, $shortname, $options;

    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
    
?>
 	
	
	<style type="text/css">
		/*
		 :: Main CSS File
		 -----------------
			 + Typgraphy
			 + Layout
			 + More
		 */
		
		@font-face {
		    font-family: 'LeagueGothicRegular';
		    src: url('../wp-content/themes/WPLaunch/fonts/League_Gothic-webfont.eot');
		    src: url('../wp-content/themes/WPLaunch/fonts/League_Gothic-webfont.eot?iefix') format('eot'),
		         url('../wp-content/themes/WPLaunch/fonts/League_Gothic-webfont.woff') format('woff'),
		         url('../wp-content/themes/WPLaunch/fonts/League_Gothic-webfont.ttf') format('truetype'),
		         url('../wp-content/themes/WPLaunch/fonts/League_Gothic-webfont.svg#webfont1Lb5Pdit') format('svg');
		    font-weight: normal;
		    font-style: normal;
		
		}
		
		body {
			background: #f9f9f9;
			font-family:  verdana, Sans-serif;
			font-size: 11px;
		}
		 
		* {
			margin: 0;
			padding: 0;
		}
		
		p {
			padding: 5px 10px;
			color: #555;
			line-height: 1.6em;	
		}
		a {
			color: #225a99;
		}
		
		.clear {
			clear: both;
		}
		
		.clearfix:after {
		    content: "."; 
		    display: block; 
		    height: 0; 
		    clear: both; 
		    visibility: hidden;
		}
		
		.clearfix {display: inline-block;}
		
		* html .clearfix {height: 1%;}
		.clearfix {display: block;}
		
		#admin-wrapper {
			width: 650px;
			margin: 20px;
			background: url(../wp-content/themes/WPLaunch/admin/bg.gif) repeat-x top #4e4e4e;
			box-shadow: 1px 1px 8px #999;
			-moz-box-shadow: 1px 1px 8px #999;
			-webkit-box-shadow: 1px 1px 8px #999;
			-moz-border-radius: 10px;
			-webkit-border-radius: 10px;
			-khtml-border-radius: 10px; 
			border-radius: 10px;
		}
		#admin-header {
			padding: 20px;
			padding-top: 8px;
			color: #fff;
		}
			#admin-header h1 {
				font-size: 36px;
				font-family: 'LeagueGothicRegular', Verdana, sans-serif;
				color: #fff;
				text-shadow: 1px 1px 1px #333;
				float: left;
			}
			#admin-header h4 {
				font-size: 16px;
				float: right;
				font-family: Georgia,serif;
				color: #72baec;
				text-shadow: 1px 1px 1px #0f4a74;
				font-weight: normal;
				padding-top: 1px;
				font-style: italic;
			}
		#admin-nav {
			list-style: none;
			padding-top: 2px;
			clear: both;		
		}
			#admin-nav li {
				float: left;
				display: block;
			}
			#admin-nav li a {
				float: left;
				display: block;
				padding: 8px;
				text-decoration: none;
				color: #fff;
				border-left: 1px solid #272727;
				border-right: 1px solid #363636;
				font-size: 11px;
			}
				#admin-nav li a:hover {
					background: -webkit-gradient(linear, left top, left bottom, from(#393939), to(#585858));
					background: -moz-linear-gradient(top,  #393939,  #585858);
					filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#393939', endColorstr='#585858');
				}
				#admin-nav li a.active {
					background: -webkit-gradient(linear, left top, left bottom, from(#393939), to(#585858));
					background: -moz-linear-gradient(top,  #393939,  #585858);
					filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#393939', endColorstr='#585858');
				}
		#admin-content {
			clear: both;
			padding: 20px;
			padding-top: 4px;
		}
		.admin-tab {
			background: url(../wp-content/themes/WPLaunch/admin/inner.gif) repeat-x top #f9f9f9;
			-moz-border-radius: 10px;
			-webkit-border-radius: 10px;
			-khtml-border-radius: 10px; 
			border-radius: 10px;
			box-shadow: 1px 1px 8px #222;
			-moz-box-shadow: 1px 1px 8px #222;
			-webkit-box-shadow: 1px 1px 8px #222;
		}
		
		form input.submit {
			width: 151px;
			height: 46px;
			text-align: center;
			color: #fff;
			padding-top: 10px;
			font-size: 17px;
			letter-spacing:-1px;
			text-shadow: 1px 1px 0 #22620b;
			font-weight: bold;
			border: none;
			margin: 20px;
			margin-left: 200px;
			cursor: pointer;
			background: url(../wp-content/themes/WPLaunch/admin/button.gif);
		}
			.admin-tab h3 {
				padding: 7px;
				padding-left: 30px;
				color: #888;
				text-transform: uppercase;
				text-shadow: 1px 1px 1px #fff;
			}
		.tab {
			padding: 20px;
			padding-top: 10px
		}
			.tab h2 {
				font-size: 36px;
				font-family: 'LeagueGothicRegular', Verdana, sans-serif;
				color: #b03636;
				padding: 0 10px;
			}
		#admin-footer {
			width: 650px;
			margin: 10px;
			text-align: center;
			color: #888;
			padding: 10px;
		}
		.floats {
			float: left;
			width: 250px;
			padding: 15px;
		}
			.floats strong {
				padding: 8px 5px;
				font-size: 13px;
			}
			.floats input[type=text] {
				padding: 5px;
				width: 250px;
				margin: 8px 0;
				font-size: 14px;
			}
			.floats select {
				padding: 5px;
				width: 250px;
				margin: 8px 0;
				font-size: 14px;
			}
		.big {
			float: left;
			width: 500px;
			padding: 15px;
		}
			.big strong {
				padding: 8px 5px;
				font-size: 13px;
			}
			.big textarea {
				padding: 5px;
				width: 528px;
				height: 130px;
				margin: 8px 0;
				font-size: 14px;
			}
			.big input[type=text] {
				padding: 5px;
				width: 250px;
				margin: 8px 0;
				font-size: 14px;
			}
		hr {
			display: block;
			border: none;
			border-bottom: 1px dashed #ccc;
			margin: 10px 0;
			clear: both;
		}
		#bloglayout {
			border: 1px solid #ccc;
			padding: 10px;
			-moz-border-radius: 10px;
			-webkit-border-radius: 10px;
			-khtml-border-radius: 10px; 
			border-radius: 10px;
			margin: 10px 0;
			background: url(../wp-content/themes/WPLaunch/images/adminlayout.gif) repeat-x top #fff;
		}
		#admin-content  .bloglayout h3 {
			border: 1px dashed #eee;
			padding: 10px;
			float: left;
			background: url(../wp-content/themes/WPLaunch/images/drag.png) no-repeat left #fafafa;
			padding-left: 25px;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			-khtml-border-radius: 5px; 
			border-radius: 5px;
			margin: 10px;
			font-weight: normal;
			letter-spacing: 1px;
			font-size: 11px;
			cursor: pointer;
		}
		.bigColumn {
			border: 1px dashed #ccc;
			padding: 5px;
			-moz-border-radius: 10px;
			-webkit-border-radius: 10px;
			-khtml-border-radius: 10px; 
			border-radius: 10px;
		}
		.blogBanner {
			background: url(../wp-content/themes/WPLaunch/images/banner3.jpg) repeat;
		}
		#blogContent {
			border: 1px dashed #ccc;
			padding: 5px;
			width: 310px;
			float: left;
			-moz-border-radius: 10px;
			-webkit-border-radius: 10px;
			-khtml-border-radius: 10px; 
			border-radius: 10px;
			margin: 10px 0;
		}
		#blogSidebar {
			border: 1px dashed #ccc;
			padding: 5px;
			width: 200px;
			float: right;
			-moz-border-radius: 10px;
			-webkit-border-radius: 10px;
			-khtml-border-radius: 10px; 
			border-radius: 10px;
			margin: 10px 0;
		}
		div.column {
			width: 165px;
			height: 55px;
			margin: 5px;
			background: #eee;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			-khtml-border-radius: 5px; 
			border-radius: 5px;
			border: 1px dashed #ccc;
			float: left;
		}
		div.smallColumn {
			width: 120px;
			height: 55px;
			margin: 5px;
			background: #eee;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			-khtml-border-radius: 5px; 
			border-radius: 5px;
			border: 1px dashed #ccc;
			float: left;
		}
		ul#pageTemplates {
			list-style: none;
			margin: 10px;
			margin-left: 15px;
			-moz-border-radius: 10px;
			-webkit-border-radius: 10px;
			-khtml-border-radius: 10px; 
			border-radius: 10px;
		}
		ul#pageTemplates li {
			float: left;
			display: block;
		}
		ul#pageTemplates li a {
			float: left;
			display: block;
			padding: 8px;
			text-decoration: none;
			font-size: 11px;
			border: 1px solid #ccc;
			-moz-border-radius: 10px;
			-webkit-border-radius: 10px;
			-khtml-border-radius: 10px; 
			border-radius: 10px;
			margin-right: 5px;
			color: #888;
		}
		ul#pageTemplates li a.active {
			background: #ddd;
		}
	</style>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
 	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		  	$('#a-tab1').click(function() {
			  $('#tab1').show(); $('#a-tab1').addClass('active');
			  
			  $('#tab2').hide(); $('#a-tab2').removeClass('active');
			  $('#tab3').hide(); $('#a-tab3').removeClass('active');
			  $('#tab4').hide(); $('#a-tab4').removeClass('active');
			  $('#tab5').hide(); $('#a-tab5').removeClass('active');
			  $('#tab6').hide(); $('#a-tab6').removeClass('active');
			});
			
			$('#a-tab2').click(function() {
			  $('#tab2').show(); $('#a-tab2').addClass('active');
			  
			  $('#tab1').hide(); $('#a-tab1').removeClass('active');
			  $('#tab3').hide(); $('#a-tab3').removeClass('active');
			  $('#tab4').hide(); $('#a-tab4').removeClass('active');
			  $('#tab5').hide(); $('#a-tab5').removeClass('active');
			  $('#tab6').hide(); $('#a-tab6').removeClass('active');
			});
			
			$('#a-tab3').click(function() {
			  $('#tab3').show(); $('#a-tab3').addClass('active');
			  
			  $('#tab2').hide(); $('#a-tab2').removeClass('active');
			  $('#tab1').hide(); $('#a-tab1').removeClass('active');
			  $('#tab4').hide(); $('#a-tab4').removeClass('active');
			  $('#tab5').hide(); $('#a-tab5').removeClass('active');
			  $('#tab6').hide(); $('#a-tab6').removeClass('active');
			});
			
			$('#a-tab4').click(function() {
			  $('#tab4').show(); $('#a-tab4').addClass('active');
			  
			  $('#tab2').hide(); $('#a-tab2').removeClass('active');
			  $('#tab3').hide(); $('#a-tab3').removeClass('active');
			  $('#tab1').hide(); $('#a-tab1').removeClass('active');
			  $('#tab5').hide(); $('#a-tab5').removeClass('active');
			  $('#tab6').hide(); $('#a-tab6').removeClass('active');
			});
			
			$('#a-tab5').click(function() {
			  $('#tab5').show(); $('#a-tab5').addClass('active');
			  
			  $('#tab2').hide(); $('#a-tab2').removeClass('active');
			  $('#tab3').hide(); $('#a-tab3').removeClass('active');
			  $('#tab4').hide(); $('#a-tab4').removeClass('active');
			  $('#tab1').hide(); $('#a-tab1').removeClass('active');
			  $('#tab6').hide(); $('#a-tab6').removeClass('active');
			});
			
			$('#a-tab6').click(function() {
			  $('#tab6').show(); $('#a-tab6').addClass('active');
			  
			  $('#tab2').hide(); $('#a-tab2').removeClass('active');
			  $('#tab3').hide(); $('#a-tab3').removeClass('active');
			  $('#tab4').hide(); $('#a-tab4').removeClass('active');
			  $('#tab1').hide(); $('#a-tab1').removeClass('active');
			  $('#tab5').hide(); $('#a-tab5').removeClass('active');
			});
			
			
			$('#b-tab1').click(function() {
			  $('#tab1-b').show(); $('#b-tab1').addClass('active');
			  
			  $('#tab2-b').hide(); $('#b-tab2').removeClass('active');
			  $('#tab3-b').hide(); $('#b-tab3').removeClass('active');
			  $('#tab4-b').hide(); $('#b-tab4').removeClass('active');
			  $('#tab5-b').hide(); $('#b-tab5').removeClass('active');
			});
			
			$('#b-tab2').click(function() {
			  $('#tab2-b').show(); $('#b-tab2').addClass('active');
			  
			  $('#tab1-b').hide(); $('#b-tab1').removeClass('active');
			  $('#tab3-b').hide(); $('#b-tab3').removeClass('active');
			  $('#tab4-b').hide(); $('#b-tab4').removeClass('active');
			  $('#tab5-b').hide(); $('#b-tab5').removeClass('active');
			});
			
			$('#b-tab3').click(function() {
			  $('#tab3-b').show(); $('#b-tab3').addClass('active');
			  
			  $('#tab2-b').hide(); $('#b-tab2').removeClass('active');
			  $('#tab1-b').hide(); $('#b-tab1').removeClass('active');
			  $('#tab4-b').hide(); $('#b-tab4').removeClass('active');
			  $('#tab5-b').hide(); $('#b-tab5').removeClass('active');
			});
			
			$('#b-tab4').click(function() {
			  $('#tab4-b').show(); $('#b-tab4').addClass('active');
			  
			  $('#tab2-b').hide(); $('#b-tab2').removeClass('active');
			  $('#tab3-b').hide(); $('#b-tab3').removeClass('active');
			  $('#tab1-b').hide(); $('#b-tab1').removeClass('active');
			  $('#tab5-b').hide(); $('#b-tab5').removeClass('active');
			});
			
			$('#b-tab5').click(function() {
			  $('#tab5-b').show(); $('#b-tab5').addClass('active');
			  
			  $('#tab2-b').hide(); $('#b-tab2').removeClass('active');
			  $('#tab3-b').hide(); $('#b-tab3').removeClass('active');
			  $('#tab4-b').hide(); $('#b-tab4').removeClass('active');
			  $('#tab1-b').hide(); $('#b-tab1').removeClass('active');
			});
		});
	</script>
	<script type="text/javascript" src="../wp-content/themes/WPLaunch/admin/tiny_mce/jquery.tinymce.js"></script>
	<script type="text/javascript">
		
		$(document).ready(function() {
		 	 $('textarea').tinymce({
			// Location of TinyMCE script
			script_url : '../wp-content/themes/WPLaunch/admin/tiny_mce/tiny_mce.js',

			// General options
			theme : "advanced",
			plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,advlist",

			// Theme options
			theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,bullist,numlist,|blockquote,link,unlink,anchor,image,cleanup,code",
			theme_advanced_buttons2 : "formatselect,fontselect,fontsizeselect,|, forecolor, backcolor",
			theme_advanced_buttons3 : "",
			theme_advanced_buttons4 : "",
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			theme_advanced_statusbar_location : "bottom",
			theme_advanced_resizing : true,
			});
			
			
			 
			 $('#pageSave').click(function() {
			   $('#tmp1-content').text(tinyMCE.get('content'));
			   $('#tmp1-sidebar').text(tinyMCE.get('content'));
			   $('#tmp1-optin').text(tinyMCE.get('content'));
			   $('#tmp1-footer1').text(tinyMCE.get('content'));
			   $('#tmp1-footer2').text(tinyMCE.get('content'));
			   $('#tmp1-footer3').text(tinyMCE.get('content'));
			   $('#tmp1-footer4').text(tinyMCE.get('content'));
			   $('#tmp1-video').text(tinyMCE.get('content'));
			   $('#tmp1-email').text(tinyMCE.get('content'));
			 });
			 
			 $('#pageSave2').click(function() {
			   $('#tmp2-content').text(tinyMCE.get('content'));
			   $('#tmp2-sidebar').text(tinyMCE.get('content'));
			   $('#tmp2-optin').text(tinyMCE.get('content'));
			   $('#tmp2-footer1').text(tinyMCE.get('content'));
			   $('#tmp2-footer2').text(tinyMCE.get('content'));
			   $('#tmp2-footer3').text(tinyMCE.get('content'));
			   $('#tmp2-footer4').text(tinyMCE.get('content'));
			   $('#tmp2-video').text(tinyMCE.get('content'));
			   $('#tmp2-email').text(tinyMCE.get('content'));
			 });
			 
			 $('#pageSave3').click(function() {
			   $('#tmp3-content').text(tinyMCE.get('content'));
			   $('#tmp3-sidebar').text(tinyMCE.get('content'));
			   $('#tmp3-optin').text(tinyMCE.get('content'));
			   $('#tmp3-footer1').text(tinyMCE.get('content'));
			   $('#tmp3-footer2').text(tinyMCE.get('content'));
			   $('#tmp3-footer3').text(tinyMCE.get('content'));
			   $('#tmp3-footer4').text(tinyMCE.get('content'));
			   $('#tmp3-video').text(tinyMCE.get('content'));
			   $('#tmp3-email').text(tinyMCE.get('content'));
			 });
			 
			 $('#pageSave4').click(function() {
			   $('#tmp4-content').text(tinyMCE.get('content'));
			   $('#tmp4-sidebar').text(tinyMCE.get('content'));
			   $('#tmp4-optin').text(tinyMCE.get('content'));
			   $('#tmp4-footer1').text(tinyMCE.get('content'));
			   $('#tmp4-footer2').text(tinyMCE.get('content'));
			   $('#tmp4-footer3').text(tinyMCE.get('content'));
			   $('#tmp4-footer4').text(tinyMCE.get('content'));
			   $('#tmp4-video').text(tinyMCE.get('content'));
			   $('#tmp4-email').text(tinyMCE.get('content'));
			 });
			 
			 $('#pageSave5').click(function() {
			   $('#tmp5-content').text(tinyMCE.get('content'));
			   $('#tmp5-sidebar').text(tinyMCE.get('content'));
			   $('#tmp5-optin').text(tinyMCE.get('content'));
			   $('#tmp5-footer1').text(tinyMCE.get('content'));
			   $('#tmp5-footer2').text(tinyMCE.get('content'));
			   $('#tmp5-footer3').text(tinyMCE.get('content'));
			   $('#tmp5-footer4').text(tinyMCE.get('content'));
			   $('#tmp5-video').text(tinyMCE.get('content'));
			   $('#tmp5-email').text(tinyMCE.get('content'));
			 });
		});
	</script>
<div class="wrap">
	
	<div id="admin-wrapper" class="clearfix">
		<div id="admin-header">
			<h1>WP Launch Theme</h1>
			<h4>Customize Your Product Launch Site</h4>
			<ul id="admin-nav">
				<li><a href="#" id="a-tab1" class="active">Dashboard</a></li>
				<li><a href="#" id="a-tab2">Edit Banner</a></li>
				<li><a href="#" id="a-tab6">Create Page Template</a></li>
				<li><a href="#" id="a-tab3">Customize Theme</a></li>
				<li><a href="#" id="a-tab4">Opt-in Settings</a></li>
				<li><a href="#" id="a-tab5">Help Video</a></li>
			</ul>
		</div>
		<div id="admin-content">
			<div class="admin-tab" id="tab1" style="display: block">
				<h3>Dashboard</h3>
				<div class="tab">
					<h2>Start Customizing Your Blog</h2>
					<img src="http://cdn5.iconfinder.com/data/icons/meBaze-Freebies/128/dashboard.png" style="float: right; margin: 10px">
					<p><strong>Launch your product with WP Launch Theme..</strong> Using the admin options you will be able to get a customized look to create interest in your upcoming launch. Edit the homepage settings to effectively capture leads and comments.</p>
					<p>Edit the theme settings to control the overall look of your blog quickly and effectively. Finally create private pages that you can send your subscribers to once they sign up.</p>
					<form method="post">
						<div class="big">
							<strong>Facebook URL: (for all page templates)</strong><br/><br/>
							<input type="text" id="facebook" style="width: 530px;" name="facebook" value="<?php echo get_option('facebook'); ?>" />
						</div>
						<input name="save" type="submit" class="submit" value="Save changes" />    
						<input type="hidden" name="action" value="save" />
					</form>
				</div>
			</div>
				
				<div class="admin-tab" id="tab2" style="display: none">
				<h3>Banner Settings</h3>
					<div class="tab">
						<h2>Edit The Top Banner Text:</h2>
						<img src="http://cdn1.iconfinder.com/data/icons/CrystalClear/32x32/apps/kfm_home.png" style="float: right; margin: 20px">
						<p><strong>Collect new subscribers interested in your product...</strong> Edit the homepage to get interest, collect email and give update progress.</p>
						<hr />
						<form method="post">
						<div class="big">
							<strong>Banner Headline</strong>
							<input type="text" name="banner-headline" style="width: 540px"  value="<?php echo get_option('banner-headline'); ?>" />
						</div>
						<div class="big">
							<strong>Banner Text</strong><br/><br/>
							<textarea id="bannerText" class="wysiwyg" style="width: 530px;" name="banner-text"><?php echo get_option('banner-text'); ?></textarea>
						</div>
						<hr /><br/>
						<h2>Add Image or Video:</h2>
						<img src="http://cdn2.iconfinder.com/data/icons/oxygen/32x32/devices/drive-removable-media-usb.png" style="float: right; margin: 20px">
						<p><strong>Add image or embed video to homepage..</strong> To add an image provide URL to image or leave image box blank to show video.</p>
						<hr />
						<div class="big">
							<strong>Add Image URL:</strong>
							<input type="text" name="image-url" value="<?php echo get_option('image-url'); ?>" style="width: 520px;" />
						</div>
						
						<hr />
						<p><strong>To add your video, leave image URL blank.</strong> Add your video embed code to the file embed.php inside the WPLaunch theme folder. </p>
						
						<input name="save" type="submit" class="submit" value="Save changes" />    
						<input type="hidden" name="action" value="save" />
						</form>
					</div>
				</div>
				
				<div class="admin-tab" id="tab3" style="display: none">
				<h3>Theme Settings</h3>
					<div class="tab">
						<h2>Edit Theme Options:</h2>
						<img src="http://cdn1.iconfinder.com/data/icons/nuvola2/32x32/apps/iconthemes.png" style="float: right; margin: 20px">
						<p><strong>Edit the look and feel of your blog..</strong> Choose from different graphical, and style options to create a unique feel for your blog.</p>
						<hr />
						<form method="post">
						<div class="floats">
							<strong>Background Style:</strong>
							<select id="bg" name="bg">
								<option <?php if(get_option('bg') == '1') { echo "selected"; } ?> value="1">Default Black Style</option>
								<option <?php if(get_option('bg') == '2') { echo "selected"; } ?>  value="2">Blue Style</option>
								<option <?php if(get_option('bg') == '3') { echo "selected"; } ?>  value="3">Red Style</option>
								<option <?php if(get_option('bg') == '4') { echo "selected"; } ?> 
									value="4">Green Style</option>
								<option <?php if(get_option('bg') == '5') { echo "selected"; } ?> 
									value="5">Grey Style</option>
							</select>
						</div>
						<div class="floats">
							<strong>Content Background:</strong>
							<select id="innerBg" name="inner-bg">
								<option <?php if(get_option('inner-bg') == '1') { echo "selected"; } ?> value="1">Default Blue Style</option>
								<option <?php if(get_option('inner-bg') == '2') { echo "selected"; } ?> value="2">Dark Blue Style</option>
								<option <?php if(get_option('inner-bg') == '3') { echo "selected"; } ?> value="3">Black Style</option>
								<option <?php if(get_option('inner-bg') == '4') { echo "selected"; } ?> value="4">Red Style</option>
								<option <?php if(get_option('inner-bg') == '5') { echo "selected"; } ?> value="5">Light Gray Style</option>
								<option <?php if(get_option('inner-bg') == '6') { echo "selected"; } ?> value="6">Aqua Style</option>
								<option <?php if(get_option('inner-bg') == '7') { echo "selected"; } ?> value="7">Earth Style</option>
								<option <?php if(get_option('inner-bg') == '8') { echo "selected"; } ?> value="8">Grainy Black Style</option>
								<option <?php if(get_option('inner-bg') == '9') { echo "selected"; } ?> value="9">Sky Blue Style</option>
								<option <?php if(get_option('inner-bg') == '10') { echo "selected"; } ?> value="10">Very Light Style</option>
							</select>
						</div>
						<hr />
						<div class="floats">
							<strong>Typography Style:</strong>
							<select id="type" name="type">
								<option <?php if(get_option('type') == '1') { echo "selected"; } ?> value="1">Helvetica, Arial, Sans-serif;</option>
								<option <?php if(get_option('type') == '2') { echo "selected"; } ?> value="2">Verdana, Tahoma, Sans-serif;</option>
								<option <?php if(get_option('type') == '3') { echo "selected"; } ?> value="3">Georgia, "New Times Roman", serif;</option>
							</select>
						</div>
						<div class="floats">
							<strong>Call to Action Graphic:</strong>
							<select id="innerBg" name="calltoaction-graphic">
								<option <?php if(get_option('calltoaction-graphic') == '1') { echo "selected"; } ?> value="1">Light Red Pen Circle</option>
								<option <?php if(get_option('calltoaction-graphic') == '2') { echo "selected"; } ?> value="2">Large Thin Red Circle</option>
								<option <?php if(get_option('calltoaction-graphic') == '3') { echo "selected"; } ?> value="3">Small Green Pen Circle</option>
								<option <?php if(get_option('calltoaction-graphic') == '4') { echo "selected"; } ?> value="4">Fat Blue Pen Circle</option>
								<option <?php if(get_option('calltoaction-graphic') == '5') { echo "selected"; } ?> value="5">Small Red Arrow</option>
								
							</select>
						</div>
						<hr />
						<div class="floats">
							<strong>Banner Style:</strong>
							<select id="bg" name="banner">
								<option <?php if(get_option('banner') == '1') { echo "selected"; } ?> value="1">Default Blank Style</option>
								<option <?php if(get_option('banner') == '2') { echo "selected"; } ?>  value="2">Grainy Grey Style</option>
								<option <?php if(get_option('banner') == '3') { echo "selected"; } ?>  value="3">Grainy Black Style</option>
								<option <?php if(get_option('banner') == '4') { echo "selected"; } ?> 
									value="4">Dark Wood Style</option>
								<option <?php if(get_option('banner') == '5') { echo "selected"; } ?> 
									value="5">Normal Wood Style</option>
								<option <?php if(get_option('banner') == '6') { echo "selected"; } ?> 
									value="6">Fire & Flames Style</option>
								<option <?php if(get_option('banner') == '7') { echo "selected"; } ?> 
									value="7">Ocean Blue Style</option>
								<option <?php if(get_option('banner') == '8') { echo "selected"; } ?> 
									value="8">Blue Highlight Style</option>
								<option <?php if(get_option('banner') == '9') { echo "selected"; } ?> 
									value="9">Black Highlight Style</option>
								<option <?php if(get_option('banner') == '10') { echo "selected"; } ?> 
									value="10">Grey Highlight Style</option>
								<option <?php if(get_option('banner') == '11') { echo "selected"; } ?> 
									value="11">Red Highlight Style</option>
							</select>
						</div>
						<div class="floats">
							<strong>Pop-up Optin Style:</strong>
							<select id="bg" name="optin-pop">
								<option <?php if(get_option('optin-pop') == '1') { echo "selected"; } ?> value="1">Default Grey Style</option>
								<option <?php if(get_option('optin-pop') == '2') { echo "selected"; } ?>  value="2">Black Style</option>
								<option <?php if(get_option('optin-pop') == '3') { echo "selected"; } ?>  value="3">Dark Blue Style</option>
								<option <?php if(get_option('optin-pop') == '4') { echo "selected"; } ?>
									value="4">Green Style</option>
								<option <?php if(get_option('optin-pop') == '5') { echo "selected"; } ?>
									value="5">Brown Style</option>
							</select>
						</div>
						<input name="save" type="submit" class="submit" value="Save changes" />    
						<input type="hidden" name="action" value="save" />
						</form>
					</div>
				</div>
				
				<div class="admin-tab" id="tab4" style="display: none">
				<h3>Customize Email Opt-in</h3>
					<div class="tab bloglayout">
						<form method="post">
							<h2>Subscribe & Call to Action:</h2>
						<img src="http://cdn1.iconfinder.com/data/icons/CrystalClear/32x32/actions/agt_action_success.png" style="float: right; margin: 20px">
						<p><strong>Collect emails from homepage and blog..</strong> Add your auto-responder form code below and edit the call to action headline. Check support on how to get form code.</p>
						<div class="floats">
							<strong>Call to Action Headline</strong>
							<input type="text" name="calltoaction-headline" value="<?php echo get_option('calltoaction-headline'); ?>" />
						</div>
						<div class="floats">
							<strong>Call to Action Link</strong>
							<input type="text" name="calltoaction-subheadline" value="<?php echo get_option('calltoaction-subheadline'); ?>" />
						</div>
						<hr /><br/>
						<h2>Update Content</h2>
						<img src="http://cdn2.iconfinder.com/data/icons/dellipack/32/interact.png" style="float: right; margin: 20px">
						<p><strong>Daily, Weekly, Monthly or anything...</strong> These updates are to show new visitors what they should expect to see when they subscribe and how launch is going.</p>
						<hr />
						<div class="floats">
							<strong>Choose Icon Style:</strong>
							<select id="icon" name="icon">
								<option <?php if(get_option('icon') == '1') { echo "selected"; } ?> value="1">Calender Icon</option>
								<option <?php if(get_option('icon') == '2') { echo "selected"; } ?> value="2">Checkmark Icon</option>
								<option <?php if(get_option('icon') == '3') { echo "selected"; } ?> value="3">Checklist Icon</option>
								<option <?php if(get_option('icon') == '4') { echo "selected"; } ?> value="4">Calender2 Icon</option>
								<option <?php if(get_option('icon') == '5') { echo "selected"; } ?> value="5">Star Icon</option>
								<option <?php if(get_option('icon') == '6') { echo "selected"; } ?> value="6">Book Icon</option>
								<option <?php if(get_option('icon') == '7') { echo "selected"; } ?> value="7">Important Icon</option>
								<option <?php if(get_option('icon') == '8') { echo "selected"; } ?> value="8">Folder Icon</option>
								<option <?php if(get_option('icon') == '9') { echo "selected"; } ?> value="9">Lock Icon</option>
								<option <?php if(get_option('icon') == '10') { echo "selected"; } ?> value="10">Green Arrow Icon</option>
							</select>
						</div>
						<hr />
						<div class="day1">
								<div class="floats">
									<strong>Day #1 - Headline</strong>
									<input type="text" name="day1" value="<?php echo get_option('day1'); ?>" />
								</div>
								<div class="floats">
									<strong>Day #1 - Description</strong>
									<input type="text" name="day1-d" value="<?php echo get_option('day1-d'); ?>" />
								</div>
							<hr />
						</div>
						<div class="day2">
								<div class="floats">
									<strong>Day #2 - Headline</strong>
									<input type="text" name="day2" value="<?php echo get_option('day2'); ?>" />
								</div>
								<div class="floats">
									<strong>Day #2 - Description</strong>
									<input type="text" name="day2-d" value="<?php echo get_option('day2-d'); ?>" />
								</div>
							<hr />
						</div>
						<div class="day3">
								<div class="floats">
									<strong>Day #3 - Headline</strong>
									<input type="text" name="day3" value="<?php echo get_option('day3'); ?>" />
								</div>
								<div class="floats">
									<strong>Day #3 - Description</strong>
									<input type="text" name="day3-d" value="<?php echo get_option('day3-d'); ?>" />
								</div>
							<hr />
						</div>
						<div class="day4">
								<div class="floats">
									<strong>Day #4 - Headline</strong>
									<input type="text" name="day4" value="<?php echo get_option('day4'); ?>" />
								</div>
								<div class="floats">
									<strong>Day #4 - Description</strong>
									<input type="text" name="day4-d" value="<?php echo get_option('day4-d'); ?>" />
								</div>
							<hr />
						</div>
						<div class="day5">
								<div class="floats">
									<strong>Day #5 - Headline</strong>
									<input type="text" name="day5" value="<?php echo get_option('day5'); ?>" />
								</div>
								<div class="floats">
									<strong>Day #5 - Description</strong>
									<input type="text" name="day5-d" value="<?php echo get_option('day5-d'); ?>" />
								</div>
							<hr />
						</div>
						<input name="save" type="submit" class="submit" value="Save changes" />    
						<input type="hidden" name="action" value="save" />
						</form>
					</div>
				</div>
				
				<div class="admin-tab" id="tab5"  style="display: none">
				<h3>Support</h3>
					<div class="tab">
						<h2>How to Use WP Launch Theme:</h2>
						<img src="http://cdn5.iconfinder.com/data/icons/meBaze-Freebies/128/call-group.png" style="float: right; margin: 10px">
						<p><strong>Support and help on how to launch your product with WP Launch Theme..</strong> Here we will list some questions you may have and answer them. To explain how to use WP Launch Theme effectively with your launch you require, autoresponder, videos (optional) and a product.</p>
						<p>Use the blog to build interest and traffic to convert visitors to your autoresponder. From there you want to send them to Private pages that provide more information on your product. <strong>Do this to all subscribers and great ready for a super successful product launch!</strong></p>
						<p><strong>How to setup my new blog with WP Launch Theme?</strong></p>
						<p>If you are unsure on how to customize and setup your WP Launch Theme blog there has been a video that will explain most of the process for you.</p>
						
						
						<p><strong>How to Add Thumbnail to Each Post?</strong></p>
						<p>This is done through Custom Fields - go to a blog post to edit. Below should have box for custom field, if not - find Screen Options top right and check box Custom Fields. Then add the 'key' - Thumbnail (with capital) and then your link to image.</p>
					</div>
				</div>
				
				<div class="admin-tab" id="tab6" style="display: none">
				<h3>Create Page Template</h3>
					<div class="tab">
						<h2>Create New Page Templates</h2>
						<ul id="pageTemplates">
							<li><a href="#" id="b-tab1" class="active">Template #1</a></li>
							<li><a href="#" id="b-tab2">Template #2</a></li>
							<li><a href="#" id="b-tab3">Template #3</a></li>
							<li><a href="#" id="b-tab4">Template #4</a></li>
							<li><a href="#" id="b-tab5">Template #5</a></li>
						</ul>
						<div id="tab1-b">
							<form method="post">
							
							<div class="floats">
								<strong>Logo Title:</strong>
								<input type="text" name="tmp1-logo" value="<?php echo get_option('tmp1-logo'); ?>" />
							</div>
							<div class="floats">
								<strong>Logo Subheadline:</strong>
								<input type="text" name="tmp1-tagline" value="<?php echo get_option('tmp1-tagline'); ?>" />
							</div>
							<div class="big">
								<strong>URL to Header Image:( width 970px / height 130px )</strong>
								<input type="text" name="tmp1-logoIMG" style="width: 530px;" value="<?php echo get_option('tmp1-logoIMG'); ?>" />
							</div>
							<div class="big">
								<strong>Choose Layout:</strong>
								<select name="tmp1-layout">
									<option <?php if(get_option('tmp1-layout') == '1') { echo "selected"; } ?> value="1">2 Column (w/ Video Sidebar)</option>
									<option <?php if(get_option('tmp1-layout') == '2') { echo "selected"; } ?> value="2">2 Column (w/ Video Content)</option>
									<option <?php if(get_option('tmp1-layout') == '3') { echo "selected"; } ?> value="3">1 Column (w/ Video Content)</option>
									<option <?php if(get_option('tmp1-layout') == '4') { echo "selected"; } ?> value="4">1 Column (w/ No Video or Sidebar)</option>
								</select>
							</div>
							<br clear="all"/>
							<p><strong>Pro Tip:</strong> Click HTML to add your embed and autoresponder code below.</p>
							<div class="big">
								<strong>Video Embed:</strong><br/><br/>
								<textarea id="tmp1-video" style="width: 530px" name="tmp1-video"><?php echo get_option('tmp1-video'); ?></textarea>
							</div>
							<div class="big">
								<strong>Email Opt-in Code:</strong><br/><br/>
								<textarea id="tmp1-email" style="width: 530px" name="tmp1-email"><?php echo get_option('tmp1-email'); ?></textarea>
							</div>
							<div class="big">
								<strong>Main Content:</strong><br/><br/>
								<textarea id="tmp1-content" style="width: 530px" name="tmp1-content"><?php echo get_option('tmp1-content'); ?></textarea>
							</div>
							<div class="big">
								<strong>Optin Area: (shown above your optin1.php file)</strong><br/><br/>
								<textarea id="tmp1-optin"   style="width: 530px"name="tmp1-optin"><?php echo get_option('tmp1-optin'); ?></textarea>
							</div>
							<div class="big">
								<strong>Sidebar Content:</strong><br/><br/>
								<textarea id="tmp1-sidebar"  style="width: 530px" name="tmp1-sidebar"><?php echo get_option('tmp1-sidebar'); ?></textarea>
							</div>
							<div class="big">
								<strong>Footer Column #1:</strong><br/><br/>
								<textarea  id="tmp1-footer1"   style="width: 530px" name="tmp1-footer1"><?php echo get_option('tmp1-footer1'); ?></textarea>
							</div>
							<div class="big">
								<strong>Footer Column #2: (leave blank to merge with footer #1)</strong><br/><br/>
								<textarea id="tmp1-footer2"  style="width: 530px" name="tmp1-footer2"><?php echo get_option('tmp1-footer2'); ?></textarea>
							</div>
							<div class="big">
								<strong>Footer Column #3:</strong><br/><br/>
								<textarea  id="tmp1-footer3"  style="width: 530px" name="tmp1-footer3"><?php echo get_option('tmp1-footer3'); ?></textarea>
							</div>
							<div class="big">
								<strong>Footer Column #4: (leave blank to merge with footer #3)</strong><br/><br/>
								<textarea id="tmp1-footer4"   style="width: 530px" name="tmp1-footer4"><?php echo get_option('tmp1-footer4'); ?></textarea>
							</div>
							<br clear="all" />
							<input name="save" id="pageSave" type="submit" class="submit" value="Save changes" />    
							<input type="hidden"  name="action" value="save" />
							</form>
						</div>
						<div id="tab2-b"  style="display: none">
							<form method="post">
							
							<div class="floats">
								<strong>Logo Title:</strong>
								<input type="text" name="tmp2-logo" value="<?php echo get_option('tmp2-logo'); ?>" />
							</div>
							<div class="floats">
								<strong>Logo Subheadline:</strong>
								<input type="text" name="tmp2-tagline" value="<?php echo get_option('tmp2-tagline'); ?>" />
							</div>
							<div class="big">
								<strong>URL to Header Image:( width 970px / height 130px )</strong>
								<input type="text" name="tmp2-logoIMG" style="width: 530px;" value="<?php echo get_option('tmp2-logoIMG'); ?>" />
							</div>
							<div class="big">
								<strong>Choose Layout:</strong>
								<select name="tmp2-layout">
									<option <?php if(get_option('tmp2-layout') == '1') { echo "selected"; } ?> value="1">2 Column (w/ Video Sidebar)</option>
									<option <?php if(get_option('tmp2-layout') == '2') { echo "selected"; } ?> value="2">2 Column (w/ Video Content)</option>
									<option <?php if(get_option('tmp2-layout') == '3') { echo "selected"; } ?> value="3">1 Column (w/ Video Content)</option>
									<option <?php if(get_option('tmp2-layout') == '4') { echo "selected"; } ?> value="4">1 Column (w/ No Video or Sidebar)</option>
								</select>
							</div>
							<br clear="all"/>
							<p><strong>Pro Tip:</strong> Click HTML to add your embed and autoresponder code below.</p>
							<div class="big">
								<strong>Video Embed:</strong><br/><br/>
								<textarea id="tmp2-video" style="width: 530px" name="tmp2-video"><?php echo get_option('tmp2-video'); ?></textarea>
							</div>
							<div class="big">
								<strong>Email Opt-in Code:</strong><br/><br/>
								<textarea id="tmp2-email" style="width: 530px" name="tmp2-email"><?php echo get_option('tmp2-email'); ?></textarea>
							</div>
							<div class="big">
								<strong>Main Content:</strong><br/><br/>
								<textarea id="tmp2-content" style="width: 530px" name="tmp2-content"><?php echo get_option('tmp2-content'); ?></textarea>
							</div>
							<div class="big">
								<strong>Optin Area: (shown above your optin1.php file)</strong><br/><br/>
								<textarea id="tmp2-optin"   style="width: 530px"name="tmp2-optin"><?php echo get_option('tmp2-optin'); ?></textarea>
							</div>
							<div class="big">
								<strong>Sidebar Content:</strong><br/><br/>
								<textarea id="tmp2-sidebar"  style="width: 530px" name="tmp2-sidebar"><?php echo get_option('tmp2-sidebar'); ?></textarea>
							</div>
							<div class="big">
								<strong>Footer Column #1:</strong><br/><br/>
								<textarea  id="tmp2-footer1"   style="width: 530px" name="tmp2-footer1"><?php echo get_option('tmp2-footer1'); ?></textarea>
							</div>
							<div class="big">
								<strong>Footer Column #2: (leave blank to merge with footer #1)</strong><br/><br/>
								<textarea id="tmp2-footer2"  style="width: 530px" name="tmp2-footer2"><?php echo get_option('tmp2-footer2'); ?></textarea>
							</div>
							<div class="big">
								<strong>Footer Column #3:</strong><br/><br/>
								<textarea  id="tmp2-footer3"  style="width: 530px" name="tmp2-footer3"><?php echo get_option('tmp2-footer3'); ?></textarea>
							</div>
							<div class="big">
								<strong>Footer Column #4: (leave blank to merge with footer #3)</strong><br/><br/>
								<textarea id="tmp2-footer4"   style="width: 530px" name="tmp2-footer4"><?php echo get_option('tmp2-footer4'); ?></textarea>
							</div>
							<br clear="all" />
							<input name="save" id="pageSave2" type="submit" class="submit" value="Save changes" />    
							<input type="hidden"  name="action" value="save" />
							</form>
						</div>
						<div id="tab3-b"  style="display: none">
							<form method="post">
							
							<div class="floats">
								<strong>Logo Title:</strong>
								<input type="text" name="tmp3-logo" value="<?php echo get_option('tmp3-logo'); ?>" />
							</div>
							<div class="floats">
								<strong>Logo Subheadline:</strong>
								<input type="text" name="tmp3-tagline" value="<?php echo get_option('tmp3-tagline'); ?>" />
							</div>
							<div class="big">
								<strong>URL to Header Image:( width 970px / height 130px )</strong>
								<input type="text" name="tmp3-logoIMG" style="width: 530px;" value="<?php echo get_option('tmp3-logoIMG'); ?>" />
							</div>
							<div class="big">
								<strong>Choose Layout:</strong>
								<select name="tmp3-layout">
									<option <?php if(get_option('tmp3-layout') == '1') { echo "selected"; } ?> value="1">2 Column (w/ Video Sidebar)</option>
									<option <?php if(get_option('tmp3-layout') == '2') { echo "selected"; } ?> value="2">2 Column (w/ Video Content)</option>
									<option <?php if(get_option('tmp3-layout') == '3') { echo "selected"; } ?> value="3">1 Column (w/ Video Content)</option>
									<option <?php if(get_option('tmp3-layout') == '4') { echo "selected"; } ?> value="4">1 Column (w/ No Video or Sidebar)</option>
								</select>
							</div>
							<br clear="all"/>
							<p><strong>Pro Tip:</strong> Click HTML to add your embed and autoresponder code below.</p>
							<div class="big">
								<strong>Video Embed:</strong><br/><br/>
								<textarea id="tmp3-video" style="width: 530px" name="tmp3-video"><?php echo get_option('tmp3-video'); ?></textarea>
							</div>
							<div class="big">
								<strong>Email Opt-in Code:</strong><br/><br/>
								<textarea id="tmp3-email" style="width: 530px" name="tmp3-email"><?php echo get_option('tmp3-email'); ?></textarea>
							</div>
							<div class="big">
								<strong>Main Content:</strong><br/><br/>
								<textarea id="tmp3-content" style="width: 530px" name="tmp3-content"><?php echo get_option('tmp3-content'); ?></textarea>
							</div>
							<div class="big">
								<strong>Optin Area: (shown above your optin1.php file)</strong><br/><br/>
								<textarea id="tmp3-optin"   style="width: 530px"name="tmp3-optin"><?php echo get_option('tmp3-optin'); ?></textarea>
							</div>
							<div class="big">
								<strong>Sidebar Content:</strong><br/><br/>
								<textarea id="tmp3-sidebar"  style="width: 530px" name="tmp3-sidebar"><?php echo get_option('tmp3-sidebar'); ?></textarea>
							</div>
							<div class="big">
								<strong>Footer Column #1:</strong><br/><br/>
								<textarea  id="tmp3-footer1"   style="width: 530px" name="tmp3-footer1"><?php echo get_option('tmp3-footer1'); ?></textarea>
							</div>
							<div class="big">
								<strong>Footer Column #2: (leave blank to merge with footer #1)</strong><br/><br/>
								<textarea id="tmp3-footer2"  style="width: 530px" name="tmp3-footer2"><?php echo get_option('tmp3-footer2'); ?></textarea>
							</div>
							<div class="big">
								<strong>Footer Column #3:</strong><br/><br/>
								<textarea  id="tmp3-footer3"  style="width: 530px" name="tmp3-footer3"><?php echo get_option('tmp3-footer3'); ?></textarea>
							</div>
							<div class="big">
								<strong>Footer Column #4: (leave blank to merge with footer #3)</strong><br/><br/>
								<textarea id="tmp3-footer4"   style="width: 530px" name="tmp3-footer4"><?php echo get_option('tmp3-footer4'); ?></textarea>
							</div>
							<br clear="all" />
							<input name="save" id="pageSave3" type="submit" class="submit" value="Save changes" />    
							<input type="hidden"  name="action" value="save" />
							</form>
						</div>
						<div id="tab4-b"  style="display: none">
							<form method="post">
							
							<div class="floats">
								<strong>Logo Title:</strong>
								<input type="text" name="tmp4-logo" value="<?php echo get_option('tmp4-logo'); ?>" />
							</div>
							<div class="floats">
								<strong>Logo Subheadline:</strong>
								<input type="text" name="tmp4-tagline" value="<?php echo get_option('tmp4-tagline'); ?>" />
							</div>
							<div class="big">
								<strong>URL to Header Image:( width 970px / height 130px )</strong>
								<input type="text" name="tmp4-logoIMG" style="width: 530px;" value="<?php echo get_option('tmp4-logoIMG'); ?>" />
							</div>
							<div class="big">
								<strong>Choose Layout:</strong>
								<select name="tmp4-layout">
									<option <?php if(get_option('tmp4-layout') == '1') { echo "selected"; } ?> value="1">2 Column (w/ Video Sidebar)</option>
									<option <?php if(get_option('tmp4-layout') == '2') { echo "selected"; } ?> value="2">2 Column (w/ Video Content)</option>
									<option <?php if(get_option('tmp4-layout') == '3') { echo "selected"; } ?> value="3">1 Column (w/ Video Content)</option>
									<option <?php if(get_option('tmp4-layout') == '4') { echo "selected"; } ?> value="4">1 Column (w/ No Video or Sidebar)</option>
								</select>
							</div>
							<br clear="all"/>
							<p><strong>Pro Tip:</strong> Click HTML to add your embed and autoresponder code below.</p>
							<div class="big">
								<strong>Video Embed:</strong><br/><br/>
								<textarea id="tmp4-video" style="width: 530px" name="tmp4-video"><?php echo get_option('tmp4-video'); ?></textarea>
							</div>
							<div class="big">
								<strong>Email Opt-in Code:</strong><br/><br/>
								<textarea id="tmp4-email" style="width: 530px" name="tmp4-email"><?php echo get_option('tmp4-email'); ?></textarea>
							</div>
							<div class="big">
								<strong>Main Content:</strong><br/><br/>
								<textarea id="tmp4-content" style="width: 530px" name="tmp4-content"><?php echo get_option('tmp4-content'); ?></textarea>
							</div>
							<div class="big">
								<strong>Optin Area: (shown above your optin1.php file)</strong><br/><br/>
								<textarea id="tmp4-optin"   style="width: 530px"name="tmp4-optin"><?php echo get_option('tmp4-optin'); ?></textarea>
							</div>
							<div class="big">
								<strong>Sidebar Content:</strong><br/><br/>
								<textarea id="tmp4-sidebar"  style="width: 530px" name="tmp4-sidebar"><?php echo get_option('tmp4-sidebar'); ?></textarea>
							</div>
							<div class="big">
								<strong>Footer Column #1:</strong><br/><br/>
								<textarea  id="tmp4-footer1"   style="width: 530px" name="tmp4-footer1"><?php echo get_option('tmp4-footer1'); ?></textarea>
							</div>
							<div class="big">
								<strong>Footer Column #2: (leave blank to merge with footer #1)</strong><br/><br/>
								<textarea id="tmp4-footer2"  style="width: 530px" name="tmp4-footer2"><?php echo get_option('tmp4-footer2'); ?></textarea>
							</div>
							<div class="big">
								<strong>Footer Column #3:</strong><br/><br/>
								<textarea  id="tmp4-footer3"  style="width: 530px" name="tmp4-footer3"><?php echo get_option('tmp4-footer3'); ?></textarea>
							</div>
							<div class="big">
								<strong>Footer Column #4: (leave blank to merge with footer #3)</strong><br/><br/>
								<textarea id="tmp4-footer4"   style="width: 530px" name="tmp4-footer4"><?php echo get_option('tmp4-footer4'); ?></textarea>
							</div>
							<br clear="all" />
							<input name="save" id="pageSave4" type="submit" class="submit" value="Save changes" />    
							<input type="hidden"  name="action" value="save" />
							</form>
						</div>
						<div id="tab5-b"  style="display: none">
							<form method="post">
							
							<div class="floats">
								<strong>Logo Title:</strong>
								<input type="text" name="tmp5-logo" value="<?php echo get_option('tmp5-logo'); ?>" />
							</div>
							<div class="floats">
								<strong>Logo Subheadline:</strong>
								<input type="text" name="tmp5-tagline" value="<?php echo get_option('tmp5-tagline'); ?>" />
							</div>
							<div class="big">
								<strong>URL to Header Image:( width 970px / height 130px )</strong>
								<input type="text" name="tmp5-logoIMG" style="width: 530px;" value="<?php echo get_option('tmp5-logoIMG'); ?>" />
							</div>
							<div class="big">
								<strong>Choose Layout:</strong>
								<select name="tmp5-layout">
									<option <?php if(get_option('tmp5-layout') == '1') { echo "selected"; } ?> value="1">2 Column (w/ Video Sidebar)</option>
									<option <?php if(get_option('tmp5-layout') == '2') { echo "selected"; } ?> value="2">2 Column (w/ Video Content)</option>
									<option <?php if(get_option('tmp5-layout') == '3') { echo "selected"; } ?> value="3">1 Column (w/ Video Content)</option>
									<option <?php if(get_option('tmp5-layout') == '4') { echo "selected"; } ?> value="4">1 Column (w/ No Video or Sidebar)</option>
								</select>
							</div>
							<br clear="all"/>
							<p><strong>Pro Tip:</strong> Click HTML to add your embed and autoresponder code below.</p>
							<div class="big">
								<strong>Video Embed:</strong><br/><br/>
								<textarea id="tmp5-video" style="width: 530px" name="tmp5-video"><?php echo get_option('tmp5-video'); ?></textarea>
							</div>
							<div class="big">
								<strong>Email Opt-in Code:</strong><br/><br/>
								<textarea id="tmp5-email" style="width: 530px" name="tmp5-email"><?php echo get_option('tmp5-email'); ?></textarea>
							</div>
							<div class="big">
								<strong>Main Content:</strong><br/><br/>
								<textarea id="tmp5-content" style="width: 530px" name="tmp5-content"><?php echo get_option('tmp5-content'); ?></textarea>
							</div>
							<div class="big">
								<strong>Optin Area: (shown above your optin1.php file)</strong><br/><br/>
								<textarea id="tmp5-optin"   style="width: 530px"name="tmp5-optin"><?php echo get_option('tmp5-optin'); ?></textarea>
							</div>
							<div class="big">
								<strong>Sidebar Content:</strong><br/><br/>
								<textarea id="tmp5-sidebar"  style="width: 530px" name="tmp5-sidebar"><?php echo get_option('tmp5-sidebar'); ?></textarea>
							</div>
							<div class="big">
								<strong>Footer Column #1:</strong><br/><br/>
								<textarea  id="tmp5-footer1"   style="width: 530px" name="tmp5-footer1"><?php echo get_option('tmp5-footer1'); ?></textarea>
							</div>
							<div class="big">
								<strong>Footer Column #2: (leave blank to merge with footer #1)</strong><br/><br/>
								<textarea id="tmp5-footer2"  style="width: 530px" name="tmp5-footer2"><?php echo get_option('tmp5-footer2'); ?></textarea>
							</div>
							<div class="big">
								<strong>Footer Column #3:</strong><br/><br/>
								<textarea  id="tmp5-footer3"  style="width: 530px" name="tmp5-footer3"><?php echo get_option('tmp5-footer3'); ?></textarea>
							</div>
							<div class="big">
								<strong>Footer Column #4: (leave blank to merge with footer #3)</strong><br/><br/>
								<textarea id="tmp5-footer4"   style="width: 530px" name="tmp5-footer4"><?php echo get_option('tmp5-footer4'); ?></textarea>
							</div>
							<br clear="all" />
							<input name="save" id="pageSave5" type="submit" class="submit" value="Save changes" />    
							<input type="hidden"  name="action" value="save" />
							</form>
						</div>
						<br clear="all" />
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="admin-footer">
			Copyright 2015 - WP Launch Theme - all rights reserved
	</div>



<?php
}

add_action('admin_menu', 'mytheme_add_admin'); ?>
<?php
if ( function_exists('register_sidebar') )
	register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '',
        'after_title' => '',
    ));

     function show_avatar($comment, $size)
  {                  $email=strtolower(trim($comment->comment_author_email));
   $rating = "G"; // [G | PG | R | X]
       if (function_exists('get_avatar')) {
    echo get_avatar($email, $size);
 } else {
        $grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=
       " . md5($emaill) . "&size=" . $size."&rating=".$rating;
    echo "<img src='$grav_url'/>";
 }         } ?>