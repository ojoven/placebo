<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- CHARSET -->
	<meta charset="UTF-8">

	<!-- VIEWPORT -->
	<meta name="viewport" content="width=device-width">

	<!-- TITLE -->
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<!-- HTML5 FOR < IE9 -->
	<?php get_template_part('templates/auxiliar/ie9html5'); ?>

	<!-- LE STYLES -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

</head>

<!-- BODY -->
<body <?php body_class(); ?>>

<div id="page">

	<!-- HEADER -->
	<header id="header">

		<nav id="main-navigation">

			<ul>
				<li>Home</li>
				<li>Products</li>
				<li>About Us</li>
				<li>Contact Us</li>

			</ul>


		</nav>

	</header>

	<!-- MAIN -->
	<main id="main">
