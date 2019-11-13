<?php
/**
 * Template Name: Inner Page (With Sidebar)
 *
 */
get_header(); ?>

<div class="content" id="content">
	<div class="banner inner">
		<div class="container">
			<div class="row">
				<img src="<?php bloginfo('template_url')?>/images/contact-banner.jpg" alt="Banner" />
				<div class="banner-text">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
	
	<div class="main-body">
		<div class="container">
			<div class="row">
				<div class="col-md-8 cms-editior">
					<?php
						// Start the loop.
						while ( have_posts() ) : the_post();
							the_content();
						// End the loop.
						endwhile;
					?>

				</div>

				<div class="col-md-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
		
<?php get_footer(); ?>