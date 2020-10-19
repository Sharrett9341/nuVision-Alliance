<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package nuvisionalliance
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">

				<p class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'bootstrap2wordpress'); ?></p>
			</header><!-- page-header -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="page-content">
							<h1 class="display-1 text-center mt-5">404</h1>

							<p class="text-center"><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'bootstrap2wordpress'); ?></p>

						</div><!-- Col-->
					</div><!-- Row-->
				</div><!-- container-->
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
