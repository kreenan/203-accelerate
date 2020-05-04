<?php
/**
 * Template: 404 Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar not-found">
		<div class="main-content" role="main">
			<div id="page-not-found">
				<h2>Oh Bananas,</br> Took a Wrong Turn...</h2>
				<p>Sorry, this page no longer exists, never existed or has been moved.  We feel like complete jerks for totally misleading you.</p>
				<p>Feel free to take a look around our <a href="<?php echo site_url('/blog/') ?>">blog</a> or some of our featured <a href="<?php echo site_url('/case-studies/') ?>">work.</a></p>
			</div>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
