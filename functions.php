<?php 
//enque styles

function autumn2018_styles() {
    wp_register_style('autumn2018_css', get_template_directory_uri() . '/css/autumn2018.css', __FILE__);
    wp_enqueue_style('autum2018_css');
}


add_action( 'wp_enqueue_scripts', 'autum2018_styles' );  

// Include custom navwalker
require_once('bs4navwalker.php');

// Register WordPress nav menu
register_nav_menu('top', 'Top menu');

