<section class="services">

	<h2 class="heading heading--black margin-bottom-medium"><?php the_field( 'services_title' ); ?></h2>

	<div class="services__content">

		<div class="services__btns-container" id="isotope-filters">

		<?php if(have_rows( 'services_btns') ):
			while( have_rows( 'services_btns') ): the_row(); ?>

					<?php if(have_rows( 'services_single_btn') ):
						while(have_rows( 'services_single_btn') ): the_row(); 

						$btn_data_filter = get_sub_field( 'services_data_filter_btn' );
						$btn_text = get_sub_field( 'text_na_przycisku' );

						?>

					<div class="services__select-box">
						<button class="services__button active" data-filter="<?php echo $btn_data_filter ?>"><?php echo $btn_text?></button>
					</div>

					<?php endwhile; endif; 
		endwhile; endif; ?>

		</div>

	<div class="services__pictures-container" id="isotope-elements"> 

	<?php if( have_rows( 'services_gallery' ) ):
		while( have_rows( 'services_gallery' ) ): the_row();

			if( have_rows('gallery_box') ): 
				while( have_rows('gallery_box') ): the_row(); 

					$single_picture = get_sub_field( 'services_picture' );
					$item_link = get_sub_field( 'services_item_link' );
					$item_type = get_sub_field( 'services_item_type' );
					$item_name = get_sub_field( 'services_item_name' );

					// Create full link to chosen product
					$item_link = get_site_url() . $item_link;

					?>

					<div class="services__image-box" data-filter="<?php echo $item_type?>">
						<a href="<?php echo $item_link?>">
							<img src="<?php echo $single_picture['url'] ?>" alt="<?php echo $single_picture['alt']?>">
							<div class="services__hover-info">
								<span><?php echo $item_name ?></span>
							</div>
						</a>
					</div>

			<?php endwhile; endif;
		endwhile; endif; ?>

		</div>
	</div>
</section>