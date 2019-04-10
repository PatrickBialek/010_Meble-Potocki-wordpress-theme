<section class="services">

	<h2><?php the_field( 'services_title' ); ?></h2>

	<?php if(have_rows( 'services_btns') ):
		while( have_rows( 'services_btns') ): the_row(); ?>

			<div class="services__content">
				<div class="services__select-box">

				<?php if(have_rows( 'services_single_btn') ):
					while(have_rows( 'services_single_btn') ): the_row(); 

					$btn_data_filter = get_sub_field( 'services_data_filter_btn' );
					$btn_text = get_sub_field( 'text_na_przycisku' );

					?>

					<button class="isotope__button" data-filter="<?php echo $btn_data_filter ?>"><?php echo $btn_text?></button>

				<?php endwhile; endif; ?>
				</div>

			</div>
	<?php endwhile; endif;


	if( have_rows( 'services_gallery' ) ):
		while( have_rows( 'services_gallery' ) ): the_row(); ?>

			<?php if( have_rows( 'services_row') ):
				while( have_rows( 'services_row') ): the_row(); ?>

				<div class="services__row">

				<?php if( have_rows('gallery_box') ): 
					while( have_rows('gallery_box') ): the_row(); 

					$single_picture = get_sub_field( 'services_picture' );
					$item_link = get_sub_field( 'services_item_link' );
					$item_type = get_sub_field( 'services_item_type' );

					?>

					<div class="services__image-box">
						<a href="<?php echo $item_link?>">
							<img src="<?php echo $single_picture['url'] ?>" alt="<?php echo $single_picture['alt']?>" data-type="<?php echo $item_type?>">
						</a>
					</div>

				<?php endwhile; endif; ?>
				</div>

			<?php endwhile; endif; ?>
		</div>

	<?php endwhile; endif; ?>
</section>