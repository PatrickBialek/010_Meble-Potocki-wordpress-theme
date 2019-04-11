<section class="item-heading">

<?php if( have_rows( 'about_us_heading' ) ): 
	while( have_rows( 'about_us_heading' ) ): the_row(); 
	
	$heading = get_sub_field( 'about_us_first_heading' );
	$sub_heading = get_sub_field( 'about_us_heading_second_heading') ; 

	?>

	<div class="heading-section__content">
		<h2 class="heading heading--white"><?php echo $heading ?></h2>
		<p class="heading-paragraph heading-paragraph--white"><?php echo $sub_heading ?></p>
	</div>

	<?php endwhile; ?>
<?php endif; ?>

</section>