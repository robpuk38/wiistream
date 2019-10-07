<?php
$local_root = $_SERVER['DOCUMENT_ROOT'];

if (!defined('INCLUDED')){
	define('INCLUDED',true);
	require $local_root.'/post/includes/markup_func.php';
	header('HTTP/1.1 403 Forbidden');
	do_html_403();
	die();
}

require $local_root.'/post/includes/markup_func.php';
require $local_root.'/post/includes/core_func.php';
set_last_page($_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]);

function redirect_if_not_logged_in() {
	if (!user_logged_in()) {
		header('Location: '.$local_root.'/post/login_form.php'); 
		die();
	}
}
?>