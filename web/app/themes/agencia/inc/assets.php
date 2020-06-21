<?php

  /*
  ** Enregistrement des styles et des scripts
  */

add_action('wp_enqueue_scripts', function(){
  wp_enqueue_style('main', get_theme_file_uri() . '/assets/style.e2e1a33c.css');
  wp_enqueue_style('fix', get_stylesheet_uri()); // renvoie le css de base de notre thème
  wp_enqueue_script('main', get_theme_file_uri() . '/assets/main.ef23f591.js', [], false, true );

})

?>

