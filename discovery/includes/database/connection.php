<?php
//System_Pageing("Connection.php",$Debuging);
/*
Database Connection Strings 
MY LOCAL DB HOST
IF("UPDATE OR READ OTHERS DATABASE USE IP GET")
*/
$MYSQLCrash = "true";

if(isset($_GET['@ip']) && !empty($_GET['@ip']))
{
$db_host = $_GET['@ip'];
}
else
{
  $db_host = "127.0.0.1";
}

$db_name = "discovery";
$db_user = "root";
$db_pass = "";
$build_version = "0.1";

//todo check connection before connection

$connected = @fsockopen($db_host, 80); 
                                        //website, port  (try 80 or 443)

    if ($connected)
    {
        $is_conn = true; //action when connected
        $conn =new mysqli($db_host, $db_user, $db_pass, $db_name);
 // Check connection
       if ($conn->connect_error) 
       {
        echo "No Internet Connection";
         $MYSQLCrash = "false";
	   }
       else
        {

           $result = mysqli_query($conn,'SELECT * FROM build_version ORDER BY id DESC');
	       $row = mysqli_fetch_array($result);
	       if($row > 0)
	       {
		    $build_version = $row["build_version"];
        
		    $MYSQLCrash = "true";
	       }
	       else
	       {
		    echo "No Database Connection";
		    $MYSQLCrash = "false";
		   }
	    }
	  fclose($connected);
    }
    else
    {
        $is_conn = false; //action in connection failure
        $MYSQLCrash = "false";
         echo "No Internet Connection";
    }
?>