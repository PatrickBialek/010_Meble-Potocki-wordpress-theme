<section class="company-info">
	<div class="company-info__content">

	<?php if( have_rows( 'distribution_network_basic_info' ) ): 
		while( have_rows( 'distribution_network_basic_info' ) ): the_row(); 

		$heading = get_sub_field( 'distribution_network_title' );
		$textarea =  get_sub_field( 'distribution_network_textarea' );
		$image = get_sub_field( 'distribution_network_image' );

		?>
		<div class="company-info__box">

			<div class="company-info__1-of-2">
				<h1 class="sub-heading sub-heading--black"><?php echo $heading ?></h1>
				<div class="company-info__text"><?php echo $textarea ?></div>
			</div>

			<div class="company-info__1-of-2">
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			</div>

		</div>

	<?php endwhile; endif; ?>

	</div>
</section>