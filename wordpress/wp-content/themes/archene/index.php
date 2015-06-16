<?php get_header(); ?>
        	<div class="col-xs-12 col-sm-8 col-lg-9">
				<?php
                    if ( have_posts() ) :
                        // Start the loop.
                        while ( have_posts() ) : the_post();
                ?>
                
                <div class="post">                        
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
					endif;
                	
                	pagination();
                ?>
            </div>
        </div><!-- .row -->
    </div><!-- .container-fluid -->
    
	<?php get_footer(); ?>