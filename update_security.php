<?php
$local_root = $_SERVER['DOCUMENT_ROOT'];
include $local_root."/discovery/includes/database/connection.php";
if(isset($_POST['static_device']) && isset($_POST['final']) && isset($_POST['security_level']))
{


	 mysqli_query($conn,"UPDATE user  SET security_level='".$_POST['security_level']."' WHERE static_device='".$_POST['static_device']."'");
				  echo $_POST['security_level'];
				
   
}
?>