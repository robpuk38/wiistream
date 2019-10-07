<style>
	#microsoft_player
	{
		width: 100%;
		height: 100%;
		background: black;
		top: 0px;
		left: 0px;
		right: 0px;
		bottom: 0px;
		position: fixed;
		z-index: 1;
	}

</style>
<?php

if(isset($_GET['@folder']) && !empty($_GET['@folder']) )
{

	
	$folder = $_GET['@folder'];
	echo "FOLDER:". $folder."<br>";
}
else
{
	
	$folder = './';
}

if(isset($_GET['@file']) && !empty($_GET['@file']))
{
$file = $_GET['@file'];
//echo "FILE:". $file."<br>";
}
else
{
$file = 'null';
}

if(isset($_GET['@line']) && !empty($_GET['@line']) )
{

	
	$line = $_GET['@line'];
	//echo "LINE:". $line."<br>";
}
else
{
	
	$line = '0';
}


if ($handle = opendir($folder)) 
{
   
    $count_files = 0;
   
   

    
    while (false !== ($entry = readdir($handle))) 
    {
     $count_files++;
    echo "ONE_LINE(".$count_files.")FOLDER(".$folder."/)FILE(".$entry.")<br>";
if($count_files == $line)
{


//echo $folder.$entry;
//echo $entry;
$Ishared = './IShared/';

	if(!file_exists($Ishared))

    {

		mkdir($Ishared,0777);

	 chmod($Ishared,0777);
}





$ext = pathinfo($entry, PATHINFO_EXTENSION);

//echo $file;

if($ext == 'mp4')
{
//echo "I AM IN MP4";
$Videos = $Ishared.'Videos/';

if(!file_exists($Videos))
{

		mkdir($Videos,0777);

	 chmod($Videos,0777);
}

echo $Videos.$entry;
	//copy($folder.$file, $Videos.$file);
	echo "<br>";
?>
<video id='microsoft_player' src="./<?php echo $Videos.$entry ?>" controls autoplay='true' allowfullscreen='true' width ='100%' height='100%'></video>
<?php
echo "<br><br>";
}
if($ext == 'mp3')
{

$Music = $Ishared.'Music/';

if(!file_exists($Music))
{

		mkdir($Music,0777);

	 chmod($Music,0777);
}

	copy($folder.$file, $Music.$file);
	echo "<br>";
?> 
<audio src="./<?php echo $Music.$file ?>" controls autoplay='true'></audio> 
<?php
echo "<br><br>";
}
if($ext == 'jpg' || $ext =='png' || $ext =='jpeg'|| $ext =='bmp'|| $ext =='gif')
{

$Pictures = $Ishared.'Pictures/';

if(!file_exists($Pictures))
{

		mkdir($Pictures,0777);

	 chmod($Pictures,0777);
}

	copy($folder.$file, $Pictures.$file);

	echo "<br>";
?> 
<img src="./<?php echo $Pictures.$file ?>"/> 
<?php
echo "<br><br>";
}

if($ext == 'txt' || $ext == 'ini' || $ext == 'log')
{
	$Documents = $Ishared.'Documents/';

if(!file_exists($Documents))
{

		mkdir($Documents,0777);

	 chmod($Documents,0777);
}

	copy($folder.$file, $Documents.$file);
echo "<br>";
readfile($Documents.$file); 

echo "<br><br>";

}
}


     


    }

}






?>
