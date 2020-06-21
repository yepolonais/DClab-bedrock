<?php
/**
 * Défini la taille des images que nous utiliserons pour la liste des articles, 'post-thumbnail'
 * Ajoute d'autres tailles d'images personnalisées
 */

add_action('after_setup_theme', function(){
  set_post_thumbnail_size(500, 500, true);
  // add_image_size('property-thumbnail-home', 790, 728, true);
});

?>
