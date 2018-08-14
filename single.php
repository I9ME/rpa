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

<div id="main" class="SiteMain u-hasSideBar SiteMain--blog" role="main">
	<?php get_template_part('template-parts/page/intro','page');?>
	<div class="u-maxSize--container u-alignCenterBox u-sizeFull">
			<?php
				// Função que imprime o BreadCruumbs do YOAST SEO
				if ( function_exists('yoast_breadcrumb') ) {
				  yoast_breadcrumb( '</p><p id="breadcrumbs" class="Breadcrumbs u-paddingHorizontal--inter--half u-paddingVertical u-onlyDesktop">','</p><p>' );
				}
			?>
		</div>
	<div class="u-alignCenterBox u-paddingVertical--hzt u-flex u-flexDirectionRow u-flexSwitchReverse--mobile u-flex u-positionRelative">

		<main class="Section Section--single u-sizeFull SiteMain-main">
			<?php get_template_part('template-parts/single/single','loop');?>
		</main>

	</div>
</div><!-- #main -->




<?php get_footer();
