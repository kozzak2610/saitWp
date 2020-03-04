<?php
/*
* Template name: Posts
*/
$temp = $wp_query;
$wp_query = null;
$wp_query = new WP_Query();
$wp_query->query('showposts=2' . '&paged=' . $paged);
get_header();
?>
    <!-- Page top section -->
    <section class="page-top-section set-bg"
             data-setbg="<?php echo get_template_directory_uri() ?>/img/header-bg/3.jpg">
        <div class="container">
            <h2><?php the_title();?></h2>
        </div>
    </section>
    <!-- Page top section end -->

    <!-- Blog section -->
    <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php
                    while ($wp_query->have_posts()) : $wp_query->the_post();
                        $author = get_the_author();
                        $date = get_the_date();
                        ?>
                        <div class="blog-item">
                            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                            <h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
                            <div class="blog-metas">
                                <div class="blog-meta"> By <?php echo $author; ?></div>
                            </div>
                            <p><?php the_excerpt(); ?></p>
                            <div class="site-btn"><a href="<?php the_permalink(); ?>" title="Read more">Read More</a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php if ($paged > 1) { ?>

                        <nav class="site-pagination">
                            <a><?php next_posts_link('&laquo; Previous Posts'); ?></a>
                            <a><?php previous_posts_link('Newer Posts &raquo;'); ?></a>
                        </nav>


                    <?php } else { ?>

                        <nav id="nav-posts">
                            <a><?php next_posts_link('&laquo; Previous Posts'); ?></a>
                        </nav>

                    <?php } ?>
                    <?php wp_reset_postdata(); ?>
                </div>

                <div class="col-lg-4 col-md-7 col-sm-9 sidebar">
                    <div class="widget-area">
                        <form class="search-widget">
                            <input type="text" placeholder="Search">
                            <button><img src="<?php echo get_template_directory_uri() ?>/img/icons/search.png" alt="">
                            </button>
                        </form>
                    </div>

                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-1') ) : ?>
                    <?php endif; ?>
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