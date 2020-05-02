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
				$size = "thumbnail";
				$services_1 = get_field('services_1');
				$description_1 = get_field('description_1');
				$image_2 = get_field('image_2');
				$size = "thumbnail";
				$services_2 = get_field('services_2');
				$description_2 = get_field('description_2');
				$image_3 = get_field('image_3');
				$size = "thumbnail";
				$services_3 = get_field('services_3');
				$description_3 = get_field('description_3');
				$image_4 = get_field('image_4');
				$size = "thumbnail";
				$services_4 = get_field('services_4');
				$description_4 = get_field('description_4');
				?>

				<article class="services">
					<div class="services-img">
						<?php if ($image_1) {
							echo wp_get_attachment_image($image_1, $size);
						}
						?>
					</div>
					<div class="services-text">
						<?php echo $services_1; ?>
						<?php echo $description_1; ?>
					</div>
				</article>
				<article class="services">
					<div class="services-img">
						<?php if ($image_2) {
							echo wp_get_attachment_image($image_2, $size);
						}
						?>
					</div>
					<div class="services-text">
						<?php echo $services_2; ?>
						<?php echo $description_2; ?>
					</div>
				</article>
				<article class="services">
					<div class="services-img">
						<?php if ($image_3) {
							echo wp_get_attachment_image($image_3, $size);
						}
						?>
					</div>
					<div class="services-text">
						<?php echo $services_3; ?>
						<?php echo $description_3; ?>
					</div>
				</article>
				<article class="services">
					<div class="services-img">
						<?php if ($image_4) {
							echo wp_get_attachment_image($image_4, $size);
						}
						?>
					</div>
					<div class="services-text">
						<?php echo $services_4; ?>
						<?php echo $description_4; ?>
					</div>
				</article>
				<?php wp_reset_query(); ?>
			<?php endwhile; // end of the loop. ?>
		</div>  <!--end about content-->
	

<?php get_footer(); ?>
