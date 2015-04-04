<?php get_header(); ?>
		<div class="row">
        	<div class="col-xs-12 col-md-4">
            	<?php get_sidebar(); ?>
            </div>
            
        	<div class="col-xs-12 col-md-8">
                <div id="content">
                    <?php
						if ( have_posts() ) :
							// Start the loop.
                        	while ( have_posts() ) : the_post();
					?>
                    
                    <div class="post">
                        <?php
							if ( is_single() ) :
								the_title( '<h2 class="entry-title">', '</h1>' );
							else :
								the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
							endif;
						?>
                    	<p><?php the_content() ?></p>
                        
                    <?php            
								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								// get_post_format() documentation at https://codex.wordpress.org/Function_Reference/get_post_format
								get_template_part( 'content', get_post_format() );
					?>
                    
                    </div><!-- .post -->
                    
                    <?php
							// End the loop.
							endwhile;
				
							// Previous/next page navigation.
							the_posts_pagination( array(
								'prev_text'          => __( 'Previous page', 'archene' ),
								'next_text'          => __( 'Next page', 'archene' ),
								'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'archene' ) . ' </span>',
							) );
				
						// If no content, include the "No posts found" template.
						else :
							get_template_part( 'content', 'none' );				
						endif;
                    ?>
                </div><!-- #content -->
            </div>
        </div>
    </div><!-- .container-fluid -->
    
    <?php get_footer(); ?>