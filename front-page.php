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
		<?php
			
			// The Query
			$args = array(
				'category_name' => 'work',
				'orderby' => 'date',
				'order' => 'DESC'
			);
			$blog_query = new WP_Query( $args );

			if ( $blog_query->have_posts() ) :
			
			while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>

		
		<!-- item 1 -->
		<div class="featured-item">
			<div class="wrap">
				<div class="featured-excerpt">
					<h3><a href="<?php echo get_post_meta( get_the_ID(), 'work-link', true ); ?>" target="_blank"><?php echo get_the_title(); ?></a></h3>
					<p><?php the_content(); ?></p>
<!-- 					<a class="button" href="#">Visit the site</a> -->
				</div>
				<div class="featured-image">
					<!-- get full-sized featured image and link to the media file -->
					<?php if ( has_post_thumbnail() ) {
								$full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
								echo '<a href="' . $full_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '">';
								the_post_thumbnail( 'full' );
								echo '</a>';
							} ?>
				</div>
			</div>
		</div>
				
		<!-- end of loop -->
		<?php endwhile; 
			  endif;
			  wp_reset_postdata(); ?>
		
	</section>		

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
