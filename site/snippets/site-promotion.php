<?php if ($site->promotion()): ?>
	<div class="site-promotion">
		<?php echo $site->promotion()->html() ?>
	</div>
<?php endif ?>