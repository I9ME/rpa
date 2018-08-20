<?php
$general_terms = get_terms("segmentos");
foreach ($general_terms as $term):
	echo '<a href="#" class="Section-content-items-item-resume">'. $term->name .'</p>';
endforeach
?>