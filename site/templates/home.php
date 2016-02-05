<?php snippet('head') ?>
<?php snippet('header') ?>
	<main class="site-content" role="main">
		<div class="site-hero"></div>
		<div class="site-intro">
			<div class="site-intro-inner">
				<?php echo $page->text()->kirbytext() ?>
			</div>
		</div>
	</main>
<?php snippet('footer') ?>