<?php 
$local_root = $_SERVER['DOCUMENT_ROOT'];
include $local_root."/assets/includes/dom/calls.php";

if(isset($_GET['type_url'])  &&  isset($_GET['r']) && isset($_GET['gt']))
{
	
//https://www.hoosierlottery.com/games/powerball?WT.cg_n=HomePage_Winning_Numbers&WT.cg_s=Powerball_LOGO
//https://www.hoosierlottery.com/games/mega-millions?WT.cg_n=HomePage_Winning_Numbers&WT.cg_s=MegaMillions_LOGO
//https://www.hoosierlottery.com/games/hoosier-lotto?WT.cg_n=HomePage_Winning_Numbers&WT.cg_s=HoosierLotto_LOGO
	//https://www.hoosierlottery.com/games/daily-3?WT.cg_n=HomePage_Winning_Numbers&WT.cg_s=Daily3_LOGO

	//https://www.hoosierlottery.com/games/daily-4?WT.cg_n=HomePage_Winning_Numbers&WT.cg_s=Daily4_LOGO

	//https://www.hoosierlottery.com/games/ca$h-5?WT.cg_n=HomePage_Winning_Numbers&WT.cg_s=Cash5_LOGO
	//https://www.hoosierlottery.com/games/quick-draw?WT.cg_n=HomePage_Winning_Numbers&WT.cg_s=QuickDraw_LOGO

	//https://www.hoosierlottery.com/games/cash4life?WT.cg_n=HomePage_Winning_Numbers&WT.cg_s=Cash4Life_LOGO
 $lottery_url_search = $_GET['type_url'];

 $lottery_get_row = $_GET['r'];

 $lottery_get_game_type = $_GET['gt'];


 




	 $html = file_get_html( $lottery_url_search );

	// $tagids = $html->find('<span');
	 $tagids = $html->find('<span');
     
     $slash = ' - ';
     
	 if(empty($tagids))
	 {
	 	echo "WE DO NOT HAVE NOTHING FROM THIS SITE SEARCH A NEW SITE NOW";

	 	//POWER BALL 1-26 
	 	//NUMBERS 1 - 69
	 	//POWER PLAY 1-5
	 	//22-23-31-53-26 3

	 
	 }
	 else
	 {

	 }

   

    sleep(2);

function simplfi_number_content_m($getat,$row,$line)
{




	if($line == '5')
	{
		
$map = 'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_9_lvResults_rptDrawNumbers_'.$row.'_lblSpecialMegalMillionsNumber_Megaball_'.$line;
	}
	else if($line == '6')
	{

$map = 'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_9_lvResults_rptDrawNumbers_'.$row.'_lblSpecialMegalMillionsNumber_Megaplier_'.$line;
	}
	else
	{
		
	$map = 'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_9_lvResults_rptDrawNumbers_'.$row.'_lblNonSpecialNumber_'.$line;
    }




	if (strpos($getat,$map) !== false)
   {

	  
       
if($line == '5')
	{
$clean_string = str_replace( '<span id="ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_9_lvResults_rptDrawNumbers_'.$row.'_lblSpecialMegalMillionsNumber_Megaball_'.$line.'" class="mega-num num">                                  &nbsp;MB:','', $getat);
	}
	else if($line == '6')
	{
		$clean_string = str_replace( '<span id="ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_9_lvResults_rptDrawNumbers_'.$row.'_lblSpecialMegalMillionsNumber_Megaplier_'.$line.'" class="num">                                  &nbsp;MP:','', $getat);
	}
	else
	{


$clean_string = str_replace( '<span id="ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_9_lvResults_rptDrawNumbers_'.$row.'_lblNonSpecialNumber_'.$line.'" class="num">','', $getat);
	}
         


$finish_string = str_replace( '</span>','', $clean_string);

        
$a_zero = $finish_string;

	   if($a_zero > '9')
	   {
	   	$content = "<_".$line."_><_LARGE_KEYCODE_NUMBER_>".$a_zero.'<br>';
	   	echo $content;

	   	
      
	   }
	   else
	   {
	   	if($a_zero == '1')
	   	{
        $content = "<_".$line."_><_NULLIFIED_ZERO_ONE_>".$a_zero.'<br>';
        echo $content;
        
	   	}
	   	if($a_zero == '2')
	   	{
	   		$content = "<_".$line."_><_NULLIFIED_ZERO_TWO_>".$a_zero.'<br>';
	   		echo $content;
	   		
	   	}
	   	if($a_zero == '3')
	   	{
	   		$content = "<_".$line."_><_NULLIFIED_ZERO_THREE_>".$a_zero.'<br>';
	   		echo $content;
	   		
	   	}
	   	if($a_zero == '4')
	   	{
	   		$content = "<_".$line."_><_NULLIFIED_ZERO_FOUR_>".$a_zero.'<br>';
	   		echo $content;
	   		
	   	}
	   	if($a_zero == '5')
	   	{
	   		$content = "<_".$line."_><_NULLIFIED_ZERO_FIVE_>".$a_zero.'<br>';
	   		echo $content;
	   		
	   	}
	   	if($a_zero == '6')
	   	{
	   		$content = "<_".$line."_><_NULLIFIED_ZERO_SIX_>".$a_zero.'<br>';
	   		echo $content;
	   		
	   	}
	   	if($a_zero == '7')
	   	{
	   		$content = "<_".$line."_><_NULLIFIED_ZERO_SEVEN_>".$a_zero.'<br>';
	   		echo $content;
	   		

	   		
	   		
	   	}
	   	if($a_zero == '8')
	   	{
	   		$content = "<_".$line."_><_NULLIFIED_ZERO_EIGHT_>".$a_zero.'<br>';
	   		echo $content;
	   		
	   		
	   	}
	   	if($a_zero == '9')
	   	{
	   		$content = "<_".$line."_><_NULLIFIED_ZERO_NINE_>".$a_zero.'<br>';
	   		echo $content;
	   		 
	   		
	   	}
	   	
	    
	   }

     
	  

   }
   else
   {
   	
//echo "n";
   	/*
   	
	   */
   }
}


function simplfi_number_content($getat,$row,$line)
{




	if($line == '5')
	{
$map = 'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_'.$row.'_lblSpecialPowerballNumber_Powerball_'.$line;
	}
	else if($line == '6')
	{
$map = 'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_'.$row.'_lblSpecialPowerballNumber_Powerplay_'.$line;
	}
	else
	{
	$map = 'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_'.$row.'_lblNonSpecialNumber_'.$line;
    }




	if (strpos($getat,$map) !== false)
   {

	  
       
if($line == '5')
	{
$clean_string = str_replace( '<span id="ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_'.$row.'_lblSpecialPowerballNumber_Powerball_'.$line.'" class="powerball-num num">                                  &nbsp;PB:','', $getat);
	}
	else if($line == '6')
	{
		$clean_string = str_replace( '<span id="ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_'.$row.'_lblSpecialPowerballNumber_Powerplay_'.$line.'" class="num">                                  &nbsp;PP:','', $getat);
	}
	else
	{


$clean_string = str_replace( '<span id="ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_'.$row.'_lblNonSpecialNumber_'.$line.'" class="num">','', $getat);
	}
         


$finish_string = str_replace( '</span>','', $clean_string);

        
$a_zero = $finish_string;

	   if($a_zero > '9')
	   {
	   	$content = "<_".$line."_><_LARGE_KEYCODE_NUMBER_>".$a_zero.'<br>';
	   	echo $content;

	   	
      
	   }
	   else
	   {
	   	if($a_zero == '1')
	   	{
        $content = "<_".$line."_><_NULLIFIED_ZERO_ONE_>".$a_zero.'<br>';
        echo $content;
        
	   	}
	   	if($a_zero == '2')
	   	{
	   		$content = "<_".$line."_><_NULLIFIED_ZERO_TWO_>".$a_zero.'<br>';
	   		echo $content;
	   		
	   	}
	   	if($a_zero == '3')
	   	{
	   		$content = "<_".$line."_><_NULLIFIED_ZERO_THREE_>".$a_zero.'<br>';
	   		echo $content;
	   		
	   	}
	   	if($a_zero == '4')
	   	{
	   		$content = "<_".$line."_><_NULLIFIED_ZERO_FOUR_>".$a_zero.'<br>';
	   		echo $content;
	   		
	   	}
	   	if($a_zero == '5')
	   	{
	   		$content = "<_".$line."_><_NULLIFIED_ZERO_FIVE_>".$a_zero.'<br>';
	   		echo $content;
	   		
	   	}
	   	if($a_zero == '6')
	   	{
	   		$content = "<_".$line."_><_NULLIFIED_ZERO_SIX_>".$a_zero.'<br>';
	   		echo $content;
	   		
	   	}
	   	if($a_zero == '7')
	   	{
	   		$content = "<_".$line."_><_NULLIFIED_ZERO_SEVEN_>".$a_zero.'<br>';
	   		echo $content;
	   		

	   		
	   		
	   	}
	   	if($a_zero == '8')
	   	{
	   		$content = "<_".$line."_><_NULLIFIED_ZERO_EIGHT_>".$a_zero.'<br>';
	   		echo $content;
	   		
	   		
	   	}
	   	if($a_zero == '9')
	   	{
	   		$content = "<_".$line."_><_NULLIFIED_ZERO_NINE_>".$a_zero.'<br>';
	   		echo $content;
	   		 
	   		
	   	}
	   	
	    
	   }

     
	  

   }
   else
   {
   	
//echo "n";
   	/*
   	
	   */
   }
}


foreach ($tagids as $tagid) 

{

	

	 $getat = $tagid->getAttribute('outertext');
if($lottery_get_row == 'One' && $lottery_get_game_type == 'MegaMillons')
{
simplfi_number_content_m($getat,0,0);
simplfi_number_content_m($getat,0,1);
simplfi_number_content_m($getat,0,2);
simplfi_number_content_m($getat,0,3);
simplfi_number_content_m($getat,0,4);
simplfi_number_content_m($getat,0,5);
simplfi_number_content_m($getat,0,6);
}
if($lottery_get_row == 'Two' && $lottery_get_game_type == 'MegaMillons')
{
simplfi_number_content_m($getat,1,0);
simplfi_number_content_m($getat,1,1);
simplfi_number_content_m($getat,1,2);
simplfi_number_content_m($getat,1,3);
simplfi_number_content_m($getat,1,4);
simplfi_number_content_m($getat,1,5);
simplfi_number_content_m($getat,1,6);
}
if($lottery_get_row == 'Three' && $lottery_get_game_type == 'MegaMillons')
{
simplfi_number_content_m($getat,2,0);
simplfi_number_content_m($getat,2,1);
simplfi_number_content_m($getat,2,2);
simplfi_number_content_m($getat,2,3);
simplfi_number_content_m($getat,2,4);
simplfi_number_content_m($getat,2,5);
simplfi_number_content_m($getat,2,6);
}
if($lottery_get_row == 'Four' && $lottery_get_game_type == 'MegaMillons')
{
simplfi_number_content_m($getat,3,0);
simplfi_number_content_m($getat,3,1);
simplfi_number_content_m($getat,3,2);
simplfi_number_content_m($getat,3,3);
simplfi_number_content_m($getat,3,4);
simplfi_number_content_m($getat,3,5);
simplfi_number_content_m($getat,3,6);
}
if($lottery_get_row == 'Five' && $lottery_get_game_type == 'MegaMillons')
{
simplfi_number_content_m($getat,4,0);
simplfi_number_content_m($getat,4,1);
simplfi_number_content_m($getat,4,2);
simplfi_number_content_m($getat,4,3);
simplfi_number_content_m($getat,4,4);
simplfi_number_content_m($getat,4,5);
simplfi_number_content_m($getat,4,6);
}
if($lottery_get_row == 'Six' && $lottery_get_game_type == 'MegaMillons')
{
simplfi_number_content_m($getat,5,0);
simplfi_number_content_m($getat,5,1);
simplfi_number_content_m($getat,5,2);
simplfi_number_content_m($getat,5,3);
simplfi_number_content_m($getat,5,4);
simplfi_number_content_m($getat,5,5);
simplfi_number_content_m($getat,5,6);
}

if($lottery_get_row == 'One' && $lottery_get_game_type == 'Powerball')
{
simplfi_number_content($getat,0,0);
simplfi_number_content($getat,0,1);
simplfi_number_content($getat,0,2);
simplfi_number_content($getat,0,3);
simplfi_number_content($getat,0,4);
simplfi_number_content($getat,0,5);
simplfi_number_content($getat,0,6);
}

if($lottery_get_row == 'Two' && $lottery_get_game_type == 'Powerball')
{
simplfi_number_content($getat,1,0);
simplfi_number_content($getat,1,1);
simplfi_number_content($getat,1,2);
simplfi_number_content($getat,1,3);
simplfi_number_content($getat,1,4);
simplfi_number_content($getat,1,5);
simplfi_number_content($getat,1,6);
}

if($lottery_get_row == 'Three' && $lottery_get_game_type == 'Powerball')
{
simplfi_number_content($getat,2,0);
simplfi_number_content($getat,2,1);
simplfi_number_content($getat,2,2);
simplfi_number_content($getat,2,3);
simplfi_number_content($getat,2,4);
simplfi_number_content($getat,2,5);
simplfi_number_content($getat,2,6);
}

if($lottery_get_row == 'Four' && $lottery_get_game_type == 'Powerball')
{
simplfi_number_content($getat,3,0);
simplfi_number_content($getat,3,1);
simplfi_number_content($getat,3,2);
simplfi_number_content($getat,3,3);
simplfi_number_content($getat,3,4);
simplfi_number_content($getat,3,5);
simplfi_number_content($getat,3,6);
}

if($lottery_get_row == 'Five' && $lottery_get_game_type == 'Powerball')
{
simplfi_number_content($getat,4,0);
simplfi_number_content($getat,4,1);
simplfi_number_content($getat,4,2);
simplfi_number_content($getat,4,3);
simplfi_number_content($getat,4,4);
simplfi_number_content($getat,4,5);
simplfi_number_content($getat,4,6);
}

if($lottery_get_row == 'Six' && $lottery_get_game_type == 'Powerball')
{
simplfi_number_content($getat,5,0);
simplfi_number_content($getat,5,1);
simplfi_number_content($getat,5,2);
simplfi_number_content($getat,5,3);
simplfi_number_content($getat,5,4);
simplfi_number_content($getat,5,5);
simplfi_number_content($getat,5,6);
}


/*
	if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_0_lblNonSpecialNumber_0') !== false)

   {

	   $a_zero = $getat;

	   if($a_zero > 9)
	   {
	   	echo $a_zero;
	   }
	   else
	   {
	   	echo "0".$a_zero;
	   }

	   

   }

   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_0_lblNonSpecialNumber_1') !== false)

   {

	   $a_one = $getat;
	   echo $slash;
	   if($a_one > 9)
	   {
       echo $a_one;
	   }
	   else
	   {
       echo "0".$a_one;
	   }

   }

   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_0_lblNonSpecialNumber_2') !== false)

   {

	   $a_two = $getat;
       echo $slash;
       if($a_two > 9)
       {
        echo $a_two;
       }
       else
       {
        echo "0".$a_two;
       }
	   

   }

  if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_0_lblNonSpecialNumber_3') !== false)

   {

	   $a_three = $getat;
	   echo $slash;
	   if($a_three > 9)
	   {
        echo $a_three;
	   }
	   else
	   {
         echo "0".$a_three;
	   }
       
	   

   }

   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_0_lblNonSpecialNumber_4') !== false)

   {

	   $a_four = $getat;
       echo $slash;
       if($a_four > 9)
       {
       echo $a_four;
       }
       else
       {
       	echo "0".$a_four;
       }
	   

   }



   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_0_lblSpecialPowerballNumber_Powerball_5') !== false)

   {

	   $a_five = $getat;
       
	   echo $a_five;

   }




   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_0_lblSpecialPowerballNumber_Powerplay_6') !== false)

   {

	   $a_six = $getat;
      
	   echo $a_six;

	   echo "<br>";

   }








   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_1_lblNonSpecialNumber_0') !== false)

   {

	   $b_zero = $getat;

	   echo $b_zero;

   }

   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_1_lblNonSpecialNumber_1') !== false)

   {

	   $b_one = $getat;
       echo $slash;
	   echo $b_one;

   }

   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_1_lblNonSpecialNumber_2') !== false)

   {

	   $b_two = $getat;
       echo $slash;
	   echo $b_two;

   }

   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_1_lblNonSpecialNumber_3') !== false)

   {

	   $b_three = $getat;
       echo $slash;
	   echo $b_three;

   }

   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_1_lblNonSpecialNumber_4') !== false)

   {

	   $b_four = $getat;
       echo $slash;
	   echo $b_four;

   }



   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_1_lblSpecialPowerballNumber_Powerball_5') !== false)

   {

	   $b_five = $getat;
       
	   echo $b_five;

   }

   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_1_lblSpecialPowerballNumber_Powerplay_6') !== false)

   {

	   $b_six = $getat;
      
	   echo $b_six;

	   echo "<br>";

   }










   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_2_lblNonSpecialNumber_0') !== false)

   {

	   $c_zero = $getat;

	   echo $c_zero;

   }

   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_2_lblNonSpecialNumber_1') !== false)

   {

	   $c_one = $getat;
       echo $slash;
	   echo $c_one;

   }

   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_2_lblNonSpecialNumber_2') !== false)

   {

	   $c_two = $getat;
       echo $slash;
	   echo $c_two;

   }

   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_2_lblNonSpecialNumber_3') !== false)

   {

	   $c_three = $getat;
       echo $slash;
	   echo $c_three;

   }

   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_2_lblNonSpecialNumber_4') !== false)

   {

	   $c_four = $getat;
       echo $slash;
	   echo $c_four;

   }



   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_2_lblSpecialPowerballNumber_Powerball_5') !== false)

   {

	   $c_five = $getat;
       
	   echo $c_five;

   }

   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_2_lblSpecialPowerballNumber_Powerplay_6') !== false)

   {

	   $c_six = $getat;
      
	   echo $c_six;

	   echo "<br>";

   }











   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_3_lblNonSpecialNumber_0') !== false)

   {

	   $d_zero = $getat;

	   echo $d_zero;

   }

   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_3_lblNonSpecialNumber_1') !== false)

   {

	   $d_one = $getat;
       echo $slash;
	   echo $d_one;

   }

   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_3_lblNonSpecialNumber_2') !== false)

   {

	   $d_two = $getat;
       echo $slash;
	   echo $d_two;

   }

   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_3_lblNonSpecialNumber_3') !== false)

   {

	   $d_three = $getat;
       echo $slash;
	   echo $d_three;

   }

   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_3_lblNonSpecialNumber_4') !== false)

   {

	   $d_four = $getat;
       echo $slash;
	   echo $d_four;

   }



   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_3_lblSpecialPowerballNumber_Powerball_5') !== false)

   {

	   $d_five = $getat;
       
	   echo $d_five;

   }

   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_3_lblSpecialPowerballNumber_Powerplay_6') !== false)

   {

	   $d_six = $getat;
      
	   echo $d_six;

	   echo "<br>";

   }
















   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_4_lblNonSpecialNumber_0') !== false)

   {

	   $e_zero = $getat;

	   echo $e_zero;

   }

   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_4_lblNonSpecialNumber_1') !== false)

   {

	   $e_one = $getat;
       echo $slash;
	   echo $e_one;

   }

   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_4_lblNonSpecialNumber_2') !== false)

   {

	   $e_two = $getat;
       echo $slash;
	   echo $e_two;

   }

   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_4_lblNonSpecialNumber_3') !== false)

   {

	   $e_three = $getat;
       echo $slash;
	   echo $e_three;

   }

   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_4_lblNonSpecialNumber_4') !== false)

   {

	   $e_four = $getat;
       echo $slash;
	   echo $e_four;

   }



   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_4_lblSpecialPowerballNumber_Powerball_5') !== false)

   {

	   $e_five = $getat;
       
	   echo $e_five;

   }

   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_4_lblSpecialPowerballNumber_Powerplay_6') !== false)

   {

	   $e_six = $getat;
      
	   echo $e_six;

	   echo "<br>";

   }















   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_5_lblNonSpecialNumber_0') !== false)

   {

	   $f_zero = $getat;

	   echo $f_zero;

   }

   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_5_lblNonSpecialNumber_1') !== false)

   {

	   $f_one = $getat;
       echo $slash;
	   echo $f_one;

   }

   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_5_lblNonSpecialNumber_2') !== false)

   {

	   $f_two = $getat;
       echo $slash;
	   echo $f_two;

   }

   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_5_lblNonSpecialNumber_3') !== false)

   {

	   $f_three = $getat;
       echo $slash;
	   echo $f_three;

   }

   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_5_lblNonSpecialNumber_4') !== false)

   {

	   $f_four = $getat;
       echo $slash;
	   echo $f_four;

   }



   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_5_lblSpecialPowerballNumber_Powerball_5') !== false)

   {

	   $f_five = $getat;
       
	   echo $f_five;

   }

   if (strpos($getat,'ContentPlaceHolderDefault_mainContent_mainContent_mainContent_mainContent_ctl00_RecentWinningNumbers_8_lvResults_rptDrawNumbers_5_lblSpecialPowerballNumber_Powerplay_6') !== false)

   {

	   $f_six = $getat;
      
	   echo $f_six;

	   echo "<br>";

	   

   }
  
    */
    



 
	}
}

