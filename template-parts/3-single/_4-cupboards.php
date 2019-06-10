<section class="items items--top-margin">
	<div class="items__content">
		<div class="items__gallery-wrap-box">

		<?php 

		$query = new WP_Query([
			"post_type" => "lawy",
			"post_per_page" => -1
		]);

		while( $query->have_posts() ) {
			$query->the_post(); ?>

			<div class="items__single-item">
				<div class="items__item-image-box">
					<img class="items__item-image" src="" alt="">
				</div>
				<div class="items__item-info">
					<span><?php the_title(); ?></span>
					<a class="items__item-link" href="">Zobacz produkt</a>
				</div>
			</div>

		<?php } ?>

		</div>
	</div>
</section>