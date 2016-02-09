<?php 

 $project_section_title		=get_field('project_section_title');

 ?>


 <!-- ================
		|-Projects-|
===========================================-->
	<section id="examples">
			<div class="container no-vis" id="animate2">
				<div class="row" >
					<div class="col-sm-8 col-sm-offset-2">
						
						<h2><?php echo $project_section_title; ?></h2>
						<hr>

						<?php $loop = new WP_Query( array('post_type' => 'projects', 'order_by' => 'post_id', 'order' => 'ASC')); ?>
						<?php while( $loop->have_posts()) : $loop->the_post(); ?>

						<div class="row project">
							<div class="col-xs-12 col-sm-12 col-md-4 col-project" id"animexpand">
							<?php if (has_post_thumbnail()) {
								the_post_thumbnail( array());
								} ?>
							
							<a class="col-xs-12 col-sm-12 btn btn-lg btn-danger" href="<?php the_permalink(); ?>" role="button">View Project Details &raquo;</a>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6">
								<h3> <?php the_title(); ?> </h3>
								<blockquote>
									<?php the_excerpt(); ?>
								</blockquote>
								
							</div>
						</div>
						<hr>
						<?php endwhile; ?>
					</div>
				</div><!--row-->
			</div><!--container-->

		</section>