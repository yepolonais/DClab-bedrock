<?php
 //* Permet d'enregister et d'appeler les fichiers .css et .js de notre thème
function dclab_scripts() {
	// Enqueue styles.
	wp_enqueue_style( 'dclab-style', get_theme_file_uri() . '/assets/css/layout.css', array(), _S_VERSION );
	wp_enqueue_style( 'css_actu', get_theme_file_uri() . '/assets/css/actu_layout.css', array(), _S_VERSION );
	wp_enqueue_style( 'header-style', get_theme_file_uri() . '/assets/css/header.css', array(), _S_VERSION );
	wp_enqueue_style( 'footer-style', get_theme_file_uri() . '/assets/css/footer.css', array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');

	// Enqueue scripts.
	wp_enqueue_script( 'fontawesome', get_theme_file_uri() . '/assets/js/fontawesome.js');
	wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', ['popper', 'jQuery'], \false, \true );
	wp_enqueue_script( 'jQuery', 'https://code.jquery.com/jquery-3.5.1.min.js', [], \false, \true );
	wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], \false, \true );
	wp_enqueue_script( 'tri_actualite', get_theme_file_uri() . '/assets/js/tri_actualite.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'headerjs', get_theme_file_uri() . '/assets/js/header.js', array(), _S_VERSION, true );

	// TODO: fichier non utilisés
	// wp_enqueue_script( 'dclab-navigation', get_theme_file_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'dclab-skip-link-focus-fix', get_theme_file_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true );
	/* if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	} */
}

//* Notre fonction personnalisée (dclab_scripts) sera exécutée avec le hook 'wp_enqueue_scripts'
add_action( 'wp_enqueue_scripts', 'dclab_scripts' );
?>
