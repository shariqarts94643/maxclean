<?php get_header(); ?>

<?php
     if ( have_posts() ) :
          while ( have_posts() ) : the_post(); ?>

          <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>


          <div id="post" class="page-banner container-fluid" style="background-image: url('<?php echo $thumb['0'];?>')">

               <div class="container">
                    <div class="banner-content">
                         <h3>Services</h3>
                    </div>
               </div>

          </div>


          <div class="service-single-section container-fluid no-padding">
               <div class="container">
                    <div class="content-area col-md-9 col-sm-8 col-xs-12">
                         <?php the_content(); ?>
                    </div>
               </div>
          </div>

    <?php endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif; ?>

<?php get_footer(); ?>
