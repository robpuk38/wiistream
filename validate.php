<?php
$local_root = $_SERVER['DOCUMENT_ROOT'];
include $local_root."/discovery/includes/database/connection.php";
?>
<script src="/discovery/js/jquery.min.js"></script>
<?php


if(isset($_SERVER['HTTP_HOST']))
{
    $actual_link = "http://".$_SERVER['HTTP_HOST']."/".$_SERVER['QUERY_STRING']."";
    //echo "whois: ".$actual_link;
          if(empty($_SERVER['HTTP_HOST']))
            {
             echo "T:";
              return;
            }
            else
            {

                    if(isset($_GET['domain']))
                      {
                               if(empty($_GET['domain']))
                                 {
                                  echo "CALLBACK:HTTP:".$_SERVER['HTTP_HOST'].'/validate.php?domain='.$_GET['domain'];
                                 return;
                                 }
                                else
                                 {
                                    //echo "Domain:".$_GET['domain'];




                                    $Table_Name = 'valid_www';
	
   
$sql = "SELECT * FROM $Table_Name  ORDER BY id ASC"; 




  $query = mysqli_query($conn,$sql) or trigger_error("Query Failed: " . mysqli_error()); 

  if (mysqli_num_rows($query) > 0) 

  { 


    while($row = mysqli_fetch_assoc($query)) {

        if($_GET['domain'] == $row["validated_sites"] && $row["app_status"] == 'active')
        {
           // echo "Sites_id: " . $row["id"]. "<br> - Validated_sites: " . $row["validated_sites"]. "<br> - Sites_active_status: " . $row["app_status"]. "<br>";
           

           if($row["list"]== 1)
           {
             header("Location: http://".$_SERVER['HTTP_HOST']."/sameas.php?url=".$row["validated_sites"]."");
             return;
           }

           
    ?>
    <style>
body{
    overflow:hidden;
}
					
#containit{
    top:0px;
    left:0px;
    right:0px;
    bottom:0px;
    width:0%;
    

    height:0%;
    position: fixed;
    z-index:1;
}


#vars_containor
{
top:20%;
    left:10%;
    right:10%;
    
    width:80%;
    background:yellow;

    height:auto;
    position: fixed;
    z-index:2;
}
#myframe
{
    width:0%;
    height:0%;
}


</style>
  <script>
function take_domain(url)
 {
   
  console.log("the:url="+url);

 
   $('#containit').html('<iframe id="myframe" src='+url+' scrolling="yes" sandbox="allow-same-origin allow-scripts no-popups allow-presentation no-popups-to-escape-sandbox" referrerpolicy="origin-when-cross-origin" frameborder="0" allowfullscreen></iframe>');
    $('#containit').fadeIn('slow');



   
}

var t =0;
function screen_update(){t++;get_screen_size(t);}setInterval(function(){ screen_update() }, 1000);
function get_screen_size(t)
{
	//console.log("screen:time:"+t);
	$("#containit").css('width' ,''+$(window).width()+'');
		$("#containit").css('height' ,''+$(window).height()+'');
		$("#myframe").css('width' ,''+$(window).width()+'');
        $("#myframe").css('height' ,''+$(window).height()+'');
}

take_domain('<?php echo $row['validated_sites'] ?>');
					</script>
										</head>
<body onLoad="take_domain('<?php echo $row['validated_sites'] ?>')">
					<div id="containit"></div>
					</body>

					
<script src="/discovery/js/jquery.min.js"></script>
  <?php
    return;
    


    
  
 
           
           
          
        }
        else
        {
        //echo "Sites_id: " . $row["id"]."<br> - Validated_sites: " . $row["validated_sites"]."<br> - Sites_active_status: " . $row["app_status"]. "<br>";
        }
    }
  
  }
  else{
      echo "valid_www Null";
  }



                                   
                                     return;
                                 }
                        }
                        else{
                            echo "Malware Protection From Unwanted sites keep it clean.. <a href='../' target='_top' >Back</a>";
                        }
        
            }
}
return;
 



?>