<?php 

 $skills_title				=get_field('skills_title');
 $skills_image				=get_field('skills_image');
 $skill_explination			=get_field('skill_explination');
 $skill_button_link			=get_field('skill_button_link');
 $skill_button_text			=get_field('skill_button_text');
 $skill_one_icon			=get_field('skill_one_icon');
 $skill_one_label			=get_field('skill_one_label');
 $skill_two_icon			=get_field('skill_two_icon');
 $skill_two_label			=get_field('skill_two_label');
 $skill_three_icon			=get_field('skill_three_icon');
 $skill_Three_label			=get_field('skill_Three_label');
 $skill_four_icon			=get_field('skill_four_icon');
 $skill_four_label			=get_field('skill_four_label');


 ?>

 	<!-- ================
			|-SKills Section-|
	===========================================-->
	<section id="skills">
		<div class="container no-vis" id="animate1">
			<div class="row">
				<div class="col-sm-4">
					
					<img src="<?php echo $skills_image['url']; ?>" alt="<?php echo $skills_image['alt']; ?>" >
				</div><!-- col -->
				<div class="col-sm-8 skill-info">
					<div>
						<h2><?php echo $skills_title; ?></h2>
							<div class="row">
								<div class="col-xs-3">
									<i class="fa <?php echo $skill_one_icon; ?>"></i>
									<p><?php echo $skill_one_label; ?></p>
								</div>
								<div class="col-xs-3">
									<i class="fa <?php echo $skill_two_icon; ?>"></i>
									<p><?php echo $skill_two_label; ?></p>
								</div>
								<div class="col-xs-3">
									<i class="fa <?php echo $skill_three_icon; ?>"></i>
									<p><?php echo $skill_Three_label ?></p>
								</div>
								<div class="col-xs-3">
									<i class="fa <?php echo $skill_four_icon; ?>"></i>
									<p><?php echo $skill_four_label; ?></p>
								</div>
							</div>
					</div>
					<p><?php echo $skill_explination; ?></p>
					<a class="btn btn-lg btn-danger" href="<?php echo $skill_button_link; ?>" role="button"><?php echo $skill_button_text; ?> &raquo;</a>
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container-->

	</section>