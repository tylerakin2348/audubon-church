<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tyler Akin Web Design</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600,700" rel="stylesheet" type="text/css">
<?php wp_head(); ?>
</head>
<body>
  <header id="top-header">

    <!-- logo code written by Kirk Wight of Automatic : Thanks Kirk :) -->
    <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
        <div class='site-logo'>
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
        </div>
    <?php else : ?>
        <hgroup>
            <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
            <h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
        </hgroup>
    <?php endif; ?>

    <a href="" onclick="return false;" id="show-nav">Show Navigation</a>
    <nav class="main-navigation">

      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </nav>

  </header>
