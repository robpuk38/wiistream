
<body class="" onLoad="Search_For_The_File();"> 







<section class="vbox"> 

 












 

 <?php







 $sql = "SELECT * FROM  mp3_tmp WHERE fbuserid = $myfbuserid  ORDER BY id DESC LIMIT 10"; 

  $query = mysqli_query($conn,$sql) or trigger_error("Query Failed: " . mysqli_error()); 

 

  

  if (mysqli_num_rows($query) >=0) 

  { 
for ($i=0; $i<10; $i++)
{
  $row = mysqli_fetch_assoc($query);
 print_r($row);
}
  $lastsearch =$row['songname'];

  

  }

  else

  {

	  $lastsearch = "2018 music";

  }



 ?>

 





 </header> 



 

 

 

 

 <section> 

 

 

                                       

                                      <script src="js/app.v1.js"></script> 

<script src="js/app.plugin.js"></script> 

<script type="text/javascript" src="js/jPlayer/jquery.jplayer.min.js"></script> 

<script type="text/javascript" src="js/jPlayer/add-on/jplayer.playlist.min.js"></script>  



                                        <script>

										



	

										

										

			var myPlaylist = "null";

			var is_focused = false;						   

									   $(document).ready(function(){

				



		$('#infield').focus(function() 

				{

					console.log("Is foucused");

					is_focused = true;	

				});

						   	

$(document).bind('keypress', function(e) {

            if(e.keyCode==13)

			{

				if(is_focused == true)

				{	

                $('#submitit').trigger('click');

				console.log("clicked");

				is_focused = false;

				}

                

                

             }

        });



 myPlaylist = new jPlayerPlaylist({

    jPlayer: "#jplayer_N",

    cssSelectorAncestor: "#jp_container_N"

  }, [

  

  <?php

  $sql = "SELECT * FROM mp3_playlist WHERE fbuserid = $myfbuserid ORDER BY id DESC LIMIT 100";



$result = mysqli_query($conn,$sql);

$countme =1;

while($row = mysqli_fetch_array($result))

{



     $ytid = $row['ytid'];

	  $youtubeid = $countme;

	 $songname = $row['songname'];

	 $filelocation = $row['filelocation'];

	 $newmyimg = "//i.ytimg.com/vi/".$ytid."/mqdefault.jpg";

	 ?>

	  {

      title:"<?php echo $songname ?>",

      artist:"<?php echo $ytid ?>",

      mp3: "<?php echo $filelocation?>",

      oga: "<?php echo $filelocation?>",

      poster: "<?php echo $newmyimg ?>"

      },

	 <?php

	 

}

  ?>

   

    

  ], {

    playlistOptions: {

      enableRemoveControls: true,

      autoPlay: false

    },

    swfPath: "js/jPlayer",

    supplied: "webmv, ogv, m4v, oga, mp3",

    smoothPlayBar: true,

    keyEnabled: true,

    audioFullScreen: false

  });

  

  $(document).on($.jPlayer.event.pause, myPlaylist.cssSelector.jPlayer,  function(){

    $('.musicbar').removeClass('animate');

    $('.jp-play-me').removeClass('active');

    $('.jp-play-me').parent('li').removeClass('active');

	is_playing = false;

	console.log("IT IS NOT PLAYING ANY MORE");

  });



  $(document).on($.jPlayer.event.play, myPlaylist.cssSelector.jPlayer,  function(){

    $('.musicbar').addClass('animate');

	myMedia.pause();

	is_playing = true;

	console.log("IT IS PLAYING NOW");

	$("#videoplayercontaner").fadeOut("fast");

	$("#videoplayeriframe").attr("src","");

  });



  $(document).on('click', '.jp-play-me', function(e){

    e && e.preventDefault();

    var $this = $(e.target);

    if (!$this.is('a')) $this = $this.closest('a');



    $('.jp-play-me').not($this).removeClass('active');

    $('.jp-play-me').parent('li').not($this.parent('li')).removeClass('active');



    $this.toggleClass('active');

    $this.parent('li').toggleClass('active');

    if( !$this.hasClass('active') ){

      myPlaylist.pause();

	  console.log("IT IS NOT PLAYING ANY MORE 2");

    }else{

      var i = Math.floor(Math.random() * (1 + 7 - 1));

      myPlaylist.play(i);

	  

	  console.log("IT IS PLAYING NOW 2");

	  

    }

    

  });











});

									   

									   </script>

                                       

                                      

                                       

                                      <?php 

									  

									  if($youtubeid > 0)

									  {
									  	?>

									   <footer class="footer bg-dark">

                                        <div id="jp_container_N">

                                         

                                        <div class="jp-type-playlist"> 

                                        <div id="jplayer_N" class="jp-jplayer hide">

                                        </div> 

                                        

                                        <div class="jp-gui"> 

                                        <div class="jp-video-play hide"> 

                                        <a class="jp-video-play-icon">play</a> 

                                        </div> 

                                        

                                        <div class="jp-interface">

                                         

                                        <div class="jp-controls"> 

                                        

                                        <div>

                                        <a class="jp-previous">

                                        <i class="icon-control-rewind i-lg"></i>

                                        </a>

                                        </div> 

                                        

                                        <div> 

                                        <a class="jp-play">

                                        <i class="icon-control-play i-2x"></i>

                                        </a> 

                                        

                                        <a class="jp-pause hid">

                                        <i class="icon-control-pause i-2x"></i>

                                        </a> 

                                        </div> 

                                        

                                        <div>

                                        <a class="jp-next">

                                        <i class="icon-control-forward i-lg"></i>

                                        </a>

                                        </div> 

                                        

                                        <div class="hide">

                                        <a class="jp-stop">

                                        <i class="fa fa-stop"></i>

                                        </a>

                                        </div> 

                                        

                                        <div>

                                        <a class="" data-toggle="dropdown" data-target="#playlist">

                                        <i class="icon-list"></i>

                                        </a>

                                        </div> 

                                        

                                        <div class="jp-progress hidden-xs"> 

                                        

                                        <div class="jp-seek-bar dk"> 

                                        

                                        <div class="jp-play-bar bg-info"> 

                                        </div> 

                                        

                                        <div class="jp-title text-lt"> 

                                        <ul> 

                                        <li> 

                                        </li> 

                                        </ul> 

                                        </div> 

                                        

                                        </div> 

                                        

                                        </div> 

                                        

                                        <div class="hidden-xs hidden-sm jp-current-time text-xs text-muted">

                                        </div> 

                                        

                                        <div class="hidden-xs hidden-sm jp-duration text-xs text-muted">

                                        </div> 

                                        

                                        <div class="hidden-xs hidden-sm"> 

                                        <a class="jp-mute" title="mute">

                                        <i class="icon-volume-2"></i>

                                        </a> 

                                        <a class="jp-unmute hid" title="unmute">

                                        <i class="icon-volume-off"></i>

                                        </a> 

                                        </div> 

                                        

                                        <div class="hidden-xs hidden-sm jp-volume"> 

                                        

                                        <div class="jp-volume-bar dk"> 

                                        

                                        <div class="jp-volume-bar-value lter">

                                        </div> 

                                        

                                        </div> 

                                        

                                        </div> 

                                        

                                        <div> 

                                        <a class="jp-shuffle" title="shuffle">

                                        <i class="icon-shuffle text-muted"></i>

                                        </a> 

                                        

                                        <a class="jp-shuffle-off hid" title="shuffle off">

                                        <i class="icon-shuffle text-lt"></i>

                                        </a> 

                                        </div> 

                                        

                                        <div> 

                                        <a class="jp-repeat" title="repeat">

                                        <i class="icon-loop text-muted"></i>

                                        </a> 

                                        

                                        <a class="jp-repeat-off hid" title="repeat off">

                                        <i class="icon-loop text-lt"></i>

                                        </a> 

                                        </div> 

                                        

                                        <div class="hide"> 

                                        <a class="jp-full-screen" title="full screen">

                                        <i class="fa fa-expand"></i>

                                        </a> <a class="jp-restore-screen" title="restore screen">

                                        <i class="fa fa-compress text-lt"></i>

                                        </a> 

                                        </div> 

                                        

                                        </div> 

                                        

                                        </div> 

                                        

                                        </div> 

                                        

                                        <div class="jp-playlist dropup" id="playlist">

                                         <ul class="dropdown-menu aside-xl dker"> 

                                        

                                        <!-- The method Playlist.displayPlaylist() uses this unordered list --> 

                                        <li class="list-group-item"></li> 

                                        </ul> 

                                        

                                        </div> 

                                        

                                        <div class="jp-no-solution hide"> 

                                        <span>Update Required</span> To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>. 

                                        </div> 

                                        

                                        </div> 

                                        

                                        </div> 

                                        

                                        </footer> 

									  <?php

									  }

									  ?>

                                        

                                        </section> 

                                        

                                        </section> 

                                        

                                        

                                        

                                        

                                        

                                        

                                        

                                        

                                        

                                        


                                     </section> 

                                     <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a> 

                                     </section> 

                                     </section> 

                                     </section> 

                                     </section> 

                                     <!-- Bootstrap --> 

                                     <!-- App --> 











</body>