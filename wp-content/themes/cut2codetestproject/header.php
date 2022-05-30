<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cut2codetestproject
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


	<header class="header">

		<div class="header-inner container">

			<div class="logo-block">
				<?php
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				 
				if ( has_custom_logo() ) {
					echo '<a href="' . esc_url( $logo[0] ) . '"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
				} else {
					echo '<a href="' . esc_url( $logo[0] ) . '">' . get_bloginfo('name') . '</a>';
				}
				?>
			</div>

			<div class="hamburger hamburger--3dx">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
			<nav>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav>

		</div>

	</header>
