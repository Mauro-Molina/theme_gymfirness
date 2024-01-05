<?php  get_header('front');?>


<section class="bienvenida text-center seccion">
    <h2 class="texto-primario"><?php the_field('encabezado'); ?></h2>
    <p><?php the_field('contenido'); ?></p>
</section>

<div class="seccion-area">
    <ul class="contenedor-area">
        <!-- Area 1 -->
        <li class="area">
            <?php 
                $area1 = get_field('area1');
                $imagen = wp_get_attachment_image_src($area1['area_imagen1'], 'mediano')[0];
            ?>

            <img src="<?php echo esc_attr($imagen); ?>" alt="">
            <p><?php echo esc_html( $area1['area_texto'] ); ?></p>
        </li>
        <!-- Area 1 -->

        <!-- Area 2 -->
        <li class="area">
            <?php 
                $area2 = get_field('area2');
                $imagen = wp_get_attachment_image_src($area2['area_imagen'], 'mediano')[0];
            ?>

            <img src="<?php echo esc_attr($imagen); ?>" alt="">
            <p><?php echo esc_html( $area2['area_texto'] ); ?></p>
        </li>
        <!-- Area 2 -->

        <!-- Area 3 -->
        <li class="area">
            <?php 
                $area3 = get_field('area3');
                $imagen = wp_get_attachment_image_src($area3['area_imagen'], 'mediano')[0];
            ?>

            <img src="<?php echo esc_attr($imagen); ?>" alt="">
            <p><?php echo esc_html( $area3['area_texto'] ); ?></p>
        </li>
        <!-- Area 3 -->

        <!-- Area 4 -->
        <li class="area">
            <?php 
                $area4 = get_field('area4');
                $imagen = wp_get_attachment_image_src($area4['area_imagen'], 'mediano')[0];
            ?>

            <img src="<?php echo esc_attr($imagen); ?>" alt="">
            <p><?php echo esc_html( $area4['area_texto'] ); ?></p>
        </li>
        <!-- Area 4 -->
    </ul>
</div>

<section class="clases">
    <div class="contenedor seccion">
        <h2 class="text-center texto-primario">Nuestras Clases</h2>
        <?php gymfitnees_lista_clases(4); ?>
        
        <div class="contenedor-boton">
            <a href="<?php echo esc_url (  get_permalink( get_page_by_title('Nuestras Clases') ) ); ?>" class="boton boton-primario">Ver todas las clases</a>
        </div>
    </div>
</section>

<section class="instructores">
    <div class="contenedor seccion">
        <h2 class="text-center texto-primario">Nuestros Instructores</h2>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure libero perferendis voluptate nihil incidunt perspiciatis impedit, dolorem architecto ipsa quos porro explicabo, aliquid omnis quasi adipisci! Quibusdam temporibus fuga atque!</p>
    
        <ul class="listado-instructores">
            <?php
                $args = array(
                    'post_type' => 'instructor',
                    'posts_per_page' => 30
                );

                $instructores = new WP_Query($args);
                while ($instructores->have_posts()) : $instructores->the_post();
            ?>

            <li class="instructores">
                <?php the_post_thumbnail('mediano'); ?>
                <div class="contenido text-center">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>

                    <div class="especialidad">
                        <?php
                            $esp = get_field('especialidad');

                            foreach ($esp as $e): ?>

                                <span class="etiqueta"><?echo $e;?></span>
                            <?php endforeach;
                        ?>
                    </div>
                </div>
            </li>

            <?php endwhile; wp_reset_postdata(); ?>
        </ul>
    </div>
</section>

<section class="testimoniales">
    <h2 class="text-center text0-blanco">Testimoniales</h2>

    <dic class="contenedor-testimoniales">
        <ul class="listado-testimoniales">
            <?php
                $args = array(
                    'post_type' => 'testimonial',
                    'post_per_page' => 10,
                );

                $testimoniales = new WP_Query($args);
                while ($testimoniales->have_posts(  ) ) : $testimoniales->the_post(); ?>

                <li class="testimonial">
                    <blockquote>
                        <?php the_content(); ?>
                    </blockquote>

                    <footer class="testimonial-footer">
                        <?php the_post_thumbnail('thumbnail'); ?>
                    </footer>

                    <?php the_title(); ?>
                </li>

                <?php endwhile; wp_reset_postdata(); ?>
         
        </ul>
    </dic>
</section>

<<<<<<< HEAD
<section class="blog contenedor seccion">
    <h2 class="text-center text-primario">Nuestro Blog</h2>
    <p class="text-center">Aprende de nuestros instructores</p>

    
</section>

=======
>>>>>>> 0015eb748253ef9825976aae7252f02fed1515a0
<?php get_footer(); ?>