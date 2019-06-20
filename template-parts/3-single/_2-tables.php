<section class="items items--top-margin">
	<div class="items__content">
		<div class="items__gallery-wrap-box">

		<?php 

		$query = new WP_Query([
			"post_type" => "stoly",
			"posts_per_page" => -1
		]);

		while( $query->have_posts() ) {
			$query->the_post(); ?>

			<div class="items__single-item items__single-item--page-item-theme">
				<div class="items__item-image-box">
					<?php echo get_the_post_thumbnail(); ?>
				</div>
				<div class="items__item-info">
					<span class="margin-bottom-small"><?php the_title(); ?></span>
					<p><?php the_excerpt(); ?></p>
					<a class="items__item-link" href="<?php echo the_permalink(); ?>">Zobacz produkt</a>
				</div>
			</div>

		<?php } ?>

		</div>
	</div>
</section>