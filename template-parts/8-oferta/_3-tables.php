<section class="items" id="tables">
	<div class="items__content">

	<?php if( have_rows( 'offer_tables' ) ): 
		while( have_rows( 'offer_tables' ) ): the_row(); 

		$tables_heading = get_sub_field( 'offer_tables_title' );
		$tables_textarea =  get_sub_field( 'offer_tables_textarea' );
		$tables_image = get_sub_field( 'offer_tables_image' );

		?>

		<div class="items__row margin-bottom-medium">
			<div class="items__1-of-2">
				<img src="<?php echo $tables_image['url']; ?>" alt="<?php echo $tables_image['alt']; ?>" />
			</div>
			<div class="items__1-of-2">
				<h1 class="heading heading--black"><?php echo $tables_heading ?></h1>
				<div class="company-info__text"><?php echo $tables_textarea ?></div>
			</div>
		</div>

		<?php if(have_rows( 'offer_tables_gallery') ):
			while( have_rows( 'offer_tables_gallery') ): the_row(); ?>

				<div class="items__row margin-top-huge">

				<?php if( have_rows( 'offer_single_table') ):
					while( have_rows( 'offer_single_table') ): the_row(); 
					
					$table_heading = get_sub_field( 'offer_single_table_name' );
					$table_link = get_sub_field( 'offer_single_table_link' );
					$table_image = get_sub_field( 'offer_single_table_image' );
					$description = get_sub_field( 'description' );
					
					?>

					<div class="items__single-item">
						<div class="items__item-image-box">
							<img class="items__item-image" src="<?php echo $table_image['url']; ?>" alt="<?php echo $table_image['alt']; ?>">
						</div>
						<div class="items__item-info">
							<span class="margin-bottom-medium"><?php echo $table_heading ?></span>
							<p><?php echo $description ?></p>
							<a class="items__item-link" href="<?php echo site_url( $table_link ); ?>">Zobacz produkt</a>
						</div>
					</div>
			
				<?php endwhile; endif; ?>
			
				</div>
			
			<?php  endwhile; endif; ?>

		<div class="items__row">
			<a href="<?php echo site_url( '/stoly/' ); ?>">Wszystkie stoły</a> 
		</div>

	<?php endwhile; endif; ?>
	</div>
</section>