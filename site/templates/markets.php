<?php snippet('head') ?>
<?php snippet('header') ?>
	<main class="site-content" role="main">
        <div class="container">
			<div class="page-header">
				<h2>Upcoming Markets</h2>
			</div>
	        <?php $markets = $pages->find('markets')->children()->visible()->flip() ?>
			<ol class="market-list">
				<?php foreach ($markets as $market): // article overview ?>
					<li class="market<?php if ($market->done() == 'Y'): ?> done<?php endif ?>">
						<div class="vr-line"></div>
						<div class="market-info">
							<div class="check icon<?php if ($market->done() == 'Y'): ?> icon-check<?php endif ?><?php if ($market->upcoming() == 'Y'): ?>upcoming<?php endif ?>"></div>
							<div class="market-date"><?php echo html($market->market_date()) ?></div>
						</div>
						<div class="market-details">
							<?php if ($market->banner() != ''): ?>
								<img class="market-banner" src="/assets/images/banners/<?php echo html($market->banner()) ?>">
							<?php endif ?>
							<div class="description">
								<h3><?php echo html($market->title()) ?></h3>
								<?php echo html($market->text()) ?>
							</div>
							<div class="market-time">
								From: <?php echo html($market->time()) ?>
							</div>
							<?php if ($market->link()): ?><a target="_blank" href="<?php echo html($market->link()) ?>">Visit the official site</a><?php endif ?>
						</div>
					</li>
				<?php endforeach // article overview ends ?>
			</ol>
        </div>
  </main>
<?php snippet('footer') ?>