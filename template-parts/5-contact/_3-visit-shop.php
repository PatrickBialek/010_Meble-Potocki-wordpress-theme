<section class="visit-shop" style="background-image: url('<?php echo get_theme_file_uri( 'assets/images/stol-cezar-i-krzesla.jpg' ); ?>');">

	<?php if( have_rows( 'contact_visit_shop' ) ): 
		while( have_rows( 'contact_visit_shop' ) ): the_row(); 

		$heading = get_sub_field( 'contact_visit_shop_title' );
		$sub_heading = get_sub_field( 'contact_visit_shop_sub_title') ; 
		$hours = get_sub_field( 'contact_visit_shop_sub_hours' );

		?>

		<div class="visit-shop__content">
			<h2 class="heading heading--white"><?php echo $heading ?></h2>
			<p class="heading-paragraph heading-paragraph--white"><?php echo $sub_heading ?></p>
			<p class="heading-paragraph heading-paragraph--white"><?php echo $hours ?></p>
			<a href="https://goo.gl/maps/TXTp3GmVXRD2" target="_blank">Zobacz dojazd</a>
		</div>

		<?php endwhile; endif; ?>

</section>