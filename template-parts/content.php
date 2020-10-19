<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nuvisionalliance
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">


<section class="my-5">
  <!-- Grid row -->
  <div class="row">
    <!-- Grid column -->
    <div class="col-md-12">
      <!-- Card -->
	
      <div class="card card-cascade wider reverse">
        <!-- Card image -->
        <div class="view view-cascade overlay">
		<?php if (has_post_thumbnail()) { // check for feature image ?>
		 <?php the_post_thumbnail(); ?>
		 <?php }?>
          <a href="#!">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
       
		  
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title mt-3"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?> 
			<div class="entry-meta post-text">
				 <!-- Card content -->
				 <div class="card-body card-body-cascade text-center">
				<!-- Data -->
				<p>Written by <strong><?php the_author(); ?></strong>
				<?php the_date(); ?>
				<?php the_category(','); ?>
				<?php the_tags(); ?>
				<span class="counter">
				<?php comments_number(0,1,'%'); ?></span>
			  <?php edit_post_link('Edit'); ?>

			</div><!-- .entry-meta -->

			
			<?php the_excerpt(); ?>
			
			   <!-- Comments -->
				 <a href="<?php comments_link();?>" class="btn btn-default">
				  <i class="far fa-comments pr-2"></i>
							<span class="clearfix d-none d-md-inline-block">Comments</span>
		      
          </a>
		<?php endif; ?>
	</header><!-- .entry-header -->








</article><!-- #post-<?php the_ID(); ?> -->
