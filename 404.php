<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Yadea_Theme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<div class="container">
					<div class="text-center">
						<h1>404 Error</h1>
						<p>Sorry! Page not found</p>
						<a class="btn product-cta btn-trans border-gray effect effect-black" href="<?php echo get_home_url();?>">Return to Homepage</a>
					</div>
				</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
