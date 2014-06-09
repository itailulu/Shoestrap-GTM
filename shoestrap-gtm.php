<?php
/*
   Plugin Name: Shoestrap GTM
   Plugin URI: http://wordpress.org/extend/plugins/shoestrap-gtm/
   Version: 0.1
   Author: Itai Lulu Koren
   Description: Adds the DuracellTomi's GTM for WP on custom location, right after the opening BODY tag
   Text Domain: shoestrap-gtm
   License: GPLv3
  */

function my_custom_shoestrap_after_main_content() {
  if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { 
    gtm4wp_the_gtm_tag();
  }
}
add_action( 'get_header', 'my_custom_shoestrap_after_main_content', 1 );