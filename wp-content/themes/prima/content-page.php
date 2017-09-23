<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		the_title( '<h1 class="entry-title col-sm-12 text-center">', '</h1><!-- .entry-header -->' );
	?>

	<div class="entry-content col-sm-12">
		<?php
			the_content();            
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'prima' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );


		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
