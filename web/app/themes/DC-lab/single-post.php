<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package DClab
 */



get_header();
?>
	<main id="primary" class="site-main page-single-post">


		<div class="nav-single-post nav-left">
			<a href="javascript:history.back()"> <button class="fas fa-arrow-left"></button> </a>
		</div>

		<div class="post-single">

		<?php
		while ( have_posts() ) :
			the_post();


			get_template_part( 'template-parts/content', get_post_type() );


			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		</div>
		<div class="nav-single-post nav-right">
			<?php next_post_link('%link','<i class="fas fa-arrow-right"></i>'); ?>
		</div>

	</main><!-- #main -->
<?php
get_sidebar();
get_footer();
