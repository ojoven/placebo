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

	<!-- LE FONTS -->
	<!-- Too many fonts, just testing -->
	<link href='https://fonts.googleapis.com/css?family=Quicksand:300,400,700|Shadows+Into+Light|Oswald:700,400,300|Open+Sans+Condensed:300,700|Titillium+Web:400,700,300|Amatic+SC:400,700|Yanone+Kaffeesatz:300,400|Passion+One|Bree+Serif|Raleway:400,700' rel='stylesheet' type='text/css'>

	<!-- FONT AWESOME-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

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
