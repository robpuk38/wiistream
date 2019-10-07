<?php

$db_host = "127.0.0.1";
$db_name = "discovery";
$db_user = "root";
$db_pass = "";
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
 // Check connection
if ($conn->connect_error) 
{
     die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM random_music_comments ORDER BY id DESC LIMIT 1"; 

  $query = mysqli_query($conn,$sql) or trigger_error("Query Failed: " . mysqli_error()); 

 

  

  if (mysqli_num_rows($query) == 1) 

  { 

  $row = mysqli_fetch_assoc($query);

  $Last =$row['id'];
  }

  $sql = "SELECT * FROM random_music_comments ORDER BY id ASC LIMIT 1"; 

  $query = mysqli_query($conn,$sql) or trigger_error("Query Failed: " . mysqli_error()); 

 

  

  if (mysqli_num_rows($query) == 1) 

  { 

  $row = mysqli_fetch_assoc($query);

  $First =$row['id'];
  }

 $music_row_ids = 1; 

	$ping_music_url_search = "https://www.youtube.com/results?search_query=".$fix_search;

	 $html = file_get_html( $ping_music_url_search );

	 $tagids = $html->find('<a');

   

    sleep(1);


foreach ($tagids as $tagid) 

{

	

	$getat = $tagid->getAttribute('aria-describedby');

	if($getat)

	{


	$title = $tagid->getAttribute('title');

	$pattern = "/[^\w.-]/";

	$fix_all_invalied_chars = preg_replace($pattern,'_',$title); 

    

	$fix_all_words_to_lower_case= strtolower($fix_all_invalied_chars);

	

   $fix_file_name = str_replace('_', ' ', $fix_all_words_to_lower_case);

    $fix_file_name1 = str_replace('-', ' ', $fix_file_name);

	$fix_file_name3 = str_replace('official', ' ', $fix_file_name1);

	$fix_file_name4 = str_replace('lyrics', ' ', $fix_file_name3);

	$fix_file_name5 = str_replace('video', ' ', $fix_file_name4);

	 $fix_file_name6 = str_replace('music', ' ', $fix_file_name5); 

	 $fix_file_name7 = str_replace('cover', ' ', $fix_file_name6); 

	 $fix_file_name8 = str_replace('lyric', ' ', $fix_file_name7);

	 

	 $fix_file_name9 = str_replace('quot', ' ', $fix_file_name8);

	 $fix_file_name10 = str_replace('.', ' ', $fix_file_name9);

	 $fix_file_name11 = str_replace('amp', ' ', $fix_file_name10);

	 

	$fix_all_words_frist_letter_to_cap = ucwords($fix_file_name11);

    $clean_title = trim($fix_all_words_frist_letter_to_cap);

	$stringed_title = str_replace(' ', '', $clean_title);

	

	$tagit = $tagid->getAttribute('href');

	 $youtube_id= str_replace('/watch?v=', '', $tagit);

	if (strpos($youtube_id,'/user/') !== false)

   {

	   

     }

	 else

	 {

	    if (strpos($youtube_id,'list=') !== false)

        {

         

        }

		else

		{

			if (strpos($youtube_id,'/channel/') !== false)

            {

         

            }

		    else

		   {

	$myimg = "<img src='//i.ytimg.com/vi/".$youtube_id."/mqdefault.jpg' width=\"250px\" height=\"140px\" />";

	$newmyimg = "//i.ytimg.com/vi/".$youtube_id."/mqdefault.jpg";

	      if(!file_exists($myimg))

          {

			  

		  if(!$youtube_id == '')

		  {

			 //echo $j++;
$music_row_ids++;
			  ?>

              

              

              

              

             

                    <!--START Search Music -->
<div id="Close_All_Music">

									  <div id="music_js_onclick_count_<?php $music_row_ids ?>">
												<div>
													
													
													

													<div id="site_name_pl" style="display: none;"><h3><a href="https://www.youtube.com/watch?v=<?php echo $youtube_id ?>"><?php echo $clean_title ?></a></h3></div>
													<div id="site_dis_pl"><h4><?php echo $clean_title ?></h4><h1><i class="icon fa-music"></i></h1></div>

													<!--TODO Get Album Art-->
												    <div id="image_pl"><img src="<?php echo $newmyimg; ?>" width="252px" /></div>
												    <!-- -->
													<div id="go_to_play_pl"><button onclick="Go_To_Music('http://www.convertmp3.io/fetch/?video=https://www.youtube.com/watch?v=<?php echo $youtube_id ?>','<?php echo $newmyimg; ?>','<?php echo $music_row_ids ?>','<?php echo $clean_title ?>')" >
 <i class="icon fa-music">Play</i>

 </button> </div>
												
												</div>
											
											
										
									</div>

</div>
<!--END Search Music -->
                 
			 <?php



$sql = "SELECT * FROM random_music_comments WHERE id = '".rand($First,$Last)."' ORDER BY id DESC LIMIT 1"; 

  $query = mysqli_query($conn,$sql) or trigger_error("Query Failed: " . mysqli_error()); 

 

  

  if (mysqli_num_rows($query) == 1) 

  { 

  $row = mysqli_fetch_assoc($query);

  $Random_Comments =$row['comments'];
?>
<style>
 #HELPME_<?php echo $music_row_ids ?>
{
	display: none;
    width:15%;
    height: 2.5%;
    right: 1.1%;
    top: <?php echo $music_row_ids ?>2px;
    text-align: right;
   font-size: 0.6rem;
    font-weight: 300;
 background-color:#000;
    outline: 0;
    
   padding: 0 1.25rem 0 1.35rem;
    text-decoration: none;
    text-transform: uppercase;
    white-space: nowrap;
    color: #fff;
    
    position: absolute;
    position: fixed;
    z-index: 60001;
}
</style>

<div id="HELPME_<?php echo $music_row_ids ?>"><?php echo $Random_Comments; ?></div>

 <?php
  }


$sql = "INSERT INTO random_search_comments (comments) 
			 VALUES ('$Random_Comments $clean_title<script>
$.post(''./dynamic/mini_music_ping.php?type=title&youtubeid=$youtube_id'',{},function(data){Console(data);$(''#LTitle'').html(data);});
$.post(''./dynamic/mini_music_ping.php?type=length&youtubeid=$youtube_id'',{},function(data){Console(data);$(''#LTime'').html(data);});
$.post(''./dynamic/mini_music_ping.php?type=link&youtubeid=$youtube_id'',{},function(data){Console(data);myMedia.src = data;Mini_Player_Loaded = true;Is_Mini_Player_Playing = true;});
$(''#Left_Foot_Placment'').css(''background-image'',''url(//i.ytimg.com/vi/$youtube_id/mqdefault.jpg)''); 
$(''#Left_Foot_Placment'').css(''background-position'',''center'');
$(''#Left_Foot_Placment'').css(''background-size'',''100%'');
$(''#Left_Foot_Placment'').css(''background-repeat'',''no-repeat'');
$(''#Left_Foot_Placment'').fadeIn(''fast'');
			 </script>')";
             $res = mysqli_query($conn,$sql) or die("Insertion failed: " . $conn->connect_error);
			 
             

		

		  }

		  }

		  }

		  }

		  }
		}

	}
