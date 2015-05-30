<?php
/**
 * The template for displaying the home-age.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package contentJones_S
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		
	<!-- ******** PORTFOLIO ******** -->
	<section class="portfolio">
		
	<h2 class="subhead">recent work</h2>		

		<!-- begin loop -->
		<?php while ( have_posts() ) : the_post(); ?>
		
		<!-- item 1 -->
		<div class="featured-item">
			<div class="wrap">
				<div class="featured-excerpt">
					<h3><a href="<?php echo get_post_meta( get_the_ID(), 'work-link', true ); ?>"><?php echo get_the_title(); ?></a></h3>
					<p><?php the_content(); ?></p>
<!-- 					<a class="button" href="#">Visit the site</a> -->
				</div>
				<div class="featured-image">
					<!-- make these lightbox images -->
					<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail();
} ?>
				</div>
			</div>
		</div>
				
		<!-- end of loop -->
		<?php endwhile; // end of the loop. ?>
		
	</section>		

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
