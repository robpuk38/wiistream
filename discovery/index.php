<!--
//Information
//default indexs divmaster
-->
<!-- START Doctype Tag -->
    <!DOCTYPE html>

        <!-- START Html Tag -->
            <html class="">

                <!-- START Body Tag -->
                    <body id="body_scroll" class="">

	                    <!--START Wrapper Tag -->
			                <div id="wrapper">
                                

                                
                                <?php
                                    /*
                                     Dynamic Strings Changable
                                    */
                                     $local_root = $_SERVER['DOCUMENT_ROOT'];
                                     include_once $local_root."/discovery/includes/strings.php";
                                     System_Pageing("Index.php",$Debuging);
                                    Get_Set('joke');
                                ?>
                            <!--</div>-->
                        <!--END Wrapper Tag -->



                <!--START My_Check_Button Tag -->
<div id="My_Check_Button" onclick="My_Debugger();" onmouseenter="Hover_In('My_Check_Button','yellow');" onmouseleave="Hover_Out('My_Check_Button','white');"><span class="icon fa-check"></span></div>
<!--END My_Check_Button Tag -->


<div id="My_Debugger_Panle">
    <div id="Debug_Console"></div>
    <div id="Debug_Title">Title</div>
    <textarea id="ApendMe"></textarea>
    <div id="LTime"></div>
<div id="MLTime_"></div>
<div id="LUrl"></div>
<div id="ClHelp"></div>
<div id="My_Movie_Log_Helper">HELLO</div>
</div>

<div id="My_Mini_Player_Contatiner">
<div id="Mini_Logo_Pane" class="icon fa-music"></div>
<div id="LDownLoad_Btn" onclick="Download_Mini_Player_Link()"></div>
<div id="Mini_Bg_Base_"></div>
<div id="My_Music_Button_Mini_Next" class="icon fa-arrow-right" onclick="Next_Mini_Player()"></div>
<div id="My_Music_Button_Mini_Play" class="icon fa-play" onclick="Click_Mini_Play_BTN()"></div>
<div id="My_Music_Button_Mini_Stop" class="icon fa-stop" onclick="Stop_Mini_Player()"></div>
<div id="Left_Foot_Placment"></div>
<div id="Mini_Bg_Base"></div>
<div id="LTitle"></div>

</div>


                    </body>
                <!-- END Body Tag -->
            </html>
        <!-- END Html Tag -->
     <!--</!DOCTYPE html>-->   
<!-- END Doctype Tag -->


