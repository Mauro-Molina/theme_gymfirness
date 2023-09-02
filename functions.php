<?php

function gymfitnees_menus(){
    register_nav_menus(array(
        'menu-principal' => __( 'Menu Principal' )
    ));
}

add_action('init', 'gymfitnees_menus');