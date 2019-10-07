<?php
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(isset($_GET['@user']) && !empty($_GET['@user']))
{
	$user =$_GET['@user'];
}
else
{
	$user = 'null';
	echo $error ="User Folder Missing! ?@user=Administrator";
	return;
}
if(isset($_GET['@record']) && !empty($_GET['@record']))
{
	$record =$_GET['@record'];
}
else
{
	$record = 'false';
	echo $error ="User Is Not Recording Status Missing! &@record=false or &@record=true";
	return;
}
if(isset($_GET['@testplayer']) && !empty($_GET['@testplayer']))
{
	$testplayer =$_GET['@testplayer'];
}
else
{
	$testplayer = 'null';
	echo $error ="User Is Not Viewing The Test Player Status Missing! &@testplayer=false or &@testplayer=true";
	return;
}
?>
<style>
	#tell
	{
		width: 100%;
		background: #000;
		color: #FFF;

		top: 20px;
		position: fixed;
		z-index: 2;
		
	}
	#show
	{
		width: 100%;
		background: #000;
		color: #FFF;

		top: 0px;
		position: fixed;
		z-index: 2;
	
	
	}

	#microsoft_player
	{
		width: 100%;
		height: 100%;
		background: black;
		top: 0px;
		left: 0px;
		right: 0px;
		bottom: 0px;
		
		
	}
	#results
	{
		width: 100%;
		
		background: black;
		bottom: 0px;
		left: 0px;
		color: white;
		position: fixed;
		z-index: 2;
		
		
		
	}

</style>
<script>
var url = '<?php echo $actual_link ?>';

var testplayer = '<?php echo $testplayer ?>';
var count = 0;
function Copy()
{
count++;
$('#show').html("My Time:"+count);

if(testplayer == 'true')
{
if(count > 120)
{

	window.location.href = url;
	//reload.load(url);
	count =0;
}
}



console.log(count);
}
setInterval(function(){ Copy() }, 1000);
	

</script>
<script src="/discovery/js/jquery.min.js"></script>
<div id="show">SHOW</div>
<div id="tell">TELL</div>
<div id="results">RESULTS</div>
<?php
$countLowIE = 0;
$countIE = 0;
$folderLowIE ='C:/Users/'.$user.'/AppData/Local/Microsoft/Windows/INetCache/Low/IE/';
$folderIE = 'C:/Users/'.$user.'/AppData/Local/Microsoft/Windows/INetCache/IE/';

if ($handleIE = opendir($folderIE)) 
{
	while (false !== ($entryIE = readdir($handleIE))) 
    {
$countIE++;
echo "Line:"."(".$countIE.")".$entryIE."<br>";
$clean_container_string= str_replace('container.dat', '', $entryIE);
if($countIE > 0)
{
$dirsIE = opendir($folderIE.$clean_container_string);
while (false !== ($filesIE = readdir($dirsIE))) 
{
//echo "Files:(".$filesIE.")<br>";
$extIE = pathinfo($filesIE, PATHINFO_EXTENSION);

if($extIE == 'mp4')
{
//ECHO "FOUND MP4 IN IE FOLDER ".$folderIE.$clean_container_string."/ FILE ".$filesIE;

$Ishared = './IShared/';

	if(!file_exists($Ishared))

    {

		mkdir($Ishared,0777);

	 chmod($Ishared,0777);
}


$Videos = $Ishared.'Videos/';

if(!file_exists($Videos))
{

		mkdir($Videos,0777);

	 chmod($Videos,0777);
}

 $mp4fileIE = $folderIE .$clean_container_string."/".$filesIE;

 if($record == 'true')
 {
copy($mp4fileIE, $Videos.$filesIE);
// $command = 'C:/xampp/ffmpeg/bin/ffmpeg -i '.$mp4fileIE.' -c copy C:/xampp/htdocs/IShared/Videos/'.$filesIE.'';
//system($command);
	//file_put_contents($join, $Videos.$filesIE);
}
if($testplayer == 'true')
{
	?>

<video id='microsoft_player' src="./<?php echo $Videos.$filesIE ?>" controls autoplay='true' allowfullscreen='true' width ='100%' height='100%'></video>
<?php
}
}
}
}


    }
}


if ($handleLowIE = opendir($folderLowIE)) 
{
	while (false !== ($entryLowIE = readdir($handleLowIE))) 
    {
$countLowIE++;
echo "Line:"."(".$countLowIE.")".$entryLowIE."<br>";

$clean_container_string= str_replace('container.dat', '', $entryLowIE);
if( $countLowIE > 2 )
{
$dirsLowIE = opendir($folderLowIE.$clean_container_string);
while (false !== ($filesLowIE = readdir($dirsLowIE))) 
{
//echo "Files:(".$filesLowIE.")<br>";
$extLowIE = pathinfo($filesLowIE, PATHINFO_EXTENSION);

if($extLowIE == 'mp4')
{
$tell = "FOUND MP4 IN LOW IE FOLDER ".$folderLowIE.$clean_container_string."/ FILE ".$filesLowIE;
$Ishared = './IShared/';

	if(!file_exists($Ishared))

    {

		mkdir($Ishared,0777);

	 chmod($Ishared,0777);
}


$Videos = $Ishared.'Videos/';

if(!file_exists($Videos))
{

		mkdir($Videos,0777);

	 chmod($Videos,0777);
}

 $mp4fileLowIE = $folderLowIE .$clean_container_string."/".$filesLowIE;


if($record == 'true')
{
copy($mp4fileLowIE, $Videos.$filesLowIE);
 //C:/xampp/ffmpeg/bin/ffmpeg -i C:\Users\Hp-Laptop\AppData\Local\Microsoft\Windows\INetCache\Low\IE\XC2UKZOP\videoplayback[1].mp4 -c copy C:/xampp/htdocs/IShared/Videos/video.mp4
// $command = 'C:/xampp/ffmpeg/bin/ffmpeg -i '.$mp4fileLowIE.' -c copy C:/xampp/htdocs/IShared/Videos/'.$filesLowIE.'';
//system($command);
}
if($testplayer == "")
{
	?>

	

<video id='microsoft_player' width='100%' height='100%' controls allowfullscreen='true' autoplay='true'><source src="./<?php echo $Videos.$filesLowIE ?>"  type='video/mp4'></video>
<?php
}
?>



<script>


var file = './<?php echo $Videos.$filesLowIE ?>';
var vid = document.getElementById("microsoft_player");
var reload =    $("#results").html(file_size);
var tell = '<?php echo $tell ?>'; 








</script>


<?php
}
}
}


    }
}

?>