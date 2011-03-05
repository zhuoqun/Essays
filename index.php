<?php
/**
 * The main  template file
 * */

get_header();
?>
    <div id="doc4" class="yui-t5">

      <div id="hd">
      </div>

      <div id="bd">
	<div id="yui-main">
	  <div class="yui-b">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	      <div id="post-<?php the_ID(); ?>" class="post">
		<h2 class="post-title"><a title="<?php the_title_attribute(); ?>" rel="bookmark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="post-data">
		  <span class="posttime"><?php the_time('Y年n月j日G:i'); ?> - Dreamer</span>
		</div>
		    <div class="entry">
		      <?php the_content(); ?>
		    </div>
		  <div class="feedback">
		    <?php comments_popup_link('暂无评论', '1 条评论', '% 条评论'); ?>
		  </div>
	    </div>
<?php endwhile; ?>
<?php else: ?>
  <div class="not-found">
<!-- no post found -->
    <h2><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'essays' ); ?></h2>
    <h2>很抱歉，没有你要查找的内容。</h2>
  </div>
<?php endif; ?>


	    <div id="page-nav" class="clearfix">
	      <p class="fl"><?php next_posts_link('«早一些的日志'); ?></p>
	      <p class="fr"><?php previous_posts_link('晚一些的日志»'); ?></p>
	    </div>

	  </div>
	</div><!-- #yui-main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
