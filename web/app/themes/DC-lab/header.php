<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DClab
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'dclab' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-top">
			<div class="col-2">
				<div class="header-logo">
					<?php the_custom_logo(); ?>
				</div>
			</div>
			<div class="col-10 header-menu">
					<div class="col-10">
						<nav id="site-navigation" class="main-navigation">
							<?php wp_nav_menu([
								'theme_location' => 'header',
								'container' => false,
								'menu_class' => 'navbar-nav mr-auto'
							]) ?>
						</nav><!-- #site-navigation -->
					</div>
					<div class="col-2">
						<div class="header-account-and-notification">
							<div class="header-notification">
								<?xml version="1.0" encoding="iso-8859-1"?>
								<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
								<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
									 viewBox="0 0 512 512" xml:space="preserve">
								<g>
									<g>
										<path d="M467.812,431.851l-36.629-61.056c-16.917-28.181-25.856-60.459-25.856-93.312V224c0-67.52-45.056-124.629-106.667-143.04
											V42.667C298.66,19.136,279.524,0,255.993,0s-42.667,19.136-42.667,42.667V80.96C151.716,99.371,106.66,156.48,106.66,224v53.483
											c0,32.853-8.939,65.109-25.835,93.291l-36.629,61.056c-1.984,3.307-2.027,7.403-0.128,10.752c1.899,3.349,5.419,5.419,9.259,5.419
											H458.66c3.84,0,7.381-2.069,9.28-5.397C469.839,439.275,469.775,435.136,467.812,431.851z"/>
									</g>
								</g>
								<g>
									<g>
										<path d="M188.815,469.333C200.847,494.464,226.319,512,255.993,512s55.147-17.536,67.179-42.667H188.815z"/>
									</g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								<g>
								</g>
								</svg>

							</div>
							<div class="header-account">
								<div class="header-logo">
									<svg id="header-account-logo" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m431.964 435.333c-.921-58.994-19.3-112.636-51.977-151.474-32.487-38.601-76.515-59.859-123.987-59.859s-91.5 21.258-123.987 59.859c-32.646 38.797-51.013 92.364-51.973 151.285 18.46 9.247 94.85 44.856 175.96 44.856 87.708 0 158.845-35.4 175.964-44.667z"/><circle cx="256" cy="120" r="88"/></svg>
								</div>
								<div class="header-name"></div>
							</div>
						</div>
					</div>
			</div>
		</div>

		<div class="header-bottom">
			<div class="col-2">
				<div class="toggleButton">
					<input type="checkbox" hidden="hidden" id="username">
					<label class="switch" for="username"></label>
				</div>
			</div>
			<div class="col-3">
				<div  id="navbarSupportedContent">
					<?php wp_nav_menu( [
						'theme_location' => 'ville',
						'container' => false,
						'menu_class' => 'navbar-nav mr-auto'
					] ) ?>
				</div>
			</div>
			<div class="col-5">
				<div class="header-title">
					<h1><?php the_title() ?></h1>
				</div>
			</div>
			<div class="col-2">
				<div id="navbarSupportedContent">
					<?php wp_nav_menu( [
						'theme_location' => 'theme',
						'container' => false,
						'menu_class' => 'navbar-nav mr-auto'
					] ) ?>
				</div>
			</div>
		</div>

	</header><!-- #masthead -->
	<div class="filAriane">
		<?php
			if ( function_exists('yoast_breadcrumb') ) {
			  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
		?>
	</div>
