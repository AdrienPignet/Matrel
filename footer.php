<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>


		<?php do_action( 'foundationpress_layout_end' ); ?>

<footer>
	<section class="bigfoot row">
		<div class="small-12 medium-6 columns postal-info">
			<p>
				MATREL - 129, rue des marronniers<br />BP 5046438304<br /> Bourgoin-Jallieu Cedex<br />Tél : 0474934242 - Fax : 0474934488
			</p>
		</div>
		<div class="small-12 medium-6 columns legals">
			<ul>
				<li><a href="#">Plan du site</a></li>
				<li><a href="#">Mentions légales</a></li>
				<li>©Martel - 2016</li>
			</ul>
		</div>
	</section>
</footer>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script type='text/javascript' id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.11.1.js'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>
