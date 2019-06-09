<section class="items">
	<div class="items__content">

	<?php if( have_rows( 'offer_chairs' ) ): 
		while( have_rows( 'offer_chairs' ) ): the_row(); 

		$chairs_heading = get_sub_field( 'offer_chairs_title' );
		$chairs_textarea =  get_sub_field( 'offer_chairs_textarea' );
		$chairs_image = get_sub_field( 'offer_chairs_image' );

		?>

		<div class="items__row">
			<div class="items__1-of-2 items__1-of-2--second">
				<img src="<?php echo $tables_image['url']; ?>" alt="<?php echo $chairs_image['alt']; ?>" />
			</div>
			<div class="items__1-of-2 items__1-of-2--first">
				<h1 class="heading heading--black"><?php echo $chairs_heading ?></h1>
				<div class="company-info__text"><?php echo $chairs_textarea ?></div>
			</div>
		</div>

		<?php if(have_rows( 'offer_chairs_gallery') ):
			while( have_rows( 'offer_chairs_gallery') ): the_row(); ?>

				<div class="items__row margin-top-huge">

				<?php if( have_rows( 'offer_single_chair') ):
					while( have_rows( 'offer_single_chair') ): the_row(); 
					
					$chair_heading = get_sub_field( 'offer_single_chair_name' );
					$chair_link = get_sub_field( 'offer_single_chair_link' );
					$chair_image = get_sub_field( 'offer_single_chair_image' );
					
					?>

					<div class="items__single-item">
						<div class="items__item-image-box">
							<img class="items__item-image" src="<?php echo $chair_image['url']; ?>" alt="<?php echo $chair_image['alt']; ?>">
						</div>
						<div class="items__item-info">
							<span><?php echo $chair_heading ?></span>
							<a class="items__item-link" href="<?php echo site_url( $chair_link ); ?>">Zobacz produkt</a>
						</div>
					</div>
			
				<?php endwhile; endif; ?>
			
				</div>
			
			<?php  endwhile; endif; ?>

		<div class="items__row">
			<a href="<?php echo site_url( '/krzesla/' ); ?>">Wszystkie krzesła</a> 
		</div>

	<?php endwhile; endif; ?>
	</div>
</section>