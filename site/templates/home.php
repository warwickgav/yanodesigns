<?php snippet('head') ?>
<?php snippet('header') ?>
	<main class="site-content" role="main">
<<<<<<< Updated upstream
		<div class="site-hero"></div>
		<div class="site-intro">
			<div class="site-intro-inner">
				<?php echo $page->text()->kirbytext() ?>
=======
		<div class="container">
			<div class="page-header">
				<h1 class="page-title"><?php echo $page->text()->html() ?></h1>
			</div>
			<div class="page-content">
				<div class="grid product-grid">
					<div class="grid-sizer grid-col--span-all grid-col--md-one-third"></div>
					<div class="grid-col grid-col--span-all grid-col--sm-one-third">
						<div class="grid-content">
							<img src="/assets/images/earrings-hero.jpg">
						</div>
					</div>
					<div class="grid-col grid-col--span-all grid-col--sm-one-third">
						<div class="grid-content">
							<img src="/assets/images/concrete-pots-hero.jpg">
						</div>
					</div>
					<div class="grid-col grid-col--span-all grid-col--sm-one-third">
						<div class="grid-content">
							<img src="/assets/images/coasters-hero.jpg">
						</div>
					</div>
				</div>
>>>>>>> Stashed changes
			</div>
		</div>

	</main>
<?php snippet('footer') ?>


