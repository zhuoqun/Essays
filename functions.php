<?php
/**
 * Essays functions and definitions
 *
 * */

add_action( 'after_setup_theme', 'essays_setup' );

if (!function_exists('essays_setup')) {

	function essays_setup () {
		// Make theme available for translation
		// Translations can be filed in the /languages/ directory
		load_theme_textdomain( 'essays', TEMPLATEPATH . '/languages' );

		$locale = get_locale();
		$locale_file = TEMPLATEPATH . "/languages/$locale.php";

		if ( is_readable( $locale_file ) ) {
			require_once( $locale_file );
		}
	}

}

function essays_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>">
		  <div class="comment-author vcard">
			  <cite class="fn"><?php comment_author_link(); ?></cite> <span class="says"><?php __('says:', 'essays'); ?></span>		
		  </div><!-- .comment-author .vcard -->

		  <div class="comment-meta commentmetadata">
		    <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><?php comment_time('Y年n月j日G:i'); ?></a>
		  </div><!-- .comment-meta .commentmetadata -->

		  <div class="comment-body"><?php comment_text(); ?></div>

		</div><!-- #comment-##  -->
	</li>

<?php } ?>
