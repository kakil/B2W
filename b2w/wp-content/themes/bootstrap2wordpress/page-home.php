<?php
/*
 	Template Name: Home Page
 */

 get_header(); 
 
 get_template_part('template-parts/content', 'hero');
 get_template_part('template-parts/content', 'optin');
 get_template_part('template-parts/content', 'boost');
 get_template_part('template-parts/content', 'benefits');
 get_template_part('template-parts/content', 'course_features');
 get_template_part('template-parts/content', 'project_features');
 get_template_part('template-parts/content', 'featurette');
 get_template_part('template-parts/content', 'instructor');
 get_template_part('template-parts/content', 'testimonial');
 
 get_footer();
?>

