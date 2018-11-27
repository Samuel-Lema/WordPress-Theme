<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function onepress_child_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'miFuncion', 'onepress-child' ),
		'id'            => 'funcion',
	    'description'   => __( 'Agregamos un widget', 'onepress-child' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title MiClase">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'onepress_child_widgets_init' );

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}

add_action( 'init', 'register_my_menu' );


?>