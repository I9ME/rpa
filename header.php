<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>



</head>

<body <?php body_class(); ?>>


	<?php 

	$check_content_page =  check_content_page();
	
	if( $check_content_page['content_page'] == 'revendedor' ){

		$var_content_page = 'Site--revendedor';
		$other_page_label = 'Sou <strong>fabricante</strong>';
		$other_page_lik = get_home_url() . '/fabricante/';

	} elseif( $check_content_page['content_page'] == 'fabricante' ) {
		
		$var_content_page = 'Site--fabricante';
		$other_page_label = 'Sou <strong>revendedor(a)</strong>';
		$other_page_lik = get_home_url();

	} else {

		$var_content_page = 'Site--fabricante';
		$other_page_label = 'Sou <strong>revendedor(a)</strong>';
		$other_page_lik = get_home_url();
	
	}
	
	?>


	<!--<header id="masthead" class="Site-header u-positionAbsolute u-sizeFull u-zIndex10 u-paddingHorizontal--inter is-animating">
		
		<div class="u-maxSize--container u-alignCenterBox u-sizeFull">
			<div class="Site-header-branding u-sizeFull"> 
				<?php get_template_part('template-parts/header/header','branding');?>
			</div>
			
			<div class="Site-header-functions"> 
				<a href="<?php echo $other_page_lik; ?>" class="Button Button--border is-animating u-borderRadius5 Button--smallSize hover"><?php echo $other_page_label; ?></a>
			</div>
			
		</div>

	</header><!-- #masthead -->

	

	<div class="Site-container">
		<div id="content" class="Site-container-content">
