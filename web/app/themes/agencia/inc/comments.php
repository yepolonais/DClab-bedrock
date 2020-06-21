<?php
/*
** Rendu HTML des champs de formulaire auteur et email
*/
add_filter('comment_form_default_fields', function(array $fields): array {

  $authorLabel = 	__( 'Name' );
  $emailLabel = 	__( 'Email' );
  $fields['author'] = <<<HTML
  <div class="form-group">
    <input type="text" id="author" name="author" class="form-control" required>
    <label for="author">{$authorLabel}</label>
  </div>
  HTML;
  $fields['email'] = <<<HTML
  <div class="form-group">
    <input type="email" id="email" name="email" class="form-control">
    <label for="email">{$emailLabel}</label>
  </div>
  HTML;
  unset($fields['url']); // désactive la possibilité de rentrer une url dans les champs de formulaire
  return $fields;
});

/*
** Ajout de nom de classe à certains éléments du formulaire | suppression titre réponse
** Rendu HTML des champs de formulaire textarea
*/
add_filter('comment_form_defaults', function (array $fields):array{

  $fields['title_reply'] = '';
  $fields['class_form'] = 'form-2column';
  $fields['class_submit'] = 'btn';

  $commentLabel = _x('Comment', 'noun');
  $fields['comment_field'] = <<<HTML
  <textarea placeholder="{$commentLabel}" name="comment" id="comment" class="form-control full" required></textarea>
  HTML;
  return $fields;
});

/*
** Réorganisation de l'ordre d'apparition des champs du formulaire dans la page
*/
add_filter( 'comment_form_fields', function (array $fields): array {
  $newFields = [];
  foreach($fields as $key => $value){
    if($key !== 'comment'){
      if ($key === 'cookies'){
        $newFields['comment'] = $fields['comment'];
      }
      $newFields[$key] = $value;
    }
  }
  if(!isset($newFields['comment'])){
    $newFields['comment'] = $fields['comment'];
  }
  return $newFields;
});

?>


