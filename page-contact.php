<?php
/* Template Name: Contact Us */
get_header(); ?>

<!--Section: Contact v.2-->
<section class="section my-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-9 mx-auto text-center">
                <img class="ftLogo mt-5" src="<?php bloginfo('stylesheet_directory'); ?>/img/dove_4.png" alt="logo">
                <!--Section heading-->
                <!--Section: Contact v.2-->
                <section class="mb-4">

                    <!--Section heading-->
                    <h2 class="h1-responsive font-weight-bold text-center"><?php the_title(); ?></h2>
                    <!--Section description-->
                    <p class="text-center w-responsive mx-auto">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
                        a matter of hours to help you.</p>

                    <div class="row">
                        <!--Grid column-->
                        <div class="col-md-12 mb-md-0 mb-5">
                            <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="name" name="name" class="form-control">
                                            <label for="name" class="">Your name</label>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="email" name="email" class="form-control">
                                            <label for="email" class="">Your email</label>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <input type="text" id="subject" name="subject" class="form-control">
                                            <label for="subject" class="">Subject</label>
                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->


                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12">

                                        <div class="md-form">
                                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                            <label for="message">Your message</label>
                                        </div>

                                    </div>
                                </div>
                                <!--Grid row-->

                            </form>

                            <div class=" text-center text-md-left">
                                <a class="btn-custom btn-warning text-white" onclick="document.getElementById('contact-form').submit();">Send</a>
                            </div>
                            <div class="status"></div>
                        </div>
                        <!--Grid column-->
                </section>
</section>


<?php get_footer() ?>