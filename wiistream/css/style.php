<style type="text/css">
/*c_ ==== Containor
  
  a_ Listing As ==== a - z as Numbers
  a b c d e f g h i j  k  l  m  n  o  p  q  r  s  t  u  v  w  x  y  z
  1 2 3 4 5 6 7 8 9 10 11 12 12 13 14 15 16 17 18 19 20 21 22 23 24 25 

  h_ ==== Holder
*/
/* START Example */	
body
		{
			overflow: hidden;
			background: black;
	color:grey;

		}
		#player_index
		{
			width:100%;
			height:100%;
		}



#record_btn_on
{
	top:10%;
	right: 3%;
	
	width: 7%;
	height: 15%;
	
	background-image: url('/wiistream/images/recordbtn.png');
	
	background-size: 90%;
	background-repeat: no-repeat;
	cursor: pointer;
	
   
	position: fixed;
	display:block;
	
	
	
	
	z-index:150;
}
#record_btn_on:hover
{
	background-image: url('/wiistream/images/recordbtnh.png');
	
	background-size: 95%;
	background-repeat: no-repeat;
}

#record_btn_off
{
    top:10%;
	right: 3%;
	
	width: 7%;
	height: 15%;
	
	
	
	
background-image: url('/wiistream/images/stoprecordbtnh.png');
	
	background-size: 90%;
	background-repeat: no-repeat;
	cursor: pointer;
   
	position: fixed;
	display:none;
	
	
	
	
	z-index:150;
}

#record_btn_off:hover
{

	background-image: url('/wiistream/images/stoprecordbtn.png');
	
	background-size: 95%;
	background-repeat: no-repeat;
	cursor: pointer;
	}


#vars_meta
{
	bottom:10%;
						left:10%;
						right:10%;
						
						width:80%;
						background:green;
						overflow-y:scroll;
						overflow-x:hidden;
						display:none;
						height:20%;
						position: fixed;
						z-index:2;
}
					
					#screenfade
{
    top: 0px;
	left: 0px;
	right: 0px;
	bottom: 0px;
	width: 100%;
	background: black;
	height: auto;
    display: block;
	position: fixed;
	z-index: 1000;
}


#vars_containor
{
	top:10%;
						left:10%;
						right:10%;
						display:none;
						width:80%;
						background:yellow;
						overflow-y:scroll;
						overflow-x:hidden;
						height:20%;
						position: fixed;
						z-index:2;
}
						
#Main_Content
{
top:0px;
bottom: 0px;
left: 0px;
right: 0px;
width: 0px;
height: 0px;
background:green;
position: fixed;
overflow: hidden;
z-index: 1;
}

#Screen_Fade
{
top:0px;
bottom: 0px;
left: 0px;
right: 0px;	
width: 100%;
height: 100%;
display: none;
background:black;
position: fixed;
z-index: 100;
}
#Message_text_Content
{
	
	bottom: 0px;
	text-align: center;
	font-size: 200%;
	line-height: 200%;
	color: black;
	border-bottom: lightblue;
	border-top: lightblue;
	width: 100%;
	background:white;
	opacity: 0.5;
	position: fixed;
	z-index: 1;

}

#Contents_Header
{
	top:0px;
display: none;
left: 0px;
right: 0px;	
width: 100%;
height: 10%;
background:white;
border-bottom:lightblue;
position: fixed;
z-index: 2;
}
#Contents_Footer
{
	bottom:0px;
display: none;
left: 0px;
right: 0px;	
width: 100%;
height: 10%;
background:white;
border-top:lightblue;
position: fixed;
z-index: 2;
}

#Players_Content
{
	top:10%;
	bottom:10%;
display: none;
left: 0px;
right: 0px;	
width: 100%;
height: 85%;
background:yellow;
position: fixed;
z-index: 2;
}


#Row_List
{
	width: 200%;
	height: 105%;
	background:orange;
	display: flex;
	overflow-x: scroll;
}

.get_back_btn
{
	top: 10%;
left:0px;
position: fixed;
z-index: 3;
}

.get_next_btn
{
	top: 10%;
right:0px;
position: fixed;
z-index: 3;
}

#Cover
{
	margin-top: 10%;


}

#Information_Content_Container
{

top:10%;
right: 0px;
left: 0px;
width: 100%
height:80%;
display: block;
background:black;
position: fixed;

z-index: 50;


}
#title
{
top:10%;
right: 0px;
left: 0px;

width: 100%
height:10%;
display: block;
background-color:white;

text-align: left;
font-size: 200%;

position: fixed;
z-index: 51;
}
#moviecover
{
top:18%;

left: 1%;

width: 35%
height:35%;
display: block;
background-color:green;



position: fixed;
z-index: 51;
	
}
#discription
{
top:18%;
right: 1%;
width: 70%
height:60%;
display: block;
background-color:white;

text-align: left;
position: fixed;

z-index: 51;
}
#Load_Policys_Menu
{
	width: 30%;
	height: 20%;
	background-color: blue;
	bottom: 10%;
	display: none;
	right: 0%;
	position: fixed;
	z-index: 6;
}
#Information_Icon
{
	bottom: 1%;
	right: 1%;
	position: fixed;
	cursor: pointer;
	z-index: 5;
}

#Data_Results
{
top:10%;
right: 0px;
left: 0px;
width: 100%;
height:80%;
display: block;
background:black;
position: fixed;
color: white;
font-size: 100%;

z-index: 50;
}


#logout_btn
{	


    top: 0.5%;
	right: 1%;
	width: 10%;
	height: 7.5%;
	
	cursor: pointer;
   
	position: fixed;
	
	

	background-image: url('/wiistream/images/logout.png');
	background-position: 100%;
	background-size: 80%;
	background-repeat: no-repeat;
	 display: block;
	 z-index: 150;
}
#logout_btn:hover
{	


	cursor: pointer;
	

	background-image: url('/wiistream/images/logout.png');
	background-position: 100%;
	background-size: 80%;
	background-repeat: no-repeat;
	
}
#logout_btn:active
{	

    cursor: pointer;
    background-image: url('/wiistream/images/logout.png');
	background-position: 100%;
	background-size: 75%;
	background-repeat: no-repeat;
	
}

#information
{
	bottom: 0%;
	right: -0.5%;
	width: 5%;
	height: 10%;
	
	
	cursor: pointer;
   
	position: fixed;
	
	

	background-image: url('/wiistream/images/info_up.png');
	
	background-size: 80%;
	background-repeat: no-repeat;
	 display: block;
	 z-index: 20;
}
#information:hover
{

	
	

	background-image: url('/wiistream/images/info_down.png');
	
	background-size: 80%;
	background-repeat: no-repeat;
	
}

#privacy
{
	bottom: 10.5%;
	right: 1%;
	width: 7%;
	height: 5%;
	position: fixed;
	cursor: pointer;
	text-align: center;
	font-size: 2em;
	color: white;
	background:grey;
	border:1px solid;
	border-color:white;
	border-radius:4%;
	padding:1%;
	
display: none;
	position: fixed;
	z-index: 201;
}
#privacy:hover
{
	color:lightgrey;
}

#terms
{
	bottom: 20.5%;
	right: 1%;
	width: 7%;
	height: 5%;
	position: fixed;
	cursor: pointer;
	text-align: center;
	font-size: 2em;
	color: white;
	background:grey;
	border:1px solid;
	border-color:white;
	border-radius:4%;
	padding:1%;
	
display: none;
	position: fixed;
	z-index: 201;
}
#terms:hover
{
	color:lightgrey;
}

#plutotv_appicon_btn  
{
	
	
	top: 10%;
	left: 1%;
	
	width: 10%;
	height: 20%;
	
	
	
	cursor: pointer;
   
	position: fixed;
	display:none;
	
	
	background-image: url('/wiistream/images/pluto.png');
	background-position: 100%;
    background-size: 100%;
	
	background-repeat: no-repeat;
	
	z-index:150;
	
}
#plutotv_appicon_btn:hover 
{
	position: fixed;
	background-image: url('/wiistream/images/plutoa.png');
	background-position: 100%;
    background-size: 100%;
	background-repeat: no-repeat;
	
}

#sonycrackle_appicon_btn
{
	
	
	top: 10%;
	left: 11.5%;
	
	width: 10%;
	height: 20%;
	
	
	
	cursor: pointer;
   
	position: fixed;
	display:none;
	
	
	background-image: url('/wiistream/images/crackle.png');
	background-position: 100%;
    background-size: 100%;
	
	background-repeat: no-repeat;
	
	z-index:150;
	
}

#sonycrackle_appicon_btn:hover 
{
	position: fixed;
	background-image: url('/wiistream/images/cracklea.png');
	background-position: 100%;
    background-size: 100%;
	background-repeat: no-repeat;
	
}

#putlocker_tv_guide_list
{
	
	
	top: 31.5%;
	left: 1%;
	
	width: 10%;
	height: 20%;
    cursor: pointer;
   
	position: fixed;
	display:none;
	
	
	background-image: url('/wiistream/images/putlockermenu.png');
	background-position: 100%;
    background-size: 100%;
	
	background-repeat: no-repeat;
	
	z-index:150;
	
}

#putlocker_tv_guide_list:hover 
{
	position: fixed;
	background-image: url('/wiistream/images/putlockermenua.png');
	background-position: 100%;
    background-size: 100%;
	background-repeat: no-repeat;
	
}


#putlockers_name_appicon_btn
{
	
	
	top: 31.5%;
	left: 11%;
	
	width: 10%;
	height: 20%;
    cursor: pointer;
   
	position: fixed;
	display:none;
	
	
	background-image: url('/wiistream/images/putlocker.png');
	background-position: 100%;
    background-size: 100%;
	
	background-repeat: no-repeat;
	
	z-index:150;
	
}

#putlockers_name_appicon_btn:hover 
{
	position: fixed;
	background-image: url('/wiistream/images/putlockera.png');
	background-position: 100%;
    background-size: 100%;
	background-repeat: no-repeat;
	
}

#putlocker_hd_is_appicon_btn{
	
	
	top: 31.5%;
	left: 21%;
	
	width: 10%;
	height: 20%;
    cursor: pointer;
   
	position: fixed;
	display:none;
	
	
	background-image: url('/wiistream/images/putlocker.png');
	background-position: 100%;
    background-size: 100%;
	
	background-repeat: no-repeat;
	
	z-index:150;
	
}

#putlocker_hd_is_appicon_btn:hover
{
	position: fixed;
	background-image: url('/wiistream/images/putlockera.png');
	background-position: 100%;
    background-size: 100%;
	background-repeat: no-repeat;
	
}
#discover_appicon_btn
{
	
	
	bottom: 11.5%;
	right: 11%;
	
	width: 10%;
	height: 20%;
    cursor: pointer;
   
	position: fixed;
	display:none;
	
	
	background-image: url('/wiistream/images/discovery.png');
	background-position: 100%;
    background-size: 100%;
	
	background-repeat: no-repeat;
	
	z-index:150;
	
}

#discover_appicon_btn:hover 
{
	position: fixed;
	background-image: url('/wiistream/images/discoverya.png');
	background-position: 100%;
    background-size: 100%;
	background-repeat: no-repeat;
	
}

#Containor_One_Holder
{

}
/* === */

#c_a_h_
{

	top: 0px;
	left: 0px;
	right: 0px;
	bottom: 0px;
	width: 100%;
	height: auto;
    display: block;
	position: fixed;
	z-index: 1;

}


#sphere
{
	left:-5%;
	bottom:13%;
    position: fixed;
	z-index:2;
}

#clouds
{
	width: 340px;
	height: 340px;
	border-radius: 50%;
	right: 0;
	left:-4.2%;
	bottom:14.5%;
	background-image: url('/wiistream/images/test.png');
	background-size: 190%;
    
	background-repeat: no-repeat;
	cursor: pointer;
	opacity: 0.3;
    position: fixed;
	z-index:3;
}


/* END Example */
#Main_Background
{
	top: 0px;
	right: 0px;
	left: 0px;
	bottom: 0px;
	
	
	opacity: 1;
	width: 100%;
	height: 100%;
    display: block;
	position: fixed;
	z-index: 1;
}
#Main_Background_
{
	top: 0px;
	right: 0px;
	left:0px;
	bottom:0px;
	width: 100%;
	height: 100%;
	
	display: block;
	position: fixed;
	opacity: 1;
	z-index: 3;
}
#policys_screen
{
	top: 10%;
	left: 5%;
	right:5%;
	
	height: 77%;
	width: 90%;
	position: fixed;
	display: none;
	z-index: 4;
	border: 1px solid;
	border-color: lightblue;
	text-align: left;
	
	overflow-y: scroll;
	overflow-x: hidden;
	overflow-wrap: all;
	
	background: white;
	opacity: 0.8;
	z-index:200;
}
#exit_policy
{
top: 10%;
	
	right:4.8%;
	
	height: 4%;
	width: 4%;
	position: fixed;
	display: none;
	font-size: 1em;
	cursor: pointer;
	word-wrap: all;
	color: white;
	text-align: center;
	background: black;
	
	z-index: 201;
}
#exit_policy:hover
{
	background: gray;

}
#exit_policy:active
{
background: lightgray;
}


#Top_Background
{
	top: 0px;
	right: 0px;
	left: 0px;
	background:white;
	
	width: 100%;
	height: 7.5%;
    display: block;
    border-bottom: 1px solid;
    border-color: lightblue;
	position: fixed;
	z-index: 14;
}
#Bottom_Background
{
	bottom: 0px;
	right: 0px;
	left: 0px;
	background:white;
	border-top: 1px solid;
    border-color: lightblue;
	width: 100%;
	height: 10%;
    display: block;
	position: fixed;
	z-index: 14;
}


#Site_Logo:hover
{
	
	background-image: url('/wiistream/images/wiilogoa.png');
	background-position: 100%;
    background-size: 50%;
	background-repeat: no-repeat;

	
}



#wiiguide
{
	
	
	bottom:-3%;
	left: 45%;
	right: 45%;
	width: 10%;
	height: 20%;
	
	
	cursor:pointer;
	position: fixed;
	background-image: url('/wiistream/images/wiiguide.png');
	background-position: 0%;
    background-size: 100%;
	background-repeat: no-repeat;
	display: block;
	z-index: 151;
	
}

#wiiguide:hover
{
	background-image: url('/wiistream/images/wiiguidea.png');
	background-position: 0%;
    background-size: 100%;
	background-repeat: no-repeat;
}








#b_t_n_0
{
	top: 0%;
	left: 0%;
	background-image: url('');
	background-position: 100%;
    background-size: 100%;
	background-repeat: no-repeat;
	display: none;
}

#b_t_n_2
{
	top: 20%;
	left: 1%;
	background-image: url('');
	background-position: 100%;
	background-size: 100%;
	background-repeat: no-repeat;
	display: none;
}
#b_t_n_3
{
	top: 30%;
	left: 1%;
	background-image: url('');
	background-position: 100%;
	background-size: 100%;
	background-repeat: no-repeat;
	display: none;
}
#b_t_n_4
{
	top: 40%;
	left: 1%;
	background-image: url('');
	background-position: 100%;
	background-size: 100%;
	background-repeat: no-repeat;
	 display: none;
}
#b_t_n_5
{
	top: 50%;
	left: 1%;
	background-image: url('');
	background-position: 100%;
	background-size: 100%;
	background-repeat: no-repeat;
	 display: none;
}
#b_t_n_6
{
	top: 60%;
	left: 1%;
	background-image: url('');
	background-position: 100%;
	background-size: 100%;
	background-repeat: no-repeat;
	 display: none;
}
#b_t_n_7
{
	top: 70%;
	left: 1%;
	background-image: url('');
	background-position: 100%;
	background-size: 100%;
	background-repeat: no-repeat;
	 display: none;
}
#b_t_n_8
{
	top: 10%;
	left: 21%;
	background-image: url('');
	background-position: 100%;
	background-size: 100%;
	background-repeat: no-repeat;
	 display: none;
}
#b_t_n_9
{
	top: 20%;
	left: 21%;
	background-image: url('');
	background-position: 100%;
	background-size: 100%;
	background-repeat: no-repeat;
	 display: none;
}
#b_t_n_10
{
	top: 30%;
	left: 21%;
	background-image: url('');
	background-position: 100%;
	background-size: 100%;
	background-repeat: no-repeat;
	 display: none;
}
#b_t_n_11
{
	top: 40%;
	left: 21%;
	background-image: url('');
	background-position: 100%;
	background-size: 100%;
	background-repeat: no-repeat;
	 display: none;
}



#b_t_n_12
{
	top: 50%;
	left: 21%;
	background-image: url('/discovery/images/wii_button.png');
	background-position: 100%;
	background-size: 100%;
	background-repeat: no-repeat;
	 display: none;
}
#b_t_n_13
{
	top: 60%;
	left: 21%;
	background-image: url('/discovery/images/wii_button.png');
	background-position: 100%;
	background-size: 100%;
	background-repeat: no-repeat;
	 display: none;
}

#b_t_n_14
{
	top: 70%;
	left: 21%;
	background-image: url('');
	background-position: 100%;
	background-size: 100%;
	background-repeat: no-repeat;
	 display: none;
}
#b_t_n_15
{
	top: 10%;
	left: 31%;
	background-image: url('');
	background-position: 100%;
	background-size: 100%;
	background-repeat: no-repeat;
	 display: none;
}
#b_t_n_0,#b_t_n_1,#b_t_n_2,#b_t_n_3,#b_t_n_4,#b_t_n_5,#b_t_n_6,#b_t_n_7,#b_t_n_8,#b_t_n_9,#b_t_n_10,#b_t_n_11,#b_t_n_12,#b_t_n_13,#b_t_n_14,#b_t_n_15
{
	
	
	
}




#Fullscreen_BTN
{
	background:red;
	width: 5%;
	height: 5%;
	cursor: pointer;
	right: 1%;
	bottom: 1%;
	position: fixed;
	z-index: 15;
}
#Fullscreen_BTN:hover
{
	background:blue;
}
#Fullscreen_BTN:active
{
	background:yellow;
}


#t_c_
{

	
	right: 1%;
	bottom: 0px;
	
	font-size: 0.9em;
	color: white;
	width:100%;
	height: 5%;
	text-align: right;

	display: block;
	position: fixed;
	z-index: 10;
}
#d_b_
{
	left: 1%;
	bottom: 0px;
	
	font-size: 0.9em;
	color: white;
	width:100%;
	height: 5%;
	text-align: left;
cursor: pointer;
	display: block;
	position: fixed;
	z-index: 12;
}
#d_b_m_0{
	top: 1%;
	right: 1%;
	background:red;
	width: 5%;
	height: 2.5%;
	display: block;
	position: fixed;
	z-index: 12;
}

#lock_panle_1
{
display: none;
}

#player
{
	top:7.5%;
	right: 0%;
	left: 0%;
	bottom: 7.5%;
width: 100%;
	height: 83%;
display: none;
	position: fixed;
	z-index: 10;
	overflow: hidden;	
}


#lock_panle_1,#preload_fade_movie_panle
{
    top:0%;
	right: 0%;
	left: 0%;
	bottom: 0%;
	
	
	display:none;
	width: 100%;
	height: 100%;
	

	
	position: fixed;
	z-index: 10;
}

#preload_fade_movie_panle
{
	
 background-color: black;
 z-index: 11;
}


#connectionCheck
{
	bottom:0%;
	right: 0%;
	
	width: 10%;
	background:lightblue;
	height: 2.5%;
	text-align: center;
cursor: pointer;
	font-size: 0.9em;
	color: black;
	display: none;
	position: fixed;
	z-index: 12;
}

#screenfade
{
    top: 0px;
	left: 0px;
	right: 0px;
	bottom: 0px;
	width: 100%;
	background: black;
	height: auto;
    display: block;
	position: fixed;
	z-index: 1000;
}













</style>