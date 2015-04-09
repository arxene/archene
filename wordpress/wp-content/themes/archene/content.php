<article id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<?php
			if ( is_single() ) :
				the_title( '<h2 class="entry-title">', '</h2>' );
			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php archene_entry_meta(); ?>
		<?php edit_post_link( __( 'Edit', 'archene' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
