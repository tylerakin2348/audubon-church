<?php
/*
Template Name: What We Believe
*/
?>

<?php get_header(); ?>

    <?php

  	if ( have_posts() ) : while ( have_posts() ) : the_post();

      get_template_part( 'content-what-we-believe', get_post_format() );

    endwhile; endif;
    ?>

<?php get_footer(); ?>
