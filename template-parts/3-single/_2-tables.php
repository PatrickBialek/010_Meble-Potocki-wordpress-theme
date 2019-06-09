<section class="items items--top-margin">

<?php 

$query = new WP_Query([
	"post_type" => "stoly",
	"post_per_page" => -1
]);

while( $query->have_posts() ) {
	$query->the_post(); ?>

	<h2><?php the_title(); ?></h2>

<?php } ?>

</section>