<section class="info">
	<div class="info__content">
		<div class="info__full-box">
			<div class="info__half-box">
				<?php the_field( 'items_item_description' ); ?>
			</div>
			<div class="info__half-box">
				<?php $image = get_field( 'items_item_image' ); ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
			</div>
		</div>
		<div class="info__full-box">
			<?php if ( have_rows( 'item_table' ) ):
				while( have_rows( 'item_table' ) ): the_row();
			
				if( get_field( 'item_table_show' ) ): ?>
					<h2 class="sub-heading sub-heading--black">Wymiary</h2>
				<?php endif; ?>

			<table class="info__table">
				<tbody>

					<?php if (have_rows( 'item_table_row') ):
						while( have_rows( 'item_table_row') ): the_row();

						$text_1 = get_sub_field( 'item_table_text_1' );
						$text_2 = get_sub_field( 'item_table_text_2' );

						?>

						<tr>
							<td><?php echo $text_1 ?></td>
							<td><?php echo $text_2 ?></td>
						</tr>

					<?php endwhile; endif; ?>

				</tbody>
			</table>

			<?php if( get_field( 'item_show_possibility_to_resize' ) ) : ?>
				<span>*Możliwość dopasowania wymiaru wg życzenia klienta</span>
			<?php endif;

		endwhile; endif; ?>

		</div>
	</div>
</section>