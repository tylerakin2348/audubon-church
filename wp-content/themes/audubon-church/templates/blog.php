<?php
/*
Template Name: Blog Page
*/
?>

<?php get_header(); ?>
<div class="page-wrapper">
    <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
    ?>
    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    	<?php the_excerpt(__('Continue reading »','example')); ?>
    </div>
    <?php endwhile; ?>
    <div class="post-navigation">
        <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
    </div><!-- /.navigation -->
   <?php endif; ?>
</div>
<?php get_footer(); ?>
