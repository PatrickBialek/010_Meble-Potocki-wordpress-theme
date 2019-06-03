<?php 

$query = new WP_Query([
	'post_type' => 'krzesla',
	'posts_per_page' => 4
]);

?>

<section class="items">
	<div class="items__content">
		<h1 class="heading heading--black">Krzesła</h1>

		<div class="items__items-box">

			<?php 

			while($query->have_posts() ) {
				$query->the_post(); ?>

				<li><?php echo the_title(); ?></li>

			<?php } ?>

			<a href="#">Wszystkie krzesła</a> 
		</div>
	</div>
</section>