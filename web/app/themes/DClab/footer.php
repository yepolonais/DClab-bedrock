<?php
/**
 * Le template de notre footer
 */
?>

<footer class="container-fluid site-footer fixed-bottom">
	<div class="row h-100 w-100">
		<div class="col-4 h-100">
			<div class="footer-logo h-100 d-flex align-items-center">
				<div class="logoDC">
					<?= dclab_icon('logoDC') ?>
				</div>
			</div>
		</div>
		<div class="col-4 h-100 mentionsLegales ">
			<div class="footer-ml w-100 h-100 d-flex align-items-center justify-content-center">
				<p>
					 <?php /* wp_nav_menu([
						'theme_location' => 'menufooter',
						'container' => false,
					]) */?>
					Mentions légales
				</p>
			</div>
		</div>
		<div class="col-4 h-100">
			<div class="footer-rs h-100 d-flex align-items-center justify-content-end">
				<a href="https://www.facebook.com/digital.campus.bordeaux" class="footer-facebook d-flex align-items-center justify-content-center h-50">
					<?= dclab_icon('facebook') ?>
				</a>
				<a href="https://www.linkedin.com/school/11188932/" class="footer-linkedin d-flex align-items-center justify-content-center h-50">
					<?= dclab_icon('linkedin') ?>
				</a>
				<a href="https://twitter.com/digitcamp" class="footer-twitter d-flex align-items-center justify-content-center h-50">
					<?= dclab_icon('twitter') ?>
				</a>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>
