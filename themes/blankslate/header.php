<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="wrapper" class="hfeed">
		<header>
			<nav class="border-b border-black/15 w-full">
				<div class="flex max-w-6xl p-4 mx-auto items-center justify-between">
					<?php
					if (is_front_page() || is_home() || is_front_page() && is_home()) {
						echo '<h1 class="mb-0 text-2xl font-bold">';
					}
					echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '" rel="home">' . esc_html(get_bloginfo('name')) . '</a>';
					if (is_front_page() || is_home() || is_front_page() && is_home()) {
						echo '</h1>';
					}
					?>
					<?php wp_nav_menu(array(
						'theme_location' => 'main-menu',
						'container' => 'div',
						'container_class' => 'flex items-center gap-10',
						'menu_class' => 'flex items-center gap-10',
						'link_before' => '',
						'link_after' => '',
						'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'fallback_cb' => false
					)); ?>
				</div>
			</nav>
		</header>
		<div id="container">
			<main id="content" role="main">