<?php

/**
 * Ce fichier permet d'altérer les requêtes propres à l'objet WP_Query avant l'affichage de la page
 */
?>
<?php
add_action('pre_get_posts', function (WP_Query $query) {
  if (
    is_admin() ||
    !$query->is_main_query()
    // || (!is_home() && !is_search() && !is_category())
  ) {
    return;
  }
  $query->set('posts_per_page', 20);
  if (is_post_type_archive('forum')){
    // dump('coucou');
  }
  if (is_post_type_archive('tribe_events')){
   // dump('kikou!');
  }
});


?>
