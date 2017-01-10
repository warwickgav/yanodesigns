<nav class="main-nav" role="navigation">
	<div class="menu-header">
		<div class="logo">
			<a class="brand" href="<?php echo url() ?>">
				<img src="<?php echo url('assets/images/logo--white.svg') ?>" alt="<?php echo $site->title()->html() ?>" />
			</a>
		</div>
		<a class="navbar-btn" id="closeMenu" href=""><img src="<?php echo url('assets/images/close-icon.svg') ?>" width="50"></a>
	</div>
	<ol class="menu">
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
					<span class="nav-hr"></span>
				</a>
			</li>

		<?php endforeach ?>

	<?php endif ?>
		<li>
			<a href="//www.etsy.com/au/shop/YanoDesigns" target="_blank">
				Etsy
				<span class="nav-hr"></span>
			</a>
		</li>

	</ol>
</nav>


