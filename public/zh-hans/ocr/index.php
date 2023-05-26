<?php
// import common config & utilities
require("{$_SERVER['DOCUMENT_ROOT']}/../php/config.php");
require("{$_SERVER['DOCUMENT_ROOT']}/../php/utils.php");

// set current timestamp
$ts = substr(time(), 6);

// get current / prefered language
$lang = getUserLang();

// import i18n text content
$l = include("{$_SERVER['DOCUMENT_ROOT']}/../locale/{$lang}.php");

// get current page
list($page, $pageUri) = getCurrentPage($lang);

// import home page
require("{$_SERVER['DOCUMENT_ROOT']}/../views/{$pageUri}");