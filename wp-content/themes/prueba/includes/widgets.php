<?php

if(!defined('ABSPATH')) die();

class Prueba_Servicios_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'gymfitness_widget',
			esc_html__( 'Prueba Servicios', 'prueba' ), 
			array( 'description' => esc_html__( 'Agrega las Servicios como Widget', 'prueba' ), )
		);
	}

    public function widget( $args, $instance ) {
        ?>
            <ul class="servicios-sidebar">
                <?php
                    $args = array(
                        'post_type' => 'prueba_servicios',
                        'posts_per_page' => $instance['cantidad']
                    );
                    $servicios = new WP_Query($args);
                    while($servicios->have_posts()) {
                        $servicios->the_post();
                        ?>
                            <li>
                                <div class="imagen">
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                </div>
                                <div class="contenido-servicios">
                                    <a href="<?php the_permalink(); ?>">
                                        <h3><?php the_title(); ?></h3>
                                    </a>
                                </div>
                            </li>
                        <?php
                    }
                    wp_reset_postdata();
                ?>
            </ul>
        <?php
	}
    public function form( $instance ) {
        $cantidad = !empty($instance['cantidad']) ? $instance['cantidad'] : esc_html('¿Cuántas servicios deseas mostrar?');
 
        ?>
 
        <p>
             <label for="<?php echo esc_attr($this->get_field_id('cantidad')) ?>">
                 <?php esc_attr_e('¿Cuántos servicios deseas mostrar?') ?>
             </label>
 
             <input
                 class="widefat"
                 id="<?php echo esc_attr($this->get_field_id('cantidad')) ?>"
                 name="<?php echo esc_attr($this->get_field_name('cantidad')) ?>"
                 type="number"
                 value="<?php echo esc_attr($cantidad) ?>"
             />
        </p>
 
         <?php
     }

     public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['cantidad'] = (!empty($new_instance['cantidad'])) ? sanitize_text_field($new_instance['cantidad']) : '';
        return $instance;
	}
} 

function prueba_registrar_widget() {
    register_widget( 'Prueba_Servicios_Widget' );
}
add_action( 'widgets_init', 'prueba_registrar_widget' );