<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title></title>

          <?php wp_head(); ?>
     </head>

     <?php

		if( is_front_page() ):
			$maxclean_classes = array( 'maxclean-class', 'my-class' );
		else:
			$maxclean_classes = array( 'no-maxclean-class' );
		endif;

	?>

	<body <?php body_class( $maxclean_classes ); ?>>

     <body>

          <?php wp_nav_menu(array('theme_loaction' => 'primary')); ?>
