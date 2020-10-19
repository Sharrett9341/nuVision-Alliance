<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nuvisionalliance
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!-- Bootstrap core CSS -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/css/carousel.css" rel="stylesheet">

  <!-- My Custom styles for this template -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.14/css/mdb.min.css" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'bootstrap2wordpress'); ?></a>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

        <img class="ml-2 NVAlogo" src="<?php bloginfo('stylesheet_directory'); ?>/img/dove_4.png" alt="logo"><a class="navbar-brand" href="<?php echo site_url(''); ?>">Nuvision Alliance</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <?php

        wp_nav_menu(array(

          'menu'    =>      'primary',

          'container'         =>      'nav',

          'container_class'   =>      'navbar-collapse collapse',

          'menu_class'        =>      'nav navbar-nav navbar-right',

          'container_id'      =>      'navbarCollapse',

        ));

        ?>

        <div class="input-group sm-form form-sm form-2 pl-0">
          <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <span class="input-group-text" id="basic-text1"><i class="fas fa-search text-grey" aria-hidden="true"></i></span>
          </div>
        </div>
      </nav>
    </header>