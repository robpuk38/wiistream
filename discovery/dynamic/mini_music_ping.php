<?php
//include "/assets/includes/dom/calls.php";

if(isset($_GET['youtubeid'])&& isset($_GET['type']))
{
		$youtubeID =$_GET['youtubeid'];
$ping_music_url_results = "http://www.convertmp3.io/fetch/?format=json&video=https://www.youtube.com/watch?v=".$youtubeID;



 $data=json_decode(file_get_contents($ping_music_url_results),TRUE); 

 $count=0;

 

  echo $data[$_GET['type']];

  
  	
  

	 
    
}
?>