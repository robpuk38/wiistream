<?php
$local_root = $_SERVER['DOCUMENT_ROOT'];
include $local_root."/assets/includes/dom/calls.php";


if(isset($_POST['Search_Field']) && isset($_POST['Search_Field_Type']))

{

	 $search =$_POST['Search_Field'];
	 $serach_type=$_POST['Search_Field_Type'];

	 $fix_search = str_replace(' ', '-', $search);

if($serach_type == 'Eye')
    {



    }


if($serach_type == 'links')
    {

    }

    if($serach_type == 'music')
    {
     include "../dynamic/music.php";
    }

    if($serach_type == 'videos')
    {
     include "../dynamic/video.php";
    }

    if($serach_type == 'movies')
    {
     $ping_movies_url_search = "https://yts.am/browse-movies/$fix_search/all/all/0/latest";

	 $html = file_get_html( $ping_movies_url_search );

	 $tagids = $html->find('<img');
$movies_row_ids = 1;
	 if(empty($tagids))
	 {
	 	echo "WE DO NOT HAVE NOTHING FROM THIS SITE SEARCH A NEW SITE NOW";

	 	

	 
	 }
	 else
	 {

	 }

   

    sleep(1);


foreach ($tagids as $tagid) 

{

	

	 $getat = $tagid->getAttribute('src');

	if($getat)
	{
		$fix_file_img = str_replace('https://yts.am/assets/images/website/logo-YTS.svg', '', $getat);
		$fix_file_img1 = str_replace('/assets/images/website/ajax-spinner.gif', '', $fix_file_img);
		
$fix_file_img2 = str_replace('https://img.yts.am/assets/images/movies/', '', $fix_file_img1);
 $fix_file_img3 = str_replace('/medium-cover.jpg', '', $fix_file_img2);
 $fix_file_Name = str_replace('_', ' ', $fix_file_img3);

 $create_file_Name = str_replace(' ', '-', $fix_file_Name);
 $create_file_search_url = "https://yts.am/movie/".$create_file_Name;

		?>

		







<!--START Search Movies -->
<div id="Close_All_Movies">
	<?php $movies_row_ids++; 

if($movies_row_ids > 3)
{
	?>

									  <div id="movies_js_onclick_count_<?php $movies_row_ids ?>" style="background: #1b1f22; width: 99.2%; border-radius: 4px;
				border: solid 1px #ffffff; margin-top: 10px; margin-bottom: 10px;">
												<div>
													
													<div id="logo_pl"><img src="/images/logo.png" width="32px" height="32px" /></div>
													

													<div id="site_name_pl"><h3><?php echo $fix_file_Name; ?></h3></div>
													<div id="site_dis_pl"><h4><?php echo $movies_row_ids; ?></h4><h1><i class="icon fa-file-movie-o"></i></h1></div>

													<!--TODO Get Video Art-->
												    <div id="image_pl"><img src="<?php echo $fix_file_img1; ?>" width="252px" /></div>
												    <!-- -->
													<div id="go_to_play_mov_pl"><button onclick="Go_To_Movies('<?php echo $create_file_Name ?>','<?php echo $fix_file_img1; ?>','<?php echo $movies_row_ids ?>')" >
 <i class="icon fa-file-movie-o">Play</i>

 </button> </div>
												
												</div>
											
											
										
									</div>

</div>
<!--END Search Movies -->






	<?php
}
		
	}
	

	
	 
}
    }

    








}



?>

