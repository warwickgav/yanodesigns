<?php snippet('head') ?>
<?php snippet('header') ?>
	<main class="site-content" role="main">
		<div class="site-hero">
			<div class="container">
				<div class="site-intro">
				<?php echo $page->text()->kirbytext() ?>
			</div>
			</div>

			<div class="hero-image">
				<img class="" src="assets/images/yano-home-background.jpg">
			</div>

		</div>
	</main>
<?php snippet('footer') ?>