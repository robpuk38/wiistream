<?php
$local_root = $_SERVER['DOCUMENT_ROOT'];
session_start(); //Step 0: Don't forget to start the session
define('INCLUDED',true); //Step 1: define INCLUDED as true
require  $local_root.'/post/init_chat.php'; //Step 2: require the init_chat.php
?>
<!DOCTYPE html>
<html>
	<head>
		
	
		
		
		
	
	</head>
	<body>
		<div id="wrapper">
			
		
			<?php do_html_chat(true, true); ?>
			
		</div>
	</body>
</html>