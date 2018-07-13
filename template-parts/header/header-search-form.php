<?php
/**
 * Displays Login Customer
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */

?>
<div id="SeachHeader-container" class="Form Form--style3 Navigation Navigation--content Navigation--content--level2 Navigation--content--style1  u-isCollapsed u-contentHide u-contentHide--height u-size24of24 is-animating">
	<form action="/" method="get" accept-charset="utf-8" class="Item is-animating u-paddingVertical" id="searchform" role="search">
	  	<div class="Navigation--content-container u-alignRight u-flex">
	    	<input type="text" name="s" class="Form-input u-borderRadius50 u-size18of24 u-inlineFlex" placeholder="PESQUISE EM TODOS OS POSTS" id="s" value="<?php the_search_query(); ?>" />
	    	<input type="submit" class="Form-input Form-input--searchSubmit u-borderRadius50 u-inlineFlex u-marginLeft--inter FigureIcon FigureIcon--search is-animating" id="searchsubmit" value="" />
	  	</div>
	</form>
</div>