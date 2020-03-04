<?php
/*
* Template name: default
*/
get_header();
?>
    <!-- Page top section -->
    <section class="page-top-section set-bg"
             data-setbg="<?php echo get_template_directory_uri() ?>/img/header-bg/3.jpg">
        <div class="container">
            <h2><?php the_title()?></h2>
        </div>
    </section>
    <!-- Page top section end -->

    <!-- Blog section -->
    <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php the_content();?>
                </div>

                <div class="col-lg-4 col-md-7 col-sm-9 sidebar">
                    <div class="widget-area">
                        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('default-default') ) : ?>
                        <?php endif; ?>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- Blog section end -->

    <!-- Newsletter section  -->
    <section class="newsletter-section set-bg"
             data-setbg="<?php echo get_template_directory_uri() ?>/img/newsletter-bg.jpg">
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