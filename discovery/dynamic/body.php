<?php
/*
//Information
//Body Code Contents
*/
System_Pageing("Body.php",$Debuging);
?>

<script>
    /*Search_For_The_File();*/
    Load_Search_System();
</script>
<div id="display_place_holder" >

<div id="Title_Display_"></div>
<div id="Title_Display"></div>

                                <!--START THIS IS MY MEDIA PLAYER CLOSE BUTTON-->
                                <div id="close_btn" onclick="Media_Player_Buttons('close_btn')" onmouseenter="Media_Player_Buttons('Im_In_Close_Up')" onmouseleave="Media_Player_Buttons('Im_Out_Close_Up')">
                                    <img id="Im_In_Close" src="/discovery/images/close_up.png" width="100%" /> 
                                </div>
                                <div id="close_btn_" onclick="Media_Player_Buttons('close_btn_')" onmouseenter="Media_Player_Buttons('Im_In_Close_Down')" onmouseleave="Media_Player_Buttons('Im_Out_Close_Down')">
                                    <img id="Im_In_Close" src="/discovery/images/close_down.png" width="100%" /> 
                                </div>
                                <!--END THIS IS MY MEDIA PLAYER BACK BUTTON-->

                                   <!--START THIS IS MY MEDIA PLAYER NEXT BUTTON-->
                                <div id="next_btn" onclick="Media_Player_Buttons('next_btn')" onmouseenter="Media_Player_Buttons('Im_In_Next_Up')" onmouseleave="Media_Player_Buttons('Im_Out_Next_Up')">
                                     <img src="/discovery/images/next_up.png" width="100%" />  
                                </div>
                                <div id="next_btn_" onclick="Media_Player_Buttons('next_btn_')" onmouseenter="Media_Player_Buttons('Im_In_Next_Down')" onmouseleave="Media_Player_Buttons('Im_Out_Next_Down')">
                                     <img src="/discovery/images/next_down.png" width="100%" />  
                                </div>
                                <!--END THIS IS MY MEDIA PLAYER NEXT BUTTON-->

                                   <!--START THIS IS MY MEDIA PLAYER BACK BUTTON-->
                                <div id="back_btn"  onclick="Media_Player_Buttons('back_btn')" onmouseenter="Media_Player_Buttons('Im_In_Back_Up')" onmouseleave="Media_Player_Buttons('Im_Out_Back_Up')">
                                    <img src="/discovery/images/back_up.png" width="100%" />
                                </div>
                                <div id="back_btn_"  onclick="Media_Player_Buttons('back_btn_')" onmouseenter="Media_Player_Buttons('Im_In_Back_Down')" onmouseleave="Media_Player_Buttons('Im_Out_Back_Down')">
                                    <img src="/discovery/images/back_down.png" width="100%" />
                                </div>
                                <!--END THIS IS MY MEDIA PLAYER BACK BUTTON-->


                                <div id="center_container"></div>



                            </div>

<!--START Search_Loader Tag -->
    <div  class="search_loader">
                    
        <!--START Discription Tag -->                    
            <div id="dis">

	            <!--START Header Tag -->  
                    <header id="header">

                        <!--START Eye_Switch Tag --> 
                            <div id="eye_switch" class="logo">
                                 <div id="My_All_Seeing_Eye_Button" class="icon fa-eye"></div>
                            </div>
                        <!--END Eye_Switch Tag --> 
                        
                            <!--START Show_Search_Field_ Tag --> 
                            <div  id="Show_Search_Field_" role="search" style="display:block;"> 

                                <!--START Content Tag -->    	
                                     <div class="content">
                                        
                                        <!--START Inner Tag -->
                                            <div class="inner">
                                               <h1><img src="../discovery/images/mini_white_logo.png" width="45px" />isc<i class="fa fa-search"></i>very</h1>

                                                             <!--START Header Error Message Tag-->
                                                                 <div id="header_error_message_" onclick="Remove_Error_Message()"><div id="Random_Search_Subjective_Thought_"></div></div>
                                                             <!--END Header Error Message Tag-->
                                                 <!--START Body_All_Seeing_Message Tag -->             
                                                     <div id="all_seeing_mes">
                                                     	<h5>The All Seeing Eye.</h5>
                                                     </div>
                                                <!--END Body_All_Seeing_Message Tag -->
                                 

 <!--START Ui 3 Action Tag -->
     <ul class="actions" >
        <input id="infield_" type="text"   style=" border-color:#fff; width: 100%;" onKeyUp="Get_Text_Field_Value(this.value)" >
             <span id="My_Search_Button_" class="fa fa-search" onclick="Search_For_The_File()" onmouseenter="Hover_In('My_Search_Button_','yellow')" onmouseleave="Hover_Out('My_Search_Button_','white')"  >Find</span>

     </ul>
 <!--END Ui 3 Action Tag -->


                                            </div>
                                       <!--END Inner Tag -->
                                    </div>
                            <!--END Content Tag -->
                            
                        </div>
                        <!--END Show_Search_Field_ Tag -->
<!--START Ui 4 Action Tag -->
	<ul class="actions">

                                <li id="search_exit_type_"> 
                                  <span id="My_Exit_Button_" class="fa fa-eye" onclick="I_Clicked_Filters_Button()" onmouseenter="Hover_In('My_Exit_Button_','yellow')" onmouseleave="Hover_Out('My_Exit_Button_','white')" >
                                           Eye
                                    </span> 
                                </li>
                                <li id="search_filters_type_"> 
                                    <span id="My_Filter_Button_" class="fa fa-info" onclick="I_Clicked_Filters_Button()" onmouseenter="Hover_In('My_Filter_Button_','yellow')" onmouseleave="Hover_Out('My_Filter_Button_','white')" >
                                           Filters
                                    </span> 
                                </li>

                                <li id="search_links_type_"> 
                                    <span id="My_Links_Button_" class="fa fa-link" onclick="Search_Type('links')"  onmouseenter="Hover_In('My_Links_Button_','yellow')" onmouseleave="Hover_Out('My_Links_Button_','white')" >
                                           Links
                                    </span> 
                                </li>

                                <li id="search_images_type_"> 
                                    <span id="My_Images_Button_" class="fa fa-image" onclick="Search_Type('images')"  onmouseenter="Hover_In('My_Images_Button_','yellow')" onmouseleave="Hover_Out('My_Images_Button_','white')" >
                                           Images
                                    </span> 
                                </li>
                               
                                <li id="search_music_type_"> 
                                    <span id="My_Music_Button_" class="fa fa-music" onclick="Search_Type('music')"  onmouseenter="Hover_In('My_Music_Button_','yellow')" onmouseleave="Hover_Out('My_Music_Button_','white')" >
                                           Music
                                    </span> 
                                </li>

                                <li id="search_videos_type_"> 
                                    <span id="My_Videos_Button_" class="fa fa-file-video-o" onclick="Search_Type('videos')"  onmouseenter="Hover_In('My_Videos_Button_','yellow')" onmouseleave="Hover_Out('My_Videos_Button_','white')" >
                                           Videos
                                    </span> 
                                </li>

                                <li id="search_movies_type_"> 
                                    <span id="My_Movies_Button_" class="fa fa-file-movie-o" onclick="Search_Type('movies')"  onmouseenter="Hover_In('My_Movies_Button_','yellow')" onmouseleave="Hover_Out('My_Movies_Button_','white')" >
                                           Moives
                                    </span> 
                                </li>
                               
                              
                                <li id="search_people_type_"> 
                                    <span id="My_People_Button_" class="fa fa-users" onclick="Search_Type('people')"  onmouseenter="Hover_In('My_People_Button_','yellow')" onmouseleave="Hover_Out('My_People_Button_','white')" >
                                           People
                                    </span> 
                                </li>

                                <li id="search_phones_type_"> 
                                    <span id="My_Phones_Button_" class="fa fa-phone" onclick="Search_Type('phones')"  onmouseenter="Hover_In('My_Phones_Button_','yellow')" onmouseleave="Hover_Out('My_Phones_Button_','white')" >
                                           Phones
                                    </span> 
                                </li>
                                

                                
                            </ul>
						<!--END Ui 4 Action Tag -->		

  </header>
  <!--END Header Tag -->


	




						

								


								

						

						

					

						
								<div id="Results_Val"><h2 >Eye Results</h2></div>

							

								

								

								



					

									<div id="search_results"></div>
								

							
	
</div>
<!--END Discription Tag -->







		</div>
<!--END Search_Loader Tag -->				
						
					


 



                                           

                         


