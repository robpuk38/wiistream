<?php
$serAddress=$_SERVER['HTTP_HOST'];
if(isset($_GET['record']) && !empty($_GET['record']))
{
	$record = $_GET['record'];
}
else
{
	$record = 'false';
}
if(isset($_GET['who']) && !empty($_GET['who']))
{
	 $clean_client_pc_user = $_GET['who'];
}
else
{
	//username definition not found
	 $clean_client_pc_user = 'undefined';
}


if(isset($_GET['static_device']))
{

	?>

<style>

#_PRIVATE_
{
	    
		bottom: 0.5%;
		left: 0.5%;
		
		width: 10%;
		height: 10%;
		
		
        background-image: url('/wiistream/images/security-Icon-private.png');
	
	background-size: 45%;
	background-repeat: no-repeat;
	cursor: pointer;
		position:fixed;
		
		display: block;
		z-index: 151;
}


#_PRIVATE_:hover
{
	   
		
		
        background-image: url('/wiistream/images/security-Icon-priaveth.png');
	
	background-size: 45%;
	background-repeat: no-repeat;
	cursor: pointer;
	
		
		
}

#_PRIVATE_:active
{
	   
		
		
        background-image: url('/wiistream/images/security-Icon-priaveth.png');
	
	background-size: 50%;
	background-repeat: no-repeat;
	cursor: pointer;
	
		
		
}

#_PUBLIC_
{
	    bottom: 0.5%;
		left: 0.5%;
		
		width: 10%;
		height: 10%;
		background-image: url('/wiistream/images/security-Icon-public.png');
	
	background-size: 45%;
	background-repeat: no-repeat;
		
		cursor: pointer;

		position:fixed;
		
		display: block;
		z-index: 151;
}

#_PUBLIC_:hover
{
	    
		background-image: url('/wiistream/images/security-Icon-publich.png');
	
	background-size: 45%;
	background-repeat: no-repeat;
		
		cursor: pointer;

}

#_PUBLIC_:active
{
	    
		background-image: url('/wiistream/images/security-Icon-publich.png');
	
	background-size: 50%;
	background-repeat: no-repeat;
		
		cursor: pointer;

		
}

	




#REGISTRATION_INFO_
	{
		top:20%;
		bottom: 40%;
		left: 30%;
		right: 30%;
		width: 40%;
		height: 30%;
		background: black;
		color: white;
		position: fixed;
		overflow: hidden;
		display: none;
		z-index: 151;

	}
</style>
	<?php
	$local_root = $_SERVER['DOCUMENT_ROOT'];
include $local_root."/discovery/includes/database/connection.php";

	$sql = "SELECT * FROM user  

    WHERE static_device = '" . $_GET['static_device']  . "' LIMIT 1"; 

  $query = mysqli_query($conn,$sql) or trigger_error("Query Failed: " . mysqli_error()); 

 

  

  if (mysqli_num_rows($query) == 1) 

  { 

  $row = mysqli_fetch_assoc($query);
 ?>
<div id="REGISTRATION_INFO_">
	<?php 

$is_login=$row['is_login'];
$final=$row['final'];
$security_level=$row['security_level'];
$static_device=$row['static_device'];
 ?>
</div>

<?php
if($is_login =='is_login_yes')
{

?>

<!DOCTYPE html>
<html>
<head>



					<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
				</head>

<?php 
$local_root = $_SERVER['DOCUMENT_ROOT'];
include $local_root."/wiistream/css/style.php";
?>

<script src="js/requestanimationframe.polyfill.js"></script>
<script src="js/sphere.js"></script>

<div id="Main_Background"><img src="/wiistream/images/bg.fw.png" width="100%" height="100%" /></div>
<div id="Main_Background_"></div>
<div id="Top_Background"></div>

	<canvas id="sphere" width="500" height="500"></canvas>

			<div id="clouds"></div>
		
<div id="Earth_Time"><div id="fps"></div></div>
<div id="exit_policy" onclick="exit_policy()">X</div>
<div id="policys_screen"></div>


<div id="logout_btn" onclick="logout()"></div>
<div id="plutotv_appicon_btn" onclick="buttons('http://<?php echo $_SERVER['HTTP_HOST'] ?>/validate.php?domain=http://pluto.tv/')"></div>
<div id="sonycrackle_appicon_btn" onclick="buttons('http://<?php echo $_SERVER['HTTP_HOST'] ?>/validate.php?domain=https://www.sonycrackle.com/movies/')"></div>

<div id="putlocker_tv_guide_list" onclick="putlocker()"></div>
<div id="putlockers_name_appicon_btn" onclick="buttons('http://<?php echo $_SERVER['HTTP_HOST'] ?>/validate.php?domain=https://www.putlockers.name/movies/')"></div>
<div id="putlocker_hd_is_appicon_btn" onclick="buttons('http://<?php echo $_SERVER['HTTP_HOST'] ?>/validate.php?domain=https://www.putlocker-hd.is/')"></div>

<div id="discover_appicon_btn" onclick="buttons('/discovery/index.php')"></div>


<div id="record_btn_on" onclick="record('true')"></div>
<div id="record_btn_off" onclick="record('false')"></div>








<div id="preload_fade_movie_panle"></div>



<div id="screenfade"></div>

<div id="c_a_h_"></div>


<div id="player" style="display: none;"></div>


<div id="Bottom_Background"></div>
<div id="wiiguide" onclick="buttons('null')"></div>
<div id="information" onclick="information();"></div>
<div id="privacy" onclick="Policy('privacy');">Privacy</div>
<div id="terms" onclick="Policy('terms');">Terms</div>

<?php
if($security_level == 'private')
{
	?>
<div id="_PRIVATE_" onclick="set_security('<?php echo $static_device ?>','<?php echo $final ?>','public')"></div>


	<?php
}
else if($security_level == 'public')
{
	?>

<div id="_PUBLIC_" onclick="set_security('<?php echo $static_device ?>','<?php echo $final ?>','private')"></div>

	<?php
}


?>


<script>

  
  
  var info = true;
function information()
{
	if(info == true)
	{
	$("#privacy").fadeIn('fast');
	$("#terms").fadeIn('fast');
	info = false;
	}
	else
	{
		$("#privacy").fadeOut('fast');
	    $("#terms").fadeOut('fast');
		info =true;
	}
	
	
}

var final_='<?php echo $final ?>';
var static_device='<?php echo $static_device ?>';
var link = 'http://'+'<?php echo $serAddress; ?>?now=<?php echo time() ?>';
function logout()
{
	console.log('OK');
	 $.post("../pinpal.php?static_device="+static_device,{
final:final_


       },function(data){

     

     if(data=='GB')
     {
     	console.log("GOODBYE");
     	window.location.href = link;
     }
     else
     {
     	console.log(data);
     }

});

}
	function exit_policy()
	{
		 $("#exit_policy").fadeOut('fast');
		$("#policys_screen").fadeOut('fast');
		$("#privacy").fadeOut('fast');
	    $("#terms").fadeOut('fast');
		info =true;
		return;
	}
function Policy(v)
{
	if(v == 'privacy')
	{
        $("#exit_policy").fadeOut('fast');
		$("#exit_policy").fadeIn('fast');
		$("#policys_screen").fadeOut('fast');
		$("#policys_screen").fadeIn('fast');
		$("#policys_screen").load('privacy.php');
		return;
	}
	if(v == 'terms')
	{
		$("#exit_policy").fadeOut('fast');
		$("#exit_policy").fadeIn('fast');
		$("#policys_screen").fadeOut('fast');
		$("#policys_screen").fadeIn('fast');
		$("#policys_screen").load('terms.php');
		return;
	}
} 


function record(v)
{
	is_recording = v;
	copy_movie();

	if(v == 'true')
	{
     $('#record_btn_off').fadeIn('fast');
     $('#record_btn_on').fadeOut('fast');
	}
	else if( v == 'false')
        {
$('#record_btn_on').fadeIn('fast');
$('#record_btn_off').fadeOut('fast');
        }
}

var recordtime = 0;
var is_recording = '<?php echo $record ?>';
var user_is ='<?php echo  $clean_client_pc_user ?>';
function copy_movie()
{


//console.log("is_recording="+is_recording);
	 $.post("../copy_movies.php?@user="+user_is+"&@record="+is_recording+"&@testplayer=false",{

      
      

      

    },function(data){

      


    });
}

var user_ip ='127.0.0.1';
function Get_Clients_User_Database(user_ip)
{
	 $.post("../discovery/includes/database/connection.php?@ip="+user_ip,{

      
      

      

    },function(data){

      


    });
}


var clouds_time =0;
 var fade_time=0;
 var isPlaying = false;
function update_()
{



recordtime++;

if(recordtime ==1  || recordtime ==120 )
{
	copy_movie();
	recordtime = 2;
}

fade_time++;

if(fade_time ==9)
{
screenfade();
}



if($(window).width() < $(window).height())
{
  $('#plutotv_appicon_btn').css('top', '8%');
  $('#plutotv_appicon_btn').css('height', '10%');

  $('#sonycrackle_appicon_btn').css('top', '8%');
  $('#sonycrackle_appicon_btn').css('height', '10%');

  $('#putlocker_tv_guide_list').css('top', '15%');
  $('#putlocker_tv_guide_list').css('height', '10%');

  $('#putlockers_name_appicon_btn').css('top', '15%');
  $('#putlockers_name_appicon_btn').css('height', '10%');

  $('#putlocker_hd_is_appicon_btn').css('top', '15%');
  $('#putlocker_hd_is_appicon_btn').css('height', '10%');

  $('#sphere').css('height', '200px');
  $('#sphere').css('width', '190px');
  $('#clouds').css('height', '200px');
  $('#clouds').css('width', '180px');
  
}
else
{
	$('#plutotv_appicon_btn').css('top', '10%');
	$('#plutotv_appicon_btn').css('height', '20%');


	$('#sonycrackle_appicon_btn').css('top', '10%');
	$('#sonycrackle_appicon_btn').css('height', '20%');


  $('#putlocker_tv_guide_list').css('top', '31.5%');
  $('#putlocker_tv_guide_list').css('height', '20%');


  $('#putlockers_name_appicon_btn').css('top', '31.5%');
  $('#putlockers_name_appicon_btn').css('height', '20%');


  $('#putlocker_hd_is_appicon_btn').css('top', '31.5%');
  $('#putlocker_hd_is_appicon_btn').css('height', '20%');

  $('#sphere').css('height', '275px');
  $('#sphere').css('width', '275px');
  $('#clouds').css('height', '255px');
  $('#clouds').css('width', '255px');



}



 
   
 
}

setInterval(function()
 {
 update_();
 }, 1000  );

function AnimateRotate()
{

	clouds_time--;
 
    var elem = $("#clouds");

    elem.css({transform: "rotate(" + clouds_time + "deg)"});

 
    
    
}

setInterval(function()
 {
 AnimateRotate();
 }, 60  );



	function spinEarth() 
	{
		var texture = "images/earthgghggss1024x1024.jpg";
		createSphere(document.getElementById("sphere"),texture);

		
		
	}
	









function screenfade()
{

 $("#screenfade").fadeOut("fast");
 spinEarth();
 

}





function preload_fade_movie_panle()
{
   $('#preload_fade_movie_panle').fadeIn('slow');
   $('#preload_fade_movie_panle').fadeOut('slow');
}
var url ="";


var btn_ch_list = false;

var plist = true;
function putlocker()
{

     if(plist == false)
	 {
	 
     
	$('#putlockers_name_appicon_btn').fadeOut('slow');
	$('#putlocker_hd_is_appicon_btn').fadeOut('slow');
	plist = true;
	}
	else 
	{
	 
	$('#putlockers_name_appicon_btn').fadeIn('slow');
	$('#putlocker_hd_is_appicon_btn').fadeIn('slow');
	plist = false;
    }


}


function set_security(sd,f,sl)
{
	 $.post("../update_security.php",{

      security_level:sl,
      final:f,
      static_device:sd
      

      

    },function(data){

      console.log("DATA:"+data);


    });
}


function buttons(url)
{
	
	
   if(url=="null")
      {

         if(isPlaying == false)
   {
      //we are not playing a movie
      console.log('we are not viewing the movie list ');
	 
	
	exit_policy();
   }
   else if(isPlaying ==true)
   {
      //we are playing a movie
      console.log('we are viewing the movie list ');
	  
	
	

	   $('#player').css("top","55%");
	   
	   $('#player').css("position","fixed");
  
  $('#player').css("right","1%");
 
   $('#player').css("width","40%");
   $('#player').css("height","45%");
    $('#player').css("z-index","199");
	
	exit_policy();
	
   }
   
   
  
   
   
   
   if(btn_ch_list == false)
   {
      $('#preload_fade_movie_panle').fadeIn('slow');
   
      $('#plutotv_appicon_btn').fadeIn('slow');
	  $('#sonycrackle_appicon_btn').fadeIn('slow');
	  $('#putlocker_tv_guide_list').fadeIn('slow');
	  $('#discover_appicon_btn').fadeIn('slow');
     
	 plist = true;
      btn_ch_list = true;
   }
   else if(btn_ch_list == true)
   {
   $('#preload_fade_movie_panle').fadeOut('slow');
   $('#plutotv_appicon_btn').fadeOut('slow');
    $('#sonycrackle_appicon_btn').fadeOut('slow');
	  $('#putlocker_tv_guide_list').fadeOut('slow'); 
	   $('#putlockers_name_appicon_btn').fadeOut('slow');
	   $('#putlocker_hd_is_appicon_btn').fadeOut('slow');
	   $('#discover_appicon_btn').fadeOut('slow');
	   
	   
	  
	   
	    $('#player').css("top","7.5%");
  $('#player').css("right","0%");
  $('#player').css("position","fixed");
  $('#player').css("left","0%");
  $('#player').css("bottom","7.5%");
   $('#player').css("width","100%");
   $('#player').css("height","83%");
    $('#player').css("z-index","10");
      btn_ch_list = false;
   }
         return;
      }
      else
      {
         take_domain(url);
           isPlaying =true;
      }
   

   
}




 function take_domain(url)
 {
   
  console.log(url);
buttons('null');
  
   $('#player').html('<iframe id="player_index" width="100%" heigth="100%" src='+url+' scrolling="no"  frameborder="0" allowfullscreen></iframe>');
    $('#player').fadeIn('slow');
  
}







	
</script>
<script src="/discovery/js/jquery.min.js"></script>
</body>
</html>

<?php
}
else
{
	echo ":USER IS NOT LOGIN REQUEST A KNOCK";
}
}
}
else
{
	echo "NAH";
}
?>



