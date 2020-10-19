<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package nuvisionalliance
 */

get_header();
?>
<!-- Blog Content
 ================= -->
<main id="content" role="main" class="container  mt-5">
	<div class="row pt-5">

		<div class="col-md-8 blog-main">

			<?php
			while (have_posts()) {
				the_post();
			?>
				<div class="container">
					<div class="row">
						<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" />
					</div>
				</div>
				<h2><?php the_title(); ?></h2>
				posted by <?php the_author(); ?>

			<?php the_content();
				comment_form();
			}
			?>

		</div><!-- #primary -->
		<aside class="col-md-4 blog-sidebar">
			<!-- Sidebar
			 ================= -->
			<?php get_sidebar(); ?>
		</aside><!-- #aside -->
	</div>
	</div>
</main><!-- #main -->




<?php

get_footer();
