<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ivaneremeev
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta <?php bloginfo( 'charset' ); ?>>
		<title>Главная</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
		<div class="page">
			<!-- header-->
			<?php if ( is_page_template('home-template.php') ) : ?>
				<header class="header">
					<div class="wrapper">
						<!-- menu-->
						<div class="menu menu--left js-menu">
							<div class="menu_btn" id="menu-btn">
								<div class="menu_btn-inner"></div>
							</div>
							<nav class="menu_nav">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'Menu',
										'menu_id'        => 'primary-menu',
										'container'       => false, // Чем оборачивать ul тег. Может быть: div или nav. Если не нужно оборачивать ничем, то пишем false: container => false.		
										'menu_class'      => 'menu_list', // Значение атрибута class у тега ul.
										'depth'           => 0, // До какого уровня вложенности нужно показывать ссылки (элементы меню). 0 - все уровни.
									)
								);
								?>
								<div class="menu_close" id="menu-close"></div>
							</nav>
							<div class="menu_over" id="menu-over"></div>
						</div>
						<!-- /menu-->
					</div>
				</header>
				<div class="content">
				<!-- /header-->
			<?php else : ?>
				<!-- header-->
				<header class="header" id="header">
					<div class="wrapper">
						<!-- menu-->
						<div class="menu menu--left js-menu">
							<div class="menu_btn" id="menu-btn">
								<div class="menu_btn-inner menu_btn-inner--dark"></div>
							</div>
							<nav class="menu_nav">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'Menu',
										'menu_id'        => 'primary-menu',
										'container'       => false, // Чем оборачивать ul тег. Может быть: div или nav. Если не нужно оборачивать ничем, то пишем false: container => false.		
										'menu_class'      => 'menu_list menu_list--inner-page', // Значение атрибута class у тега ul.
										'depth'           => 0, // До какого уровня вложенности нужно показывать ссылки (элементы меню). 0 - все уровни.
									)
								);
								?>
								<div class="menu_close" id="menu-close"></div>
							</nav>
							<div class="menu_over" id="menu-over"></div>
						</div>
						<!-- /menu-->
					</div>
				</header>
				<!-- /header-->
				<div class="content">
			<?php endif; ?>
			