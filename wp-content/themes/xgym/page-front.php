
<?php
/*
* Template name: FRONT
*/
get_header();
?>
<section class="hero-section set-bg" data-setbg="<?php echo get_template_directory_uri() ?>/img/hero-bg.jpg">
    <div class="container">
        <div class="hero-text">
            <h2>Physical activity</h2>
            <h2>enhances <span>positive energy!</span></h2>
            <a href="" class="site-btn">Join the Gym</a>
        </div>
    </div>
</section>
<!-- Hero section end -->

<!-- Feature section -->
<section class="feature-section">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2>The real <span>workout</span> starts when you want to stop. </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="icon-box-item">
                    <div class="ib-icon">
                        <i class="flaticon-004-dumbbell"></i>
                    </div>
                    <h4><?php echo  get_post_meta('8','first-Workouts-title', true); ?></h4>
                    <p><?php echo  get_post_meta('8','first-Workouts', true); ?> </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-box-item">
                    <div class="ib-icon">
                        <i class="flaticon-031-app-1"></i>
                    </div>
                    <h4><?php echo  get_post_meta('8','first-Workouts-title', true); ?></h4>
                    <p><?php echo  get_post_meta('8','second-Workouts', true); ?> </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-box-item">
                    <div class="ib-icon">
                        <i class="flaticon-010-podium"></i>
                    </div>
                    <h4><?php echo  get_post_meta('8','first-Workouts-title', true); ?></h4>
                    <p><?php echo  get_post_meta('8','three-Workouts', true); ?> </p>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Feature section end -->

<!-- Add section -->
<section class="add-section set-bg" data-setbg="<?php echo get_template_directory_uri() ?>/img/add-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 ml-auto">
                <div class="add-text">
                    <h2>Pay now and get a 25% <span>Discount</span></h2>
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri() ?>/img/check-icon.png" alt="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li><img src="<?php echo get_template_directory_uri() ?>/img/check-icon.png" alt="">Risus commodo viverra maecenas accumsan lacus vel facilisis.</li>
                        <li><img src="<?php echo get_template_directory_uri() ?>/img/check-icon.png" alt="">Ipsum dolor sit amet, consectetur adipiscing elit, sed do.</li>
                    </ul>
                    <a href="#" class="site-btn">Become a Member</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Add section end -->

<!-- Milestones section -->
<section class="milestones-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="milestone">
                    <h2>1374</h2>
                    <p>Happy Clients</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="milestone">
                    <h2>356</h2>
                    <p>Strong Bodies</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="milestone">
                    <h2>57k</h2>
                    <p>IG Followers</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="milestone">
                    <h2>24/7</h2>
                    <p>Working Hours</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Milestones section end -->

<!-- Trainers section -->
<section class="trainers-section">
    <div class="container">
        <div class="section-title text-center">
            <h2>Meet the <span>Trainers</span></h2>
        </div>
        <div class="row">
            <?php
            global $post;
            $args = array( 'numberposts' => 9 , 'post_type' => 'train', 'orderby' => 'date');
            $myposts = get_posts( $args );
            foreach( $myposts as $post ){ setup_postdata($post);
                ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="trainer-item">
                        <div class="trainer-pic">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <h4><?php the_title(); ?></a></h4>
                        <p><?php echo get_the_excerpt(); ?></p>
               </div>
        </div>               <?php
            }
            ?>
        </div>
    </div>
</section>
<!-- Trainers section end -->

<!-- BMI section -->
<section class="bmi-section spad">
    <div class="bmi-bg set-bg" data-setbg="<?php echo get_template_directory_uri() ?>/img/bmi-bg.jpg"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 ml-auto">
                <div class="section-title mb-0">
                    <h2>Calculate your <span>BMI</span></h2>
                    <p>Vivamus libero mauris, bibendum eget sapien ac, ultrices rhoncus ipsum nec sapien.Vivamus libero mauris, bibendum eget sapien ac, ultrices rhoncus ipsum nec sapien.</p>
                </div>
                <div class="bmi-calculator-warp">
                    <div class="bmi-calculator">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" placeholder="Weight (KG)" id="bmi-weight">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Hight (M)" id="bmi-hight">
                            </div>
                            <div class="col-sm-6">
                                <button class="site-btn" id="bmi-submit">Calculate</button>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="bmi-result" readonly>
                            </div>
                        </div>
                        <p>Vivamus libero mauris, bibendum eget sapien ac, ultrices rhoncus ipsum nec sapien.Vivamus libero mauris, bibendum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- BMI section end -->

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
<?php
get_footer();
?>