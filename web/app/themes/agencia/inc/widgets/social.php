<?php
class Agencia_Social_Widget extends WP_Widget{

  public $fields = []; //On ne peut pas utiliser la fonction de traduction en dehors d'une fonction. Nous sommes donx obligés de renseigner $fields dans le constructeur

  public function __construct(){
    parent::__construct('agencia_social_widget', __('Social Widget', 'agencia'));
    $this->fields = [
      'title'     => __('Title', 'agencia'),
      'credits'   => __('Credits', 'agencia'),
      'twitter'   => 'Twitter',
      'facebook'  => 'Facebook',
      'instagram' => 'Instagram',
    ];
  }

  /*
  *  La fonction widget() affiche le widget dans le front
  ** $args renseigne les 'before_widget', 'after_title', etc
  ** $instance récupère les données entrées dans le formulaire
  */
  public function widget($args, $instance){
    echo $args['before_widget'];
    /*
    ** affichage du titre
    */
    if(isset($instance['title'])){
      $title = apply_filters('widget_title', $instance['title']);// on utilise ici un filtre natif de WP pour mettre en forme le titre
      echo $args['before_title'] . $title . $args['after_title'];
    }
    /*
    ** affichage du reste du widget géré par un template
    */
    $template = locate_template('template-parts/widgets/social.php');
    if(!empty($template)){
      include $template; //include permet d'utiliser les variables définies dans notre classe à l'intérieur du fichier inclus, contrairement à get_template_part()
    }
    echo $args['after_widget'];
  }

  /*
  ** La fonction form() génère le formulaire dans le backoffice
  */
  public function form ($instance) {
    foreach($this->fields as $field => $label){ // $field = 'twitter' ; $label = 'Twitter'
      $value = $instance[$field] ?? '';
      ?>
      <p>
        <label for="<?= $this->get_field_id($field) ?>"><?= esc_html($label) ?> </label>
        <input
            type="text"
            class="widefat"
            name="<?= $this->get_field_name($field) ?>"
            id="<?= $this->get_field_id($field) ?>"
            value="<?= esc_attr($value) ?>"
            >
      </p>
      <?php
    }
  }

  /*
  ** La fonction update() met à jour les informations dans la BDD
  ** $new_instance contient les données du formulaire mise à jour
  ** $old_instance contient les anciennes données du formulaire enregistrées dans la BDD
  */
  public function update($new_instance, $old_instance) {

    $output = [];
    foreach($this->fields as $field => $label){
      if (!empty($new_instance[$field])){
        $output[$field] = $new_instance[$field];
      }
    }
    return $output;
  }
}

?>
