			<?php
				/**
				 * The template for displaying all single posts and attachments
				 */
	
				get_header(); 
			?>
			
			<div class="col-xs-12 col-sm-8">
		    	<div class="post">
		
					<?php
						// Start the loop.
						while ( have_posts() ) : the_post();
				
							/*
							 * Include the post format-specific template for the content. If you want to
							 * use this in a child theme, then include a file called called content-___.php
							 * (where ___ is the post format) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );
				
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
				
							// Previous/next post navigation.
							previous_post_link('<span class="nav-previous"><span class="glyphicon ' .
								'glyphicon-chevron-left" aria-hidden="true"></span>%link</span>');
							next_post_link('<span class="nav-next">%link<span class="glyphicon ' .
								'glyphicon-chevron-right" aria-hidden="true"></span></span>');
				
				
						// End the loop.
						endwhile;
					?>
		
				</div><!-- .post -->
			</div><!-- .col-xs-12 .col-sm-8 -->
		</div><!-- .row -->
	</div><!-- .container-fluid -->

	<?php get_footer(); ?>
