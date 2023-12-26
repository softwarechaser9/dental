<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bdrf
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
<style>
    .comments-title{
        position:relative;
    }
    .comments-area .align{
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 0 60px;
    }
</style>
<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<div class="Flex align text-center">
            <p class="comments-title relative text-outside-line-full">
                <?php
                $bdrf_comment_count = get_comments_number();
                if ( '1' === $bdrf_comment_count ) {
                    printf(
                    /* translators: 1: title. */
                        esc_html__( 'Comments on &ldquo;%1$s&rdquo;', 'bdrf' ),
                        '<span>' . wp_kses_post( get_the_title() ) . '</span>'
                    );
                } else {
                    printf(
                    /* translators: 1: comment count number, 2: title. */
                        esc_html( _nx( '%1$s Comments ;', '%1$s Comments;', $bdrf_comment_count, 'comments title', 'bdrf' ) ),
                        number_format_i18n( $bdrf_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                        '<span>' . wp_kses_post( get_the_title() ) . '</span>'
                    );
                }
                ?>
            </p><!-- .comments-title -->

        </div>
		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ul',
                    'short_ping' => true,
                    'callback' => 'better_comments'
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'bdrf' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

    //Declare Vars
    $comment_send = 'Send Message';
    $comment_reply = 'Write a Comment';
    $comment_reply_to = 'Reply';

    $comment_author = 'Name';
    $comment_email = 'E-Mail';
    $comment_body = 'Comment';
    $comment_url = 'Website';
    $comment_cookies_1 = '<span style="margin-left:10px">By commenting you accept the';
    $comment_cookies_2 = ' Privacy Policy</span>';

    $comment_before = 'Registration isn\'t required.';

    $comment_cancel = 'Cancel Reply';

    //Array
    $comments_args = array(
        //Define Fields
        'fields' => array(
            //Author field
            'author' => '<p class="comment-form-author"><br /><input id="author" name="author" class="form-control" aria-required="true" placeholder="' . $comment_author .'"></input></p>',
            //Email Field
            'email' => '<p class="comment-form-email"><br /><input id="email" class="form-control" name="email" placeholder="' . $comment_email .'"></input></p>',
            //URL Field
            'url' => '<p class="comment-form-url"><br /><input id="url" class="form-control" name="url" placeholder="' . $comment_url .'"></input></p>',
            //Cookies
            'cookies' => '<input type="checkbox"  required>' . $comment_cookies_1 . '<a href="' . get_privacy_policy_url() . '">' . $comment_cookies_2 . '</a>',
        ),
        // Change the title of send button
        'label_submit' => __( $comment_send ),
        // Change the title of the reply section
        'title_reply' => __( $comment_reply ),
        // Change the title of the reply section
        'title_reply_to' => __( $comment_reply_to ),
        //Cancel Reply Text
        'cancel_reply_link' => __( $comment_cancel ),
        // Redefine your own textarea (the comment body).
        'comment_field' => '<p class="comment-form-comment"><br /><textarea id="comment" class="form-control" name="comment" aria-required="true" placeholder="' . $comment_body .'"></textarea></p>',
        //Message Before Comment
        'comment_notes_before' => __( $comment_before),
        // Remove "Text or HTML to be displayed after the set of comment fields".
        'comment_notes_after' => '',
        //Submit Button ID
        'id_submit' => __( 'comment-submit' ),
    );
    comment_form( $comments_args );


	?>

</div><!-- #comments -->
