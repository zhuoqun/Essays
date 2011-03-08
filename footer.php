<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=bd div and all content
 * after. 
 *
 */
?>
      </div><!-- #bd -->

      <div id="ft">
	<p class="fl">© 2011</p>
	<p class="fr">
	  Proudly powered by <a rel="generator" title="Semantic Personal Publishing Platform" href="http://wordpress.org/">WordPress</a> & <a href="http://www.zhuoqun.net/" title="Theme of the site">Essays</a>.
	</p>
      </div>
    </div>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>

  </body>
</html>
