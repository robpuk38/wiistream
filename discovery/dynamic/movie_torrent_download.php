<?php
include $local_root."/discovery/includes/simple_html_dom.php";
if(isset($_GET['torrent']))
{
$search =$_GET['torrent'];
$ping_movies_url_search = "https://yts.am/movie/".$search;

	 $html = file_get_html( $ping_movies_url_search );

	 $tagids = $html->find('<a');

	 if(empty($tagids))
	 {
	 	echo "WE DO NOT HAVE NOTHING FROM THIS SITE SEARCH A NEW SITE NOW";

	 	

	 
	 }
	 else
	 {

	 }

   

    sleep(2);
$count = 0;

foreach ($tagids as $tagid) 

{
$count++;
 $getat = $tagid->getAttribute('href');

  if (strpos($getat,'/download/') !== false && $count == 12 )

        {



//$valore=split("http://",$getat);

        	/*

https://yts.am/movie/smallfoot-2018
		https://ww.gomovies.sc/movie/transformers-revenge-of-the-fallen-2009-free/watching/?ep=9
		https://www2.putlockerfree.sc/films/transformers-revenge-of-the-fallen-2009/watching.html
		https://oload.info/embed/vAWvpESaOr4
https://oload.info/stream/bo3nX8F9L98~1546079094~68.38.0.0~WtpC7wcP
        	*/


    
    	
    	echo $getat;
    
    
    
    

    
    



	

         

        }


}


}

?>