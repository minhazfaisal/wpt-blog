<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage wptb1
 * @since wptb1 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			printf(
				_nx(
					'One thought on "%2$s"',
					'%1$s thoughts on "%2$s"',
					get_comments_number(),
					'comments title',
					'wptb1'
				),
				number_format_i18n( get_comments_number() ),
				'<span>' . get_the_title() . '</span>'
			);
			?>
		</h2>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'       => 'ol',
				'short_ping'  => true,
				'avatar_size' => 74,
			) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav class="navigation comment-navigation" role="navigation">

				<h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'wptb1' ); ?></h1>
				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'wptb1' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'wptb1' ) ); ?></div>
			</nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
			<p class="no-comments"><?php _e( 'Comments are closed.', 'wptb1' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php 

    $fields = array(
      'author' => '<div class="col-sm-12">
      <div class="form-group">
          <input class="form-control" name="author" id="name" type="text" placeholder="Name">
      </div>
      </div>',
      'email' => '<div class="col-sm-12">
      <div class="form-group">
          <input class="form-control" name="email" id="email" type="email" placeholder="Email">
      </div>
      </div>',
      'url' => '<div class="col-12">
      <div class="form-group">
          <input class="form-control" name="url" id="url" type="text" placeholder="Website">
      </div>
      </div>'
    );

    $args = array(
        'class_submit' => 'main_btn',
        'label_submit' => 'Send Message',

        'comment_field' => '<div class="form-group">
        <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
        </div>',
        'fields' => apply_filters( 'comment_form_default_fields', $fields )
    );

    comment_form( $args );
  
  ?>

</div><!-- #comments -->
