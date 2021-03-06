<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>

<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title( '&ndash;', true, 'right' ); ?><?php bloginfo('name'); ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
<meta name="theme-color" content="#bbb">

<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
<link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/assets/img/touch.png">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/touch.png">

<?php wp_head(); ?>

</head>

<body id="page-<?php if ( is_front_page() ) { echo 'home'; } elseif ( is_home() ) { echo 'blog'; } elseif ( is_search() ) { echo 'search'; } elseif ( is_archive() ) { echo 'archive'; } elseif ( is_404() ) { echo '404'; } else { the_slug(); } ?>" <?php body_class(); ?>>

<header id="masthead" class="site-header" role="banner">
  <div class="container">

    <div class="site-branding">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"  class="site-title <?php // or site-logo ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
      <button class="menu-toggle" data-toggle="main-navigation"><span><?php esc_html_e( 'Menu', '_pc' ); ?></span></button>
    </div>

    <nav class="main-navigation" role="navigation">
      <?php _pc_nav_header(); ?>
    </nav>

  </div>
</header>
