<?php
/*
 *Template Name: Con Sidebar
 * 
  */
 get_header(); ?>
 
 <main class="contenedor pagina seccion con-sidebar">
   <div class="text-center">
     <?php get_template_part('template-parts/paginas')?>
   </div>

   <?php get_sidebar('clases'); ?>
 </main>

<?php get_footer(); ?>