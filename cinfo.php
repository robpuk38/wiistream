<?php
$serAddress=$_SERVER['HTTP_HOST'];

if(isset($_GET['@json']) && !empty($_GET['@json']))
{

	$json = $_GET['@json'];
	?>
	

	
<style>
#array
{
 top:0px;
  bottom:0px; 
  right:0px;
  left:0px;
  width: 100%;
  height: 100%;
  background: black;
  color: white;
  position: fixed;
  display: <?php echo $json ?>;
  z-index: 1;
}
</style>
<?php
     
}
else
{
	$json ='none';
}

?>
<?php
/*
TO DO GET INFO OF CLIENT WITH OUT LOGIN

IF USING GOOGLE CHROME USERS PROFILE PICTURE LOCATION 

C:\Users\%PC_USER_NAME%\AppData\Local\Google\Chrome\User Data\Default\Accounts\Avatar Images


USERS BOWSER DAILY RECORED
C:\Users\Hp-Laptop\AppData\Local\Google\Chrome\User Data\Default\Network Action Predictor

USERS NAME AND EMAIL OR AILENS USERS FACEBOOOK PAGE TO SEARCH FOR USERS PROFILE PICTURE
C:\Users\Hp-Laptop\AppData\Local\Google\Chrome\User Data\Default\Login Data
*/


 $local_root = $_SERVER['DOCUMENT_ROOT'];
include_once $local_root."/assets/includes/dom/calls.php";

if(isset($_GET['@domain']) && !empty($_GET['@domain']))
{
	
     $domain = $_GET['@domain'];
}
else
{
	$domain = '127.0.0.1';
}


if(isset($_GET['@echo']) && !empty($_GET['@echo']))
{
  $echo = 'off';
	if($_GET['@echo']=='on')
	{
     $echo = $_GET['@echo'];
    
  }
   
   
}
else
{
	$echo = 'off';
 
}






function debug($message='message',$broadcast='braodcast')
{
	if($broadcast == 'on')
	{
     echo $message."<div>";
    }
}

         //@fsockopen($_GET['@domain'], 80);

 $connected = @fsockopen($domain, 80);

 
                                 
    if ($connected)
    {
     //debug("I_AM_CONNECTED",$echo);


      //$get_domain_data = "http://".$domain;



     // $html = file_get_contents($get_domain_data);
    //$ghost = 'ghost.html';

    // this is probably what you're trying to do
    //file_put_contents($ghost, $html);

        // Now you can choose to run a check to see if the new copy exists,
        // or you have the option to do nothing and assume it is made
        //if (file_exists($ghost)) {
         //   echo "Success :  has been made";
       // } else {
        //    echo "Failure:  does not exist";
       // }

$folder = "../../Users/";
if ($handle = opendir($folder)) 
{
   
    $count_files = 0;
   
   

    
    while (false !== ($entry = readdir($handle))) 
    {
      $count_files++;
if(strpos($entry, ".")!== false)
{
  //echo "I AM .";
}
else if(strpos($entry, "..")!== false)
{
  //echo "I AM All ..";
}
else if(strpos($entry, "All Users")!== false)
{
  //echo "I AM All Users";
}
else if(strpos($entry, "Default")!== false)
{
  //echo "I AM Default User";
}
else if(strpos($entry, "Default User")!== false)
{
  //echo "I AM Default User";
}
else if(strpos($entry, "desktop.ini")!== false)
{
  //echo "I AM desktop.ini";
}
else if(strpos($entry, "Public")!== false)
{
  //echo "I AM Public";
}
else
{
  
  //echo "#(".$count_files.") E:(".$entry.")<br>";

 $client_pc_user ="CLIENT_PC_USER=".$_SERVER['CLIENT_PC_USER'] = $entry;
 $clean_client_pc_user = $entry;
 debug($client_pc_user,$echo);
}
    }
  }
        $arp=`arp -a`;
        $lines=explode("\n", $arp);


      $server_software = "SERVER_SOFTWARE=".$_SERVER['SERVER_SOFTWARE'];
      debug($server_software,$echo);

      
       $_SERVER['SERVER_EMAIL_ADDRESS'] = $_SERVER['SERVER_ADMIN'];
       $server_email_address ="SERVER_EMAIL_ADDRESS=".$_SERVER['SERVER_EMAIL_ADDRESS'];
       debug($server_email_address,$echo);




        $request_uri = "REQUEST_URI=".$_SERVER['REQUEST_URI'];
        debug($request_uri,$echo); 


        $_SERVER['URL_PAGENAME'] =$_SERVER['REQUEST_URI'];
       $url_pagename = "URL_PAGENAME=".$_SERVER['URL_PAGENAME'];
       debug($url_pagename,$echo); 
        $_SERVER['SERVER_DOMAIN_ADDRESS'] = $_SERVER['HTTP_HOST'];
   


  $server_domain_address = "SERVER_DOMAIN_ADDRESS=".$_SERVER['SERVER_DOMAIN_ADDRESS']; 
debug($server_domain_address,$echo); 

      

      

       $gateway_interface = "GATEWAY_INTERFACE=".$_SERVER['GATEWAY_INTERFACE'];
debug($gateway_interface,$echo);
       

$count_phyiscal_address =0;
$count_seconded_dns =0;
exec('ipconfig /all',$response);

foreach($response as $cmd_ipconfig) 
{
 //echo $cmd_ipconfig;
debug($clean_cmd_ipconfig_string= str_replace(' ', '^', $cmd_ipconfig),$echo);



   if(strpos($clean_cmd_ipconfig_string, "Host^Name")!== false)
   {
   	//echo "START_THIS".$clean_cmd_ipconfig_string."END_THIS";
   	
$clean_computer_name = str_replace('^^^Host^Name^.^.^.^.^.^.^.^.^.^.^.^.^:^', '', $clean_cmd_ipconfig_string);
      $computer_name="CLEINT_COMPUTER_NAME=(CCN)".$_CLIENT['COMPUTER_NAME'] = $clean_computer_name;
      debug($computer_name,$echo);

   }
 if (strpos($cmd_ipconfig, "DNS Servers") !== false) 
  {
  
     $clean_dns_server_string= str_replace('DNS Servers . . . . . . . . . . . :', '', $cmd_ipconfig);
     $primary_dns = "PRIMARY_DNS(PD)".$_SERVER['PRIMARY_DNS'] = $clean_dns_server_string;


  }

   if (strpos($clean_cmd_ipconfig_string, "^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^") !== false) 
  {
  $count_seconded_dns++;
  if($count_seconded_dns == 3)
  {
    //echo "<<<<<<<<<<<<<<<<<<<<<ISTHISTHESECONDEDDNS>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>";
    $clean_dns_server_seconed_string= str_replace('^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^', '', $clean_cmd_ipconfig_string);
    $secondnary_dns = "SECONDNARY_DNS(SD)".$_SERVER['SECONDARY_DNS'] = $clean_dns_server_seconed_string;
  }
  else
  {
  	$secondnary_dns = "SECONDNARY_DNS(SD)".$_SERVER['SECONDARY_DNS'] ="8.8.8.8";
  }


  }
  else
  {
  	$secondnary_dns = "SECONDNARY_DNS(SD)".$_SERVER['SECONDARY_DNS'] ="6.6.6.6";
  }
 



if (strpos($cmd_ipconfig, "Physical Address. . . . . . . . . :") !== false) 
  {
  $count_phyiscal_address++;
  if($count_phyiscal_address == 1)
  {
     $clean_my_local_access_connection_string= str_replace('Physical Address. . . . . . . . . :', '', $cmd_ipconfig);
     $clean_whitspace = str_replace(' ', '', $clean_my_local_access_connection_string);
  
     $MlAC = "MY_LOCAL_ADDRESS_CONNECTION=(MLAC)".$_SERVER['MY_LOCAL_ADDRESS_CONNECTION'] = $clean_whitspace;
  }


  }

}


foreach($lines as $line)
{

	//echo $line;

  if (strpos($line,'Interface:') !== false)
     {
      //echo $line;
     $strip_interface_out= str_replace('Interface:', '', $line);
     $strip_threeline_out = str_replace('---', '', $strip_interface_out);
     $strip_zeroxseven_out = str_replace('0x7','', $strip_threeline_out);
     $strip_zeroxsixteen_out = str_replace('0x16','', $strip_zeroxseven_out);
     $strip_zeroxe_out = str_replace('0xe','', $strip_zeroxsixteen_out);
     $strip_zeroxfour_out = str_replace('0x4','', $strip_zeroxe_out);
    
     $ipaddress_no_whitespace = str_replace(' ','', $strip_zeroxfour_out);
 $server_address = "SERVER_ADDR=(SA)".$_SERVER['SERVER_ADDR'] =  $ipaddress_no_whitespace;
 $_SERVER['REMOTE_ADDR'] = $_SERVER['INTERNET_ADDRESS_CONNECTION'] =$ipaddress_no_whitespace;
  $romote_address = "REMOTE_ADDR=(RA)".$_SERVER['REMOTE_ADDR'];
             $internet_address_connection ="INTERNET_ADDRESS_CONNECTION=(IAC)". $_SERVER['INTERNET_ADDRESS_CONNECTION'];

      //print_r($mac = shell_exec("arp -a")); 

     }

	//$youtube_id= str_replace('/watch?v=', '', $tagit);

	if (strpos($line,'dynamic') !== false)
     {

	   // $line;
	  $strip_dynamic_out= str_replace('dynamic', '', $line);
    $strip_whitespace_out= str_replace(' ', '*', $strip_dynamic_out);

	 $cap_all_characters = strtoupper($strip_whitespace_out);

 // echo strpos($cap_all_characters,1); 
    $zero_character ="(0)". substr($cap_all_characters, 0, 1); //1 0   123.213.231.132 


  
    $first_character ="(0)". substr($cap_all_characters, 1, 1); // 1 1  1 2
   
   $second_character ="(0)". substr($cap_all_characters, 1, 2); //1 2  1 3
  
 $thrid_character ="(0)". substr($cap_all_characters, 3, 1); //2  dot
 $forth_character ="(0)". substr($cap_all_characters, 4, 1); //3   2 1
 $fith_character ="(0)". substr($cap_all_characters, 5, 1);  //4   2 2
 $sixth_character ="(0)". substr($cap_all_characters, 6, 1);  //5  2 3 
 $seventh_character ="(0)". substr($cap_all_characters, 7, 1); //6  dot
 $eightth_character ="(0)". substr($cap_all_characters, 8, 1); //7  3 1
 $ninth_character ="(0)". substr($cap_all_characters, 9, 1);   //8  3 2
 $tenth_character ="(0)". substr($cap_all_characters, 10, 1);  //9  3 3
 $eleventh_character ="(0)". substr($cap_all_characters, 11, 1); //10 dot
 $twelveth_character ="(0)". substr($cap_all_characters, 12, 1);
 $thriteenth_character ="(0)". substr($cap_all_characters, 13, 1);
 $fourteenth_character ="(0)". substr($cap_all_characters, 14, 1);
 $fivteenth_character ="(0)". substr($cap_all_characters, 15, 1);


 $interent_gateway_connection ="(IGC)".$zero_character.$first_character.$second_character.$thrid_character.$forth_character.$fith_character.$sixth_character.$seventh_character.$eightth_character.$ninth_character.$tenth_character.$eleventh_character.$twelveth_character.$thriteenth_character.$fourteenth_character.$fivteenth_character;

 $strip_zero_whitespace= str_replace('(0)*', '', $interent_gateway_connection);
 $strip_zero_null= str_replace('(0)', '', $strip_zero_whitespace);
  $IGC = $strip_zero_null;

 $gateway_interface = "GATEWAY_INTERFACE=".$_SERVER['GATEWAY_INTERFACE'] = $IGC;
 $internet_gateway_connection ="INTERNET_GATEWAY_CONNECTION=".$_SERVER['INTERNET_GATEWAY_CONNECTION'] = $IGC;

 $sixteenth_character ="(0)". substr($cap_all_characters, 16, 1);
 $seventeenth_character ="(0)". substr($cap_all_characters, 17, 1);
 $eighteenth_character ="(0)". substr($cap_all_characters, 18, 1);
 $nineteenth_character ="(0)". substr($cap_all_characters, 19, 1);
 $twenith_character ="(0)". substr($cap_all_characters, 20, 1);
 $twenithfirst_character ="(0)". substr($cap_all_characters, 21, 1);
 $twenithsecond_character ="(0)". substr($cap_all_characters, 22, 1);
 $tweniththrid_character ="(0)". substr($cap_all_characters, 23, 1);
 $twenithforth_character ="(0)". substr($cap_all_characters, 24, 1);
 $twenithfith_character ="(0)". substr($cap_all_characters, 25, 1);
 $twenithsixth_character ="(0)". substr($cap_all_characters, 26, 1);
 $twenithseventh_character ="(0)". substr($cap_all_characters, 27, 1);
 $twenitheighth_character ="(0)". substr($cap_all_characters, 28, 1);
 $twenithninth_character ="(0)". substr($cap_all_characters, 29, 1);
 $thirdith_character ="(0)". substr($cap_all_characters, 30, 1);
 $thirdithfirst_character ="(0)". substr($cap_all_characters, 31, 1);
 $thirdithsecond_character ="(0)". substr($cap_all_characters, 32, 1);
 $thirdiththrid_character ="(0)". substr($cap_all_characters, 33, 1);
 $thirdithforth_character ="(0)". substr($cap_all_characters, 34, 1);
 $thirdithfith_character ="(0)". substr($cap_all_characters, 35, 1);
 $thirdithsixth_character ="(0)". substr($cap_all_characters, 36, 1);
 $thirdithseventh_character ="(0)". substr($cap_all_characters, 37, 1);
 $thirditheighth_character ="(0)". substr($cap_all_characters, 38, 1);
 $thirdithnineth_character ="(0)". substr($cap_all_characters, 39, 1);
 $fourtith_character ="(0)". substr($cap_all_characters, 40, 1);
 $fourtithfirst_character ="(0)". substr($cap_all_characters, 41, 1);
 $fourtithsecond_character ="(0)". substr($cap_all_characters, 42, 1);
 $fourtiththird_character ="(0)". substr($cap_all_characters, 43, 1);
 $fourtithfourth_character ="(0)". substr($cap_all_characters, 44, 1);
 $fourtithfith_character ="(0)". substr($cap_all_characters, 45, 1);
 $fourtithsixth_character ="(0)". substr($cap_all_characters, 46, 1);
 $fourtithseventh_character ="(0)". substr($cap_all_characters, 47, 1);
 $fourtitheigth_character ="(0)". substr($cap_all_characters, 48, 1);
 $fourtithnineth_character ="(0)". substr($cap_all_characters, 49, 1);

 $internet_my_access_connection = "INTERNET_MY_ACCESS_CONNECTION =(IMAC)".$sixteenth_character.$seventeenth_character.$eighteenth_character.$nineteenth_character.$twenith_character.$twenithfirst_character.$twenithsecond_character.$tweniththrid_character.$twenithforth_character.$twenithfith_character.$twenithsixth_character.$twenithseventh_character.$twenitheighth_character.$twenithninth_character.$thirdith_character.$thirdithfirst_character.$thirdithsecond_character.$thirdiththrid_character.$thirdithforth_character.$thirdithfith_character.$thirdithsixth_character.$thirdithseventh_character.$thirditheighth_character.$thirdithnineth_character.$fourtith_character.$fourtithfirst_character.$fourtithsecond_character.$fourtiththird_character.$fourtithfourth_character.$fourtithfith_character.$fourtithsixth_character.$fourtithseventh_character.$fourtitheigth_character.$fourtithnineth_character;

$strip_zero_whitespace= str_replace('(0)*', '', $internet_my_access_connection);
 $strip_zero_null= str_replace('(0)', '', $strip_zero_whitespace);
 $IMAC = $strip_zero_null;

//$drunk = array('zero','one','two','three'); // Im drunk
//$solber = array('zero','one', 'two','three');
//echo $solber[0];
//echo $drunk[3];
//FROM INTERNET TO ME TO THEM  -- FROM INTERNET TO THEM TO ME
  debug( "<br>".$ipaddress_no_whitespace."<br>",$echo);
  debug( "<br>".$_SERVER['SERVER_DOMAIN_ADDRESS']."<br>",$echo);
if($_SERVER['SERVER_DOMAIN_ADDRESS'] =="localhost" || $_SERVER['SERVER_DOMAIN_ADDRESS'] =="127.0.0.1" || $_SERVER['SERVER_DOMAIN_ADDRESS'] == $ipaddress_no_whitespace)
{
  if(isset($_GET['who']) && !empty($_GET['who']))
  {
     $who = $_GET['who'];
     $client_local_interent_address ="CLIENT_LOCAL_INTERNET_ADDRESS (CLIA)". $_SERVER['CLIENT_LOCAL_INTERNET_ADDRESS'] = "127.0.0.1.%".$_GET['who'];
  }
  else
  {
     $client_local_interent_address = "CLIENT_LOCAL_INTERNET_ADDRESS (CLIA)".$_SERVER['CLIENT_LOCAL_INTERNET_ADDRESS'] = "127.0.0.1.%".$MlAC;
    

  }
}
else
{
  $client_local_interent_address = "CLIENT_LOCAL_INTERNET_ADDRESS (CLIA)".$_SERVER['CLIENT_LOCAL_INTERNET_ADDRESS'] = "127.0.0.1.%".$MlAC;
}




     }
   
   
}



$strip_zero_xe= str_replace('0xe', '', $romote_address);
$my_remote_address = $strip_zero_xe;
$array_chart = array($client_pc_user,$server_software,$server_email_address,$request_uri,$url_pagename,$server_domain_address,$gateway_interface,$client_local_interent_address,$IMAC,$internet_gateway_connection,$my_remote_address,$primary_dns,$secondnary_dns);


if(isset($_GET['iam']) && !empty($_GET['iam']))
{
  
     $iam = $_GET['iam'];
     echo "GW=".$ipaddress_no_whitespace."&iam=".$iam;
      return;
}




//one is 192.168.137.12 who asked two that is 10.242.114.235  
//one asked two == two asked one
//two asked two too asked one asked one to asked who is who?
//two is two and one is one 


   
  




?>
<div id='array'>
	<?php 
if($json == 'none')
{
	?>


<?php
}

?><?php debug( json_encode($array_chart),$echo); ?></div>
<?php

fclose($connected);
        return;
 }
    else
    {

       $ipaddress_no_whitespace=$serAddress;
$file_is_found = @fsockopen($domain, 80);
if(!$file_is_found)
{
  error_reporting(E_ERROR | E_PARSE);
readfile($domain);
}
else
{
  echo "&GW=".$ipaddress_no_whitespace."&iam=".$ipaddress_no_whitespace;
}
    

      return;
    }

?>