<?php get_header() ?>

<main class="contenedor seccion con-sidebar">
    <section class="contenido-principal">
        <?php get_template_part('template-parts/pagina'); ?>
    </section>

    <?php 
            get_sidebar('servicios');
        ?>

</main>


<?php get_footer() ?>

