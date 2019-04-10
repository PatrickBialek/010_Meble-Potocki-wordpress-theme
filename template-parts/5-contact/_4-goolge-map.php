<section class="google-map">

<?php if( have_rows( 'google_map' ) ): 
	while( have_rows( 'google_map' ) ): the_row(); 

	$map = get_sub_field( 'google_map_href' ); 

	?>

	<iframe src="<?php echo $map ?>" frameborder="0" style="border:0" allowfullscreen></iframe>

<?php endwhile; endif; ?>

</section>