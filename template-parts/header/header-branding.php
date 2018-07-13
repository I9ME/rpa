<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */

?>

<?php 
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$logo = wp_get_attachment_image_src( $custom_logo_id , 'medium' );
?>

<div class="Site-header-brandingContainer">
	<div class="Site-header-title u-displayFlex u-flexJustifyContentCenter">
		<?php 
			if ( has_custom_logo() ) {
			        echo '<img class="Site-header-branding Branding Branding--img" src="'. esc_url( $logo[0] ) .'" alt="' . get_bloginfo( 'name' ) . '">';
			} else {
			        echo '<title>ROUPA EM ATACADO</title>';
			}
		 ?>
	</div>
</div>

		