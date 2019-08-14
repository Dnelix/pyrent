<?php require('inc/dynamic.php'); ?>
<!DOCTYPE html>
<html class="fa-events-icons-ready">
	<head>
		<title><?= $pagetitle; ?></title>
		<meta data-vue-meta="1" name="description" content="<?=$metadesc;?>">
		<meta name="title" content="<?=$metatitle;?>">
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		
		<link rel="icon" href="favicon.ico">
		
		<!--script type="text/javascript" async="" src="https://widget.intercom.io/widget/x8l6ae09"></script>
		<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
		<script type="text/javascript" async="" src="https://www.googleadservices.com/pagead/conversion_async.js"></script>
		<script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-NM66ZTC"></script-->
		<!--Remove Comment-->
		<script src="https://use.fontawesome.com/412afe71ff.js"></script>
		<script src="https://cdn.fontawesome.com:443/js/stats.js"></script>
		
		<link href="https://use.fontawesome.com/412afe71ff.css" media="all" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,500,600,700" rel="stylesheet">
		
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1">
		<meta http-equiv="keywords" content="<?=$metakeys;?>">
		
		<!--script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || []; w[l].push({
				  'gtm.start':
					new Date().getTime(), event: 'gtm.js'
				}); var f = d.getElementsByTagName(s)[0],
				  j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
					'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
			})(window, document, 'script', 'dataLayer', 'GTM-NM66ZTC');
		</script>
		<script async="" src="https://www.googletagmanager.com/gtag/js?id=AW-822500784"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() { dataLayer.push(arguments); }
			gtag('js', new Date());
			gtag('config', 'AW-822500784');
		</script-->
	
		<link href="css/app.19cb0942.css" rel="preload" as="style">
		<link href="css/chunk-vendors.e9455b32.css" rel="preload" as="style">
		<!--link href="js/app.65aface5.js" rel="preload" as="script">
		<link href="js/chunk-vendors.142388fd.js" rel="preload" as="script"-->
		<link href="css/chunk-vendors.e9455b32.css" rel="stylesheet">
		<link href="css/app.19cb0942.css" rel="stylesheet">
		
		<!--script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/822500784/?random=1564853639004&amp;cv=9&amp;fst=1564853639004&amp;num=1&amp;bg=ffffff&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=900&amp;u_w=1440&amp;u_ah=797&amp;u_aw=1440&amp;u_cd=24&amp;u_his=2&amp;u_tz=-420&amp;u_java=false&amp;u_nplug=0&amp;u_nmime=0&amp;gtm=2oa7o0&amp;sendb=1&amp;ig=1&amp;data=event%3Dgtag.config&amp;frm=0&amp;url=http%3A%2F%2Flocalhost%3A8000%2F&amp;tiba=Your%20Trusted%20Online%20Rent%20Payment%20Services%20%7C%20payrent.ng&amp;async=1&amp;rfmt=3&amp;fmt=4"></script-->
		
	</head>
	<body>
		<div id="app" class="vtall">
			<div data-v-f979eb52="" id="sidebar-menu" class="navbar sidebar-menu" style="display:none">
				<div data-v-f979eb52="" class="button-set">
					<a data-v-f979eb52="" target="_BLANK" href="https://dashboard.payrent.ng" class="login">Login</a>
					<a data-v-f979eb52="" href="signup" class="signup"> Sign Up </a>
				</div>
				<ul data-v-f979eb52="" class="navbar-item">
					<li data-v-f979eb52="" class="routesLink">
						<a data-v-f979eb52="" href="home" class="router-link-exact-active router-link-active">Home</a>
					</li>
					<li data-v-f979eb52="" class="routesLink"><a data-v-f979eb52="" href="landlords" class="">Landlords</a></li>
					<li data-v-f979eb52="" class="routesLink"><a data-v-f979eb52="" href="renters" class="">Renters</a></li>
					<li data-v-f979eb52="" class="routesLink"><a data-v-f979eb52="" href="contact" class="">Contact</a></li>
					<li data-v-f979eb52="" class="routesLink"><a data-v-f979eb52="" target="_BLANK" href="http://blog.payrent.com/"> Blog </a></li>
				</ul>
			</div>
			<div class="pageContainer">
				<div data-v-7ca20b14="" class="navbar active" style="padding-right:50px;">
					<div data-v-7ca20b14="" class="button-set-left-side">
						<div data-v-7ca20b14="" class="fa fa-bars" onClick="javascript:toggleElement('sidebar-menu')"></div>
						<a data-v-7ca20b14="" href="home" class="navbar-logo router-link-exact-active router-link-active">
							<img data-v-7ca20b14="" src="./images/PayRent.Web.Transparent.png" alt="Payrent Logo">
						</a>
						<ul data-v-7ca20b14="" class="navbar-item only-desktop">
							<li data-v-7ca20b14="" class="routesLink router-link-exact-active router-link-active" onclick="goTo('home')">Home</li>
							<li data-v-7ca20b14="" class="routesLink" onclick="goTo('landlords')">Landlords</li>
							<li data-v-7ca20b14="" class="routesLink" onclick="goTo('renters')">Renters</li>
							<li data-v-7ca20b14="" class="routesLink" onclick="goTo('contact')">Contact</li>
							<li data-v-7ca20b14="" class="externalLink"><a data-v-7ca20b14="" href="http://blog.payrent.com/" target="_BLANK"> Blog </a></li>
						</ul>
					</div>
					<div data-v-7ca20b14="" class="button-set">
						<a data-v-7ca20b14="" target="_BLANK" href="https://dashboard.payrent.ng" class="login">Login</a>
						<a data-v-7ca20b14="" href="signup" class="signup"> Sign Up </a>
					</div>
				</div>