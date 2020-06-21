<?php
if ( ! function_exists( 'dclab_setup' ) ) :
	 // Enregistre les fonctions supportées par notre thème
	function dclab_setup() {

		 // Laisse wordpress prendre en charge la gestion du titre, supporte l'upload d'images,
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support('custom-logo');

		// Permet d'enregister de nouvelles tailles d'images. Utiliser le plugin regenerate thumbnail ensuite
		add_image_size('article-size', 350,200, true);
		add_image_size('article-single', 1400,600, true);

		// Ajout de menu personnalisés
		register_nav_menus(
			array(
				'header' => esc_html__( 'menu de navigation', 'dclab' ),
				'theme' => esc_html__( 'choix des labs', 'dclab' ),
				'ville' => esc_html__( 'choix des écoles', 'dclab' ),
				'footer' => esc_html__( 'menu du pied de page', 'dclab' ),
				'event-cat' => esc_html__( 'menu des catégories du calendrier', 'dclab' ),
				'menufooter' => esc_html__( 'menufooter', 'dclab' ),
			)
		);


		//infinite scroll
		add_theme_support( 'infinite-scroll', array(
			'container' => 'primary',
			'footer' => 'page',
		) );




		// TODO: les fonctions suivantes n'ont pas encore été exploitées

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */

		// add_theme_support(
		// 	'html5',
		// 	array(
		// 		'search-form',
		// 		'comment-form',
		// 		'comment-list',
		// 		'gallery',
		// 		'caption',
		// 		'style',
		// 		'script',
		// 	)
		// );

		// // Set up the WordPress core custom background feature.
		// add_theme_support(
		// 	'custom-background',
		// 	apply_filters(
		// 		'dclab_custom_background_args',
		// 		array(
		// 			'default-color' => '#00263E',
		// 			'default-image' => '',
		// 		)
		// 	)
		// );

		// // Add theme support for selective refresh for widgets.
		// add_theme_support( 'customize-selective-refresh-widgets' );

		// /**
		//  * Add support for core custom logo.
		//  *
		//  * @link https://codex.wordpress.org/Theme_Logo
		//  */
		// add_theme_support(
		// 	'custom-logo',
		// 	array(
		// 		'height'      => 'thumbnail',
		// 		'width'       => 'thumbnail',
		// 		'flex-width'  => true,
		// 		'flex-height' => true,
		// 	)
		// );

		// /*
		//  * Make theme available for translation.
		//  * Translations can be filed in the /languages/ directory.
		//  * If you're building a theme based on DClab, use a find and replace
		//  * to change 'dclab' to the name of your theme in all the template files.
		//  */
		// load_theme_textdomain( 'dclab', get_template_directory() . '/languages' );

		// // Add default posts and comments RSS feed links to head.
		// add_theme_support( 'automatic-feed-links' );

	}
endif;

//* Notre fonction personnalisée (dclab_setup) sera exécutée avec le hook 'after_setup_theme'
add_action( 'after_setup_theme', 'dclab_setup' );




/**
 * Load Jetpack compatibility file.
 */

require_once get_template_directory() . '/inc/jetpack.php';
require_once get_template_directory() . '/inc/tri_articles.php';

?>
