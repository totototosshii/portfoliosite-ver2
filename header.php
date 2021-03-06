<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# website: https://ogp.me/ns/website#">
    <meta charset=<?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta property="og:title" content="Toshiki Portfolio">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://tosshii-portfolio.com">
    <meta property="og:image" content="<?php echo esc_url(get_theme_file_uri('images/og-img.png')); ?>">
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="google-site-verification" content="jwx1KoPFlEZU1ELY9fcc927Wx7vSHi5hoaKkAZFwPd4" />
    <?php if(is_user_logged_in()) : ?>
      <style type="text/css">
        .header {
          margin-top: 32px;
        }
      </style>
    <?php endif; ?>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="header">
      <div class="header-inner">
        <h1 class="header-logo">
          <a href="<?php echo home_url('/home'); ?>"><?php bloginfo('name'); ?></a>
        </h1><!-- /.header-logo -->
        <div class="header-links">
          <?php wp_nav_menu(
            array(
              'theme_location'  => 'global',
              'container'       => 'nav',
              'container_class' => 'header-menu',
              'menu_class' => 'header-list'
              )
            );
          ?>
        </div><!-- /.header-links -->
        <button type="button" class="drawer-btn">
          <span class="bar"></span><!-- /.bar -->
          <span class="drawer-menuText drawer-text">Menu</span><!-- /.drawer-menuText -->
          <span class="drawer-close drawer-text">Close</span><!-- /.drawer-close-->
          <span class="drawer-visuallyHidden">メニューを開閉する</span><!-- /.drawer-visuallyHidden -->
        </button><!-- /.drawer-btn -->
      </div><!-- /.header-inner -->
    </header><!-- /.header -->
