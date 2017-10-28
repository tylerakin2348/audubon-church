<div class="front-page">
    <div class="header-image">
        <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail();
        } ?>
    </div>
   <?php the_content(); ?>

</div>
