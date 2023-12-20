<?php get_header(); ?>

    <main class="pagina seccion no-sidebar contenedor" style="display: block;">
        <?php $categoria = get_queried_object(); ?>

        <h2 class="text-center texto-primario"><?php echo "Categoria: " . $categoria->name; ?></h2>

        <ul class="listado-blog">
           <?php get_template_part('template-parts/loop', 'blog'); ?>
        </ul>
    </main>

<?php get_footer(); ?>