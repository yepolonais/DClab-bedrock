<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head();?>
</head>

<body <?php body_class() ?>>
<header class="nav">
  <a href="<?= home_url('/') ?>" class="nav__logo" title="<?= __('Homepage', 'agencia') ?>">
    <img src="<?= get_theme_mod('logo') ?>" alt="Logo de l'agence">
  </a>
  <?php wp_nav_menu([
    'theme_location' => 'header',
    'container' => false,
    'menu_class' => 'nav__menu',
  ])
  ?>
  <!-- <ul class="nav__menu">
    <li><a href="#">Acheter</a></li>
    <li><a href="listing.html" aria-current="page">Louer</a></li>
    <li><a href="news.html">Actualité</a></li>
    <li><a href="#">Contact</a></li>
  </ul> -->
  <button class="nav__burger">
    <span></span>
  </button>
</header>
