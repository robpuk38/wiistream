<?php
if(isset($_GET['url']))
{
$url =$_GET['url'];
}

if(empty($url))
{
	
	/*
	https://translate.google.com/#view=home&op=translate&sl=auto&tl=en&text=a
	https://translate.google.com/gen204?client=webapp&ttsstart=textlen=1,tl=en,total=1,ttslocation=2
	https://translate.google.com/gen204?client=webapp&tbphrase=length=1
	https://translate.google.com/translate_tts?ie=UTF-8&q=a&tl=en&total=1&idx=0&textlen=1&tk=1338.432973&client=webapp
	
	
	
	https://translate.google.com/gen204?client=webapp&ttsplaystart=textlen=1,tl=en,total=1,ttslocation=2,idx=0,time=272
	https://translate.google.com/gen204?client=webapp&ttsplaystart=textlen=1,tl=en,total=1,ttslocation=2,idx=0,time=272
	https://play.google.com/log?format=json&hasfast=true&authuser=0
	
	*/
	header('Location: https://translate.google.com/translate_tts?ie=UTF-8&q=Start%3APlease%3AProvide%3AThe%3Aurl%3AVariable%3AAddress%3ATo%3AFinish&tl=en&total=1&idx=0&textlen=55&tk=677500.837643&client=webapp');
	echo $tt = "(_START:TALK:{Start:Please:Provide:The:url:Veriable:Address:To:Finish}:TALK:END_)";
	?>
   
    
    <audio scr=" " controls="1" autoplay="1"></audio>
    
     
 
    <?php

	return;
}
else
{
	$local_root = $_SERVER['DOCUMENT_ROOT'];
include $local_root."/assets/includes/dom/calls.php";






	// $html = file_get_html( $url );

	// $tagids = $html->find('<div');



    sleep(1);
	
	function peace_or_part($fromurl,$tourl,$findtag,$atdomdoc)
{
	if(empty($fromurl) || empty($tourl) || empty($findtag) || empty($atdomdoc))
	{
		echo "(_START:FROMEURL:".$fromurl.":FROMURL:END_)(_START:TOURL:".$tourl.":TOURL:END_)(_START:FINDTAG:".$findtag.":FINDTAG:END_)(_START:ATDOMDOC:".$atdomdoc.":ATDOMDOC:END_)(_START:ERROR:COMMAND:ONE:FAILED:ALL:FAILED:COMMAND:ERROR:END_)";
		return;
	}
	$html = file_get_html( $fromurl );

	 $tagids = $html->find('<'.$findtag);



    sleep(1);
	if (strpos($fromurl,$tourl) !== false)
	{
	
	
	
	$count=0;
	foreach ($tagids as $tagid) 
	{
		 echo $count++;
	     echo $a = $tagid->getElementByTagName('a');
		 echo $images= $tagid->getElementByTagName('img');
		 echo $script= $tagid->getElementByTagName('script');
	}
	}
}

peace_or_part($url,$url,'div',$_SERVER['HTTP_HOST']);



$count = 0;
$clean_num =0;
$memcount = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];







if (strpos($url,'https://m.facebook.com/') !== false)
	{
		$cookie = tempnam ("../tmp", "CURLCOOKIE");
  $verbose = fopen('php://temp', 'rw+');
  $timeout =3000;
  $ch = curl_init();
  curl_setopt( $ch, CURLOPT_URL, $url );
  curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36 Edge/18.17763');
  curl_setopt( $ch, CURLOPT_COOKIEJAR, $cookie );
  curl_setopt( $ch, CURLOPT_COOKIEFILE, $cookie ); //
  curl_setopt( $ch, CURLOPT_COOKIESESSION, true );
  curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false); //
  curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
  curl_setopt( $ch, CURLOPT_ENCODING, "" );
  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
  curl_setopt( $ch, CURLOPT_AUTOREFERER, true );
  curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, $timeout );
  curl_setopt( $ch, CURLOPT_TIMEOUT, $timeout );
  curl_setopt( $ch, CURLOPT_MAXREDIRS, 10 );
		
		
  curl_setopt( $ch, CURLOPT_VERBOSE, true);
  curl_setopt( $ch, CURLOPT_STDERR, $verbose);
		


	 $html = curl_exec($ch);


	 $strip_tags_start = str_replace('<',"(_START:",$html);
	  $strip_tags_end = str_replace('>',":END_)",$strip_tags_start);

	 $strip_div_start = str_replace('(_START:div:END_)','',$strip_tags_end);
	 $strip_div_end = str_replace('(_START:/div:END_)','', $strip_div_start);
	 
	 
if (strpos($strip_div_end,"https") !== false)
{
	echo "?PLs".$strip_div_end;
}
else
{
	echo"0";
}




	 


	$verboseLog = stream_get_contents($verbose);
	//curl_close($curl);




		
	return;
	}










if (strpos($url,'https://gostream.site/123movies/') !== false)
	{
	
	
	
	$count++;
	foreach ($tagids as $tagid) 
	{
	
	 echo $count++."<br>";
	
	
	 
	
	
		 $a = $tagid->getElementByTagName('a');
		 echo $images= $tagid->getElementByTagName('img');
	
		 
		 
	
		if($count > 31)
		{
			if($count < 448)
			{
				$clean_num++;
				$count;
				 $images;
	
				$clean_image_url = str_replace("<img", "cover-id=".$clean_num."",$images);
	
				if(!empty($a))
		 {
			$movie_href =  "movie-url=".$a->getAttribute('href');
		 }
		 else{
			$movie_href =  "movie-url=https://www.putlocker-hd.is/tvshows/valley-of-the-boom/";
		 }
		
				 
				 $strip_img_src_out = str_replace("src=","img-url=",$clean_image_url);
				 $strip_alt = str_replace('alt=',"titles-name=",$strip_img_src_out);
				
				 $strip_img_quotes = str_replace('"',"",$strip_alt);
				 
				$build = "(_START:".$strip_end_tag = str_replace(">"," ".$movie_href."",$strip_img_quotes).":END_)";
	
				echo $error_strip = str_replace("(_START::END_)","",$build);
				
	
			}
		}
		
		
	
	
			
	
	/*
	
	 $images_href = $images->getAttribute('data-original');
	  $Movie_Location_href = $a->getAttribute('href');
	
	  $Strip_Movie_Location_hrefs_Url_To_Get_Movie_Title_Name = str_replace("https://www.putlocker-hd.is/movies/", "",$Movie_Location_href);
	  $Strip_Hyfin_Space = str_replace("-", " ",$Strip_Movie_Location_hrefs_Url_To_Get_Movie_Title_Name);
	  $Cap_First_Letter = ucfirst($Strip_Hyfin_Space);
	  $Strip_Forword_Slash = str_replace("/", "",$Cap_First_Letter);
	  $Clean_Movie_Title = $Strip_Forword_Slash;
	
				
		
			 echo $images_href;
			 echo $Movie_Location_href; 
				 
			  echo $Clean_Movie_Title;  */
	
		
	
	
	
	}
	
	
	
	return;
	}




























if (strpos($url,'https://www.putlocker-hd.is/') !== false)
	{
	
	
	
	$count++;
	foreach ($tagids as $tagid) 
	{
	
	 $count++;
	
	
	 
	
	
		 $a = $tagid->getElementByTagName('a');
		 $images= $tagid->getElementByTagName('img');
	
		 
		 
	
		if($count > 31)
		{
			if($count < 448)
			{
				$clean_num++;
				$count;
				 $images;
	
				$clean_image_url = str_replace("<img", "cover-id=".$clean_num."",$images);
	
				if(!empty($a))
		 {
			$movie_href =  "movie-url=".$a->getAttribute('href');
		 }
		 else{
			$movie_href =  "movie-url=https://www.putlocker-hd.is/tvshows/valley-of-the-boom/";
		 }
		
				 
				 $strip_img_src_out = str_replace("src=","img-url=",$clean_image_url);
				 $strip_alt = str_replace('alt=',"titles-name=",$strip_img_src_out);
				
				 $strip_img_quotes = str_replace('"',"",$strip_alt);
				 
				$build = "(_START:".$strip_end_tag = str_replace(">"," ".$movie_href."",$strip_img_quotes).":END_)";
	
				echo $error_strip = str_replace("(_START::END_)","",$build);
				
	
			}
		}
		
		
	
	
			
	
	/*
	
	 $images_href = $images->getAttribute('data-original');
	  $Movie_Location_href = $a->getAttribute('href');
	
	  $Strip_Movie_Location_hrefs_Url_To_Get_Movie_Title_Name = str_replace("https://www.putlocker-hd.is/movies/", "",$Movie_Location_href);
	  $Strip_Hyfin_Space = str_replace("-", " ",$Strip_Movie_Location_hrefs_Url_To_Get_Movie_Title_Name);
	  $Cap_First_Letter = ucfirst($Strip_Hyfin_Space);
	  $Strip_Forword_Slash = str_replace("/", "",$Cap_First_Letter);
	  $Clean_Movie_Title = $Strip_Forword_Slash;
	
				
		
			 echo $images_href;
			 echo $Movie_Location_href; 
				 
			  echo $Clean_Movie_Title;  */
	
		
	
	
	
	}
	
	
	
	return;
	}







}





?>