<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 *
 * @package Zenia
 * @subpackage xgym
 * @since xgym
 */
get_header();
?>
<?php
if ( have_posts() ) {

    // Load posts loop.
    if ( is_singular()){
        while ( have_posts() ) {
            get_template_part('template-parts/content');
        }
    }
}

?>

<!-- Header section end -->

    <!-- Hero section -->
<?php
if(is_front_page()):
?>

<!-- Newsletter section end -->
<?php
endif;
    get_footer(); ?>