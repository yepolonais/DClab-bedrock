<?php
  /*
  ** Classe qui gère l'affichage des commentaires
  */
  class AgenciaCommentWalker extends \Walker_Comment{


    /**
     * @param WP_Comment $comment Comment to display.
     * @param int        $depth   Depth of the current comment.
     * @param array      $args    An array of arguments.
     */

    protected function html5_comment( $comment, $depth, $args ) {
      // dump('hello');
      $tag = ( 'div' === $args['style'] ) ? 'div' : 'li';

      $commenter = wp_get_current_commenter();
      // dump($commenter);
      if ( $commenter['comment_author_email'] ) {
        $moderation_note = __( 'Your comment is awaiting moderation.' );
      } else {
        $moderation_note = __( 'Your comment is awaiting moderation. This is a preview, your comment will be visible after it has been approved.' );
      }

      /*
      ** Le rendu HTML est assigné à template-parts/comment.php
      */
    $template = locate_template('template-parts/comment.php');
    include($template);
    }
  }
