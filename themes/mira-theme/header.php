<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<a class="skip-link" href="#content">Skip to content</a>
<header id="site-header" role="banner">
  <div class="site-branding">
    <a href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a>
  </div>
  <nav role="navigation">
    <?php wp_nav_menu(['theme_location' => 'primary']); ?>
  </nav>
</header>
<main id="content" role="main">
