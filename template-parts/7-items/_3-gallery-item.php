<?php if( get_field( 'item_gallery_show' ) ): ?>

<section class="gallery-item">
	<div class="gallery-item__content">
	
	<?php if ( have_rows( 'gallery' ) ):
			while( have_rows( 'gallery' ) ): the_row(); ?>

			<h2 class="heading heading--black"><?php the_field( 'item_title' ) ?> - Galeria</h2>

			<div class="gallery-item__pictures-container" id="light-gallery-container">
				<ul>

				<?php if ( have_rows( 'gallery_single_picture' ) ):
					while( have_rows( 'gallery_single_picture' ) ): the_row();

					$image = get_sub_field( 'gallery_single_picture_array' );

					?>

					<li data-src="<?php echo $image['url']; ?>">
						<img src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>">
					</li>

					<?php endwhile; endif; ?>

				</ul>
			</div>

			<?php endwhile; endif; ?>

	</div>
</section>

<?php endif; ?> 