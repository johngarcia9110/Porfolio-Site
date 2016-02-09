<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package John_B_Garcia
 */
$facebook_link =get_field('facebook_link');
$linkedin_link =get_field('linkedin_link');
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/animations.css" rel="stylesheet">

	<!-- FontAwesome Icons -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<!-- custom css -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/custom.css" rel="stylesheet">
	<!-- Load JQuery -->
	
	<!-- Google Fonts -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Inconsolata:400,700' rel='stylesheet' type='text/css'>

	<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- [if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif] -->
<?php wp_enqueue_script("jquery"); ?>	
<?php wp_head(); ?>
</head>

<?php echo '<body class="'.join(' ', get_body_class()).'">'.PHP_EOL; ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'john-b-garcia' ); ?></a>

	<header class="site-header" role="banner">

		<!-- ================
				|-NavBar-|
		===========================================-->
		<div class="navbar-wrapper">
			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle Navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-txt">
							<?php if ( !empty($facebook_link)): ?>

							<a href="<?php echo $facebook_link; ?>" target="_blank" class="badge social facebook"><i class="fa fa-facebook "></i></a>
							
							
							<?php endif; ?>
							
							<?php if ( !empty($linkedin_link)): ?>

							<a href="<?php echo $linkedin_link; ?>" target="_blank" class="badge social linkedin"><i class="fa fa-linkedin-square "></i></a>

							<?php endif; ?>
							
						</div>
						<a class="navbar-brand" href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Site Logo"></a>

					
					</div><!-- navbar-header -->
					<?php 
						wp_nav_menu( array(
								'theme_location' => 'primary',
								'container' => 'nav',
								'container_class' => 'navbar-collapse collapse navbar-right',
								'menu_class' => 'nav navbar-nav '

							));

					?>
					
						

					
				</div><!-- container -->
			</div> <!--eof navbar -->
		</div> <!--eof-navbar-wrapper-->

	</header>

	