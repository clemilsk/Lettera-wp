<?php

require_once('custom_post/cadastro-imoveis.php');

//Imob Register Scripts
function imob_register_scripts() {
    // Add print CSS.
	wp_enqueue_style( 'imob-style', get_template_directory_uri() . '/assets/css/theme.css', array(), false, 'all');

    wp_enqueue_script( 'imob-js', get_template_directory_uri() . '/assets/js/navmenu.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'imob_register_scripts' );

//Add custom 
function wpdocs_add_custom()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post','page'));
}
add_action('init', 'wpdocs_add_custom');



