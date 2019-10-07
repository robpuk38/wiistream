<?php

	$ping_video_url_search = "https://www.youtube.com/results?search_query=".$fix_search;

	 $html = file_get_html( $ping_video_url_search );

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

			  ?>

              

              

              

              

             

                    <!--START Search Videos -->
<div id="Close_All_Videos">
<?php $video_row_ids = 1; ?>
									  <div id="video_js_onclick_count_<?php $video_row_ids ?>" style="background: #1b1f22; width: 99.2%; border-radius: 4px;
				border: solid 1px #ffffff; margin-top: 10px; margin-bottom: 10px;">
												<div>
													
													<div id="logo_pl"><img src="discovery/images/logo.png" width="32px" height="32px" /></div>
													

													<div id="site_name_pl"><h3><a href="https://www.youtube.com/watch?v=<?php echo $youtube_id ?>"><?php echo $clean_title ?></a></h3></div>
													<div id="site_dis_pl"><img src="https://www.youtube.com/yts/img/ringo/hitchhiker/logo_small-vflHpzGZm.png"/> <h4><?php echo $clean_title ?></h4><h1><i class="icon fa-file-video-o"></i></h1></div>

													<!--TODO Get Album Art-->
												    <div id="image_pl"><img src="<?php echo $newmyimg; ?>" width="252px" /></div>
												    <!-- -->
													<div id="go_to_play_pl"><button onclick="Go_To_Videos('<?php echo $youtube_id ?>','<?php echo $newmyimg; ?>','<?php echo $video_row_ids ?>','<?php echo $clean_title ?>')" >
 <i class="icon fa-file-video-o">Play</i>

 </button> </div>
												
												</div>
											
											
										
									</div>

</div>
<!--END Search Videos -->
                 
			 <?php

		  }

		  }

		  }

		  }

		  }
		}

	}
