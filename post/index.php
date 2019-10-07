<?php 
$local_root = $_SERVER['DOCUMENT_ROOT'];
 //Step 0: Don't forget to start the session
define('INCLUDED',true); //Step 1: define INCLUDED as true
require $local_root.'/post/init_chat.php'; //Step 2: require the init_chat.php
redirect_if_not_logged_in();
?>

<!DOCTYPE html>
<html>
	<head>
		

		
		
		
		
	</head>
	<body>
		<div id="wrapper">	
			<?php
        if (isset($_SESSION['u_name']) && !empty($_SESSION['u_name']) && isset($_SESSION['deviceid']) && !empty($_SESSION['deviceid'])) 
					{
						
					
					?>
					<p><?php echo "Username:". $_SESSION['u_name']; ?></p>
					<p><?php echo "DeviceId:". $_SESSION['deviceid']; ?></p>

					<?php
					}
					?>
			
			
			<?php do_html_chat(); ?>
		</div>
	</body>
</html>