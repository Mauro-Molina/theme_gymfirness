<?php


//Add main menu

function gymfitnees_menus(){
    register_nav_menus(array(
        'menu-principal' => __( 'Menu Principal' )
    ));
}

add_action('init', 'gymfitnees_menus');

//Style and Scripts

function gymfitnees_scripts_styles(){
    //style.css
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');
}

add_action('wp_enqueue_scripts', 'gymfitnees_scripts_styles');