<?php

/*
Plugin name: Prevent Duplicate Comments
Description: a hook to prevent duplicate content on comment pages
Plugin Author: Jerome Ssenyonga
Plugin URI: https://jarvtechnologies.com
Author URI: https://jarvtechnologies.com
*/


function canonical_for_comments() {
  global $cpage, $post;
  if ( $cpage > 1 ) :
    echo "n";
      echo "<link rel='canonical' href='";
      echo get_permalink( $post->ID );
      echo "' />n";
   endif;
}

add_action( 'wp_head', 'canonical_for_comments' );