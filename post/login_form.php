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

$msg = '';
if (isset($_GET['ref']) && !empty($_GET['ref']) && $_GET['ref'] === 'reg') {
	$msg = '<p id="message">You have been registered successfully! You can now login.</p>';
}

if(isset($_GET['u_name']) && isset($_GET['deviceid']))
{
	$_SESSION['u_name'] = $_GET['u_name'];
	$_SESSION['deviceid'] = $_GET['deviceid'];

} 

$errors = array();
if (isset($_SESSION['login_errors']) && !empty($_SESSION['login_errors'])) {
	$errors = $_SESSION['login_errors'];
	unset($_SESSION['login_errors']);
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
					<h1>Login Form</h1>
					<?php
					if (isset($_SESSION['u_name']) && !empty($_SESSION['u_name']) && isset($_SESSION['deviceid']) && !empty($_SESSION['deviceid'])) 
					{
						
					
					?>
					<p><?php echo "Username:". $_SESSION['u_name']; ?></p>
					<p><?php echo "DeviceId:". $_SESSION['deviceid']; ?></p>

					<?php
					}
					?>
				</div>
				<?=$msg?>
				<?php do_html_login_form($errors);?>
			</div>
		</div>
	</body>
</html>