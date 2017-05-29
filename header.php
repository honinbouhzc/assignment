<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title><?php bloginfo('name'); ?> - <?php wp_title(); ?></title>
    <meta name="keywords" content="Blog,PHP,wordpress" />
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php wp_head(); ?>
</head>
<body>
<header>
  <div id="logo"><a href="<?php bloginfo('url'); ?>"></a></div>
  <nav class="topnav" id="topnav">
  <a href="http://"><span>Index</span><span class="en">Portal</span></a>
  <a href="http://"><span>About</span><span class="en">About</span></a>
  <a href="http://"><span>News</span><span class="en">News</span></a>
  <a href="http://"><span>Words</span><span class="en">Doing</span></a>
  <a href="http://"><span>Sharing</span><span class="en">Share</span></a>
  <a href="http://"><span>Understanding</span><span class="en">Learn</span></a>
  <a href="http://"><span>Message</span><span class="en">Gustbook</span></a>
    </nav>
</header>