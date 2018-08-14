<div class="Section-content u-sizeFull u-displayFlex u-justifyContentCenter u-alignItemsCenter u-flexFlowWrap u-maxSize--container">
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
			// MetaBoxes
	      	$tipo = get_post_meta( get_the_ID(), 'var_tipo', true );
	      	$link_site = get_post_meta( get_the_ID(), 'link_site', true );
	      	$link_store = get_post_meta( get_the_ID(), 'link_store', true );
	      	$link_facebook = get_post_meta( get_the_ID(), 'link_facebook', true );
	      	$link_instagram = get_post_meta( get_the_ID(), 'link_instagram', true );
	      	$link_other = get_post_meta( get_the_ID(), 'link_other', true );
	      	$phone = get_post_meta( get_the_ID(), 'phone', true );
	      	$static = "informação estática";

	      	/*
	      			update_post_meta( $post_id, 'var_tipo', $_POST['fields_tipe'] );
			update_post_meta( $post_id, 'link_site', $_POST['field_link_site'] );
			update_post_meta( $post_id, 'link_store', $_POST['field_link_store'] );
			update_post_meta( $post_id, 'link_facebook', $_POST['field_link_facebook'] );
			update_post_meta( $post_id, 'link_instagram', $_POST['field_link_instagram'] );
			update_post_meta( $post_id, 'link_other', $_POST['field_link_other'] );
			update_post_meta( $post_id, 'phone', $_POST['field_phone'] );
			update_post_meta( $post_id, '_image_id', $_POST['upload_image_id'] );
		      	*/
  		?>
  	<div class="Section-content-items--figureMobile u-marginRight">
  		<figure class="Section-content-items-item-figure">
  			<img class="Section-items-item-figure-src u-heightFull u-minWith100 u-objectFitCover is-animating" src="<?php echo $urlThumbnail; ?>" alt="<?php echo get_the_title(); ?>"/>
  		</figure>
  	</div>
  	<div class="Section-content-items u-displayFlex u-flexDirectionColumn u-size19of24">
	  	<ul class="Section-content-items">
	  		<li class="Section-content-items-item u-onlyDesktop">
	  			<h2 class="Section-content-items-item-title--altaCaixa"><?php echo get_the_title(); ?></h2>
	  		</li>
	  		<li class="Section-content-items-item u-displayFlex">
	  			<p class="Section-content-items-item-resume"><?php echo $phone; ?></p>
	  		</li>
	  		<li class="Section-content-items-item u-displayFlex">
	  			<p class="Section-content-items-item-resume"><?php echo $static; ?></p>
	  		</li>
	  		<li class="Section-content-items-item u-displayFlex">
	  			<p class="Section-content-items-item-resume"><?php echo $static; ?></p>
	  		</li>
	  		<li class="Section-content-items-item Section-content-items-item--mobileLeft u-displayFlex">
	  			<h4 class="Section-content-items-item-subtitle u-marginRight--inter--half">Site:</h4>
	  			<p class="Section-content-items-item-resume"><?php echo $link_site; ?></p>
	  		</li>
	  		<li class="Section-content-items-item Section-content-items-item--mobileLeft u-displayFlex">
	  			<h4 class="Section-content-items-item-subtitle u-marginRight--inter--half">E-mail:</h4>
	  			<p class="Section-content-items-item-resume">informa@informacaoestatica.com.br</p>
	  		</li>
	  		<li class="Section-content-items-item Section-content-items-item--mobileLeft u-displayFlex">
	  			<h4 class="Section-content-items-item-subtitle u-marginRight--inter--half">Facebook:</h4>
	  			<p class="Section-content-items-item-resume"><?php echo $link_facebook; ?></p>
	  		</li>
	  		<li class="Section-content-items-item Section-content-items-item--mobileLeft u-displayFlex">
	  			<h4 class="Section-content-items-item-subtitle u-marginRight--inter--half">Instagram:</h4>
	  			<p class="Section-content-items-item-resume"><?php echo $link_instagram; ?></p>
	  		</li>
	  	</ul>
	  	<ul class="Section-content-items u-paddingTop--inter">
		 	<li class="Section-content-items-item u-paddingBottom--inter">
	  			<h2 class="Section-content-items-item-title">Segmento(s)</h2>
	  			<p class="Section-content-items-item-resume"><?php echo $static; ?></p>
	  		</li>
	  		<li class="Section-content-items-item">
	  			<h2 class="Section-content-items-item-title">Polo(s) de Moda</h2>
	  			<p class="Section-content-items-item-resume"><?php echo $static; ?></p>
	  		</li>
	  	</ul>
  	</div>
</div>