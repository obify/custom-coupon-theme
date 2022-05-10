<!DOCTYPE HTML>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<?php wp_head(); ?>
</head>

<body <?php body_class('homepage is-preload');?>>
	<div class="fw-bold text-center container-fluid bg-danger top-banner">
		<a class="blink_me text-white" href="https://t.me/+l18SYayp3wVlOTE0">Join Free Coupon Telegram Channel</a>
		<h6 class="text-white text-uppercase">100% Free Coupons</h6>
	</div>
	<div id="page-wrapper">

		<!-- Header -->
		<section id="header">

			<!-- Logo -->
			<?php /*the_custom_logo();*/?>
			<?php 
				$site_title = get_bloginfo( 'name' );
				$site_url = network_site_url( '/' );
				$site_description = get_bloginfo( 'description' );
			?>
			<small><?php /*echo $site_description;*/ ?></small>
			
			<!-- Nav -->
			<nav class="navbar navbar-expand-md navbar-light bg-warning">
				<div class="container-fluid">
					<a class="navbar-brand fw-bold" href="<?php echo $site_url; ?>"><?php echo $site_title;?></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					
					<div class="fw-bold collapse navbar-collapse text-uppercase" id="main-menu">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'main-menu',
							'container' => false,
							'menu_class' => '',
							'fallback_cb' => '__return_false',
							'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
							'depth' => 2,
							'walker' => new bootstrap_5_wp_nav_menu_walker()
						));
						?>
					</div>
				</div>
			</nav>
		</section>