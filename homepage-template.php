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
 /* Template Name: Home Page */ 
get_header();
?>



	
	<div id="contents">
		<div id="adbox">
			<div class="clearfix">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/family-large.jpg" alt="Img" height="382" width="594">
				<div class="detail">
					<h1>It’s never easy...<br> When it comes to family.</h1>
					<p>
						But we can set<br> everything straight.
					</p>
				</div>
			</div>
		</div>
		<div class="highlight">
			<div class="clearfix">
				<div class="testimonial">
					<h2>Testimonials</h2>
					<p>
						&ldquo;Aenean ullamcorper purus vitae nisl tristique sollicitudin. Quisque vestibulum, erat ornare.&rdquo;
					</p>
					<span>-John Doe and Jane Doe-</span>
				</div>
				<h1><?php the_title();?></h1>
				<p>
					<?php the_content();?>
				</p>
			</div>
		</div>

		<div class="featured">
			<div class="clearfix">
			<h2>Why Choose Us?</h2>
			<ul class="clearfix">
				<li>
				<?php
					
					$post_7 = get_post (110);
					$title = $post_7->post_title;
					$content = $post_7->post_content;
					$link = get_permalink(110);
					$featured_img = get_the_post_thumbnail_url(110, 'full');
					?>
					<div class="frame1">
						<div class="box">
							<img src="<?php echo $featured_img;?>" alt="Img" height="130" width="197">
						</div>
					</div>
					
					<p>
						<b><?php echo $title?></b> <?php echo $content?>
					</p>
					<a href="<?php echo $link?>" class="more">Read More</a>
				</li>
				<li>
				<?php
					
					$post_7 = get_post (106);
					$title = $post_7->post_title;
					
					$link = get_permalink(106);
					?>
					<div class="frame1">
						<div class="box">
							<img src="<?php echo get_template_directory_uri();?>/assets/images/handshake.jpg " alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b>get to know us more</b> Just browse through all our Free Website Templates and ﬁnd what you’re looking for.
					</p>
					
					
					<a href="<?php echo $link?>" class="more">Read More</a>
				</li>
				<li>
				<?php
					
					$post_7 = get_post (108);
					$title = $post_7->post_title;
					$content = $post_7->post_content;
					$link = get_permalink(108);
					$featured_img = get_the_post_thumbnail_url(108, 'full');
					?>
					<div class="frame1">
						<div class="box">
							<img src="<?php echo $featured_img?>" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
					
						<b>what we offer</b> <?php echo $content?>
					</p>
					<a href="<?php echo $link?>" class="more">Read More</a>
				</li>
				<li>
				<?php
					
					$post_7 = get_post (116);
					$title = $post_7->post_title;
					$content = $post_7->post_content;
					$link = get_permalink(116);
					$featured_img = get_the_post_thumbnail_url( 116, 'full');
					?>
					<div class="frame1">
						<div class="box">
							<img src="<?php echo $featured_img?>" alt="Img" height="130" width="197">
						</div>
					</div>
					
					<p>
						<b>get in touch with us</b><?php echo $content?>
					</p>
					<a href="<?php echo $link?>" class="more">Read More</a>
				</li>
			</ul>
			
		</div>
	</div>	
<?php
get_sidebar();
get_footer();
?>