<?php
/* Template Name: Contacts */
get_header();
?>
<div class='container'>
    <div class='row'>
        <div class='col-sm-6'>
            <div class='container-fluid'>
                <form id="contact-ajax" role="form" method="POST" action="<?php echo htmlspecialchars(get_template_directory_uri() . '/mailer.php'); ?>">

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 form-control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name"
                                   placeholder="Name" name="name" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 form-control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3"
                                   placeholder="Email" name="email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="subject" class="col-sm-2 form-control-label">Subject</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="subject"
                                   placeholder="Subject" name="subject" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="yourtext" class="col-sm-2 form-control-label"></label>
                        <div class="col-sm-10">
                            <textarea style="min-height: 67px;" class="form-control"
                                      id="yourtext" placeholder="Write your message here..."
                                      name="yourtext" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Contact Us</button>
                        </div>
                    </div>
                    <div id="form-messages"></div>
                </form>

                <?php
                if (is_active_sidebar('contacts-left')) {
                    dynamic_sidebar('contacts-left');
                }
                ?>

            </div>

        </div>

        <div class='col-sm-6 text-right'>
            <div class="col-md-12">
                <div class="google-maps">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16308.889656498597!2d24.60616993409209!3d43.42241876327309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDPCsDI1JzQ0LjQiTiAyNMKwMzYnNTYuNSJF!5e0!3m2!1sen!2sbg!4v1457356317449"
                        width="400" height="300" frameborder="0" style="border: 0"
                        allowfullscreen></iframe>
                </div>

            </div>
            <?php
            if (is_active_sidebar('contacts-right')) {
                dynamic_sidebar('contacts-right');
            }
            ?>
        </div>
    </div>
</div>

<?php
get_footer();
