<?php
/**
 * DClab functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package DClab
 */


	// Définit le fuseau horaire
	// TODO : regarder comment cela fonctionne
setlocale(LC_ALL, 'fr_FR');



if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

require_once('functions/supports.php');   // support pour les menus, images, etc
require_once('functions/assets.php'); // support pour les css et js


require_once('functions/addMetaUser.php'); // page ajout meta données



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dclab_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'dclab_content_width', 640 );
}
add_action( 'after_setup_theme', 'dclab_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dclab_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar DClab', 'dclab' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'dclab' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'dclab_widgets_init' );

/**
 * Implémente la pagination 
 */
require_once(get_theme_file_path() . '/inc/pagination.php');
/**
 * Implémente la boucle des articles
 */
require_once(get_theme_file_path() . '/inc/boucle_display_articles.php');










?>


