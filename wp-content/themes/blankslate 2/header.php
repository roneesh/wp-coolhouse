<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(' | ', true, 'right'); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- <div id="wrapper" class="hfeed">
<header>

</header> -->
<nav>
  <p class="nav-name">
    Coolhouse Labs
  </p>
  <a class="nav-link" href="#connect">
    Connect
  </a>
  <a class="nav-link" href="/sponsrs">
    Sponsors
  </a>
  <a class="nav-link" href="/blog">
    Blog
  </a>
  <a class="nav-link" href="/team">
    Team
  </a>
  <a class="nav-link" href="/program">
    Program
  </a>
</nav>
<div id="container">