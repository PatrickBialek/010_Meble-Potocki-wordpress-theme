<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title><?php echo get_bloginfo( 'name' ); ?></title>
		<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
		<meta name="keywords" content="Meble potocki, stoły, krzesła, stoły i krzesła, Meble Potocki Poznań">
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,700&amp;subset=latin-ext" rel="stylesheet">
		<?php wp_head(); ?>
	</head>
	<body>
		<header class="header" id="website-main-header">
		<?php

		include get_template_directory() . "/template-parts/1-header/_1-header-content.php";

		?>
		</header>