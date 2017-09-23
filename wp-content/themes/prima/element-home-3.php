<section>
    <div class="container">
        <div class="row">
            <?php if (is_active_sidebar('home_2')) { ?>
            <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                <?php dynamic_sidebar('home_2'); ?>
            </div>
            <!-- #primary-sidebar -->
            <?php } else { ?>
            <div class="col-md-12">
                <h1 class="text-center">Welcome To Prima Foods Bulgaria!</h1>
                <p>We, at Prima Foods Bulgaria, aspire to provide quality processed chicken products. We strive to create one of the healthiest and nutritionist white meat products which will benefit children and adults alike. Our product line sells well as we
                    have created products that are unique form other similar businesses. Our wide variety of chicken products are prepared with the most finest of ingredients which generates a distinctive flavor.</p>
            </div>
            <?php } ?>
        </div>
    </div>
</section>