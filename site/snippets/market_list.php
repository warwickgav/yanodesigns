<?php

	$allMarkets = $pages->find('markets')->children()->visible()->flip();

?>
<ol class="market-list">
	<?php foreach ($allMarkets as $market): // article overview ?>

			<li class="market<?php if ($market->upcoming() == 'true'): ?> current<?php endif ?><?php if ($market->done() == 'true'): ?> done<?php endif ?>">
				<div class="vr-line"></div>
				<div class="market-info">
					<div class="check icon<?php if ($market->done() == 'true'): ?> icon-check<?php endif ?><?php if ($market->upcoming() == 'true'): ?>upcoming<?php endif ?>"></div>
					<div class="market-date"><?php echo html($market->market_date()) ?></div>
				</div>
				<div class="market-details">
<!--					--><?php //if ($market->banner() != ''): ?>
<!--						<img class="market-banner" src="/assets/images/banners/--><?php //echo html($market->banner()) ?><!--">-->
<!--					--><?php //endif ?>
					<div class="description">
						<h3><?php echo html($market->title()) ?></h3>
						<?php echo html($market->text()) ?>
					</div>
					<div class="market-time">
						From: <?php echo html($market->time()) ?>
					</div>
					<?php if ($market->link()->isNotEmpty()): ?>
						<a target="_blank" href="<?php echo html($market->link()) ?>">Visit the official site</a>
					<?php else: ?>

					<?php endif ?>
				</div>
			</li>
	<?php endforeach // article overview ends ?>
</ol>