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
				<img src="<?php echo $cupboard_image['url']; ?>" alt="<?php echo $chairs_image['alt']; ?>" />
			</div>
			<div class="items__1-of-2">
				<h1 class="heading heading--black"><?php echo $cupboard_heading ?></h1>
				<div class="company-info__text"><?php echo $cupboard_textarea ?></div>
			</div>
		</div>

		<div class="items__row">
			<a href="<?php echo site_url( '/lawy/' ); ?>">Wszystkie ławy</a> 
		</div>

	<?php endwhile; endif; ?>
	</div>
</section>