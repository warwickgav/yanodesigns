<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="google-site-verification" content="Z9hndVpRsuCglofWPv-VmefxbPBP3BQepyrIdAfjhxE"/>
	<meta name="p:domain_verify" content="a5b2f4f63cbafbb55a945dcf18b5454f"/>
	<title><?php echo $page->title()->html() ?> | <?php echo $site->title()->html() ?></title>
	<?php if($page->description() != ''): ?>
		<meta name="description" content="<?php echo html($page->description()) ?>" />
	<?php else: ?>
		<meta name="description" content="<?php echo html($site->description()) ?>" />
	<?php endif ?>
	<meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

	<link rel="apple-touch-icon" sizes="57x57" href="/assets/images/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/assets/images/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/assets/images/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/assets/images/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/assets/images/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/assets/images/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/assets/images/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/assets/images/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/assets/images/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/assets/images/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href=/assets/images/favicon-16x16.png">
	<link rel="manifest" href="/assets/images/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/assets/images/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

<!--	<link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png">-->
<!--	<link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/x-icon">-->

	<?php echo css('assets/css/styles.min.css') ?>

<!--	<script src="https://use.typekit.net/ldl0lko.js"></script>-->
<!--	<script>try{Typekit.load({ async: true });}catch(e){}</script>-->
	<!-- Begin Inspectlet Embed Code --> <script type="text/javascript" id="inspectletjs"> window.__insp = window.__insp || []; __insp.push(['wid', 659941722]); (function() { function ldinsp(){if(typeof window.__inspld != "undefined") return; window.__inspld = 1; var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); }; setTimeout(ldinsp, 500); document.readyState != "complete" ? (window.attachEvent ? window.attachEvent('onload', ldinsp) : window.addEventListener('load', ldinsp, false)) : ldinsp(); })(); </script> <!-- End Inspectlet Embed Code -->
	

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-60503519-1', 'auto');
		ga('send', 'pageview');

	</script>


</head>

	<body class="<?php echo $page->uid() ?> ">
		<div class="site-container">