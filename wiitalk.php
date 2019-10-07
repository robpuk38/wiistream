<?php
if(isset($_GET['status']) || isset($_GET['urlmessage']))
{
	
	if($_GET['status'] == "1-page-sameas-php")
	{
 header('Location: https://translate.google.com/translate_tts?ie=UTF-8&q=Start%3APlease%3AProvide%3AThe%3Aurl%3AVariable%3AAddress%3ATo%3AFinish&tl=en&total=1&idx=0&textlen=55&tk=677500.837643&client=webapp');
	}
	else
	{
	 header('Location: '.$_GET['urlmessage'].'');
	}
}
?>
