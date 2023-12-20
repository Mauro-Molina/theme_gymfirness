<?php 
/*
*Template Name: Pagina para galerias
*/
get_header(); ?>
 
 <main class="contenedor pagina seccion no-sidebar">
   <div class="contenido-principal">
        <?php while( have_posts(  )) : the_post(); ?>
        <h1 class="text-center texto-primario"><?php  the_title(); ?></h1>
        <?php
        
        //obtener galeria
         $galeria = get_post_gallery(get_the_ID(), false);

         //obtener id de la galeria
         $galeria_imagenes_ID = explode(",", $galeria['ids']);

        ?>

        <ul class="galeria-imagenes">
          <?php
            $i = 1;
            foreach ($galeria_imagenes_ID as $id):
              $size = ($i == 4 || $i == 6) ? 'portrait' : 'square';
              $imagenThum = wp_get_attachment_image_src($id, $size)[0];
              $imagen = wp_get_attachment_image_src($id, 'full')[0];
              
             ?>

              <li>
                <a href="<?php echo $imagen; ?>" data-lightbox="galeria">
                <img src="<?php echo $imagenThum; ?>" alt="">
                </a>
              </li>

             <?php

          $i++;
          endforeach;

          ?>   
        </ul >

      <?php endwhile ?> 
   </div>
 </main>

<?php get_footer(); ?>