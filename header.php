<?php
/**
 * The header for all the template files
 * */
?><!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title><?php
/**
 * Print the <title> tag based on what is being viewed.
 */
bloginfo('name');

wp_title(); 

?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
    <div id="top">
        <a href="#bd" id="skip">Skip to content</a>
        <div class="bd clearfix">
			<h1><a href="<?php bloginfo('url');?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
			<div class="desc">
                <p><?php bloginfo('description'); ?></p>
			</div>
        </div>
    </div><!-- #topnav -->
