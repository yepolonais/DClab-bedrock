
<?php //Fonction de tri des articles suivant leurs catégorie
function dclab_tri_articles(){
  // $current_category = get_queried_object();
  wp_dropdown_categories(array(
          'hierarchical' => 1,
          'value_field'  => 'name',
          'name'         => 'cat',
  ));
}
?>
