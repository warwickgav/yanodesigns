<?php snippet('announcement') ?>

<header class="site-header" role="banner">
	<div class="container">
		<div class="grid">
			<div class="grid-col grid-col--span-all grid-col--md-one-third pull-by--md-one-third">
				<?php snippet('logo') ?>
			</div>
			<div class="grid-col grid-col--span-all grid-col--md-one-third push-by--md-one-third">
				<?php if ($site->market() != ''): ?>
					<div class="upcoming-market">
							<strong><a href="/markets">Upcoming Market</a></strong><br><?php echo $site->market()->html() ?>
					</div>
				<?php endif ?>
			</div>
			<div class="grid-col grid-col--span-all grid-col--md-one-third">
				<?php snippet('social-links') ?>
			</div>
		</div>
		<?php snippet('menu') ?>
	</div>
</header>

