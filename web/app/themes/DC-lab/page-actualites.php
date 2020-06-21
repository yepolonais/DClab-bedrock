<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DClab
 */

get_header();
?>
	<main id="primary" class="site-main page-actu">
		<p> Je suis la page d'actualités!!</p>
		<?php
					get_template_part( 'template-parts/content', 'actualites' );
		?>
	</main><!-- #main -->
<?php
// get_sidebar();
get_footer();
?>
