<?php

if(isset($_GET['ytid']))

{

 



$youtube_id = $_GET['ytid'];	

 $img="//img.youtube.com/vi/".$youtube_id."/mqdefault.jpg";



   

$data=json_decode(file_get_contents('http://api.youtube6download.top/api/?id='.$youtube_id),TRUE); 

 $count=0;

 $active = "false";

  foreach ($data['preview_video'] as $video)

  { 

    	

   

  

  if(($video['type'] == "video/mp4"))

  {

  $count++;

 $active = "true";

 if($count == 1)

 {

	

      ?>

      <video poster="<?php echo $img; ?>"  src="<?php echo $video['url']; ?>" style="width:100%; height:100%; z-index:1; position:absolute; top:0px; left:0px; right:0px; bottom:0px; overflow:hidden; background-color:#000000;" autoplay="autoplay" controls="controls">

	  

      <?php 

 }

 else

 {

	echo "error CHANGE TO =".$video['url'];;

 }

 echo "HOW MAN IS THERE? ".$count;

  }

  else

  {

	  echo "error NO MP4= CHANGE TO =".$video['type'];

  }

  }  





if($active == "false")

{

	

	

		

		?>







<iframe width="800" height="100%" src="https://www.youtube.com/embed/<?php echo $youtube_id; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width:100%; height:100%; z-index:1; position:absolute; top:0px; left:0px; right:0px; bottom:0px; overflow:hidden; background-color:#000000;"></iframe>


        <?php

	

print_r($data);

}







return;







  

}

 

 ?>

 

