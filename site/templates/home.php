<?php snippet('head') ?>
<?php snippet('header') ?>
	<main class="site-content" role="main">
		<section class="splash">
			<h2>Add a splash of colour</br> to your home with our <span>New Swirl Pots</span></h2>
			<picture>
				<source srcset="/assets/images/swirl-pots-splash--large.jpg" media="(min-width: 48em)">
				<source srcset="/assets/images/swirl-pots-splash--medium.jpg" media="(min-width: 30em)">
				<source srcset="/assets/images/swirl-pots-splash--narrow.jpg">
				<img src="/assets/images/swirl-pots-splash--large.jpg" alt="Pick up your concrete swirl pot by Yano Designs at Melbourne Spring Fashion Week"/>
			</picture>
		</section>
		<div class="container">
			<div class="page-content">
				<div class="grid product-grid">
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
			</div>
			<div class="page-header">
				<h1 class="page-title"><?php echo $page->text()->html() ?></h1>
			</div>
		</div>
	</main>
<?php snippet('footer') ?>


