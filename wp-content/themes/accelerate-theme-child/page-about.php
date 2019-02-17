<?php
/**
 * The template for the About page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="home-page hero-content about-page">
		<div class="main-content" role="main">
			<div class="about-page-hero site-content">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
			</div>
		</div><!-- .main-content -->
	</div><!-- #primary -->

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
				$subtitle = get_field('subtitle');
				$description = get_field('description');
				$service_title_1 = get_field('service_title_1');
				$service_title_2 = get_field('service_title_2');
				$service_title_3 = get_field('service_title_3');
				$service_title_4 = get_field('service_title_4');
				$service_body_1 = get_field('service_body_1');
				$service_body_2 = get_field('service_body_2');
				$service_body_3 = get_field('service_body_3');
				$service_body_4 = get_field('service_body_4');
				$image_1 = get_field('image_1');
				$image_2 = get_field('image_2');
				$image_3 = get_field('image_3');
				$image_4 = get_field('image_4');
				$size = "full"
			?>

			<section class="about-page-services">
				<h4><?php echo $subtitle; ?></h4>
				<p class="center-p"><?php echo $description; ?></p>

				<article class="about-single-service">
					<div class="third-width"> 
						<figure>
							<?php if($image_1) {
							echo wp_get_attachment_image( $image_1, $size );
							} ?>
						</figure>
					</div>
					<div class="two-third-width">
						<h2><?php echo $service_title_1; ?></h2>
						<p><?php echo $service_body_1; ?></p>
					</div>

				</article>

				<article class="about-single-service">
					<div class="two-third-width">
						<h2><?php echo $service_title_2; ?></h2>
						<p><?php echo $service_body_2; ?></p>
					</div>
					<div class="third-width"> 
						<figure>
							<?php if($image_2) {
							echo wp_get_attachment_image( $image_2, $size );
							} ?>
						</figure>
					</div>
				</article>
				
				<article class="about-single-service">
					<div class="third-width"> 
						<figure>
							<?php if($image_3) {
							echo wp_get_attachment_image( $image_3, $size );
							} ?>
						</figure>
					</div>
					<div class="two-third-width">
						<h2><?php echo $service_title_3; ?></h2>
						<p><?php echo $service_body_3; ?></p>
					</div>

				</article>

				<article class="about-single-service">
					<div class="two-third-width">
						<h2><?php echo $service_title_4; ?></h2>
						<p><?php echo $service_body_4; ?></p>
					</div>
					<div class="third-width"> 
						<figure>
							<?php if($image_4) {
							echo wp_get_attachment_image( $image_4, $size );
							} ?>
						</figure>
					</div>
					
				</article>
			</section>	
			<?php endwhile; // end of the loop. ?>
			
			<div class="about-footer">
				<h2>Interested in working with us?</h2>
				<a class="button" href="<?php echo site_url('contact-us') ?>">Contact Us</a>
			</div>

		</div><!-- .main-content -->
	</div><!-- #primary -->

	

<?php get_footer(); ?>
