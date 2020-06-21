<?php
function dclab_display_articles(){

	$args = array(
		'post-type' => 'post',
		'posts_per_page'=> -1,
		//'cat' => '3',
		//'category_name' => 'categorie-02',
		'orderby' => 'date',
		'order' => 'desc',
		// 'paged' => $paged,
		// 'ignore_sticky_post' => 1,
	);

	$the_query = new WP_Query($args);
	if ($the_query->have_posts()) : ?>
		<div class="griddedposts">
			<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
				<article class="article-actu" <?php post_class($class = 'col-md-4 col-ms-6 col-xs-12 item'); ?> id="post-<?php the_ID(); ?>">
					<div class="thumbnail-actu">
						<?php the_post_thumbnail('article-size'); ?>
					</div>
					<div class="article-content">


					<header class="entry-header">
						<?php
						the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
						?>
						<p class="entry-meta">
						<?php
						$datePublication = get_the_time('G');
						$dateActuelle = current_time('timestamp');
						echo 'il y a ' . human_time_diff($datePublication, $dateActuelle);
						?>
					</p>
						<?php
						if ('post' === get_post_type()) :
						?>
							<!-- <div class="entry-meta">
								<?php
								$datePublication = get_the_time('G');
								$dateActuelle = current_time('timestamp');
								echo 'publié il y a ' . human_time_diff($datePublication, $dateActuelle);
								?>
							</div>		 -->
							<!-- .entry-meta -->
						<?php endif; ?>
					</header><!-- .entry-header -->

					<section>
						<?php the_excerpt(); ?>
					</section>

					<footer class="entry-footer">
						<div id="commentaires" class="comments">
							<i class="fas fa-comments"></i>
							<?php echo get_comments_number(); ?>
						</div>
						<?php the_category(); ?>
					</footer><!-- .entry-footer -->
					</div>
				</article>

				<!-- #post-<?php the_ID(); ?> -->
			<?php endwhile; ?>
			<!-- end of the loop -->
		</div>
		<?php wp_reset_postdata(); ?>
	<?php else :	?>
		<p><?php _e('Désolé, aucun article ne correspond à votre recherche.', 'montheme'); ?></p>
	<?php endif;	?>
<?php } ?>
