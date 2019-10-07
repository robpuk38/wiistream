<?php
header("Cache-Control: no-cache, must-revalidate");
$local_root = $_SERVER['DOCUMENT_ROOT'];
include $local_root."/discovery/includes/database/connection.php";
include $local_root."/cinfo.php";
include $local_root."/assets/css.php";


$clean_my_gateway = str_replace("(IGC)", '', $IGC);
$WHO_IS_MY_SHARE_STREAM =  $clean_my_gateway;
$AND_WHO_AM_I = $ipaddress_no_whitespace;

if(isset($_GET['record']) && !empty($_GET['record']))
{
	$record = $_GET['record'];
}
else
{
	$record = 'false';
}






if(isset($MYSQLCrash))
{
	if($MYSQLCrash == "false")
	{
	echo "<br>NO DATABASE CONNECTION";
	return;
    }
    else
    {






if(!isset($_GET['static_device']))
{
    $_GET['static_device'] = md5($clean_client_pc_user.$clean_computer_name,false);
	$web = "http://".$AND_WHO_AM_I."?static_device=".$_GET['static_device']."&question=check";
    ?>
<script>
	var linkme = '<?php echo $web ?>';
window.location.href = linkme;
</script>

<?php
}


if(isset($_GET['static_device']))
{

	  $sql = "SELECT * FROM user  

      WHERE static_device = '" . $_GET['static_device']  . "' LIMIT 1"; 

      $query = mysqli_query($conn,$sql) or trigger_error("Query Failed: " . mysqli_error()); 

      if (mysqli_num_rows($query) < 1) 
     {
  	   echo "I AM NOT THE OWNER OF THIS SYTEM AND I AM NOT REGISTERED IN THE OWNERS DATABASE<br>";
  	  


    $uid=$clean_computer_name;
	$uname = $clean_client_pc_user;
	$passwd = '0';
	$security_level = 'private';
	$static_device = $_GET['static_device'];
    $deviceid = $_GET['static_device'];
    //PIN IS ASKED ON EACH LOGOUT LOGIN 
	$pinpal = '0';
	$step_in = 'step_in_1';
	$is_login = 'is_login_no';
	$final= '0';
    $reminder = $AND_WHO_AM_I;

$sql = 'INSERT INTO user '.

      '(uid,uname,passwd,security_level,static_device,deviceid,pinpal,step_in,is_login,final,reminder) '.

      'VALUES ( "'.$uid.'","'.$uname.'","'.$passwd.'","'.$security_level.'","'.$static_device.'","'.$deviceid.'","'.$pinpal.'","'.$step_in.'","'.$is_login.'","'.$final.'","'.$reminder.'")';

      $res = mysqli_query($conn,$sql) or die(mysqli_error());

$sql = 'INSERT INTO user_images '.

      '(uid,static_device) '.

      'VALUES ( "'.$uid.'","'.$static_device.'")';

      $res = mysqli_query($conn,$sql) or die(mysqli_error());

$sql = 'INSERT INTO user_details '.

      '(uid,static_device) '.

      'VALUES ( "'.$uid.'","'.$static_device.'")';

      $res = mysqli_query($conn,$sql) or die(mysqli_error());
      


$_GET['static_device'] = md5($clean_client_pc_user.$clean_computer_name,false);
	$web = "http://".$AND_WHO_AM_I."?static_device=".$_GET['static_device']."&question=check";
    ?>
<script>
	var linkme = '<?php echo $web ?>';
window.location.href = linkme;
</script>
    <?php

  	  return;
     }

  

  if (mysqli_num_rows($query) == 1) 

  { 

  $row = mysqli_fetch_assoc($query);
 ?>
<div id="REGISTRATION_INFO">
	<?php 

	$iam=$row['iam'];
	if($iam > 1)
	{
		echo "I AM NOT THE REAL OWNER OF THIS ACCOUNT TAKE ME TO MY PAGE FROM THE OWNERS SYSTEM";
		return;
	}
echo "USER_ID_DEVICE:". $uid =$row['uid']."<br>";
$uname =$row['uname'];
$passwd=$row['passwd'];

$final= md5($passwd,false);
$security_level=$row['security_level'];
$static_device =$row['static_device'];
echo "DEVICE_ID:".$deviceid=$row['deviceid']."<br>";
echo "PINPAL:".$pinpal=$row['pinpal']."<br>";
echo "STEP_IN:".$step_in=$row['step_in']."<br>";
$is_login=$row['is_login'];
$final=$row['final'];
echo "REMINDER:".$reminder=$row['reminder']."<br>";
?>
</div>
<?php

if($final == '0')
{
	?>



	<div id="REGISTRATION_BG">
  		<div id="STEP_IN_BUTTON" onclick="registration('s1')"></div>


<div id="CENTERMEREGFORM">
	
<input type="password" id="passwd" placeholder="Password" onKeyUp="password(this.value)">
<input type="text" id="pinpal" placeholder="Pin" onKeyUp="pinpals(this.value)">
<div id="error_message"></div>
<div class="checkboxOneOption">
        <input id="checkboxOneInputOption" name="security_level" type="checkbox"  onChange="security_levels(this.value)"/>
        <label id='ascheckboxOneInputOption' for="checkboxOneInputOption"></label>
        </div>


        <div id="yes_pass" onclick="next_step('yes_pass')"></div>
         <div id="noe_pass" onclick="next_step('noe_pass')"></div>
</div>


<script>
	var link = 'http://'+'<?php echo $AND_WHO_AM_I; ?>'+'?static_device='+'<?php echo $_GET['static_device'] ?>&question=check';
	var username = '<?php echo $clean_client_pc_user; ?>';
var security_level = 'private';
var pinpal ='pinpal';
var passwd = 'passwd';
var passed_password = 'false';
function next_step(step)
{
	console.log(step);

	if(step == 'yes_pass')
	{
		$('#yes_pass').fadeOut('fast');
		$('#noe_pass').fadeOut('fast');
		$('#passwd').fadeOut('fast');
		$('#pinpal').fadeIn('fast');
		passed_password = 'true';
	}
	if(step == 'noe_pass')
	{
		$('#noe_pass').fadeOut('fast');
		$('#yes_pass').fadeOut('fast');
		$('#passwd').val('');
		passwd = 'passwd';
		passed_password = 'false';
	}
}
function security_levels(p1)
{
	
 
 var position = $('#ascheckboxOneInputOption').position().left;


if(position > '100')
{
	
	security_level = 'public';
	
}
else
{
	security_level = 'private';
	
}
	
	return security_level;
}
 


function check_white_space(cleantext)
{
	//console.log("FUNCTION:"+cleantext);
	if(cleantext == 'passwd')
	{
	 $("#passwd").css('border-color','red');
	 $('#error_message').html('No Space Bar White Space');
	}
	else
	{
		
	
	for (var i = cleantext.length -1; i >= 0; i--) 
        {
	
	         var clean_white_space = cleantext[i];
	         
	         if(clean_white_space.indexOf(' ')>= 0)
	         {
	         	//console.log("amih")
	         	$('#passwd').val('');
	         	passwd = 'passwd';
	         	if(passed_password == 'false')
		{
			$('#yes_pass').fadeOut('fast');
		$('#noe_pass').fadeOut('fast');
		}
	         	
	         }
	        
        }
    }
}

 function password(p2)
 {
     


    
    check_white_space(p2);


if(p2 == 'undefined' || p2 == '' || p2 == 'passwd' || p2.indexOf(' ')>= 0
	&& passwd == 'undefined' || passwd == '' || passwd == 'passwd' || passwd.indexOf(' ')>= 0)
{
	//console.log("Error p2:"+p2+" passwd:"+passwd);
	$("#passwd").css('border-color','red');
	 $('#error_message').html('Please Provide Your Accounts Privacy Password');
	 $('#yes_pass').fadeOut('fast');
		$('#noe_pass').fadeOut('fast');
$("#passwd").focus();
}
else
{


	
	if(p2.length < 8)
	{
     // password must be atleast 8 characters warning
     $("#passwd").css('border-color','red');
     //console.log('password must be atleast 8 characters warning');
     $('#error_message').html('Password Needs At Least 8 Characters');
     
     $('#yes_pass').fadeOut('fast');
		$('#noe_pass').fadeOut('fast');
     
	
	}
	else
	{
		if(passed_password == 'false')
		{
		$("#passwd").css('border-color','green');
        // warning passed 
        // console.log('warning passed');
         $('#error_message').html('Your Password Is<br>'+p2+'<br>Is This Correct?');
           //next step set pin yes or no

        $('#yes_pass').fadeIn('fast');
        $('#noe_pass').fadeIn('fast');

      return passwd = p2;
      }

	}





}


 	return passwd = p2;
 	
 }

 function pinpals(p3)
 {
return pinpal = p3;
 }
 var wait_time = 0;
function reg_memory()
{
 wait_time++;

 if(wait_time > 15)
 {
password(passwd);
pinpals(pinpal);
security_levels(security_level);
 }

}
setInterval(function(){ reg_memory() }, 100);

function registration(d)
{

	
	if(d== 's1')
	{
		//do something

		 $.post("index.php",{ 

              security_level:security_level,
pinpal:pinpal,
uname:username,
passwd:passwd
      
      

      

    },function(data){

      
window.location.href = link;

    });
	}
}
</script>

<script src="/discovery/js/jquery.min.js"></script>
<?php


if(isset($_POST['uname']) && isset($_POST['passwd'])  && isset($_POST['pinpal']) && isset($_POST['security_level']))
{
	
	$passwd = $_POST['passwd'];
	
	$pinpal = $_POST['pinpal'];
	$security_level =$_POST['security_level'];
	$is_login = 'is_login_yes';
	$final= md5($passwd,false);
   mysqli_query($conn,"UPDATE user  SET passwd='".$passwd."', final='".$final."', security_level ='".$security_level."', is_login='".$is_login."', pinpal='".$pinpal."'  WHERE static_device='".$_GET['static_device']."'");



				 
				
  }


return;

?>

  	</div>

	<?php
	return;
}

?>
 	
 

<?php


$sql = "SELECT * FROM user_images  

    WHERE static_device = '" . $static_device  . "' LIMIT 1"; 

  $query = mysqli_query($conn,$sql) or trigger_error("Query Failed: " . mysqli_error()); 
if (mysqli_num_rows($query) == 1) 

  { 

  $row = mysqli_fetch_assoc($query);
  $bg =$row['bg']."?".time();
  $profile_pic =$row['profile_pic']."?".time();
}

if(isset($_GET['uins']) && !empty($_GET['uins']))
{


	
//UNIQUE IDINIFINCATION NUMBER SYSTEM == uins=2
$sql = "SELECT * FROM user_details  

    WHERE who = '" . $_GET['uins']  . "' LIMIT 1"; 

  $query = mysqli_query($conn,$sql) or trigger_error("Query Failed: " . mysqli_error()); 

if (mysqli_num_rows($query) == 1) 

  { 

  $row = mysqli_fetch_assoc($query);
  $who =$row['who'];
  $sD =$row['static_device'];



if($sD != md5($clean_client_pc_user.$clean_computer_name,false))
{



$sql = "SELECT * FROM user  

    WHERE static_device = '" . $sD . "' LIMIT 1"; 

  $query = mysqli_query($conn,$sql) or trigger_error("Query Failed: " . mysqli_error()); 

 

  

  if (mysqli_num_rows($query) == 1) 

  { 

  $row = mysqli_fetch_assoc($query);
  echo "USER_ID_DEVICE:". $uid =$row['uid']."<br>";
$them_uname =$row['uname'];
echo "PASSWORD:".$them_passwd=$row['passwd']."<br>";
$them_security_level=$row['security_level'];
$them_static_device =$row['static_device'];
echo "DEVICE_ID:".$them_deviceid=$row['deviceid']."<br>";
echo "PINPAL:".$them_pinpal=$row['pinpal']."<br>";
echo "STEP_IN:".$them_step_in=$row['step_in']."<br>";
$them_is_login=$row['is_login'];
echo "FINAL:".$them_final=$row['final']."<br>";
echo "REMINDER:".$them_reminder=$row['reminder']."<br>";


$sql = "SELECT * FROM user_images  

    WHERE static_device = '" . $them_static_device  . "' LIMIT 1"; 

  $query = mysqli_query($conn,$sql) or trigger_error("Query Failed: " . mysqli_error()); 
if (mysqli_num_rows($query) == 1) 

  { 

  $row = mysqli_fetch_assoc($query);
  $them_bg =$row['bg']."?".time();
  $them_profile_pic =$row['profile_pic']."?".time();
}


  }


	?>

<div id="them_bg"><img src="<?php echo $them_bg; ?>" width="100%" height="100%"/></div>
<div id="someones_profile_pic_mask"></div>
<div id="someones_pic_frame"><img id="roundme" src="/wiistream/images/user_frame.png" width="100%" height="100%"/></div>
<div id="someones_pic"><img id="roundme" src="<?php echo $them_profile_pic; ?>" width="100%" height="100%"/></div>
<div id="someones_name"><?php echo $them_uname; ?></div>
	<?php
}



}



	

	
}
else
{
	$sD = md5($clean_client_pc_user.$clean_computer_name,false);
}


 
if($is_login == 'is_login_no' || $security_level == 'private' && $sD != md5($clean_client_pc_user.$clean_computer_name,false) )
{


?>
<div id="BG">
	
	<img src="<?php echo $bg; ?>" width="100%" height="100%"/>
</div>

<div id="user_profile_pic_mask"></div>
<div id="user_pic_frame"><img id="roundme" src="/wiistream/images/user_frame.png" width="100%" height="100%"/></div>
<div id="user_pic"><img id="roundme" src="<?php echo $profile_pic; ?>" width="100%" height="100%"/></div>
<div id="submit_pin_btn" onclick="get_pal_code()"></div>
<div id="user_who"><?php echo $uname; ?></div>
<div id="pinnumber">
    <input id="yourpin" type="text" placeholder="PIN" onKeyUp="get_the_pinpal_keypressed(this.value);">
  </div>
  <div id="status_log"></div>
<script>
var static_device_ = '<?php echo $static_device ?>';
var pinpal_ ='pinpal';
var final_ = '<?php echo $final ?>';
var link = 'http://'+'<?php echo $AND_WHO_AM_I; ?>/?question=check';
 

function get_the_pinpal_keypressed(key)
{
	
	 pinpal_ = key;
	 //
	return pinpal_;
}
 




function get_pal_code()
{
	 $.post("pinpal.php",{ 
//FIRST VAR POST VAR FIRST  : SECOND VAR JAVA VAR HOLDER
              static_device:static_device_,
pinpal:pinpal_,
final:final_
      
      

      

    },function(data){

     $( "#yourpin" ).val("");


if(data == 'WM')
{
	//console.log("WELCOME_MEMBER");
	window.location.href = link;
}
else
{
	//console.log(data);

	$('#status_log').html(data);
}




    });
}
var help_post_time =0;
var wait =0;
function pinpal_memory()
{
 
wait++;
//console.log(wait);
if(wait > 3)
{

	//console.log('WHAT IS THIS?'+pinpal_);
$( "#yourpin" ).focus();



get_the_pinpal_keypressed(pinpal_);

$("#yourpin" ).keypress(function( event ) {
	



  if ( event.which == 13 ) {
  	help_post_time++;
	if(help_post_time ==1)
	{
  	//console.log('ENTER help time:'+help_post_time);
  	help_post_time = 0;
  	get_pal_code();
     return;
  }
 
}
  
});
//console.log('help time:'+help_post_time);
}
}
setInterval(function(){ pinpal_memory() }, 333);



</script>

<script src="/discovery/js/jquery.min.js"></script>
<?php
// CHECK STATIC DEVICE WITH YOUR PIN IF MATCHS PIN EXCEPTED IF DEVICE IS UNKNOWN
//	REQUEST PASSWORD;
echo "USER NEEDS A LOGIN BUTTON AND PINPAL KEY";
	return;
}

?>
  



<script>


</script>

<script src="/discovery/js/jquery.min.js"></script>

  <?php

			

  }
  else
  {
  	
  	echo "WAS I EVER HERE?";
  	return;
 
  }
  
}




    }
}
else
{

echo "WHATS THIS";
return;


}






//START->FULL->SESSION
if(isset($_GET['static_device']) && isset($_GET['question']) && isset($_GET['GW']) && isset($_GET['iam']))
{



?>
<!DOCTYPE html>
<html>
<head>
					<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
				






<div id="front_fade_screen"></div>

<div id="mainmask"></div>
<div id="main" onclick="mainmenuclick()"></div>
<div id="Site_Header_Load"></div>
<div id="Site_Footer_Load"></div>
<div id="Site_Logo_Load"></div>
<a href="./"><div id="Site_Logo_Link"></div></a>
<div id="Loader_Spinner"></div>
<div id="Loader_Spinner_Center"></div>




<div id="front_message_screen"></div>

<script>
var menulick = true;
function mainmenuclick()
{

     if(menulick == true)
     {
     	$('#main').css('background','url("/wiistream/images/spin7.fw.png")');
	$('#main').css('background-size','cover');
	$('#main').css('opacity','1');
	$('#main').css('width','10%');
	$('#main').css('height','21%');
	
	


     	menulick = false;
     }  
     else if(menulick == false)  
     {
     	$('#main').css('opacity','0');
     	
     	
     	menulick = true;
     }              
	



}


function take_domain(url)
 {
	 //console.log("FADING IN NOW");
	 turneitoff();
    $('#containit').fadeIn('slow');
  
    $('#containit').html('<iframe id="index_frame" width='+$(window).width()+' heigth='+$(window).height()+' src='+url+' scrolling="no"  frameborder="0" allowfullscreen></iframe>');
   



   
}

function turneitoff()
{
	$('#REGISTRATION_BG').fadeOut('fast');
	$('#REGISTRATION_INFO').fadeOut('fast');
}

var t =0;
function screen_update(){
t++;
if(t == 1)
{

	$('#Site_Logo_Load').fadeIn('slow');
	$('#Loader_Spinner').fadeIn('slow');
	$('#Loader_Spinner_Center').fadeIn('slow');
	
	$("#front_message_screen").fadeIn('slow');
	$("#front_message_screen").html('One Moment Please');
}
if(t == 3)
{
	$("#front_message_screen").html('Loading Layout');
}
if(t == 6)
{
	$("#front_message_screen").html("Loading Background");

}
if(t >7)
{
	$('#Site_Header_Load').fadeOut('fast');
}
if(t == 9)
{
	
	$('#front_fade_screen').fadeOut('slow');
	$("#front_message_screen").html("Finished");

}
if(t == 12)
{
	$("#front_message_screen").html("Loading Applications");
}
if(t == 15)
{
	$("#front_message_screen").html("Finished");
}
if(t == 18)
{
	$("#front_message_screen").html("Loading Start Menu");
	
	$('#Site_Footer_Load').fadeOut('fast');
}
if(t == 21)
{
	$("#front_message_screen").html("Layout Finished");
	
}
if(t == 22)
{
	$('#Site_Logo_Load').fadeOut('fast');

}
if(t == 24)
{
	$("#front_message_screen").html("Welcome To Wiistream Network");

}

if(t > 26)
{

	
	$("#front_message_screen").fadeOut('fast');
	
	
	$('#Loader_Spinner').fadeOut('slow');
	

	
	
	$('#Loader_Spinner_Center').fadeOut('slow');

	$('#Site_Logo_Link').fadeIn('slow');
	
}

var Site_Header_Load = $("#Site_Header_Load");
 Site_Header_Load.animate({height: '10%'}, "slow");
  Site_Header_Load.animate({width: '100%'}, "slow");

  var Site_Footer_Load = $("#Site_Footer_Load");
 Site_Footer_Load.animate({height: '15%'}, "slow");
  Site_Footer_Load.animate({width: '100%'}, "slow");

 var Site_Logo_Load = $("#Site_Logo_Load");
 Site_Logo_Load.animate({height: '190%'}, "slow");
  Site_Logo_Load.animate({width: '65%'}, "slow");
 

get_screen_size(t);
}
setInterval(function(){ screen_update() }, 1000);
function get_screen_size(t)
{
	//console.log("screen:time:"+t);
	$("#containit").css('width' ,''+$(window).width()+'');
		$("#containit").css('height' ,''+$(window).height()+'');
		$("#myframe").css('width' ,''+$(window).width()+'');
        $("#myframe").css('height' ,''+$(window).height()+'');
}

</script>
</head>


<body onLoad="take_domain('http://<?php echo $AND_WHO_AM_I ?>/wiistream/index.php?static_device=<?php echo $_GET['static_device'] ?>&record=<?php echo $record ?>&who=<?php echo  $clean_client_pc_user ?>')">

					<div id="containit"></div>
</body>

					
<script src="/discovery/js/jquery.min.js"></script>

</html>


	<?php
	return;
}
//END->FULL->SESSION


if(isset($_GET['question']) == 'check')
{
  $web = "http://".$AND_WHO_AM_I."?static_device=".$_GET['static_device']."&question=checked";


?>
<script src="/discovery/js/jquery.min.js"></script>
<script>
	var My_Ip = '<?php echo $AND_WHO_AM_I ?>';
var Internet_Gateway_Connection = '<?php echo $WHO_IS_MY_SHARE_STREAM ?>';
function WHO_AM_I()
{

	console.log('http://'+My_Ip+'/cinfo.php?@domain=http://'+Internet_Gateway_Connection+'/cinfo.php?iam='+My_Ip);
	
		

		 $.post('http://'+My_Ip+'/cinfo.php?@domain=http://'+Internet_Gateway_Connection+'/cinfo.php?iam='+My_Ip,{ 

      
    },function(data){

      console.log(data);

      
      //var my_shared_connection = data.substr(data.length - 17);
      
    
	var linkme = '<?php echo $web ?>'+data;
window.location.href = linkme;


    });
	
}
WHO_AM_I();
</script>




<?php
return;

}


?>



                   