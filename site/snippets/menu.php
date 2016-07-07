<div class="navbar">
	<a class="navbar-logo" href="//yanodesigns.com.au">Yano Designs</a>
	<a class="navbar-btn" id="toggleMenu" href=""><i class="icon icon-bars"></i></a>
</div>
<nav class="main-nav" role="navigation">
	<div class="menu-header">
		<a class="navbar-logo" href="//yanodesigns.com.au">Yano Designs</a>
		<a class="navbar-btn" id="closeMenu" href=""><i class="icon icon-close"></i></a>
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


