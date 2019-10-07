 <!DOCTYPE html> 
 <html>
 <script src="js/jquery.min.js"></script> 
<head>

<style> 
	




#video_title
{
background: lightblue;
width: 0%;
height: 0%;
position: fixed;
z-index: 10;	
}


#video_player
{
background: black;
width: 50%;
height: 50%;
position: fixed;
z-index: 9;	
}
#video_url
{
background: green;
width: 14%;
height: 4%;


right: 2%;
bottom:1%;
position: fixed;
z-index: 10;	
}

</style>


</head>
<body>
		<div id="video_title">Boogie - Rainy Days ft. Eminem [Audio].mp4</div>


<div id="video_url"><a href="https://www.youtube.com/" target="_blank">https://www.youtube.com/</a></div>





<div id="video_player">

<?php       
if(isset($_GET['youtube']))
{


?>


<iframe id="ytplayer" type="text/html" width="640" height="360"
  src="https://www.youtube.com/embed/M7lc1UVf-VE?autoplay=1&origin=http://example.com"
  frameborder="0"></iframe>


<?php

	echo "i got my youtube";
}
else
{

?>

<video src="Boogie - Rainy Days ft. Eminem [Audio].mp4" controls width="100%" height="100%">
		
	</video>

<?php

echo "i got my videos";

?>






<?php
}


?>



	











</div>




















</body>
</html>