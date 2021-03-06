<?php

/**
 * Le template qui gère le header de notre thème
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<header id="masthead" class="container-fluid site-header">
			<div class=" row header-top">
				<div class="col-2 h-100">
					<a href="<?= home_url('/') ?>" class="header__logo d-flex align-items-center h-100" title="<?= __('Page d\'accueil', 'dclab') ?>">
						<img src="<?= get_theme_mod('logo') ?>" alt="Logo de l'agence">
					</a>
				</div>
				<div class="col-8 h-100">
					<nav id="site-navigation" class="main-navigation">
						<?php wp_nav_menu([
							'theme_location' => 'header',
							'container' => false,
							'menu_class' => 'd-flex w-100 justify-content-evenly'
						]) ?>
					</nav><!-- #site-navigation -->
				</div>
				<div class="col-2 h-100">
					<div class="header-account-and-notification">
						<div class="header-notification d-flex align-items-center justify-content-end">
							<?= dclab_icon('notifications')   ?>
						</div>
						<div class="header-account d-flex flex-column">
						<a class="header-logo d-flex align-items-center justify-content-center w-100 h-100" href="http://localhost:8000/index.php/infosprofil/">
							<div class="header-logo d-flex align-items-center justify-content-center w-100 h-100">
							
								<?= dclab_icon('user') ?>
						
							</div>
						</a>
							<div class="header-name d-flex align-items-center justify-content-center w-100 h-100">
								<?= wp_get_current_user()->user_nicename;	?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row header-bottom">
				<div class="col-4 dclab__languages h-100 w-100">
					<div class="toggleButton h-100 w-100">
						<input type="checkbox" hidden="hidden" id="username">
						<label class="switch" for="username"></label>
					</div>
				</div>
				<div class="col-4 h-100 w-100">
					<div class="header-title w-100 h-100 d-flex align-items-center justify-content-center">
						<h1 class="text-capitalize"><?php dclab_titre() ?></h1>
					</div>
				</div>
				<div class="col-4 h-100 w-100">
					<form class="row h-100">
						<div class="col-6 dclab__school h-100 w-100">
							<div id="navbarSupportedContent" class="h-100 w-100">
								<div class="form-group h-100 w-100 d-flex align-items-center justify-content-center">
									<select class="form-control h-75 w-100" name="school" id="school" <?php disabled(is_front_page())?>>
										<option value=""><?= __('Toutes les écoles', 'dclab')   ?></option>
										<?php dclab_choix_ecoles() ?>
									</select>
								</div>
							</div>
						</div>
						<div class="col-6 dclab__labs h-100 w-100">
							<div id="navbarSupportedContent" class="w-100 h-100">
								<div class="form-group h-100 w-100 d-flex align-items-center justify-content-center">
									<select class="form-control h-75 w-100" name="labs" id="labs" <?php disabled(is_front_page())?>>
										<option value=""><?= __('Tous les labs', 'dclab')   ?></option>
										<?php dclab_choix_labs() ?>
									</select>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
	</div>
	</header><!-- #masthead -->
	<!-- <div class="filAriane">
			<?php
			if (function_exists('yoast_breadcrumb')) {
				yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
			}
			?>

		</div> -->
<?php
// global $post;
// dump($post);
?>
