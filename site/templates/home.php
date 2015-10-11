<?php snippet('head') ?>
<?php snippet('header') ?>
	<main class="site-content" role="main">
		<div class="container">
			<div class="site-hero">
				<div class="site-intro">
					<?php echo $page->text()->kirbytext() ?>
				</div>
			</div>
		</div>
	</main>
<?php snippet('footer') ?>