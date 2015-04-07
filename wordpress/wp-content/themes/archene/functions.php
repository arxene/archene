<?php

$args = array(
	'flex-width'    => true,
	'width'         => '100%',
	'flex-height'   => true,
	'height'        => 300,
	'default-image' => get_template_directory_uri() . '/images/archene-logo.jpg',
	'uploads'       => true,
);
add_theme_support( 'custom-header', $args );
function register_sidebar_menu() {
  register_nav_menu('sidebar-menu',__( 'Sidebar Menu' ));
}
add_action( 'init', 'register_sidebar_menu' );
 
?>