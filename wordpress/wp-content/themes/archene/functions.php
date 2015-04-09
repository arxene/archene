<?php

$args = array(
	'flex-width'    => true,
	'width'         => '100%',
	'flex-height'   => true,
	'height'        => 300,
	'default-image' => get_template_directory_uri() . '/images/archene-vector-logo.png',
	'uploads'       => true,
);
add_theme_support( 'custom-header', $args );

if ( ! function_exists( 'register_sidebar_menu' ) ) :
function register_sidebar_menu() {
  register_nav_menu('sidebar-menu',__( 'Sidebar Menu' ));
}
endif;
add_action( 'init', 'register_sidebar_menu' );

if ( ! function_exists( 'archene_entry_meta' ) ) :
function archene_entry_meta() {
	printf( '<p>Posted on %1$s at %2$s.</p>',
			get_the_date(),
			get_the_time() );
}
endif;
 
?>