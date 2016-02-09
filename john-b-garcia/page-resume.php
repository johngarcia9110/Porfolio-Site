<?php
/*
Template Name: Resume Template
*/
$resume_title 			=get_field('resume_title');
$contact_info_title		=get_field('contact_info_title');
$contact_info_section 	=get_field('contact_info_section');
$skills_info_title 		=get_field('skills_info_title');
$skills_info_section 	=get_field('skills_info_section');
$work_info_title 		=get_field('work_info_title');
$work_info_section		=get_field('work_info_section');
$edu_info_title			=get_field('edu_info_title');
$edu_info_section		=get_field('edu_info_section');

get_header(); ?>

<div class="container container-resume ">
	<div class="row" id="primary">
		<div id="content-resume" class="col-md-12 slideRight">
			<a name="top"></a>
			<section>
			<h1><?php echo $resume_title; ?></h1>
			</section>
			<hr><a name="contact"></a>
			<div class="row">
				
				<h2><?php echo $contact_info_title; ?></h2>
				<hr>
				<p><?php echo $contact_info_section; ?></p>
				<hr>
				
			</div>
			<a name="skills"></a>
			<div class="row">
				
				<h2><?php echo $skills_info_title; ?></h2>
				<hr>
				<p><?php echo $skills_info_section; ?></p>
				<hr>
				
			</div>
			<div class="row">
				<a name="workinfo"></a>
				
				<h2><?php echo $work_info_title; ?></h2>
				<hr>
				<p><?php echo $work_info_section; ?></p>
				<hr>
				
			</div>
			<div class="row">
				<a name="eduinfo"></a>
				
				<h2><?php echo $edu_info_title; ?></h2>
				<hr>
				<p><?php echo $edu_info_section; ?></p>
				<hr>
				
			</div>
		</div>	
	</div><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();