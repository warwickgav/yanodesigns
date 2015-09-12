<?php snippet('head') ?>
<?php snippet('header') ?>
	<main class="site-content" role="main">
        <div class="container">
	        <?php $articles = $pages->find('blog')->children()->visible()->flip() ?>
			<?php foreach ($articles as $article): // article overview ?>
				<?php echo html($article->title()) ?>
		        <?php echo html($article->text()) ?>
			<?php endforeach // article overview ends ?>
        </div>
  </main>
<?php snippet('footer') ?>