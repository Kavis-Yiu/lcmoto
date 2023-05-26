<?php 
// import common config & utilities
require("{$_SERVER['DOCUMENT_ROOT']}/../php/config.php");
require("{$_SERVER['DOCUMENT_ROOT']}/../php/utils.php");

// get current / prefered language
$lang = getUserLang();

// business logic
if (isset($_GET['action'])) {
	switch ($_GET['action']) {
		case 'enquiry':
			
		break;
		default: break;
	}
}

// display 404 error page
if (isset($_GET['404'])) {
	// import i18n text content
	$l = include("{$_SERVER['DOCUMENT_ROOT']}/../locale/{$lang}.php");
	
	// import home page
	include("{$_SERVER['DOCUMENT_ROOT']}/../views/common/404.php");
	exit;
}

// redirect to home page in default language
header("Location: /{$lang}/", true, 301);