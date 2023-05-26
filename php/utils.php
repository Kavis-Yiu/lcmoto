<?php
// retrieve user preferred language
function getUserLang() {
	$supported_lang = ['en', 'zh-hant', 'zh-hans'];
	
	// check if locale is already specified in URL
	foreach ($supported_lang as $lang) {
		if (stripos($_SERVER['REQUEST_URI'], "/{$lang}/") !== false) {
			return $lang;
		}
	}
	
	// parse HTTP Accept-Language
	$user_langs = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
	
	// map HTTP Accept-Language header to locale
	$lang_map = [
		'en' => $supported_lang[0],
		'zh' => $supported_lang[1],
		'zh-tw' => $supported_lang[1],
		'zh-hk' => $supported_lang[1],
		'zh-cn' => $supported_lang[2]
	];
	
	// check if supported lanague is specified in Accept-Language header
	foreach ($user_langs as $lang) {
		$locale = strtolower(explode(';', $lang)[0]);
		
		if (isset($lang_map[$locale])) {
			return $lang_map[$locale];
		}
	}
	
	// default is the first one
	return $supported_lang[0];
}

// retrieve current page from the URL
function getCurrentPage($currentLang, $pageUrl = 'index.php') {
	// normalize the current language
	$currentLang = "/{$currentLang}/";
	
	// locate the language in the URL
	$i = stripos($_SERVER['REQUEST_URI'], $currentLang);
	
	// extract the current page, the current page url
	$i = substr($_SERVER['REQUEST_URI'], $i + strlen($currentLang));
	$i = (empty($i)? '': substr($i, 0, -1));
	
	return [$i, (empty($i)? $pageUrl: "{$i}/{$pageUrl}")];
}