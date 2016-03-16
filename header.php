<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon.png">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700|Montserrat:400,700' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header role="banner">
		<section class="header row">
			<div class="small-6 large-4 columns logo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/matrel/logo_plat.svg" alt="" />
			</div>
			<div class="hide-for-small-only hide-for-medium-only large-4 columns baseline">
				<h2>Equipements et systèmes pour la finition <br/>et la présentation des documents</h2>
			</div>
			<div class="small-6 large-4 columns menu-custom">
				<span>
					<p>Menu</p><i class="fa fa-bars"></i>
				</span>
			</div>
		</section>
	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
