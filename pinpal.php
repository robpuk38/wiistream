<?php
$local_root = $_SERVER['DOCUMENT_ROOT'];
include $local_root."/discovery/includes/database/connection.php";
if(isset($_POST['static_device']) && isset($_POST['final']) && isset($_POST['pinpal']) || isset($_GET['static_device']) && isset($_POST['final']))
{


if(isset($_POST['static_device']))
{
  $static_device = $_POST['static_device'];

$sql = "SELECT * FROM user  

    WHERE static_device = '" . $static_device  . "' AND pinpal = '".$_POST['pinpal']."' LIMIT 1"; 

  $query = mysqli_query($conn,$sql) or trigger_error("Query Failed: " . mysqli_error()); 
if (mysqli_num_rows($query) == 1) 

  { 

  $row = mysqli_fetch_assoc($query);
   $pinpal =$row['pinpal'];



  if(isset($_POST['pinpal']) == $pinpal)
  {
  	//WELCOME MEMBER
     mysqli_query($conn,"UPDATE user  SET is_login='is_login_yes' WHERE static_device='".$_POST['static_device']."'");
				 


  	echo "WM";
  	return;
  }
  else
  {
  	echo "ERP";
  	return;
  }

}
}

if(isset($_GET['static_device']) && isset($_POST['final']))
{
	$static_device = $_GET['static_device'];

    
     mysqli_query($conn,"UPDATE user  SET is_login='is_login_no' WHERE static_device='".$static_device."'");
     //GOODBYE
     echo "GB";
     return;
  	
  
  
  
}
else
{
	//ERROR_REENTER_PIN
	echo "ERP";
	return;
}

}
else
{
	echo "ERP";
	return;
}
				
   


?>