<div class="front-page">
    <div class="header-content" style="background-image: url('<?php echo wp_get_attachment_url(
        get_post_thumbnail_id( $post->ID ) ); ?>');">
        <div class="church-info">
            <div class="church-info__time">
                <p>Bible Study at 9:30 am <br> Worship Service at 10:45 am</p>
            </div>
            <div class="church-info__location">
                <p>1046 Hess Lane. <br> Louisville, KY 40217</p>
            </div>
        </div>
    </div>
   <?php the_content(); ?>

   <div class="default-layout aligncenter">
       <p>We see a Church faithful from <span class="callout-text--red">GENERATION TO GENERATION</span>, possessing <span class="callout-text--red">MISSIONAL</span> hearts and feet for the lost, demonstrating <span class="callout-text--red">STEWARDSHIP</span> of the Saints and resources entrusted to our care, all for the glory of our Lord Jesus Christ.</p>
   </div>

   <div class="three-column-layout background-overlay">
       <div class="inner-container">
           <div class="column">
               <div class="column_primary-content">
                   <h3>Generation to Generation</h3><img class="alignnone size-full wp-image-20" src="http://localhost:8869/audubon-church/wp-content/uploads/2017/10/IMG_2224.jpg" alt="" width="2000" height="1500" />
                   <a href="http://localhost:8869/audubon-church/our-church/"><span></span></a>
               </div>
               <div class="column_secondary-content">
                   <p>"One generation shall commend Your works to another, and shall declare Your mighty acts.
                       <br />Psalm 145:4"</p>
               </div>
           </div>

           <div class="column">
               <div class="column_primary-content">
                   <h3>Missional</h3><img class="alignnone size-full wp-image-27" src="http://localhost:8869/audubon-church/wp-content/uploads/2017/10/IMG_2248.jpg" alt="" width="2000" height="1500" />
                   <a href="http://localhost:8869/audubon-church/our-church/"><span></span></a>
               </div>
               <div class="column_secondary-content">
                   <p>"Declare his glory among the nations, his marvelous works among all the peoples!
                       <br />1 Chronicles 16:24"</p>
               </div>
           </div>

            <div class="column">
                <div class="column_primary-content">
                    <h3>Stewarding</h3><img class="alignnone size-full wp-image-30" src="http://localhost:8869/audubon-church/wp-content/uploads/2017/10/IMG_2252.jpg" alt="" width="2000" height="1500" />
                    <a href="http://localhost:8869/audubon-church/our-church/leadership"><span></span></a>
                </div>
                <div class="column_secondary-content">
                    <p>"So teach us to number our days that we may get a heart of wisdom.
                        <br />Psalm 90:12"</p>
                </div>
            </div>
       </div>
   </div>
<!--
   <div class="default-layout aligncenter">
       <p>Blessed be the God and Father of our Lord Jesus Christ! According to his great mercy, he has caused us to be born again to a living hope through the resurrection of Jesus Christ from the dead.<br>1 Peter 1:3</p>
   </div>

   <div class="half-and-half-layout background-overlay">
       <div class="inner-container">
           <div class="column latest-sermon--block">
               <h3>Latest Sermon</h3><img class="alignnone size-full wp-image-33" src="http://localhost:8869/audubon-church/wp-content/uploads/2017/10/IMG_2258.jpg" alt="" width="2000" height="2667" />
           </div>
           <div class="column latest-post--block">
               <h3>Latest Article</h3><img class="alignnone size-full wp-image-25" src="http://localhost:8869/audubon-church/wp-content/uploads/2017/10/IMG_2244.jpg" alt="" width="2000" height="2667" /><a href="http://localhost:8869/audubon-church/articles/"><span></span></a>
               <?php
                    $args = array( 'numberposts' => '1' );
                    $recent_posts = wp_get_recent_posts( $args );
                    foreach( $recent_posts as $recent ){
                        printf( '<span class="latest-post"><a href="%1$s">%2$s</a></span>',
                             esc_url( get_permalink( $recent['ID'] ) ),
                             apply_filters( 'the_title', $recent['post_title'], $recent['ID'] )
                         );
                    }
                ?>
           </div>

       </div>
   </div> -->
</div>
