<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-center">
                <ul class="list-unstyled">
                    <li><p><strong><?php bloginfo('name'); ?> <?php pll_e('Bulgaria');?></strong></p></li>
                    <li><p><i class="fa fa-phone fa-fw"></i> (+359) 887071616</p></li>
                    <li><p><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:name@example.com">info@primafoods.bg</a></p></li>
                </ul>
            </div>
            <div class="col-sm-4 text-center">
                <strong><p><?php pll_e('Factory');?>:</p></strong>
                <p><?php pll_e('West Industrial Zone');?></p>
                <p><?php pll_e('Pleven, 5800, Bulgaria');?></p>
            </div>
            <div class="col-sm-4 text-center">
                <strong><p><?php pll_e('Office');?>:</p></strong>
                <p><?php pll_e('20 Al.Stamboliiski blvd');?></p>
                <p><?php pll_e('Sofia, 1000, Bulgaria');?></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php
            if (has_nav_menu('footer_nav')) :
                wp_nav_menu(array('menu' => 'footer_nav', 'theme_location' => 'footer_nav', 'menu_class' => 'footer-menu', 'container_class' => 'col-xs-12 hidden-xs text-center', 'after' => '|', 'echo' => true));
            endif;
            ?>
        </div>
        <div class="row">
            <?php
            if (is_active_sidebar('footer')) {
                dynamic_sidebar('footer');
            }
            ?>

        </div>
        <div class="row text-center">
            <ul>
                <?php pll_the_languages(array('show_flags'=>1,'show_names'=>1)); ?>
            </ul>
        </div>
    </div>





    <hr class="small">
    <p class="text-muted text-center">Copyright &copy; <?php echo bloginfo('name') . ' ' . date("Y"); ?></p>



</footer>

<?php wp_footer(); ?>

</body>



</html>
