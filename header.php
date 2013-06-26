<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<title>Fine Art Landscape Photography by Ron Bentley - Australian Landscapes, American Landscapes, European Landscapes.</title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="language" content="en" />
<meta name="abstract" content="Beautiful fine art landscape photography" />
<meta name="distribution" content="Australia" />
<meta name="Photography" content="Landscape" />
<meta name="robots" content="follow,index" />
<meta name="revisit-after" content="1 days" />
<meta name="verify-v1" content="2O5UoDVSveNERi99OVk4WEUGR0u0sLrkDnKG3pOK264=" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script src="/wp-content/themes/bentley-photographics/js/spamspan.js" type="text/javascript"></script>

<?php wp_head(); ?>

</head>

<body>
<div id="everything">

<div id="menu">
<ul>
<li><a href="/" <?php if (is_page('Fine Art Landscape Photography')) { echo " class='menu_selected' ";}?> >Home</a></li>
<li><a href="/about/" <?php if (is_page('About Ron')) { echo " class='menu_selected' ";}?> >About</a></li>
<li><a href="/gallery/" <?php if($page_name == 'Gallery') {echo'class="menu_selected"';}?> >Gallery</a></li>
<li><a href="/news/" <?php if (is_home() || is_page('Archives') || is_single()) { echo " class='menu_selected' ";}?> >News &amp; Events</a></li>
<li><a href="/contact/" <?php if (is_page('Contact Ron')) { echo " class='menu_selected' ";}?> >Contact</a></li>
</ul>
</div>

<div id="header">
<p>Bentley Photographics - Fine Art Landscape Photography</p>
<a href="/" class="logo"><img src="<?php bloginfo('template_directory'); ?>/images/bentley.gif" alt="Bentley Photographics - Fine Art Landscape Photography" title="Bentley Photographics - Fine Art Landscape Photography"/></a>
</div>

<div id="banner-wrap">
<div id="banner">
<?php 
include ("random-image.php");
?>
</div><!-- end banner -->
</div>	<!-- end banner-wrap -->	

