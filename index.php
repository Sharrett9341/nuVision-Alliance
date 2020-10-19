<?php
/* Template Name: Blog */

get_header(); ?>

<div class="container">
  <main id="content" role="main" class="container  mt-5">
    <div class="row pt-5">
      <div class="col-md-8 blog-main">
        <section class="my-5">
          <?php
          while (have_posts()) {
            the_post();
          ?>

            <div class="row">
              <div class="col-md-12">
                <div class="card card-cascade wider reverse">
                  <div class="view view-cascade overlay">
                    <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?> " alt="Sample image" />
                    <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <div class="card-body card-body-cascade text-center">
                    <a href="<?php the_permalink(); ?>">
                      <h2 class="font-weight-bold"><?php the_title(); ?></h2>
                    </a>
                    <a class="btn btn-default">
                      <i class="far fa-comments pr-2"></i>
                      <span class="clearfix d-none d-md-inline-block">Comments</span>
                    </a>
                    <span class="counter">18</span>
                    <div class="mt-5">
                      <p class="post-text">
                        <?php the_excerpt(); ?>
                    </div>
                  </div><!-- Card content -->
                </div> <!-- Card -->
              </div><!-- Grid column -->
            </div><!-- Grid row -->
            <hr class="mb-5 mt-4">

          <?php
          }
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => '4',

          );

          $blogposts = new WP_Query($args);

          while ($blogposts->have_posts()) {
            $blogposts->the_post();
          }
          ?>


        </section>
        <nav class="blog-pagination">
          <a class="btn btn-outline-primary" href="#">Older</a>
          <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>
      </div><!-- /.blog-main -->
      <aside class="col-md-4 blog-sidebar">
        <?php get_sidebar(); ?>
      </aside><!-- /.blog-sidebar -->
    </div><!-- /.row -->
  </main><!-- /.container -->
</div><!-- container -->


<section class="bg-dark">
  <div class="container-fluid bg-light">
    <div class="row">
      <div class="col-md-5 bg-dark px-0">
        <div class="view">
          <img class="img-fluid fullW" src="<?php bloginfo('stylesheet_directory'); ?>/img/NVA-Volunteer_Hands.jpg" alt="Nuvision Alliance: Make Your Voice Heard">
          <div class="mask img-fluid pattern-1">
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