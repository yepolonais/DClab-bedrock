<?php
add_action( 'init', 'dclab_emploi' );
/**
 * Ajoute le custom-post {emploi} à notre plugin.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function dclab_emploi() {
	$labels = array(
		'name'               => _x( 'Emplois', 'Nom générique pluriel du post', 'dclab' ),
		'singular_name'      => _x( 'Emploi', 'Nom générique singulier du post', 'dclab' ),
		'menu_name'          => _x( 'Emploi', 'Menu d\'administration', 'dclab' ),
		'name_admin_bar'     => _x( 'Emploi', 'Ajouter sur la barre d\administration', 'dclab' ),
		'add_new'            => _x( 'Ajouter', 'Emploi', 'dclab' ),
		'add_new_item'       => __( 'Ajouter un emploi', 'dclab' ),
		'new_item'           => __( 'Nouvel emploi', 'dclab' ),
		'edit_item'          => __( 'Editer l\'emploi', 'dclab' ),
		'view_item'          => __( 'Voir l\'emploi', 'dclab' ),
		'all_items'          => __( 'Emplois', 'dclab' ),
		'search_items'       => __( 'Rechercher un emploi', 'dclab' ),
		'parent_item_colon'  => __( 'Emplois parents :', 'dclab' ),
		'not_found'          => __( 'Aucun emploi n\'a été trouvé', 'dclab' ),
		'not_found_in_trash' => __( 'Aucun emploi n\'a été trouvé dans la poubelle', 'dclab' )
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
		'rewrite'            => ['slug' => 'emploi'],
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments']
	);

	register_post_type( 'emploi', $args );
}

?>
