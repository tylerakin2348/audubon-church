<div class="front-page">
    <div class="header-content" style="background-image: url('<?php echo wp_get_attachment_url(
        get_post_thumbnail_id( $post->ID ) ); ?>');">
        <div class="church-info">
            <div class="church-info__time">
                <p>Bible Study at 9:30 am <br /> Worship Service at 10:45 am</p>
            </div>
            <div class="church-info__location">
                <p>1046 Hess Lane. <br /> Louisville, KY 40217</p>
            </div>
        </div>
    </div>

   <?php the_content(); ?>

</div>
