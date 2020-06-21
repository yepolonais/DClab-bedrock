<?php

/**
 * Permet d'ajouter des onglets dans l'interface personnaliser du backoffice. Ici nous ajoutons la gestion du logo
 */

add_action('customize_register', function(WP_Customize_Manager $manager){
  $manager->add_section('dclab_appearence', [
    'title' => __('Logo du site', 'dclab')
  ]);
  $manager->add_setting('logo', [
    'sanitize_callback' => 'esc_url_raw',
  ]);
  $manager->add_control(new WP_Customize_Image_Control($manager, 'logo', [
    'label' => __('Logo', 'dclab'),
    'section' => 'dclab_appearence',
  ]));
});

/**
 * Permet d'intégrer l'upload de fichier SVG. Il est nécessaire d'ajouter en en-tête du svg la ligne suivante
 * <?xml version='1.0' encoding='utf-8'?>
 */

add_filter( 'upload_mimes', function($mimes){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
  });

?>
