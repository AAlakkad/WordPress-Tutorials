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
                        <?php
                            // add this style as custom style:
                            // https://gist.github.com/AAlakkad/1f546f6c4a2975d9aab8
                            $args = array('type' => 'list');
                            echo paginate_links($args);
                        ?>
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
