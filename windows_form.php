<!DOCTYPE html>
<html>
<?php 
if(isset($_GET['@rightbar']) && !empty($_GET['@rightbar']))
{
	
     $rightbar = $_GET['@rightbar'];
}
else
{
	$rightbar = 'rightbar';
}

if(isset($_GET['@leftbar']) && !empty($_GET['@leftbar']))
{
	
     $leftbar = $_GET['@leftbar'];
}
else
{
	$leftbar = 'leftbar';
}
?>
<meta>
META
</meta>

<div id='head'>

	<style>
		body
		{
			background: black;
			overflow: hidden;
		}
#rightsidebar
{
	top: 0px;
	right: 0px;
	width: 22.5%;
	height: 100%;
	background: grey;
	border-left: 0.5px solid;
	border-color:white;
	position: fixed;
text-align: right;
opacity: 0.5;
z-index: 100;
}
#leftsidbar
{
	top: 0px;
	left: 0px;
	width: 22.5%;
	height: 100%;
	background: grey;
	border-right: 0.5px solid;
	border-color:white;
	position: fixed;
text-align: left;
opacity: 0.5;
z-index: 100;
}

#div1
{
	top: 0px;
	left: 22.4%;
	right: 22.6%;
	width: 55%;
	height: 100%;
	background: white;
	border: 1px solid;
	border-color:white;
	position: fixed;

opacity: 0.5;
z-index: 100;
}


	</style>
	HEAD
</div>

<div id='rightsidebar'>
RIGHT SIDE BAR
	</div>





<div id="body" onload="TestHtml('body','div','id','divid1','outer text of div')">

<div id="div1">
   <video src="1.mp4" controls autoplay></video>
</div>
	
	</div>

	<div id='leftsidbar'>
		LEFT SIDE BAR
	</div>

	<div id='foot'>
		FOOT
	</div>

</html>






<script>
var GetTag = '';
var CreateTag = '';
var CreateOuterText = '';
var CreateAttribute = '';
GetNewTagCreated = '';




//EXAMPLE TestHtml('body','div','id','divid1','outer text of div')
 function TestHtml(gettag,createtag,createatribute,createatributevalue,createtext)
 {

GetTag = document.getElementById(gettag);
CreateTag = document.createElement(createtag);

GetNewTagCreated = GetTag.appendChild(CreateTag);

CreateOuterText = document.createTextNode(createtext);
CreateTag.appendChild(CreateOuterText);


      
CreateAttribute = document.createAttribute(createatribute);        
CreateAttribute.value = createatributevalue;            
GetNewTagCreated.setAttributeNode(CreateAttribute);                      


 
 }

 


function run()
{
	
}
setInterval(function(){ run() }, 2000);


</script> 

