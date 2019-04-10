<section class="form">
	<div class="form__content">
		<div class="form__info-box">

			<?php if( get_field( 'contact_title' ) ): ?>
				<h1 class="heading heading--black"><?php the_field( 'contact_title' ); ?></h1>
			<?php endif; ?>

			<?php if( get_field( 'contact_description' ) ): ?>
				<p><?php the_field( 'contact_description' ); ?></p>
			<?php endif; ?>

			<div class="form__contact-data">

				<?php if( get_field( 'contact_adres_description' ) ): ?>
					<p><?php the_field( 'contact_adres_description' ); ?></p>
				<?php endif;

				if( get_field( 'contact_adres_1' ) ): ?>
					<span><?php the_field( 'contact_adres_1' ); ?></span>
				<?php endif;

				if( get_field( 'contact_adres_2' ) ): ?>
					<span class="margin-bottom-big"><?php the_field( 'contact_adres_2' ); ?></span>
				<?php endif;

				if( get_field( 'contact_mail' ) ): ?>
					<span><?php the_field( 'contact_mail' ); ?></span>
				<?php endif;

				if( get_field( 'contact_phone_1' ) ): ?>
					<span><?php the_field( 'contact_phone_1' ); ?></span>
				<?php endif;

				if( get_field( 'contact_phone_2' ) ): ?>
					<span><?php the_field( 'contact_phone_2' ); ?></span>
				<?php endif;

				if( get_field( 'contact_phone_3' ) ): ?>
					<span><?php the_field( 'contact_phone_3' ); ?></span>
				<?php endif;

				if( get_field( 'contact_email_adres' ) ): ?>
					<span class="margin-bottom-big"><?php the_field( 'contact_email_adres' ); ?></span>
				<?php endif; 

				if( get_field( 'contact_shop_adres_1' ) ): ?>
					<span><?php the_field( 'contact_shop_adres_1' ); ?></span>
				<?php endif; 

				if( get_field( 'contact_shop_adres_2' ) ): ?>
					<span><?php the_field( 'contact_shop_adres_2' ); ?></span>
				<?php endif; 

				if( get_field( 'contact_shop_adres_3' ) ): ?>
					<span><?php the_field( 'contact_shop_adres_3' ); ?></span>
				<?php endif;

				if( get_field( 'contact_shop_adres_4' ) ): ?>
					<span><?php the_field( 'contact_shop_adres_4' ); ?></span>
				<?php endif; ?>

			</div>
		</div>

		<div class="form__form-box">
			<?php 
				$short_code = get_field('contact_form');
			
				echo do_shortcode( $short_code ); 
			
			?>
		</div>
		
	</div>
</section>