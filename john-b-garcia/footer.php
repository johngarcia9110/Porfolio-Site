<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package John_B_Garcia
 */

?>

<!-- ================
		|-Footer-|
===========================================-->
<footer>
	<div class="container" id="footer-area">
		<div class="col-sm-12">
			<p><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Site Logo"></a></p>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<?php 
					wp_nav_menu( array(
						'theme_location'	=> 'footer',
						'container'			=> 'nav',
						'menu_class'		=> 'list-unstyled list-inline'

						));
				 ?>
				<p>&copy; 2016 John Garcia</p>
			</div>
			
			
			
		</div>
		
	</div>
</footer>
<?php wp_footer(); ?>
<!-- BOOTSTRAP CORE JAVASCRIPT -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/jquery-2.2.0.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/main.js"></script>
<!--animation script -->
<script>


	$(window).scroll(function() {
		$('#animate').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+800) {
				$(this).addClass("expandUp");
			}
		});
	});
	$(window).scroll(function() {
		$('#animate1').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+800) {
				$(this).addClass("expandUp");
			}
		});
	});
	$(window).scroll(function() {
		$('#animate2').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+800) {
				$(this).addClass("expandUp");
			}
		});
	});

	


</script>


</body>
</html>
