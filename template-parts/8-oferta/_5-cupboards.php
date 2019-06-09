<section class="items">
	<div class="items__content">

	<?php if( have_rows( 'offer_cupboard' ) ): 
		while( have_rows( 'offer_cupboard' ) ): the_row(); 

		$cupboard_heading = get_sub_field( 'offer_cupboard_title' );
		$cupboard_textarea =  get_sub_field( 'offer_cupboard_textarea' );
		$cupboard_image = get_sub_field( 'offer_cupboard_image' );

		?>

		<div class="items__row">
			<div class="items__1-of-2">
				<img src="<?php echo $cupboard_image['url']; ?>" alt="<?php echo $cupboard_s_image['alt']; ?>" />
			</div>
			<div class="items__1-of-2">
				<h1 class="heading heading--black"><?php echo $cupboard_heading ?></h1>
				<div class="company-info__text"><?php echo $cupboard_textarea ?></div>
			</div>
		</div>

		<?php if(have_rows( 'offer_cupboards_gallery') ):
			while( have_rows( 'offer_cupboards_gallery') ): the_row(); ?>

				<div class="items__row margin-top-huge">
					
					<?php if( have_rows( 'offer_single_cupboard') ):
						while( have_rows( 'offer_single_cupboard') ): the_row(); 
						
						$cupboard_heading = get_sub_field( 'offer_single_cupboard_name' );
						$cupboard_link = get_sub_field( 'offer_single_cupboard_link' );
						$cupboard_image = get_sub_field( 'offer_single_cupboard_image' );
						
						?>

						<div class="items__single-item">
							<div class="items__item-image-box">
								<img class="items__item-image" src="<?php echo $cupboard_image['url']; ?>" alt="<?php echo $cupboard_image['alt']; ?>">
							</div>
							<div class="items__item-info">
								<span><?php echo $cupboard_heading ?></span>
								<a class="items__item-link" src="<?php echo $cupboard_link?>">Zobacz produkt</a>
							</div>
						</div>
			
					<?php endwhile; endif; ?>
			
				</div>
			
			<?php  endwhile; endif; ?>

		<div class="items__row">
			<a href="<?php echo site_url( '/lawy/' ); ?>">Wszystkie ławy</a> 
		</div>

	<?php endwhile; endif; ?>
	</div>
</section>