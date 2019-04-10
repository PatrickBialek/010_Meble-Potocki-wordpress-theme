<section class="company-info">
	<div class="company-info__content">

	<?php if( have_rows( 'about_us_info' ) ): 
		while( have_rows( 'about_us_info' ) ): the_row(); 

		$heading = get_sub_field( 'about_us_title' );
		$sub_heading = get_sub_field( 'about_us_sub_title' );
		$textarea =  get_sub_field( 'about_us_textarea' );
		$image = get_sub_field( 'about_us_image' );

		?>

		<h1 class="heading heading--black"><?php echo $heading ?></h1>

		<div class="company-info__box">

			<div class="company-info__1-of-2">
				<h2 class="sub-heading sub-heading--black"><?php echo $sub_heading ?></h2>
				<div class="company-info__text"><?php echo $textarea ?></div>
			</div>

			<div class="company-info__1-of-2">
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			</div>

		</div>

	<?php endwhile; endif; ?>

	</div>
</section>