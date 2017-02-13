<?php snippet('head') ?>
<?php snippet('header') ?>

	<main class="site-content" role="main">
        <div class="container">
            <div class="page-header">
                <h1 class="page-title"><?php echo $page->title()->html() ?></h1>
            </div>
	        <div class="page-content">
                <?php echo $page->text()->html() ?>
	        </div>
        </div>
  </main>
<?php snippet('footer') ?>