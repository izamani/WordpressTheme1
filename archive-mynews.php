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
/* Template Name: NEWS Page */ 
get_header();
?>

<div id="contents">
		<div class="clearfix">
			<div class="sidebar">
				<div>
					<h2>Recent News</h2>
					<p>
						This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text.
					</p>
					<p>
						You can remove any link to our website from this website template, you're free to use this website template without linking back to us.
					</p>
					<p>
						If you're having problems editing this website template, then don't hesitate to ask for help on the Forums.
					</p>
				</div>
				<div>
					<h2>Client Testimonials</h2>
					<p>
						&ldquo;The best family lawyers in the city so far. Me and my ex-wife didn’t have any<br> problems settling the terms and agreement. Everything went so smoothly. We’re both very happy.&rdquo; <span>- Jared Greene</span>
					</p>
				</div>
			</div>
			<div class="main">
				<h1>News</h1>
				<ul class="news">
					<li>
						<div class="box">
							<img src="images/bride-sideview.jpg" alt="Img" height="245" width="213">
						</div>
						<p class="info">
							31st January 2023 by <span class="author">Manes Winchester</span>
						</p>
						<h2>The Basics of Marriage Laws</h2>
						<p>
							This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text.You can remove any link
						</p>
						<a href="singlepost.html" class="more">Read More</a>
					</li>
					<li>
						<div class="box">
							<img src="images/happy.jpg" alt="Img" height="245" width="213">
						</div>
						<p class="info">
							31st January 2023 by <span class="author">Manes Winchester</span>
						</p>
						<h2>Happy Newly Divorced Women</h2>
						<p>
							This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text.You can remove any link
						</p>
						<a href="singlepost.html" class="more">Read More</a>
					</li>
					<li>
						<div class="box">
							<img src="images/children.jpg" alt="Img" height="245" width="213">
						</div>
						<p class="info">
							31st January 2023 by <span class="author">Manes Winchester</span>
						</p>
						<h2>Children &amp; Divorced Parents</h2>
						<p>
							This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text.You can remove any link
						</p>
						<a href="singlepost.html" class="more">Read More</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

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
