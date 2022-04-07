<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package myTheme
 */

?>

<div id="footer">
		<div class="clearfix">
			<div class="section">
				<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
			</div>
			<div class="section contact">
				<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
			</div>
			<div class="section">
				<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
			</div>
		</div>
		<div id="footnote">
			<div class="clearfix">
				<div class="connect">
					<a href="#" class="facebook"></a><a href="#" class="twitter"></a><a href="#" class="googleplus"></a><a href="#" class="pinterest"></a>
				</div>
				<p>
					© Copyright 2023 SWS. All Rights Reserved.
				</p>
			</div>
		</div>
	</div>

	
<?php wp_footer(); ?>

</body>
</html>
