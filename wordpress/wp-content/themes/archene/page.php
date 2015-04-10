<?php get_header(); ?>
	
            <div class="col-xs-12 col-sm-8">
                <div class="post">
                
                    <?php
                        // Start the loop.
                        while ( have_posts() ) : the_post();
                    
                            // Include the page content template.
                            get_template_part( 'content', 'page' );
                    
                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                    
                        // End the loop.
                        endwhile;
                        
                        
                    ?>
                </div><!-- .post -->
            </div>
        </div><!-- .row in header.php -->
        
        <?php get_footer(); ?>