<section class="distribution-network">
	<div class="distribution-network__container">
		<h1 class="sub-heading sub-heading--black"><?php echo $heading ?></h1>
		<div class="distribution-network__content-box">

		<?php if( have_rows( 'distribution-network_tiles' ) ): 
			while( have_rows( 'distribution-network_tiles' ) ): the_row(); ?>

				<div class="distribution-network__tiles-row">

				<?php if( have_rows( 'distribution_network_tiles_row' ) ): 
						while( have_rows( 'distribution_network_tiles_row' ) ): the_row();

							if( have_rows( 'distribution_network_tiles_single_tile' ) ):
								while( have_rows( 'distribution_network_tiles_single_tile' ) ): the_row();

								$voivodeship = get_sub_field( 'voivodeship' );
								$icon = get_sub_field( 'icon' );
								$name = get_sub_field( 'name' );
								$addres_1 = get_sub_field( 'addres_1' );
								$open_hours = get_sub_field( 'open_hours' );
								$common_days = get_sub_field( 'common_days' );
								$weekends = get_sub_field( 'weekends' );
								$tel = get_sub_field( 'tel' );
								$phone = get_sub_field( 'phone' );

								?>

								<div class="distribution-network__single-tile">
									<div class="distribution-network__icon-box"><img class="gallery__image" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" /></div>
									<div class="wdistribution-network__text-box"><?php echo $textarea ?></div>
								</div>
								
					<?php endwhile; endif; endwhile; endif; ?>
				</div>

		<?php endwhile; endif; ?>

		</div>
	</div>
</section>