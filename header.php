<?php ?>
<!DOCTYPE html>
<html lang="en">
<link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Montserrat&display=swap" rel="stylesheet">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">

  <?php wp_head();?>
</head>
<body>
  <div id="masthead">
    <div id="logoWap">
      <?php the_custom_logo(); ?>
    </div>
  <nav>
      <?php wp_nav_menu( array( 'theme_location' => 'head-menu' ) ); ?>
  </nav>
    </div>
