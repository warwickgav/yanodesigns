
<?php if ($site->announcement() != ''): ?>
	<div class="announcement announcement__general">
		<div class="container">
			<?php echo $site->announcement()->html() ?>
		</div>
	</div>
<?php endif ?>
