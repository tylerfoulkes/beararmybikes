<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php wp_title( '|', true, 'right' );  echo get_bloginfo( 'name' ); ?></title>
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
		<link href="<?php bloginfo('template_directory')?>/style.css" media="all" type="text/css" rel="stylesheet">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
			<div id="head"></div>
			<div id="cont">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" /></a>
				<img id="menu_icon" src="<?php bloginfo('template_directory')?>/images/menu.png"/>
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			</div>
			<div id="filler"></div>
			<div id="content">
