<?php

function pruebas_lista_servicios($cantidad = -1) {
    ?>


<ul class="listado-grid">
    <?php 
$args = array(
    'post_type' => 'prueba_servicios'
);

$clases = new WP_Query($args);
while($clases->have_posts()){
    $clases->the_post();
    ?>
    <li class="card">
        <?php the_post_thumbnail(); ?>
        <div class="contenido">
            <a href="<?php the_permalink(); ?>">
              <h3> <?php the_title(); ?></h3>
            </a>
        </div>
    </li>

    <?php }
    wp_reset_postdata();
?>

</ul>
    <?php
}

function prueba_mecanicos() {
    ?>
        <ul class="listado-grid mecanico">
            <?php 
                $args = array(
                    'post_type' => 'mecanicos'
                );
                $mecanicos = new WP_Query($args);
                while($mecanicos->have_posts()) {
                    $mecanicos->the_post();
                ?>
                    <li class="mecanico">
                       <?php the_post_thumbnail('large'); ?>
                       <div class="contenido text-center">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>

                            <div class="especialidad">
                                <?php 
                                    $esp = get_field('especialidad');

                                    foreach($esp as $e) { ?>
                                        <span class="etiqueta">
                                            <?php echo esc_html($e) ; ?>
                                        </span>
                                <?php } ?>
                            </div>
                       </div>
                    </li>
            <?php 
                }
                wp_reset_postdata();
            ?>
        </ul>

    <?php
}

function prueba_testimoniales() {
    ?>
    <ul class="listado-testimoniales swiper-wrapper">
            <?php 
                $args = array(
                    'post_type' => 'testimoniales'
                );
                $testimoniales = new WP_Query($args);
                while($testimoniales->have_posts()) {
                    $testimoniales->the_post();
                ?>
                    <li class="testimonial text-center swiper-slide">
                        <blockquote>
                            <?php the_content(); ?>
                        </blockquote>

                        <footer class="testimonial-footer">
                            <?php the_post_thumbnail('thumbnail'); ?>
                            <p>
                                <?php the_title(); ?>
                            </p>
                        </footer>
                    </li>
            <?php 
                }
                wp_reset_postdata();
            ?>
        </ul>
    <?php
}