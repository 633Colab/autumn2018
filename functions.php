<?php 
//enque styles

function colab_theme_styles() {
    wp_register_style('autumn2018', get_template_directory_uri() . '/css/autumn2018.css', __FILE__));
    wp_enqueue_style('autum2018');
}


add_action( 'wp_enqueue_scripts', 'colab_theme_styles' );  

// Include custom navwalker
require_once('bs4navwalker.php');

// Register WordPress nav menu
register_nav_menu('top', 'Top menu');

