<?php snippet('head') ?>
    <?php snippet('header') ?>
    <main class="site-content" role="main">
        <div class="container">
            <div class="page-header">
                <h1 class="page-title"><?php echo $page->title()->html() ?></h1>
                <?php echo $page->text()->kirbytext() ?>
            </div>
            <div class="grid product-grid">
                  <div class="grid-sizer grid-col--span-all grid-col--md-one-half grid-col--lg-one-third"></div>
                <?php $products = $pages->find('products')->children()->visible() ?>
                <?php foreach ($products as $product): // article overview ?>
                    <div class="grid-col grid-col--span-all grid-col--sm-one-half grid-col--lg-one-third">
                        <?php if ($product->template() == 'product.image'): // image posts ?>
                            <div class="grid-content product-card">
                                <?php if($image = $product->images()->sortBy('sort', 'asc')->first()): ?>
                                    <div class="product-img-box">
	                                    <a class="fancybox" title="<?php echo $product->title()->html() ?>" rel="group" data-fancybox-href="<?php echo $product->url(); ?>/<?php echo $product->larger()->url(); ?>">
                                            <img class="product-img" src="<?php echo $product->url(); ?>/<?php echo $product->thumb()->url(); ?>" alt="<?php echo $product->title()->html() ?>" >
	                                    </a>
                                    </div>
                                <?php endif ?>
                                <div class="product-details">
                                    <h2 class="product-title"><?php echo html($product->title()) ?></h2>
                                    <?php if($product->price()): ?>
                                        <p class="price"><?php echo $product->price() ?></p>
                                    <?php endif ?>
                                    <!-- <?php echo excerpt($product->text(), 400 ) ?> -->
                                </div>
                            </div>
                        <?php endif ?>
                    </div>
                <?php endforeach // article overview ends ?>
            </div>
        </div>
  </main>
<?php snippet('footer') ?>