<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DClab
 */

get_header();
?>
	<main id="primary" class="site-main">
		<p> Je suis la page d'informations des profils</p>
		<?php
					get_template_part( 'template-parts/content', 'infosprofil' );
		?>
	</main><!-- #main -->
<?php
// get_sidebar();
get_footer();
?>
