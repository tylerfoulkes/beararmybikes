<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link href="<?php bloginfo('template_directory')?>/style.css" media="all" type="text/css" rel="stylesheet">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="content">
			<div id="head"></div>
			<img class="logo" src="<?php bloginfo('template_directory')?>/uploads/logo.png" />
			<img id="menu" src="images/static/menu.png"/>
			<ul id="upper_nav">

				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		
			</ul>
