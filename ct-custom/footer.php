<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CT_Custom
 */

?>

</div><!-- #primary -->

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container-fluid">
		<div class="site-info row">
			<div class="col-md-12 p-5 text-center">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ct-custom' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'ct-custom' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'ct-custom' ), 'ct-custom', 'Coalition Technologies and Extended by <a href="https://github.com/ElvisAns">Elvis Ansima</a>' );
				?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?=get_template_directory_uri()?>/js/jquery.min.js"></script>
<script src="<?=get_template_directory_uri()?>/js/custom_scripts.js"></script>
</body>
</html>
