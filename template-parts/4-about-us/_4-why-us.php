<section class="why-us">
	<div class="why-us__content">
		<h2 class="heading heading--black"><?php the_field( 'why_us_title' ); ?></h2>
		<div class="why-us__tiles-content">

		<?php

			if( have_rows( 'why_us_tiles' ) ): 
				while( have_rows( 'why_us_tiles' ) ): the_row(); ?>

					<div class="why-us__tiles-row">

					<?php if( have_rows( 'why_us_tiles_row' ) ): 
							while( have_rows( 'why_us_tiles_row' ) ): the_row();

								if( have_rows( 'why_us_tiles_single_tile' ) ):
									while( have_rows( 'why_us_tiles_single_tile' ) ): the_row();

									$icon = get_sub_field( 'why_us_tiles_single_icon' );
									$textarea = get_sub_field( 'why_us_tiles_single_text' );

									?>

									<div class="why-us__single-tile">
										<div class="why-us__icon-box"><img class="gallery__image" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" /></div>
										<div class="why-us__text-box"><?php echo $textarea ?></div>
									</div>
									
						<?php endwhile; endif; endwhile; endif; ?>
					</div>

		<?php endwhile; endif; ?>
		</div>

	</div>
</section>