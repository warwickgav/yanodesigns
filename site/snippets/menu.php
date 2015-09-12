<div class="navbar">
	<a class="navbar-logo" href="//yanodesigns.com.au/services">
		<img class="svg" src="<?php echo url('assets/images/yano-logomark.svg') ?>" alt="<?php echo $site->title()->html() ?>"/>
	</a>
	<div class="navbar-location" href="//yanodesigns.com.au/services"><a class="" href="/">Get your free quote</a></div>
	<a class="navbar-btn" id="toggleMenu" href=""><i class="icon icon-menu"></i></a>
</div>
<nav class="main-nav" role="navigation">
	<ol class="menu menu--vertical">
	<?php
		// selected items
		$items = $pages->visible();

//		$items = $pages->find('home', 'journal', 'products', 'services', 'about', 'contact');

		if ($items and $items->count()):

	?>
		<?php foreach ($items as $item): ?>
			<li>
				<a<?php e($item->isOpen(), ' class="active"') ?> href="<?php echo $item->url() ?>">
					<?php echo $item->uid() ?>
				</a>
				<?php if ($page->uid() == 'services'): ?>
					<?php if($item->hasVisibleChildren() && $item->uid() == 'services'): ?>
						<ol class="submenu menu--vertical">
				        <?php foreach($item->children()->visible() as $child): ?>
					        <li <?php e($child->isActive(),' class="active"') ?>>
				            <a href="<?= $child->url() ?>">
				              <?= $child->title()->html() ?>
				            </a>
				          </li>
				        <?php endforeach ?>
		            </ol>
					<?php endif ?>
				<?php endif ?>
			</li>

		<?php endforeach ?>

	<?php endif ?>
	</ol>
</nav>


