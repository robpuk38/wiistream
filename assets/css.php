<?php
echo $ipaddress_no_whitespace;
?>

<style>
	
	body
{
	overflow: hidden;
	background: black;
	color:grey;
}
#mainmask {
	
					
						left:-6.5%;
						right:0px;
						bottom:10%;
						width:20%;
						height:20%;
						display:none;
						  background: url("/wiistream/images/mask.fw.png");
   background-size: 35%;
   background-position:center;
   background-repeat: no-repeat;
  
   
position: fixed;
						z-index:999;
   
    -webkit-animation: spinright 3s infinite;
    animation: spinright 3s infinite;
						
						
    
}

#main {
	
						cursor:pointer;
						left:-5.5%;
						right:0px;
						bottom:10%;
						width:20%;
						
						height:20%;
						opacity:1;
						display:none;
						
						position: fixed;
						z-index:1007;
    
}
#main:hover {
	
						 background: url("/wiistream/images/spin7.fw.png");
                        background-size: 35%;
                        background-position:center;
                        background-repeat: no-repeat;
                        opacity:1;
   
						
					
						
    
}










#Loader_Spinner {
	
						
						left:-30%;
						right:0px;
						bottom:0px;
						width:100%;
						height:100%;
						display:none;
						 background: url("/wiistream/images/spin3.fw.png");
						 
    background-size: 8%;
    background-position:center;
    background-repeat: no-repeat;
    
    position: fixed;
						z-index:1006;
    
    -webkit-animation: spinright 3s infinite;
    animation: spinright 3s infinite;
						
						
    
}
#Loader_Spinner_Center {
	
						
						left:-30%;
						right:0px;
						bottom:0px;
						width:100%;
						height:100%;
						display:none;
						 background: url("/wiistream/images/spin2.fw.png");
						 
    background-size: 8%;
    background-position:center;
    background-repeat: no-repeat;
    
    position: fixed;
						z-index:1006;
    
    -webkit-animation: spinleft 3s infinite;
    animation: spinleft 3s infinite;
						
						
    
}


#Site_Logo_Load
{
	left:-30%;
						right:0px;
						bottom:1%;
						width:100%;
						height:100%;
	

	position: fixed;
	background-image: url('/wiistream/images/wiilogo.png');
	background-position: center;
    background-size: 5%;
	background-repeat: no-repeat;
	display: none;
	z-index:1007;
}

#Site_Header_Load
{
left:0px;
						right:0px;
						top:0px;
						width:100%;
						height:100%;
	

	position: fixed;
	background:white;
	display: block;
	z-index:1006;
}

#Site_Footer_Load
{
left:0px;
						right:0px;
						bottom:0px;
						width:100%;
						height:100%;
	

	position: fixed;
	background:white;
	display: block;
	z-index:1006;
}

#Site_Logo_Link
{
	top:0px;
	left:0px;
	width:6%;
	height:6.5%;
	background-image: url('/wiistream/images/wiilogo.png');
	background-position: center;
    background-size: 50%;
	background-repeat: no-repeat;
	cursor:pointer;
	display:none;
	position:fixed;
	z-index:1010;
}






@-webkit-keyframes spinleft
{  
100%   {-webkit-transform: rotateZ(-360deg); } 
100% {-webkit-transform: rotateZ(360deg); }   
}
@keyframes spinleft
{  
100%   {transform: rotateZ(-360deg); } 
100% {transform: rotateZ(360deg); }  
}
@-webkit-keyframes spinright
{  
100%   {-webkit-transform: rotateZ(360deg); } 
100% {-webkit-transform: rotateZ(-360deg); }   
}
@keyframes spinright
{  
100%   {transform: rotateZ(360deg); } 
100% {transform: rotateZ(-360deg); }  
}


#front_message_screen
{

						left:5%;
						
						bottom:1%;
						width:24%;
						height:5%;
						display:none;
						position: fixed;
						text-align: left;
						font-size: 3.5vh;
						color:darkblue;
						border-bottom: 0.5px solid;
						border-left: 0.5px solid;
						border-color:blue;
						
						padding: 0 0 0 1.5%;
						
						
						z-index:2001;
}
#front_fade_screen{
                        top:0px;
						left:0px;
						right:0px;
						bottom:0px;
						width:100%;
						height:100%;
						display:block;
						position: fixed;
						z-index:1000;
}
#index_frame{
	width:100%;
	height:100%;
}
#containit{
						top:0px;
						left:0px;
						right:0px;
						bottom:0px;
						width:100%;
						height:100%;

						display:none;
						background:#000;
						position: fixed;
						z-index:1;
					}

					

					

	#BG
	{
		top:0%;
		bottom: 0%;
		left: 0%;
		right: 0%;
		width: 100%;
		height: 100%;
		background: black;
		position: fixed;
		overflow: hidden;
		display: block;
		z-index: 1;
	}

	#them_bg
	{
        top:1%;
		
		left: 1%;
		
		width: 20%;
		height: 20%;
		
		position: fixed;
		
		display: block;
		z-index: 2;

	}
	#REGISTRATION_BG
	{
		top:0%;
		bottom: 0%;
		left: 0%;
		right: 0%;
		width: 100%;
		height: 100%;
		background: black;
		position: fixed;
		overflow: hidden;
		display: block;
		z-index: 1;

	}
	#REGISTRATION_INFO
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
		display: block;
		z-index: 10000;

	}

	#STEP_IN_BUTTON
	{

		bottom: 3%;
		
		right: 3%;
		width: 10%;
		height: 15%;
		background-image: url('/wiistream/images/nextstep.png');
	
	background-size: 90%;
	background-repeat: no-repeat;
	cursor: pointer;
		position: fixed;
		
		display: none;
		z-index: 2;
	}
	#STEP_IN_BUTTON:hover
	{

		
		background-image: url('/wiistream/images/nextsteph.png');
	
	background-size: 90%;
	background-repeat: no-repeat;
	cursor: pointer;
		
	}
	#STEP_IN_BUTTON:active
	{

		
		background-image: url('/wiistream/images/nextsteph.png');
	
	background-size: 88%;
	background-repeat: no-repeat;
	cursor: pointer;
		
	}

	#CENTERMEREGFORM
	{
		top:33%;
		bottom: 33%;
		left: 2%;
		right: 2%;
		width: 96%;
		height: auto;
		
	
		position: fixed;
		
		display: block;
		z-index: 2;
	}

	#error_message
	{
		width: auto;
    height: auto;
   
    text-align: center;
    color: red;
    margin:  2% 0 0 0;
    padding: 2% 0 0 0;
    font-size: 1em;

    
    position: relative;
	display:block;
	}
#noe_pass
	{
		bottom: 3%;
		
		left: 3%;
		width: 10%;
		height: 15%;
		background-image: url('/wiistream/images/nextstepnoe.png');
	
	background-size: 90%;
	background-repeat: no-repeat;
	cursor: pointer;
		position: fixed;
		
		display: none;
		z-index: 2;
	}
	#noe_pass:hover
	{
		
		background-image: url('/wiistream/images/nextstepnoeh.png');
	
	background-size: 90%;
	background-repeat: no-repeat;
	cursor: pointer;
		
	}
	#noe_pass:active
	{
		
		background-image: url('/wiistream/images/nextstepnoeh.png');
	
	background-size: 90%;
	background-repeat: no-repeat;
	cursor: pointer;
		
	}
	#yes_pass
	{
		bottom: 3%;
		
		right: 3%;
		width: 10%;
		height: 15%;
		background-image: url('/wiistream/images/nextstepyes.png');
	
	background-size: 90%;
	background-repeat: no-repeat;
	cursor: pointer;
		position: fixed;
		
		display: none;
		z-index: 2;
	}
	#yes_pass:hover
	{
		
		background-image: url('/wiistream/images/nextstepyesh.png');
	
	background-size: 90%;
	background-repeat: no-repeat;
	cursor: pointer;
		
	}
	#yes_pass:active
	{
		
		background-image: url('/wiistream/images/nextstepyesh.png');
	
	background-size: 90%;
	background-repeat: no-repeat;
	cursor: pointer;
		
	}
.checkboxOneOption {
    width: 100%;
    height: 20px;
    background: #333;
    
    margin:  20% 0 0 0;

    border-radius: 50px;
    position: relative;
	display:none;
}

input[type=checkbox]
{
	display: none;
}

.checkboxOneOption input[type=checkbox]:checked + label {
    left: 66.5%;
    background: #37cce5;
   


}
.checkboxOneOption:before {
    content: 'Public';
    position: absolute;
    top: 2%;
    left: 1.3%;
    height: 2px;
    color: green;
    font-size: 1em;
    
}
.checkboxOneOption:after {
    content: 'Private';
    position: absolute;
    top: 2%;
    right: 1%;
    height: 2px;
    color: red;
    font-size: 1em;
}

.checkboxOneOption label {
    display: block;
    width: 33%;
    height: 90%;
    border-radius: 50px;

    transition: all 0.9s ease;
    cursor: pointer;
    position: absolute;
    top: 5%;
    z-index: 2;
    left: 0.5%;
    background: #4e8fb5;
    
}


#user_pic
{
	top:5%;
		
		right: 5%;
		
		width: 5%;
		height: 10%;
		
		
		position: fixed;
		
		display: block;
		z-index: 2;
}

#passwd
{
	color: green;
	border: 0.5px solid;
	border-color: yellow;
	display: block;
}
#pinpal
{
	color: green;
	border: 0.5px solid;
	border-color: yellow;
	display: none;
}

#someones_pic
{
	top:5%;
		
		left: 5%;
		
		width: 5%;
		height: 10%;
		
		
		position: fixed;
		
		display: block;
		z-index: 2;
}

#user_pic_frame
{
	top:3%;
		
		right: 4%;
		
		width: 7.5%;
		height: 13.5%;
		
		
		position: fixed;
		
		display: block;
		z-index: 3;
}

#someones_pic_frame
{
	top:3%;
		
		left: 4%;
		
		width: 7.5%;
		height: 13.5%;
		
		
		position: fixed;
		
		display: block;
		z-index: 3;
}
#user_profile_pic_mask
{
       
		
		
		
	top:5%;
		
		right: 5%;
		
		width: 5%;
		height: 10%;
		
		
		position: fixed;
		
		display: block;
		z-index: 4;

}


#someones_profile_pic_mask
{
       
		
		
		
	top:5%;
		
		left: 5%;
		
		width: 5%;
		height: 10%;
		
		
		position: fixed;
		
		display: block;
		z-index: 4;

}

#pinnumber
{
	bottom: 40%;
		
		left: 40.5%;
		right: 35%;
		width: 15.2%;
		height: 10%;
		position: fixed;
		
		display: block;
		z-index: 2;
}


input {
	
	border: 1px solid;
  border-color: white;
  background-color:#333;
  padding: 2%;
  font-size: 1.2em;
  width: 100%;
}
input::placeholder {
  color: white;
}


#someones_name
{
	top:16%;
		
		left: 2.5%;
		
		width: 10%;
		height: 5%;
		
		
	text-align: center;
	color: white;
	font-size: 1em;
		position: fixed;
		
		display: block;
		z-index: 3;
}

#user_who
{
	bottom: 50%;
		
		left: 40.5%;
		right: 35%;
		width: 15.2%;
		height: 5%;
		
		
	text-align: center;
	color: white;
	font-size: 1.5em;
		position: fixed;
		
		display: block;
		z-index: 3;
}

#status_log
{
	bottom: 30%;
		
		left: 40.5%;
		right: 35%;
		width: 30.2%;
		height: 5%;
		
		background-color: red;
	text-align: center;
	color: white;
	font-size: 1em;
		position: fixed;
		
		display: block;
		z-index: 3;
}
#roundme
{
border-radius: 50%;	
}
#submit_pin_btn
{
	bottom: 45.2%;
		
		left: 50.4%;
		right: 35%;
		width: 5%;
		height: 5%;
		background-image: url('/wiistream/images/lock.png');
	background-position: 100%;
	background-size: 30%;
	background-repeat: no-repeat;
	cursor: pointer;
		position: fixed;
		
		display: block;
		z-index: 3;
}

#submit_pin_btn:hover
{
	background-image: url('/wiistream/images/unlock.png');
	background-position: 100%;
	background-size: 30%;
	background-repeat: no-repeat;
}

#submit_pin_btn:active
{
	background-image: url('/wiistream/images/unlock.png');
	background-position: 100%;
	background-size: 31%;
	background-repeat: no-repeat;
}

</style>