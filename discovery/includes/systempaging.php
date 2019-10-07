<!--
//Information
//default include system paging header pointers
-->
<?php

/*
Database Connection
*/
include_once $local_root."/discovery/includes/database/connection.php";

/*
Constant Strings Non Changable
*/
include_once $local_root."/discovery/includes/constants.php";
/*
Site Activation Status
*/


if(isset($Activate_Site))
{
	if($Activate_Site == "False")
	{
		Debug("Logs","Activate Site Is Set To ".$Activate_Site,"red",$Debuging);
       return true;
	}


/*
Header Contents
*/
include_once $local_root."/discovery/dynamic/header.php";

/*
Page Preloader Switch Page Contents
*/
include_once $local_root."/discovery/dynamic/preloader.php";


/*
Java Script Page System Contents
*/
include_once $local_root."/discovery/includes/jsphp/js.php";
/*
Body Base Contents Master Rapper
*/
include_once $local_root."/discovery/includes/jsphp/discovery.php";





/*
Body Base Contents Master Rapper
*/
include_once $local_root."/discovery/dynamic/body.php";




/*
Footer Contents
*/
//include"./dynamic/footer.php";



}

/*
Pointer Pageing Check
*/
System_Pageing("System_Pageing.php",$Debuging);

?>