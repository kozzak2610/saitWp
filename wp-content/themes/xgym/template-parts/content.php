<?php

the_post(); ?>
<div class="container blog-post" style="min-height:700px ">
    <h3><?php the_title() ?></h3>
    <p><?php the_post_thumbnail(); ?></p>
    <p><?php the_author(); ?></p>
    <p><?php the_date(); ?></p>
    <p><?php the_content(); ?></p>
</div>



    <h3><?php //the_title() ?></h3>

<?php //the_content();

//$value = rwmb_meta( 'name');
//$value1 = rwmb_meta( 'bio');
//echo $value;
//echo $value1;
?>

