<?php

if(isset($_POST['connection']) && isset($_POST['tablename']))
{

$db_host = "107.180.26.70";
$db_name = "discovery";
$db_user = "admin";
$db_pass = "Openowok123456";
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
 // Check connection
if ($conn->connect_error) 
{
     die("Connection failed: " . $conn->connect_error);
} 



	$Table_Name = $_POST['tablename'];
	
   
$sql = "SELECT * FROM $Table_Name  ORDER BY id ASC LIMIT 1"; 

  $query = mysqli_query($conn,$sql) or trigger_error("Query Failed: " . mysqli_error()); 

  if (mysqli_num_rows($query) > 0) 

  { 

  $random_number_first_row = mysqli_fetch_assoc($query);

  $first_random_number =$random_number_first_row['id'];
  
  
  

  $sql = "SELECT * FROM $Table_Name  ORDER BY id DESC LIMIT 1"; 

  $query = mysqli_query($conn,$sql) or trigger_error("Query Failed: " . mysqli_error()); 

  if (mysqli_num_rows($query) > 0) 

  { 

  $random_number_last_row = mysqli_fetch_assoc($query);

  $last_random_number =$random_number_last_row['id'];
  
  




  $sql = "SELECT * FROM $Table_Name  WHERE id = '".rand($last_random_number,$first_random_number)."' ORDER BY id DESC LIMIT 1"; 

  $query = mysqli_query($conn,$sql) or trigger_error("Query Failed: " . mysqli_error()); 

  if (mysqli_num_rows($query) > 0) 

  { 

  $random_number_last_row = mysqli_fetch_assoc($query);

  
 echo $random_search_comment =$random_number_last_row['comments'];
  }
 }
}
  


 
}

?>