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
	printf( '<p>Posted on %1$s at %2$s by <a href="%3$s">%4$s</a>.</p>',
			get_the_date(),
			get_the_time(),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			get_the_author()
	);
			
	if ( 'post' == get_post_type() ) {
		$categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.') );
		if ( $categories_list ) {
			printf( '<p>%1$s %2$s</p>',
				_x( 'Categories:', 'Used before category names.', 'archene' ),
				$categories_list
			);
		}

		$tags_list = get_the_tag_list( '', _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfifteen' ) );
		if ( $tags_list ) {
			printf( '<p>%1$s %2$s</p>',
				_x( 'Tags:', 'Used before tag names.', 'twentyfifteen' ),
				$tags_list
			);
		}
	}
}
endif;
 
?>