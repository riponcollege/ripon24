<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1" />

<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo( 'sitename' ) ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
<link href="<?php bloginfo( "template_url" ) ?>/css/main.css?v=4" rel="stylesheet" type="text/css">

</head>
<body <?php body_class(); ?>>
<div class="container">
<header>
	<div class="wrap">
	
		<div class="logo">
			<a href="/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src="<?php bloginfo( "template_url" ) ?>/img/logo-white.svg" alt="<?php bloginfo( 'name' ); ?>">
			</a>
		</div>

		<div class="header-inner">
			<nav class="main">
				<?php 
				//wp_nav_menu( array( 'theme_location' => 'header-main', 'menu_class' => 'nav-menu main' ) ); 
				main_menu();
				?>
			</nav>

			<div class="search">
				<?php include( 'searchform-mini.php' ); ?>
			</div>

			<a class="menu-toggle">
				<img src="<?php bloginfo( 'template_url' ) ?>/img/icon/menu-white.svg" class="mobile-only" />
			</a>

		</div>
	</div>
</header>

<section class="content">
	<a name="content"></a>
