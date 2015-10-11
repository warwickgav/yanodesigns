<?php snippet('head') ?>
<?php snippet('header') ?>

	<main class="site-content" role="main">
		<div class="container">
            <div class="page-header">
                <h1 class="page-title"><?php echo $page->title()->html() ?></h1>
	            <?php echo $page->text()->kirbytext() ?>
            </div>
		</div>
<!--        <section class="services-section what-section">-->
<!--            <div class="container">-->
<!--                <div class="content">-->
<!--                    <h2 class="title">--><?php //echo $page->section_1_title()->html() ?><!--</h2>-->
<!--                    <div class="excerpt">-->
<!--                        --><?php //echo $page->section_1_text()->html() ?>
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
<!---->
<!--        <section class="services-section materials-section">-->
<!--            <div class="container">-->
<!--                <div class="content">-->
<!--                    <h2 class="title">--><?php //echo $page->section_2_title()->html() ?><!--</h2>-->
<!--                    <div class="excerpt">-->
<!--                        --><?php //echo $page->section_2_text()->html() ?>
<!--                        <a class="btn btn-action-ghost" href="//yanodesigns.com.au/materials">Learn more</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
<!---->
<!--         <section class="services-section files-section">-->
<!--            <div class="container">-->
<!--                <div class="content">-->
<!--                    <h2 class="title">--><?php //echo $page->section_3_title()->html() ?><!--</h2>-->
<!--                    <div class="excerpt">-->
<!--                        --><?php //echo $page->section_3_text()->html() ?>
<!--                        <a class="btn btn-action-ghost" href="//yanodesigns.com.au/file-setup">Learn more</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
<!---->
<!--         <section class="services-section submit-section">-->
<!--            <div class="container">-->
<!--                <div class="content">-->
<!--                    <h2 class="title">--><?php //echo $page->section_4_title()->html() ?><!--</h2>-->
<!--                    <div class="excerpt">-->
<!--                        --><?php //echo $page->section_4_text()->html() ?>
<!--                        <a class="btn btn-action-ghost" href="//yanodesigns.com.au/ordering">Learn more</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
  </main>
<?php //snippet('flair-services') ?>
<?php snippet('footer') ?>