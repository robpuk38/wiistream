<?php
/**********************************************\
* Copyright (c) 2013 Manolis Agkopian          *
* See the file LICENCE for copying permission. *
\**********************************************/

session_start();
define('INCLUDED',true);
require 'includes/core_func.php';
require 'includes/markup_func.php';

if (user_logged_in()) {
	if (get_last_page() !== false) {
		header('Location: http://'.get_last_page());
	}
	else {
		header('Location: ../');
	}
	die();
}

$errors = array();
if (isset($_SESSION['reg_errors']) && !empty($_SESSION['reg_errors'])) {
	$errors = $_SESSION['reg_errors'];
	unset($_SESSION['reg_errors']);
}
?>
<!DOCTYPE html">
<html>
	<head>
		
		
			
			
			
	</head>
	<body>
		<div id="wrapper">
			<div id="container">
				<div id="title">
					<h1>Registration Form</h1>
				</div>
				<?php do_html_register_form($errors);?>
			</div>
		</div>
	</body>
</html>