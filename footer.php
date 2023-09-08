

<footer class="site-footer contenedor">
    <hr>

    <div class="contenido-footer">
        <!--Navegacion -->
        <?php 
            $args = array(
                'theme_location' => 'menu-principal',
                'container' => 'nav',
                'container_class' => 'menu-principal'
                );
                    wp_nav_menu($args);
        ?>
        <!--Navegacion -->
        <p class="copy">Todos los derechos reservados <?php get_bloginfo('name') . " " . date('Y'); ?></p>
    </div>
</footer>


<?php wp_footer(); ?>
</body>
</html>