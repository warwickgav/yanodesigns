<?php if ($site->announcement() != ''): ?>
	<div class="site-announcement">
		<?php echo $site->announcement()->html() ?>
	</div>
<?php endif ?>