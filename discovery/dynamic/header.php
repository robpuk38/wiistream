
<?php
System_Pageing("Header.php",$Debuging);
/*
if(page is not index.php return index.php)

*/
?>




<title><?php Insert_Var($Site_Name); ?></title> 



<?php

if(isset($Activate_Css))
{
	if($Activate_Css == "True")
	{
		?>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" /> 
        <link rel="stylesheet" href="css/loader.css" type="text/css">
        <link rel="stylesheet" href="css/thumbs.css" type="text/css">
        <link rel="stylesheet" href="css/main.css" type="text/css" /> 
          
        
        <noscript><link rel="stylesheet" href="css/noscript.css" /></noscript>


        <?php
    }
}

?>




<!--START New_Loader Tag -->
    <div class="new_loader">
                    
    <!--START Discription Tag -->                   
        <div id="dis">

            <!--START Header Tag --> 
                <header id="header">

                    <!--START Header_Eye_Switch Tag --> 
                        <div id="header_eye_switch" class="logo">
                            
                            <span  class="icon fa-eye"></span>
                        </div>
                    <!--END Header_Eye_Switch Tag --> 

                        <!--START Show_Search_Field Tag --> 
                            <div  id="Show_Search_Field" role="search" style="display:none;"> 
                            
                                <!--START Content Tag -->
                                    <div class="content">
                                         
                                        <!--START Inner Tag -->
                                            <div class="inner">
                                                  <h1><img src="../discovery/images/mini_white_logo.png" width="45px" />isc<i class="fa fa-search"></i>very</h1>
                                 
                                                             <!--START Header Error Message Tag-->
                                                                 <div id="header_error_message" onclick="Remove_Error_Message()"><div id="Random_Search_Subjective_Thought"></div></div>
                                                             <!--END Header Error Message Tag-->
                                                    <!--START Header_All_Seeing_Message Tag -->
                                                        <div id="header_all_seeing_mes">
                                 	                        <h5>The All Seeing Eye.</h5>
                                                        </div>
                                                    <!--END Header_All_Seeing_Message Tag -->

                                                        <!--START Ui 1 Action Tag -->
                                                             <ul class="actions" >

                                                               <input id="infield" type="text"   style=" border-color:#fff; width: 100%;" onKeyUp="Get_Text_Field_Value(this.value)">


                                                                        <span id="My_Search_Button" class="fa fa-search" onclick="Search_For_The_File()" onmouseenter="Hover_In('My_Search_Button','yellow')" onmouseleave="Hover_Out('My_Search_Button','white')" >Find</span> 

                                                             </ul>
                                                        <!--END Ui 1 Action Tag -->

                                                             

                                            </div>
                                         <!--END Inner Tag -->

                                    </div>
                                 <!--END Content Tag -->
                            
                            </div>
                        <!--END Show_Search_Field Tag --> 
                       
                       <!--START Ui 2 Action Tag -->
                            <ul class="actions">

                                 <li id="search_exit_type"> 

                                  <span id="My_Exit_Button" class="fa fa-eye" onclick="I_Clicked_Filters_Button()" onmouseenter="Hover_In('My_Exit_Button','yellow')" onmouseleave="Hover_Out('My_Exit_Button','white')" >
                                           Eye
                                    </span> 
                                </li>
                                <li id="search_filters_type"> 

                                	<span id="My_Filter_Button" class="fa fa-info" onclick="I_Clicked_Filters_Button()" onmouseenter="Hover_In('My_Filter_Button','yellow')" onmouseleave="Hover_Out('My_Filter_Button','white')" >
                                           Filters
                                    </span> 
                                </li>

                                <li id="search_links_type">
                                  
                                	<span id="My_Links_Button" class="fa fa-link" onclick="Search_Type('links')"  onmouseenter="Hover_In('My_Links_Button','yellow')" onmouseleave="Hover_Out('My_Links_Button','white')" >
                                           Links
                                    </span> 
                                </li>

                                <li id="search_images_type"> 
                               	    <span id="My_Images_Button" class="fa fa-image" onclick="Search_Type('images')"  onmouseenter="Hover_In('My_Images_Button','yellow')" onmouseleave="Hover_Out('My_Images_Button','white')" >
                                           Images
                                    </span> 
                                </li>
                               
                                <li id="search_music_type"> 
                                	<span id="My_Music_Button" class="fa fa-music" onclick="Search_Type('music')"  onmouseenter="Hover_In('My_Music_Button','yellow')" onmouseleave="Hover_Out('My_Music_Button','white')" >
                                           Music
                                    </span> 
                                </li>

                                <li id="search_videos_type"> 
                                	<span id="My_Videos_Button" class="fa fa-file-video-o" onclick="Search_Type('videos')"  onmouseenter="Hover_In('My_Videos_Button','yellow')" onmouseleave="Hover_Out('My_Videos_Button','white')" >
                                           Videos
                                    </span> 
                                </li>

                                <li id="search_movies_type"> 
                                	<span id="My_Movies_Button" class="fa fa-file-movie-o" onclick="Search_Type('movies')"  onmouseenter="Hover_In('My_Movies_Button','yellow')" onmouseleave="Hover_Out('My_Movies_Button','white')" >
                                           Moives
                                    </span> 
                                </li>
                               
                              
                                <li id="search_people_type"> 
                               	    <span id="My_People_Button" class="fa fa-users" onclick="Search_Type('people')"  onmouseenter="Hover_In('My_People_Button','yellow')" onmouseleave="Hover_Out('My_People_Button','white')" >
                                           People
                                    </span> 
                                </li>

                                <li id="search_phones_type"> 
                                	<span id="My_Phones_Button" class="fa fa-phone" onclick="Search_Type('phones')"  onmouseenter="Hover_In('My_Phones_Button','yellow')" onmouseleave="Hover_Out('My_Phones_Button','white')" >
                                           Phones
                                    </span> 
                                </li>
                                
                            </ul>
                       <!--END Ui 2 Action Tag -->
                        
                </header>
           <!--END Header Tag -->
     
        </div>
    <!--END Discription Tag --> 





</div>
<!--END New_Loader Tag --> 






