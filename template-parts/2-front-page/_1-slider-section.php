<?php

if( have_rows( 'main_slider' ) ): 
	while( have_rows( 'main_slider' ) ): the_row(); ?>

	<section class="main-slider" id="main-slider-container">
		<div class="carousel js-flickity" id="carousel-container">

		<?php

		if( have_rows( 'single_slider' ) ): 
			while( have_rows( 'single_slider' ) ): the_row(); 
			
			$logo = get_sub_field( 'single_slider_icon' );
			$heading_primary = get_sub_field( 'single_slider_heading_primary' );
			$heading_secondary = get_sub_field( 'single_slider_heading_secondary' );
			
		?>

			<div class="carousel__cell">
				<div>
					<img class="gallery__image" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
				</div>
				<h1 class="heading-primary"><?php echo $heading_primary ?></h1>
				<h2 class="heading-secondary"><?php echo $heading_secondary ?></h2>
			</div>

		<?php endwhile; endif; ?>	
		</div>

	</section>
<?php endwhile; endif; ?>


