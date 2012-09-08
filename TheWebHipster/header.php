<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	
	wp_title( '|', true, 'right' );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="dist/html5shiv.js"></script>
<![endif]-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-32819803-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
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

	

    <header id="headerWrap" class="container_12">
    	<div class="logo grid_5">
  <a href="<?php echo home_url(); ?>"><h1>Alex Rodrigues</h1>
  </a> <h5> I make websites, and like to blog</h5>

  </div>
<section id="adtop>
 <script type="text/javascript"><!--
google_ad_client = "ca-pub-6012648254620693";
/* Alexrodtop */
google_ad_slot = "7621715673";
google_ad_width = 320;
google_ad_height = 50;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</section>
  <aside class="social">
    <div class="swing">
    	<a rel="me" href="http://digg.com/alexlrrodrigues"><img src="<?php bloginfo('template_directory'); ?>/images/digg.png" alt="Digg" /></a>
  	<a rel="me" href="http://www.flickr.com/photos/thewebhipster/"><img src="<?php bloginfo('template_directory'); ?>/images/flickr.png" alt="flickr" /></a>
  	<a rel="me" href="https://twitter.com/ElPixelo"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="twitter" /></a>
<a rel="me" href="/rss"><img src="<?php bloginfo('template_directory'); ?>/images/rss.png" alt="twitter" /></a>


  </div>
  </aside>
  </aside>
   </header>

  <nav id="navigation" class="grid_12">
    <div id="nav" class="grid_12 span11">
    	<ul>
<?php wp_list_pages('title_li='); ?>
</ul>
<?php get_search_form(); ?>
</div>

  </nav>