<?php
/**
 * The Sidebar containing  widget areas.
 *
 */
?>
	<div id="sidebar" class="yui-b">
	  <ul class="menu">
	    <li class="widget-container widget_search" id="search">
	      <form action="" id="searchform" method="get" role="search">
		<div>
		  <label for="s" class="screen-reader-text">Search for:</label>
		  <input type="text" id="s" name="s" value="">
		  <input type="submit" value="搜索" id="searchsubmit">
		</div>
	      </form>
	    </li>
	    <li>
	      <h3>关于</h3>
	      <p>我们称计算机编程为一种艺术，因为它将千锤百炼的知识应用到了世界，因为它需要技巧与天才，更重要的是因为它可以创造美的对象。</p>
	      <p><a href="mailto:zhuoqunwang@gmail.com">给我发邮件</a> | <a href="http://creativecommons.org/licenses/by-nc-nd/2.5/cn/">创作共用</a> | <a id="feed" href="http://feed.feedsky.com/dreamerlife">订阅</a></p>
	    </li>
	    <li class="widget-container widget_recent_entries" id="recent-posts">
	      <h3>最新日志</h3>
	      <ul>
		<?php wp_get_archives('type=postbypost&limit=5'); ?>
	      </ul>
	    </li>
	    <li class="widget-container widget_archives" id="archives">
	      <h3>日志存档</h3>
	      <ul>
		<?php wp_get_archives('type=monthly'); ?>
	      </ul>
	    </li>
	</div><!-- #sidebar -->
