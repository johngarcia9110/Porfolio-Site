<?php 

 $hero_logo 		=get_field('hero_logo');
 $hero_intro 		=get_field('hero_intro');
 $hero_information	=get_field('hero_information');
 $hero_button_text 	=get_field('hero_button_text');
 $hero_button_link	=get_field('hero_button_link');

$facebook_link =get_field('facebook_link');
$linkedin_link =get_field('linkedin_link');

 ?>

 <!-- ================
		|-Hero Section-|
===========================================-->
	<section id="hero" data-type="background" data-speed="5">
		<article>
			<div class="container clearfix expandUp">
				<div class="row" id="animexpand">
					<div class="col-sm-6">
						<?php if (!empty($hero_logo)) : ?>
						<img src="<?php echo $hero_logo['url']; ?>" alt="<?php echo $hero_logo['alt']; ?>" class="hero-logo expandUp" >
					<?php else : ?>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="John Image" class="hero-logo expandUp">
					<?php endif; ?>
					</div><!-- col -->
					<div class="col-sm-6" id="hero-info">
						<h1><?php echo $hero_intro; ?></h1>
						<p><?php echo $hero_information; ?></p>
						<!--<div class="col-sm-6">
							<ul class="social" id="social-hero">
								<li><?php if ( !empty($facebook_link)): ?>

								<a href="<?php echo $facebook_link; ?>" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
								</li>
								
								<?php endif; ?>
								<li>
								<?php if ( !empty($linkedin_link)): ?>

								<a href="<?php echo $linkedin_link; ?>" target="_blank" class="badge social linkedin"><i class="fa fa-linkedin-square"></i></a>

								<?php endif; ?>
								</li>
							</ul>
						</div> -->
						<a class="btn btn-lg btn-danger" href="<?php echo $hero_button_link; ?>" role="button"><?php echo $hero_button_text; ?> &raquo;</a>
					</div><!-- col-sm-7 -->
				</div><!-- row-->
			</div><!-- container -->
		</article>
	</section>