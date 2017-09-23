<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-center">
                <ul class="list-unstyled">
                    <li><p><strong><?php bloginfo('name') ?> Bulgaria</strong></p></li>
                    <li><p><i class="fa fa-phone fa-fw"></i> (+359) 887071616</p></li>
                    <li><p><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:name@example.com">info@primafoods.bg</a></p></li>
                </ul>
            </div>
            <div class="col-sm-4 text-center">
                <strong><p>Factory:</p></strong>
                <p>West Industrial Zone</p>
                <p>Pleven, 5800, Bulgaria</p>
            </div>
            <div class="col-sm-4 text-center">
                <strong><p>Office:</p></strong>
                <p>20 Al.Stamboliiski blvd</p>
                <p>Sofia, 1000, Bulgaria</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php if (has_nav_menu('footer_nav')) :
?> <?php
            wp_nav_menu(array('menu' => 'footer_nav', 'theme_location' => 'footer_nav', 'menu_class' => 'footer-menu', 'container_class' => 'col-xs-12 hidden-xs text-center', 'after' => '|', 'echo' => true));
?>


            <!-- .main-navigation -->
            <?php endif; ?>
        </div>
        <div class="row">
            <?php
            if (is_active_sidebar('footer')) {
                dynamic_sidebar('footer');
            }

?>

        </div>
    </div>





    <hr class="small">
    <p class="text-muted text-center">Copyright &copy; <?php echo bloginfo('name').' '.date("Y"); ?></p>



</footer>

<?php wp_footer(); ?>

</body>



</html>
