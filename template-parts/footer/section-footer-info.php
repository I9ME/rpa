<?php 

	$check_content_page =  check_content_page();
	
	if( $check_content_page['content_page'] == 'revendedor' ){

		$other_page_label = 'Sou <strong>fabricante</strong>';
		$other_page_lik = get_home_url() . '/fabricante/';

	} elseif( $check_content_page['content_page'] == 'fabricante' ) {
		
		$other_page_label = 'Sou <strong>revendedor(a)</strong>';
		$other_page_lik = get_home_url();

	} else {

		$other_page_label = 'Sou <strong>revendedor(a)</strong>';
		$other_page_lik = get_home_url();

	
	}
	
	?>

<section id="solucoes" class="Section Section--style2 Section--footerInfo Section--style2 u-paddingVertical u-paddingHorizontal--inter">
	<div class="u-maxSize--container u-alignCenterBox u-displayFlex u-flexDirectionColumn u-flexSwitchRow">

		<a href="<?php echo $other_page_lik; ?>" class="Button--persona Button Button--border Button--background ButtonLink u-displayInlineBlock u-borderRadius5 u-marginBottom--inter--half Button--smallSize u-alignCenter"><?php echo $other_page_label; ?></a>

		<div class="Section-subSection Section-subSection--bio u-size8of24 u-marginBottom--inter--half">
			<p class="u-alignCenter">
				© Roupa em Atacado 2018.<br/>
				Todos os direitos Resevados.
			</p>
		</div>
		<div class="Section-subSection Section-subSection--contact u-size10of24 u-marginBottom--inter u-displayFlex u-flexJustifyContentCenter">
			<p class="u-displayFlex u-flexDirectionRow u-flexAlignItemsCenter u-flexJustifyContentCenter">
				<i><svg class="SocialBar-item-icon u-icon iconEnvelope u-displayInlineBlock">
						<use xlink:href="#iconEnvelope"></use>
					</svg>
				</i>
				<span>contato@roupaematacado.com.br</span></p>
		</div>
		<div class="Section-subSection Section-subSection--author u-size6of24 u-alignCenter">
			<a href="https://www.i9me.com.br" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-i9me-web-design.png" title="I9ME WEB & DESIGN" alt="I9ME WEB & DESIGN" /></a>
		</div>
	</div> <!-- Max Size Container -->
</section>