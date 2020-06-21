<?php
 // Template part de la page forum
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php the_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

		$the_query = new WP_Query(array(
			'post_type' => 'post',
			'posts_per_page'=> 3,
			'paged' => $paged,
		));

		// The Loop
		if ( $the_query->have_posts() ) {
				echo '<ul>';
				while ( $the_query->have_posts() ) {
						$the_query->the_post();
						echo '<li>' . get_the_title() . '</li>';
						the_post_thumbnail('medium');
						the_content();
						next_post_link();
				}
				echo '</ul>';
		} else {
				// no posts found
		}
		/* Restore original Post Data */
		wp_reset_postdata();

		paginate_links();


		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dclab' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
