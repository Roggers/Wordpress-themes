<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>


    <div id="footer">
     <footer class="container_12">
      <div id="footertext">
  <div id="column1" class="grid_4">
Subscribe to my RSS
<br />
<a href="/rss">Click here</a>
</div>
  <div id="column2" class="grid_4">
  	Proudly Powered by Wordpress.

  Site Designed by Alex Rodrigues
  		
  		All Rights Reserved 
  </div>
  <div id="column3" class="grid_4">
  	All content of this site is yours
With attribution under <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons</a>


  </div>
  </div>

    </footer>
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