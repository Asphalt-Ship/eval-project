<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

/** 
 * Disable title on all post types. 
 */ 
function your_prefix_post_title() { 
    $post_types = array('page','post'); 
   
    // bail early if the current post type if not the one we want to customize. 
    if ( ! in_array( get_post_type(), $post_types ) ) { return; } 
   
    // Disable title. 
    add_filter( 'astra_the_title_enabled', '__return_false' ); 
   }
   add_action( 'wp', 'your_prefix_post_title' );