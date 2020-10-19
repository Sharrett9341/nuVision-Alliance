<?php
/*Template Name: Causes*/
?>

<?php get_header(); ?>

<main role="main">


	<!--Carousel Wrapper-->
	<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">

		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">

				<div class="view">
					<img class="d-block w-100 img" src="<?php bloginfo('stylesheet_directory'); ?>/img/red-tide-shark.jpg" alt="First slide">
					<div class="mask rgba-black-strong flex-center"></div>
				</div>
			</div>




</main>
<section>
	<div class="container">
		<!-- Card deck -->
		<h1 class="text-center mt-5">Featured <span>Causes</span></h1>

		<div class="buckets">

			<?php
			while (have_posts()) {
				the_post();
			?>
			<?php
			}
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => '3',

			);

			$blogposts = new WP_Query($args);

			while ($blogposts->have_posts()) {
				$blogposts->the_post();

			?>

				<div class="card-deck col-md-4">
					<div class="card mb-4">
						<div class="view overlay">
							<img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
							<a href="<?php the_permalink(); ?>">
								<div class="mask rgba-white-slight"></div>
							</a>
						</div>
						<div class="card-body">
							<h4 class="card-title"><?php the_title(); ?></h4>
							<p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>

							<button type="button" href="<?php the_permalink(); ?>" class="btn btn-md">Read more</button>
						</div>
					</div>
					<!-- Card -->

				</div><!-- row -->
			<?php
			}
			wp_reset_query();
			?>



		</div><!-- Container -->
</section>


<section class="bg-dark" style="background-color:rgba(0,0,0,0.6);">
	<div class="container bg-dark py-5">
		<div class="row blog">
			<h1 class="NVAtxt">Fight For Change</h1>
			<p class="NVAtxt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis totam, laudantium officia praesentium expedita omnis unde tempora beatae, modi, sequi quis. Est quas corporis, nobis aperiam cumque minima libero rem, itaque quo vitae odit?</p>
			<a href="#" class="btn-custom btn-warning">Join The Fight</a>
		</div><!-- /.row -->
	</div><!-- /container -->
</section>



<section class="mt-5">
	<div class="container py-5">
		<div class="row blog">
			<div class="col-lg-4">
				<span class="icon">
					<i class="fas fa-donate fa-2x"></i>
				</span>
				<h2 class="NVAtxt">Donate to a Cause</h2>
				<p class="NVAtxt">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
				<p><a class="btn" href="#" role="button">Read More &raquo;</a></p>
			</div><!-- /.col-lg-4 -->
			<div class="col-lg-4">
				<span class="icon">
					<i class="fas fa-hand-paper fa-2x"></i>
				</span>
				<h2 class="NVAtxt">Support This Site</h2>
				<p class="NVAtxt">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
				<p><a class="btn" href="#" role="button">Read More&raquo;</a></p>
			</div><!-- /.col-lg-4 -->
			<div class="col-lg-4">
				<span class="icon">
					<i class="fas fa-hands-helping fa-2x"></i>
				</span>
				<h2 class="NVAtxt">Sign Petition</h2>
				<p class="NVAtxt">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
				<p><a class="btn" href="#" role="button">Read More&raquo;</a></p>
			</div><!-- /.col-lg-4 -->
		</div><!-- /.row -->
	</div><!-- /container -->


	<section class="bg-dark">
		<div class="container-fluid bg-light">
			<div class="row">
				<div class="col-md-5 bg-dark px-0">
					<div class="view">
						<img class="img-fluid fullW" src="<?php bloginfo('stylesheet_directory'); ?>/img/NVA-Volunteer_Hands.jpg" alt="Nuvision Alliance: Make Your Voice Heard">
						<div class="mask pattern-1">
						</div>
						<!--mask-->
					</div>
					<!--view-->


				</div>
				<!--row-->
				<div class="col-md-7 bg-dark">
					<h3 class="text-white mt-5 px-3">Sign Up For Newletter</h3>
					<p class="px-3">Recieve Updates on Happenings, Impacts, and Recent News

						<nav class="navbar-light bg-dark">
							<form class="form-inline">
								<input class="form-control mr-sm-2" type="search" aria-label="Search">
								<button class="btn-custom btn-warning my-2 my-sm-0" type="submit">Email</button>
							</form>
						</nav>

				</div>
			</div>
			<!-- </div>-->
			<!--row-->
		</div>
		<!--container-->
	</section>

	<?php get_footer(); ?>