<?php
/*
    Plugin Name: Prueba - Post Types
    Plugin URI: Nicolaealexandru.com
    Description: Añade Post Types al sitio
    Version: 1.0.0
    Author: NiAlCa
    Author URI: Nicolaealexandru.com
    Text Domain: prueba
*/





if(!defined('ABSPATH')) die();

// Registrar Custom Post Type
function prueba_servicios_post_type() {

	$labels = array(
		'name'                  => _x( 'servicios', 'Post Type General Name', 'prueba' ),
		'singular_name'         => _x( 'servicio', 'Post Type Singular Name', 'prueba' ),
		'menu_name'             => __( 'servicios', 'prueba' ),
		'name_admin_bar'        => __( 'servicio', 'prueba' ),
		'archives'              => __( 'Archivo', 'prueba' ),
		'attributes'            => __( 'Atributos', 'prueba' ),
		'parent_item_colon'     => __( 'servicio Padre', 'prueba' ),
		'all_items'             => __( 'Todas Las servicios', 'prueba' ),
		'add_new_item'          => __( 'Agregar servicio', 'prueba' ),
		'add_new'               => __( 'Agregar servicio', 'prueba' ),
		'new_item'              => __( 'Nueva servicio', 'prueba' ),
		'edit_item'             => __( 'Editar servicio', 'prueba' ),
		'update_item'           => __( 'Actualizar servicio', 'prueba' ),
		'view_item'             => __( 'Ver servicio', 'prueba' ),
		'view_items'            => __( 'Ver servicios', 'prueba' ),
		'search_items'          => __( 'Buscar servicio', 'prueba' ),
		'not_found'             => __( 'No Encontrado', 'prueba' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'prueba' ),
		'featured_image'        => __( 'Imagen Destacada', 'prueba' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'prueba' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'prueba' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'prueba' ),
		'insert_into_item'      => __( 'Insertar en servicio', 'prueba' ),
		'uploaded_to_this_item' => __( 'Agregado en servicio', 'prueba' ),
		'items_list'            => __( 'Lista de servicios', 'prueba' ),
		'items_list_navigation' => __( 'Navegación de servicios', 'prueba' ),
		'filter_items_list'     => __( 'Filtrar servicios', 'prueba' ),
	);
	$args = array(
		'label'                 => __( 'servicio', 'prueba' ),
		'description'           => __( 'servicios para el Sitio Web', 'prueba' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail',  ),
		'hierarchical'          => true, // true = posts , false = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'prueba_servicios', $args );

}
add_action( 'init', 'prueba_servicios_post_type', 0 );




function prueba_mecanicos_post_type() {

	$labels = array(
		'name'                  => _x( 'mecanicos', 'Post Type General Name', 'prueba' ),
		'singular_name'         => _x( 'mecanico', 'Post Type Singular Name', 'prueba' ),
		'menu_name'             => __( 'mecanicos', 'prueba' ),
		'name_admin_bar'        => __( 'mecanico', 'prueba' ),
		'archives'              => __( 'Archivo', 'prueba' ),
		'attributes'            => __( 'Atributos', 'prueba' ),
		'parent_item_colon'     => __( 'mecanico Padre', 'prueba' ),
		'all_items'             => __( 'Todas Las mecanicos', 'prueba' ),
		'add_new_item'          => __( 'Agregar mecanico', 'prueba' ),
		'add_new'               => __( 'Agregar mecanico', 'prueba' ),
		'new_item'              => __( 'Nueva mecanico', 'prueba' ),
		'edit_item'             => __( 'Editar mecanico', 'prueba' ),
		'update_item'           => __( 'Actualizar mecanico', 'prueba' ),
		'view_item'             => __( 'Ver mecanico', 'prueba' ),
		'view_items'            => __( 'Ver mecanicos', 'prueba' ),
		'search_items'          => __( 'Buscar mecanico', 'prueba' ),
		'not_found'             => __( 'No Encontrado', 'prueba' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'prueba' ),
		'featured_image'        => __( 'Imagen Destacada', 'prueba' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'prueba' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'prueba' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'prueba' ),
		'insert_into_item'      => __( 'Insertar en mecanico', 'prueba' ),
		'uploaded_to_this_item' => __( 'Agregado en mecanico', 'prueba' ),
		'items_list'            => __( 'Lista de mecanicos', 'prueba' ),
		'items_list_navigation' => __( 'Navegación de mecanicos', 'prueba' ),
		'filter_items_list'     => __( 'Filtrar mecanicos', 'prueba' ),
	);
	$args = array(
		'label'                 => __( 'mecanicos', 'prueba' ),
		'description'           => __( 'mecanicos para el Sitio Web', 'prueba' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 7,
		'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'mecanicos', $args );

}
add_action( 'init', 'prueba_mecanicos_post_type', 0 );






function gymfitness_testimoniales_post_type() {
	$labels = array(
		'name'                  => _x( 'Testimoniales', 'Post Type General Name', 'gymfitness' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'gymfitness' ),
		'menu_name'             => __( 'Testimoniales', 'gymfitness' ),
		'name_admin_bar'        => __( 'Testimonial', 'gymfitness' ),
		'archives'              => __( 'Archivo', 'gymfitness' ),
		'attributes'            => __( 'Atributos', 'gymfitness' ),
		'parent_item_colon'     => __( 'Testimonial Padre', 'gymfitness' ),
		'all_items'             => __( 'Todas Las Testimoniales', 'gymfitness' ),
		'add_new_item'          => __( 'Agregar Testimonial', 'gymfitness' ),
		'add_new'               => __( 'Agregar Testimonial', 'gymfitness' ),
		'new_item'              => __( 'Nueva Testimonial', 'gymfitness' ),
		'edit_item'             => __( 'Editar Testimonial', 'gymfitness' ),
		'update_item'           => __( 'Actualizar Testimonial', 'gymfitness' ),
		'view_item'             => __( 'Ver Testimonial', 'gymfitness' ),
		'view_items'            => __( 'Ver Testimoniales', 'gymfitness' ),
		'search_items'          => __( 'Buscar Testimonial', 'gymfitness' ),
		'not_found'             => __( 'No Encontrado', 'gymfitness' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'gymfitness' ),
		'featured_image'        => __( 'Imagen Destacada', 'gymfitness' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'gymfitness' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'gymfitness' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'gymfitness' ),
		'insert_into_item'      => __( 'Insertar en Testimonial', 'gymfitness' ),
		'uploaded_to_this_item' => __( 'Agregado en Testimonial', 'gymfitness' ),
		'items_list'            => __( 'Lista de Testimoniales', 'gymfitness' ),
		'items_list_navigation' => __( 'Navegación de Testimoniales', 'gymfitness' ),
		'filter_items_list'     => __( 'Filtrar Testimoniales', 'gymfitness' ),
	);
	$args = array(
		'label'                 => __( 'Testimoniales', 'gymfitness' ),
		'description'           => __( 'Testimoniales para el Sitio Web', 'gymfitness' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 8,
		'menu_icon'             => 'dashicons-editor-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimoniales', $args );
}
add_action( 'init', 'gymfitness_testimoniales_post_type', 0 );