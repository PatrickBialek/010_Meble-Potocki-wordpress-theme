
<?php

	if( have_rows( 'services_slider' ) ): 
		while( have_rows( 'services_slider' ) ): the_row(); ?>

		<section class="services" id="products-slider-container">
			<h2 class="heading heading--black margin-bottom-medium"><?php the_field( 'services_title' ); ?></h2>
			<div class="services__description">
				<p class="paragraph"><?php the_field( 'services_description' ); ?></p>
			</div>
			<div class="carousel js-flickity" id="products-carousel-container">

			<?php

			if( have_rows( 'single_slider' ) ): 
				while( have_rows( 'single_slider' ) ): the_row(); 
				
				$product_image = get_sub_field( 'services_item_picture' );
				$product_heading = get_sub_field( 'services_item_name' );
				$product_link = get_sub_field( 'services_item_link' );
				$product_description = get_sub_field( 'services_item_description' );
				
			?>

				<div class="carousel__small-cell">
					<div>
						<img class="gallery__image" src="<?php echo $product_image['url']; ?>" alt="<?php echo $product_image['alt']; ?>" />
					</div>
					<h1 class="heading-primary margin-bottom-medium"><?php echo $product_heading ?></h1>
					<p class="paragraph margin-bottom-medium"><?php echo $product_description ?></p>
					<a class="btn btn--primary" href="<?php echo site_url( $product_link ) ?>">Zobacz produkt</a>
				</div>

			<?php endwhile; endif; ?>	

			</div>
		</section>
<?php endwhile; endif; ?>

