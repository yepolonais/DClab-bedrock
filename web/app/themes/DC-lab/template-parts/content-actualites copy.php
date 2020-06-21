<?php
 //* Template de la page actualités
?>

<div class="wrapper">
	<div class="container">
		<section class=" row home-blog">
			<h2>Les dernières Actualités</h2>
			<div class="col-4">

			</div>
			<?php $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;	?>
			<?php
			$args = array(
				'post-type' => 'post',
				'posts_per_page'=> -1,
				//'cat' => '3',
				//'category_name' => 'categorie-02',
				'orderby' => 'date',
				'order' => 'desc',
				'paged' => $paged,
				// 'ignore_sticky_post' => 1,
			); ?>

			<?php
			$the_query = new WP_Query($args); ?>





			<?php if ($the_query->have_posts()) : ?>
				<div class="row">
					<?php // dclab_infinite_scroll_render() { ?>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

						<article <?php post_class($class = 'col-md-4 col-ms-6 col-xs-12 item'); ?> id="post-<?php the_ID(); ?>">
							<header class="entry-header">
								<?php
								the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
								if ('post' === get_post_type()) :
								?>
									<div class="entry-meta">
										<?php

										$datePublication = get_the_time('G');
										$dateActuelle = current_time('timestamp');
										echo 'publié il y a ' . human_time_diff($datePublication, $dateActuelle);
										?>

									</div><!-- .entry-meta -->
								<?php endif; ?>
							</header><!-- .entry-header -->

							<section>

								<div>
									<?php // dclab_post_thumbnail('article-size');
									?>
									<!--TODO: essayer de piger pkoi cela ne marche pas -->
									<?php //  the_post_thumbnail(array( 30, 10 ));
									?>

									<?php the_post_thumbnail('article-size'); ?>
									<?php the_excerpt(); ?>
								</div>

								<div id="commentaires" class="comments">
									<i class="fas fa-comments"></i>
									<?php echo get_comments_number(); ?>
								</div>

							</section>

							<footer class="entry-footer">
								<?php the_category(); ?>
							</footer><!-- .entry-footer -->
						</article>

						<!-- #post-<?php the_ID(); ?> -->



					<?php endwhile; ?>
				<?php // } ?>



					<!-- end of the loop -->

				</div>
				<?php wp_reset_postdata(); ?>
				<?php //	pagination_actualite($the_query); ?>
			<?php else :	?>
				<p><?php _e('Désolé, aucun article ne correspond à votre recherche.', 'montheme'); ?></p>
			<?php endif;	?>
		</section>
		<!-- affiche la pagination pour les articles -->
		<!--TODO: ne fonctionne pas en l'état, pb avec l'objet WP-Query-->
		<?php



		// var_dump($wp_query->found_posts);
		// var_dump($the_query);
		// the_posts_pagination();
		?>
		<div class="pagination">
			<?php
			// global $wp_query;
			// global $wp_rewrite;


			// var_dump($wp_query);
			// var_dump($wp_rewrite);
			// var_dump($the_query);
			// var_dump($the_query->max_num_pages);
			// var_dump($the_query->query_vars['paged']);


			// theme_pagination();
			?>
		</div>

		<div class="tri">
			<?php
			// $current_category = get_queried_object();
			wp_dropdown_categories(array(
							'hierarchical' => 1,
							'value_field'  => 'name',
							'name'         => 'cat',
			));

			?>

	</div>
	<!--container-->
</div>
<!--wrapper-->
