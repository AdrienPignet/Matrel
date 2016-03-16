<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<section class="title-bg row">
		<h2><?php the_title(); ?></h2>
		<h3><?php echo $value = get_field( "sous_titre_produit" ); ?></h3>
		<hr />
	</section>
	<section class="produit row">
		<div class="small-12 medium-12 large-6 columns produit-img">
			 <?php the_content(); ?>
		</div>
		<div class="small-12 medium-12 large-6 columns">
			<div class="boutons small-12 columns">
				<div class="small-12 medium-12 large-6 columns contact">
					<a href="<?php echo $value = get_field( "contact" ); ?>"><i class="fa fa-envelope"></i> Contact</a>
				</div>
				<div class="small-12 medium-12 large-6 columns pdf">
					<a href="<?php echo $value = get_field( "version_pdf" ); ?>" target="_blank"><i class="fa fa-download"></i> Version PDF</a>
				</div>
			</div>
			<div class="description small-12 columns">
				<h4><?php echo $value = get_field( "titre_description" ); ?></h4>
				<hr />
				<p><?php echo $value = get_field( "description" ); ?></p>
			</div>
		</div>
	</section>
	<section class="carac row">
		<h3>Caractéristiques</h3>
		<hr/>
		<div class="carac-listes">
			<div class="small-12 medium-6 large-3 columns">
				<?php echo $value = get_field( "caracteristique_un" ); ?>
			</div>
			<div class="small-12 medium-6 large-3 columns">
				<?php echo $value = get_field( "caracteristique_deux" ); ?>
			</div>
			<div class="small-12 medium-6 large-3 columns">
				<?php echo $value = get_field( "caracteristique_trois" ); ?>
			</div>
			<div class="small-12 medium-6 large-3 columns">
				<?php echo $value = get_field( "caracteristique_quatre" ); ?>
			</div>
		</div>
	</section>
</div>
