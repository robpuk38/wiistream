<?php
/*
//Information
//Discovery Search System
*/
System_Pageing("Discovery.php",$Debuging);
?>
<script>

var Search_Field_Var = "";

var Fade_In = true;
var Loading_Time = 0;
var Has_Loaded = false;
var Searching_Type = "music";
var Hide_Search = true;
var Search_Results_On = false;
var Fade_Black_Screen = true;
var Fade_Black_Screen_Time = 0;
var Fade_In_Preloader = false;
var Pre_Loader_Welcome_Message = true;
var Fade_Out_Preloader = false;
var Breath = false;
var Exhale = false;
var Inhale = false;
var Has_Loaded_Once = false;
var Search_Field_System_Has_Loaded = false;
var Is_Focused = false; 
var Were_This_far_Now_Ok = false;
var Last_Fade_Out_Time = 0;
var New_Fade_Out_Time =0;
var Fade_In_Or_Out ='null';
var Fade_Time = 0;
var Fade_Type = 'null';
var  We_Now_Want_To_Fade_Out_Of_Search = false;
var New_Time = 0;
var Another_New_Fade_Time = 0;
var If_We_Hit_The_Enter_Button_Change_Our_Error_Message_And_Lock_It = false;
var If_I_Hover_Out_Header_Links_Button_Do_This = false;
var If_I_Hover_Over_The_Check_Button_Do_This = false;
var If_I_Clicked_The_Check_Button_Do_This = false;
var If_I_Hover_Out_From_The_Check_Button_Do_This = false;
var I_Have_Changed_My_Mind = false;
var Random_No_Search_Commnet_Value ='Null';
var Turn_My_Debugger_Panle_On = false;

var We_Want_To_Fade_In_Black = false;

function Media_Player_Buttons(buttons){
Console("Media_Player_Buttons: "+buttons);
if(buttons == "close_btn_")
{
  $('#display_place_holder').css("background","#000");
  $('#display_place_holder').fadeOut("very_slow");
  $('#center_container').html("");
  $(".search_loader").css("overflow-y","scroll");

}
if(buttons == "Im_In_Close_Up"){$('#close_btn_').fadeIn("fast");$('#close_btn').fadeOut("fast");}
if(buttons == "Im_Out_Close_Up"){$('#close_btn_').fadeIn("fast");$('#close_btn').fadeOut("fast");}
if(buttons == "Im_In_Close_Down"){$('#close_btn_').fadeIn("fast");$('#close_btn').fadeOut("fast");}
if(buttons == "Im_Out_Close_Down"){$('#close_btn').fadeIn("fast");$('#close_btn_').fadeOut("fast");}
                                              //FADEIN FIX WHEN READY
if(buttons == "Im_In_Next_Up"){$('#next_btn_').fadeOut("fast");$('#next_btn').fadeOut("fast");}
if(buttons == "Im_Out_Next_Up"){$('#next_btn_').fadeOut("fast");$('#next_btn').fadeOut("fast");}
if(buttons == "Im_In_Next_Down"){$('#next_btn_').fadeOut("fast");$('#next_btn').fadeOut("fast");}
if(buttons == "Im_Out_Next_Down"){$('#next_btn').fadeOut("fast");$('#next_btn_').fadeOut("fast");}
if(buttons == "Im_In_Back_Up"){$('#back_btn_').fadeOut("fast");$('#back_btn').fadeOut("fast");}
if(buttons == "Im_Out_Back_Up"){$('#back_btn_').fadeOut("fast");$('#back_btn').fadeOut("fast");}
if(buttons == "Im_In_Back_Down"){$('#back_btn_').fadeOut("fast");$('#back_btn').fadeOut("fast");}
if(buttons == "Im_Out_Back_Down"){$('#back_btn').fadeOut("fast");$('#back_btn_').fadeOut("fast");}
}

function Where_Is_My_Mouse_Or_Finger_Poining(){
if(If_I_Hover_Over_The_Check_Button_Do_This == true){
Console("Where_Is_My_Mouse_Or_Finger_Poining() If_I_Hover_Over_The_Check_Button_Do_This == true");
//THIS IS HOVER IN
Hover_In('My_Check_Button','yellow');
If_I_Hover_Over_The_Check_Button_Do_This =false;}
if(If_I_Clicked_The_Check_Button_Do_This == true){
Console("Where_Is_My_Mouse_Or_Finger_Poining() If_I_Hover_Out_The_Check_Button_Do_This == true");
Hover_Out('My_Check_Button','green');
HelpMe_Tag_For_Loop('get');
If_I_Hover_Over_The_Check_Button_Do_This =false;
If_I_Hover_Out_From_The_Check_Button_Do_This = false;}
if(If_I_Hover_Out_From_The_Check_Button_Do_This == true){
Console("Where_Is_My_Mouse_Or_Finger_Poining() If_I_Hover_Out_From_The_Check_Button_Do_This == true ");
Hover_Out('My_Check_Button','white');
If_I_Hover_Over_The_Check_Button_Do_This =false;
If_I_Hover_Out_From_The_Check_Button_Do_This = false;}}

function Hover_In(div_id_tag,color)
{

//Check_What_Button_I_Am_On

if(div_id_tag == 'My_Filter_Button')
{
  If_I_Hover_Over_Header_Links_Button_Was_Clicked_Do_This = true;

}

if(div_id_tag == 'My_Check_Button')
{
  If_I_Hover_Over_The_Check_Button_Do_This = true;

}



  Console('Called: Function Hover_In(div_id_tag)='+div_id_tag);
  $('#'+div_id_tag+'').css("cursor","pointer");
  $('#'+div_id_tag+'').css("color",color);

  
}
function Hover_Out(div_id_tag,color) 
{



if(div_id_tag == 'My_Filter_Button')
{
  If_I_Hover_Out_Header_Links_Button_Was_Clicked_Do_This = false;

}

  if(div_id_tag == 'My_Check_Button')
{
  If_I_Hover_Out_The_Check_Button_Do_This = false;

}
  Console('Called: Function Hover_Out(div_id_tag)='+div_id_tag);
  $('#'+div_id_tag+'').css("cursor","default");
  $('#'+div_id_tag+'').css("color",color);
  
}

function Fade_Out_Solid(){//Console('Called: Function Fade_Out_Solid()');
if(Fade_In_Or_Out == 'in' && Fade_Time == 400 && Fade_Type == 'First_Search_Load_Success' && We_Now_Want_To_Fade_Out_Of_Search == true){
New_Fade_Out_Time ++;}if(Fade_Black_Screen_Time == 0 || New_Fade_Out_Time == 0 &&  Fade_Time == 400 ){$('#fade_screen').css("background",'#1b1f22');
$('#fade_screen').css("opacity",'1.0');}if(Fade_Black_Screen_Time == 5 || New_Fade_Out_Time == 5){$('#fade_screen').css("background",'#1b1f22');
$('#fade_screen').css("opacity",'0.9');}if(Fade_Black_Screen_Time == 10 || New_Fade_Out_Time == 10){$('#fade_screen').css("opacity",'0.8');}if(Fade_Black_Screen_Time == 15 || New_Fade_Out_Time == 15){$('#fade_screen').css("opacity",'0.7');$('.loader').fadeIn("very_slow");}
if(Fade_Black_Screen_Time == 20 || New_Fade_Out_Time == 20){$('#fade_screen').css("opacity",'0.6');}
if(Fade_Black_Screen_Time == 25 || New_Fade_Out_Time == 25){$('#fade_screen').css("opacity",'0.5');Fade_In_Preloader = true;}
if(Fade_Black_Screen_Time == 30 || New_Fade_Out_Time == 30){$('#fade_screen').css("opacity",'0.4');if(Pre_Loader_Welcome_Message == true){
Search_Query_Messsage('Welcome To Discovery');}}
if(Fade_Black_Screen_Time == 35 || New_Fade_Out_Time == 35){$('#fade_screen').css("opacity",'0.3');}
if(Fade_Black_Screen_Time == 40 || New_Fade_Out_Time == 40){$('#fade_screen').css("opacity",'0.2');}
if(Fade_Black_Screen_Time == 45 || New_Fade_Out_Time == 45)
{$('#fade_screen').css("opacity",'0.1');}if(New_Fade_Out_Time == 50){$('#fade_screen').css("opacity",'0.0');
Fade_In_Or_Out = 'out';Fade_Time = 500;Fade_Type = 'First_Search_Load_Success_Leave';}
if(Fade_Black_Screen_Time == 50  ){$('#fade_screen').css("opacity",'0.0');Fade_Out_Preloader = true;Fade_In_Preloader = false;Exhale = false;
Inhale = true;We_Want_To_Fade_In_Black = false;Fade_In_Or_Out = 'in';Fade_Time = 200;Fade_Type = 'First_Load_Search_Finished';
if(Pre_Loader_Welcome_Message == true){Search_Query_Messsage('Please Wait One Moment');}}}


function Fade_In_Solid(){//Console('Called: Function Fade_In_Solid()');
if( Fade_In_Or_Out == 'out' && Fade_Time == 500 && Fade_Type == 'First_Search_Load_Success_Leave'){Another_New_Fade_Time++;}
if(Fade_In_Or_Out == 'out' && Fade_Time == 300 && Fade_Type == 'First_Search' && Pre_Loader_Welcome_Message == false &&We_Now_Want_To_Fade_Out_Of_Search == false){New_Time ++;}
if(Fade_Black_Screen_Time == 55 || New_Time == 0 && Fade_Time == 300  || Another_New_Fade_Time == 0 && Fade_Time == 500 ){
$('#fade_screen').css("background",'#000');$('#fade_screen').css("opacity",'0.1');if(Fade_Time == 300){
Search_Query_Messsage('Please Wait One Moment');}}if(Fade_Black_Screen_Time == 60 || New_Time == 5 || Another_New_Fade_Time == 5){
if(Fade_Time == 300){$('#fade_screen').css('display','block');$('#fade_screen').css("opacity",'0.1');Search_Query_Messsage('Please Wait One Moment');}$('#fade_screen').css("background",'#000');$('#fade_screen').css("opacity",'0.1');}if(Fade_Black_Screen_Time == 65 || New_Time == 10 || Another_New_Fade_Time == 10){$('#fade_screen').css("opacity",'0.2');if(Pre_Loader_Welcome_Message == true){Search_Query_Messsage('Were Getting Things Ready');}}if(Fade_Black_Screen_Time == 70 || New_Time == 15 || Another_New_Fade_Time == 15){$('#fade_screen').css("opacity",'0.3');
$('.search_loader').fadeOut('slow');}if(Fade_Black_Screen_Time == 75 || New_Time == 20 || Another_New_Fade_Time == 20){$('#fade_screen').css("opacity",'0.4');}if(Fade_Black_Screen_Time == 80 || New_Time == 25 || Another_New_Fade_Time == 25){$('#fade_screen').css("opacity",'0.5');Breath = true;if(Pre_Loader_Welcome_Message == true){Search_Query_Messsage('Why Wait Were Ready Now.');}if(Fade_Time == 500){$('.loader').fadeOut('slow');
}}if(Fade_Black_Screen_Time == 85 || New_Time == 30 || Another_New_Fade_Time == 30){$('#fade_screen').css("opacity",'0.6');}
if(Fade_Black_Screen_Time == 90 || New_Time == 35 || Another_New_Fade_Time == 35){$('#fade_screen').css("opacity",'0.7');}
if(Fade_Black_Screen_Time == 95 || New_Time == 40 || Another_New_Fade_Time == 40){$('#fade_screen').css("opacity",'0.8');}
if(Fade_Black_Screen_Time == 100 || New_Time == 45 || Another_New_Fade_Time == 45){$('#fade_screen').css("opacity",'0.9');}
if(Another_New_Fade_Time == 50){$('#fade_screen').css("opacity",'1.0');if(Fade_Time == 500){Fade_In_Or_Out = 'out';Fade_Time = 600;
Fade_Type = 'First_Search_Load_Success_Finished';$('.search_loader').fadeIn('very_slow');}}if(New_Time == 50 && We_Now_Want_To_Fade_Out_Of_Search == false){$('#fade_screen').css("opacity",'1.0');if(Fade_Time == 300 ){Search_Query_Messsage('Searching '+Searching_Type+' For: '+Search_Field_Var);}Fade_In_Or_Out = 'in';Fade_Time = 400;Fade_Type = 'First_Search_Load_Success';We_Now_Want_To_Fade_Out_Of_Search = true;}if(Fade_Black_Screen_Time == 105 ){$('#fade_screen').css("opacity",'1.0');Exhale = true;Inhale = false;We_Want_To_Fade_In_Black =false;Wait_Time = 0;}}



var If_The_Debugger_Message_Displays_A_Function_Do_Function = false;
var Focus_Time = 0;

function What_Function_Am_I_Doing()
{
        if(If_The_Debugger_Message_Displays_A_Function_Do_Function == true)
         {
         
          If_The_Debugger_Message_Displays_A_Function_Do_Function =false;
         }

         Focus_Time++;

         if(Focus_Time > 120 && Is_Focused == false)
         {
          $('#infield_').focus(); 
          $('#infield').focus();
           $("#infield").attr('value',Search_Field_Var);  
          $("#infield_").attr('value',Search_Field_Var); 
          Is_Focused = true;
          if(Mini_Player_Loaded == false)
          {
          Search_Comments_From_Database('localhost','random_search_comments');
          }
   
         }



//console.log('THIS IS THE LENGHT '+Get_Length_Of_Music_Mini);


}




function New_Fade(in_or_out,time,type)
{
 if(Fade_In_Or_Out == 'out' && Fade_Time == 600 && Fade_Type == 'First_Search_Load_Success_Finished'){Fade_Out_Solid();} 
 if(Fade_In_Or_Out == 'out' && Fade_Time == 500 && Fade_Type == 'First_Search_Load_Success_Leave'){Fade_In_Solid();}
 if(Fade_In_Or_Out == 'in' && Fade_Time == 400 && Fade_Type == 'First_Search_Load_Success'){Fade_Out_Solid();}
 if(Fade_In_Or_Out == 'out' && Fade_Time == 300 && Fade_Type == 'First_Search' && Pre_Loader_Welcome_Message == false){Fade_In_Solid();}
 if(in_or_out == 'in' && time == 0 && type == 'First_Load'){Fade_Out_Solid();}
 if(in_or_out == 'out' && time == 50 && type == 'First_Load'){Fade_In_Solid();}
 if(in_or_out == 'in' && time == 100 && type == 'First_Load_Search'){Fade_Out_Solid();}
}
myMedia = new Audio();
myMedia.id = "myMedia";
var MiniTock = 0;
var MiniTick = 0;
var TimeOut = 0;
var Get_Length_Of_Music_Mini = 0;
var Mini_Player_Loaded = false;
var Is_Mini_Player_Playing = false;
var I_Got_Data = false;
var And_L = false;
var And_L_S = false;
function MiniMedia_Player_Clock()
{
	TimeOut++;

  if(Mini_Player_Loaded == true)
  {
  	if($('#MLTime_').html() > 10 && And_L == false && And_L_S == false)
  	{
  		//console.log('TIME OUT IS AS BIG AS DATA I GOT DATA');
  		I_Got_Data = true;
  		And_L = true;
  	}
  	if(I_Got_Data == true && And_L == true && And_L_S==false)
  	{
  	$('#My_Mini_Player_Contatiner').fadeIn('fast');	
  	And_L = false;
  	And_L_S = true;
    }
  	if($('#MLTime_').html() > 100)
  	{
  	MiniTock++;
  	
  	}
  	if($('#MLTime_').html() == "")
  	{
  		$('#My_Mini_Player_Contatiner').fadeOut('fast');
  	}
  
  Get_Length_Of_Music_Mini = $('#LTime').html()*36;
  if(Get_Length_Of_Music_Mini > 100 && Is_Mini_Player_Playing == true && $('#MLTime_').html() == "")
  {
Play_Mini_Player();
  }
  if(MiniTock > $('#MLTime_').html()*36)
  {
  	
  	$('#MLTime_').html("");
  	//console.log("I HAVE NO CLUE WHAT IM LOOKING FOR");
  }
  if(myMedia.currentTime < 5)
  {
//console.log("MY CURRENT TIME IS "+myMedia.currentTime);
//myMedia.play();

jQuery(function(){
   //jQuery('#My_Music_Button_Mini_Play').click();
});

  }
  if(myMedia.currentTime >= myMedia.duration -1 )
  {
  	MiniTick++;
  	I_Got_Data = false;
  	//console.log("MY CURRENT TIME IS EQULE TO DURATION");
  	$('#MLTime_').html("");
  }
  if(TimeOut > Get_Length_Of_Music_Mini/6)
  {
  	
  	if($('#MLTime_').html() > 10)
  	{
  		//console.log('TIME OUT IS AS BIG AS DATA I GOT DATA');
  		I_Got_Data = true;
  	}
  	else
  	{
  		console.log('TIME OUT IS AS BIG AS DATA I DO NOT GOT DATA');
  		I_Got_Data = false;
  		$('#MLTime_').html("");
  console.log(MiniTock+' SUCCESS RELOAD '+ Get_Length_Of_Music_Mini);
  Search_Comments_From_Database('localhost','random_search_comments');

  Mini_Player_Loaded = false;
  Is_Mini_Player_Playing = false;
  MiniTock = 0;
  MiniTick = 0;
  TimeOut = 0;
  	}
  }
  if(MiniTock > Get_Length_Of_Music_Mini && Is_Mini_Player_Playing == true && MiniTick > 300)
  {
  	
  console.log(MiniTock+' SUCCESS '+ Get_Length_Of_Music_Mini);
  Search_Comments_From_Database('localhost','random_search_comments');

  Mini_Player_Loaded = false;
  Is_Mini_Player_Playing = false;
  MiniTock = 0;
  MiniTick = 0;
  }
 
  
  }

}

function Next_Mini_Player()
 {
 	I_Got_Data = false;
 		$('#My_Mini_Player_Contatiner').css('display','none');	
  		$('#MLTime_').html("");
 	Mini_Player_Loaded = false;
  Is_Mini_Player_Playing = false;
  MiniTock = 0;
  MiniTick = 0;
  TimeOut = 0;
  Search_Comments_From_Database('localhost','random_search_comments');
  console.log("I CLICKED NEXT BUTTON");
 }
function Stop_Mini_Player()
{

if(Is_Mini_Player_Playing == true)
{
	//console.log("WE ARE NOW STOPPED");
	//myMedia.pause();

	Is_Mini_Player_Playing = false;
	$("#My_Music_Button_Mini_Stop").fadeOut('fast');
$("#My_Music_Button_Mini_Play").fadeIn('fast');
}
}

function Download_Mini_Player_Link()
{
	window.location=myMedia.src;
}

function empty(v)
{
  if ((v.length == 0)||(v== ""))
{
return v;
}


console.log("EMPTY:"+v);
//myMedia.pause();
}

function Play_Mini_Player()
{
//console.log("WE ARE NOW PLAYING");
	Is_Mini_Player_Playing = true;
	
   //addEventListener("click", function() {
   
//});
	
    
	And_L_S = false;
	$('#MLTime_').html(myMedia.duration);
	$('#LUrl').html(myMedia.src);
	$("#My_Music_Button_Mini_Stop").fadeIn('fast');
$("#My_Music_Button_Mini_Play").fadeOut('fast');

}

function Click_Mini_Play_BTN()
{
  myMedia.play();
}

function My_Brain()
{
Loading_Time++;
Fade_Black_Screen_Time++; 
New_Fade(Fade_In_Or_Out,Fade_Time,Fade_Type);
What_Function_Am_I_Doing();
Where_Is_My_Mouse_Or_Finger_Poining();
MiniMedia_Player_Clock();
if(Fade_In_Or_Out == 'in' && Fade_Time == 400 && Fade_Type == 'First_Search_Load_Success'){
$(".new_loader").fadeOut("fast"); 
We_Now_Want_To_Fade_Out_Of_Search = true;}
if(Fade_In_Or_Out == 'out' && Fade_Time == 300 && Fade_Type == 'First_Search'){
Pre_Loader_Welcome_Message = false;}
if(Fade_Black_Screen_Time > 0 &&  Fade_Black_Screen == true && Pre_Loader_Welcome_Message == true){
Fade_In_Or_Out = 'in';
Fade_Time = 0;
Fade_Type = 'First_Load';}
if(Fade_Out_Preloader == true && Fade_In_Preloader == false && Exhale == false && Inhale == true && We_Want_To_Fade_In_Black == false){
Fade_In_Or_Out = 'out';
Fade_Time = 50;
Fade_Type = 'First_Load';}
if(Exhale == true && Inhale == false && We_Want_To_Fade_In_Black ==false && Wait_Time == 0){
Fade_In_Or_Out = 'in';
Fade_Time = 100;
Fade_Type = 'First_Load_Search';
$('.loader').fadeOut("fast");
$(".spinner").fadeOut("fast");
$(".new_loader").fadeIn("slow");
$('#fade_screen').fadeOut('slow');}
}
setInterval(function(){ My_Brain() }, 30);



$(document).bind('keypress', function(e){
if(e.keyCode==13)
{
if(Search_Field_Var==""||Search_Field_Var==null){
$("#infield").css("border-color","#F00");
$("#infield_").css("border-color","#F00");

If_We_Hit_The_Enter_Button_Change_Our_Error_Message_And_Lock_It = true;}
Search_For_The_File();
}});




 function HelpMe_Tag_For_Loop(t)
 {
 	var i;
 	Console(t);
 	console.log(t);
 	//TO DO GET THE LAST INSERTATION ID FROM DATABASE TABLE random_music_comments
for (i = 1; i < 20; i++) 
{ 
	if($('#HELPME_'+i).html() == undefined)
	{
		$('#ClHelp').css('display','none');
    }
	
		if($('#HELPME_'+i).html() != undefined)
		{
		 
		 if(t == 'get')
		 {
		    $('#ClHelp').css('display','block');
		    $('#HELPME_'+i).fadeIn('fast');
		 }
	      if(t == 'off')
		 {
		    $('#ClHelp').css('display','none');
		    $('#HELPME_'+i).fadeOut('fast');
		 }
	     
	    }
		
	
  
}
 } 


function My_Debugger()
{
  Console('Called: Function My_Debugger()');
  if(Turn_My_Debugger_Panle_On == true)
  {
     $("#My_Debugger_Panle").fadeOut('fast');
    // $("#ClHelp").fadeOut('fast');
    HelpMe_Tag_For_Loop('off');
      Turn_My_Debugger_Panle_On= false;
      If_I_Clicked_The_Check_Button_Do_This = false;
      If_I_Hover_Over_The_Check_Button_Do_This = true;
     
  }
  else if(Turn_My_Debugger_Panle_On == false)
  {
    $("#My_Debugger_Panle").fadeIn('fast');
    //$("#ClHelp").fadeIn('fast');
   
       Turn_My_Debugger_Panle_On= true;
       If_I_Clicked_The_Check_Button_Do_This = true;
       
  }
}


function Search_Comments_From_Database(connection_v,table_v)
{
Console('Called: Function Search_Comments_From_Database(connection_v,table_v)'+ connection_v);
  




  $.post("./dynamic/search_change_my_mind.php",{

      connection:connection_v ,
            tablename:table_v
      

      

    },function(data){

      console.log(data);


 

 

         $('#header_error_message').fadeIn('fast');
         $("#Random_Search_Subjective_Thought").html('<code>'+data+'</code>');

         $('#header_error_message_').fadeIn('fast');
         $("#Random_Search_Subjective_Thought_").html('<code>'+data+'</code>');
     
      Console("I AM CHANGING MY MIND TURE NOW FALSE");
     
   
  

    
    

    });

  

  

}



function Remove_Error_Message()
{
 //Console('Called: Function Remove_Error_Message()');
  $('#header_error_message').fadeOut('fast');
    $('#header_error_message_').fadeOut('fast');
}



function Overflow_Hide_On_Enter()
{
  Console('Called: Function Overflow_Hide_On_Enter()');
  

   $("#body_scroll").css("overflow-y","hidden");
  
  $(".search_loader").css("overflow-y","hidden");
  $("#body_scroll").css("overflow-x","hidden");
  $(".search_loader").css("overflow-x","hidden");
  $("#display_place_holder").css("overflow-y","hidden");
  $("#display_place_holder").css("overflow-x","hidden");
  
}


function Clean_Fade_Command()
{
   We_Want_To_Fade_In_Black = true;
   Last_Fade_Out_Time = 0;
 New_Fade_Out_Time =0;
 New_Time = 0;
 Another_New_Fade_Time = 0

Fade_In_Or_Out = 'out';
        Fade_Time = 300;
        Fade_Type = 'First_Search';

  Loading_Time = 0;
Has_Loaded = false;
Hide_Search = true;
Search_Results_On = true;

We_Now_Want_To_Fade_Out_Of_Search = false;
}


function Search_For_The_File()

{
Console('Called: Function Search_For_The_File()');
	
Focus_Time = -60; 
Is_Focused = false;
  

	if(Search_Field_Var == null || Search_Field_Var == "")

	{



	
	$("#infield").css("border-color","#F00");
  $("#infield_").css("border-color","#F00");
      $("#search_results").html('Nothing Was Found...');


		return;

	}

	 $('#post_query_mes_pre').fadeIn("fast");
      $('#preloader_all_seeing_mes').fadeIn("fast");

Clean_Fade_Command();


console.log('Fade_Black_Screen ' +Fade_Black_Screen);



	$.post("./dynamic/search.php",{

			Search_Field:Search_Field_Var ,
            Search_Field_Type:Searching_Type
			

			

		},function(data){

			Console(data);


    $("#search_results").fadeIn("fast");
		$("#search_results").html(''+data+'');
   
  $(".search_loader").css("overflow-y","scroll");

//Search_Field_Var ="";
		

		});

	

	

}


function Console(string)
{

 $("#Debug_Console").html(string);
 

var x = $("#Debug_Console").html();
//console.log(x);
   
      $("#ApendMe").append('<br><br>'+x+'<br>');

    var $textarea = $('#ApendMe').scrollTop;
   // $textarea.scrollTop($textarea[0].scrollHeight);

}


function Class_Button_Action(turn_on_or_off_light_switch)
{
  Console('Called: Function Class_Button_Action(turn_on_or_off_light_switch)');
Search_Results_On = false;

$('.'+turn_on_or_off_light_switch+'').css("display","none");


}
function Id_Button_Action(turn_on_or_off_light_switch)
{
   Console('Called: Function Id_Button_Action(turn_on_or_off_light_switch)');
Search_Results_On = false;
$('#'+turn_on_or_off_light_switch+'').css("display","none");
}


var Search_Filter_Type_Switch = false;
function I_Clicked_Filters_Button()
{
Console('Called: Function I_Clicked_Filters_Button()');

if(Search_Filter_Type_Switch == true)
{
Search_Filter_Type_Switch = false;
$("#search_filters_type").css("display","block");
$("#search_exit_type").css("display","block");
$("#search_links_type").css("display","block");
$("#search_images_type").css("display","block");
$("#search_music_type").css("display","block");
$("#search_videos_type").css("display","block");
$("#search_movies_type").css("display","block");
$("#search_people_type").css("display","block");
$("#search_phones_type").css("display","block");

$("#search_filters_type_").css("display","block");
$("#search_exit_type_").css("display","block");
$("#search_links_type_").css("display","block");
$("#search_images_type_").css("display","block");
$("#search_music_type_").css("display","block");
$("#search_videos_type_").css("display","block");
$("#search_movies_type_").css("display","block");
$("#search_people_type_").css("display","block");
$("#search_phones_type_").css("display","block");
$('#Close_All_Eye').css('display','block');
Searching_Type = 'music';

$('#preloader_eye_switch').html('<span class="icon fa-eye"></span>');
$('#header_eye_switch').html('<span class="icon fa-eye"></span>');
           


$('#all_seeing_mes').html('<h5>The All Seeing Eye</h5>');
$('#header_all_seeing_mes').html('<h5>The All Seeing Eye</h5>');
$('#preloader_all_seeing_mes').html('<h5>The All Seeing Eye</h5>');
$('#Results_Val').html('<h2 >Eye Results</h2>');
Search_For_The_File();
}
else if(Search_Filter_Type_Switch == false)
{
Search_Filter_Type_Switch = true;
$("#search_filters_type").css("display","block");
$("#search_exit_type").css("display","block");
$("#search_links_type").css("display","block");
$("#search_images_type").css("display","block");
$("#search_music_type").css("display","block");
$("#search_videos_type").css("display","block");
$("#search_movies_type").css("display","block");
$("#search_people_type").css("display","block");
$("#search_phones_type").css("display","block");

$("#search_filters_type_").css("display","block");
$("#search_exit_type_").css("display","block");
$("#search_links_type_").css("display","block");
$("#search_images_type_").css("display","block");
$("#search_music_type_").css("display","block");
$("#search_videos_type_").css("display","block");
$("#search_movies_type_").css("display","block");
$("#search_people_type_").css("display","block");
$("#search_phones_type_").css("display","block");
$('#Close_All_Eye').css('display','block');
}
}

function Go_To_Url(value, count)
{
  Console('Called: Function Go_To_Url(value, count)'+' Links Value: '+value+' Count: '+count);
window.location = value;

}

function Go_To_Images(value, count)
{
  Console('Called: Function Go_To_Images(value, count)'+' Images Value: '+value+' Count: '+count);
  

}

function Go_To_Music(src_url,poster_url,count,title)
{
  Console('Called: Function Go_To_Music(src_url,poster_url,count)'+' Music Src Url: '+src_url+' Poster: '+poster_url+' Count: '+count);
  $('#display_place_holder').fadeIn("slow");

   Overflow_Hide_On_Enter();
  $('#center_container').html('<video src="'+src_url+'" poster="'+poster_url+'" controls="controls" preload="5%" autobuffer="1%" autoplay="autoplay" width="100%" height="100%"></video>');
$('#Title_Display_').css("opacity","0.7");
$('#Title_Display_').html('<h2>'+title+'</h2>');
  $('#Title_Display').html('<h2>'+title+'</h2>');

}

function Go_To_Videos(src_url,poster_url,count,title)
{
  //alert('Called: Function Go_To_Videos(src_url,poster_url,count)'+' Videos Src Url: '+src_url+' Poster: '+poster_url+' Count: '+count);
  Console('Called: Function Go_To_Videos(src_url,poster_url,count)'+' Videos Src Url: '+src_url+' Poster: '+poster_url+' Count: '+count);
 // Clean_Fade_Command();
  Overflow_Hide_On_Enter();
  //$('#display_place_holder').css("block");
  $('#display_place_holder').fadeIn("very_slow");
  $('#center_container').html('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/'+src_url+'?autoplay=1&controls=0&showinfo=0&autohide=0" frameborder="0" allowfullscreen></iframe>');
$('#Title_Display_').css("opacity","1");
  $('#Title_Display_').html('<img src="https://www.youtube.com/yts/img/ringo/hitchhiker/logo_small-vflHpzGZm.png"/><h2>'+title+'</h2>');
  $('#Title_Display').html('<img src="https://www.youtube.com/yts/img/ringo/hitchhiker/logo_small-vflHpzGZm.png"/><h2>'+title+'</h2>');



}

function Movie_Finder_Helper(data_)
{
	//console.log('MY_MOVIE_DATA = '+data_);





 	$.post("../dynamic/movie_torrent_download.php/?torrent="+data_,{},function(data){

			Console(data);
			console.log('MOVIE TITLE <=>'+data_+'<=> TORRENT DATA <=>'+data);
$('#display_place_holder').fadeIn("very_slow");
$('#My_Movie_Log_Helper').html(data);
   $('#Debug_Title').html(data_);
		

		});



	
}


function Go_To_Movies(src_url,poster_url,count)
{
  Console('Called: Function Go_To_Movies(src_url,poster_url,count)'+' Movies Src Url: '+src_url+' Poster: '+poster_url+' Count: '+count);
   //Clean_Fade_Command();
  Overflow_Hide_On_Enter();
  //$('#display_place_holder').css("block");
  
  $('#center_container').html('<video src="'+src_url+'" poster="'+poster_url+'" controls="controls" preload="5%" autobuffer="1%" autoplay="autoplay" width="100%" height="100%"></video>');
 Movie_Finder_Helper(src_url);

}

function Go_To_People(value, count)
{
  Console('Called: Function Go_To_People(value, count)'+' People Value: '+value+' Count: '+count);
  

}

function Go_To_Phones(value, count)
{
   Console('Called: Function Go_To_Phones(value, count)'+' Phones Value: '+value+' Count: '+count);
  

}

function Search_Query_Messsage(string)
{
  $('#post_query_mes_pre').html('<h4>'+string+'</h4>');
}

function Search_Type(value)
{
 Console('Called: Function Search_Type(value)='+value);
//$("#search_results").html(''+value+'');
if(Mini_Player_Loaded == false)
{
$('#Left_Foot_Placment').fadeOut('fast');
}
//Search_Field_Var
//Clean_Fade_Command();


		if(value == 'links')
		{
           
         
$('#preloader_eye_switch').html('<span class="icon fa-link"></span>');
$('#header_eye_switch').html('<span class="icon fa-link"></span>');
           


$('#all_seeing_mes').html('<h5>The All Seeing Links</h5>');
$('#header_all_seeing_mes').html('<h5>The All Seeing Links</h5>');
$('#preloader_all_seeing_mes').html('<h5>The All Seeing Links</h5>');
$('#Results_Val').html('<h2 >Links Results</h2>');
$('#Close_All_Eye').css('display','none');

$('#Close_All_Links').css('display','block');
$('#Close_All_Images').css('display','none');
$('#Close_All_Music').css('display','none');
$('#Close_All_Videos').css('display','none');
$('#Close_All_Movies').css('display','none');
$('#Close_All_People').css('display','none');
$('#Close_All_Phones').css('display','none');

		}
		if(value == 'images')
		{
           
           

            $('#preloader_eye_switch').html('<span class="icon fa-image"></span>');

            $('#header_eye_switch').html('<span class="icon fa-image"></span>');

            $('#all_seeing_mes').html('<h5>The All Seeing Images</h5>');
            $('#header_all_seeing_mes').html('<h5>The All Seeing Images</h5>');
            $('#preloader_all_seeing_mes').html('<h5>The All Seeing Images</h5>');
            $('#Results_Val').html('<h2 >Images Results</h2>');
$('#Close_All_Eye').css('display','none');
            $('#Close_All_Links').css('display','none');
$('#Close_All_Images').css('display','block');
$('#Close_All_Music').css('display','none');
$('#Close_All_Videos').css('display','none');
$('#Close_All_Movies').css('display','none');
$('#Close_All_People').css('display','none');
$('#Close_All_Phones').css('display','none');
           
		}
		if(value == 'music')
		{
          
           

            $('#preloader_eye_switch').html('<span class="icon fa-music"></span>');

             $('#header_eye_switch').html('<span class="icon fa-music"></span>');

             $('#all_seeing_mes').html('<h5>The All Seeing Music</h5>');
             $('#Results_Val').html('<h2 >Music Results</h2>');

$('#header_all_seeing_mes').html('<h5>The All Seeing Music</h5>');
$('#preloader_all_seeing_mes').html('<h5>The All Seeing Music</h5>');
$('#Close_All_Eye').css('display','none');
$('#Close_All_Links').css('display','none');
$('#Close_All_Images').css('display','none');
$('#Close_All_Music').css('display','block');
$('#Close_All_Videos').css('display','none');
$('#Close_All_Movies').css('display','none');
$('#Close_All_People').css('display','none');
$('#Close_All_Phones').css('display','none');
            
		}
		if(value == 'videos')
		{
           
          

           $('#preloader_eye_switch').html('<span class="icon fa-file-video-o"></span>');

           $('#header_eye_switch').html('<span class="icon fa-file-video-o"></span>');
            $('#all_seeing_mes').html('<h5>The All Seeing Videos</h5>');
            $('#header_all_seeing_mes').html('<h5>The All Seeing Videos</h5>');
            $('#preloader_all_seeing_mes').html('<h5>The All Seeing Videos</h5>');
            $('#Results_Val').html('<h2 >Videos Results</h2>');
            $('#Close_All_Eye').css('display','none');
            $('#Close_All_Links').css('display','none');
$('#Close_All_Images').css('display','none');
$('#Close_All_Music').css('display','none');
$('#Close_All_Videos').css('display','block');
$('#Close_All_Movies').css('display','none');
$('#Close_All_People').css('display','none');
$('#Close_All_Phones').css('display','none');
           
		}
		if(value == 'movies')
		{
          
          

            $('#preloader_eye_switch').html('<span class="icon fa-file-movie-o"></span>');

             $('#header_eye_switch').html('<span class="icon fa-file-movie-o"></span>');
              $('#all_seeing_mes').html('<h5>The All Seeing Movies</h5>');
              $('#header_all_seeing_mes').html('<h5>The All Seeing Movies</h5>');
                $('#preloader_all_seeing_mes').html('<h5>The All Seeing Movies</h5>');
                $('#Results_Val').html('<h2 >Movies Results</h2>');
$('#Close_All_Eye').css('display','none');
                $('#Close_All_Links').css('display','none');
$('#Close_All_Images').css('display','none');
$('#Close_All_Music').css('display','none');
$('#Close_All_Videos').css('display','none');
$('#Close_All_Movies').css('display','block');
$('#Close_All_People').css('display','none');
$('#Close_All_Phones').css('display','none');
          
		}
		if(value == 'people')
		{
          
            

             $('#preloader_eye_switch').html('<span class="icon fa-users"></span>');

             $('#header_eye_switch').html('<span class="icon fa-users"></span>');
              $('#all_seeing_mes').html('<h5>The All Seeing People</h5>');
               $('#header_all_seeing_mes').html('<h5>The All Seeing People</h5>');
               $('#preloader_all_seeing_mes').html('<h5>The All Seeing People</h5>');
               $('#Results_Val').html('<h2 >People Results</h2>');
$('#Close_All_Eye').css('display','none');
               $('#Close_All_Links').css('display','none');
$('#Close_All_Images').css('display','none');
$('#Close_All_Music').css('display','none');
$('#Close_All_Videos').css('display','none');
$('#Close_All_Movies').css('display','none');
$('#Close_All_People').css('display','block');
$('#Close_All_Phones').css('display','none');
            
		}
		if(value == 'phones')
		{
          
           

           $('#preloader_eye_switch').html('<span class="icon fa-phone"></span>');

           $('#header_eye_switch').html('<span class="icon fa-phone"></span>');
            $('#all_seeing_mes').html('<h5>The All Seeing Phones</h5>');

            $('#header_all_seeing_mes').html('<h5>The All Seeing Phones</h5>');
             $('#preloader_all_seeing_mes').html('<h5>The All Seeing Phones</h5>');
             $('#Results_Val').html('<h2 >Phone Results</h2>');
             $('#Close_All_Eye').css('display','none');
             $('#Close_All_Links').css('display','none');
$('#Close_All_Images').css('display','none');
$('#Close_All_Music').css('display','none');
$('#Close_All_Videos').css('display','none');
$('#Close_All_Movies').css('display','none');
$('#Close_All_People').css('display','none');
$('#Close_All_Phones').css('display','block');
          
		}
		Searching_Type =value;
	Search_For_The_File();
}

function Load_Search_System()
{
Console('Called: Function Load_Search_System()');
 


	if(Fade_In == true)
    {
       $("#Show_Search_Field").fadeIn("fast");
       Fade_In = false;
    }
    else
    {
         if(Fade_In == false)
         {
            $("#Show_Search_Field").fadeOut("fast");
            Fade_In = true;
         }
         else
         {
           $("#Show_Search_Field").fadeIn("fast");
           Fade_In = false;
         }
    }
}

 function Get_Text_Field_Value(value)
{

Console('Called: Function Get_Text_Field_Value(value)'+' I Am Typeing:'+value);
$('#post_query_mes').html('<h5>Searching '+Searching_Type+' For: ' +value+'</h5>');

	if(value!='')

	{
Remove_Error_Message();
		

		Search_Field_Var=value;

		$("#infield").css("border-color","#FFF");
$("#infield_").css("border-color","#FFF");

		return;

	}

	else

	{


		Search_Field_Var= null;

  $("#infield").css("border-color","red");
    $("#infield_").css("border-color","red");

	

	}

}



var Screen_Show_On = true;
function Search_Type_Screen()
{
   Console('Called: Function Search_Type_Screen()');
if(Screen_Show_On == false)
{
  Screen_Show_On = true;
  
 
  $("#display_place_holder").css("display","block");
}
else if(  Screen_Show_On == true)
{
  Screen_Show_On = false;

}
}


</script>

 