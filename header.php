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
		<!-- <div class="u-displayFlex u-paddingHorizontal--inter">
			<ul class="u-displayFlex">
				<li>Whatsapp</li>
				<li>Telefone</li>
				<li>Sobre nós</li>
			</ul>
		</div> -->
		<div class="u-maxSize--container u-alignCenterBox u-sizeFull">
			<div class="Site-header-line1 u-marginVertical--inter--half u-displayFlex u-flexAlignItemsCenter_ u-flexFolowSize u-flexJustifyContentCenter">
				<!-- Logo do site -->
				<div class="Site-header-branding u-displayFlex u-size4of24"> 
					<a href="<?php echo ''; ?>" class="u-displayFlex">
						<img src="<?php echo  get_template_directory_uri(); ?>/assets/images/logorpa.png" alt="rpa">
					</a>
					<?php// get_template_part('template-parts/header/header','branding');?>
				</div>
				<!-- Navigation -->
				<div class="u-size16of24 u-displayFlex u-flexJustifyContentCenter">
				<?php  get_template_part('template-parts/header/header','navigation'); ?>
				<?php  //get_template_part('template-parts/header/header','search-form'); ?>
				</div>
				<div class="Site-header--headerRpa-content u-size4of24">
					<a class="Button Button--border u-sizeFull is-animating u-borderRadius5 Button--smallSize hover u-displayFlex" href="#">Seja uma <br> <b>marca</b>&nbsp;destaque</a>
				</div>
			</div>
		</div>

	</header><!-- #masthead -->
	

	<div class="Site-container">
		<div id="content" class="Site-container-content">
