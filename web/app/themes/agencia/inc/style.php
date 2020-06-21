<?php
/**
 * Ajoute la classe btn au bouton 'plus de biens' de l'archive-property.
 * Il est important de passer un paramètre au cas où d'autres personnes auraient utilisées ce hook
 */
add_filter('next_posts_link_attributes', function (string $attr) : string {
  return $attr . ' class="btn"';
});

/**
 * Ote la classe 'current_page-parent' à tous les items du menu principal lorsque l'on se trouve sur un post ou une archive de Property
 */
add_filter('nav_menu_css_class', function(array $classes) : array {

  if(is_singular('property') || is_post_type_archive('property')){

    $classes = array_filter($classes, function (string $class){
      return $class !== 'current_page_parent';
    });
  }

  return $classes;
},10);

?>
