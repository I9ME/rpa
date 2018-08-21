<?php
$general_terms = get_terms("segmentos");
?>
<ul class="Section-content-items u-alignCenter u-marginVertical u-paddingHorizontal--inter">
<?php
foreach ($general_terms as $term):
	echo '<li class="Section-content-items-item u-boxShadow u-marginBottom--inter--half"><a href="'. $term->slug .'" class="Section-content-items-item-resume u-displayFlex u-flexDirectionColumn u-sizeFull">'. $term->name .'</a></li>';
endforeach
?>
</ul>