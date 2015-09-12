<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="google-site-verification" content="Z9hndVpRsuCglofWPv-VmefxbPBP3BQepyrIdAfjhxE"/>

	<title><?php echo $page->title()->html() ?> | <?php echo $site->title()->html() ?></title>
	<meta name="description" content="<?php echo $site->description()->html() ?>">
	<meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

	<link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
	<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">

	<script src="//use.typekit.net/srn3pvo.js"></script>
	<script>try {
			Typekit.load();
		} catch (e) {
		}
	</script>


	<script>
	  (function (i, s, o, g, r, a, m) {
		  i['GoogleAnalyticsObject'] = r;
		  i[r] = i[r] || function () {
			  (i[r].q = i[r].q || []).push(arguments)
		  }, i[r].l = 1 * new Date();
		  a = s.createElement(o),
			  m = s.getElementsByTagName(o)[0];
		  a.async = 1;
		  a.src = g;
		  m.parentNode.insertBefore(a, m)
	  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

	  ga('create', 'UA-60503519-1', 'auto');
	  ga('send', 'pageview');

	</script>


	<?php echo css('assets/css/styles.css') ?>

</head>

	<body class="<?php echo $page->uid() ?>">
