<!doctype html>
<html class="no-js" lang="ar" dir="rtl">
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
	<title>Simple HTML Template</title>

	<!-- <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css"> -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/main.css">

	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/modernizr.js"></script>
	<?php
	wp_head();
	?>
</head>
<body>

	<header class="container">
		<div class="row">
			<div class="large-12 columns">
				<h1 class="logo"><?php bloginfo('name'); ?></h1>
			</div>
			<div class="large-8 right columns">
				<nav class="top-bar" data-topbar role="navigation">
					<ul class="title-area right">
						<li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
					</ul>

					<section class="top-bar-section">
						<ul class="right">
							<li><a href="#">منوعات</a></li>
							<li><a href="#">تقني</a></li>
							<li><a href="#">شخصي</a></li>
							<li><a href="#">تنمية</a></li>
							<li><a href="#">صور وفيديو</a></li>
						</ul>

					</section>
				</nav>
			</div>

			<div class="large-4 columns">
				<form action="">
					<div class="row">
						<div class="large-12 columns">
							<div class="row collapse">
								<div class="small-2 columns">
									<a href="#" class="button postfix"><i class="fa fa-search fa-lg"></i></a>
								</div>
								<div class="small-10 columns">
									<input type="text" placeholder="بحث">
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</header>
