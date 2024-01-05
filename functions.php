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
   /* wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Raleway:wght@500&family=Staatliches&display=swap', array(), '1.0.0'); */

    //Slick Nav css
    wp_enqueue_style('SlickNav', $path . '/assents/css/slicknav.min.css', array(), '1.0.10');

    if(is_page('galeria')) { 
    //LigthBox Css
    wp_enqueue_style( 'ligthbox', $path . '/assents/css/lightbox.min.css', array(), '1.0.0' );
    }
    
    if(is_page('inicio')) { 
        //BXSLider CSS
        wp_enqueue_style( 'bxslider css', $path . '/assents/css/bxslider.css', array(), '4.2.12' );
        }
   
    //leaflet js
    wp_enqueue_style( 'leaflet', 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.css', array(), '1.9.4' );
    

    //Slick Nav Js
    wp_enqueue_script('slicknavJS', $path . '/assents/js/slicknav.min.js', array('jquery'), '1.0.10', true);

    //Main JS 
    wp_enqueue_script('mainJS', $path . '/assents/js/main.js', array('jquery', 'slicknavJS'), '1.0.0', true);

    if(is_page('galeria')) { 
    //ligthbox js
    wp_enqueue_script('ligthbox js', $path . '/assents/js/lightbox.min.js', array('jquery'), '1.0.0', true);
    }

    if(is_page('inicio')) { 
        //bxslider js
        wp_enqueue_script('bxslider js', $path . '/assents/js/bxslider.js', array('jquery'), '4.2.12', true);
        }

    //leaflet js
    wp_enqueue_script('leaflet-js', 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.js', array('jquery'), '1.9.4', true);
    

    //Jquery Library 
    wp_enqueue_script('JQuery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
}

add_action('wp_enqueue_scripts', 'gymfitnees_scripts_styles');


function gymfitnees_setup(){
    //Habilitar imagens destacadas

    add_theme_support('post-thumbnails');


    //Soporte para titulos SEO
    add_theme_support('title-tag');

    //Agregar Imagenes de tamano perzonalisado
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('cajas', 400, 375, true);
    add_image_size('mediano', 700, 400, true);
    add_image_size('blog', 966, 644, true);
}

add_action( 'after_setup_theme', 'gymfitnees_setup');


/* Consultas perzonalizables */

  require get_template_directory() . '/inc/queris.php';
  require get_template_directory() . '/inc/shortcode.php';

  /* definir los widgets */

  function gymfitnees_widgets(){
    register_sidebar( array(
        'name' => 'Sidebar 1',
        'id' => 'sidebar',
        'before_widget' => '<div class="widgets">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    register_sidebar( array(
        'name' => 'Sidebar 2',
        'id' => 'sidebar-2',
        'before_widget' => '<div class="widgets">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
  }

  add_action( 'widgets_init', 'gymfitnees_widgets' );


//image Hero

function gymfitnees_hero_image(){
    //obtener el id de la pagina principal
    $front_page_id = get_option('page_on_front');

    //id de la imagen
    $id_imagen = get_field('image', $front_page_id);

    //Obtenner la imagen
    $imagen = wp_get_attachment_image_src($id_imagen, 'full')[0];

    //Style css
    wp_register_style('custom', false);
    wp_enqueue_style( 'custom' );


    //imagen destacada
    $imagen_destacada_css = "
        body.home .site-header {
            background-image: linear-gradient( rgba(0,0,0,0.75), rgba(0,0,0,0.75)), url($imagen);
        }
    ";

    wp_add_inline_style('custom', $imagen_destacada_css);
}

add_action( 'init', 'gymfitnees_hero_image' );