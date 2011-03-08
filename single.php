<?php
/**
 * The Template for displaying all single posts.
 *
 */

get_header(); ?>

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
		    <?php comments_popup_link( __('Leave a comment', 'essays'), __('One Comment', 'essays'), __('% Comments', 'essays')); ?>
		  </div>
	    </div>

	    <div id="page-nav" class="clearfix">
	      <p class="fl"><?php previous_post_link('«%link'); ?></p>
	      <p class="fr"><?php next_post_link('%link»'); ?></p>
	    </div>

	    <?php comments_template(); ?>

<?php endwhile; ?>
<?php endif; ?>

	  </div>
	</div><!-- #yui-main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
