<!doctype HTML>
<html>
<head>
	<title><?= $title; ?></title>
	<meta charset="UTF-8">
	<meta name="description" content="<?= $description; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="<?= get_theme_directory_url(); ?>/assets/normalize.min.css" type="text/css">	
	<link rel="stylesheet" href="<?= get_theme_directory_url(); ?>/assets/styles.css" type="text/css">
	
	<!-- Matomo -->
	<script type="text/javascript">
	  var _paq = window._paq || [];
	  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
	  _paq.push(["disableCookies"]);
	  _paq.push(['trackPageView']);
	  _paq.push(['enableLinkTracking']);
	  (function() {
	    var u="//reporting.adgr.dev/";
	    _paq.push(['setTrackerUrl', u+'matomo.php']);
	    _paq.push(['setSiteId', '15']);
	    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
	    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
	  })();
	</script>
	<!-- End Matomo Code -->
</head>
<body>
	<header class="site-header">
		<a href="<?= $config['base_url'] ?>/">
			<div class="logo"><?= substr($config['blog_name'], 0, 1) ?></div> <?= $config['blog_name'] ?>
		</a>
	</header>
	
	<div class="container">