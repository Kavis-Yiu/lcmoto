<!DOCTYPE html>
<html lang="<?php echo $l['language']; ?>">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	
	<title><?php echo $l['meta.title'].(empty($page)? '': " - {$l['nav.'.$page]}"); ?></title>
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+HK:300|Noto+Sans+SC:300|Audiowide&display=swap"/>
	<link rel="stylesheet" href="/assets/css/layout.css?v=<?php echo $ts; ?>"/>
	<link rel="icon" href="/assets/img/icon/favicon.ico"/>
	<link rel="canonical" href="<?php echo "{$HOSTNAME}/{$l['language']}"; ?>/"/>
	
	<meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1,width=device-width"/>
	<meta name="keywords" content="<?php echo $l['meta.keyword']; ?>"/>
	<meta name="description" content="<?php echo $l['meta.description']; ?>"/>
	<meta name="format-detection" content="telephone=no">
	<meta name="author" content="LCmoto"/>
	
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="<?php echo $l['meta.title']; ?>"/>
	<meta property="og:description" content="<?php echo $l['meta.description']; ?>"/>
	<meta property="og:url" content="<?php echo "{$HOSTNAME}/{$l['language']}"; ?>/"/>
	<meta property="og:image" content="<?php echo $HOSTNAME; ?>/assets/img/logo/logo.png"/>
	
	<meta name="twitter:card" content="summary"/>
	<meta name="twitter:title" content="<?php echo $l['meta.title']; ?>"/>
	<meta name="twitter:description" content="<?php echo $l['meta.description']; ?>"/>
	<meta name="twitter:url" content="<?php echo "{$HOSTNAME}/{$l['language']}"; ?>/"/>
	<meta name="twitter:image" content="<?php echo $HOSTNAME; ?>/assets/img/logo/logo.png"/>
</head>
<body>
	<header>
		<h3>
			<a href="/">LC moto</a>
		</h3>
		<ul class="nav cf">
			<li class="item">
				<a class="about"><?php echo $l['nav.about']; ?></a>
			</li>
			<li class="item">
				<a class="service"><?php echo $l['nav.service']; ?></a>
			</li>
			<li class="item">
				<a class="ocr"><?php echo $l['nav.ocr']; ?></a>
			</li>
			<li class="item">
				<a class="contact"><?php echo $l['nav.contact']; ?></a>
			</li>
			<li class="menu"></li>
		</ul>
		<ul class="sub cf">
			<li class="item">
				<a class="about"><?php echo $l['nav.about']; ?></a>
			</li>
			<li class="item">
				<a class="service"><?php echo $l['nav.service']; ?></a>
			</li>
			<li class="item">
				<a class="ocr"><?php echo $l['nav.ocr']; ?></a>
			</li>
			<li class="item">
				<a class="contact"><?php echo $l['nav.contact']; ?></a>
			</li>
			<li class="item sp"></li>
			<li class="lang cf">
				<?php echo ($l['language'] != 'zh-hant'? '<a href="/zh-hant/">'.$l['lang.zh-hant'].'</a>': '')."\r\n"; ?>
				<?php echo ($l['language'] != 'zh-hans'? '<a href="/zh-hans/">'.$l['lang.zh-hans'].'</a>': '')."\r\n"; ?>
				<?php echo ($l['language'] != 'en'? '<a href="/en/">'.$l['lang.en'].'</a>': '')."\r\n"; ?>
			</li>
		</ul>
	</header>
