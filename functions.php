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
    $path = get_template_directory_uri();
    //normalize
    wp_enqueue_style('normalize', $path . '/assents/css/normalize.css', array(), '8.0.1');
    //style.css
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');
    //gogle fonts
    wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Raleway:wght@500&family=Staatliches&display=swap', array(), '1.0.0');

    //Slick Nav css
    wp_enqueue_style('SlickNav', $path . '/assents/css/slicknav.min.css', array(), '1.0.10');

    //Slick Nav Js
    wp_enqueue_script('slicknavJS', $path . '/assents/js/slicknav.min.js', array('jquery'), '1.0.10', true);

    //Main JS 

    wp_enqueue_script('mainJS', $path . '/assents/js/main.js', array('jquery', 'slicknavJS'), '1.0.0', true);

    //Jquery Library
    wp_enqueue_script('JQuery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
}

add_action('wp_enqueue_scripts', 'gymfitnees_scripts_styles');