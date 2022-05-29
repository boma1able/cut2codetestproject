<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cut2codetestproject
 */

?>

 <footer class="footer">
	 <div class="footer-inner container">

		<div class="social-list">
			<?php if( have_rows('f_cos_rep', 'options') ): ?>
				<?php while( have_rows('f_cos_rep', 'options') ): the_row(); ?>

					<a href="<?php the_sub_field('f_soc_rep_link', 'options');?>" target="_blank"><?php the_sub_field('f_soc_rep_ttl', 'options');?></a>

				<?php endwhile; ?>
			<?php endif; ?>
		</div>

		<div class="footer-logo">
			<?php
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				 
				if ( has_custom_logo() ) {
					echo '<a href="' . esc_url( $logo[0] ) . '"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
				} else {
					echo '<a href="' . esc_url( $logo[0] ) . '"><h2>' . get_bloginfo('name') . '</h2></a>';
				}
			?>
		</div>

		<div class="copy-txt"><?php the_field('copy_text', 'options');?></div>

	 </div>
 </footer>

<?php wp_footer(); ?>

</body>
</html>
