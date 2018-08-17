<?php
/**
 * The main template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="main" class="SiteMain" role="main">
	<?php get_template_part('template-parts/page/intro','page');?>
	<div class="u-alignCenterBox u-displayFlex u-flexDirectionColumn">
		<div class="u-maxSize--container u-alignCenterBox u-sizeFull">
			
			<?php
				// Função que imprime o BreadCruumbs do YOAST SEO
				if ( function_exists('yoast_breadcrumb') ) {
				  yoast_breadcrumb( '</p><p id="breadcrumbs" class="Breadcrumbs u-paddingHorizontal--inter--half u-paddingVertical u-onlyDesktop">','</p><p>' );
				}
			?>
		</div>
		<main class="Section Section--marcasDeRoupa SiteMain-main u-maxSize--container">
			<?php get_template_part('template-parts/marcas/marcas','loop');?>
		</main>
	</div>

</div><!-- #main -->


<?php get_template_part('template-parts/cta/section','cta'); ?>

<?php get_footer();
