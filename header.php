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


<div id="page" class="Site">
	<header id="masthead" class="Site-header Site-header--headerRpa u-positionRelative u-sizeFull u-paddingHorizontal--inter u-displayFlex u-flexDirectionColumn u-flexAlignItemsCenter is-animating u-zIndex20">
		<div class="Site-header-content u-displayFlex u-paddingBottom--inter u-sizeFull u-paddingVertical u-onlyDesktop">
			<ul class="u-displayFlex Site-header-items u-paddingVertical u-sizeFull u-flexJustifyContentFlexEnd">
				<li class="Site-header-content-items-item u-marginVertical--inter">
					<a class="Site-header-content-items-item-link is-animating" href="#">Sobre nós</a>
				</li>
				<li class="Site-header-content-items-item u-marginVertical--inter">
					<a class="Site-header-content-items-item-link is-animating" href="#">Atendimento</a>
				</li>
				<li class="Site-header-content-items-item u-marginVertical--inter">
					<a class="Site-header-content-items-item-link is-animating" href="#">Login/Cadastro</a>
				</li>
				<li class="Site-header-content-items-item u-displayFlex u-marginVertical--inter">
					<div class="u-displayFlex u-flexDirectionColumn u-flexJustifyContentCenter">
						<i class="FigureIcon FigureIcon--wpp"></i>
					</div>
					<div class="u-displayFlex u-flexDirectionColumn u-flexJustifyContentCenter">
						<div class="Site-header-content-items-item-link Site-header-content-items-item-link--phone is-animating">(85) 99770-9262</div>
					</div>
				</li>
				<li class="Site-header-content-items-item u-displayFlex u-marginVertical--inter">
					<div class="u-displayFlex u-flexDirectionColumn u-flexJustifyContentCenter">
						<i class="FigureIcon FigureIcon--phone"></i>
					</div>
					<div class="u-displayFlex u-flexDirectionColumn u-flexJustifyContentCenter">
						<a class="Site-header-content-items-item-link Site-header-content-items-item-link--phone is-animating" href="#">(85) 4042-0800</a>
					</div>
				</li>
			</ul>
		</div>
		<div class="u-maxSize--container u-alignCenterBox u-sizeFull">
			<div class="Site-header-line1 u-marginVertical u-displayFlex u-flexAlignItemsCenter u-flexFolowSize">
				<!-- Logo do site -->
				<div class="Site-header-branding u-displayFlex"> 
					<a href="<?php echo ''; ?>" class="u-displayFlex">
						<img src="<?php echo  get_template_directory_uri(); ?>/assets/images/logorpa.png" alt="rpa">
					</a>
				</div>
				<!-- Navigation -->
				<div class="Site-header-navigation u-displayFlex u-flexDirectionColumn u-flexJustifyContentCenter u-paddingVertical--inter">
				<?php  get_template_part('template-parts/header/header','navigation'); ?>
				</div>
				<div class="Site-header-content u-onlyDesktop">
					<a class="Button Button--border is-animating u-borderRadius5 Button--smallSize hover u-alignCenter u-displayFlex" href="<?php echo get_home_url( $blog_id = null, $path = '/cadastro/fabricante/', $scheme = null ) ?>">Seja uma&nbsp;<b>marca</b>&nbsp;destaque</a>
				</div>
			</div>
		</div>

	</header><!-- #masthead -->
	

	<div class="Site-container">
		<div id="content" class="Site-container-content">
