<?php 
			if(is_single()){
				
				$newsArgs = array( 'post_type' => 'marca-de-roupa', 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'ASC'); 
			
			} else {

				$newsArgs = array( 'post_type' => 'marca-de-roupa', 'posts_per_page' => 12, 'orderby'=> 'date', 'order' => 'ASC');
			
			}
			
			$newsLoop = new WP_Query( $newsArgs );
			
			if ( $newsLoop->have_posts() ): 

 		?>
	<ul class="Section-items u-size24of24 u-flex u-flexWrapWrap u-flexJustifyContentCenter">
		<?php                     
	      while ( $newsLoop->have_posts() ) : $newsLoop->the_post();
	      	
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
	
		<li class="Section-items-item u-marginBottom--inter u-flex u-flexDirectionColumn u-alignCenter u-size6of24">
			<a href="<?php echo get_permalink(); ?>" class="Section-items-item-content  u-size24of24 u-positionRelative u-displayFlex u-flexDirectionColumn u-flexJustifyContentCenter">
					<figure class="Section-items-item-figure u-lineHeight0 u-positionRelative u-displayFlex u-flexJustifyContentCenter u-overflowHidden">
						<img class="Section-items-item-figure-src u-heightAuto u-minWith100 u-objectFitCover is-animating" src="<?php echo $urlThumbnail; ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>" />
					</figure>
					<div class="Section-items-item-texts u-paddingHorizontal--vrt--inter--half--px">
						<h4 class="Section-items-item-title u-alignCenter u-positionRelative"><?php echo get_the_title(); ?></h4>
						
					</div>		
			</a>
		</li>
		<?php endwhile; ?>

	</ul>
	<?php else: ?>
		<div class="u-displayBlock u-positionRelative u-alignCenter u-marginHorizontal--vrt"><h3>Não encontramos nenhuma marca.</h3></div>
	<?php 
			endif; 
			wp_reset_postdata(); 
	?>