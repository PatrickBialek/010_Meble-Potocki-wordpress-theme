<section class="distribution-network">
	<div class="distribution-network__container">
		<h1 class="sub-heading sub-heading--black"><?php echo $heading ?></h1>
		<div class="distribution-network__content-box">

		<?php if( have_rows( 'distribution_network_tiles' ) ): 
			while( have_rows( 'distribution_network_tiles' ) ): the_row(); ?>

				<div class="distribution-network__tiles-row">

				<?php if( have_rows( 'distribution_network_tiles_row' ) ): 
						while( have_rows( 'distribution_network_tiles_row' ) ): the_row();

							if( have_rows( 'distribution_network_tiles_single_tile' ) ):
								while( have_rows( 'distribution_network_tiles_single_tile' ) ): the_row();

								$voivodeship = get_sub_field( 'voivodeship' );
								$icon = get_sub_field( 'icon' );
								$name = get_sub_field( 'name' );
								$addres_1 = get_sub_field( 'addres_1' );
								$addres_2 = get_sub_field( 'addres_2' );
								$open_hours = get_sub_field( 'open_hours' );
								$common_days = get_sub_field( 'common_days' );
								$weekends = get_sub_field( 'weekends' );
								$tel = get_sub_field( 'tel' );
								$mail = get_sub_field( 'mail' );

								?>

								<h3 class="distribution-network__voivodeship"><?php echo $voivodeship ?></h3>
								<div class="distribution-network__row">
									<div class="distribution-network__icon-box"><img class="gallery__image" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" /></div>
									<div class="distribution-network__text-box">
										<span><?php echo $name ?></span>
										<span><?php echo $addres_1 ?></span>
										<span><?php echo $addres_2 ?></span>
									</div>
								</div>
								<div class="distribution-network__row">
									<span><?php echo $open_hours ?></span>
									<span><?php echo $common_days ?></span>
									<span><?php echo $weekends ?></span>
									<span><?php echo $tel ?></span>
									<span><?php echo $mail ?></span>
								</div>
								
					<?php endwhile; endif; endwhile; endif; ?>
				</div>

		<?php endwhile; endif; ?>

		</div>
	</div>
</section>