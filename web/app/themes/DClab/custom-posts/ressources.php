<?php
add_action( 'init', 'dclab_ressources' );
/**
 * Ajoute le custom-post {ressources} à notre plugin.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function dclab_ressources() {
	$labels = array(
		'name'               => _x( 'Ressources', 'Nom générique pluriel du post', 'dclab' ),
		'singular_name'      => _x( 'ressource', 'Nom générique singulier du post', 'dclab' ),
		'menu_name'          => _x( 'Ressources', 'Menu d\'administration', 'dclab' ),
		'name_admin_bar'     => _x( 'ressource', 'Ajouter sur la barre d\administration', 'dclab' ),
		'add_new'            => _x( 'Ajouter', 'ressource', 'dclab' ),
		'add_new_item'       => __( 'Ajouter une ressource', 'dclab' ),
		'new_item'           => __( 'Nouvelle ressource', 'dclab' ),
		'edit_item'          => __( 'Editer la ressource', 'dclab' ),
		'view_item'          => __( 'Voir la ressource', 'dclab' ),
		'all_items'          => __( 'Ressources', 'dclab' ),
		'search_items'       => __( 'Rechercher une ressource', 'dclab' ),
		'parent_item_colon'  => __( 'Ressources parentes :', 'dclab' ),
		'not_found'          => __( 'Aucune Ressource n\'a été trouvée', 'dclab' ),
		'not_found_in_trash' => __( 'Aucune Ressource n\'a été trouvée dans la poubelle', 'dclab' )
	);

	$args = array(
		'labels'             => $labels,
    'menu_icon' => 'dashicons-media-document',
		'description'        => __( 'Description.', 'dclab' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => ['slug' => 'ressources'],
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments']
	);

	register_post_type( 'ressources', $args );
}

?>
