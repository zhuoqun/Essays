<?php
/**
 * Essays functions and definitions
 *
 * */

function essays_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>">
		  <div class="comment-author vcard">
		    <cite class="fn"><?php comment_author_link(); ?></cite> <span class="says">说:</span>		
		  </div><!-- .comment-author .vcard -->

		  <div class="comment-meta commentmetadata">
		    <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><?php comment_time('Y年n月j日G:i'); ?></a>
		  </div><!-- .comment-meta .commentmetadata -->

		  <div class="comment-body"><?php comment_text(); ?></div>

		</div><!-- #comment-##  -->
	</li>

<?php } ?>
