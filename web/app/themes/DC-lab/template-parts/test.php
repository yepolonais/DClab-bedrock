<?php

/**
 *
 * Template de la page actualités
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DClab
 */

?>
<div class="wrapper">
	<div class="container">
		<section id="" class="home-blog">



			<?php
			$args = array(
				'post-type' => 'actualités',
				'showposts' => '6',
				//'cat' => '3',
				//'category_name' => 'categorie-02',
				'orderby' => 'date',
				'order' => 'desc',
				'ignore_sticky_post' => 1,
			); ?>
			<?php
			$the_query = new WP_Query($args); ?>

				<!-- beginning of the loop -->
			<?php if (!$the_query->have_posts()) : ?>
			<?php return ?>
			<?php else: ?>
				<div class="row">
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
					the_title();
					<?php endwhile; ?>
					<!-- end of the loop -->
				</div>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>


			<?php
			$args = array(
				'post-type' => 'forum',
				'showposts' => '6',
				//'cat' => '3',
				//'category_name' => 'categorie-02',
				'orderby' => 'date',
				'order' => 'desc',
				'ignore_sticky_post' => 1,
			); ?>
			<?php
			$the_query = new WP_Query($args); ?>

				<!-- beginning of the loop -->
			<?php if (!$the_query->have_posts()) : ?>
			<?php return ?>
			<?php else: ?>
				<div class="row">
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
					the_title();
					<?php endwhile; ?>
					<!-- end of the loop -->
				</div>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>








		</section>

	</div>
	<!--container-->
</div>
<!--wrapper-->
