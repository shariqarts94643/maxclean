<?php get_header(); ?>

<?php
     if ( have_posts() ) :
          while ( have_posts() ) : the_post(); ?>

          <?php get_template_part('content', get_post_format()); ?>



    <?php endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif; ?>

<?php get_footer(); ?>
