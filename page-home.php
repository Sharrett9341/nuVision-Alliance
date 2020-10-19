<?php
/*
    Template Name: Home Page
 */

get_header(); ?>

<main id="content">

	<!--Carousel Wrapper-->
	<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
		<!--Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-2" data-slide-to="1"></li>
			<li data-target="#carousel-example-2" data-slide-to="2"></li>
		</ol>
		<!--/.Indicators-->
		<!--Slides-->
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">

				<div class="view slider">
					<img class="d-block w-100 img" src="<?php bloginfo('stylesheet_directory'); ?>/img/Califronia-Wild-Fire_Victim.jpg" alt="First slide">
					<div class="mask rgba-black-strong flex-center"></div>
				</div>

				<div class="carousel-caption text-left animated fadeInLeftBig">
					<h1>Florida Red Tide Catastrophe</h1>
					<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
					<p><a class="btn btn-lg" href="#" role="button">Get Involved</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<!--Mask color-->
				<div class="view slider">
					<img class="d-block w-100" src="<?php bloginfo('stylesheet_directory'); ?>/img/Flint_Michigan_Water_Crisis.jpg" alt="Second slide">
					<div class="mask rgba-black-strong"></div>
				</div>
				<div class="carousel-caption text-left">
					<h1>Flint Michighan Water Crisis</h1>
					<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. </p>
					<p><a class="btn btn-lg" href="#" role="button">Get Involved</a></p>
				</div>
			</div>
			<div class="carousel-item">

				<div class="view slider">
					<img class="d-block w-100" src="<?php bloginfo('stylesheet_directory'); ?>/img/red-tide-turtle.jpg" alt="Third slide">
					<div class="mask rgba-black-strong"></div>
				</div>
				<div class="carousel-caption text-left">
					<h1>California Disaster Relief Fund</h1>
					<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
					<p><a class="btn btn-lg" href="#" role="button">Donate</a></p>
				</div>
			</div>
		</div>
		<!--/.Slides-->
		<!--Controls-->
		<a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!--/.Controls-->
	</div>
	<!--/.Carousel Wrapper-->



	<div class="container marketing">
		<div class="col-xs-12 text-center my-md-5">
			<h1>Get Involved</h1>

			<p>Join Us And Make A Difference</p>
		</div>

		<div class="row blog wow animated bounceInUp fast">
			<div class="col-lg-4">
				<span class="icon">
					<i class="fas fa-donate fa-2x"></i>
				</span>
				<h2>Donate</h2>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
				<p><a class="btn" href="#" role="button">Read More &raquo;</a></p>
			</div><!-- /.col-lg-4 -->
			<div class="col-lg-4">
				<span class="icon">
					<i class="fas fa-hand-paper fa-2x"></i>
				</span>
				<h2>Volunteer</h2>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
				<p><a class="btn" href="#" role="button">Read More&raquo;</a></p>
			</div><!-- /.col-lg-4 -->
			<div class="col-lg-4">
				<span class="icon">
					<i class="fas fa-hands-helping fa-2x"></i>
				</span>
				<h2>Sign A Petition</h2>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
				<p><a class="btn" href="#" role="button">Read More&raquo;</a></p>
			</div><!-- /.col-lg-4 -->
		</div><!-- /.row -->
	</div>

</main>
<!--========= Latest Causes ========-->
<section class="NVA">
	<div class="container col">
		<h1 class="text-center mt-5">Latest<span>Causes</span></h1>

		<div class="buckets">

			<?php
			while (have_posts()) {
				the_post();
			?>
			<?php
			}
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => '4',

			);

			$blogposts = new WP_Query($args);

			while ($blogposts->have_posts()) {
				$blogposts->the_post();

			?>

				<div class="col-md-3">
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

</section>




<section>
	<div class="container-fluid bg-dark">
		<div class="row">
			<div class="view">
				<div style="padding: 0; margin: 0; width: 100%;" class="col">
					<img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/img/NVA-Volunter-Team.jpg" alt="Child With Cancer">
				</div>
				<div class="mask pattern-1 flex-center">
					<p class="white-text"></p>
				</div>
			</div>
			<div class="col-md-7 NVAanimation">
				<h2 class="text-white text-center my-5">It's Never To Late To Make A Difference</h2>
				<p class="NVAtxt">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
			</div><!-- col-md-7 -->


		</div> <!-- row-->
	</div> <!-- container -->
</section>




<section>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-5 pb-5">
				<h3>Non-Profit Service for Humanity of the World</h3>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable if you are going to use a passage.</p>
				<p>Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text.It is a long established fact that a reader will be distracted.</p>
			</div><!-- col-md-7 -->

			<div class="col-md-7">

				<img class="img-fluid pb-5" src="<?php bloginfo('template_directory'); ?>/img/map.jpg" alt="NVAmap">

			</div>



		</div> <!-- row-->
	</div> <!-- container -->
</section>



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

				<h3 class="text-white mt-5">Sign Up For Newletter</h3>
				<p>Recieve Updates on Happenings, Impacts, and Recent News

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

<!-- /END THE FEATURETTES -->


<?php get_footer(); ?>