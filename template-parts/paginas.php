<?php while( have_posts(  )) : the_post(); ?>
 
       <h1 class="text-center texto-primario"><?php  the_title(); ?></h1>
       <?php 
       if( has_post_thumbnail()){
         the_post_thumbnail('blog', array('class' => 'imagen-destacada'));
       } else {
         //echo "No hay imagen destacada predefinida";
       }
         ?>

         <?php
          if (get_post_type() === 'clases'){
           
            $hora_inicio = get_field('hora_de_inicio');
            $hora_fin = get_field('hora-final');
          ?>

        <p><?php the_field('dias_de_clases_'); ?> - <?php echo $hora_inicio . " a " . $hora_fin; ?> horas</p>
         <?php }
         ?>

     <p><?php the_content(); ?></p>

     <?php endwhile ?> 