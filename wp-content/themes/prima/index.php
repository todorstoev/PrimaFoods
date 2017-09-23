<?php get_header(); ?>

<div id="main-content" class="main-content">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
            <div class="container">
                <div class="row">
                                    			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

				endwhile;
			?>
                </div>
            </div>
		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php
get_footer();