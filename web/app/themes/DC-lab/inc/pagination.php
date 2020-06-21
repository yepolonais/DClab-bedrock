<?php //fonction paginate_links
function pagination_actualite($the_query){
	$big = 999999999;

	echo paginate_links(array( // Plus d'info sur les arguments possibles : codex.wordpress.org/Function_Reference/paginate_links
		'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
		'format' => '?paged=%#%',
		'current' => max(1, get_query_var('paged')),
		'total' => $the_query->max_num_pages
	));
	//Fin de la fonction paginate_links
}
add_action('pagination_actualite', 'pagination_actualite')
?>


