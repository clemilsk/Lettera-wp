<?php

require_once('custom_post/header-destaque.php');

//Imob Register Scripts
function imob_register_scripts() {
    // Add print CSS.
	wp_enqueue_style( 'imob-style', get_template_directory_uri() . '/assets/css/theme.css', array(), false, 'all');

    wp_enqueue_script( 'imob-js', get_template_directory_uri() . '/assets/js/navmenu.js', array(), false, true );

    wp_enqueue_script( 'imob-geral-js', get_template_directory_uri() . '/assets/js/geral.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'imob_register_scripts' );

//Add custom 
function wpdocs_add_custom()
{
     //registro de menu
     register_nav_menus( array(
        'primary' => 'Top Menu',
        'footer' => 'Footer Menu'
    ));

    //Suporte a Minhatura do post
    add_theme_support( 'post-thumbnails');
    //Format post 
    add_theme_support( 'post-formats', array( 'audio', 'video', 'image', 'gallery', ) );

    add_theme_support('title-tag');
}
add_action('init', 'wpdocs_add_custom');

//Function favicon insert into wp_head
function add_favicon() {
    echo '<link rel="shortcut icon" type="image/png" href="'.get_template_directory_uri().'/assets/favicon.png" />';
}
add_action('wp_head', 'add_favicon');





