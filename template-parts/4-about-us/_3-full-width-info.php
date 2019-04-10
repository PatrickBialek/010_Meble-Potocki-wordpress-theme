<section class="full-width-info" style="background-image: url('<?php echo get_theme_file_uri( 'assets/images/full-width-bg-1.jpg' ); ?>');">
	<div class="full-width-info__content">

	<?php if( have_rows( 'full_width_info' ) ): 
		while( have_rows( 'full_width_info' ) ): the_row(); 

		$heading = get_sub_field( 'full_width_info_title' );
		$sub_heading = get_sub_field( 'full_width_info_sub_title' );

		?>

		<h2 class="heading heading--white"><?php echo $heading ?></h2>
		<p class="heading-paragraph heading-paragraph--white"><?php echo $sub_heading ?></p>

	<?php endwhile; endif; ?>

	</div>
</section>