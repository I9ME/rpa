<?php 

	$check_content_page =  check_content_page();
	
?>
<?php 
if( is_home() || is_front_page() ){
?>
<section id="up" class="Section Section--intro Intro Intro--home Intro--background Section--buscaRoupa Section--style2 u-positionRelative u-flex u-flexDirectionColumn u-flexAlignItemsCenter u-flexJustifyContentCenter" data-stellar-background-ratio="0.3">	
	

	<div class=" u-paddingHorizontal u-paddingVertical u-size24of24 Captions u-positionRelative u-displayBlock u-maxSize--container u-alignCenterBox">

		<div class="Captions u-paddingHorizontal--inter">
			<div class="Captions--header">
				<h1 class="Section-header-title">Encontre marcas de moda para revender!</h1>
				<h2 class="Section-header-subtitle">Conexão fácil e rápida com fabricantes por todo o Brasil</h2>
			</div>
				
		</div>

		<!-- <div class="Section-content Section-content--form u-size16of24 u-alignCenterBox">
			<form class="Form Form--style1">
				<fieldset class="Form-fieldset">
					<div class="Form-line u-flex u-flexDirectionRow u-flexSwitchReverse--mobile">
						<div class="Form-row u-size24of24 u-displayBlock u-positionRelative u-marginRight--inter u-marginBottom--inter">
							<i class="FigureIcon FigureIcon--lupa"></i>
							<input class="Form-input Form-input--text Form-border--0 u-borderRadius10 u-sizeFull" type="text" name="search" placeholder="Qual produto você procura?">
						</div>
						<div class="Form-row u-size10of24 u-displayBlock u-positionRelative u-marginBottom--inter">
							<a class="Button Button--border Button--background ButtonLink u-displayInlineFlex u-flexDirectionRow u-flexAlignItemsCenter u-justifyContentCenter u-borderRadius10 Button--mediumSize hover is-animating u-hasIcon u-isScrollDown u-sizeFull" href="#" style="height: 75px;">
								BUSCAR
								<i class="u-icon">
									<svg class="iconArrowRight u-icon is-animating">
										<use xlink:href="#iconArrowRight"></use>
									</svg>
								</i>
							</a>
						</div>
					</div> 
				</fieldset>
			</form>
			<ul class="Section-items u-displayFlex u-flexJustifyContentCenter u-flexAlignItemsCenter">
				<li class="Section-items-item u-paddingVertical u-alignCenter">
					<a class="Section-items-item-resume" href="#">Pesquisa por produtos</a>
				</li>
				<li class="Section-items-item Section-items-item--lateralBar u-paddingVertical u-alignCenter">
					<a class="Section-items-item-resume" href="#"> Pesquisa por marcas</a>
				</li>
				<li class="Section-items-item u-paddingVertical u-alignCenter">
					<a class="Section-items-item-resume" href="#">Pesquisa por lugares</a>
				</li>
			</ul>
		</div> -->
	</div>
</section>

<?php } elseif ( is_page() ) { ?>

<section class="Section Section--intro Intro Intro--page Intro--background Section--style2 u-positionRelative u-flex u-flexDirectionColumn u-flexAlignItemsCenter u-flexJustifyContentCenter" data-stellar-background-ratio="0.3">

<header class="Section-header">
	<h1 class="Section-header-title Section-header-title--beforeTitleLine u-positionRelative u-paddingBottom--inter">
		<strong><?php echo get_the_title(); ?></strong>
		</h1>
</header>

</section>


<?php } elseif ( is_single() ) { ?>
	<section class="Section Section--intro Intro Intro--page Intro--background Section--style2 u-positionRelative u-flex u-flexDirectionColumn u-flexAlignItemsCenter u-flexJustifyContentCenter" data-stellar-background-ratio="0.3">

<header class="Section-header">
	<h1 class="Section-header-title Section-header-title--beforeTitleLine u-positionRelative u-paddingBottom--inter">
		<strong><?php echo get_the_title(); ?></strong>
		</h1>
</header>

</section>

<?php } elseif( is_tax() ) { ?>

<section class="Section Section--intro Intro Intro--page Intro--background Section--style2 u-positionRelative u-flex u-flexDirectionColumn u-flexAlignItemsCenter u-flexJustifyContentCenter" data-stellar-background-ratio="0.3">

<header class="Section-header">
	<h1 class="Section-header-title Section-header-title--beforeTitleLine u-positionRelative u-paddingBottom--inter">
		<?php 
	 		if( $tax = get_taxonomy( get_queried_object()->taxonomy ) ) {

	        /* use the "name" label instead of "singular_name" to showl the plural version */
	        $title = sprintf( __( '%1$s: <strong>%2$s</strong>' ),  $tax->labels->name, single_term_title( '', false ) );
			echo $title;
		} else {
			echo 'Nada cadastrado';
		}
		 ?>
		</h1>
</header>

</section>


<?php } elseif( is_archive() ) { ?>

<section class="Section Section--intro Intro Intro--page Intro--background Section--style2 u-positionRelative u-flex u-flexDirectionColumn u-flexAlignItemsCenter u-flexJustifyContentCenter" data-stellar-background-ratio="0.3">

<header class="Section-header">
	<h1 class="Section-header-title Section-header-title--beforeTitleLine u-positionRelative u-paddingBottom--inter">
		<strong><?php echo title_page(); ?></strong>
	</h1>
</header>

</section>


<?php } else { ?>


<section class="Section Section--intro Intro Intro--page Intro--background Section--style2 u-positionRelative u-flex u-flexDirectionColumn u-flexAlignItemsCenter u-flexJustifyContentCenter" data-stellar-background-ratio="0.3">

<header class="Section-header">
	<h1 class="Section-header-title Section-header-title--beforeTitleLine u-positionRelative u-paddingBottom--inter">
		<strong>NADA ENCONTRADO</strong>
		</h1>
</header>

</section>


<?php } ?>

