<?php
/**
 ** Permet de trier nos post en fonction des labs et/ou ville sélectionnée par l'utilisateur
 */

/**
 ** Ajoute à l'objet WP_Query nos requêtes personnalisées {school, labs}. Celle-ci seront intégrées aux propriétés WP_Query->query et WP_Query->query_vars
 */

add_filter('query_vars', function(array $params) : array {
  $params[] = 'school';
  $params[] = 'labs';
  return $params;
});

/**
 ** Altère l'objet WP_Query grâce au hook 'pre_get_posts'
 */
add_action('pre_get_posts', function(WP_Query $query): void {
  if(is_admin()
  || !$query->is_main_query()
  // || !is_post_type_archive('property')
  ){
    return;
  }
  /**
   * Vérifie s'il existe dans WP_Query une query_vars 'school' et récupère sa valeur
   * Si oui, ajoute dans WP_Query->query_vars un filtre sur les meta-query: ici nous filtrerons les bien suivant la ville souhaitée
   *? La valeur de la metadata est sérialisée par ACF dans le cas d'une checkbox. Il est indispensable d'ajouter 'compare' => 'LIKE' pour que cela fonctionne.
   */
  $school =get_query_var('school');
  if($school){
    $meta_query = $query->get('meta_query', []);
    $meta_query[] = [
      'key' => 'school',
      'value' => $school,
      'compare' => 'LIKE'
    ];
    $query->set('meta_query', $meta_query);
  }


  /**
   * Vérifie s'il existe dans WP_Query une query_vars 'labs' et récupère sa valeur
   * Si oui, ajoute dans WP_Query->query_vars un filtre sur les meta-query: ici nous filtrerons les biens suivant le lab souhaité
   */
  $labs = get_query_var('labs');
  if($labs){
    $meta_query = $query->get('meta_query', []);
    $meta_query[] = [
      'key' => 'labs',
      'value' => $labs,
      'compare' => 'LIKE'
    ];
    $query->set('meta_query', $meta_query);
  }
});







?>
