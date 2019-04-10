<div class="header__content-box">
	<div class="header__logo-box">
		<img src="<?php echo get_theme_file_uri( 'assets/images/meble-potocki-logo.jpg' ); ?>" alt="Potocki logo">
	</div>
	<nav class="header__nav">

	<?php wp_nav_menu( [ 
		'theme_location' => 'main-menu',
		'container'=> false,
		'items_wrap' => '<ul>%3$s</ul>'
	] ); ?>

	</nav>

	<div class="header__hamburger-box" id="hamburger-icon">
		<span></span>
    <span></span>
    <span></span>
	</div>
	
</div>