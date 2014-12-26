<!doctype html>
<html class="no-js" lang="ar" dir="rtl">
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
	<title>Simple HTML Template</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/main.css">

	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/modernizr.js"></script>
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

	<div class="main-content">
		<div class="row">
			<div class="large-8 right columns news">
				<div class="row">
					<div class="medium-12 columns">
						<article class="card">
							<header>
								<h1>Post title</h1>
							</header>
							<div class="date">4 كانون الأول 2014</div>

							<p>خلافاَ للاعتقاد <a href="#">السائد</a> فإن لوريم إيبسوم ليس نصاَ عشوائياً، بنذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور "ريتشارد ماك لينتوك" (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي "consectetur"، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب "حول أقاصي الخير والشر" (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم "Lorem ipsum dolor sit amet.." يأتي من سطر في القسم 1.20.32 من هذا الكتاب.</p>

							<div class="read-more text-left">
								<a href="#">تابع قراءة المقال &raquo;</a>
							</div>

							<footer class="tags">
								<span class="label">تقني</span>
								<span class="label">تنمية</span>
								<span class="label">منوعات</span>
							</footer>
						</article>
					</div>
					<div class="medium-12 columns">
						<article class="card">
							<header>
								<h1>Post title</h1>
							</header>
							<div class="date">4 كانون الأول 2014</div>

							<p>خلافاَ للاعتقاد <a href="#">السائد</a> فإن لوريم إيبسوم ليس نصاَ عشوائياً، بنذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور "ريتشارد ماك لينتوك" (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي "consectetur"، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب "حول أقاصي الخير والشر" (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم "Lorem ipsum dolor sit amet.." يأتي من سطر في القسم 1.20.32 من هذا الكتاب.</p>

							<div class="read-more text-left">
								<a href="#">تابع قراءة المقال &raquo;</a>
							</div>

							<footer class="tags">
								<span class="label">تقني</span>
								<span class="label">تنمية</span>
							</footer>
						</article>
					</div>
				</div>
				<div class="row">
					<div class="medium-12 columns">
						<ul class="pagination">
							<li class="arrow unavailable"><a href="">&laquo;</a></li>
							<li class="current"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">4</a></li>
							<li class="unavailable"><a href="">&hellip;</a></li>
							<li><a href="">12</a></li>
							<li><a href="">13</a></li>
							<li class="arrow"><a href="">&raquo;</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="large-4 columns sidebar">
				<div class="card">
					Sidebar
				</div>
			</div>
		</div>
	</div>

	<div class="site-footer">
		<div class="row">
			<div class="medium-12 columns">
				No rights reserved <a href="http://aalakkad.me" target="_blank">Ammar Alakkad</a> 2014
			</div>
		</div>
	</div>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor.js"></script>

	<script>
		$(document).ready(function(){
			$(document).foundation();
		});
	</script>
</body>
</html>
