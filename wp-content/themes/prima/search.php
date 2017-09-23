<?php
get_header();


if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <div class="container" style="border-bottom:1px solid gray;box-shadow: 1px 1px 5px gray;margin-bottom:5px;border-right:1px solid gray;">
            <div class="row text-center">
                <h3><a href="<?php echo get_permalink(); ?>">
                        <?php the_title(); ?>
                    </a></h3>
                <div class="col-md-12"><?php the_post_thumbnail('medium')?></div>
                <?php echo substr(get_the_excerpt(), 0, 200); ?> 
                <div class="col-md-12"><a href="<?php the_permalink(); ?>">Read More</a></div>     
            </div>
        </div>

        <?php
        paginate_links();
    }
}



the_posts_pagination(array(
    'prev_text' => __('Previous page', 'prima'),
    'next_text' => __('Next page', 'prima'),
    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'prima') . ' </span>',
));


get_footer();

?>
   