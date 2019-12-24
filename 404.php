<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Yadea_Theme
 */
wp_redirect( site_url() );
exit;
get_header();
?>

	<div id="primary" class="content-area no-overlay">
		<main id="main" class="site-main" style="padding: 60px 0 120px; min-height: 60vh;">

			<section class="error-404 not-found">
				<div class="container">
					<div class="text-center">
						<h1 class="title">404</h1>
						<p class="sub-title">Không tìm thấy trang</p>
						<a class="btn product-cta btn-trans border-gray effect effect-black" href="<?php echo get_home_url();?>">Quay lại trang chủ</a>
					</div>
				</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
