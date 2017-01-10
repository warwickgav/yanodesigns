<?php snippet('announcement') ?>

<header class="site-header" role="banner">
	<div class="container">
		<div class="cf">
			<a class="navbar-btn" id="toggleMenu" href=""><img src="<?php echo url('assets/images/menu-icon.svg') ?>" width="50"></a>
			<div class="header--brand">
				<?php snippet('logo') ?>
			</div>
			<?php if ($site->market() != ''): ?>
				<div class="upcoming-market">
					<strong><a href="/markets">Upcoming Market</a></strong><br><?php echo $site->market()->html() ?>
				</div>
			<?php endif ?>
			<?php snippet('social-links') ?>
		</div>
		<?php snippet('menu') ?>
	</div>
</header>

