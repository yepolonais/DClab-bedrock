<?php
/*
** Template gérant les commentaires
*/
$counts = absint(get_comments_number());
// dump('hello');
?>

<!-- classe gérant l'affichage de nos commentaires -->
<?php require_once 'inc/walkers/CommentWalker.php' ?>

<div class="comments">
  <div class="comments__title">
    <?php if ($counts > 0) : ?>
      <?= sprintf(_n('%d Comment', '%d Comments', 'agencia'), $counts);  ?>
    <?php else :   ?>
      <?= __('Leave a reply', 'agencia')  ?>
    <?php endif;  ?>
  </div>

  <div class="comments__list">
    <?php wp_list_comments([
      'style' => 'div',
      'walker' => new AgenciaCommentWalker(),
    ]) ?>
  </div>

  <?php agencia_paginate_comments() ?>

<!-- comment_form appel le formulaire de base de WP gérant les commentaires -->
<!-- Nous avons modifié ce formulaire dans inc/comments.php  -->
  <?php if (comments_open()) : ?>
    <?php comment_form();   ?>
  <?php endif  ?>

</div>
