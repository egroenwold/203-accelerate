<?php
/**
 * The template for 404 error page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<div class="content-wrapper-404">
				<figure>
					<img src="http://localhost:8888/accelerate/wp-content/uploads/2019/02/error-page.jpg" alt="404 error" />
				</figure>
				<h2>Whoops!</h2>
				<p>Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you. </p>
				<p>Feel free to take a look around our <a href="<?php echo site_url('blog') ?>">blog</a> or some of our featured <a href="<?php echo site_url('archive/case-studies') ?>">work</a>. </p>

			</div>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>

