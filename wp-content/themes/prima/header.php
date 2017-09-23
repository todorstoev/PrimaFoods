<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head() ?>
</head>


<body>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-74829932-1', 'auto');
        ga('send', 'pageview');
    </script>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo get_home_url(); ?>"></a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <?php 
wp_nav_menu(array('theme_location' => 'top_menu', 'depth' => 2, 'container' => false, 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'wp_page_menu',
//Process nav menu using our custom nav walker
'walker' => new wp_bootstrap_navwalker()));
?>
<form class="navbar-form navbar-right" role="search"><?php get_search_form(); ?></form>
<a target="_blank" class="navbar-brand custom-brand linked hidden-sm hidden-md hidden-xs" href="https://www.linkedin.com/company/prima-foods-bulgaria"> <img alt="Brand" width="45" height="45" src="<?php echo get_template_directory_uri (); ?>/images/linkedin.png"></a>
<a target="_blank" class="navbar-brand custom-brand hidden-sm hidden-md hidden-xs" href="https://www.facebook.com/primafoodsbg/"> <img alt="Brand" width="50" height="50" src="<?php echo get_template_directory_uri (); ?>/images/fb.png"></a>
        </div>
        <!-- /.navbar-collapse -->
    </nav>