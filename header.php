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
      <?php wp_list_cat(); ?>
  <!-- <a href="http://"><span>Index</span><span class="en">Portal</span></a> -->
    </nav>
</header>