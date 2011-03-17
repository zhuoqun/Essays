<?php


?>
	    <div id="comments">
<?php if ( have_comments() ) : ?>
	      <h3><?php comments_number( __('Leave a comment', 'essays'), __('One Comment', 'essays'), __('% Comments', 'essays')); ?></h3>
	      <ol class="commentlist">
<?php
wp_list_comments( array( 'callback' => 'essays_comment' ) );
?>
	      </ol>
<?php endif; ?>

<?php if ( comments_open() ) : ?>
	      <div id="respond">
		  <h3><?php _e('Leave a comment', 'essays'); ?></h3>
		<form id="commentform" method="post" action="<?php bloginfo('url'); ?>/wp-comments-post.php">
<?php if ( is_user_logged_in() ) : ?>

<p>你已经作为 <a href="<?php echo get_option('siteurl') . '/wp-admin/profile.php'; ?>"><?php echo $user_identity ?></a> 登录   <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="退出">退出»</a></p>

<?php else : ?>

		  <p><input type="text" tabindex="1" size="22" value="" id="author" name="author">
		  <label for="author"><?php _e('Name', 'essays'); ?> (<span class="required"><?php _e('required', 'essays'); ?></span>)</label></p>

		  <p><input type="text" tabindex="2" size="22" value="" id="email" name="email">
		  <label for="email"><?php _e('Email (will not be published.)', 'essays'); ?> (<span class="required"><?php _e('required', 'essays'); ?></span>)</label></p>

		  <p><input type="text" tabindex="3" size="22" value="" id="url" name="url">
		  <label for="url"><?php _e('Website', 'essays'); ?></label></p>
<?php endif; ?>

		  <p><textarea tabindex="4" rows="10" id="comment" name="comment"></textarea></p>

		  <p><input type="submit" value="<?php _e('Post Comment', 'essays'); ?>" tabindex="5" id="submit" name="submit">
<?php comment_id_fields(); ?> 
		  </p>
		  <?php do_action('comment_form', $post->ID); ?>
		</form>
	      </div><!-- #respond -->
<?php endif; ?>

	    </div><!-- #comments -->
