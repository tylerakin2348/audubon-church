<?php
/*
Template Name: Blog Page
*/
?>

<?php get_header(); ?>
<div class="blog-page">
    <h2 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <?php

  	if ( have_posts() ) : while ( have_posts() ) : the_post();

      get_template_part( 'content-single', get_post_format() );

    endwhile; endif;
    ?>

<?php get_footer(); ?>
</div><!-- /.blog-post -->
