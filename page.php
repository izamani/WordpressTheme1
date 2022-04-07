<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package myTheme
 */
/* Template Name: Normal Page */ 
get_header();
?>


<div id="contents">
	<div class="clearfix">
		<?php
		while ( have_posts() ) :
			?>
			<div id="contents">
				<div class="clearfix">
				<?php
					the_post();
					the_title('<h1 class="entry-title">','</h1');
					mytheme_post_thumbnail();
				
					the_content();
				?>
					
				<?php
				
					if(comments_open() || get_comments_number()) : comments_template(); endif;
					endwhile; // End of the loop.
				?>
			</div>
					</div>
			
	</div>
</div>


<?php
get_sidebar();
get_footer();
