<?php

require_once 'inc/supports.php';
require_once 'inc/enqueue.php';
require_once 'inc/customize.php';
require_once 'inc/menus.php';
require_once 'inc/style.php'; //filtre ou hook ayant attrait au style
require_once 'inc/images.php';
require_once 'inc/query/post.php';
require_once 'inc/query/query_vars.php';
require_once 'inc/addMetaUser.php';

/**
 * Lien vers nos customs-post
 */
require_once 'custom-posts/videos.php';
require_once 'custom-posts/ressources.php';
require_once 'custom-posts/emploi.php';


/**
 * Définit le fuseau horaire
 */
	//
setlocale(LC_ALL, 'fr_FR');

/**
 * Gère l'incorporation de nos icones user, notifications et réseaux sociaux
 */

function dclab_icon(string $name): string {
    $iconURL = get_theme_file_uri() . '/assets/icons/' . $name . '.svg';
    $alt = __('Icone de ' . $name . '', 'dclab');
    return <<<HTML
    <img src="$iconURL" alt="{$alt}" height="100%"/>
    HTML;
}


/**
 * Filtre le nombre de mots maximums contenus dans l'excerpt
 */
function dclab_custom_excerpt_length(int $length ) : int {
    return 20;
}
add_filter( 'excerpt_length', 'dclab_custom_excerpt_length', 999 );

/**
 * Retourne le temps écoulé depuis la parution d'un article
 */
function dclab_time_post() : void {
  $datePublication = get_the_time('G');
  $dateActuelle = current_time('timestamp');
  $timeEditPost = __('Il y a ', 'dclab') . human_time_diff($datePublication, $dateActuelle);
  echo $timeEditPost;
}


/**
 * Pagination des articles
 */

function dclab_paginate(): string {
  return '<div class="pagination">' . paginate_links(['prev_text' => dclab_icon('arrow'), 'next_text' => dclab_icon('arrow')]) . '</div>';
}

  /**
   * Pagination des commentaires
   */

function dclab_paginate_comments(): void {
  echo '<div class="pagination">';
  paginate_comments_links(['prev_text' => dclab_icon('arrow'), 'next_text' => dclab_icon('arrow')]);
  echo '</div>';
}

/**
 * Réorganise l'empilement des onglets de menus dans le backoffice
 * Seulement trois séparateurs sont disponibles {separator1, separator2 et separator-last}
 */

function reorder_admin_menu( $__return_true ) {
    return array(
        'index.php', // Dashboard
        'themes.php', // Appearance
        'users.php', // Users
        'separator1', // --Space--
        'edit.php', // Posts
        'edit.php?post_type=tribe_events', // Event Calendar
        'edit.php?post_type=forum', // BBpress
        'edit.php?post_type=videos',
        'edit.php?post_type=ressources',
        'edit.php?post_type=emploi',
        'separator2', // --Space--
        'edit.php?post_type=page', // Pages
        'upload.php', // Media
        'edit-comments.php', // Comments
        'tools.php', // Tools
        'options-general.php', // Settings
        'separator-last', // --Space--
        'plugins.php', // Plugins
    );
}
add_filter( 'custom_menu_order', 'reorder_admin_menu' );
add_filter( 'menu_order', 'reorder_admin_menu' );

/**
 * Affiche le titre de la page en fonction de l'onglet sélectionné
 */
function dclab_titre() : void {
  global $wp_query;
  // dd($wp_query);
  if(is_front_page()){
    echo the_title();
  }
  elseif(is_home()){
    echo $wp_query->queried_object->post_title;
  }
  elseif(is_post_type_archive('tribe_events')){
    echo $wp_query->queried_object->label;
  }
  elseif(
    is_post_type_archive('forum')
    || is_post_type_archive('videos')
    || is_post_type_archive('ressources')
    || is_post_type_archive('emploi')
    )
    {
    echo $wp_query->query['post_type'];
  }
};
/**
 * Affiche dans notre header le choix des écoles
 * $field_key est l'identifiant du champs récupéré dans le BO de ACF. Il permet d'obtenir tous les options définies par défaut pour le champs
 */
function dclab_choix_ecoles() : void {
  $field_key = "field_5eec924ac299f";
  $field = get_field_object($field_key);
  $schools = $field['choices'];
  $selected = get_query_var('school');
  foreach($schools as $key => $value){
    if($value === $selected){
      echo <<<HTML
      <option value="{$value}" selected>{$value}</option>
      HTML;
    } else {
      echo <<<HTML
      <option value="{$value}">{$value}</option>
      HTML;
    }
  }
}

/**
 * Affiche dans notre header le choix du lab
 * Même principe que dclab_choix_ecoles
 */
function dclab_choix_labs() : void {
  $field_key = "field_5eec8b7ca0a5f";
  $field = get_field_object($field_key);
  $labs = $field['choices'];
  $selected = get_query_var('labs');
  foreach($labs as $key => $value){
    if($value === $selected){
      echo <<<HTML
      <option value="{$value}" selected>{$value}</option>
      HTML;
    } else {
      echo <<<HTML
      <option value="{$value}">{$value}</option>
      HTML;
    }
  }
}

/**
 * Affiche les écoles assignées à un article
 */
function dclab_ecole_post(){
  $schools = get_field('school');
  foreach($schools as $school){
    echo ' ' . $school .' ';
  }
}

/**
 * Affiche les labs assignées à un article
 */
function dclab_lab_post(){
  $labs = get_field('labs');
  foreach($labs as $lab){
    echo ' ' . $lab .' ';
  }
}





/**
 * Dump l'objet WP_Query dans notre front, uniquement pour la requête principale.
 * Les instances de WP_Query des post-type 'nav_menu_item' et 'page' ne sont pas affichées
 */
add_action('pre_get_posts', function(WP_Query $query) : void {
  if(is_admin()
  || !$query->is_main_query()
  // || $query->query_vars['post_type'] === 'nav_menu_item'
  // || $query->query_vars['post_type'] === 'page'
  )
  {
    return;
  }
  //dump($query);
  // dump($query->query['pagename']);
  // dump($query->query['post_type']);
  // dump($query->queried_object->label);
});
?>



