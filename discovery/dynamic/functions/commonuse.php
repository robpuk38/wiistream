<!--
//Information
//commonuse functions called offten.
-->
<?php


include_once $local_root."/discovery/includes/strings.php";





function Logs($mess)
{
	Text("Logs: ".$mess);
	return true;
}

function Text($mess)
{
	echo $mess."<br>";
	return true;
}

function Insert_Var($mess)
{
	echo $mess;
	return true;
}

function Set_Var($val, $var)
{
	  $var=$val;

	if(isset($var))
	{
      Insert_Var($var);
    }
	return true;
}

function Post_Set_Var($val, $var)
{
	if(isset($val))
	{
	  Set_Var($val, $var);
	}
	return true;
}

function Get_Set_Var($val, $var)
{
	if(isset($val))
	{
		Set_Var($val, $var);
	}
	return true;
}

function Get_Set($var)
{
	if(isset($var) && isset($_GET[$var]))
    {

    	if($var =='joke' && $_GET[$var]==1)
    	{
    		//TODO GET JOKES
             $_GET[$var]="Sike Just Kidding._Why_Leave_I_Have_Nothing...";

    	}
    	
          Get_Set_Var($_GET[$var],$var);
        
    }
    return true;
}

function Post_Set($var)
{
	if(isset($var) && isset($_POST[$var]))
    {
       Post_Set_Var($_POST[$var],$var);
    }
    return true;
}

/*function VInsert($array)
{
$array_v = array_values($array);
$count_v = count($array_v);

for ($i=0; $i<$count_v; $i++)
{
  if (is_array($array_v[$i]))
  {
    $array_v[$i] = VInsert($array_v[$i]);
  }
  print_r($array_v);
}
return $array_v;
}*/

function System_Pageing($system_name,$Debuging)
{
	global $pageing;
	

	if($pageing >= 0)
	{
		$pageing++;
		Debug("Logs","Function System Pageing ".$pageing." Good ","green",$Debuging);
	}
	else
	{
		$pageing=0;
		Debug("Logs","Function System Pageing ".$pageing." Good ","yellow",$Debuging);
	}
	if($Debuging == "True")
	{
	$system_paging ="System_Name_".$system_name."_Pageing_Page_".$pageing."<br>";

    Text($system_paging);
    
	return true;
    }
}

function Debug($type,$mess,$color,$Debuging)
{
	if($Debuging == "True")
	{
     
    if($type=="Logs" && !empty($mess) && !empty($color))
    {
    	
     Logs('<span style="color:'.$color.'">'.$mess.'</span>');
 
    }
    
    return false;
	}
	
}



System_Pageing("Common_Use.php",$Debuging);
?>