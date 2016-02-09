<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package John_B_Garcia
 */

$project_title  	= get_field('project_title');
$resources_used	    = get_field('resources_used');
$image_one		    = get_field('image_one');
$image_two 	     	= get_field('image_two');
$image_three    	= get_field('image_three');

get_header(); ?>

<div class="container">
	<div class="row" id="primary">
		<div id="content project-post" class="col-sm-8">
			 <h1><?php echo $project_title; ?></h1>
			
			 	<div class="col-sm-4 pinfo-images">
				<img src="<?php echo $image_one['url']; ?>" alt="<?php echo $image_one['alt'] ?>">
				</div>
				<div class="col-sm-4 pinfo-images">
				<img src="<?php echo $image_two['url']; ?>" alt="<?php echo $image_two['alt'] ?>">
				</div>
				<div class="col-sm-4 pinfo-images">
				<img src="<?php echo $image_three['url']; ?>" alt="<?php echo $image_three['alt'] ?>">
				</div>
			 <p><strong>Resources Used: </strong><?php echo $resources_used; ?></p> 
			<?php while ( have_posts() ) : the_post(); 
				 the_content();

				// If comments are open or we have at least one comment, load up the comment template.
				
					if ( comments_open() || get_comments_number() ) :
						comments_template(); 
				endif; 

			 endwhile; // End of the loop.
			?>
		</div>	
		<aside class="col-sm-4">
			<?php get_sidebar(); ?>
		</aside>
	</div><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
