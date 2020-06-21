<?php
 //* Template de la page actualités
?>


	<div>
		<h2 class="title-actu">Les dernières Actualités</h2>
		<section class="home-blog">
					<div class="tri">
			<?php dclab_tri_articles();?>
		</div>
			<?php dclab_display_articles() ?>
		</section>

		<div class="tri">
			<?php dclab_tri_articles(); ?>
		</div>
	</div> <!--container-->
