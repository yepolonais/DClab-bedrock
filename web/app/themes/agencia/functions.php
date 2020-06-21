<?php

require_once 'inc/supports.php';
require_once 'inc/assets.php';
require_once 'inc/apparence.php';
require_once 'inc/menus.php';
require_once 'inc/style.php'; //filtre ou hook ayant attrait au style
require_once 'inc/images.php';
require_once 'inc/query/post.php';
require_once 'inc/query/property.php';
require_once 'inc/comments.php';

  /*
  ** Incorpore les svg des réseaux sociaux dans le widget du footer
  */
function agencia_icon(string $name): string {
    $spriteUrl = get_theme_file_uri() . '/assets/sprite.14d9fd56.svg';
    return <<<HTML
    <svg class="icon"><use xlink:href="{$spriteUrl}#{$name}"></use></svg>
    HTML;
}

  /*
  ** Pagination des articles
  */
function agencia_paginate(): string {
  return '<div class="pagination">' . paginate_links(['prev_text' => agencia_icon('arrow'), 'next_text' => agencia_icon('arrow')]) . '</div>';
}
  /*
  ** Pagination des commentaires
  */
function agencia_paginate_comments(): void {
  echo '<div class="pagination">';
  paginate_comments_links(['prev_text' => agencia_icon('arrow'), 'next_text' => agencia_icon('arrow')]);
  echo '</div>';
}
?>
