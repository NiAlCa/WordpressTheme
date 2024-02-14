<?php

//includes

require get_template_directory() . '/includes/widgets.php';
require get_template_directory() . '/includes/queries.php';


function prueba_setup() {

    //imagenes destacadas
    add_theme_support('post-thumbnails');

    //Titulos para SEO 
    add_theme_support('title-tag');


}
add_action('after_setup_theme', 'prueba_setup');


function prueba_scripts_styles(){
    wp_enqueue_style('normalize', get_template_directory_uri(). '/css/normalize.css', array(), '1.0');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0');
    wp_enqueue_style('lightboxcss', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.11.3' );



    wp_enqueue_script('lightboxjs', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '2.11.3', true);

    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);

    
}

add_action('wp_enqueue_scripts', 'prueba_scripts_styles');

function prueba_menus(){
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'prueba')
    ));
}

add_action('init', 'prueba_menus');


//Zona widgets

function prueba_widgets() {
    register_sidebar( array(
        'name' => 'Sidebar 1',
        'id' => 'sidebar_1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center text-primary">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => 'Sidebar 2',
        'id' => 'sidebar_2',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center text-primary">',
        'after_title' => '</h3>'
    ) );
}
add_action('widgets_init', 'prueba_widgets');


//Shortcode

function prueba_ubicacion_shortcode(){
    ?>
    <div class="mapa">
        <?php
            if(is_page('contacto')) {
                the_field('ubicacion');
            }
        ?>
    </div>
    
    <h2 class="text-center text-primary">Formulario de Contacto</h2>
    <?php
    echo do_shortcode('[contact-form-7 id="102" title="Formulario de contacto 1"]');
}
add_shortcode('prueba_ubicacion', 'prueba_ubicacion_shortcode');




function prueba_hero_imagen() {

    $front_id = get_option('page_on_front');


    $id_imagen = get_field('hero_imagen', $front_id);


    $imagen = wp_get_attachment_image_src($id_imagen, 'full')[0];

    wp_register_style('custom', false);
    wp_enqueue_style('custom');

    $imagen_destacada_css = "
        body.home .header {
            background-image: linear-gradient(rgb(128, 128, 128, 0.75), rgb(255, 255, 255)), url($imagen);
        }
    ";

    wp_add_inline_style('custom', $imagen_destacada_css);
}
add_action('init', 'prueba_hero_imagen');

?>



