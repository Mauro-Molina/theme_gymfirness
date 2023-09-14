 <?php get_header(); ?>
 
 <?php while( have_posts(  )) : the_post(); ?>
  
  <h1><?php  the_title(); ?></h1>
  <?php 
   if( has_post_thumbnail()){
     the_post_thumbnail();
   } else {
    echo "No hay imagen destacada predefinida";
   }
    ?>

 <p><?php the_content(); ?></p>

<p>Escrito por: <?php the_author(); ?></p>
<p>Fecha: <?php the_date(); ?></p>

 <?php endwhile ?>

<?php get_footer(); ?>