<?php

/**
 * Template Name: CLEAN PAGE
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */
//get_header();
?>

<div style="padding: 35px; background: #FFF;">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Desculpe, mas não foi encontrado nenhum conteúdo.</p>
<?php endif; ?>

</div>

