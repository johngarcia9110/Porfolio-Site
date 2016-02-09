<?php  
/*
Template Name: Home Page 
*/
 
get_header(); ?>

<?php get_template_part('template-parts/content', 'hero'); ?>
<?php get_template_part('template-parts/content', 'aboutme'); ?>
<?php get_template_part('template-parts/content', 'skills'); ?>
<?php get_template_part('template-parts/content', 'projects'); ?>

<?php

get_footer();