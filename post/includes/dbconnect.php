<?php
/**********************************************\
* Copyright (c) 2013 Manolis Agkopian          *
* See the file LICENCE for copying permission. *
\**********************************************/

if (!defined('INCLUDED')){
	define('INCLUDED',true);
	require 'markup_func.php';
	header('HTTP/1.1 403 Forbidden');
	do_html_403();
	die();
}

function db_connect() {
	$db_host = "wiistream.net";
$db_name = "discovery";
$db_user = "admin";
$db_pass = "Openowok123456";
	$con = @mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	if ($con === false) {
		return false;
	}
	
	mysqli_set_charset ($con , 'UTF-8');
	return $con;
}
?>