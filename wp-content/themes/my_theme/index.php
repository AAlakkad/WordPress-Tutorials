<?php
get_header();
?>
<div class="main-content">
	<div class="row">
		<div class="large-8 right columns news">
			<div class="row">
				<?php
				while(have_posts()) {
					the_post();
					?>
					<div class="medium-12 columns">
						<article class="card">
							<header>
								<h1><?php the_title();?></h1>
							</header>
							<div class="date"><?php the_date();?></div>

							<p><?php the_content();?></p>

							<div class="read-more text-left">
								<a href="<?php the_permalink();?>">تابع قراءة المقال &raquo;</a>
							</div>

							<footer class="tags">
								<?php
								$tags = wp_get_post_tags(get_the_ID());
								foreach($tags as $tag) {
									echo '<span class="label">' . $tag->name . '</span> ';
								}
								?>
							</footer>
						</article>
					</div>
					<?php } ?>
                </div>
				<div class="row">
                    <div class="medium-12 columns">
                        <?= my_paginate_links(); ?>

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
		<?php
		get_sidebar();
		?>
	</div>
</div>
<?php
get_footer();
?>
