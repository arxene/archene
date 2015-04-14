<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'archene' ),
					number_format_i18n( get_comments_number() ), get_the_title() );
			?>
		</h2>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 56,
				) );
			?>
		</ol><!-- .comment-list -->

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'archene' ); ?></p>
	<?php endif; ?>

	<?php
		/**
		 * Lifted these args for a responsive Bootstrap form from
		 * http://www.hiresponsive.com/how-to-customize-responsive-wordpress-comment-form/
		 */
		$args = array(
			'fields' => apply_filters(
				'comment_form_default_fields', array(
					'author' =>'<div class="form-group">' .
					'<label for="comment_author" class="col-sm-2 control-label">Name*</label>' .
					'<div class="col-sm-10"><input id="author" placeholder="Name" name="author" class="form-control" type="text" value="' .
					esc_attr( $commenter['comment_author'] ) . '" /></div></div><!-- form-group -->'
					,
					'email'  => '<div class="form-group">' .
					'<label for="comment_author_email" class="col-sm-2 control-label">Email*</label>' .
					'<div class="col-sm-10"><input id="email" placeholder="email@domain.com" name="email" class="form-control" type="text" value="' .
					esc_attr( $commenter['comment_author_email'] ) . '" /></div></div><!-- form-group -->'
					,
					'url'    => '<div class="form-group">' .
					'<label for="comment_author_url" class="col-sm-2 control-label">Website (optional)</label>' .
					'<div class="col-sm-10"><input id="url" name="url" class="form-control" placeholder="http://your-site-name.com" type="text" value="' .
					esc_attr( $commenter['comment_author_url'] ) . '" /></div></div><!-- form-group -->'
				)
			),
			'comment_field' => '<div class="form-group">' .
			'<textarea id="comment" name="comment" class="form-control" placeholder="Leave a comment" rows="8" aria-required="true"></textarea></div>'
			,
			'comment_notes_after' => ''
			,
			'title_reply' => '<h4>Leave a Comment</h4>'
			,
			'class_submit' => 'btn btn-default'
		);
		
    	comment_form($args, $post->ID);
	?>

</div><!-- .comments-area -->