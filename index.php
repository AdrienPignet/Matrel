<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<div class="ariane-bg">
	<section class="ariane row">
		<div class="small-12 medium-12 large-6 columns ariane-custom">
			<ul>
				<li><a href="#">Accueil ></a></li>
				<li><a href="#">Raineuse/plieuse/perforation ></a></li>
				<li class="active"><a href="#">CF 375</a></li>
			</ul>
		</div>
		<div class="small-12 medium-12 large-6 columns selector-custom">
			<select class="categorie-selector" name="el-selector-de-la-muerte">
				<option>Thermo-relieurs système FastBack</option>
				<option>Thermo-relieurs "dos carrés collés"</option>
				<option>Perfo-relieur - Perforateur</option>
				<option>Système de brochage numérique</option>
				<option>Assembleuses - Taqueuses</option>
				<option>Modules de brochage</option>
				<option>Massicots</option>
				<option>Pelliculeuse - Plastifieuse</option>
				<option>Vernisseuses</option>
				<option>Plieuses de table</option>
				<option>Plieuse professionnelle</option>
				<option selected>Raineuse/plieuse/perforation</option>
				<option>Raineuses par emboutissage</option>
				<option>Raineuses rotatives</option>
				<option>Piqueuses - Agrafeuses</option>
				<option>Foreuses</option>
				<option>Margeurs</option>
				<option>Compteuses de feuilles</option>
				<option>Coupeuse de cartes</option>
				<option>Perforateur</option>
			</select>
		</div>
	</section>
</div>
<div id="page" role="main">
	<article>
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

	</article>
	<section class="similaire row">
		<h3>Produits similaires</h3>
		<hr/>
		<section class="products">
			<div class="small-12 medium-4 columns">
				<section class="img-container">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/matrel/PA01.png" alt="Raineuse Touchline C 375" />
				</section>
				<a href="#"><i class="fa fa-eye"></i> Raineuse Touchline C 375</a>
			</div>
			<div class="small-12 medium-4 columns">
				<section class="img-container">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/matrel/PA02.png" alt="Touchline CPC 375 Duo" />
				</section>
				<a href="#"><i class="fa fa-eye"></i> Touchline CPC 375 Duo</a>
			</div>
			<div class="small-12 medium-4 columns">
				<section class="img-container">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/matrel/PA03.png" alt="Touchline CP 375" />
				</section>
				<a href="#"><i class="fa fa-eye"></i> Touchline CP 375</a>
			</div>
		</section>
	</section>
</div>

<?php get_footer();
