


<?php
/*
* Template name: contact
*/
global $redux_demo;

get_header();
?>
<!-- Page top section -->
<section class="page-top-section set-bg" data-setbg="<?php echo get_template_directory_uri() ?>/img/header-bg/4.jpg">
    <div class="container">
        <h2><?php the_title();?></h2>
    </div>
</section>
<!-- Page top section end -->

<!-- Contact section -->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h2 class="contact-title">Contact Info</h2>
                <div class="contact-info-warp">
                    <h4>Location</h4>
                    <div class="contact-info">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/1-dark.png" alt="">
                        <div class="cf-text">
                            <p><?php echo $redux_demo["Location"];?></p>
                        </div>
                    </div>
                </div>
                <div class="contact-info-warp">
                    <h4>Subscriptions</h4>
                    <div class="contact-info">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/2-dark.png" alt="">
                        <div class="cf-text">
                            <p><?php echo $redux_demo["Phone1"];?></p>
                            <p><?php echo $redux_demo["Phone2"];?></p>
                        </div>
                    </div>
                </div>
                <div class="contact-info-warp">
                    <h4>E-mail</h4>
                    <div class="contact-info">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icons/3-dark.png" alt="">
                        <div class="cf-text">
                            <p><?php echo $redux_demo["email"];?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <h2 class="contact-title">Get in touch</h2>
                <?php
                echo do_shortcode('[contact-form-7 id="14" title="Контактна форма 1"]');
                ?>
            </div>
        </div>
    </div>
    <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14376.077865872314!2d-73.879277264103!3d40.757667781624285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1546528920522" style="border:0" allowfullscreen></iframe></div>
</section>
<!-- Contact section end -->

<!-- Newsletter section  -->
<section class="newsletter-section set-bg" data-setbg="<?php echo get_template_directory_uri() ?>/img/newsletter-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title text-white mb-0">
                    <h2>Subscribe to <span>newsletter</span></h2>
                </div>
            </div>
            <div class="col-lg-6">
                <form class="newsletter-form">
                    <input type="text" placeholder="Your e-mail here">
                    <button class="site-btn" type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter section end -->
<?php
get_footer();