<?php snippet('head') ?>
<?php snippet('header') ?>
	<main class="site-content" role="main">
		<div class="site-hero"></div>
		<div class="site-intro">
			<?php echo $page->text()->kirbytext() ?>
		</div>
	</main>
<?php snippet('footer') ?>