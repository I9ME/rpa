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

<div id="main" class="SiteMain u-hasSideBar" role="main">
	<?php get_template_part('template-parts/page/intro','page');?>
	
	<div class="u-maxSize--container u-alignCenterBox u-paddingVertical--hzt u-flex u-flexDirectionRow u-flexSwitchReverse--mobile u-flex ">
		<main class="SiteMain-main">
			<?php get_template_part('template-parts/post/post','loop-post_type');?>
		</main>
		<div class="SiteMain-sideBar">
			<?php get_template_part('template-parts/sidebar/sidebar','blog');?>
		</div>
	</div>

</div><!-- #main -->




<?php get_footer();
