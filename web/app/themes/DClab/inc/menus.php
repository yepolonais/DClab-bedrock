<?php

  /*
  ** Insertion des menus
  */
add_action('after_setup_theme', function(){
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
});



  /*
  ** Lien vers mes fichiers personnalisés
  **     => social.php gère l'insertions des crédits et des logos des réseaux sociaux dans le footer
  */

// require_once 'widgets/social.php';


  /*
  ** Ajout d'une sidebar personnalisée
  **     => 'footer' gère entièrement le footer
  ** Insertion de widget personnalisé
  **     => La classe Agencia_Social_Widget crée un widget gérant les crédits et les réseaux sociaux dans le backoffice
  */

/*
add_action( 'widgets_init', function(){
  register_widget(Agencia_Social_Widget::class);
  register_sidebar([
    'id' => 'footer',
    'name' => __('Footer', 'agencia'),
    'before_title' => '<div class="footer__title">',
    'after_title' => '</div>',
    'before_widget' => '<div class="footer__col">',
    'after_widget' => '</div>',
  ]);
  register_sidebar([
    'id' => 'blog',
    'name' => __('Sidebar blog', 'agencia'),
    'before_title' => '<div class="sidebar__title">',
    'after_title' => '</div>',
    'before_widget' => '<div class="sidebar__widget">',
    'after_widget' => '</div>',
  ]);
});
*/
?>
