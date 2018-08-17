<section id="marcas" class="Section Section--style2 Section--parceiros u-paddingVertical u-paddingHorizontal--inter">
	<div class="Section-content u-positionRelative u-sizeFull">
		<ul id="parceiros-carousel" class="Section-items u-flex u-flexDirectionRow u-flexJustifyContentCenter u-paddingHorizontal--inter u-sizeFull owl-carousel owl-theme u-paddingVertical">
			<?php 
				$newsArgs = array( 'post_type' => 'marca-de-roupa', 'posts_per_page' => 20, 'orderby'=> 'date', 'order' => 'ASC');

				$newsLoop = new WP_Query( $newsArgs );
				
				if ( $newsLoop->have_posts() ):

					while ( $newsLoop->have_posts() ) : $newsLoop->the_post();
	      	
	      	if ( has_post_thumbnail() ) {
			
				//Imagem Destacada	
				$image_id = get_post_thumbnail_id();
				$sizeThumbs = 'thumbnail';
				$urlThumbnail = wp_get_attachment_image_src($image_id, $sizeThumbs);
				$urlThumbnail = $urlThumbnail[0];

			


			 ?>
			<li class="Section-items-item">
				<figure class="Section-items-item-figure">
					<a href="<?php echo get_permalink(); ?>">
						<img class="u-objectFitCover u-sizeHeight100 u-sizeMinWidth100" src="<?php echo $urlThumbnail; ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>" />
					</a>
				</figure>
			</li>
		<?php } ?>
	<?php endwhile; ?>
<?php endif; ?>

		</ul>
	</div>
</section>