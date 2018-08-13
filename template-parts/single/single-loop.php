<div class="Section-content u-sizeFull u-displayFlex u-flexJustifyContentSpaceAround">
	<?php                     
	      if ( has_post_thumbnail() ) {
			
				//Imagem Destacada	
				$image_id = get_post_thumbnail_id();
				$sizeThumbs = 'thumbnail';
				$urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);
				$urlThumbnail = $urlThumbnail[0];

			} else {
				$urlThumbnail = '';
			}
/*
			// MetaBoxes
	      	$recorrencia = get_post_meta( get_the_ID(), 'var_tipo', true );
	      	$data_inicial = get_post_meta( get_the_ID(), 'value_line_1', true );
	      	$data_final = get_post_meta( get_the_ID(), 'value_line_2', true );
	      	$quant_total = get_post_meta( get_the_ID(), 'value_line_3', true );
	      	$quant_gerado = get_post_meta( get_the_ID(), 'value_line_4', true );
	      	$valor_normal = get_post_meta( get_the_ID(), 'value_line_5', true );
	      	$valor_promocional = get_post_meta( get_the_ID(), 'value_line_6', true );
	      	$descricao = get_post_meta( get_the_ID(), 'value_line_7', true );
	      	$regras_gerais = get_post_meta( get_the_ID(), 'value_line_8', true );*/
  		?>
  	<div class="Section-content-items u-size5of24">
  		<figure class="Section-content-items-item-figure">
  			<img class="Section-items-item-figure-src u-heightFull u-minWith100 u-objectFitCover is-animating" src="<?php echo $urlThumbnail; ?>" alt="<?php echo get_the_title(); ?>"/>
  		</figure>
  	</div>
	<div class="Section-content u-size15of24">
		<div class="Section-content-items u-size24of24 u-displayFlex u-paddingBottom--inter">
			<div class="Section-content-items-item u-size24of24">
				<h2 class="Section-content-items-item-title u-sizeFull">Polos de Moda</h2>
				<p class="Section-content-items-item-subtitle u-sizeFull">Conteúdo estático</p>
			</div>
			<div class="Section-content-items-item u-size24of24">
				<h2 class="Section-content-items-item-title u-sizeFull">Gênero(s)</h2>
				<p class="Section-content-items-item-subtitle u-sizeFull">Conteúdo estático</p>
			</div>
		</div>
		<div class="Section-content-items u-size24of24 u-displayFlex">
			<div class="Section-content-items-item u-size24of24">
				<h2 class="Section-content-items-item-title u-sizeFull">Segmento(s)</h2>
				<p class="Section-content-items-item-subtitle u-sizeFull">Conteúdo estático</p>
			</div>
			<div class="Section-content-items-item u-size24of24">
				<h2 class="Section-content-items-item-title u-sizeFull">Mix de Produtos</h2>
				<p class="Section-content-items-item-subtitle u-sizeFull">Conteúdo estático</p>
			</div>
		</div>
	</div>
</div>