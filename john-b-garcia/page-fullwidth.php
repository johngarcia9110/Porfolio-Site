<?php 
/*
Template Name: Full Width Template

*/
$thumbnail_url	= wp_get_attachment_url( get_post_thumbnail_id( '$post->ID') );
get_header(); ?>

 <?php if (has_post_thumbnail()) { ?>
<section class="feature-image feature-image-default" style="background:url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
	<h1 class="page-title"><?php the_title(); ?></h1>
</section>

<?php } else { ?>

<section class="feature-image feature-image-default" data-type="background" data-speed="2">
	<h1 class="page-title"><?php the_title(); ?></h1>
</section>

<?php } ?>


<div class="container">
			<div class="row" id="primary">
				<div id="content" class="col-sm-12">
					<section class="main-content">
						<?php while( have_posts() ): the_post(); ?>
								<?php the_content(); ?>
						<?php endwhile; ?>
					</section>
				</div><!-- end of content-->
			</div><!-- end of row-->
		</div><!-- end of container-->


 <?php get_footer(); ?>