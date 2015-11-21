<?php snippet('head') ?>
<?php snippet('header') ?>
	<main class="site-content" role="main">
        <div class="container">
	        <?php $markets = $pages->find('markets')->children()->visible() ?>
	        <div class="market-list">
		        <?php foreach ($markets as $market): // article overview ?>
			        <div class="market-info">
				        <img class="market-banner" src="/assets/images/banners/<?php echo html($market->banner()) ?>"/>
				        <div class="market-content">
			                <h2 class="page-title"><?php echo html($market->title()) ?></h2>
					        <div class="content">
				                 <?php echo html($market->text()) ?>
					        </div>
				        </div>
			        </div>
		        <?php endforeach // article overview ends ?>
	        </div>
        </div>
  </main>
<?php snippet('footer') ?>