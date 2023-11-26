<?php
$themeurl = get_bloginfo('template_url');

$cta = get_field('cta', 'option');
$name = get_field('name', 'option');
$links = get_field('links', 'option');

?>

				<section class="closing">
					<?php echo $cta ? $cta : null; ?>
				</section>
			</div> <!-- end #main -->

			<footer>
				<?php if ($name): ?>
					<h4><?php echo $name; ?></h4>
				<?php endif; ?>

				<?php if ($links): ?>
					<p>
						<?php foreach ($links as $link): ?><a href="<?php echo $link['link']['url']; ?>"><?php echo $link['link']['title']; ?></a><?php endforeach; ?>
					</p>
				<?php endif; ?>
			</footer>
		</main>
	</body>
</html>
 