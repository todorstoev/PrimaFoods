<?php
/* Template Name: Parents */
get_header ();

while ( have_posts () ) :
	the_post ();
	
	echo "<div class='container'>";    
	echo "<div class='row'>";
    the_title( '<h1 class="entry-title col-sm-12 text-center">', '</h1><!-- .entry-header -->' );
	echo "<div class='col-md-12'>";
	the_content();
	echo "</div>";
	echo "</div>";
	echo "</div>";
	
endwhile
;


$pages = get_pages ( array (
		'child_of' => $post->ID,
		'sort_column' => 'post_date',
		'sort_order' => 'desc' 
) );
?>

<div class='container'>
	<div class='row'>
	<?php
	foreach ( $pages as $page ) {
		echo "<a href='" . get_permalink ( $page->ID ) . "'><div class='col-md-4 '>";
		echo get_the_post_thumbnail ( $page->ID, 'large', array (
				'class' => 'img-responsive img-thumbnail',
				'style' => 'margin-bottom:5px;' 
		) );
		echo "<div class='btn-info btn col-md-12 text-center' style='width:100%'>" . $page->post_title . "</div>";
		echo "</div></a>";
	}
	?>	
	</div>
    
    <div class="row">
        <?php 
        if(is_active_sidebar('parents')){
            dynamic_sidebar('parents');
        }
        ?>
    </div>
</div>
<?php
get_footer ();