<?php

  /*
  ** Enregistrement des styles et des scripts
  */

add_action('wp_enqueue_scripts', function(){
  	// Enqueue styles.
  wp_enqueue_style('fix', get_stylesheet_uri()); // renvoie le css de base de notre thème
	wp_enqueue_style( 'dclab-style', get_theme_file_uri() . '/assets/css/layout.css');
	wp_enqueue_style( 'css_actu', get_theme_file_uri() . '/assets/css/actu_layout.css');
	wp_enqueue_style( 'header-style', get_theme_file_uri() . '/assets/css/header.css');
	wp_enqueue_style( 'footer-style', get_theme_file_uri() . '/assets/css/footer.css' );
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
	if(is_home()){
		wp_enqueue_style( 'dclab_index', get_theme_file_uri() . '/assets/css/index.css');
	}

	// Enqueue scripts.
	wp_enqueue_script( 'fontawesome', get_theme_file_uri() . '/assets/js/fontawesome.js');
	wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', ['popper', 'jQuery'], \false, \true );
	wp_enqueue_script( 'jQuery', 'https://code.jquery.com/jquery-3.5.1.min.js', [], \false, \true );
	wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], \false, \true );
	wp_enqueue_script( 'headerjs', get_theme_file_uri() . '/assets/js/header.js', array(), \false, \true );
})
?>

