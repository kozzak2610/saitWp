
<?php
/*
* Template name: FRONT-UK
*/
get_header();
?>
<section class="hero-section set-bg" data-setbg="<?php echo get_template_directory_uri() ?>/img/hero-bg.jpg">
    <div class="container">
        <div class="hero-text">
            <h2>Фізична активність</h2>
            <h2>підсилює <span>позитивну енергію!</span></h2>
            <a href="" class="site-btn">Приєднуйся</a>
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
                    <h2>Справжня <span>тренування</span> починається тоді, коли ви хочете зупинитися.
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="icon-box-item">
                    <div class="ib-icon">
                        <i class="flaticon-004-dumbbell"></i>
                    </div>
                    <h4><?php echo  get_post_meta('56','first-Workouts-title-uk', true); ?></h4>
                    <p><?php echo  get_post_meta('56','first-Workouts-uk', true); ?> </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-box-item">
                    <div class="ib-icon">
                        <i class="flaticon-031-app-1"></i>
                    </div>
                    <h4><?php echo  get_post_meta('56','first-Workouts-title-uk', true); ?></h4>
                    <p><?php echo  get_post_meta('56','first-Workouts-uk', true); ?> </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-box-item">
                    <div class="ib-icon">
                        <i class="flaticon-010-podium"></i>
                    </div>
                    <h4><?php echo  get_post_meta('56','first-Workouts-title-uk', true); ?></h4>
                    <p><?php echo  get_post_meta('56','first-Workouts-uk', true); ?> </p>
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
                    <h2>Платіть зараз і отримайте знижку <span>25%</span></h2>
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri() ?>/img/check-icon.png" alt="">Спорт це життя</li>
                        <li><img src="<?php echo get_template_directory_uri() ?>/img/check-icon.png" alt="">Спорт це ми</li>
                        <li><img src="<?php echo get_template_directory_uri() ?>/img/check-icon.png" alt="">Спорт це сила.</li>
                    </ul>
                    <a href="#" class="site-btn">Стати спортсменом</a>
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
                    <p>Щасливі клієнти</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="milestone">
                    <h2>356</h2>
                    <p>Сильне тіло</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="milestone">
                    <h2>57k</h2>
                    <p>IG підписників</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="milestone">
                    <h2>24/7</h2>
                    <p>Працюємо</p>
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
            <h2>Наші <span>тренери</span></h2>
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
                    <h2>Калькулятор <span>BMI</span></h2>
                    <p>Калорії це важлива річ  пам'ятай саме цей калькулятор все підрахує</p>
                </div>
                <div class="bmi-calculator-warp">
                    <div class="bmi-calculator">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" placeholder="Вага (KG)" id="bmi-weight">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Висота (M)" id="bmi-hight">
                            </div>
                            <div class="col-sm-6">
                                <button class="site-btn" id="bmi-submit">Підрахувати</button>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="bmi-result" readonly>
                            </div>
                        </div>
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
                    <h2 style="margin-right:25px">Підписуйся на <span>роозсилку</span> </h2>
                </div>
            </div>
            <div class="col-lg-6">
                <form class="newsletter-form">
                    <input type="text" placeholder="Ваша пошта">
                    <button class="site-btn" type="submit">Підписатися</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
get_footer('uk');
?>