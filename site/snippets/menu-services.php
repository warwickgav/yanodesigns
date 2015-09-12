<nav class="sub-nav" role="navigation">
	<ul class="menu">
	<?php

	// selected menus
	$menus = $pages->find('materials', 'file-setup', 'ordering');

	if($menus and $menus->count()):

	?>
		<?php foreach($menus as $menu): ?>
			<li>
				<a<?php e($menu->isOpen(), ' class="active"') ?> href="<?php echo $menu->url() ?>">

					<?php echo $menu->title()->html() ?>
				</a>
			</li>
		<?php endforeach ?>
	<?php endif ?>
	</ul>
</nav>


