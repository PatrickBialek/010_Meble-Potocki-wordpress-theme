<section class="services">

	<h2 class="heading heading--black margin-bottom-medium"><?php the_field( 'services_title' ); ?></h2>

	<div class="services__content">

	<?php

	if( have_rows( 'services_slider' ) ): 
		while( have_rows( 'services_slider' ) ): the_row(); ?>

		<div class="main-slider" id="products-slider-container">
			<div class="carousel js-flickity" id="products-carousel-container">

			<?php

			if( have_rows( 'gallery_box' ) ): 
				while( have_rows( 'gallery_box' ) ): the_row(); 
				
				$product_image = get_sub_field( 'services_picture' );
				$product_heading = get_sub_field( 'services_item_name' );
				$product_link = get_sub_field( 'services_item_link' );
				
			?>

				<div class="carousel__small-cell">
					<div>
						<img class="gallery__image" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
					</div>
					<h1 class="heading-primary"><?php echo $product_heading ?></h1>
					<a class="btn btn--primary" href="<?php echo $product_link ?>">Zobacz produkt</a>
				</div>

			<?php endwhile; endif; ?>	

			</div>
		</div>
	<?php endwhile; endif; ?>

	</div>
</section>