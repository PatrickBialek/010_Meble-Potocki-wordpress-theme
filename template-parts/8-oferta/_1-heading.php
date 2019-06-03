<section class="heading-section" style="background-image: url('<?php echo get_theme_file_uri( 'assets/images/stol-cezar-i-krzesla.jpg' ); ?>');">

<?php if( have_rows( 'offer_heading' ) ): 
	while( have_rows( 'offer_heading' ) ): the_row(); 
	
	$heading = get_sub_field( 'offer_first_heading' );
	$sub_heading = get_sub_field( 'offer_heading_second_heading') ; 

	?>

	<div class="heading-section__content">
		<h2 class="heading heading--white"><?php echo $heading ?></h2>
		<p class="heading-paragraph heading-paragraph--white"><?php echo $sub_heading ?></p>
	</div>

	<?php endwhile; ?>
<?php endif; ?>

</section>