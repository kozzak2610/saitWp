

<?php
/*
* Template name: about
*/
get_header();
?>
<section class="page-top-section set-bg" data-setbg="<?php echo get_template_directory_uri() ?>/img/header-bg/1.jpg">
    <div class="container">
        <h2><?php the_title();?></h2>
    </div>
</section>
<!-- Page top section end -->

<!-- About section -->
<section class="about-section">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-5">
                <div class="section-title text-center">
                    <h2><span>We care</span> about your health</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="about-text">
                    <p><?php echo  get_post_meta('5','desc-1', true); ?> </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="about-text">
                    <p><?php echo  get_post_meta('5','desc-2', true); ?> </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="about-img">
                    <img src="<?php echo get_template_directory_uri() ?>/img/about-img.png" alt="">
                </div>
            </div>
        </div>
        <div class="text-center pt-4">
            <a href="#" class="site-btn">Become a Member</a>
        </div>
    </div>
</section>
<!-- About section end -->

<!-- Achievement section -->
<div class="achievement-section set-bg" data-setbg="<?php echo get_template_directory_uri() ?>/img/achievement-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="circle-progress" data-cptitle="Happy Clients" data-cpid="id-1" data-cpvalue="50" data-cpcolor="#fcff18"></div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="circle-progress" data-cptitle="Fatt Lost" data-cpid="id-2" data-cpvalue="75" data-cpcolor="#fcff18"></div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="circle-progress" data-cptitle="Work" data-cpid="id-3" data-cpvalue="100" data-cpcolor="#fcff18"></div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="circle-progress" data-cptitle="Energy" data-cpid="id-4" data-cpvalue="25" data-cpcolor="#fcff18"></div>
            </div>
        </div>
    </div>
</div>
<!-- Achievement section end -->

<!-- Trainers section -->
<section class="trainers-section">
    <div class="container">
        <div class="section-title text-center">
            <h2>Meet the <span>Trainers</span></h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="trainer-item">
                    <div class="trainer-pic">
                        <img src="<?php echo get_template_directory_uri() ?>/img/trainers/1.jpg" alt="">
                    </div>
                    <h4><?php echo  get_post_meta('5','trainers-1', true); ?> </h4>
                    <p><?php echo  get_post_meta('5','trainers-1-desc', true); ?> </p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="trainer-item">
                    <div class="trainer-pic">
                        <img src="<?php echo get_template_directory_uri() ?>/img/trainers/2.jpg" alt="">
                    </div>
                    <h4><?php echo  get_post_meta('5','trainers-2', true); ?> </h4>
                    <p><?php echo  get_post_meta('5','trainers-2-desc', true); ?> </p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="trainer-item">
                    <div class="trainer-pic">
                        <img src="<?php echo get_template_directory_uri() ?>/img/trainers/3.jpg" alt="">
                    </div>
                    <h4><?php echo  get_post_meta('5','trainers-3', true); ?> </h4>
                    <p><?php echo  get_post_meta('5','trainers-3-desc', true); ?> </p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="trainer-item">
                    <div class="trainer-pic">
                        <img src="<?php echo get_template_directory_uri() ?>/img/trainers/4.jpg" alt="">
                    </div>
                    <h4><?php echo  get_post_meta('5','trainers-4', true); ?> </h4>
                    <p><?php echo  get_post_meta('5','trainers-4-desc', true); ?> </p>
                </div>
            </div>
        </div>
    </div>
</section><!-- Trainers section end -->

<!-- Certified section -->
<section class="certified-section spad set-bg" data-setbg="<?php echo get_template_directory_uri() ?>/img/certified-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ml-auto">
                <div class="section-title">
                    <h2><span>Get certified</span> as a<br>Professional Trainer</h2>
                    <p>Donec nec sapien in urna fermentum ornare. Morbi vel ultrices leo. Sed eu turpis eu arcu vehicula fringilla ut vitae orci. Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus. </p>
                </div>
               <form class="certified-form">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" placeholder="Your name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Your e-mail">
                        </div>
                        <div class="col-md-12">
                            <input type="text" placeholder="Subject">
                            <label class="attach" for="attach">Attach C.V.</label>
                            <input type="file" id="attach" class="attach-field">
                            <button class="site-btn">Send Appication</button>
                        </div>
                    </div>
                </form>
                <?PHP
                //echo do_shortcode('[contact-form-7 id="14" title="Контактна форма 1"]');
                ?>            </div>
        </div>
    </div>
</section>
<!-- Certified section end -->

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
?>