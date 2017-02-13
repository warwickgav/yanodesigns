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


