<?php
/* Template Name: Product */
get_header ();
$products = get_field_objects ();
?>


<section>
<?php
while ( have_posts () ) :
	the_post ();
	?>
<div class="container">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2 class="text-center"><?php the_title();?></h2>
			<div class="row">
				<div class="col-sm-8">
					<img class="img-responsive img-thumbnail img-rounded prod-img"
						src="<?php echo $products['image']['value']['url']; ?>" />
				</div>
				<div class="col-sm-4">
					<div container-fluid>
						<div class="row">
							<div class="col-xs-12 products oven text-center"><?php echo $products['oven']['value']; ?></div>
							<div class="col-xs-12 products pan text-center"><?php echo $products['pan']['value']; ?></div>
							<div class="col-xs-12 products micro text-center"><?php echo $products['micro']['value']; ?></div>
							<div class="col-xs-12 products grill text-center"><?php echo $products['grill']['value']; ?></div>
							<div class="col-xs-12 products text-center"><?php echo $products['labeling']['value']; ?></div>
							<div class="col-xs-12 products text-center"><?php echo $products['bag']['value']; ?></div>
							<div class="col-xs-12 products text-center"><?php echo $products['box']['value']; ?></div>
							<div class="col-xs-12 products text-center"><?php echo $products['unit']['value']; ?></div>
							<div class="col-xs-12 text-center">
								<img class="img-responsive halal" style="display: inline-block"
									src="<?php echo get_stylesheet_directory_uri();?>/images/HALAL.png" />
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12"><?php the_content();?></div>
			</div>
		</article>
		<div class="row">
			<div class="col-sm-12">
				<div class="fb-like" data-href="<?php the_permalink(); ?>"
					data-layout="standard" data-action="like" data-show-faces="true"
					data-share="true"></div>
			</div>
			<div class="col-sm-12">
				<span class="btn btn-default" onclick="window.history.back();" style="margin-top:5px;">Back</span>
			</div>
			<div class="col-md-12">
				<?php
	if (is_dynamic_sidebar ( 'product' )) {
		dynamic_sidebar ( 'product' );
	}
	?>
			
			</div>

		</div>
<?php
endwhile
;
?>





</section>


<?php
get_footer ();
