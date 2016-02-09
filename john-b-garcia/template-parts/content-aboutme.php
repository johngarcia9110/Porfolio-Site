<?php 

$title_about_me				=get_field('title_about_me');
$intro_about_me				=get_field('intro_about_me');
$item_one_image				=get_field('item_one_image');
$item_one_heading			=get_field('item_one_heading');
$item_one_description		=get_field('item_one_description');
$item_two_image				=get_field('item_two_image');
$item_two_heading			=get_field('item_two_heading');
$item_two_description		=get_field('item_two_description');
$item_three_image			=get_field('item_three_image');
$item_three_heading			=get_field('item_three_heading');
$item_three_description		=get_field('item_three_description');

 ?>

 <!-- ================
		|-Blurb About Me-|
===========================================-->
	<section id="aboutme" >
		<div class="container no-vis" id="animate">
			<h2><?php echo $title_about_me; ?></h2>
			<p class="lead" ><?php echo $intro_about_me; ?></p>
			<div class="row" >
				<div class="col-sm-4">
					<img src="<?php echo $item_one_image['url']; ?>" alt="<?php echo $item_one_image['alt']; ?>" >
					<h3><?php echo $item_one_heading; ?></h3>
					<p><?php echo $item_one_description; ?></p>
				</div><!-- col -->
				<div class="col-sm-4">
					<img src="<?php echo $item_two_image['url']; ?>" alt="<?php echo $item_two_image['alt']; ?>" >
					<h3><?php echo $item_two_heading; ?></h3>
					<p><?php echo $item_two_description; ?></p>
				</div><!-- col -->
				<div class="col-sm-4">
					<img src="<?php echo $item_three_image['url']; ?>" alt="<?php echo $item_three_image['alt']; ?>" >
					<h3><?php echo $item_three_heading; ?></h3>
					<p><?php echo $item_three_description; ?></p>
				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->
	</section>