<?php



define('INCLUDED',true);
require 'includes/core_func.php';

if (user_logged_in()) {
	$old_user = $_SESSION['uid'];
	unset($_SESSION['uid']);


	$old_user_name = $_SESSION['u_name']; 
	unset($_SESSION['u_name']); 
	 
	$old_user_security = $_SESSION['security'];
	unset($_SESSION['security']); 
	$old_deviceid = $_SESSION['deviceid'];
	unset($_SESSION['deviceid']);
	$old_pin = $_SESSION['pinpal'];
	unset($_SESSION['pinpal']);

	//$old_ipmac = $_SESSION['u_ipmac'];
	//unset($_SESSION['u_ipmac']);
	//session_destroy();
}



header("Location: http://".$_SERVER['SERVER_ADDR']."?static_device=".$_SESSION['u_ipmac']."&logout=goodbye");


//if (get_last_page() !== false) {
	 
//}
//else {
	//header("Location: http://".$_SERVER['SERVER_ADDR']."?static_device=".$_SESSION['u_ipmac']."&logout=goodbye"); 
//}
?>