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

<main id="main" class="SiteMain" role="main">
	<?php get_template_part('template-parts/plugins/plugin','lightbox');?>
	<?php get_template_part('template-parts/page/intro','page');?>
	<?php get_template_part('template-parts/scroll/section','scroll'); ?>
	<?php get_template_part('template-parts/polos/section','polos'); ?>
	<?php get_template_part('template-parts/segmentos/section','segmentos'); ?>
	<?php get_template_part('template-parts/parceiros/section','parceiros'); ?>
	<?php get_template_part('template-parts/cta/section','cta'); ?>
	<?php // get_template_part('template-parts/produtos/section','produtos'); ?>
	<?php get_template_part('template-parts/blog/section','blog'); ?>
	<?php // get_template_part('template-parts/depoimentos/section','depoimentos'); ?>
	<?php get_template_part('template-parts/institucional/section','institucional'); ?>
	

</main><!-- #main -->



<?php get_footer();
