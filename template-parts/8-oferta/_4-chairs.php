<section class="items">
	<div class="items__content">

	<?php if( have_rows( 'offer_chairs' ) ): 
		while( have_rows( 'offer_chairs' ) ): the_row(); 

		$chairs_heading = get_sub_field( 'offer_chairs_title' );
		$chairs_textarea =  get_sub_field( 'offer_chairs_textarea' );
		$chairs_image = get_sub_field( 'offer_chairs_image' );

		?>

		<div class="items__row">
			<div class="items__1-of-2">
				<img src="<?php echo $tables_image['url']; ?>" alt="<?php echo $chairs_image['alt']; ?>" />
			</div>
			<div class="items__1-of-2">
				<h1 class="heading heading--black"><?php echo $chairs_heading ?></h1>
				<div class="company-info__text"><?php echo $chairs_textarea ?></div>
			</div>
		</div>

		<?php if(have_rows( 'offer_chairs_gallery') ):
			while( have_rows( 'offer_chairs_gallery') ): the_row(); ?>

				<div class="items__row">

				<?php if( have_rows( 'offer_single_chair') ):
					while( have_rows( 'offer_single_chair') ): the_row(); ?>

					<div class="items__single-item"></div>
			
				<?php endwhile; endif; ?>
			
				</div>
			
			<?php  endwhile; endif; ?>

		<div class="items__row">
			<a href="<?php echo site_url( '/krzesla/' ); ?>">Wszystkie krzesła</a> 
		</div>

	<?php endwhile; endif; ?>
	</div>
</section>