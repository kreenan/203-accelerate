<?php
/**
 *Template Name: About
 * The template for displaying the about page
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

<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); ?>
		</div><!-- .main-content -->
</div><!-- #primary -->

	<div id="about" class="services-section">
		<h3>Our Services</h3>
		<p>We take pride in our clients and the content we create for them.<br>Here's a brief overview of our offered services.</p>
			<?php while ( have_posts() ) : the_post();

				$image_1 = get_field('image_1');
				$size = "full";
				$services_1 = get_field('services_1');
				$description_1 = get_field('description_1');
				$image_2 = get_field('image_2');
				$size = "full";
				$services_2 = get_field('services_2');
				$description_2 = get_field('description_2');
				$image_3 = get_field('image_3');
				$size = "full";
				$services_3 = get_field('services_3');
				$description_3 = get_field('description_3');
				$image_4 = get_field('image_4');
				$size = "full";
				$services_4 = get_field('services_4');
				$description_4 = get_field('description_4');
				?>

				<article class="services">
					<div class="services-img left-image" >
						<?php if ($image_1) {
							echo wp_get_attachment_image($image_1, $size);
						}
						?>
					</div>
					<div class="services-text">
						<h4><?php echo $services_1; ?></h4>
						<p><?php echo $description_1; ?></p>
					</div>
				</article>
				<article class="services">
					<div class="services-text">
						<h4><?php echo $services_2; ?></h4>
						<p><?php echo $description_2; ?></p>
					</div>
					<div class="services-img right-image">
						<?php if ($image_2) {
							echo wp_get_attachment_image($image_2, $size);
						}
						?>
					</div>
				</article>
				<article class="services">
					<div class="services-img left-image">
						<?php if ($image_3) {
							echo wp_get_attachment_image($image_3, $size);
						}
						?>
					</div>
					<div class="services-text">
						<h4><?php echo $services_3; ?></h4>
						<p><?php echo $description_3; ?></p>
					</div>
				</article>
				<article class="services">
					<div class="services-text">
						<h4><?php echo $services_4; ?></h4>
						<p><?php echo $description_4; ?></p>
					</div>
					<div class="services-img right-image">
						<?php if ($image_4) {
							echo wp_get_attachment_image($image_4, $size);
						}
						?>
					</div>
				</article>
				<?php wp_reset_query(); ?>
			<?php endwhile; // end of the loop. ?>
		</div>  <!--end about content-->
	
		<div class="about-bottom">
			<h3>Interested in working with us?</h3>
			<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
		</div>

<?php get_footer(); ?>
