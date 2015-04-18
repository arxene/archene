<?php get_header(); ?>
        	<div class="col-xs-12 col-sm-8">
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
                ?>

                <!--nav>
                    <ul class="pagination">
                        <li>
                            <?php                    
                                // Previous page navigation.
                                previous_posts_link( '&laquo; Newer' );
                            ?>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li>
                            <?php
                                next_posts_link( 'Older &raquo;' );

                                // If no content, include the "No posts found" template.
                                else :
                                    get_template_part( 'content', 'none' );             
                                endif;
                            ?>
                        </li>
                    </ul>
                </nav-->

                <?php pagination(); ?>
            </div>
        </div>
    </div><!-- .container-fluid -->
    
	<?php get_footer(); ?>