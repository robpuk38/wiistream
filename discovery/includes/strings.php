<!--
//Information
//dynamic defaulted changable strings pointers
-->
<?php
/*
Debug Mode
*/
$Debug_Type=2;
$Debuging;
$Activate_Css;


if(empty($Debuging) && empty($Activate_Css))
{

	if(isset($Debug_Type)&& $Debug_Type == 0)
	{
    $Debuging = "True";
    $Activate_Css = "True";
	}
	if(isset($Debug_Type)&& $Debug_Type == 1)
	{
    $Debuging = "True";
    $Activate_Css = "False";
	}
	if(isset($Debug_Type)&& $Debug_Type == 2)
	{
    $Debuging = "False";
    $Activate_Css = "True";
	}
	if(isset($Debug_Type)&& $Debug_Type == 3)
	{
    $Debuging = "False";
    $Activate_Css = "False";
	}

}


/*
Site information Panle
*/
$Ip_Pointer = "localhost";
$Activate_Site = "True";
$Site_Name = "Discovery";

/*
Database Connection Strings
*/
$db_host = "localhost";
$db_name = "test";
$db_user = "root";
$db_pass = "";

/*
Dynamic Changable Varibles
*/
$myfbprofilepic = "";
$myfbname = "Guest";
$myfbuserid  = 1;
$mywwwsite_logo = "";
$youtubeid = 0/*xvZqHgFz51I*/;
$lastsearch="Discovery";




$local_root = $_SERVER['DOCUMENT_ROOT'];

include_once $local_root."/discovery/dynamic/functions/commonuse.php";
System_Pageing("Strings.php",$Debuging);

include_once $local_root."/discovery/includes/systempaging.php";


?>