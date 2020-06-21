<?php
add_action('pre_get_posts', function (WP_Query $query){
  if(is_admin() ||
  !$query->is_main_query() ||
  (!is_home() && !is_search() && ! is_category())
  ){
    return;
  }
  $query->set('posts_per_page', 1);
});

?>
