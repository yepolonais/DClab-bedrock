<?php
add_action( 'init', 'dclab_videos' );
/**
 * Ajoute le custom-post {videos} à notre plugin.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function dclab_videos() {
	$labels = array(
		'name'               => _x( 'Vidéos', 'Nom générique pluriel du post', 'dclab' ),
		'singular_name'      => _x( 'Vidéo', 'Nom générique singulier du post', 'dclab' ),
		'menu_name'          => _x( 'Vidéos', 'Menu d\'administration', 'dclab' ),
		'name_admin_bar'     => _x( 'Vidéo', 'Ajouter sur la barre d\administration', 'dclab' ),
		'add_new'            => _x( 'Ajouter', 'Vidéo', 'dclab' ),
		'add_new_item'       => __( 'Ajouter une vidéo', 'dclab' ),
		'new_item'           => __( 'Nouvelle vidéo', 'dclab' ),
		'edit_item'          => __( 'Editer la vidéo', 'dclab' ),
		'view_item'          => __( 'Voir la vidéo', 'dclab' ),
		'all_items'          => __( 'Videos', 'dclab' ),
		'search_items'       => __( 'Rechercher une vidéo', 'dclab' ),
		'parent_item_colon'  => __( 'Vidéos parentes :', 'dclab' ),
		'not_found'          => __( 'Aucune vidéo n\'a été trouvée', 'dclab' ),
		'not_found_in_trash' => __( 'Aucune vidéo n\'a été trouvée dans la poubelle', 'dclab' )
	);

	$args = array(
		'labels'             => $labels,
    'menu_icon' => 'dashicons-format-video',
		'description'        => __( 'Description.', 'dclab' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => ['slug' => 'videos'],
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments']
	);

	register_post_type( 'videos', $args );
}

?>
