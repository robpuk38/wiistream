<!DOCTYPE html>
<html>
<head>

<style>

@font-face{
 font-family:'digital-clock-font';
 src: url('./fonts/digital-7.ttf');
}
body
{
	background-color: #333;
	overflow: hidden;

}
#data_results
{
	display: none;
	bottom: 0px;
	background-color: lightblue;
	
	right: 13%;
	position: fixed;
	text-align: center;
border-radius: 4px;
    border: 0;
    box-shadow: inset 0 0 0 1px white;
	font-family:'digital-clock-font';
	width: 35%;
	height: 17%;
	z-index: 11;
}


#Auto_Play{

width: 9%;
height: 10%;
position: fixed;
background-image: url('/discovery/images/powerball.png');
    background-position: center;
    background-size: 100%;
    background-repeat: no-repeat;
    border-radius: 4px;
    border: 0;
    box-shadow: inset 0 0 0 1px white;
    background-color: white;
z-index: 25;
cursor: pointer;
top: 75%;
right: 0.5%

}
#Auto_Play:hover{

width: 9%;
height: 10%;
position: fixed;
background-image: url('/discovery/images/powerball.png');
    background-position: center;
    background-size: 90%;
    background-repeat: no-repeat;
    border-radius: 4px;
    border: 0;
    box-shadow: inset 0 0 0 1px lightblue;
    background-color: white;
z-index: 25;
cursor: pointer;
top: 75%;
right: 0.5%

}
#Auto_Play:active{

width: 9%;
height: 10%;
position: fixed;
background-image: url('/discovery/images/powerball.png');
    background-position: center;
    background-size: 80%;
    background-repeat: no-repeat;
    border-radius: 4px;
    border: 0;
    box-shadow: inset 0 0 0 1px green;
    background-color: white;
z-index: 25;
cursor: pointer;
top: 75%;
right: 0.5%

}


#powerball{

width: 9%;
height: 24%;
position: fixed;
background-image: url('/discovery/images/powerball.png');
    background-position: center;
    background-size: 100%;
    background-repeat: no-repeat;
    border-radius: 4px;
    border: 0;
    box-shadow: inset 0 0 0 1px white;
    background-color: white;
z-index: 25;
cursor: pointer;
top: 25%;
right: 0.5%

}
#powerball:hover{

width: 9%;
height: 24%;
position: fixed;
background-image: url('/discovery/images/powerball.png');
    background-position: center;
    background-size: 90%;
    background-repeat: no-repeat;
    border-radius: 4px;
    border: 0;
    box-shadow: inset 0 0 0 1px lightblue;
    background-color: white;
z-index: 25;
cursor: pointer;
top: 25%;
right: 0.5%

}
#powerball:active{

width: 9%;
height: 24%;
position: fixed;
background-image: url('/discovery/images/powerball.png');
    background-position: center;
    background-size: 80%;
    background-repeat: no-repeat;
    border-radius: 4px;
    border: 0;
    box-shadow: inset 0 0 0 1px green;
    background-color: white;
z-index: 25;
cursor: pointer;
top: 25%;
right: 0.5%

}



#megamillions{

width: 9%;
height: 24%;
position: fixed;
background-image: url('/discovery/images/meagmillion.png');
    background-position: center;
    background-size: 100%;
    background-repeat: no-repeat;
    border-radius: 4px;
    border: 0;
    box-shadow: inset 0 0 0 1px white;
    background-color: white;
z-index: 25;
cursor: pointer;
top: 50%;
right: 0.5%

}
#megamillions:hover{

width: 9%;
height: 24%;
position: fixed;
background-image: url('/discovery/images/meagmillion.png');
    background-position: center;
    background-size: 90%;
    background-repeat: no-repeat;
    border-radius: 4px;
    border: 0;
    box-shadow: inset 0 0 0 1px lightblue;
    background-color: white;
z-index: 25;
cursor: pointer;
top: 50%;
right: 0.5%

}
#megamillions:active{

width: 9%;
height: 24%;
position: fixed;
background-image: url('/discovery/images/meagmillion.png');
    background-position: center;
    background-size: 80%;
    background-repeat: no-repeat;
    border-radius: 4px;
    border: 0;
    box-shadow: inset 0 0 0 1px green;
    background-color: white;
z-index: 25;
cursor: pointer;
top: 50%;
right: 0.5%

}





#Num_Ripper_Tracer
{
	top: 0px;
	right: 0px;
	left: 0px;
	width: 100%;
	height: 100%;
	bottom: 0px;
	
	position: absolute;
	display: block;
	overflow: auto;
	
	z-index: 1;
}

#Row1_Most_Recent_Lottery_Winning_Result
{
	display: flex;
	width: 100%;
	height: 8.325%;
	
	
	position: fixed;
	top:0px;
	right: 0px;
	z-index: 1;
}
#Row1_Most_Recent_Lottery_Listing_Result
{
	display: flex;
	width: 100%;
	height: 8.325%;
	
	position: fixed;
	top:8.325%;
	right: 0px;
	z-index: 1;


}

#row1_winning_placement1,
#row1_winning_placement2,
#row1_winning_placement3,
#row1_winning_placement4,
#row1_winning_placement5,
#row1_winning_placement6,
#row1_winning_placement7
{
	width:100%;

margin: 0.5%;
   padding: 1%;
    font-size: 2rem;
   
    border-radius: 4px;
    border: 0;
    box-shadow: inset 0 0 0 1px #ffffff;
    background: lightblue;
    text-align: center;
   font-family:'digital-clock-font';

	height: 96%;
}

#row1_number_placement1,
#row1_number_placement2,
#row1_number_placement3,
#row1_number_placement4,
#row1_number_placement5,
#row1_number_placement6,
#row1_number_placement7,
#row1_number_placement8,
#row1_number_placement9,
#row1_number_placement10,
#row1_number_placement11,
#row1_number_placement12,
#row1_number_placement13,
#row1_number_placement14
{
	width:100%;

   margin: 0.5%;
    font-size: 2.5rem;
   padding: 1%;
    border-radius: 4px;
    border: 0;
    box-shadow: inset 0 0 0 1px #ffffff;
    background: orange;
    text-align: center;
   font-family:'digital-clock-font';

	height: 98%;
}

#winning_ticket_sets_containor
{
	display: flex;
	width: 100%;
	height: 4%;
	
	position: fixed;
	top:18.65%;
	right: 0px;
	z-index: 1;
}

#winning_ticket_1,
#winning_ticket_2,
#winning_ticket_3,
#winning_ticket_4,
#winning_ticket_5,
#winning_ticket_6
{
	width:100%;

   margin: 0.5%;
    font-size: 1.5rem;
   padding: -1%;
    border-radius: 4px;
    border: 0;
    box-shadow: inset 0 0 0 1px #ffffff;
    background: lightgreen;
    text-align: center;
font-family:'digital-clock-font';
    cursor: pointer;
   

	height: 98%;
}


#winning_ticket_1:hover,
#winning_ticket_2:hover,
#winning_ticket_3:hover,
#winning_ticket_4:hover,
#winning_ticket_5:hover,
#winning_ticket_6:hover
{
	width:100%;

   margin: 0.5%;
    font-size: 1.2rem;
   padding: -1%;
    border-radius: 4px;
    border: 0;
    box-shadow: inset 0 0 0 1px lightblue;
    background: lightgreen;
    text-align: center;
font-family:'digital-clock-font';
    cursor: pointer;
   

	height: 98%;
}

#winning_ticket_1:active,
#winning_ticket_2:active,
#winning_ticket_3:active,
#winning_ticket_4:active,
#winning_ticket_5:active,
#winning_ticket_6:active
{
	width:100%;

   margin: 0.5%;
    font-size: 0.8rem;
   padding: -1%;
    border-radius: 4px;
    border: 0;
    box-shadow: inset 0 0 0 1px green;
    background: lightgreen;
    text-align: center;
font-family:'digital-clock-font';
    cursor: pointer;
   

	height: 98%;
}


#Maths_pyroplex_holder
{
	top: 25%;
	width: 80%;
	height: 60%;
	left: 10%;
	right: 10%;
	display: block;
    display: grid;
	position: fixed;
	bottom: 15%;
	background-color: #111;
	z-index: 10;
}

#grid_row1,
#grid_row2,
#grid_row3,
#grid_row4,
#grid_row5,
#grid_row6
{
 
 display: flex;
}

#ticket1_row1_placement1,
#ticket1_row1_placement2,
#ticket1_row1_placement3,
#ticket1_row1_placement4,
#ticket1_row1_placement5,
#ticket1_row1_placement6,
#ticket1_row1_placement7,
#ticket1_row1_placement8,
#ticket1_row1_placement9,
#ticket1_row1_placement10,
#ticket1_row1_placement11,
#ticket1_row1_placement12,
#ticket1_row1_placement13,
#ticket1_row1_placement14,
#ticket2_row2_placement1,
#ticket2_row2_placement2,
#ticket2_row2_placement3,
#ticket2_row2_placement4,
#ticket2_row2_placement5,
#ticket2_row2_placement6,
#ticket2_row2_placement7,
#ticket2_row2_placement8,
#ticket2_row2_placement9,
#ticket2_row2_placement10,
#ticket2_row2_placement11,
#ticket2_row2_placement12,
#ticket2_row2_placement13,
#ticket2_row2_placement14,
#ticket3_row3_placement1,
#ticket3_row3_placement2,
#ticket3_row3_placement3,
#ticket3_row3_placement4,
#ticket3_row3_placement5,
#ticket3_row3_placement6,
#ticket3_row3_placement7,
#ticket3_row3_placement8,
#ticket3_row3_placement9,
#ticket3_row3_placement10,
#ticket3_row3_placement11,
#ticket3_row3_placement12,
#ticket3_row3_placement13,
#ticket3_row3_placement14,
#ticket4_row4_placement1,
#ticket4_row4_placement2,
#ticket4_row4_placement3,
#ticket4_row4_placement4,
#ticket4_row4_placement5,
#ticket4_row4_placement6,
#ticket4_row4_placement7,
#ticket4_row4_placement8,
#ticket4_row4_placement9,
#ticket4_row4_placement10,
#ticket4_row4_placement11,
#ticket4_row4_placement12,
#ticket4_row4_placement13,
#ticket4_row4_placement14,
#ticket5_row5_placement1,
#ticket5_row5_placement2,
#ticket5_row5_placement3,
#ticket5_row5_placement4,
#ticket5_row5_placement5,
#ticket5_row5_placement6,
#ticket5_row5_placement7,
#ticket5_row5_placement8,
#ticket5_row5_placement9,
#ticket5_row5_placement10,
#ticket5_row5_placement11,
#ticket5_row5_placement12,
#ticket5_row5_placement13,
#ticket5_row5_placement14,
#ticket6_row6_placement1,
#ticket6_row6_placement2,
#ticket6_row6_placement3,
#ticket6_row6_placement4,
#ticket6_row6_placement5,
#ticket6_row6_placement6,
#ticket6_row6_placement7,
#ticket6_row6_placement8,
#ticket6_row6_placement9,
#ticket6_row6_placement10,
#ticket6_row6_placement11,
#ticket6_row6_placement12,
#ticket6_row6_placement13,
#ticket6_row6_placement14
{
	width: 8%;
	height: 30%;
	text-align: center;
	font-family:'digital-clock-font';
	margin: 1%;
	padding: 1%;
	background: pink;
	border-radius: 4px;
    border: 0;
    box-shadow: inset 0 0 0 1px green;
    

}

#controler
{
	top: 25%;
	width: 8%;
	height: 60%;
	left: 2%;

	
	position: fixed;
	display: grid;
	z-index: 10;
}

#grid_num_panle1,
#grid_num_panle2,
#grid_num_panle3,
#grid_num_panle4
{
	display: flex;
}
#one,
#two,
#three,
#four,
#five,
#six,
#seven,
#eight,
#nine,
#zero
{
	width: 30%;
	height: 60%;
	margin: 2%;
	border-radius: 4px;
    border: 0;
    cursor: pointer;
    box-shadow: inset 0 0 0 1px white;
    text-align: center;
    font-family:'digital-clock-font';
    font-size: 1em;

}
#one
{
	background:yellow;
}
#two
{
	background:orange;
}
#three
{
	background:brown;
}
#four
{
	background:red;
}
#five
{
	background:lightgreen;
}
#six
{
	background:purple;
}
#seven
{
	background:lightblue;
}
#eight
{
	background:blue;
}
#nine
{
	background:green;
}
#zero
{
	background:grey;
}

#button_add,
#button_same,
#button_join,
#button_subtract
{
	width: 80%;
	height: 80%;
	border-radius: 4px;
    border: 0;
    cursor: pointer;
    box-shadow: inset 0 0 0 1px white;
    text-align: center;
    font-size: 2.5em;
    font-family:'digital-clock-font';

}
#button_add:hover,
#button_same:hover,
#button_join:hover,
#button_subtract:hover
{
	width: 80%;
	height: 80%;
	border-radius: 4px;
    border: 0;
    cursor: pointer;
    box-shadow: inset 0 0 0 1px lightblue;
    text-align: center;
    font-size: 2em;
    font-family:'digital-clock-font';

}
#button_add:active,
#button_same:active,
#button_join:active,
#button_subtract:active
{
	width: 80%;
	height: 80%;
	border-radius: 4px;
    border: 0;
    cursor: pointer;
    box-shadow: inset 0 0 0 1px green;
    text-align: center;
    font-size: 1.5em;
    font-family:'digital-clock-font';

}

#A_Line_Containor_Up
{
	width: 80%;
	height: 20%;
	
	
	left: 10%;
	right: 10%;
	top: 25%;
	position: fixed;
	z-index: 20;
	
	display: flex;
}
#B_Line_Containor_Up
{
	width: 80%;
	height: 20%;
	
	
	left: 10%;
	right: 10%;
	top: 45%;
	position: fixed;
	z-index: 20;
	
	display: flex;
}
#C_Line_Containor_Up
{
	width: 80%;
	height: 20%;
	
	
	left: 10%;
	right: 10%;
	top: 65%;
	position: fixed;
	z-index: 20;
	
	display: flex;
}
#D_Line_Containor_Up
{
	width: 80%;
	height: 20%;
	
	
	left: 10%;
	right: 10%;
	top: 35%;
	position: fixed;
	z-index: 20;
	
	display: flex;
}
#E_Line_Containor_Up
{
	width: 80%;
	height: 20%;
	
	
	left: 10%;
	right: 10%;
	top: 55%;
	position: fixed;
	z-index: 20;
	
	display: flex;
}


#A_Line_placement1_Up,
#A_Line_placement2_Up,
#A_Line_placement3_Up,
#A_Line_placement4_Up,
#A_Line_placement5_Up,
#A_Line_placement6_Up,
#A_Line_placement7_Up,
#A_Line_placement8_Up,
#A_Line_placement9_Up,
#A_Line_placement10_Up,
#A_Line_placement11_Up,
#A_Line_placement12_Up,
#A_Line_placement13_Up,
#A_Line_placement14_Up,
#B_Line_placement1_Up,
#B_Line_placement2_Up,
#B_Line_placement3_Up,
#B_Line_placement4_Up,
#B_Line_placement5_Up,
#B_Line_placement6_Up,
#B_Line_placement7_Up,
#B_Line_placement8_Up,
#B_Line_placement9_Up,
#B_Line_placement10_Up,
#B_Line_placement11_Up,
#B_Line_placement12_Up,
#B_Line_placement13_Up,
#B_Line_placement14_Up,
#C_Line_placement1_Up,
#C_Line_placement2_Up,
#C_Line_placement3_Up,
#C_Line_placement4_Up,
#C_Line_placement5_Up,
#C_Line_placement6_Up,
#C_Line_placement7_Up,
#C_Line_placement8_Up,
#C_Line_placement9_Up,
#C_Line_placement10_Up,
#C_Line_placement11_Up,
#C_Line_placement12_Up,
#C_Line_placement13_Up,
#C_Line_placement14_Up,
#D_Line_placement1_Up,
#D_Line_placement2_Up,
#D_Line_placement3_Up,
#D_Line_placement4_Up,
#D_Line_placement5_Up,
#D_Line_placement6_Up,
#D_Line_placement7_Up,
#D_Line_placement8_Up,
#D_Line_placement9_Up,
#D_Line_placement10_Up,
#D_Line_placement11_Up,
#D_Line_placement12_Up,
#D_Line_placement13_Up,
#D_Line_placement14_Up,
#E_Line_placement1_Up,
#E_Line_placement2_Up,
#E_Line_placement3_Up,
#E_Line_placement4_Up,
#E_Line_placement5_Up,
#E_Line_placement6_Up,
#E_Line_placement7_Up,
#E_Line_placement8_Up,
#E_Line_placement9_Up,
#E_Line_placement10_Up,
#E_Line_placement11_Up,
#E_Line_placement12_Up,
#E_Line_placement13_Up,
#E_Line_placement14_Up
{
	width: 100%;
	height: 100%;
	
	margin-left: -3%;
	text-align: center;
	font-size: 600%;
	color: blue;
}



#A_Line_Containor_Right
{
	width: 1.4%;
	height: 60%;
	
	
	left: 15%;
	right: 10%;
	top: 25%;
	position: fixed;
	z-index: 20;
	
	display: grid;
}
#B_Line_Containor_Right
{
	width: 1.4%;
	height: 60%;
	
	
	left: 20.7%;
	right: 10%;
	top: 25%;
	position: fixed;
	z-index: 20;
	
	display: grid;
}
#C_Line_Containor_Right
{
	width: 1.4%;
	height: 60%;
	
	
	left: 26.5%;
	right: 10%;
	top: 25%;
	position: fixed;
	z-index: 20;
	
	display: grid;
}
#D_Line_Containor_Right
{
	width: 1.4%;
	height: 60%;
	
	
	left: 32.1%;
	right: 10%;
	top: 25%;
	position: fixed;
	z-index: 20;
	
	display: grid;
}
#E_Line_Containor_Right
{
	width: 1.4%;
	height: 60%;
	
	
	left: 37.9%;
	right: 10%;
	top: 25%;
	position: fixed;
	z-index: 20;
	
	display: grid;
}
#F_Line_Containor_Right
{
	width: 1.4%;
	height: 60%;
	
	
	left: 43.6%;
	right: 10%;
	top: 25%;
	position: fixed;
	z-index: 20;
	
	display: grid;
}
#G_Line_Containor_Right
{
	width: 1.4%;
	height: 60%;
	
	
	left: 49.3%;
	right: 10%;
	top: 25%;
	position: fixed;
	z-index: 20;
	
	display: grid;
}
#H_Line_Containor_Right
{
	width: 1.4%;
	height: 60%;
	
	
	left: 55%;
	right: 10%;
	top: 25%;
	position: fixed;
	z-index: 20;
	
	display: grid;
}
#I_Line_Containor_Right
{
	width: 1.4%;
	height: 60%;
	
	
	left: 60.7%;
	right: 10%;
	top: 25%;
	position: fixed;
	z-index: 20;
	
	display: grid;
}
#J_Line_Containor_Right
{
	width: 1.4%;
	height: 60%;
	
	
	left: 66.5%;
	right: 10%;
	top: 25%;
	position: fixed;
	z-index: 20;
	
	display: grid;
}
#K_Line_Containor_Right
{
	width: 1.4%;
	height: 60%;
	
	
	left: 72.2%;
	right: 10%;
	top: 25%;
	position: fixed;
	z-index: 20;
	
	display: grid;
}
#L_Line_Containor_Right
{
	width: 1.4%;
	height: 60%;
	
	
	left: 77.8%;
	right: 10%;
	top: 25%;
	position: fixed;
	z-index: 20;
	
	display: grid;
}
#M_Line_Containor_Right
{
	width: 1.4%;
	height: 60%;
	
	
	left: 83.6%;
	right: 10%;
	top: 25%;
	position: fixed;
	z-index: 20;
	
	display: grid;
}


#A_Line_placement1_Right,
#A_Line_placement2_Right,
#A_Line_placement3_Right,
#A_Line_placement4_Right,
#A_Line_placement5_Right,
#A_Line_placement6_Right,
#B_Line_placement1_Right,
#B_Line_placement2_Right,
#B_Line_placement3_Right,
#B_Line_placement4_Right,
#B_Line_placement5_Right,
#B_Line_placement6_Right,
#C_Line_placement1_Right,
#C_Line_placement2_Right,
#C_Line_placement3_Right,
#C_Line_placement4_Right,
#C_Line_placement5_Right,
#C_Line_placement6_Right,
#D_Line_placement1_Right,
#D_Line_placement2_Right,
#D_Line_placement3_Right,
#D_Line_placement4_Right,
#D_Line_placement5_Right,
#D_Line_placement6_Right,
#E_Line_placement1_Right,
#E_Line_placement2_Right,
#E_Line_placement3_Right,
#E_Line_placement4_Right,
#E_Line_placement5_Right,
#E_Line_placement6_Right,
#F_Line_placement1_Right,
#F_Line_placement2_Right,
#F_Line_placement3_Right,
#F_Line_placement4_Right,
#F_Line_placement5_Right,
#F_Line_placement6_Right,
#G_Line_placement1_Right,
#G_Line_placement2_Right,
#G_Line_placement3_Right,
#G_Line_placement4_Right,
#G_Line_placement5_Right,
#G_Line_placement6_Right,
#H_Line_placement1_Right,
#H_Line_placement2_Right,
#H_Line_placement3_Right,
#H_Line_placement4_Right,
#H_Line_placement5_Right,
#H_Line_placement6_Right,
#I_Line_placement1_Right,
#I_Line_placement2_Right,
#I_Line_placement3_Right,
#I_Line_placement4_Right,
#I_Line_placement5_Right,
#I_Line_placement6_Right,
#J_Line_placement1_Right,
#J_Line_placement2_Right,
#J_Line_placement3_Right,
#J_Line_placement4_Right,
#J_Line_placement5_Right,
#J_Line_placement6_Right,
#K_Line_placement1_Right,
#K_Line_placement2_Right,
#K_Line_placement3_Right,
#K_Line_placement4_Right,
#K_Line_placement5_Right,
#K_Line_placement6_Right,
#L_Line_placement1_Right,
#L_Line_placement2_Right,
#L_Line_placement3_Right,
#L_Line_placement4_Right,
#L_Line_placement5_Right,
#L_Line_placement6_Right,
#M_Line_placement1_Right,
#M_Line_placement2_Right,
#M_Line_placement3_Right,
#M_Line_placement4_Right,
#M_Line_placement5_Right,
#M_Line_placement6_Right
{
	width: 1%;
	height: 100%;
	
	
	text-align: center;
	font-size: 720%;

	color: green;
}

</style>
<script src="js/jquery.min.js"></script>

<script>
var Game_Type = 'Null';
</script>

<!-- 6rows with 7 number placements
	13 number possibiltys

	we need a total of 12 
	first display the single diget number 
	in the 13 placement containors
	once first row complete creat result row with 7 placement containors
	for our double numbers  -->
</head>
<body>
	




<div id="Num_Ripper_Tracer">TRACER</div>
<div id="data_results">DATA RESULTS</div>
<div id="powerball" onclick="Get_Game_Type('Powerball')"></div>
<div id="megamillions" onclick="Get_Game_Type('MegaMillons')"></div>
<div id="Auto_Play" onclick="Auto_Play()"></div>




<div id="Row1_Most_Recent_Lottery_Winning_Result">
<div id="row1_winning_placement1">0</div>
<div id="row1_winning_placement2">3</div>
<div id="row1_winning_placement3">3</div>
<div id="row1_winning_placement4">4</div>
<div id="row1_winning_placement5">3</div>
<div id="row1_winning_placement6">6</div>
<div id="row1_winning_placement7">5</div>
</div>


<div id="Row1_Most_Recent_Lottery_Listing_Result">
<div id="row1_number_placement1">0</div>
<div id="row1_number_placement2">3</div>
<div id="row1_number_placement3">3</div>
<div id="row1_number_placement4">4</div>
<div id="row1_number_placement5">3</div>
<div id="row1_number_placement6">6</div>
<div id="row1_number_placement7">5</div>
<div id="row1_number_placement8">9</div>
<div id="row1_number_placement9">6</div>
<div id="row1_number_placement10">6</div>
<div id="row1_number_placement11">0</div>
<div id="row1_number_placement12">7</div>
<div id="row1_number_placement13">2</div>
<div id="row1_number_placement14">2</div>
</div>



<div id="winning_ticket_sets_containor">
	<div id="winning_ticket_1" onclick="Get_Ticket('One')">First Ticket</div>
	<div id="winning_ticket_2" onclick="Get_Ticket('Two')">Second Ticket</div>
	<div id="winning_ticket_3" onclick="Get_Ticket('Three')">Thrid Ticket</div>
	<div id="winning_ticket_4" onclick="Get_Ticket('Four')">Fourth Ticket</div>
	<div id="winning_ticket_5" onclick="Get_Ticket('Five')">Fith Ticket</div>
	<div id="winning_ticket_6" onclick="Get_Ticket('Six')">Sixth Ticket</div>
</div>




<div id="A_Line_Containor_Up">
<div id="A_Line_placement1_Up">|</div>
<div id="A_Line_placement2_Up">|</div>
<div id="A_Line_placement3_Up">|</div>
<div id="A_Line_placement4_Up">|</div>
<div id="A_Line_placement5_Up">|</div>
<div id="A_Line_placement6_Up">|</div>
<div id="A_Line_placement7_Up">|</div>
<div id="A_Line_placement8_Up">|</div>
<div id="A_Line_placement9_Up">|</div>
<div id="A_Line_placement10_Up">|</div>
<div id="A_Line_placement11_Up">|</div>
<div id="A_Line_placement12_Up">|</div>
<div id="A_Line_placement13_Up">|</div>
<div id="A_Line_placement14_Up">|</div>
</div>
<div id="B_Line_Containor_Up">
<div id="B_Line_placement1_Up">|</div>
<div id="B_Line_placement2_Up">|</div>
<div id="B_Line_placement3_Up">|</div>
<div id="B_Line_placement4_Up">|</div>
<div id="B_Line_placement5_Up">|</div>
<div id="B_Line_placement6_Up">|</div>
<div id="B_Line_placement7_Up">|</div>
<div id="B_Line_placement8_Up">|</div>
<div id="B_Line_placement9_Up">|</div>
<div id="B_Line_placement10_Up">|</div>
<div id="B_Line_placement11_Up">|</div>
<div id="B_Line_placement12_Up">|</div>
<div id="B_Line_placement13_Up">|</div>
<div id="B_Line_placement14_Up">|</div>	
</div>
<div id="C_Line_Containor_Up">
<div id="C_Line_placement1_Up">|</div>
<div id="C_Line_placement2_Up">|</div>
<div id="C_Line_placement3_Up">|</div>
<div id="C_Line_placement4_Up">|</div>
<div id="C_Line_placement5_Up">|</div>
<div id="C_Line_placement6_Up">|</div>
<div id="C_Line_placement7_Up">|</div>
<div id="C_Line_placement8_Up">|</div>
<div id="C_Line_placement9_Up">|</div>
<div id="C_Line_placement10_Up">|</div>
<div id="C_Line_placement11_Up">|</div>
<div id="C_Line_placement12_Up">|</div>
<div id="C_Line_placement13_Up">|</div>
<div id="C_Line_placement14_Up">|</div>
</div>
<div id="D_Line_Containor_Up">
<div id="D_Line_placement1_Up">|</div>
<div id="D_Line_placement2_Up">|</div>
<div id="D_Line_placement3_Up">|</div>
<div id="D_Line_placement4_Up">|</div>
<div id="D_Line_placement5_Up">|</div>
<div id="D_Line_placement6_Up">|</div>
<div id="D_Line_placement7_Up">|</div>
<div id="D_Line_placement8_Up">|</div>
<div id="D_Line_placement9_Up">|</div>
<div id="D_Line_placement10_Up">|</div>
<div id="D_Line_placement11_Up">|</div>
<div id="D_Line_placement12_Up">|</div>
<div id="D_Line_placement13_Up">|</div>
<div id="D_Line_placement14_Up">|</div>
</div>
<div id="E_Line_Containor_Up">
<div id="E_Line_placement1_Up">|</div>
<div id="E_Line_placement2_Up">|</div>
<div id="E_Line_placement3_Up">|</div>
<div id="E_Line_placement4_Up">|</div>
<div id="E_Line_placement5_Up">|</div>
<div id="E_Line_placement6_Up">|</div>
<div id="E_Line_placement7_Up">|</div>
<div id="E_Line_placement8_Up">|</div>
<div id="E_Line_placement9_Up">|</div>
<div id="E_Line_placement10_Up">|</div>
<div id="E_Line_placement11_Up">|</div>
<div id="E_Line_placement12_Up">|</div>
<div id="E_Line_placement13_Up">|</div>
<div id="E_Line_placement14_Up">|</div>
</div>




<div id="A_Line_Containor_Right">
<div id="A_Line_placement1_Right">_</div>
<div id="A_Line_placement2_Right">_</div>
<div id="A_Line_placement3_Right">_</div>
<div id="A_Line_placement4_Right">_</div>
<div id="A_Line_placement5_Right">_</div>
<div id="A_Line_placement6_Right">_</div>
</div>
<div id="B_Line_Containor_Right">
<div id="B_Line_placement1_Right">_</div>
<div id="B_Line_placement2_Right">_</div>
<div id="B_Line_placement3_Right">_</div>
<div id="B_Line_placement4_Right">_</div>
<div id="B_Line_placement5_Right">_</div>
<div id="B_Line_placement6_Right">_</div>	
</div>
<div id="C_Line_Containor_Right">
<div id="C_Line_placement1_Right">_</div>
<div id="C_Line_placement2_Right">_</div>
<div id="C_Line_placement3_Right">_</div>
<div id="C_Line_placement4_Right">_</div>
<div id="C_Line_placement5_Right">_</div>
<div id="C_Line_placement6_Right">_</div>
</div>
<div id="D_Line_Containor_Right">
<div id="D_Line_placement1_Right">_</div>
<div id="D_Line_placement2_Right">_</div>
<div id="D_Line_placement3_Right">_</div>
<div id="D_Line_placement4_Right">_</div>
<div id="D_Line_placement5_Right">_</div>
<div id="D_Line_placement6_Right">_</div>
</div>
<div id="E_Line_Containor_Right">
<div id="E_Line_placement1_Right">_</div>
<div id="E_Line_placement2_Right">_</div>
<div id="E_Line_placement3_Right">_</div>
<div id="E_Line_placement4_Right">_</div>
<div id="E_Line_placement5_Right">_</div>
<div id="E_Line_placement6_Right">_</div>
</div>
<div id="F_Line_Containor_Right">
<div id="F_Line_placement1_Right">_</div>
<div id="F_Line_placement2_Right">_</div>
<div id="F_Line_placement3_Right">_</div>
<div id="F_Line_placement4_Right">_</div>
<div id="F_Line_placement5_Right">_</div>
<div id="F_Line_placement6_Right">_</div>
</div>
<div id="G_Line_Containor_Right">
<div id="G_Line_placement1_Right">_</div>
<div id="G_Line_placement2_Right">_</div>
<div id="G_Line_placement3_Right">_</div>
<div id="G_Line_placement4_Right">_</div>
<div id="G_Line_placement5_Right">_</div>
<div id="G_Line_placement6_Right">_</div>
</div>
<div id="H_Line_Containor_Right">
<div id="H_Line_placement1_Right">_</div>
<div id="H_Line_placement2_Right">_</div>
<div id="H_Line_placement3_Right">_</div>
<div id="H_Line_placement4_Right">_</div>
<div id="H_Line_placement5_Right">_</div>
<div id="H_Line_placement6_Right">_</div>
</div>
<div id="I_Line_Containor_Right">
<div id="I_Line_placement1_Right">_</div>
<div id="I_Line_placement2_Right">_</div>
<div id="I_Line_placement3_Right">_</div>
<div id="I_Line_placement4_Right">_</div>
<div id="I_Line_placement5_Right">_</div>
<div id="I_Line_placement6_Right">_</div>
</div>
<div id="J_Line_Containor_Right">
<div id="J_Line_placement1_Right">_</div>
<div id="J_Line_placement2_Right">_</div>
<div id="J_Line_placement3_Right">_</div>
<div id="J_Line_placement4_Right">_</div>
<div id="J_Line_placement5_Right">_</div>
<div id="J_Line_placement6_Right">_</div>
</div>
<div id="K_Line_Containor_Right">
<div id="K_Line_placement1_Right">_</div>
<div id="K_Line_placement2_Right">_</div>
<div id="K_Line_placement3_Right">_</div>
<div id="K_Line_placement4_Right">_</div>
<div id="K_Line_placement5_Right">_</div>
<div id="K_Line_placement6_Right">_</div>
</div>
<div id="L_Line_Containor_Right">
<div id="L_Line_placement1_Right">_</div>
<div id="L_Line_placement2_Right">_</div>
<div id="L_Line_placement3_Right">_</div>
<div id="L_Line_placement4_Right">_</div>
<div id="L_Line_placement5_Right">_</div>
<div id="L_Line_placement6_Right">_</div>
</div>
<div id="M_Line_Containor_Right">
<div id="M_Line_placement1_Right">_</div>
<div id="M_Line_placement2_Right">_</div>
<div id="M_Line_placement3_Right">_</div>
<div id="M_Line_placement4_Right">_</div>
<div id="M_Line_placement5_Right">_</div>
<div id="M_Line_placement6_Right">_</div>
</div>

<div id="Maths_pyroplex_holder">

<div id="grid_row1">
<div id="ticket1_row1_placement1">1</div>
<div id="ticket1_row1_placement2">1</div>
<div id="ticket1_row1_placement3">1</div>
<div id="ticket1_row1_placement4">1</div>
<div id="ticket1_row1_placement5">1</div>
<div id="ticket1_row1_placement6">1</div>
<div id="ticket1_row1_placement7">1</div>
<div id="ticket1_row1_placement8">1</div>
<div id="ticket1_row1_placement9">1</div>
<div id="ticket1_row1_placement10">1</div>
<div id="ticket1_row1_placement11">1</div>
<div id="ticket1_row1_placement12">1</div>
<div id="ticket1_row1_placement13">1</div>
<div id="ticket1_row1_placement14">1</div>
</div>


<div id="grid_row2">
<div id="ticket2_row2_placement1">2</div>
<div id="ticket2_row2_placement2">2</div>
<div id="ticket2_row2_placement3">2</div>
<div id="ticket2_row2_placement4">2</div>
<div id="ticket2_row2_placement5">2</div>
<div id="ticket2_row2_placement6">2</div>
<div id="ticket2_row2_placement7">2</div>
<div id="ticket2_row2_placement8">2</div>
<div id="ticket2_row2_placement9">2</div>
<div id="ticket2_row2_placement10">2</div>
<div id="ticket2_row2_placement11">2</div>
<div id="ticket2_row2_placement12">2</div>
<div id="ticket2_row2_placement13">2</div>
<div id="ticket2_row2_placement14">2</div>
</div>

<div id="grid_row3">
<div id="ticket3_row3_placement1">3</div>
<div id="ticket3_row3_placement2">3</div>
<div id="ticket3_row3_placement3">3</div>
<div id="ticket3_row3_placement4">3</div>
<div id="ticket3_row3_placement5">3</div>
<div id="ticket3_row3_placement6">3</div>
<div id="ticket3_row3_placement7">3</div>
<div id="ticket3_row3_placement8">3</div>
<div id="ticket3_row3_placement9">3</div>
<div id="ticket3_row3_placement10">3</div>
<div id="ticket3_row3_placement11">3</div>
<div id="ticket3_row3_placement12">3</div>
<div id="ticket3_row3_placement13">3</div>
<div id="ticket3_row3_placement14">3</div>
</div>



<div id="grid_row4">
<div id="ticket4_row4_placement1">4</div>
<div id="ticket4_row4_placement2">4</div>
<div id="ticket4_row4_placement3">4</div>
<div id="ticket4_row4_placement4">4</div>
<div id="ticket4_row4_placement5">4</div>
<div id="ticket4_row4_placement6">4</div>
<div id="ticket4_row4_placement7">4</div>
<div id="ticket4_row4_placement8">4</div>
<div id="ticket4_row4_placement9">4</div>
<div id="ticket4_row4_placement10">4</div>
<div id="ticket4_row4_placement11">4</div>
<div id="ticket4_row4_placement12">4</div>
<div id="ticket4_row4_placement13">4</div>
<div id="ticket4_row4_placement14">4</div>
</div>

<div id="grid_row5">
<div id="ticket5_row5_placement1">5</div>
<div id="ticket5_row5_placement2">5</div>
<div id="ticket5_row5_placement3">5</div>
<div id="ticket5_row5_placement4">5</div>
<div id="ticket5_row5_placement5">5</div>
<div id="ticket5_row5_placement6">5</div>
<div id="ticket5_row5_placement7">5</div>
<div id="ticket5_row5_placement8">5</div>
<div id="ticket5_row5_placement9">5</div>
<div id="ticket5_row5_placement10">5</div>
<div id="ticket5_row5_placement11">5</div>
<div id="ticket5_row5_placement12">5</div>
<div id="ticket5_row5_placement13">5</div>
<div id="ticket5_row5_placement14">5</div>
</div>

<div id="grid_row6">
<div id="ticket6_row6_placement1">6</div>
<div id="ticket6_row6_placement2">6</div>
<div id="ticket6_row6_placement3">6</div>
<div id="ticket6_row6_placement4">6</div>
<div id="ticket6_row6_placement5">6</div>
<div id="ticket6_row6_placement6">6</div>
<div id="ticket6_row6_placement7">6</div>
<div id="ticket6_row6_placement8">6</div>
<div id="ticket6_row6_placement9">6</div>
<div id="ticket6_row6_placement10">6</div>
<div id="ticket6_row6_placement11">6</div>
<div id="ticket6_row6_placement12">6</div>
<div id="ticket6_row6_placement13">6</div>
<div id="ticket6_row6_placement14">6</div>
</div>


</div>


<div id="controler">
<div id="button_add">+</div>
<div id="button_same">=</div>
<div id="button_join">||</div>
<div id="button_subtract">-</div>
<div id="grid_num_panle1">
<div id="one" onclick="My_Number_Called('1')">1</div>
<div id="two" onclick="My_Number_Called('2')">2</div>
<div id="three" onclick="My_Number_Called('3')">3</div>
</div>
<div id="grid_num_panle2">
<div id="four" onclick="My_Number_Called('4')">4</div>
<div id="five" onclick="My_Number_Called('5')">5</div>
<div id="six" onclick="My_Number_Called('6')">6</div>
</div>
<div id="grid_num_panle3">
<div id="seven" onclick="My_Number_Called('7')">7</div>
<div id="eight" onclick="My_Number_Called('8')">8</div>
<div id="nine" onclick="My_Number_Called('9')">9</div>
</div>
<div id="grid_num_panle4">
<div id="zero" onclick="Patteren_Finder()">Pattern</div>
</div>
</div>

</body>
<script>


function Grid_Display_Clear()
{
	
$('#A_Line_placement1_Up').css('display','none');
$('#A_Line_placement1_Up').css('right','37.8%');
$('#A_Line_placement1_Up').css('position','fixed');
$('#A_Line_placement1_Up').css('z-index','21');

$('#A_Line_placement2_Up').css('display','none');
$('#A_Line_placement2_Up').css('right','32.1%');
$('#A_Line_placement2_Up').css('position','fixed');
$('#A_Line_placement2_Up').css('z-index','21');

$('#A_Line_placement3_Up').css('display','none');
$('#A_Line_placement3_Up').css('right','26.3%');
$('#A_Line_placement3_Up').css('position','fixed');
$('#A_Line_placement3_Up').css('z-index','21');

$('#A_Line_placement4_Up').css('display','none');
$('#A_Line_placement4_Up').css('right','20.6%');
$('#A_Line_placement4_Up').css('position','fixed');
$('#A_Line_placement4_Up').css('z-index','21');

$('#A_Line_placement5_Up').css('display','none');
$('#A_Line_placement5_Up').css('right','14.9%');
$('#A_Line_placement5_Up').css('position','fixed');
$('#A_Line_placement5_Up').css('z-index','21');

$('#A_Line_placement6_Up').css('display','none');
$('#A_Line_placement6_Up').css('right','9.2%');
$('#A_Line_placement6_Up').css('position','fixed');
$('#A_Line_placement6_Up').css('z-index','21');

$('#A_Line_placement7_Up').css('display','none');
$('#A_Line_placement7_Up').css('right','3.5%');
$('#A_Line_placement7_Up').css('position','fixed');
$('#A_Line_placement7_Up').css('z-index','21');

$('#A_Line_placement8_Up').css('display','none');
$('#A_Line_placement8_Up').css('right','-2.2%');
$('#A_Line_placement8_Up').css('position','fixed');
$('#A_Line_placement8_Up').css('z-index','21');

$('#A_Line_placement9_Up').css('display','none');
$('#A_Line_placement9_Up').css('right','-7.9%');
$('#A_Line_placement9_Up').css('position','fixed');
$('#A_Line_placement9_Up').css('z-index','21');

$('#A_Line_placement10_Up').css('display','none');
$('#A_Line_placement10_Up').css('right','-13.6%');
$('#A_Line_placement10_Up').css('position','fixed');
$('#A_Line_placement10_Up').css('z-index','21');

$('#A_Line_placement11_Up').css('display','none');
$('#A_Line_placement11_Up').css('right','-19.4%');
$('#A_Line_placement11_Up').css('position','fixed');
$('#A_Line_placement11_Up').css('z-index','21');

$('#A_Line_placement12_Up').css('display','none');
$('#A_Line_placement12_Up').css('right','-25.1%');
$('#A_Line_placement12_Up').css('position','fixed');
$('#A_Line_placement12_Up').css('z-index','21');

$('#A_Line_placement13_Up').css('display','none');
$('#A_Line_placement13_Up').css('right','-30.8%');
$('#A_Line_placement13_Up').css('position','fixed');
$('#A_Line_placement13_Up').css('z-index','21');

$('#A_Line_placement14_Up').css('display','none');
$('#A_Line_placement14_Up').css('right','-36.5%');
$('#A_Line_placement14_Up').css('position','fixed');
$('#A_Line_placement14_Up').css('z-index','21');

$('#B_Line_placement1_Up').css('display','none');
$('#B_Line_placement1_Up').css('top','35%');
$('#B_Line_placement1_Up').css('right','37.8%');
$('#B_Line_placement1_Up').css('position','fixed');
$('#B_Line_placement1_Up').css('z-index','21');

$('#B_Line_placement2_Up').css('display','none');
$('#B_Line_placement2_Up').css('top','35%');
$('#B_Line_placement2_Up').css('right','32.1%');
$('#B_Line_placement2_Up').css('position','fixed');
$('#B_Line_placement2_Up').css('z-index','21');

$('#B_Line_placement3_Up').css('display','none');
$('#B_Line_placement3_Up').css('top','35%');
$('#B_Line_placement3_Up').css('right','26.3%');
$('#B_Line_placement3_Up').css('position','fixed');
$('#B_Line_placement3_Up').css('z-index','21');

$('#B_Line_placement4_Up').css('display','none');
$('#B_Line_placement4_Up').css('top','35%');
$('#B_Line_placement4_Up').css('right','20.6%');
$('#B_Line_placement4_Up').css('position','fixed');
$('#B_Line_placement4_Up').css('z-index','21');

$('#B_Line_placement5_Up').css('display','none');
$('#B_Line_placement5_Up').css('top','35%');
$('#B_Line_placement5_Up').css('right','14.9%');
$('#B_Line_placement5_Up').css('position','fixed');
$('#B_Line_placement5_Up').css('z-index','21');

$('#B_Line_placement6_Up').css('display','none');
$('#B_Line_placement6_Up').css('top','35%');
$('#B_Line_placement6_Up').css('right','9.2%');
$('#B_Line_placement6_Up').css('position','fixed');
$('#B_Line_placement6_Up').css('z-index','21');

$('#B_Line_placement7_Up').css('display','none');
$('#B_Line_placement7_Up').css('top','35%');
$('#B_Line_placement7_Up').css('right','3.5%');
$('#B_Line_placement7_Up').css('position','fixed');
$('#B_Line_placement7_Up').css('z-index','21');

$('#B_Line_placement8_Up').css('display','none');
$('#B_Line_placement8_Up').css('top','35%');
$('#B_Line_placement8_Up').css('right','-2.2%');
$('#B_Line_placement8_Up').css('position','fixed');
$('#B_Line_placement8_Up').css('z-index','21');

$('#B_Line_placement9_Up').css('display','none');
$('#B_Line_placement9_Up').css('top','35%');
$('#B_Line_placement9_Up').css('right','-7.9%');
$('#B_Line_placement9_Up').css('position','fixed');
$('#B_Line_placement9_Up').css('z-index','21');

$('#B_Line_placement10_Up').css('display','none');
$('#B_Line_placement10_Up').css('top','35%');
$('#B_Line_placement10_Up').css('right','-13.6%');
$('#B_Line_placement10_Up').css('position','fixed');
$('#B_Line_placement10_Up').css('z-index','21');

$('#B_Line_placement11_Up').css('display','none');
$('#B_Line_placement11_Up').css('top','35%');
$('#B_Line_placement11_Up').css('right','-19.4%');
$('#B_Line_placement11_Up').css('position','fixed');
$('#B_Line_placement11_Up').css('z-index','21');

$('#B_Line_placement12_Up').css('display','none');
$('#B_Line_placement12_Up').css('top','35%');
$('#B_Line_placement12_Up').css('right','-25.1%');
$('#B_Line_placement12_Up').css('position','fixed');
$('#B_Line_placement12_Up').css('z-index','21');


$('#B_Line_placement13_Up').css('display','none');
$('#B_Line_placement13_Up').css('top','35%');
$('#B_Line_placement13_Up').css('right','-30.8%');
$('#B_Line_placement13_Up').css('position','fixed');
$('#B_Line_placement13_Up').css('z-index','21');

$('#B_Line_placement14_Up').css('display','none');
$('#B_Line_placement14_Up').css('top','35%');
$('#B_Line_placement14_Up').css('right','-36.5%');
$('#B_Line_placement14_Up').css('position','fixed');
$('#B_Line_placement14_Up').css('z-index','21');

$('#C_Line_placement1_Up').css('display','none');
$('#C_Line_placement1_Up').css('top','45%');
$('#C_Line_placement1_Up').css('right','37.8%');
$('#C_Line_placement1_Up').css('position','fixed');
$('#C_Line_placement1_Up').css('z-index','21');

$('#C_Line_placement2_Up').css('display','none');
$('#C_Line_placement2_Up').css('top','45%');
$('#C_Line_placement2_Up').css('right','32.1%');
$('#C_Line_placement2_Up').css('position','fixed');
$('#C_Line_placement2_Up').css('z-index','21');

$('#C_Line_placement3_Up').css('display','none');
$('#C_Line_placement3_Up').css('top','45%');
$('#C_Line_placement3_Up').css('right','26.3%');
$('#C_Line_placement3_Up').css('position','fixed');
$('#C_Line_placement3_Up').css('z-index','21');

$('#C_Line_placement4_Up').css('display','none');
$('#C_Line_placement4_Up').css('top','45%');
$('#C_Line_placement4_Up').css('right','20.6%');
$('#C_Line_placement4_Up').css('position','fixed');
$('#C_Line_placement4_Up').css('z-index','21');

$('#C_Line_placement5_Up').css('display','none');
$('#C_Line_placement5_Up').css('top','45%');
$('#C_Line_placement5_Up').css('right','14.9%');
$('#C_Line_placement5_Up').css('position','fixed');
$('#C_Line_placement5_Up').css('z-index','21');

$('#C_Line_placement6_Up').css('display','none');
$('#C_Line_placement6_Up').css('top','45%');
$('#C_Line_placement6_Up').css('right','9.2%');
$('#C_Line_placement6_Up').css('position','fixed');
$('#C_Line_placement6_Up').css('z-index','21');

$('#C_Line_placement7_Up').css('display','none');
$('#C_Line_placement7_Up').css('top','45%');
$('#C_Line_placement7_Up').css('right','3.5%');
$('#C_Line_placement7_Up').css('position','fixed');
$('#C_Line_placement7_Up').css('z-index','21');

$('#C_Line_placement8_Up').css('display','none');
$('#C_Line_placement8_Up').css('top','45%');
$('#C_Line_placement8_Up').css('right','-2.2%');
$('#C_Line_placement8_Up').css('position','fixed');
$('#C_Line_placement8_Up').css('z-index','21');

$('#C_Line_placement9_Up').css('display','none');
$('#C_Line_placement9_Up').css('top','45%');
$('#C_Line_placement9_Up').css('right','-7.9%');
$('#C_Line_placement9_Up').css('position','fixed');
$('#C_Line_placement9_Up').css('z-index','21');

$('#C_Line_placement10_Up').css('display','none');
$('#C_Line_placement10_Up').css('top','45%');
$('#C_Line_placement10_Up').css('right','-13.6%');
$('#C_Line_placement10_Up').css('position','fixed');
$('#C_Line_placement10_Up').css('z-index','21');

$('#C_Line_placement11_Up').css('display','none');
$('#C_Line_placement11_Up').css('top','45%');
$('#C_Line_placement11_Up').css('right','-19.4%');
$('#C_Line_placement11_Up').css('position','fixed');
$('#C_Line_placement11_Up').css('z-index','21');

$('#C_Line_placement12_Up').css('display','none');
$('#C_Line_placement12_Up').css('top','45%');
$('#C_Line_placement12_Up').css('right','-25.1%');
$('#C_Line_placement12_Up').css('position','fixed');
$('#C_Line_placement12_Up').css('z-index','21');

$('#C_Line_placement13_Up').css('display','none');
$('#C_Line_placement13_Up').css('top','45%');
$('#C_Line_placement13_Up').css('right','-30.8%');
$('#C_Line_placement13_Up').css('position','fixed');
$('#C_Line_placement13_Up').css('z-index','21');

$('#C_Line_placement14_Up').css('display','none');
$('#C_Line_placement14_Up').css('top','45%');
$('#C_Line_placement14_Up').css('right','-36.5%');
$('#C_Line_placement14_Up').css('position','fixed');
$('#C_Line_placement14_Up').css('z-index','21');


$('#D_Line_placement1_Up').css('display','none');
$('#D_Line_placement1_Up').css('top','55%');
$('#D_Line_placement1_Up').css('right','37.8%');
$('#D_Line_placement1_Up').css('position','fixed');
$('#D_Line_placement1_Up').css('z-index','21');

$('#D_Line_placement2_Up').css('display','none');
$('#D_Line_placement2_Up').css('top','55%');
$('#D_Line_placement2_Up').css('right','32.1%');
$('#D_Line_placement2_Up').css('position','fixed');
$('#D_Line_placement2_Up').css('z-index','21');

$('#D_Line_placement3_Up').css('display','none');
$('#D_Line_placement3_Up').css('top','55%');
$('#D_Line_placement3_Up').css('right','26.3%');
$('#D_Line_placement3_Up').css('position','fixed');
$('#D_Line_placement3_Up').css('z-index','21');

$('#D_Line_placement4_Up').css('display','none');
$('#D_Line_placement4_Up').css('top','55%');
$('#D_Line_placement4_Up').css('right','20.6%');
$('#D_Line_placement4_Up').css('position','fixed');
$('#D_Line_placement4_Up').css('z-index','21');

$('#D_Line_placement5_Up').css('display','none');
$('#D_Line_placement5_Up').css('top','55%');
$('#D_Line_placement5_Up').css('right','14.9%');
$('#D_Line_placement5_Up').css('position','fixed');
$('#D_Line_placement5_Up').css('z-index','21');

$('#D_Line_placement6_Up').css('display','none');
$('#D_Line_placement6_Up').css('top','55%');
$('#D_Line_placement6_Up').css('right','9.2%');
$('#D_Line_placement6_Up').css('position','fixed');
$('#D_Line_placement6_Up').css('z-index','21');

$('#D_Line_placement7_Up').css('display','none');
$('#D_Line_placement7_Up').css('top','55%');
$('#D_Line_placement7_Up').css('right','3.5%');
$('#D_Line_placement7_Up').css('position','fixed');
$('#D_Line_placement7_Up').css('z-index','21');

$('#D_Line_placement8_Up').css('display','none');
$('#D_Line_placement8_Up').css('top','55%');
$('#D_Line_placement8_Up').css('right','-2.2%');
$('#D_Line_placement8_Up').css('position','fixed');
$('#D_Line_placement8_Up').css('z-index','21');


$('#D_Line_placement9_Up').css('display','none');
$('#D_Line_placement9_Up').css('top','55%');
$('#D_Line_placement9_Up').css('right','-7.9%');
$('#D_Line_placement9_Up').css('position','fixed');
$('#D_Line_placement9_Up').css('z-index','21');

$('#D_Line_placement10_Up').css('display','none');
$('#D_Line_placement10_Up').css('top','55%');
$('#D_Line_placement10_Up').css('right','-13.6%');
$('#D_Line_placement10_Up').css('position','fixed');
$('#D_Line_placement10_Up').css('z-index','21');

$('#D_Line_placement11_Up').css('display','none');
$('#D_Line_placement11_Up').css('top','55%');
$('#D_Line_placement11_Up').css('right','-19.4%');
$('#D_Line_placement11_Up').css('position','fixed');
$('#D_Line_placement11_Up').css('z-index','21');

$('#D_Line_placement12_Up').css('display','none');
$('#D_Line_placement12_Up').css('top','55%');
$('#D_Line_placement12_Up').css('right','-25.1%');
$('#D_Line_placement12_Up').css('position','fixed');
$('#D_Line_placement12_Up').css('z-index','21');

$('#D_Line_placement13_Up').css('display','none');
$('#D_Line_placement13_Up').css('top','55%');
$('#D_Line_placement13_Up').css('right','-30.8%');
$('#D_Line_placement13_Up').css('position','fixed');
$('#D_Line_placement13_Up').css('z-index','21');


$('#D_Line_placement14_Up').css('display','none');
$('#D_Line_placement14_Up').css('top','55%');
$('#D_Line_placement14_Up').css('right','-36.5%');
$('#D_Line_placement14_Up').css('position','fixed');
$('#D_Line_placement14_Up').css('z-index','21');


$('#E_Line_placement1_Up').css('display','none');
$('#E_Line_placement1_Up').css('top','65%');
$('#E_Line_placement1_Up').css('right','37.8%');
$('#E_Line_placement1_Up').css('position','fixed');
$('#E_Line_placement1_Up').css('z-index','21');

$('#E_Line_placement2_Up').css('display','none');
$('#E_Line_placement2_Up').css('top','65%');
$('#E_Line_placement2_Up').css('right','32.1%');
$('#E_Line_placement2_Up').css('position','fixed');
$('#E_Line_placement2_Up').css('z-index','21');

$('#E_Line_placement3_Up').css('display','none');
$('#E_Line_placement3_Up').css('top','65%');
$('#E_Line_placement3_Up').css('right','26.3%');
$('#E_Line_placement3_Up').css('position','fixed');
$('#E_Line_placement3_Up').css('z-index','21');

$('#E_Line_placement4_Up').css('display','none');
$('#E_Line_placement4_Up').css('top','65%');
$('#E_Line_placement4_Up').css('right','20.6%');
$('#E_Line_placement4_Up').css('position','fixed');
$('#E_Line_placement4_Up').css('z-index','21');

$('#E_Line_placement5_Up').css('display','none');
$('#E_Line_placement5_Up').css('top','65%');
$('#E_Line_placement5_Up').css('right','14.9%');
$('#E_Line_placement5_Up').css('position','fixed');
$('#E_Line_placement5_Up').css('z-index','21');

$('#E_Line_placement6_Up').css('display','none');
$('#E_Line_placement6_Up').css('top','65%');
$('#E_Line_placement6_Up').css('right','9.2%');
$('#E_Line_placement6_Up').css('position','fixed');
$('#E_Line_placement6_Up').css('z-index','21');

$('#E_Line_placement7_Up').css('display','none');
$('#E_Line_placement7_Up').css('top','65%');
$('#E_Line_placement7_Up').css('right','3.5%');
$('#E_Line_placement7_Up').css('position','fixed');
$('#E_Line_placement7_Up').css('z-index','21');

$('#E_Line_placement8_Up').css('display','none');
$('#E_Line_placement8_Up').css('top','65%');
$('#E_Line_placement8_Up').css('right','-2.2%');
$('#E_Line_placement8_Up').css('position','fixed');
$('#E_Line_placement8_Up').css('z-index','21');

$('#E_Line_placement9_Up').css('display','none');
$('#E_Line_placement9_Up').css('top','65%');
$('#E_Line_placement9_Up').css('right','-7.9%');
$('#E_Line_placement9_Up').css('position','fixed');
$('#E_Line_placement9_Up').css('z-index','21');

$('#E_Line_placement10_Up').css('display','none');
$('#E_Line_placement10_Up').css('top','65%');
$('#E_Line_placement10_Up').css('right','-13.6%');
$('#E_Line_placement10_Up').css('position','fixed');
$('#E_Line_placement10_Up').css('z-index','21');

$('#E_Line_placement11_Up').css('display','none');
$('#E_Line_placement11_Up').css('top','65%');
$('#E_Line_placement11_Up').css('right','-19.4%');
$('#E_Line_placement11_Up').css('position','fixed');
$('#E_Line_placement11_Up').css('z-index','21');

$('#E_Line_placement12_Up').css('display','none');
$('#E_Line_placement12_Up').css('top','65%');
$('#E_Line_placement12_Up').css('right','-25.1%');
$('#E_Line_placement12_Up').css('position','fixed');
$('#E_Line_placement12_Up').css('z-index','21');

$('#E_Line_placement13_Up').css('display','none');
$('#E_Line_placement13_Up').css('top','65%');
$('#E_Line_placement13_Up').css('right','-30.8%');
$('#E_Line_placement13_Up').css('position','fixed');
$('#E_Line_placement13_Up').css('z-index','21');

$('#E_Line_placement14_Up').css('display','none');
$('#E_Line_placement14_Up').css('top','65%');
$('#E_Line_placement14_Up').css('right','-36.5%');
$('#E_Line_placement14_Up').css('position','fixed');
$('#E_Line_placement14_Up').css('z-index','21');





$('#A_Line_placement1_Right').css('display','none');
$('#A_Line_placement1_Right').css('top','11.2%');
$('#A_Line_placement1_Right').css('left','12.4%');
$('#A_Line_placement1_Right').css('position','fixed');
$('#A_Line_placement1_Right').css('z-index','22');


$('#A_Line_placement2_Right').css('display','none');
$('#A_Line_placement2_Right').css('top','21.2%');
$('#A_Line_placement2_Right').css('left','12.4%');
$('#A_Line_placement2_Right').css('position','fixed');
$('#A_Line_placement2_Right').css('z-index','22');

$('#A_Line_placement3_Right').css('display','none');
$('#A_Line_placement3_Right').css('top','31.2%');
$('#A_Line_placement3_Right').css('left','12.4%');
$('#A_Line_placement3_Right').css('position','fixed');
$('#A_Line_placement3_Right').css('z-index','22');

$('#A_Line_placement4_Right').css('display','none');
$('#A_Line_placement4_Right').css('top','41.2%');
$('#A_Line_placement4_Right').css('left','12.4%');
$('#A_Line_placement4_Right').css('position','fixed');
$('#A_Line_placement4_Right').css('z-index','22');

$('#A_Line_placement5_Right').css('display','none');
$('#A_Line_placement5_Right').css('top','51.2%');
$('#A_Line_placement5_Right').css('left','12.4%');
$('#A_Line_placement5_Right').css('position','fixed');
$('#A_Line_placement5_Right').css('z-index','22');

$('#A_Line_placement6_Right').css('display','none');
$('#A_Line_placement6_Right').css('top','61.2%');
$('#A_Line_placement6_Right').css('left','12.4%');
$('#A_Line_placement6_Right').css('position','fixed');
$('#A_Line_placement6_Right').css('z-index','22');




$('#B_Line_placement1_Right').css('display','none');
$('#B_Line_placement1_Right').css('top','11.2%');
$('#B_Line_placement1_Right').css('left','18.2%');
$('#B_Line_placement1_Right').css('position','fixed');
$('#B_Line_placement1_Right').css('z-index','22');

$('#B_Line_placement2_Right').css('display','none');
$('#B_Line_placement2_Right').css('top','21.2%');
$('#B_Line_placement2_Right').css('left','18.2%');
$('#B_Line_placement2_Right').css('position','fixed');
$('#B_Line_placement2_Right').css('z-index','22');

$('#B_Line_placement3_Right').css('display','none');
$('#B_Line_placement3_Right').css('top','31.2%');
$('#B_Line_placement3_Right').css('left','18.2%');
$('#B_Line_placement3_Right').css('position','fixed');
$('#B_Line_placement3_Right').css('z-index','22');

$('#B_Line_placement4_Right').css('display','none');
$('#B_Line_placement4_Right').css('top','41.2%');
$('#B_Line_placement4_Right').css('left','18.2%');
$('#B_Line_placement4_Right').css('position','fixed');
$('#B_Line_placement4_Right').css('z-index','22');

$('#B_Line_placement5_Right').css('display','none');
$('#B_Line_placement5_Right').css('top','51.2%');
$('#B_Line_placement5_Right').css('left','18.2%');
$('#B_Line_placement5_Right').css('position','fixed');
$('#B_Line_placement5_Right').css('z-index','22');

$('#B_Line_placement6_Right').css('display','none');
$('#B_Line_placement6_Right').css('top','61.2%');
$('#B_Line_placement6_Right').css('left','18.2%');
$('#B_Line_placement6_Right').css('position','fixed');
$('#B_Line_placement6_Right').css('z-index','22');

$('#C_Line_placement1_Right').css('display','none');
$('#C_Line_placement1_Right').css('top','11.2%');
$('#C_Line_placement1_Right').css('left','24%');
$('#C_Line_placement1_Right').css('position','fixed');
$('#C_Line_placement1_Right').css('z-index','22');

$('#C_Line_placement2_Right').css('display','none');
$('#C_Line_placement2_Right').css('top','21.2%');
$('#C_Line_placement2_Right').css('left','24%');
$('#C_Line_placement2_Right').css('position','fixed');
$('#C_Line_placement2_Right').css('z-index','22');

$('#C_Line_placement3_Right').css('display','none');
$('#C_Line_placement3_Right').css('top','31.2%');
$('#C_Line_placement3_Right').css('left','24%');
$('#C_Line_placement3_Right').css('position','fixed');
$('#C_Line_placement3_Right').css('z-index','22');

$('#C_Line_placement4_Right').css('display','none');
$('#C_Line_placement4_Right').css('top','41.2%');
$('#C_Line_placement4_Right').css('left','24%');
$('#C_Line_placement4_Right').css('position','fixed');
$('#C_Line_placement4_Right').css('z-index','22');


$('#C_Line_placement5_Right').css('display','none');
$('#C_Line_placement5_Right').css('top','51.2%');
$('#C_Line_placement5_Right').css('left','24%');
$('#C_Line_placement5_Right').css('position','fixed');
$('#C_Line_placement5_Right').css('z-index','22');

$('#C_Line_placement6_Right').css('display','none');
$('#C_Line_placement6_Right').css('top','61.2%');
$('#C_Line_placement6_Right').css('left','24%');
$('#C_Line_placement6_Right').css('position','fixed');
$('#C_Line_placement6_Right').css('z-index','22');

$('#D_Line_placement1_Right').css('display','none');
$('#D_Line_placement1_Right').css('top','11.2%');
$('#D_Line_placement1_Right').css('left','29.8%');
$('#D_Line_placement1_Right').css('position','fixed');
$('#D_Line_placement1_Right').css('z-index','22');

$('#D_Line_placement2_Right').css('display','none');
$('#D_Line_placement2_Right').css('top','21.2%');
$('#D_Line_placement2_Right').css('left','29.8%');
$('#D_Line_placement2_Right').css('position','fixed');
$('#D_Line_placement2_Right').css('z-index','22');

$('#D_Line_placement3_Right').css('display','none');
$('#D_Line_placement3_Right').css('top','31.2%');
$('#D_Line_placement3_Right').css('left','29.8%');
$('#D_Line_placement3_Right').css('position','fixed');
$('#D_Line_placement3_Right').css('z-index','22');

$('#D_Line_placement4_Right').css('display','none');
$('#D_Line_placement4_Right').css('top','41.2%');
$('#D_Line_placement4_Right').css('left','29.8%');
$('#D_Line_placement4_Right').css('position','fixed');
$('#D_Line_placement4_Right').css('z-index','22');

$('#D_Line_placement5_Right').css('display','none');
$('#D_Line_placement5_Right').css('top','51.2%');
$('#D_Line_placement5_Right').css('left','29.8%');
$('#D_Line_placement5_Right').css('position','fixed');
$('#D_Line_placement5_Right').css('z-index','22');

$('#D_Line_placement6_Right').css('display','none');
$('#D_Line_placement6_Right').css('top','61.2%');
$('#D_Line_placement6_Right').css('left','29.8%');
$('#D_Line_placement6_Right').css('position','fixed');
$('#D_Line_placement6_Right').css('z-index','22');

$('#E_Line_placement1_Right').css('display','none');
$('#E_Line_placement1_Right').css('top','11.2%');
$('#E_Line_placement1_Right').css('left','35.6%');
$('#E_Line_placement1_Right').css('position','fixed');
$('#E_Line_placement1_Right').css('z-index','22');

$('#E_Line_placement2_Right').css('display','none');
$('#E_Line_placement2_Right').css('top','21.2%');
$('#E_Line_placement2_Right').css('left','35.6%');
$('#E_Line_placement2_Right').css('position','fixed');
$('#E_Line_placement2_Right').css('z-index','22');

$('#E_Line_placement3_Right').css('display','none');
$('#E_Line_placement3_Right').css('top','31.2%');
$('#E_Line_placement3_Right').css('left','35.6%');
$('#E_Line_placement3_Right').css('position','fixed');
$('#E_Line_placement3_Right').css('z-index','22');

$('#E_Line_placement4_Right').css('display','none');
$('#E_Line_placement4_Right').css('top','41.2%');
$('#E_Line_placement4_Right').css('left','35.6%');
$('#E_Line_placement4_Right').css('position','fixed');
$('#E_Line_placement4_Right').css('z-index','22');

$('#E_Line_placement5_Right').css('display','none');
$('#E_Line_placement5_Right').css('top','51.2%');
$('#E_Line_placement5_Right').css('left','35.6%');
$('#E_Line_placement5_Right').css('position','fixed');
$('#E_Line_placement5_Right').css('z-index','22');

$('#E_Line_placement6_Right').css('display','none');
$('#E_Line_placement6_Right').css('top','61.2%');
$('#E_Line_placement6_Right').css('left','35.6%');
$('#E_Line_placement6_Right').css('position','fixed');
$('#E_Line_placement6_Right').css('z-index','22');

$('#F_Line_placement1_Right').css('display','none');
$('#F_Line_placement1_Right').css('top','11.2%');
$('#F_Line_placement1_Right').css('left','41.4%');
$('#F_Line_placement1_Right').css('position','fixed');
$('#F_Line_placement1_Right').css('z-index','22');

$('#F_Line_placement2_Right').css('display','none');
$('#F_Line_placement2_Right').css('top','21.2%');
$('#F_Line_placement2_Right').css('left','41.4%');
$('#F_Line_placement2_Right').css('position','fixed');
$('#F_Line_placement2_Right').css('z-index','22');

$('#F_Line_placement3_Right').css('display','none');
$('#F_Line_placement3_Right').css('top','31.2%');
$('#F_Line_placement3_Right').css('left','41.4%');
$('#F_Line_placement3_Right').css('position','fixed');
$('#F_Line_placement3_Right').css('z-index','22');

$('#F_Line_placement4_Right').css('display','none');
$('#F_Line_placement4_Right').css('top','41.2%');
$('#F_Line_placement4_Right').css('left','41.4%');
$('#F_Line_placement4_Right').css('position','fixed');
$('#F_Line_placement4_Right').css('z-index','22');

$('#F_Line_placement5_Right').css('display','none');
$('#F_Line_placement5_Right').css('top','51.2%');
$('#F_Line_placement5_Right').css('left','41.4%');
$('#F_Line_placement5_Right').css('position','fixed');
$('#F_Line_placement5_Right').css('z-index','22');

$('#F_Line_placement6_Right').css('display','none');
$('#F_Line_placement6_Right').css('top','61.2%');
$('#F_Line_placement6_Right').css('left','41.4%');
$('#F_Line_placement6_Right').css('position','fixed');
$('#F_Line_placement6_Right').css('z-index','22');

$('#G_Line_placement1_Right').css('display','none');
$('#G_Line_placement1_Right').css('top','11.2%');
$('#G_Line_placement1_Right').css('left','47.2%');
$('#G_Line_placement1_Right').css('position','fixed');
$('#G_Line_placement1_Right').css('z-index','22');

$('#G_Line_placement2_Right').css('display','none');
$('#G_Line_placement2_Right').css('top','21.2%');
$('#G_Line_placement2_Right').css('left','47.2%');
$('#G_Line_placement2_Right').css('position','fixed');
$('#G_Line_placement2_Right').css('z-index','22');

$('#G_Line_placement3_Right').css('display','none');
$('#G_Line_placement3_Right').css('top','31.2%');
$('#G_Line_placement3_Right').css('left','47.2%');
$('#G_Line_placement3_Right').css('position','fixed');
$('#G_Line_placement3_Right').css('z-index','22');

$('#G_Line_placement4_Right').css('display','none');
$('#G_Line_placement4_Right').css('top','41.2%');
$('#G_Line_placement4_Right').css('left','47.2%');
$('#G_Line_placement4_Right').css('position','fixed');
$('#G_Line_placement4_Right').css('z-index','22');

$('#G_Line_placement5_Right').css('display','none');
$('#G_Line_placement5_Right').css('top','51.2%');
$('#G_Line_placement5_Right').css('left','47.2%');
$('#G_Line_placement5_Right').css('position','fixed');
$('#G_Line_placement5_Right').css('z-index','22');

$('#G_Line_placement6_Right').css('display','none');
$('#G_Line_placement6_Right').css('top','61.2%');
$('#G_Line_placement6_Right').css('left','47.2%');
$('#G_Line_placement6_Right').css('position','fixed');
$('#G_Line_placement6_Right').css('z-index','22');

$('#H_Line_placement1_Right').css('display','none');
$('#H_Line_placement1_Right').css('top','11.2%');
$('#H_Line_placement1_Right').css('left','53%');
$('#H_Line_placement1_Right').css('position','fixed');
$('#H_Line_placement1_Right').css('z-index','22');

$('#H_Line_placement2_Right').css('display','none');
$('#H_Line_placement2_Right').css('top','21.2%');
$('#H_Line_placement2_Right').css('left','53%');
$('#H_Line_placement2_Right').css('position','fixed');
$('#H_Line_placement2_Right').css('z-index','22');

$('#H_Line_placement3_Right').css('display','none');
$('#H_Line_placement3_Right').css('top','31.2%');
$('#H_Line_placement3_Right').css('left','53%');
$('#H_Line_placement3_Right').css('position','fixed');
$('#H_Line_placement3_Right').css('z-index','22');

$('#H_Line_placement4_Right').css('display','none');
$('#H_Line_placement4_Right').css('top','41.2%');
$('#H_Line_placement4_Right').css('left','53%');
$('#H_Line_placement4_Right').css('position','fixed');
$('#H_Line_placement4_Right').css('z-index','22');

$('#H_Line_placement5_Right').css('display','none');
$('#H_Line_placement5_Right').css('top','51.2%');
$('#H_Line_placement5_Right').css('left','53%');
$('#H_Line_placement5_Right').css('position','fixed');
$('#H_Line_placement5_Right').css('z-index','22');

$('#H_Line_placement6_Right').css('display','none');
$('#H_Line_placement6_Right').css('top','61.2%');
$('#H_Line_placement6_Right').css('left','53%');
$('#H_Line_placement6_Right').css('position','fixed');
$('#H_Line_placement6_Right').css('z-index','22');

$('#I_Line_placement1_Right').css('display','none');
$('#I_Line_placement1_Right').css('top','11.2%');
$('#I_Line_placement1_Right').css('left','58.8%');
$('#I_Line_placement1_Right').css('position','fixed');
$('#I_Line_placement1_Right').css('z-index','22');

$('#I_Line_placement2_Right').css('display','none');
$('#I_Line_placement2_Right').css('top','21.2%');
$('#I_Line_placement2_Right').css('left','58.8%');
$('#I_Line_placement2_Right').css('position','fixed');
$('#I_Line_placement2_Right').css('z-index','22');

$('#I_Line_placement3_Right').css('display','none');
$('#I_Line_placement3_Right').css('top','31.2%');
$('#I_Line_placement3_Right').css('left','58.8%');
$('#I_Line_placement3_Right').css('position','fixed');
$('#I_Line_placement3_Right').css('z-index','22');

$('#I_Line_placement4_Right').css('display','none');
$('#I_Line_placement4_Right').css('top','41.2%');
$('#I_Line_placement4_Right').css('left','58.8%');
$('#I_Line_placement4_Right').css('position','fixed');
$('#I_Line_placement4_Right').css('z-index','22');

$('#I_Line_placement5_Right').css('display','none');
$('#I_Line_placement5_Right').css('top','51.2%');
$('#I_Line_placement5_Right').css('left','58.8%');
$('#I_Line_placement5_Right').css('position','fixed');
$('#I_Line_placement5_Right').css('z-index','22');

$('#I_Line_placement6_Right').css('display','none');
$('#I_Line_placement6_Right').css('top','61.2%');
$('#I_Line_placement6_Right').css('left','58.8%');
$('#I_Line_placement6_Right').css('position','fixed');
$('#I_Line_placement6_Right').css('z-index','22');

$('#J_Line_placement1_Right').css('display','none');
$('#J_Line_placement1_Right').css('top','11.2%');
$('#J_Line_placement1_Right').css('left','64.6%');
$('#J_Line_placement1_Right').css('position','fixed');
$('#J_Line_placement1_Right').css('z-index','22');

$('#J_Line_placement2_Right').css('display','none');
$('#J_Line_placement2_Right').css('top','21.2%');
$('#J_Line_placement2_Right').css('left','64.6%');
$('#J_Line_placement2_Right').css('position','fixed');
$('#J_Line_placement2_Right').css('z-index','22');

$('#J_Line_placement3_Right').css('display','none');
$('#J_Line_placement3_Right').css('top','31.2%');
$('#J_Line_placement3_Right').css('left','64.6%');
$('#J_Line_placement3_Right').css('position','fixed');
$('#J_Line_placement3_Right').css('z-index','22');

$('#J_Line_placement4_Right').css('display','none');
$('#J_Line_placement4_Right').css('top','41.2%');
$('#J_Line_placement4_Right').css('left','64.6%');
$('#J_Line_placement4_Right').css('position','fixed');
$('#J_Line_placement4_Right').css('z-index','22');

$('#J_Line_placement5_Right').css('display','none');
$('#J_Line_placement5_Right').css('top','51.2%');
$('#J_Line_placement5_Right').css('left','64.6%');
$('#J_Line_placement5_Right').css('position','fixed');
$('#J_Line_placement5_Right').css('z-index','22');

$('#J_Line_placement6_Right').css('display','none');
$('#J_Line_placement6_Right').css('top','61.2%');
$('#J_Line_placement6_Right').css('left','64.6%');
$('#J_Line_placement6_Right').css('position','fixed');
$('#J_Line_placement6_Right').css('z-index','22');

$('#K_Line_placement1_Right').css('display','none');
$('#K_Line_placement1_Right').css('top','11.2%');
$('#K_Line_placement1_Right').css('left','70.4%');
$('#K_Line_placement1_Right').css('position','fixed');
$('#K_Line_placement1_Right').css('z-index','22');

$('#K_Line_placement2_Right').css('display','none');
$('#K_Line_placement2_Right').css('top','21.2%');
$('#K_Line_placement2_Right').css('left','70.4%');
$('#K_Line_placement2_Right').css('position','fixed');
$('#K_Line_placement2_Right').css('z-index','22');

$('#K_Line_placement3_Right').css('display','none');
$('#K_Line_placement3_Right').css('top','31.2%');
$('#K_Line_placement3_Right').css('left','70.4%');
$('#K_Line_placement3_Right').css('position','fixed');
$('#K_Line_placement3_Right').css('z-index','22');

$('#K_Line_placement4_Right').css('display','none');
$('#K_Line_placement4_Right').css('top','41.2%');
$('#K_Line_placement4_Right').css('left','70.4%');
$('#K_Line_placement4_Right').css('position','fixed');
$('#K_Line_placement4_Right').css('z-index','22');

$('#K_Line_placement5_Right').css('display','none');
$('#K_Line_placement5_Right').css('top','51.2%');
$('#K_Line_placement5_Right').css('left','70.4%');
$('#K_Line_placement5_Right').css('position','fixed');
$('#K_Line_placement5_Right').css('z-index','22');

$('#K_Line_placement6_Right').css('display','none');
$('#K_Line_placement6_Right').css('top','61.2%');
$('#K_Line_placement6_Right').css('left','70.4%');
$('#K_Line_placement6_Right').css('position','fixed');
$('#K_Line_placement6_Right').css('z-index','22');

$('#L_Line_placement1_Right').css('display','none');
$('#L_Line_placement1_Right').css('top','11.2%');
$('#L_Line_placement1_Right').css('left','76.2%');
$('#L_Line_placement1_Right').css('position','fixed');
$('#L_Line_placement1_Right').css('z-index','22');

$('#L_Line_placement2_Right').css('display','none');
$('#L_Line_placement2_Right').css('top','21.2%');
$('#L_Line_placement2_Right').css('left','76.2%');
$('#L_Line_placement2_Right').css('position','fixed');
$('#L_Line_placement2_Right').css('z-index','22');

$('#L_Line_placement3_Right').css('display','none');
$('#L_Line_placement3_Right').css('top','31.2%');
$('#L_Line_placement3_Right').css('left','76.2%');
$('#L_Line_placement3_Right').css('position','fixed');
$('#L_Line_placement3_Right').css('z-index','22');

$('#L_Line_placement4_Right').css('display','none');
$('#L_Line_placement4_Right').css('top','41.2%');
$('#L_Line_placement4_Right').css('left','76.2%');
$('#L_Line_placement4_Right').css('position','fixed');
$('#L_Line_placement4_Right').css('z-index','22');

$('#L_Line_placement5_Right').css('display','none');
$('#L_Line_placement5_Right').css('top','51.2%');
$('#L_Line_placement5_Right').css('left','76.2%');
$('#L_Line_placement5_Right').css('position','fixed');
$('#L_Line_placement5_Right').css('z-index','22');

$('#L_Line_placement6_Right').css('display','none');
$('#L_Line_placement6_Right').css('top','61.2%');
$('#L_Line_placement6_Right').css('left','76.2%');
$('#L_Line_placement6_Right').css('position','fixed');
$('#L_Line_placement6_Right').css('z-index','22');

$('#M_Line_placement1_Right').css('display','none');
$('#M_Line_placement1_Right').css('top','11.2%');
$('#M_Line_placement1_Right').css('left','82%');
$('#M_Line_placement1_Right').css('position','fixed');
$('#M_Line_placement1_Right').css('z-index','22');

$('#M_Line_placement2_Right').css('display','none');
$('#M_Line_placement2_Right').css('top','21.2%');
$('#M_Line_placement2_Right').css('left','82%');
$('#M_Line_placement2_Right').css('position','fixed');
$('#M_Line_placement2_Right').css('z-index','22');

$('#M_Line_placement3_Right').css('display','none');
$('#M_Line_placement3_Right').css('top','31.2%');
$('#M_Line_placement3_Right').css('left','82%');
$('#M_Line_placement3_Right').css('position','fixed');
$('#M_Line_placement3_Right').css('z-index','22');

$('#M_Line_placement4_Right').css('display','none');
$('#M_Line_placement4_Right').css('top','41.2%');
$('#M_Line_placement4_Right').css('left','82%');
$('#M_Line_placement4_Right').css('position','fixed');
$('#M_Line_placement4_Right').css('z-index','22');

$('#M_Line_placement5_Right').css('display','none');
$('#M_Line_placement5_Right').css('top','51.2%');
$('#M_Line_placement5_Right').css('left','82%');
$('#M_Line_placement5_Right').css('position','fixed');
$('#M_Line_placement5_Right').css('z-index','22');

$('#M_Line_placement6_Right').css('display','none');
$('#M_Line_placement6_Right').css('top','61.2%');
$('#M_Line_placement6_Right').css('left','82%');
$('#M_Line_placement6_Right').css('position','fixed');
$('#M_Line_placement6_Right').css('z-index','22');


}

var Called_Ticket_One = 0;
var Called_Ticket_Two = 0;
var Called_Ticket_Three = 0;
var Called_Ticket_Four = 0;
var Called_Ticket_Five = 0;
var Called_Ticket_Six = 0;
	function Get_Ticket(row)
	{
if(row == 'One')
{
	Called_Ticket_One = 1;
//alert('One Ticket');
if(Game_Type == 'Powerball')
{
	powerball_stack('One');
}
if(Game_Type == 'MegaMillons')
{

megamillions_stack('One');
}

}
if(row == 'Two')
{
//alert('Two Ticket');
Called_Ticket_Two = 1;
if(Game_Type == 'Powerball')
{
	
	powerball_stack('Two');
}
if(Game_Type == 'MegaMillons')
{

megamillions_stack('Two');
}
}
if(row == 'Three')
{
	Called_Ticket_Three = 1;
//alert('Three Ticket');
if(Game_Type == 'Powerball')
{
	
	powerball_stack('Three');
}
if(Game_Type == 'MegaMillons')
{

megamillions_stack('Three');
}
}
if(row == 'Four')
{
//alert('Four Ticket');
Called_Ticket_Four = 1
if(Game_Type == 'Powerball')
{
	
	powerball_stack('Four');
}
if(Game_Type == 'MegaMillons')
{

megamillions_stack('Four');
}
}
if(row == 'Five')
{
//alert('Five Ticket');
Called_Ticket_Five = 1;
if(Game_Type == 'Powerball')
{
	
	powerball_stack('Five');
}
if(Game_Type == 'MegaMillons')
{

megamillions_stack('Five');
}
}
if(row == 'Six')
{
//alert('Six Ticket');
Called_Ticket_Six = 1;
if(Game_Type == 'Powerball')
{
	
	powerball_stack('Six');
}
if(Game_Type == 'MegaMillons')
{

megamillions_stack('Six');
}
}

	}


function My_Number_Called(num)
{
	
	Find_In_Grid(num,Get_Grid(num));

}


function Find_In_Grid(find_num,grid_num)
{

if(find_num == grid_num)
{
	console.log('I FOUND IN GRID THE SAME NUMBER');
	return grid_num;
}

}


function Get_Grid(num)
{

	
  What_Is_The_Tags_Number(Get_Tag('ticket'+num+'_row'+num+'_placement1'),'ticket'+num+'_row'+num+'_placement1');
  What_Is_The_Tags_Number(Get_Tag('ticket'+num+'_row'+num+'_placement2'),'ticket'+num+'_row'+num+'_placement2');
  What_Is_The_Tags_Number(Get_Tag('ticket'+num+'_row'+num+'_placement3'),'ticket'+num+'_row'+num+'_placement3');
  What_Is_The_Tags_Number(Get_Tag('ticket'+num+'_row'+num+'_placement4'),'ticket'+num+'_row'+num+'_placement4');
  What_Is_The_Tags_Number(Get_Tag('ticket'+num+'_row'+num+'_placement5'),'ticket'+num+'_row'+num+'_placement5');
  What_Is_The_Tags_Number(Get_Tag('ticket'+num+'_row'+num+'_placement6'),'ticket'+num+'_row'+num+'_placement6');
  What_Is_The_Tags_Number(Get_Tag('ticket'+num+'_row'+num+'_placement7'),'ticket'+num+'_row'+num+'_placement7');
  What_Is_The_Tags_Number(Get_Tag('ticket'+num+'_row'+num+'_placement8'),'ticket'+num+'_row'+num+'_placement8');
  What_Is_The_Tags_Number(Get_Tag('ticket'+num+'_row'+num+'_placement9'),'ticket'+num+'_row'+num+'_placement9');
  What_Is_The_Tags_Number(Get_Tag('ticket'+num+'_row'+num+'_placement10'),'ticket'+num+'_row'+num+'_placement10');
  What_Is_The_Tags_Number(Get_Tag('ticket'+num+'_row'+num+'_placement11'),'ticket'+num+'_row'+num+'_placement11');
  What_Is_The_Tags_Number(Get_Tag('ticket'+num+'_row'+num+'_placement12'),'ticket'+num+'_row'+num+'_placement12');
  What_Is_The_Tags_Number(Get_Tag('ticket'+num+'_row'+num+'_placement13'),'ticket'+num+'_row'+num+'_placement13');
  What_Is_The_Tags_Number(Get_Tag('ticket'+num+'_row'+num+'_placement14'),'ticket'+num+'_row'+num+'_placement14');
	
	
  
}


function Patteren_Finder()
{
	////////////////////////////////////////////////////////////////////////////////
	//DIRECTION UP /\  == SAME AS (1 == 1)
	////////////////////////////////////////////////////////////////////////////////
    if( $('#ticket6_row6_placement1').html() == $('#ticket5_row5_placement1').html())
  	{

  		$('#ticket6_row6_placement1').css('background','aqua');
  		$('#ticket5_row5_placement1').css('background','aqua');
  		$('#E_Line_placement1_Up').css('display','block');
  		
  	}

    if( $('#ticket5_row5_placement1').html() == $('#ticket4_row4_placement1').html())
  	{

  		$('#ticket5_row5_placement1').css('background','aqua');
  		$('#ticket4_row4_placement1').css('background','aqua');
  		$('#D_Line_placement1_Up').css('display','block');
  		
  		
  	}

  	if( $('#ticket4_row4_placement1').html() == $('#ticket3_row3_placement1').html())
  	{

  		$('#ticket4_row4_placement1').css('background','aqua');
  		$('#ticket3_row3_placement1').css('background','aqua');
  		$('#C_Line_placement1_Up').css('display','block');

  		
  	}

  	if( $('#ticket3_row3_placement1').html() == $('#ticket2_row2_placement1').html())
  	{

  		$('#ticket3_row3_placement1').css('background','aqua');
  		$('#ticket2_row2_placement1').css('background','aqua');
  		$('#B_Line_placement1_Up').css('display','block');
  		
  	}

  	if( $('#ticket2_row2_placement1').html() == $('#ticket1_row1_placement1').html())
  	{

  		$('#ticket2_row2_placement1').css('background','aqua');
  		$('#ticket1_row1_placement1').css('background','aqua');
  		$('#A_Line_placement1_Up').css('display','block');
  		
  	}

  	////////////////////////////////////////////////////////////////////////////////
    //DIRECTION UP /\  == SAME AS (2 == 2)
	////////////////////////////////////////////////////////////////////////////////
    if( $('#ticket6_row6_placement2').html() == $('#ticket5_row5_placement2').html())
  	{

  		$('#ticket6_row6_placement2').css('background','aqua');
  		$('#ticket5_row5_placement2').css('background','aqua');
  		$('#E_Line_placement2_Up').css('display','block');
  		
  	}

    if( $('#ticket5_row5_placement2').html() == $('#ticket4_row4_placement2').html())
  	{

  		$('#ticket5_row5_placement2').css('background','aqua');
  		$('#ticket4_row4_placement2').css('background','aqua');
  		
  		$('#D_Line_placement2_Up').css('display','block');
  	}

  	if( $('#ticket4_row4_placement2').html() == $('#ticket3_row3_placement2').html())
  	{

  		$('#ticket4_row4_placement2').css('background','aqua');
  		$('#ticket3_row3_placement2').css('background','aqua');
  		$('#C_Line_placement2_Up').css('display','block');
  		
  	}

  	if( $('#ticket3_row3_placement2').html() == $('#ticket2_row2_placement2').html())
  	{

  		$('#ticket3_row3_placement2').css('background','aqua');
  		$('#ticket2_row2_placement2').css('background','aqua');
  		$('#B_Line_placement2_Up').css('display','block');
  		
  	}

  	if( $('#ticket2_row2_placement2').html() == $('#ticket1_row1_placement2').html())
  	{

  		$('#ticket2_row2_placement2').css('background','aqua');
  		$('#ticket1_row1_placement2').css('background','aqua');
  		$('#A_Line_placement2_Up').css('display','block');
  		
  	}

  	////////////////////////////////////////////////////////////////////////////////
  	//DIRECTION UP /\  == SAME AS (3 == 3)
	////////////////////////////////////////////////////////////////////////////////
    if( $('#ticket6_row6_placement3').html() == $('#ticket5_row5_placement3').html())
  	{

  		$('#ticket6_row6_placement3').css('background','aqua');
  		$('#ticket5_row5_placement3').css('background','aqua');
  		$('#E_Line_placement3_Up').css('display','block');
  		
  	}

    if( $('#ticket5_row5_placement3').html() == $('#ticket4_row4_placement3').html())
  	{

  		$('#ticket5_row5_placement3').css('background','aqua');
  		$('#ticket4_row4_placement3').css('background','aqua');
  		$('#D_Line_placement3_Up').css('display','block');
  		
  	}

  	if( $('#ticket4_row4_placement3').html() == $('#ticket3_row3_placement3').html())
  	{

  		$('#ticket4_row4_placement3').css('background','aqua');
  		$('#ticket3_row3_placement3').css('background','aqua');
  		$('#C_Line_placement3_Up').css('display','block');
  		
  	}

  	if( $('#ticket3_row3_placement3').html() == $('#ticket2_row2_placement3').html())
  	{

  		$('#ticket3_row3_placement3').css('background','aqua');
  		$('#ticket2_row2_placement3').css('background','aqua');
  		$('#B_Line_placement3_Up').css('display','block');
  		
  	}

  	if( $('#ticket2_row2_placement3').html() == $('#ticket1_row1_placement3').html())
  	{

  		$('#ticket2_row2_placement3').css('background','aqua');
  		$('#ticket1_row1_placement3').css('background','aqua');
  		$('#A_Line_placement3_Up').css('display','block');
  		
  	}

  	////////////////////////////////////////////////////////////////////////////////
  	//DIRECTION UP /\  == SAME AS (4 == 4)
	////////////////////////////////////////////////////////////////////////////////
    if( $('#ticket6_row6_placement4').html() == $('#ticket5_row5_placement4').html())
  	{

  		$('#ticket6_row6_placement4').css('background','aqua');
  		$('#ticket5_row5_placement4').css('background','aqua');
  		$('#E_Line_placement4_Up').css('display','block');
  		
  	}

    if( $('#ticket5_row5_placement4').html() == $('#ticket4_row4_placement4').html())
  	{

  		$('#ticket5_row5_placement4').css('background','aqua');
  		$('#ticket4_row4_placement4').css('background','aqua');
  		$('#D_Line_placement4_Up').css('display','block');
  		
  	}

  	if( $('#ticket4_row4_placement4').html() == $('#ticket3_row3_placement4').html())
  	{

  		$('#ticket4_row4_placement4').css('background','aqua');
  		$('#ticket3_row3_placement4').css('background','aqua');
  		$('#C_Line_placement4_Up').css('display','block');
  		
  	}

  	if( $('#ticket3_row3_placement4').html() == $('#ticket2_row2_placement4').html())
  	{

  		$('#ticket3_row3_placement4').css('background','aqua');
  		$('#ticket2_row2_placement4').css('background','aqua');
  		$('#B_Line_placement4_Up').css('display','block');
  		
  	}

  	if( $('#ticket2_row2_placement4').html() == $('#ticket1_row1_placement4').html())
  	{

  		$('#ticket2_row2_placement4').css('background','aqua');
  		$('#ticket1_row1_placement4').css('background','aqua');
  		$('#A_Line_placement4_Up').css('display','block');
  		
  	}

  	////////////////////////////////////////////////////////////////////////////////
  	//DIRECTION UP /\  == SAME AS (5 == 5)
	////////////////////////////////////////////////////////////////////////////////
    if( $('#ticket6_row6_placement5').html() == $('#ticket5_row5_placement5').html())
  	{

  		$('#ticket6_row6_placement5').css('background','aqua');
  		$('#ticket5_row5_placement5').css('background','aqua');
  		$('#E_Line_placement5_Up').css('display','block');
  		
  	}

    if( $('#ticket5_row5_placement5').html() == $('#ticket4_row4_placement5').html())
  	{

  		$('#ticket5_row5_placement5').css('background','aqua');
  		$('#ticket4_row4_placement5').css('background','aqua');
  		$('#D_Line_placement5_Up').css('display','block');
  		
  	}

  	if( $('#ticket4_row4_placement5').html() == $('#ticket3_row3_placement5').html())
  	{

  		$('#ticket4_row4_placement5').css('background','aqua');
  		$('#ticket3_row3_placement5').css('background','aqua');
  		$('#C_Line_placement5_Up').css('display','block');
  		
  	}

  	if( $('#ticket3_row3_placement5').html() == $('#ticket2_row2_placement5').html())
  	{

  		$('#ticket3_row3_placement5').css('background','aqua');
  		$('#ticket2_row2_placement5').css('background','aqua');
  		$('#B_Line_placement5_Up').css('display','block');
  		
  	}

  	if( $('#ticket2_row2_placement5').html() == $('#ticket1_row1_placement5').html())
  	{

  		$('#ticket2_row2_placement5').css('background','aqua');
  		$('#ticket1_row1_placement5').css('background','aqua');
  		$('#A_Line_placement5_Up').css('display','block');
  		
  	}

  	////////////////////////////////////////////////////////////////////////////////
  	//DIRECTION UP /\  == SAME AS (6 == 6)
	////////////////////////////////////////////////////////////////////////////////
    if( $('#ticket6_row6_placement6').html() == $('#ticket5_row5_placement6').html())
  	{

  		$('#ticket6_row6_placement6').css('background','aqua');
  		$('#ticket5_row5_placement6').css('background','aqua');
  		$('#E_Line_placement6_Up').css('display','block');
  		
  	}

    if( $('#ticket5_row5_placement6').html() == $('#ticket4_row4_placement6').html())
  	{

  		$('#ticket5_row5_placement6').css('background','aqua');
  		$('#ticket4_row4_placement6').css('background','aqua');
  		$('#D_Line_placement6_Up').css('display','block');
  		
  	}

  	if( $('#ticket4_row4_placement6').html() == $('#ticket3_row3_placement6').html())
  	{

  		$('#ticket4_row4_placement6').css('background','aqua');
  		$('#ticket3_row3_placement6').css('background','aqua');
  		$('#C_Line_placement6_Up').css('display','block');
  		
  	}

  	if( $('#ticket3_row3_placement6').html() == $('#ticket2_row2_placement6').html())
  	{

  		$('#ticket3_row3_placement6').css('background','aqua');
  		$('#ticket2_row2_placement6').css('background','aqua');
  		$('#B_Line_placement6_Up').css('display','block');
  		
  	}

  	if( $('#ticket2_row2_placement6').html() == $('#ticket1_row1_placement6').html())
  	{

  		$('#ticket2_row2_placement6').css('background','aqua');
  		$('#ticket1_row1_placement6').css('background','aqua');
  		$('#A_Line_placement6_Up').css('display','block');
  		
  	}

  	////////////////////////////////////////////////////////////////////////////////
  	//DIRECTION UP /\  == SAME AS (7 == 7)
	////////////////////////////////////////////////////////////////////////////////
    if( $('#ticket6_row6_placement7').html() == $('#ticket5_row5_placement7').html())
  	{

  		$('#ticket6_row6_placement7').css('background','aqua');
  		$('#ticket5_row5_placement7').css('background','aqua');
  		$('#E_Line_placement7_Up').css('display','block');
  		
  	}

    if( $('#ticket5_row5_placement7').html() == $('#ticket4_row4_placement7').html())
  	{

  		$('#ticket5_row5_placement7').css('background','aqua');
  		$('#ticket4_row4_placement7').css('background','aqua');
  		$('#D_Line_placement7_Up').css('display','block');
  		
  	}

  	if( $('#ticket4_row4_placement7').html() == $('#ticket3_row3_placement7').html())
  	{

  		$('#ticket4_row4_placement7').css('background','aqua');
  		$('#ticket3_row3_placement7').css('background','aqua');
  		$('#C_Line_placement7_Up').css('display','block');
  		
  	}

  	if( $('#ticket3_row3_placement7').html() == $('#ticket2_row2_placement7').html())
  	{

  		$('#ticket3_row3_placement7').css('background','aqua');
  		$('#ticket2_row2_placement7').css('background','aqua');
  		$('#B_Line_placement7_Up').css('display','block');
  		
  	}

  	if( $('#ticket2_row2_placement7').html() == $('#ticket1_row1_placement7').html())
  	{

  		$('#ticket2_row2_placement7').css('background','aqua');
  		$('#ticket1_row1_placement7').css('background','aqua');
  		$('#A_Line_placement7_Up').css('display','block');
  		
  	}

  	////////////////////////////////////////////////////////////////////////////////
  	//DIRECTION UP /\  == SAME AS (8 == 8)
	////////////////////////////////////////////////////////////////////////////////
    if( $('#ticket6_row6_placement8').html() == $('#ticket5_row5_placement8').html())
  	{

  		$('#ticket6_row6_placement8').css('background','aqua');
  		$('#ticket5_row5_placement8').css('background','aqua');
  		$('#E_Line_placement8_Up').css('display','block');
  		
  	}

    if( $('#ticket5_row5_placement8').html() == $('#ticket4_row4_placement8').html())
  	{

  		$('#ticket5_row5_placement8').css('background','aqua');
  		$('#ticket4_row4_placement8').css('background','aqua');
  		$('#D_Line_placement8_Up').css('display','block');
  		
  	}

  	if( $('#ticket4_row4_placement8').html() == $('#ticket3_row3_placement8').html())
  	{

  		$('#ticket4_row4_placement8').css('background','aqua');
  		$('#ticket3_row3_placement8').css('background','aqua');
  		$('#C_Line_placement8_Up').css('display','block');
  		
  	}

  	if( $('#ticket3_row3_placement8').html() == $('#ticket2_row2_placement8').html())
  	{

  		$('#ticket3_row3_placement8').css('background','aqua');
  		$('#ticket2_row2_placement8').css('background','aqua');
  		$('#B_Line_placement8_Up').css('display','block');
  		
  	}

  	if( $('#ticket2_row2_placement8').html() == $('#ticket1_row1_placement8').html())
  	{

  		$('#ticket2_row2_placement8').css('background','aqua');
  		$('#ticket1_row1_placement8').css('background','aqua');
  		$('#A_Line_placement8_Up').css('display','block');
  		
  	}

  	////////////////////////////////////////////////////////////////////////////////
  	//DIRECTION UP /\  == SAME AS (9 == 9)
	////////////////////////////////////////////////////////////////////////////////
    if( $('#ticket6_row6_placement9').html() == $('#ticket5_row5_placement9').html())
  	{

  		$('#ticket6_row6_placement9').css('background','aqua');
  		$('#ticket5_row5_placement9').css('background','aqua');
  		$('#E_Line_placement9_Up').css('display','block');
  		
  	}

    if( $('#ticket5_row5_placement9').html() == $('#ticket4_row4_placement9').html())
  	{

  		$('#ticket5_row5_placement9').css('background','aqua');
  		$('#ticket4_row4_placement9').css('background','aqua');
  		$('#D_Line_placement9_Up').css('display','block');
  		
  	}

  	if( $('#ticket4_row4_placement9').html() == $('#ticket3_row3_placement9').html())
  	{

  		$('#ticket4_row4_placement9').css('background','aqua');
  		$('#ticket3_row3_placement9').css('background','aqua');
  		$('#C_Line_placement9_Up').css('display','block');
  		
  	}

  	if( $('#ticket3_row3_placement9').html() == $('#ticket2_row2_placement9').html())
  	{

  		$('#ticket3_row3_placement9').css('background','aqua');
  		$('#ticket2_row2_placement9').css('background','aqua');
  		$('#B_Line_placement9_Up').css('display','block');
  		
  	}

  	if( $('#ticket2_row2_placement9').html() == $('#ticket1_row1_placement9').html())
  	{

  		$('#ticket2_row2_placement9').css('background','aqua');
  		$('#ticket1_row1_placement9').css('background','aqua');
  		$('#A_Line_placement9_Up').css('display','block');
  		
  	}

  	////////////////////////////////////////////////////////////////////////////////
  	//DIRECTION UP /\  == SAME AS (10 == 10)
	////////////////////////////////////////////////////////////////////////////////
    if( $('#ticket6_row6_placement10').html() == $('#ticket5_row5_placement10').html())
  	{

  		$('#ticket6_row6_placement10').css('background','aqua');
  		$('#ticket5_row5_placement10').css('background','aqua');
  		$('#E_Line_placement10_Up').css('display','block');
  		
  	}

    if( $('#ticket5_row5_placement10').html() == $('#ticket4_row4_placement10').html())
  	{

  		$('#ticket5_row5_placement10').css('background','aqua');
  		$('#ticket4_row4_placement10').css('background','aqua');
  		$('#D_Line_placement10_Up').css('display','block');
  		
  	}

  	if( $('#ticket4_row4_placement10').html() == $('#ticket3_row3_placement10').html())
  	{

  		$('#ticket4_row4_placement10').css('background','aqua');
  		$('#ticket3_row3_placement10').css('background','aqua');
  		$('#C_Line_placement10_Up').css('display','block');
  		
  	}

  	if( $('#ticket3_row3_placement10').html() == $('#ticket2_row2_placement10').html())
  	{

  		$('#ticket3_row3_placement10').css('background','aqua');
  		$('#ticket2_row2_placement10').css('background','aqua');
  		$('#B_Line_placement10_Up').css('display','block');
  		
  	}

  	if( $('#ticket2_row2_placement10').html() == $('#ticket1_row1_placement10').html())
  	{

  		$('#ticket2_row2_placement10').css('background','aqua');
  		$('#ticket1_row1_placement10').css('background','aqua');
  		$('#A_Line_placement10_Up').css('display','block');
  		
  	}

  	////////////////////////////////////////////////////////////////////////////////
  	//DIRECTION UP /\  == SAME AS (11 == 11)
	////////////////////////////////////////////////////////////////////////////////
    if( $('#ticket6_row6_placement11').html() == $('#ticket5_row5_placement11').html())
  	{

  		$('#ticket6_row6_placement11').css('background','aqua');
  		$('#ticket5_row5_placement11').css('background','aqua');
  		$('#E_Line_placement11_Up').css('display','block');
  		
  	}

    if( $('#ticket5_row5_placement11').html() == $('#ticket4_row4_placement11').html())
  	{

  		$('#ticket5_row5_placement11').css('background','aqua');
  		$('#ticket4_row4_placement11').css('background','aqua');
  		$('#D_Line_placement11_Up').css('display','block');
  		
  	}

  	if( $('#ticket4_row4_placement11').html() == $('#ticket3_row3_placement11').html())
  	{

  		$('#ticket4_row4_placement11').css('background','aqua');
  		$('#ticket3_row3_placement11').css('background','aqua');
  		$('#C_Line_placement11_Up').css('display','block');
  		
  	}

  	if( $('#ticket3_row3_placement11').html() == $('#ticket2_row2_placement11').html())
  	{

  		$('#ticket3_row3_placement11').css('background','aqua');
  		$('#ticket2_row2_placement11').css('background','aqua');
  		$('#B_Line_placement11_Up').css('display','block');
  		
  	}

  	if( $('#ticket2_row2_placement11').html() == $('#ticket1_row1_placement11').html())
  	{

  		$('#ticket2_row2_placement11').css('background','aqua');
  		$('#ticket1_row1_placement11').css('background','aqua');
  		$('#A_Line_placement11_Up').css('display','block');
  		
  	}

  	////////////////////////////////////////////////////////////////////////////////
  	//DIRECTION UP /\  == SAME AS (12 == 12)
	////////////////////////////////////////////////////////////////////////////////
    if( $('#ticket6_row6_placement12').html() == $('#ticket5_row5_placement12').html())
  	{

  		$('#ticket6_row6_placement12').css('background','aqua');
  		$('#ticket5_row5_placement12').css('background','aqua');
  		$('#E_Line_placement12_Up').css('display','block');
  		
  	}

    if( $('#ticket5_row5_placement12').html() == $('#ticket4_row4_placement12').html())
  	{

  		$('#ticket5_row5_placement12').css('background','aqua');
  		$('#ticket4_row4_placement12').css('background','aqua');
  		$('#D_Line_placement12_Up').css('display','block');
  		
  	}

  	if( $('#ticket4_row4_placement12').html() == $('#ticket3_row3_placement12').html())
  	{

  		$('#ticket4_row4_placement12').css('background','aqua');
  		$('#ticket3_row3_placement12').css('background','aqua');
  		$('#C_Line_placement12_Up').css('display','block');
  		
  	}

  	if( $('#ticket3_row3_placement12').html() == $('#ticket2_row2_placement12').html())
  	{

  		$('#ticket3_row3_placement12').css('background','aqua');
  		$('#ticket2_row2_placement12').css('background','aqua');
  		$('#B_Line_placement12_Up').css('display','block');
  		
  	}

  	if( $('#ticket2_row2_placement12').html() == $('#ticket1_row1_placement12').html())
  	{

  		$('#ticket2_row2_placement12').css('background','aqua');
  		$('#ticket1_row1_placement12').css('background','aqua');
  		$('#A_Line_placement12_Up').css('display','block');
  		
  	}

  	////////////////////////////////////////////////////////////////////////////////
  	//DIRECTION UP /\  == SAME AS (13 == 13)
	////////////////////////////////////////////////////////////////////////////////
    if( $('#ticket6_row6_placement13').html() == $('#ticket5_row5_placement13').html())
  	{

  		$('#ticket6_row6_placement13').css('background','aqua');
  		$('#ticket5_row5_placement13').css('background','aqua');
  		$('#E_Line_placement13_Up').css('display','block');
  		
  	}

    if( $('#ticket5_row5_placement13').html() == $('#ticket4_row4_placement13').html())
  	{

  		$('#ticket5_row5_placement13').css('background','aqua');
  		$('#ticket4_row4_placement13').css('background','aqua');
  		$('#D_Line_placement13_Up').css('display','block');
  		
  	}

  	if( $('#ticket4_row4_placement13').html() == $('#ticket3_row3_placement13').html())
  	{

  		$('#ticket4_row4_placement13').css('background','aqua');
  		$('#ticket3_row3_placement13').css('background','aqua');
  		$('#C_Line_placement13_Up').css('display','block');
  		
  	}

  	if( $('#ticket3_row3_placement13').html() == $('#ticket2_row2_placement13').html())
  	{

  		$('#ticket3_row3_placement13').css('background','aqua');
  		$('#ticket2_row2_placement13').css('background','aqua');
  		$('#B_Line_placement13_Up').css('display','block');
  		
  	}

  	if( $('#ticket2_row2_placement13').html() == $('#ticket1_row1_placement13').html())
  	{

  		$('#ticket2_row2_placement13').css('background','aqua');
  		$('#ticket1_row1_placement13').css('background','aqua');
  		$('#A_Line_placement13_Up').css('display','block');
  		
  	}

  	////////////////////////////////////////////////////////////////////////////////
  	//DIRECTION UP /\  == SAME AS (14 == 14)
	////////////////////////////////////////////////////////////////////////////////
    if( $('#ticket6_row6_placement14').html() == $('#ticket5_row5_placement14').html())
  	{

  		$('#ticket6_row6_placement14').css('background','aqua');
  		$('#ticket5_row5_placement14').css('background','aqua');
  		$('#E_Line_placement14_Up').css('display','block');
  		
  	}

    if( $('#ticket5_row5_placement14').html() == $('#ticket4_row4_placement14').html())
  	{

  		$('#ticket5_row5_placement14').css('background','aqua');
  		$('#ticket4_row4_placement14').css('background','aqua');
  		$('#D_Line_placement14_Up').css('display','block');
  		
  	}

  	if( $('#ticket4_row4_placement14').html() == $('#ticket3_row3_placement14').html())
  	{

  		$('#ticket4_row4_placement14').css('background','aqua');
  		$('#ticket3_row3_placement14').css('background','aqua');
  		$('#C_Line_placement14_Up').css('display','block');
  		
  	}

  	if( $('#ticket3_row3_placement14').html() == $('#ticket2_row2_placement14').html())
  	{

  		$('#ticket3_row3_placement14').css('background','aqua');
  		$('#ticket2_row2_placement14').css('background','aqua');
  		$('#B_Line_placement14_Up').css('display','block');
  		
  	}

  	if( $('#ticket2_row2_placement14').html() == $('#ticket1_row1_placement14').html())
  	{

  		$('#ticket2_row2_placement14').css('background','aqua');
  		$('#ticket1_row1_placement14').css('background','aqua');
  		$('#A_Line_placement14_Up').css('display','block');
  		
  	}

  	////////////////////////////////////////////////////////////////////////////////






//STOP





//////////////////////////////////////////////////////////////////////////////////////////
//DIRECTION RIGHT -> == SAME AS (1 == 1)
//////////////////////////////////////////////////////////////////////////////////////////
    if( $('#ticket6_row6_placement1').html() == $('#ticket6_row6_placement2').html())
  	{
  		$('#ticket6_row6_placement1').css('background','green');
  		$('#ticket6_row6_placement2').css('background','green');

  		$('#A_Line_placement6_Right').css('display','block');

  		
  	}
  	if( $('#ticket6_row6_placement2').html() == $('#ticket6_row6_placement3').html())
  	{
  		$('#ticket6_row6_placement2').css('background','green');
  		$('#ticket6_row6_placement3').css('background','green');

  		$('#B_Line_placement6_Right').css('display','block');

  		
  	}
  	if( $('#ticket6_row6_placement3').html() == $('#ticket6_row6_placement4').html())
  	{
  		$('#ticket6_row6_placement3').css('background','green');
  		$('#ticket6_row6_placement4').css('background','green');

  		$('#C_Line_placement6_Right').css('display','block');

  		
  	}
  	if( $('#ticket6_row6_placement4').html() == $('#ticket6_row6_placement5').html())
  	{
  		$('#ticket6_row6_placement4').css('background','green');
  		$('#ticket6_row6_placement5').css('background','green');

  		$('#D_Line_placement6_Right').css('display','block');

  		
  	}
  	if( $('#ticket6_row6_placement5').html() == $('#ticket6_row6_placement6').html())
  	{
  		$('#ticket6_row6_placement5').css('background','green');
  		$('#ticket6_row6_placement6').css('background','green');

  		$('#E_Line_placement6_Right').css('display','block');

  		
  	}
  	if( $('#ticket6_row6_placement6').html() == $('#ticket6_row6_placement7').html())
  	{
  		$('#ticket6_row6_placement6').css('background','green');
  		$('#ticket6_row6_placement7').css('background','green');

  		$('#F_Line_placement6_Right').css('display','block');

  		
  	}
  	if( $('#ticket6_row6_placement7').html() == $('#ticket6_row6_placement8').html())
  	{
  		$('#ticket6_row6_placement7').css('background','green');
  		$('#ticket6_row6_placement8').css('background','green');

  		$('#G_Line_placement6_Right').css('display','block');

  		
  	}
  	if( $('#ticket6_row6_placement8').html() == $('#ticket6_row6_placement9').html())
  	{
  		$('#ticket6_row6_placement8').css('background','green');
  		$('#ticket6_row6_placement9').css('background','green');

  		$('#H_Line_placement6_Right').css('display','block');

  		
  	}
  	if( $('#ticket6_row6_placement9').html() == $('#ticket6_row6_placement10').html())
  	{
  		$('#ticket6_row6_placement9').css('background','green');
  		$('#ticket6_row6_placement10').css('background','green');

  		$('#I_Line_placement6_Right').css('display','block');

  		
  	}
  	if( $('#ticket6_row6_placement10').html() == $('#ticket6_row6_placement11').html())
  	{
  		$('#ticket6_row6_placement10').css('background','green');
  		$('#ticket6_row6_placement11').css('background','green');

  		$('#J_Line_placement6_Right').css('display','block');

  		
  	}
  	if( $('#ticket6_row6_placement11').html() == $('#ticket6_row6_placement12').html())
  	{
  		$('#ticket6_row6_placement11').css('background','green');
  		$('#ticket6_row6_placement12').css('background','green');

  		$('#K_Line_placement6_Right').css('display','block');

  		
  	}
  	if( $('#ticket6_row6_placement12').html() == $('#ticket6_row6_placement13').html())
  	{
  		$('#ticket6_row6_placement12').css('background','green');
  		$('#ticket6_row6_placement13').css('background','green');

  		$('#L_Line_placement6_Right').css('display','block');

  		
  	}
  	if( $('#ticket6_row6_placement13').html() == $('#ticket6_row6_placement14').html())
  	{
  		$('#ticket6_row6_placement13').css('background','green');
  		$('#ticket6_row6_placement14').css('background','green');

  		$('#M_Line_placement6_Right').css('display','block');

  		
  	}
//////////////////////////////////////////////////////////////////////////////////////////////
//DIRECTION RIGHT -> == SAME AS (2 == 2)
//////////////////////////////////////////////////////////////////////////////////////////

if( $('#ticket5_row5_placement1').html() == $('#ticket5_row5_placement2').html())
  	{
  		$('#ticket5_row5_placement1').css('background','green');
  		$('#ticket5_row5_placement2').css('background','green');

  		$('#A_Line_placement5_Right').css('display','block');

  		
  	}
  	if( $('#ticket5_row5_placement2').html() == $('#ticket5_row5_placement3').html())
  	{
  		$('#ticket5_row5_placement2').css('background','green');
  		$('#ticket5_row5_placement3').css('background','green');

  		$('#B_Line_placement5_Right').css('display','block');

  		
  	}
  	if( $('#ticket5_row5_placement3').html() == $('#ticket5_row5_placement4').html())
  	{
  		$('#ticket5_row5_placement3').css('background','green');
  		$('#ticket5_row5_placement4').css('background','green');

  		$('#C_Line_placement5_Right').css('display','block');

  		
  	}
  	if( $('#ticket5_row5_placement4').html() == $('#ticket5_row5_placement5').html())
  	{
  		$('#ticket5_row5_placement4').css('background','green');
  		$('#ticket5_row5_placement5').css('background','green');

  		$('#D_Line_placement5_Right').css('display','block');

  		
  	}
  	if( $('#ticket5_row5_placement5').html() == $('#ticket5_row5_placement6').html())
  	{
  		$('#ticket5_row5_placement5').css('background','green');
  		$('#ticket5_row5_placement6').css('background','green');

  		$('#E_Line_placement5_Right').css('display','block');

  		
  	}
  	if( $('#ticket5_row5_placement6').html() == $('#ticket5_row5_placement7').html())
  	{
  		$('#ticket5_row5_placement6').css('background','green');
  		$('#ticket5_row5_placement7').css('background','green');

  		$('#F_Line_placement5_Right').css('display','block');

  		
  	}
  	if( $('#ticket5_row5_placement7').html() == $('#ticket5_row5_placement8').html())
  	{
  		$('#ticket5_row5_placement7').css('background','green');
  		$('#ticket5_row5_placement8').css('background','green');

  		$('#G_Line_placement5_Right').css('display','block');

  		
  	}
  	if( $('#ticket5_row5_placement8').html() == $('#ticket5_row5_placement9').html())
  	{
  		$('#ticket5_row5_placement8').css('background','green');
  		$('#ticket5_row5_placement9').css('background','green');

  		$('#H_Line_placement5_Right').css('display','block');

  		
  	}
  	if( $('#ticket5_row5_placement9').html() == $('#ticket5_row5_placement10').html())
  	{
  		$('#ticket5_row5_placement9').css('background','green');
  		$('#ticket5_row5_placement10').css('background','green');

  		$('#I_Line_placement5_Right').css('display','block');

  		
  	}
  	if( $('#ticket5_row5_placement10').html() == $('#ticket5_row5_placement11').html())
  	{
  		$('#ticket5_row5_placement10').css('background','green');
  		$('#ticket5_row5_placement11').css('background','green');

  		$('#J_Line_placement5_Right').css('display','block');

  		
  	}
  	if( $('#ticket5_row5_placement11').html() == $('#ticket5_row5_placement12').html())
  	{
  		$('#ticket5_row5_placement11').css('background','green');
  		$('#ticket5_row5_placement12').css('background','green');

  		$('#K_Line_placement5_Right').css('display','block');

  		
  	}
  	if( $('#ticket5_row5_placement12').html() == $('#ticket5_row5_placement13').html())
  	{
  		$('#ticket5_row5_placement12').css('background','green');
  		$('#ticket5_row5_placement13').css('background','green');

  		$('#L_Line_placement5_Right').css('display','block');

  		
  	}
  	if( $('#ticket5_row5_placement13').html() == $('#ticket5_row5_placement14').html())
  	{
  		$('#ticket5_row5_placement13').css('background','green');
  		$('#ticket5_row5_placement14').css('background','green');

  		$('#M_Line_placement5_Right').css('display','block');

  		
  	}

//////////////////////////////////////////////////////////////////////////////////////////////
//DIRECTION RIGHT -> == SAME AS (3 == 3)
//////////////////////////////////////////////////////////////////////////////////////////

if( $('#ticket4_row4_placement1').html() == $('#ticket4_row4_placement2').html())
  	{
  		$('#ticket4_row4_placement1').css('background','green');
  		$('#ticket4_row4_placement2').css('background','green');

  		$('#A_Line_placement4_Right').css('display','block');

  		
  	}
  	if( $('#ticket4_row4_placement2').html() == $('#ticket4_row4_placement3').html())
  	{
  		$('#ticket4_row4_placement2').css('background','green');
  		$('#ticket4_row4_placement3').css('background','green');

  		$('#B_Line_placement4_Right').css('display','block');

  		
  	}
  	if( $('#ticket4_row4_placement3').html() == $('#ticket4_row4_placement4').html())
  	{
  		$('#ticket4_row4_placement3').css('background','green');
  		$('#ticket4_row4_placement4').css('background','green');

  		$('#C_Line_placement4_Right').css('display','block');

  		
  	}
  	if( $('#ticket4_row4_placement4').html() == $('#ticket4_row4_placement5').html())
  	{
  		$('#ticket4_row4_placement4').css('background','green');
  		$('#ticket4_row4_placement5').css('background','green');

  		$('#D_Line_placement4_Right').css('display','block');

  		
  	}
  	if( $('#ticket4_row4_placement5').html() == $('#ticket4_row4_placement6').html())
  	{
  		$('#ticket4_row4_placement5').css('background','green');
  		$('#ticket4_row4_placement6').css('background','green');

  		$('#E_Line_placement4_Right').css('display','block');

  		
  	}
  	if( $('#ticket4_row4_placement6').html() == $('#ticket4_row4_placement7').html())
  	{
  		$('#ticket4_row4_placement6').css('background','green');
  		$('#ticket4_row4_placement7').css('background','green');

  		$('#F_Line_placement4_Right').css('display','block');

  		
  	}
  	if( $('#ticket4_row4_placement7').html() == $('#ticket4_row4_placement8').html())
  	{
  		$('#ticket4_row4_placement7').css('background','green');
  		$('#ticket4_row4_placement8').css('background','green');

  		$('#G_Line_placement4_Right').css('display','block');

  		
  	}
  	if( $('#ticket4_row4_placement8').html() == $('#ticket4_row4_placement9').html())
  	{
  		$('#ticket4_row4_placement8').css('background','green');
  		$('#ticket4_row4_placement9').css('background','green');

  		$('#H_Line_placement4_Right').css('display','block');

  		
  	}
  	if( $('#ticket4_row4_placement9').html() == $('#ticket4_row4_placement10').html())
  	{
  		$('#ticket4_row4_placement9').css('background','green');
  		$('#ticket4_row4_placement10').css('background','green');

  		$('#I_Line_placement4_Right').css('display','block');

  		
  	}
  	if( $('#ticket4_row4_placement10').html() == $('#ticket4_row4_placement11').html())
  	{
  		$('#ticket4_row4_placement10').css('background','green');
  		$('#ticket4_row4_placement11').css('background','green');

  		$('#J_Line_placement4_Right').css('display','block');

  		
  	}
  	if( $('#ticket4_row4_placement11').html() == $('#ticket4_row4_placement12').html())
  	{
  		$('#ticket4_row4_placement11').css('background','green');
  		$('#ticket4_row4_placement12').css('background','green');

  		$('#K_Line_placement4_Right').css('display','block');

  		
  	}
  	if( $('#ticket4_row4_placement12').html() == $('#ticket4_row4_placement13').html())
  	{
  		$('#ticket4_row4_placement12').css('background','green');
  		$('#ticket4_row4_placement13').css('background','green');

  		$('#L_Line_placement4_Right').css('display','block');

  		
  	}
  	if( $('#ticket4_row4_placement13').html() == $('#ticket4_row4_placement14').html())
  	{
  		$('#ticket4_row4_placement13').css('background','green');
  		$('#ticket4_row4_placement14').css('background','green');

  		$('#M_Line_placement4_Right').css('display','block');

  		
  	}
//////////////////////////////////////////////////////////////////////////////////////////////
//DIRECTION RIGHT -> == SAME AS (4 == 4)
//////////////////////////////////////////////////////////////////////////////////////////

if( $('#ticket3_row3_placement1').html() == $('#ticket3_row3_placement2').html())
  	{
  		$('#ticket3_row3_placement1').css('background','green');
  		$('#ticket3_row3_placement2').css('background','green');

  		$('#A_Line_placement3_Right').css('display','block');

  		
  	}
  	if( $('#ticket3_row3_placement2').html() == $('#ticket3_row3_placement3').html())
  	{
  		$('#ticket3_row3_placement2').css('background','green');
  		$('#ticket3_row3_placement3').css('background','green');

  		$('#B_Line_placement3_Right').css('display','block');

  		
  	}
  	if( $('#ticket3_row3_placement3').html() == $('#ticket3_row3_placement4').html())
  	{
  		$('#ticket3_row3_placement3').css('background','green');
  		$('#ticket3_row3_placement4').css('background','green');

  		$('#C_Line_placement3_Right').css('display','block');

  		
  	}
  	if( $('#ticket3_row3_placement4').html() == $('#ticket3_row3_placement5').html())
  	{
  		$('#ticket3_row3_placement4').css('background','green');
  		$('#ticket3_row3_placement5').css('background','green');

  		$('#D_Line_placement3_Right').css('display','block');

  		
  	}
  	if( $('#ticket3_row3_placement5').html() == $('#ticket3_row3_placement6').html())
  	{
  		$('#ticket3_row3_placement5').css('background','green');
  		$('#ticket3_row3_placement6').css('background','green');

  		$('#E_Line_placement3_Right').css('display','block');

  		
  	}
  	if( $('#ticket3_row3_placement6').html() == $('#ticket3_row3_placement7').html())
  	{
  		$('#ticket3_row3_placement6').css('background','green');
  		$('#ticket3_row3_placement7').css('background','green');

  		$('#F_Line_placement3_Right').css('display','block');

  		
  	}
  	if( $('#ticket3_row3_placement7').html() == $('#ticket3_row3_placement8').html())
  	{
  		$('#ticket3_row3_placement7').css('background','green');
  		$('#ticket3_row3_placement8').css('background','green');

  		$('#G_Line_placement3_Right').css('display','block');

  		
  	}
  	if( $('#ticket3_row3_placement8').html() == $('#ticket3_row3_placement9').html())
  	{
  		$('#ticket3_row3_placement8').css('background','green');
  		$('#ticket3_row3_placement9').css('background','green');

  		$('#H_Line_placement3_Right').css('display','block');

  		
  	}
  	if( $('#ticket3_row3_placement9').html() == $('#ticket3_row3_placement10').html())
  	{
  		$('#ticket3_row3_placement9').css('background','green');
  		$('#ticket3_row3_placement10').css('background','green');

  		$('#I_Line_placement3_Right').css('display','block');

  		
  	}
  	if( $('#ticket3_row3_placement10').html() == $('#ticket3_row3_placement11').html())
  	{
  		$('#ticket3_row3_placement10').css('background','green');
  		$('#ticket3_row3_placement11').css('background','green');

  		$('#J_Line_placement3_Right').css('display','block');

  		
  	}
  	if( $('#ticket3_row3_placement11').html() == $('#ticket3_row3_placement12').html())
  	{
  		$('#ticket3_row3_placement11').css('background','green');
  		$('#ticket3_row3_placement12').css('background','green');

  		$('#K_Line_placement3_Right').css('display','block');

  		
  	}
  	if( $('#ticket3_row3_placement12').html() == $('#ticket3_row3_placement13').html())
  	{
  		$('#ticket3_row3_placement12').css('background','green');
  		$('#ticket3_row3_placement13').css('background','green');

  		$('#L_Line_placement3_Right').css('display','block');

  		
  	}
  	if( $('#ticket3_row3_placement13').html() == $('#ticket3_row3_placement14').html())
  	{
  		$('#ticket3_row3_placement13').css('background','green');
  		$('#ticket3_row3_placement14').css('background','green');

  		$('#M_Line_placement3_Right').css('display','block');

  		
  	}
//////////////////////////////////////////////////////////////////////////////////////////////
//DIRECTION RIGHT -> == SAME AS (5 == 5)
//////////////////////////////////////////////////////////////////////////////////////////

if( $('#ticket2_row2_placement1').html() == $('#ticket2_row2_placement2').html())
  	{
  		$('#ticket2_row2_placement1').css('background','green');
  		$('#ticket2_row2_placement2').css('background','green');

  		$('#A_Line_placement2_Right').css('display','block');

  		
  	}
  	if( $('#ticket2_row2_placement2').html() == $('#ticket2_row2_placement3').html())
  	{
  		$('#ticket2_row2_placement2').css('background','green');
  		$('#ticket2_row2_placement3').css('background','green');

  		$('#B_Line_placement2_Right').css('display','block');

  		
  	}
  	if( $('#ticket2_row2_placement3').html() == $('#ticket2_row2_placement4').html())
  	{
  		$('#ticket2_row2_placement3').css('background','green');
  		$('#ticket2_row2_placement4').css('background','green');

  		$('#C_Line_placement2_Right').css('display','block');

  		
  	}
  	if( $('#ticket2_row2_placement4').html() == $('#ticket2_row2_placement5').html())
  	{
  		$('#ticket2_row2_placement4').css('background','green');
  		$('#ticket2_row2_placement5').css('background','green');

  		$('#D_Line_placement2_Right').css('display','block');

  		
  	}
  	if( $('#ticket2_row2_placement5').html() == $('#ticket2_row2_placement6').html())
  	{
  		$('#ticket2_row2_placement5').css('background','green');
  		$('#ticket2_row2_placement6').css('background','green');

  		$('#E_Line_placement2_Right').css('display','block');

  		
  	}
  	if( $('#ticket2_row2_placement6').html() == $('#ticket2_row2_placement7').html())
  	{
  		$('#ticket2_row2_placement6').css('background','green');
  		$('#ticket2_row2_placement7').css('background','green');

  		$('#F_Line_placement2_Right').css('display','block');

  		
  	}
  	if( $('#ticket2_row2_placement7').html() == $('#ticket2_row2_placement8').html())
  	{
  		$('#ticket2_row2_placement7').css('background','green');
  		$('#ticket2_row2_placement8').css('background','green');

  		$('#G_Line_placement2_Right').css('display','block');

  		
  	}
  	if( $('#ticket2_row2_placement8').html() == $('#ticket2_row2_placement9').html())
  	{
  		$('#ticket2_row2_placement8').css('background','green');
  		$('#ticket2_row2_placement9').css('background','green');

  		$('#H_Line_placement2_Right').css('display','block');

  		
  	}
  	if( $('#ticket2_row2_placement9').html() == $('#ticket2_row2_placement10').html())
  	{
  		$('#ticket2_row2_placement9').css('background','green');
  		$('#ticket2_row2_placement10').css('background','green');

  		$('#I_Line_placement2_Right').css('display','block');

  		
  	}
  	if( $('#ticket2_row2_placement10').html() == $('#ticket2_row2_placement11').html())
  	{
  		$('#ticket2_row2_placement10').css('background','green');
  		$('#ticket2_row2_placement11').css('background','green');

  		$('#J_Line_placement2_Right').css('display','block');

  		
  	}
  	if( $('#ticket2_row2_placement11').html() == $('#ticket2_row2_placement12').html())
  	{
  		$('#ticket2_row2_placement11').css('background','green');
  		$('#ticket2_row2_placement12').css('background','green');

  		$('#K_Line_placement2_Right').css('display','block');

  		
  	}
  	if( $('#ticket2_row2_placement12').html() == $('#ticket2_row2_placement13').html())
  	{
  		$('#ticket2_row2_placement12').css('background','green');
  		$('#ticket2_row2_placement13').css('background','green');

  		$('#L_Line_placement2_Right').css('display','block');

  		
  	}
  	if( $('#ticket2_row2_placement13').html() == $('#ticket2_row2_placement14').html())
  	{
  		$('#ticket2_row2_placement13').css('background','green');
  		$('#ticket2_row2_placement14').css('background','green');

  		$('#M_Line_placement2_Right').css('display','block');

  		
  	}  
//////////////////////////////////////////////////////////////////////////////////////////////
//DIRECTION RIGHT -> == SAME AS (6 == 6)
//////////////////////////////////////////////////////////////////////////////////////////

if( $('#ticket1_row1_placement1').html() == $('#ticket1_row1_placement2').html())
  	{
  		$('#ticket1_row1_placement1').css('background','green');
  		$('#ticket1_row1_placement2').css('background','green');

  		$('#A_Line_placement1_Right').css('display','block');

  		
  	}
  	if( $('#ticket1_row1_placement2').html() == $('#ticket1_row1_placement3').html())
  	{
  		$('#ticket1_row1_placement2').css('background','green');
  		$('#ticket1_row1_placement3').css('background','green');

  		$('#B_Line_placement1_Right').css('display','block');

  		
  	}
  	if( $('#ticket1_row1_placement3').html() == $('#ticket1_row1_placement4').html())
  	{
  		$('#ticket1_row1_placement3').css('background','green');
  		$('#ticket1_row1_placement4').css('background','green');

  		$('#C_Line_placement1_Right').css('display','block');

  		
  	}
  	if( $('#ticket1_row1_placement4').html() == $('#ticket1_row1_placement5').html())
  	{
  		$('#ticket1_row1_placement4').css('background','green');
  		$('#ticket1_row1_placement5').css('background','green');

  		$('#D_Line_placement1_Right').css('display','block');

  		
  	}
  	if( $('#ticket1_row1_placement5').html() == $('#ticket1_row1_placement6').html())
  	{
  		$('#ticket1_row1_placement5').css('background','green');
  		$('#ticket1_row1_placement6').css('background','green');

  		$('#E_Line_placement1_Right').css('display','block');

  		
  	}
  	if( $('#ticket1_row1_placement6').html() == $('#ticket1_row1_placement7').html())
  	{
  		$('#ticket1_row1_placement6').css('background','green');
  		$('#ticket1_row1_placement7').css('background','green');

  		$('#F_Line_placement1_Right').css('display','block');

  		
  	}
  	if( $('#ticket1_row1_placement7').html() == $('#ticket1_row1_placement8').html())
  	{
  		$('#ticket1_row1_placement7').css('background','green');
  		$('#ticket1_row1_placement8').css('background','green');

  		$('#G_Line_placement1_Right').css('display','block');

  		
  	}
  	if( $('#ticket1_row1_placement8').html() == $('#ticket1_row1_placement9').html())
  	{
  		$('#ticket1_row1_placement8').css('background','green');
  		$('#ticket1_row1_placement9').css('background','green');

  		$('#H_Line_placement1_Right').css('display','block');

  		
  	}
  	if( $('#ticket1_row1_placement9').html() == $('#ticket1_row1_placement10').html())
  	{
  		$('#ticket1_row1_placement9').css('background','green');
  		$('#ticket1_row1_placement10').css('background','green');

  		$('#I_Line_placement1_Right').css('display','block');

  		
  	}
  	if( $('#ticket1_row1_placement10').html() == $('#ticket1_row1_placement11').html())
  	{
  		$('#ticket1_row1_placement10').css('background','green');
  		$('#ticket1_row1_placement11').css('background','green');

  		$('#J_Line_placement1_Right').css('display','block');

  		
  	}
  	if( $('#ticket1_row1_placement11').html() == $('#ticket1_row1_placement12').html())
  	{
  		$('#ticket1_row1_placement11').css('background','green');
  		$('#ticket1_row1_placement12').css('background','green');

  		$('#K_Line_placement1_Right').css('display','block');

  		
  	}
  	if( $('#ticket1_row1_placement12').html() == $('#ticket1_row1_placement13').html())
  	{
  		$('#ticket1_row1_placement12').css('background','green');
  		$('#ticket1_row1_placement13').css('background','green');

  		$('#L_Line_placement1_Right').css('display','block');

  		
  	}
  	if( $('#ticket1_row1_placement13').html() == $('#ticket1_row1_placement14').html())
  	{
  		$('#ticket1_row1_placement13').css('background','green');
  		$('#ticket1_row1_placement14').css('background','green');

  		$('#M_Line_placement1_Right').css('display','block');

  		
  	}  	  	  	






  	//DIRECTION LEFT <- == SAME AS (3 == 3)
  /*if( $('#ticket6_row6_placement1').html() == $('#ticket5_row5_placement1').html())
  	{
  		console.log("SAME->AS->SAME->DIRECTION->LEFT->ERROR->r6p1=<NULL_POINTER_PLACEMENT>");
  	}*/
  	//DIRECTION DOWN \/  == SAME AS (4 == 4)
  /*if( $('#ticket6_row6_placement1').html() == $('#ticket5_row5_placement1').html())
  	{
  		console.log("SAME->AS->SAME->DIRECTION->DOWN->ERROR->r6p1=<NULL_POINTER_PLACEMENT>");
  	}*/
    //DIRECTION DOWN
  if($('#ticket4_row4_placement1').html() == $('#ticket5_row5_placement1').html())
    {
        	$('#ticket4_row4_placement1').css('background','aqua');
        	$('#ticket5_row5_placement1').css('background','aqua');

    }
    if($('#ticket3_row3_placement1').html() == $('#ticket4_row4_placement1').html())
    {
        	$('#ticket3_row3_placement1').css('background','aqua');
        	$('#ticket4_row4_placement1').css('background','aqua');

    }
    if($('#ticket2_row2_placement1').html() == $('#ticket3_row3_placement1').html())
    {
    	    $('#ticket2_row2_placement1').css('background','aqua');
        	$('#ticket3_row3_placement1').css('background','aqua');
    }

    if($('#ticket1_row1_placement1').html() == $('#ticket2_row2_placement1').html())
    {
    	    $('#ticket1_row1_placement1').css('background','aqua');
        	$('#ticket2_row2_placement1').css('background','aqua');
    }

    //DIRECTION RIGHT ANGLE  \ == SAME AS (5 == 5)
  	if( $('#ticket6_row6_placement2').html() == $('#ticket5_row5_placement1').html())
  	{
  		//console.log("SAME->AS->SAME->DIRECTION->RIGHT_ANGLE->MATCH->r6p2=r5p1");
  		$('#ticket6_row6_placement2').css('background','aqua');
  		$('#ticket5_row5_placement1').css('background','aqua');
        

  	}
  	//DIRECTION LEFT ANGLE  / == SAME AS (6 == 6)
  	if( $('#ticket6_row6_placement1').html() == $('#ticket5_row5_placement2').html())
  	{
  		$('#ticket6_row6_placement1').css('background','aqua');
  		$('#ticket5_row5_placement2').css('background','aqua');
  		//console.log("SAME->AS->SAME->DIRECTION->LEFT_ANGLE->MATCH->r6p1=r5p2");
  	}

  	if( $('#ticket5_row5_placement1').html() == $('#ticket4_row4_placement2').html())
  	{

  		$('#ticket5_row5_placement1').css('background','aqua');
  		$('#ticket4_row4_placement2').css('background','aqua');
  		//console.log("SAME->AS->SAME->DIRECTION->LEFT_ANGLE->MATCH->r5p1=r4p2");
  	}

  	if( $('#ticket4_row4_placement1').html() == $('#ticket3_row3_placement2').html())
  	{
  		$('#ticket4_row4_placement1').css('background','aqua');
  		$('#ticket3_row3_placement2').css('background','aqua');
  		//console.log("SAME->AS->SAME->DIRECTION->LEFT_ANGLE->MATCH->r4p1=r3p2");
  	}

  	if( $('#ticket3_row3_placement1').html() == $('#ticket2_row2_placement2').html())
  	{
  		$('#ticket3_row3_placement1').css('background','aqua');
  		$('#ticket2_row2_placement2').css('background','aqua');
  		//console.log("SAME->AS->SAME->DIRECTION->LEFT_ANGLE->MATCH->r3p1=r2p2");
  	}

  	if( $('#ticket2_row2_placement1').html() == $('#ticket1_row1_placement2').html())
  	{
  		$('#ticket2_row2_placement1').css('background','aqua');
  		$('#ticket1_row1_placement2').css('background','aqua');
  		//console.log("SAME->AS->SAME->DIRECTION->LEFT_ANGLE->MATCH->r2p1=r1p2");
  	}

}


function Get_Tag(tag)
{
	return $('#'+tag).html();
}

function What_Is_The_Tags_Number(tag_num,name)
{
	if(tag_num == '0')
	{
        //console.log("TAG_I_AM->0");
        $('#'+name+'').css('background','grey');
        return 0;
	}
	if(tag_num == '1')
	{
		//console.log("TAG_I_AM->1");
		$('#'+name+'').css('background','yellow');
		return 1;
	}
	if(tag_num == '2')
	{
		//console.log("TAG_I_AM->2");
		$('#'+name+'').css('background','orange');
		return 2;
	}
	if(tag_num == '3')
	{
		//console.log("TAG_I_AM->3");
		$('#'+name+'').css('background','brown');
		return 3;
	}
	if(tag_num == '4')
	{
		//console.log("TAG_I_AM->4");
		$('#'+name+'').css('background','red');
		return 4;
	}
	if(tag_num == '5')
	{
		//console.log("TAG_I_AM->5");
		$('#'+name+'').css('background','lightgreen');
		return 5;
	}
	if(tag_num == '6')
	{
		//console.log("TAG_I_AM->6");
		$('#'+name+'').css('background','purple');
		return 6;
	}
	if(tag_num == '7')
	{
		//console.log("TAG_I_AM->7");
		$('#'+name+'').css('background','lightblue');
		return 7;
	}
	if(tag_num == '8')
	{
		//console.log("TAG_I_AM->8");
		$('#'+name+'').css('background','blue');
		return 8;
	}
	if(tag_num == '9')
	{
		//console.log("TAG_I_AM->9");
		$('#'+name+'').css('background','green');
		return 9;
	}
}

function Get_Game_Type(type)
{

	if(type == 'Powerball')
	{
		Game_Type = 'Powerball';
	}
	if(type == 'MegaMillons')
	{
		Game_Type = 'MegaMillons';
	}
}

	function powerball_stack(row)
	{
		

get_lottery_results('https://www.hoosierlottery.com/games/powerball?WT.cg_n=HomePage_Winning_Numbers&WT.cg_s=Powerball_LOGO',row,Game_Type);


	}
function megamillions_stack(row)
	{
		

get_lottery_results('https://www.hoosierlottery.com/games/mega-millions?WT.cg_n=HomePage_Winning_Numbers&WT.cg_s=MegaMillions_LOGO',row,Game_Type);


	}



	function get_lottery_results(url_type,row,gt)
	{

//console.log('row: '+row+' gt: '+gt+'');

  $.post('./get_lotto_data.php?type_url='+url_type+'&r='+row+'&gt='+gt+'',{

       
            
      

      

    },function(data){

      //console.log(data);


 
$('#data_results').css('display','block');
$('#data_results').html(data);


for (var i = 0; i <= data.length; i++) {
	Brake_It_Out('Count:'+i+'_('+data[i]+'<br>',i,data);
}

 

     
      //console.log("GETTING LOTTERY RESULTS: "+data);
     
   
  

    
    

    });
	}
	
	var Large_KeyCode_Number ="<_LARGE_KEYCODE_NUMBER_>";
var Error_Zero_One = "<_NULLIFIED_ZERO_ONE_>";
var Error_Zero_Two = "<_NULLIFIED_ZERO_TWO_>";
var Error_Zero_Three = "<_NULLIFIED_ZERO_THREE_>";
var Error_Zero_Four = "<_NULLIFIED_ZERO_FOUR_>";
var Error_Zero_Five = "<_NULLIFIED_ZERO_FIVE_>";
var Error_Zero_Six = "<_NULLIFIED_ZERO_SIX_>";
var Error_Zero_Seven = "<_NULLIFIED_ZERO_SEVEN_>";
var Error_Zero_Eight = "<_NULLIFIED_ZERO_EIGHT_>";
var Error_Zero_Nine = "<_NULLIFIED_ZERO_NINE_>";
	function error_handler_striper(data)
	{
		
		if(data.indexOf(Large_KeyCode_Number) != -1)
         {
         	
         
var html_data_result_div_tag_block = $('#data_results').html()

//console.log("MATCH_UP:->STRING:->HASH_LAYER->" +html_data_result_div_tag_block);


var row0_placement1_start0 = 0;
var row0_placement1_start1 = 0;
var row0_placement2_start1 = 0;
var row0_placement3_start1 = 0;
var row0_placement4_start1 = 0;
var row0_placement5_start1 = 0;
var row0_placement6_start1 = 0;
var row0_placement6_finish2 = 0;


var number_zero_hash = '<_0_>';
var number_one_hash = '<_1_>';
var number_two_hash = '<_2_>';
var number_three_hash = '<_3_>';
var number_four_hash = '<_4_>';
var number_five_hash = '<_5_>';
var number_six_hash = '<_6_>';
var number_seven_hash = '<_7_>';
var number_eight_hash = '<_8_>';
var number_nine_hash = '<_9_>';
var number_ten_hash = '<_10_>';
var number_eleven_hash = '<_11_>';
var number_twelve_hash = '<_12_>';
var number_thirteen_hash = '<_13_>';

///////////////////////////////////////////////////////////////////////////////////////////////////////////
//HashTag Layer algorithm
///////////////////////////////////////////////////////////////////////////////////////////////////////////
         if(data.indexOf(number_zero_hash) != -1 && data.indexOf(Error_Zero_One) != -1)
         {

 row0_placement1_start0 = html_data_result_div_tag_block.replace('&lt;_0_&gt;&lt;_NULLIFIED_ZERO_ONE_&gt;', '');
 row0_placement1_start0 = html_data_result_div_tag_block.replace('&lt;_0_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');
         	//console.log('HASH_LAYER->0_1->'+ row0_placement1_start0);
         }

         if(data.indexOf(number_zero_hash) != -1 && data.indexOf(Error_Zero_Two) != -1)
         {

 row0_placement1_start0 = html_data_result_div_tag_block.replace('&lt;_0_&gt;&lt;_NULLIFIED_ZERO_TWO_&gt;', '');
 row0_placement1_start0 = html_data_result_div_tag_block.replace('&lt;_0_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');        	
         	console.log('HASH_LAYER->0_2->' + row0_placement1_start0);
         }

         if(data.indexOf(number_zero_hash) != -1 && data.indexOf(Error_Zero_Three) != -1)
         {

  row0_placement1_start0 = html_data_result_div_tag_block.replace('&lt;_0_&gt;&lt;_NULLIFIED_ZERO_THREE_&gt;', '');
  row0_placement1_start0 = html_data_result_div_tag_block.replace('&lt;_0_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');       	
         	console.log('HASH_LAYER->0_3->'+row0_placement1_start0);
         }

         if(data.indexOf(number_zero_hash) != -1 && data.indexOf(Error_Zero_Four) != -1)
         {
  row0_placement1_start0 = html_data_result_div_tag_block.replace('&lt;_0_&gt;&lt;_NULLIFIED_ZERO_FOUR_&gt;', '');
  row0_placement1_start0 = html_data_result_div_tag_block.replace('&lt;_0_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');       	
         	console.log('HASH_LAYER->0_4->'+ row0_placement1_start0);
         }

         if(data.indexOf(number_zero_hash) != -1 && data.indexOf(Error_Zero_Five) != -1)
         {
  row0_placement1_start0 = html_data_result_div_tag_block.replace('&lt;_0_&gt;&lt;_NULLIFIED_ZERO_FIVE_&gt;', '');
  row0_placement1_start0 = html_data_result_div_tag_block.replace('&lt;_0_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');      	
         	console.log('HASH_LAYER->0_5->'+ row0_placement1_start0);
         }

         if(data.indexOf(number_zero_hash) != -1 && data.indexOf(Error_Zero_Six) != -1)
         {
  row0_placement1_start0 = html_data_result_div_tag_block.replace('&lt;_0_&gt;&lt;_NULLIFIED_ZERO_SIX_&gt;', '');
  row0_placement1_start0 = html_data_result_div_tag_block.replace('&lt;_0_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');      	
         	console.log('HASH_LAYER->0_6->'+ row0_placement1_start0);
         }

         if(data.indexOf(number_zero_hash) != -1 && data.indexOf(Error_Zero_Seven) != -1)
         {
  row0_placement1_start0 = html_data_result_div_tag_block.replace('&lt;_0_&gt;&lt;_NULLIFIED_ZERO_SEVEN_&gt;', '');
  row0_placement1_start0 = html_data_result_div_tag_block.replace('&lt;_0_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');       	
         	console.log('HASH_LAYER->0_7->'+ row0_placement1_start0);
         }

         if(data.indexOf(number_zero_hash) != -1 && data.indexOf(Error_Zero_Eight) != -1)
         {
  row0_placement1_start0 = html_data_result_div_tag_block.replace('&lt;_0_&gt;&lt;_NULLIFIED_ZERO_EIGHT_&gt;', '');
  row0_placement1_start0 = html_data_result_div_tag_block.replace('&lt;_0_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');      	
         	console.log('HASH_LAYER->0_8->'+ row0_placement1_start0);
         }

         if(data.indexOf(number_zero_hash) != -1 && data.indexOf(Error_Zero_Nine) != -1)
         {
  row0_placement1_start0 = html_data_result_div_tag_block.replace('&lt;_0_&gt;&lt;_NULLIFIED_ZERO_NINE_&gt;', '');
  row0_placement1_start0 = html_data_result_div_tag_block.replace('&lt;_0_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');       	
         	console.log('HASH_LAYER->0_9->'+ row0_placement1_start0);
         }


//////////////////////////////////////////////////////////////////////////////////////////////////////////


         if(data.indexOf(number_one_hash) != -1 && data.indexOf(Error_Zero_One) != -1)
         {

  row0_placement1_start1 = row0_placement1_start0.replace('<br>&lt;_1_&gt;&lt;_NULLIFIED_ZERO_ONE_&gt;', ''); 
  row0_placement1_start1 = row0_placement1_start0.replace('<br>&lt;_1_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');      	
         	console.log('HASH_LAYER->1_1->'+row0_placement1_start1);
         } 

          if(data.indexOf(number_one_hash) != -1 && data.indexOf(Error_Zero_Two) != -1)
         {
  row0_placement1_start1 = row0_placement1_start0.replace('<br>&lt;_1_&gt;&lt;_NULLIFIED_ZERO_TWO_&gt;', '');        
  row0_placement1_start1 = row0_placement1_start0.replace('<br>&lt;_1_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', ''); 	
         	console.log('HASH_LAYER->1_2->'+row0_placement1_start1);
         } 

         if(data.indexOf(number_one_hash) != -1 && data.indexOf(Error_Zero_Three) != -1)
         {
   row0_placement1_start1 = row0_placement1_start0.replace('<br>&lt;_1_&gt;&lt;_NULLIFIED_ZERO_THREE_&gt;', '');
   row0_placement1_start1 = row0_placement1_start0.replace('<br>&lt;_1_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');        	
         	console.log('HASH_LAYER->1_3->'+row0_placement1_start1);
         }

         if(data.indexOf(number_one_hash) != -1 && data.indexOf(Error_Zero_Four) != -1)
         {
   row0_placement1_start1 = row0_placement1_start0.replace('<br>&lt;_1_&gt;&lt;_NULLIFIED_ZERO_FOUR_&gt;', '');
   row0_placement1_start1 = row0_placement1_start0.replace('<br>&lt;_1_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');        	
         	console.log('HASH_LAYER->1_4->'+row0_placement1_start1);
         }

         if(data.indexOf(number_one_hash) != -1 && data.indexOf(Error_Zero_Five) != -1)
         {
   row0_placement1_start1 = row0_placement1_start0.replace('<br>&lt;_1_&gt;&lt;_NULLIFIED_ZERO_FIVE_&gt;', '');
   row0_placement1_start1 = row0_placement1_start0.replace('<br>&lt;_1_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');        	
         	console.log('HASH_LAYER->1_5->'+row0_placement1_start1);
         }

         if(data.indexOf(number_one_hash) != -1 && data.indexOf(Error_Zero_Six) != -1)
         {
    row0_placement1_start1 = row0_placement1_start0.replace('<br>&lt;_1_&gt;&lt;_NULLIFIED_ZERO_SIX_&gt;', '');
    row0_placement1_start1 = row0_placement1_start0.replace('<br>&lt;_1_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');       	
         	console.log('HASH_LAYER->1_6->'+row0_placement1_start1);
         }

         if(data.indexOf(number_one_hash) != -1 && data.indexOf(Error_Zero_Seven) != -1)
         {
   row0_placement1_start1 = row0_placement1_start0.replace('<br>&lt;_1_&gt;&lt;_NULLIFIED_ZERO_SEVEN_&gt;', '');
   row0_placement1_start1 = row0_placement1_start0.replace('<br>&lt;_1_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');  
         	console.log('HASH_LAYER->1_7->'+row0_placement1_start1);
         }

         if(data.indexOf(number_one_hash) != -1 && data.indexOf(Error_Zero_Eight) != -1)
         {
    row0_placement1_start1 = row0_placement1_start0.replace('<br>&lt;_1_&gt;&lt;_NULLIFIED_ZERO_EIGHT_&gt;', '');
    row0_placement1_start1 = row0_placement1_start0.replace('<br>&lt;_1_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');       	
         	console.log('HASH_LAYER->1_8->'+row0_placement1_start1);
         }

         if(data.indexOf(number_one_hash) != -1 && data.indexOf(Error_Zero_Nine) != -1)
         {
    row0_placement1_start1 = row0_placement1_start0.replace('<br>&lt;_1_&gt;&lt;_NULLIFIED_ZERO_NINE_&gt;', '');
    row0_placement1_start1 = row0_placement1_start0.replace('<br>&lt;_1_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');       	
         	console.log('HASH_LAYER->1_9->'+row0_placement1_start1);
         }

////////////////////////////////////////////////////////////////////////////////////////////////////////////


         if(data.indexOf(number_two_hash) != -1 && data.indexOf(Error_Zero_One) != -1)
         {

    row0_placement2_start1 = row0_placement1_start1.replace('<br>&lt;_2_&gt;&lt;_NULLIFIED_ZERO_ONE_&gt;', '');
    row0_placement2_start1 = row0_placement1_start1.replace('<br>&lt;_2_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');      	
         	console.log('HASH_LAYER->2_1->'+row0_placement2_start1);
         }

          if(data.indexOf(number_two_hash) != -1 && data.indexOf(Error_Zero_Two) != -1)
         {

    row0_placement2_start1 = row0_placement1_start1.replace('<br>&lt;_2_&gt;&lt;_NULLIFIED_ZERO_TWO_&gt;', '');      
    row0_placement2_start1 = row0_placement1_start1.replace('<br>&lt;_2_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');	
         	console.log('HASH_LAYER->2_2->'+row0_placement2_start1);
         }

          if(data.indexOf(number_two_hash) != -1 && data.indexOf(Error_Zero_Three) != -1)
         {
    row0_placement2_start1 = row0_placement1_start1.replace('<br>&lt;_2_&gt;&lt;_NULLIFIED_ZERO_THREE_&gt;', '');
    row0_placement2_start1 = row0_placement1_start1.replace('<br>&lt;_2_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');      	
         	console.log('HASH_LAYER->2_3->'+row0_placement2_start1);
         }

          if(data.indexOf(number_two_hash) != -1 && data.indexOf(Error_Zero_Four) != -1)
         {
    row0_placement2_start1 = row0_placement1_start1.replace('<br>&lt;_2_&gt;&lt;_NULLIFIED_ZERO_FOUR_&gt;', '');
    row0_placement2_start1 = row0_placement1_start1.replace('<br>&lt;_2_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');      	
         	console.log('HASH_LAYER->2_4->'+row0_placement2_start1);
         }

          if(data.indexOf(number_two_hash) != -1 && data.indexOf(Error_Zero_Five) != -1)
         {
    row0_placement2_start1 = row0_placement1_start1.replace('<br>&lt;_2_&gt;&lt;_NULLIFIED_ZERO_FIVE_&gt;', '');
    row0_placement2_start1 = row0_placement1_start1.replace('<br>&lt;_2_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');      	
         	console.log('HASH_LAYER->2_5->'+row0_placement2_start1);
         }

          if(data.indexOf(number_two_hash) != -1 && data.indexOf(Error_Zero_Six) != -1)
         {

    row0_placement2_start1 = row0_placement1_start1.replace('<br>&lt;_2_&gt;&lt;_NULLIFIED_ZERO_SIX_&gt;', '');
    row0_placement2_start1 = row0_placement1_start1.replace('<br>&lt;_2_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');      	
         	console.log('HASH_LAYER->2_6->'+row0_placement2_start1);
         }

          if(data.indexOf(number_two_hash) != -1 && data.indexOf(Error_Zero_Seven) != -1)
         {

    row0_placement2_start1 = row0_placement1_start1.replace('<br>&lt;_2_&gt;&lt;_NULLIFIED_ZERO_SEVEN_&gt;', '');
    row0_placement2_start1 = row0_placement1_start1.replace('<br>&lt;_2_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');      	
         	console.log('HASH_LAYER->2_7->'+row0_placement2_start1);
         }

          if(data.indexOf(number_two_hash) != -1 && data.indexOf(Error_Zero_Eight) != -1)
         {

    row0_placement2_start1 = row0_placement1_start1.replace('<br>&lt;_2_&gt;&lt;_NULLIFIED_ZERO_EIGHT_&gt;', '');
    row0_placement2_start1 = row0_placement1_start1.replace('<br>&lt;_2_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');      	
         	console.log('HASH_LAYER->2_8->'+row0_placement2_start1);
         }

          if(data.indexOf(number_two_hash) != -1 && data.indexOf(Error_Zero_Nine) != -1)
         {

    row0_placement2_start1 = row0_placement1_start1.replace('<br>&lt;_2_&gt;&lt;_NULLIFIED_ZERO_NINE_&gt;', '');
    row0_placement2_start1 = row0_placement1_start1.replace('<br>&lt;_2_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');      	
         	console.log('HASH_LAYER->2_9->'+row0_placement2_start1);
         }

////////////////////////////////////////////////////////////////////////////////////////////////



         if(data.indexOf(number_three_hash) != -1 && data.indexOf(Error_Zero_One) != -1)
         {
        row0_placement3_start1 = row0_placement2_start1.replace('<br>&lt;_3_&gt;&lt;_NULLIFIED_ZERO_ONE_&gt;', '');
        row0_placement3_start1 = row0_placement2_start1.replace('<br>&lt;_3_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');
         	console.log('HASH_LAYER->3_1->'+row0_placement3_start1);
         }

         if(data.indexOf(number_three_hash) != -1 && data.indexOf(Error_Zero_Two) != -1)
         {
        row0_placement3_start1 = row0_placement2_start1.replace('<br>&lt;_3_&gt;&lt;_NULLIFIED_ZERO_TWO_&gt;', '');
        row0_placement3_start1 = row0_placement2_start1.replace('<br>&lt;_3_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');
         	console.log('HASH_LAYER->3_2->'+row0_placement3_start1);
         }


         if(data.indexOf(number_three_hash) != -1 && data.indexOf(Error_Zero_Three) != -1)
         {
        row0_placement3_start1 = row0_placement2_start1.replace('<br>&lt;_3_&gt;&lt;_NULLIFIED_ZERO_THREE_&gt;', '');
        row0_placement3_start1 = row0_placement2_start1.replace('<br>&lt;_3_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');
         	console.log('HASH_LAYER->3_3->'+row0_placement3_start1);
         }

         if(data.indexOf(number_three_hash) != -1 && data.indexOf(Error_Zero_Four) != -1)
         {
        row0_placement3_start1 = row0_placement2_start1.replace('<br>&lt;_3_&gt;&lt;_NULLIFIED_ZERO_FOUR_&gt;', '');
        row0_placement3_start1 = row0_placement2_start1.replace('<br>&lt;_3_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');
         	console.log('HASH_LAYER->3_4->'+row0_placement3_start1);
         }

         if(data.indexOf(number_three_hash) != -1 && data.indexOf(Error_Zero_Five) != -1)
         {
        row0_placement3_start1 = row0_placement2_start1.replace('<br>&lt;_3_&gt;&lt;_NULLIFIED_ZERO_FIVE_&gt;', '');
        row0_placement3_start1 = row0_placement2_start1.replace('<br>&lt;_3_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');
         	console.log('HASH_LAYER->3_5->'+row0_placement3_start1);
         }

         if(data.indexOf(number_three_hash) != -1 && data.indexOf(Error_Zero_Six) != -1)
         {
        row0_placement3_start1 = row0_placement2_start1.replace('<br>&lt;_3_&gt;&lt;_NULLIFIED_ZERO_SIX_&gt;', '');
        row0_placement3_start1 = row0_placement2_start1.replace('<br>&lt;_3_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');
         	console.log('HASH_LAYER->3_6->'+row0_placement3_start1);
         }

         if(data.indexOf(number_three_hash) != -1 && data.indexOf(Error_Zero_Seven) != -1)
         {
        row0_placement3_start1 = row0_placement2_start1.replace('<br>&lt;_3_&gt;&lt;_NULLIFIED_ZERO_SEVEN_&gt;', '');
        row0_placement3_start1 = row0_placement2_start1.replace('<br>&lt;_3_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');
         	console.log('HASH_LAYER->3_7->'+row0_placement3_start1);
         }

         if(data.indexOf(number_three_hash) != -1 && data.indexOf(Error_Zero_Eight) != -1)
         {
        row0_placement3_start1 = row0_placement2_start1.replace('<br>&lt;_3_&gt;&lt;_NULLIFIED_ZERO_EIGHT_&gt;', '');
        row0_placement3_start1 = row0_placement2_start1.replace('<br>&lt;_3_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');
         	console.log('HASH_LAYER->3_8->'+row0_placement3_start1);
         }

         if(data.indexOf(number_three_hash) != -1 && data.indexOf(Error_Zero_Nine) != -1)
         {
        row0_placement3_start1 = row0_placement2_start1.replace('<br>&lt;_3_&gt;&lt;_NULLIFIED_ZERO_NINE_&gt;', '');
        row0_placement3_start1 = row0_placement2_start1.replace('<br>&lt;_3_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');
         	console.log('HASH_LAYER->3_9->'+row0_placement3_start1);
         }

///////////////////////////////////////////////////////////////////////////////////////////////////////


         if(data.indexOf(number_four_hash) != -1 && data.indexOf(Error_Zero_One) != -1)
         {

        row0_placement4_start1 = row0_placement3_start1.replace('<br>&lt;_4_&gt;&lt;_NULLIFIED_ZERO_ONE_&gt;', '');
        row0_placement4_start1 = row0_placement3_start1.replace('<br>&lt;_4_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');
         	console.log('HASH_LAYER->4_1->'+row0_placement4_start1);
         }  

         if(data.indexOf(number_four_hash) != -1 && data.indexOf(Error_Zero_Two) != -1)
         {
        row0_placement4_start1 = row0_placement3_start1.replace('<br>&lt;_4_&gt;&lt;_NULLIFIED_ZERO_TWO_&gt;', '');
        row0_placement4_start1 = row0_placement3_start1.replace('<br>&lt;_4_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');	
         	console.log('HASH_LAYER->4_2->'+row0_placement4_start1);
         }

         if(data.indexOf(number_four_hash) != -1 && data.indexOf(Error_Zero_Three) != -1)
         {

        row0_placement4_start1 = row0_placement3_start1.replace('<br>&lt;_4_&gt;&lt;_NULLIFIED_ZERO_THREE_&gt;', '');
        row0_placement4_start1 = row0_placement3_start1.replace('<br>&lt;_4_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');
         	console.log('HASH_LAYER->4_3->'+row0_placement4_start1);
         }

         if(data.indexOf(number_four_hash) != -1 && data.indexOf(Error_Zero_Four) != -1)
         {

        row0_placement4_start1 = row0_placement3_start1.replace('<br>&lt;_4_&gt;&lt;_NULLIFIED_ZERO_FOUR_&gt;', '');
        row0_placement4_start1 = row0_placement3_start1.replace('<br>&lt;_4_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');
         	console.log('HASH_LAYER->4_4->'+row0_placement4_start1);
         }

         if(data.indexOf(number_four_hash) != -1 && data.indexOf(Error_Zero_Five) != -1)
         {

        row0_placement4_start1 = row0_placement3_start1.replace('<br>&lt;_4_&gt;&lt;_NULLIFIED_ZERO_FIVE_&gt;', '');
        row0_placement4_start1 = row0_placement3_start1.replace('<br>&lt;_4_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');
         	console.log('HASH_LAYER->4_5->'+row0_placement4_start1);
         }

         if(data.indexOf(number_four_hash) != -1 && data.indexOf(Error_Zero_Six) != -1)
         {

        row0_placement4_start1 = row0_placement3_start1.replace('<br>&lt;_4_&gt;&lt;_NULLIFIED_ZERO_SIX_&gt;', '');
        row0_placement4_start1 = row0_placement3_start1.replace('<br>&lt;_4_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');
         	console.log('HASH_LAYER->4_6->'+row0_placement4_start1);
         }

         if(data.indexOf(number_four_hash) != -1 && data.indexOf(Error_Zero_Seven) != -1)
         {

        row0_placement4_start1 = row0_placement3_start1.replace('<br>&lt;_4_&gt;&lt;_NULLIFIED_ZERO_SEVEN_&gt;', '');
        row0_placement4_start1 = row0_placement3_start1.replace('<br>&lt;_4_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');	
         	console.log('HASH_LAYER->4_7->'+row0_placement4_start1);
         }

         if(data.indexOf(number_four_hash) != -1 && data.indexOf(Error_Zero_Eight) != -1)
         {

        row0_placement4_start1 = row0_placement3_start1.replace('<br>&lt;_4_&gt;&lt;_NULLIFIED_ZERO_EIGHT_&gt;', '');
        row0_placement4_start1 = row0_placement3_start1.replace('<br>&lt;_4_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', ''); 	
         	console.log('HASH_LAYER->4_8->'+row0_placement4_start1);
         }

         if(data.indexOf(number_four_hash) != -1 && data.indexOf(Error_Zero_Nine) != -1)
         {
        row0_placement4_start1 = row0_placement3_start1.replace('<br>&lt;_4_&gt;&lt;_NULLIFIED_ZERO_NINE_&gt;', '');
        row0_placement4_start1 = row0_placement3_start1.replace('<br>&lt;_4_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', ''); 	
         	console.log('HASH_LAYER->4_9->'+row0_placement4_start1);
         }


///////////////////////////////////////////////////////////////////////////////////////////////////////



         if(data.indexOf(number_five_hash) != -1 && data.indexOf(Error_Zero_One) != -1)
         {

        row0_placement5_start1 = row0_placement4_start1.replace('<br>&lt;_5_&gt;&lt;_NULLIFIED_ZERO_ONE_&gt;', '');
        row0_placement5_start1 = row0_placement4_start1.replace('<br>&lt;_5_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');
         	console.log('HASH_LAYER->5_1->'+row0_placement5_start1);
         }

         if(data.indexOf(number_five_hash) != -1 && data.indexOf(Error_Zero_Two) != -1)
         {

        row0_placement5_start1 = row0_placement4_start1.replace('<br>&lt;_5_&gt;&lt;_NULLIFIED_ZERO_TWO_&gt;', '');
        row0_placement5_start1 = row0_placement4_start1.replace('<br>&lt;_5_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', ''); 	
         	console.log('HASH_LAYER->5_2->'+row0_placement5_start1);
         }

         if(data.indexOf(number_five_hash) != -1 && data.indexOf(Error_Zero_Three) != -1)
         {

        row0_placement5_start1 = row0_placement4_start1.replace('<br>&lt;_5_&gt;&lt;_NULLIFIED_ZERO_THREE_&gt;', '');
        row0_placement5_start1 = row0_placement4_start1.replace('<br>&lt;_5_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', ''); 	
         	console.log('HASH_LAYER->5_3->'+row0_placement5_start1);
         }

         if(data.indexOf(number_five_hash) != -1 && data.indexOf(Error_Zero_Four) != -1)
         {

        row0_placement5_start1 = row0_placement4_start1.replace('<br>&lt;_5_&gt;&lt;_NULLIFIED_ZERO_FOUR_&gt;', '');
        row0_placement5_start1 = row0_placement4_start1.replace('<br>&lt;_5_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', ''); 	
         	console.log('HASH_LAYER->5_4->'+row0_placement5_start1);
         }

         if(data.indexOf(number_five_hash) != -1 && data.indexOf(Error_Zero_Five) != -1)
         {

        row0_placement5_start1 = row0_placement4_start1.replace('<br>&lt;_5_&gt;&lt;_NULLIFIED_ZERO_FIVE_&gt;', '');
        row0_placement5_start1 = row0_placement4_start1.replace('<br>&lt;_5_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', ''); 	
         	console.log('HASH_LAYER->5_5->'+row0_placement5_start1);
         }

         if(data.indexOf(number_five_hash) != -1 && data.indexOf(Error_Zero_Six) != -1)
         {

        row0_placement5_start1 = row0_placement4_start1.replace('<br>&lt;_5_&gt;&lt;_NULLIFIED_ZERO_SIX_&gt;', '');
        row0_placement5_start1 = row0_placement4_start1.replace('<br>&lt;_5_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', ''); 	
         	console.log('HASH_LAYER->5_6->'+row0_placement5_start1);
         }

         if(data.indexOf(number_five_hash) != -1 && data.indexOf(Error_Zero_Seven) != -1)
         {

        row0_placement5_start1 = row0_placement4_start1.replace('<br>&lt;_5_&gt;&lt;_NULLIFIED_ZERO_SEVEN_&gt;', '');
        row0_placement5_start1 = row0_placement4_start1.replace('<br>&lt;_5_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', ''); 	
         	console.log('HASH_LAYER->5_7->'+row0_placement5_start1);
         }

         if(data.indexOf(number_five_hash) != -1 && data.indexOf(Error_Zero_Eight) != -1)
         {

        row0_placement5_start1 = row0_placement4_start1.replace('<br>&lt;_5_&gt;&lt;_NULLIFIED_ZERO_EIGHT_&gt;', '');
        row0_placement5_start1 = row0_placement4_start1.replace('<br>&lt;_5_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', ''); 	
         	console.log('HASH_LAYER->5_8->'+row0_placement5_start1);
         }

         if(data.indexOf(number_five_hash) != -1 && data.indexOf(Error_Zero_Nine) != -1)
         {

        row0_placement5_start1 = row0_placement4_start1.replace('<br>&lt;_5_&gt;&lt;_NULLIFIED_ZERO_NINE_&gt;', '');
        row0_placement5_start1 = row0_placement4_start1.replace('<br>&lt;_5_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', ''); 	
         	console.log('HASH_LAYER->5_9->'+row0_placement5_start1);
         }
///////////////////////////////////////////////////////////////////////////////////////////////////////////         

         if(data.indexOf(number_six_hash) != -1 && data.indexOf(Error_Zero_One) != -1)
         {

        row0_placement6_start1 = row0_placement5_start1.replace('<br>&lt;_6_&gt;&lt;_NULLIFIED_ZERO_ONE_&gt;', '');
        row0_placement6_start1 = row0_placement5_start1.replace('<br>&lt;_6_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', ''); 	
         	console.log('HASH_LAYER->6_1->'+row0_placement6_start1);
         } 

         if(data.indexOf(number_six_hash) != -1 && data.indexOf(Error_Zero_Two) != -1)
         {

        row0_placement6_start1 = row0_placement5_start1.replace('<br>&lt;_6_&gt;&lt;_NULLIFIED_ZERO_TWO_&gt;', '');
        row0_placement6_start1 = row0_placement5_start1.replace('<br>&lt;_6_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', ''); /*
HASH_LAYER->6_2->&lt;_0_&gt;&lt;_NULLIFIED_ZERO_ONE_&gt;11925276821<br>&lt;_6_&gt;&lt;_NULLIFIED_ZERO_TWO_&gt;2<br>

        */	
        row0_placement6_start1 = row0_placement5_start1.replace('&lt;_0_&gt;&lt;_NULLIFIED_ZERO_ONE_&gt;', '0');


        /*
HASH_LAYER->6_2->011925276821<br>&lt;_6_&gt;&lt;_NULLIFIED_ZERO_TWO_&gt;2<br>
        */

        row0_placement6_start1 = row0_placement6_start1.replace('<br>&lt;_6_&gt;&lt;_NULLIFIED_ZERO_TWO_&gt;', '0');

        row0_placement6_finish2 = row0_placement6_start1.replace('<br>', '');
            console.log(row0_placement6_finish2);




            /*
HASH_LAYER->6_2->2749505152<br>&lt;_5_&gt;&lt;_NULLIFIED_ZERO_TWO_&gt;202<br>
HASH_LAYER->6_2->2749505152<br>&lt;_5_&gt;&lt;_NULLIFIED_ZERO_TWO_&gt;202<br>

            */


       row0_placement6_finish2 = row0_placement6_finish2.replace('&lt;_5_&gt;&lt;_NULLIFIED_ZERO_TWO_&gt;', '0');
       row0_placement6_finish2 = row0_placement6_finish2.replace('<br>', '');
            console.log(row0_placement6_finish2);
         	console.log('HASH_LAYER->6_2->'+row0_placement6_start1);
         }

         if(data.indexOf(number_six_hash) != -1 && data.indexOf(Error_Zero_Three) != -1)
         {

        row0_placement6_start1 = row0_placement5_start1.replace('<br>&lt;_6_&gt;&lt;_NULLIFIED_ZERO_THREE_&gt;', '');
        row0_placement6_start1 = row0_placement5_start1.replace('<br>&lt;_6_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', ''); 

        /*
101214246020<br>&lt;_6_&gt;&lt;_NULLIFIED_ZERO_THREE_&gt;3<br>
        */	
         row0_placement6_start1 = row0_placement6_start1.replace('<br>&lt;_6_&gt;&lt;_NULLIFIED_ZERO_THREE_&gt;', '0');
         row0_placement6_finish2 = row0_placement6_start1.replace('<br>', '');

        /* HASH_LAYER->6_3->1724345665<br>&lt;_5_&gt;&lt;_NULLIFIED_ZERO_THREE_&gt;3<br>&lt;_6_&gt;&lt;_NULLIFIED_ZERO_TWO_&gt;2<br>*/
row0_placement6_finish2 = row0_placement6_finish2.replace('&lt;_5_&gt;&lt;_NULLIFIED_ZERO_THREE_&gt;', '0');
row0_placement6_finish2 = row0_placement6_finish2.replace('<br>&lt;_6_&gt;&lt;_NULLIFIED_ZERO_TWO_&gt;', '0');
row0_placement6_finish2 = row0_placement6_finish2.replace('<br>', '');
         console.log(row0_placement6_finish2);
         	console.log('HASH_LAYER->6_3->'+row0_placement6_start1);
         }

         if(data.indexOf(number_six_hash) != -1 && data.indexOf(Error_Zero_Four) != -1)
         {

        row0_placement6_start1 = row0_placement5_start1.replace('<br>&lt;_6_&gt;&lt;_NULLIFIED_ZERO_FOUR_&gt;', '');
        row0_placement6_start1 = row0_placement5_start1.replace('<br>&lt;_6_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', ''); 



        /*
HASH_LAYER->6_4->2930414864<br>&lt;_5_&gt;&lt;_NULLIFIED_ZERO_ONE_&gt;1<br>&lt;_6_&gt;&lt;_NULLIFIED_ZERO_FOUR_&gt;4<br>

        */

        row0_placement6_start1 = row0_placement6_start1.replace('<br>&lt;_5_&gt;&lt;_NULLIFIED_ZERO_ONE_&gt;', '0');
        row0_placement6_start1 = row0_placement6_start1.replace('<br>&lt;_6_&gt;&lt;_NULLIFIED_ZERO_FOUR_&gt;', '0');


        row0_placement6_finish2 = row0_placement6_start1.replace('<br>', '');
        /*
1824313455<br>&lt;_5_&gt;&lt;_NULLIFIED_ZERO_FOUR_&gt;404<br>
        */

        row0_placement6_finish2 = row0_placement6_finish2.replace('&lt;_5_&gt;&lt;_NULLIFIED_ZERO_FOUR_&gt;', '0');
        row0_placement6_finish2 = row0_placement6_finish2.replace('<br>', '');
            console.log(row0_placement6_finish2);

         	console.log('HASH_LAYER->6_4->'+row0_placement6_start1);
         }

         if(data.indexOf(number_six_hash) != -1 && data.indexOf(Error_Zero_Five) != -1)
         {

        row0_placement6_start1 = row0_placement5_start1.replace('<br>&lt;_6_&gt;&lt;_NULLIFIED_ZERO_FIVE_&gt;', '');
        row0_placement6_start1 = row0_placement5_start1.replace('<br>&lt;_6_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');

        /*
HASH_LAYER->6_5->213142495923<br>&lt;_6_&gt;&lt;_NULLIFIED_ZERO_FIVE_&gt;5<br>

        */ 


        row0_placement6_start1 = row0_placement5_start1.replace('<br>&lt;_6_&gt;&lt;_NULLIFIED_ZERO_FIVE_&gt;', '0');

        row0_placement6_finish2 = row0_placement6_start1.replace('<br>', '');
            console.log(row0_placement6_finish2);	
         	console.log('HASH_LAYER->6_5->'+row0_placement6_start1);
         }

         if(data.indexOf(number_six_hash) != -1 && data.indexOf(Error_Zero_Six) != -1)
         {

        row0_placement6_start1 = row0_placement5_start1.replace('<br>&lt;_6_&gt;&lt;_NULLIFIED_ZERO_SIX_&gt;', '');
        row0_placement6_start1 = row0_placement5_start1.replace('<br>&lt;_6_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', '');


        /*
HASH_LAYER->6_6->&lt;_0_&gt;&lt;_NULLIFIED_ZERO_FOUR_&gt;4<br>&lt;_1_&gt;&lt;_NULLIFIED_ZERO_SIX_&gt;614203213<br>&lt;_6_&gt;&lt;_NULLIFIED_ZERO_TWO_&gt;2<br>

        */ 
        row0_placement6_start1 = row0_placement6_start1.replace('&lt;_0_&gt;&lt;_NULLIFIED_ZERO_FOUR_&gt;', '0');
        row0_placement6_start1 = row0_placement6_start1.replace('<br>&lt;_1_&gt;&lt;_NULLIFIED_ZERO_SIX_&gt;', '0');
        row0_placement6_start1 = row0_placement6_start1.replace('<br>&lt;_6_&gt;&lt;_NULLIFIED_ZERO_TWO_&gt;', '0');

        row0_placement6_finish2 = row0_placement6_start1.replace('<br>', '');
            	


/*&lt;_0_&gt;&lt;_NULLIFIED_ZERO_SIX_&gt;6102135462302<br>*/
row0_placement6_finish2 = row0_placement6_finish2.replace('&lt;_0_&gt;&lt;_NULLIFIED_ZERO_SIX_&gt;', '0');
row0_placement6_finish2 = row0_placement6_finish2.replace('<br>', '');



/*
HASH_LAYER->6_6->1520323752<br>&lt;_5_&gt;&lt;_NULLIFIED_ZERO_SIX_&gt;6<br>&lt;_6_&gt;&lt;_NULLIFIED_ZERO_THREE_&gt;3<br>

HASH_LAYER->6_6->1520323752<br>&lt;_5_&gt;&lt;_NULLIFIED_ZERO_SIX_&gt;6<br>&lt;_6_&gt;&lt;_NULLIFIED_ZERO_THREE_&gt;3<br>
*/

row0_placement6_finish2 = row0_placement6_finish2.replace('&lt;_5_&gt;&lt;_NULLIFIED_ZERO_SIX_&gt;', '0');
row0_placement6_finish2 = row0_placement6_finish2.replace('&lt;_6_&gt;&lt;_NULLIFIED_ZERO_THREE_&gt;', '0');
row0_placement6_finish2 = row0_placement6_finish2.replace('<br>', '');
console.log(row0_placement6_finish2);

         	console.log('HASH_LAYER->6_6->'+row0_placement6_start1);
         }

         if(data.indexOf(number_six_hash) != -1 && data.indexOf(Error_Zero_Seven) != -1)
         {

        row0_placement6_start1 = row0_placement5_start1.replace('<br>&lt;_6_&gt;&lt;_NULLIFIED_ZERO_SEVEN_&gt;', '');
        row0_placement6_start1 = row0_placement5_start1.replace('<br>&lt;_6_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', ''); 	
         	console.log('HASH_LAYER->6_7->'+row0_placement6_start1);
         }

         if(data.indexOf(number_six_hash) != -1 && data.indexOf(Error_Zero_Eight) != -1)
         {

        row0_placement6_start1 = row0_placement5_start1.replace('<br>&lt;_6_&gt;&lt;_NULLIFIED_ZERO_EIGHT_&gt;', '');
        row0_placement6_start1 = row0_placement5_start1.replace('<br>&lt;_6_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', ''); 


        /*
HASH_LAYER->6_8->&lt;_0_&gt;&lt;_NULLIFIED_ZERO_TWO_&gt;2<br>&lt;_1_&gt;&lt;_NULLIFIED_ZERO_EIGHT_&gt;814246926<br>&lt;_6_&gt;&lt;_NULLIFIED_ZERO_TWO_&gt;2<br>

        */	


        row0_placement6_start1 = row0_placement6_start1.replace('&lt;_0_&gt;&lt;_NULLIFIED_ZERO_TWO_&gt;', '0');
       row0_placement6_start1 = row0_placement6_start1.replace('<br>&lt;_1_&gt;&lt;_NULLIFIED_ZERO_EIGHT_&gt;', '0');
       row0_placement6_start1 = row0_placement6_start1.replace('<br>&lt;_6_&gt;&lt;_NULLIFIED_ZERO_TWO_&gt;', '0');
         row0_placement6_finish2 = row0_placement6_start1.replace('<br>', '');
            console.log(row0_placement6_finish2);
         	console.log('HASH_LAYER->6_8->'+row0_placement6_start1);
         }

         if(data.indexOf(number_six_hash) != -1 && data.indexOf(Error_Zero_Nine) != -1)
         {

        row0_placement6_start1 = row0_placement5_start1.replace('<br>&lt;_6_&gt;&lt;_NULLIFIED_ZERO_NINE_&gt;', '');
        row0_placement6_start1 = row0_placement5_start1.replace('<br>&lt;_6_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;', ''); 	
         	console.log('HASH_LAYER->6_9->'+row0_placement6_start1);
         }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
         if(data.indexOf(number_seven_hash) != -1 && data.indexOf(Error_Zero_One) != -1)
         {
         	console.log('HASH_LAYER 7 1');
         } 


         if(data.indexOf(number_seven_hash) != -1 && data.indexOf(Error_Zero_Two) != -1)
         {
         	//console.log('HASH_LAYER 7 2');
         } 

         if(data.indexOf(number_seven_hash) != -1 && data.indexOf(Error_Zero_Three) != -1)
         {
         	//console.log('HASH_LAYER 7 3');
         } 

         if(data.indexOf(number_seven_hash) != -1 && data.indexOf(Error_Zero_Four) != -1)
         {
         	//console.log('HASH_LAYER 7 4');
         } 


         if(data.indexOf(number_seven_hash) != -1 && data.indexOf(Error_Zero_Five) != -1)
         {
         	//console.log('HASH_LAYER 7 5');
         } 

         if(data.indexOf(number_seven_hash) != -1 && data.indexOf(Error_Zero_Six) != -1)
         {
         	//console.log('HASH_LAYER 7 6');
         } 

         if(data.indexOf(number_seven_hash) != -1 && data.indexOf(Error_Zero_Seven) != -1)
         {
         	//console.log('HASH_LAYER 7 7');
         } 

         if(data.indexOf(number_seven_hash) != -1 && data.indexOf(Error_Zero_Eight) != -1)
         {
         	//console.log('HASH_LAYER 7 8');
         } 

         if(data.indexOf(number_seven_hash) != -1 && data.indexOf(Error_Zero_Nine) != -1)
         {
         	//console.log('HASH_LAYER 7 9');
         } 
//////////////////////////////////////////////////////////////////////////////////////////////////         

         if(data.indexOf(number_seven_hash) != -1 && data.indexOf(Error_Zero_One) != -1)
         {
         	//console.log('HASH_LAYER 7 1');
         } 

         if(data.indexOf(number_seven_hash) != -1 && data.indexOf(Error_Zero_Two) != -1)
         {
         	//console.log('HASH_LAYER 7 2');
         }

         if(data.indexOf(number_seven_hash) != -1 && data.indexOf(Error_Zero_Three) != -1)
         {
         	//console.log('HASH_LAYER 7 3');
         }

         if(data.indexOf(number_seven_hash) != -1 && data.indexOf(Error_Zero_Four) != -1)
         {
         	//console.log('HASH_LAYER 7 4');
         }

         if(data.indexOf(number_seven_hash) != -1 && data.indexOf(Error_Zero_Five) != -1)
         {
         	//console.log('HASH_LAYER 7 5');
         }

         if(data.indexOf(number_seven_hash) != -1 && data.indexOf(Error_Zero_Six) != -1)
         {
         	//console.log('HASH_LAYER 7 6');
         }

         if(data.indexOf(number_seven_hash) != -1 && data.indexOf(Error_Zero_Seven) != -1)
         {
         	//console.log('HASH_LAYER 7 7');
         }

         if(data.indexOf(number_seven_hash) != -1 && data.indexOf(Error_Zero_Eight) != -1)
         {
         	//console.log('HASH_LAYER 7 8');
         }

         if(data.indexOf(number_seven_hash) != -1 && data.indexOf(Error_Zero_Nine) != -1)
         {
         	//console.log('HASH_LAYER 7 9');
         }
//////////////////////////////////////////////////////////////////////////////////////////////////////
         
         if(data.indexOf(number_eight_hash) != -1 && data.indexOf(Error_Zero_One) != -1)
         {
         	//console.log('HASH_LAYER 8 1');
         } 

         if(data.indexOf(number_eight_hash) != -1 && data.indexOf(Error_Zero_Two) != -1)
         {
         	//console.log('HASH_LAYER 8 2');
         }

         if(data.indexOf(number_eight_hash) != -1 && data.indexOf(Error_Zero_Three) != -1)
         {
         	//console.log('HASH_LAYER 8 3');
         }

         if(data.indexOf(number_eight_hash) != -1 && data.indexOf(Error_Zero_Four) != -1)
         {
         	//console.log('HASH_LAYER 8 4');
         }

         if(data.indexOf(number_eight_hash) != -1 && data.indexOf(Error_Zero_Five) != -1)
         {
         	//console.log('HASH_LAYER 8 5');
         }

         if(data.indexOf(number_eight_hash) != -1 && data.indexOf(Error_Zero_Six) != -1)
         {
         	//console.log('HASH_LAYER 8 6');
         }

         if(data.indexOf(number_eight_hash) != -1 && data.indexOf(Error_Zero_Seven) != -1)
         {
         	//console.log('HASH_LAYER 8 7');
         }

         if(data.indexOf(number_eight_hash) != -1 && data.indexOf(Error_Zero_Eight) != -1)
         {
         	//console.log('HASH_LAYER 8 8');
         }

         if(data.indexOf(number_eight_hash) != -1 && data.indexOf(Error_Zero_Nine) != -1)
         {
         	//console.log('HASH_LAYER 8 9');
         }
         
//////////////////////////////////////////////////////////////////////////////////////////////////////////
        
         if(data.indexOf(number_nine_hash) != -1 && data.indexOf(Error_Zero_One) != -1)
         {
         	//console.log('HASH_LAYER 9 1');
         } 

         if(data.indexOf(number_nine_hash) != -1 && data.indexOf(Error_Zero_Two) != -1)
         {
         	//console.log('HASH_LAYER 9 2');
         } 

         if(data.indexOf(number_nine_hash) != -1 && data.indexOf(Error_Zero_Three) != -1)
         {
         	//console.log('HASH_LAYER 9 3');
         } 

         if(data.indexOf(number_nine_hash) != -1 && data.indexOf(Error_Zero_Four) != -1)
         {
         	//console.log('HASH_LAYER 9 4');
         } 

         if(data.indexOf(number_nine_hash) != -1 && data.indexOf(Error_Zero_Five) != -1)
         {
         	//console.log('HASH_LAYER 9 5');
         } 
             
         if(data.indexOf(number_nine_hash) != -1 && data.indexOf(Error_Zero_Six) != -1)
         {
         	//console.log('HASH_LAYER 9 6');
         } 

         if(data.indexOf(number_nine_hash) != -1 && data.indexOf(Error_Zero_Seven) != -1)
         {
         	//console.log('HASH_LAYER 9 7');
         } 

         if(data.indexOf(number_nine_hash) != -1 && data.indexOf(Error_Zero_Eight) != -1)
         {
         	//console.log('HASH_LAYER 9 8');
         } 

         if(data.indexOf(number_nine_hash) != -1 && data.indexOf(Error_Zero_Nine) != -1)
         {
         	//console.log('HASH_LAYER 9 9');
         } 


 //////////////////////////////////////////////////////////////////////////////////////////////////////


         if(data.indexOf(number_ten_hash) != -1 && data.indexOf(Error_Zero_One) != -1)
         {
         	//console.log('HASH_LAYER 10  1');
         } 

         if(data.indexOf(number_ten_hash) != -1 && data.indexOf(Error_Zero_Two) != -1)
         {
         	//console.log('HASH_LAYER 10  2');
         } 

         if(data.indexOf(number_ten_hash) != -1 && data.indexOf(Error_Zero_Three) != -1)
         {
         	//console.log('HASH_LAYER 10  3');
         } 

         if(data.indexOf(number_ten_hash) != -1 && data.indexOf(Error_Zero_Four) != -1)
         {
         	//console.log('HASH_LAYER 10  4');
         } 
          

          if(data.indexOf(number_ten_hash) != -1 && data.indexOf(Error_Zero_Five) != -1)
         {
         	//console.log('HASH_LAYER 10  5');
         } 

         if(data.indexOf(number_ten_hash) != -1 && data.indexOf(Error_Zero_Six) != -1)
         {
         	//console.log('HASH_LAYER 10  6');
         } 

         if(data.indexOf(number_ten_hash) != -1 && data.indexOf(Error_Zero_Seven) != -1)
         {
         	//console.log('HASH_LAYER 10  7');
         } 

         if(data.indexOf(number_ten_hash) != -1 && data.indexOf(Error_Zero_Eight) != -1)
         {
         	//console.log('HASH_LAYER 10  8');
         } 


         if(data.indexOf(number_ten_hash) != -1 && data.indexOf(Error_Zero_Nine) != -1)
         {
         	//console.log('HASH_LAYER 10  9');
         } 

/////////////////////////////////////////////////////////////////////////////////////////////////////

            

         if(data.indexOf(number_eleven_hash) != -1 && data.indexOf(Error_Zero_One) != -1)
         {
         	//console.log('HASH_LAYER 11  1');
         }  


         if(data.indexOf(number_eleven_hash) != -1 && data.indexOf(Error_Zero_Two) != -1)
         {
         	//console.log('HASH_LAYER 11  2');
         }  

         if(data.indexOf(number_eleven_hash) != -1 && data.indexOf(Error_Zero_Three) != -1)
         {
         	//console.log('HASH_LAYER 11  3');
         } 

         if(data.indexOf(number_eleven_hash) != -1 && data.indexOf(Error_Zero_Four) != -1)
         {
         	//console.log('HASH_LAYER 11  4');
         } 


         if(data.indexOf(number_eleven_hash) != -1 && data.indexOf(Error_Zero_Five) != -1)
         {
         	//console.log('HASH_LAYER 11  5');
         } 

         if(data.indexOf(number_eleven_hash) != -1 && data.indexOf(Error_Zero_Six) != -1)
         {
         	//console.log('HASH_LAYER 11  6');
         } 

         if(data.indexOf(number_eleven_hash) != -1 && data.indexOf(Error_Zero_Seven) != -1)
         {
         	//console.log('HASH_LAYER 11  7');
         } 

         if(data.indexOf(number_eleven_hash) != -1 && data.indexOf(Error_Zero_Eight) != -1)
         {
         	//console.log('HASH_LAYER 11  8');
         } 

         if(data.indexOf(number_eleven_hash) != -1 && data.indexOf(Error_Zero_Nine) != -1)
         {
         	//console.log('HASH_LAYER 11  9');
         } 
////////////////////////////////////////////////////////////////////////////////////////////


         if(data.indexOf(number_twelve_hash) != -1 && data.indexOf(Error_Zero_One) != -1)
         {
         	//console.log('HASH_LAYER 12  1');
         } 


         if(data.indexOf(number_twelve_hash) != -1 && data.indexOf(Error_Zero_Two) != -1)
         {
         	//console.log('HASH_LAYER 12  2');
         } 

         if(data.indexOf(number_twelve_hash) != -1 && data.indexOf(Error_Zero_Three) != -1)
         {
         	//console.log('HASH_LAYER 12  3');
         } 

         if(data.indexOf(number_twelve_hash) != -1 && data.indexOf(Error_Zero_Four) != -1)
         {
         	//console.log('HASH_LAYER 12  4');
         } 

         if(data.indexOf(number_twelve_hash) != -1 && data.indexOf(Error_Zero_Five) != -1)
         {
         	//console.log('HASH_LAYER 12  5');
         } 

         if(data.indexOf(number_twelve_hash) != -1 && data.indexOf(Error_Zero_Six) != -1)
         {
         	//console.log('HASH_LAYER 12  6');
         } 

         if(data.indexOf(number_twelve_hash) != -1 && data.indexOf(Error_Zero_Seven) != -1)
         {
         	//console.log('HASH_LAYER 12  7');
         } 

         if(data.indexOf(number_twelve_hash) != -1 && data.indexOf(Error_Zero_Eight) != -1)
         {
         	//console.log('HASH_LAYER 12  8');
         } 

         if(data.indexOf(number_twelve_hash) != -1 && data.indexOf(Error_Zero_Nine) != -1)
         {
         	//console.log('HASH_LAYER 12  9');
         } 
///////////////////////////////////////////////////////////////////////////////////////////////////


         if(data.indexOf(number_thirteen_hash) != -1 && data.indexOf(Error_Zero_One) != -1)
         {
         	//console.log('HASH_LAYER 13  1');
         }

         if(data.indexOf(number_thirteen_hash) != -1 && data.indexOf(Error_Zero_Two) != -1)
         {
         	//console.log('HASH_LAYER 13  2');
         }

         if(data.indexOf(number_thirteen_hash) != -1 && data.indexOf(Error_Zero_Three) != -1)
         {
         	//console.log('HASH_LAYER 13  3');
         }

         if(data.indexOf(number_thirteen_hash) != -1 && data.indexOf(Error_Zero_Four) != -1)
         {
         	//console.log('HASH_LAYER 13  4');
         }

         if(data.indexOf(number_thirteen_hash) != -1 && data.indexOf(Error_Zero_Five) != -1)
         {
         	//console.log('HASH_LAYER 13  5');
         }

         if(data.indexOf(number_thirteen_hash) != -1 && data.indexOf(Error_Zero_Six) != -1)
         {
         	//console.log('HASH_LAYER 13  6');
         }

         if(data.indexOf(number_thirteen_hash) != -1 && data.indexOf(Error_Zero_Seven) != -1)
         {
         	//console.log('HASH_LAYER 13  7');
         }

         if(data.indexOf(number_thirteen_hash) != -1 && data.indexOf(Error_Zero_Eight) != -1)
         {
         	//console.log('HASH_LAYER 13  8');
         }

         if(data.indexOf(number_thirteen_hash) != -1 && data.indexOf(Error_Zero_Nine) != -1)
         {
         	//console.log('HASH_LAYER 13  9');
         }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////




/*

HASH_LAYER->6_2->&lt;_0_&gt;&lt;_NULLIFIED_ZERO_ONE_&gt;11925276821<br>&lt;_6_&gt;&lt;_NULLIFIED_ZERO_TWO_&gt;2<br>

*/




         

            

 
 
 
 
 
 
 
 



/*
&lt;_NULLIFIED_ZERO_ONE_&gt;1<br>&lt;_1_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;19<br>&lt;_2_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;25<br>&lt;_3_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;27<br>&lt;_4_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;68<br>&lt;_5_&gt;&lt;_LARGE_KEYCODE_NUMBER_&gt;21<br>&lt;_NULLIFIED_ZERO_TWO_&gt;2<br>*/

////console.log('DIGETS: '+ html_data_result_div_tag_block);
var row0_placement1 = 0;
var row0_placement2 = 0;
var row0_placement3 = 0;
var row0_placement4 = 0;
var row0_placement5 = 0;
var row0_placement6 = 0;
var row0_placement7 = 0;
var row0_placement8 = 0;
var row0_placement9 = 0;
var row0_placement10 = 0;
var row0_placement11 = 0;
var row0_placement12 = 0;
var row0_placement13 = 0;
var row0_placement14 = 0;


try{


 row0_placement1 = row0_placement6_finish2.trim().charAt(0);
 row0_placement2 = row0_placement6_finish2.trim().charAt(1);
 row0_placement3 = row0_placement6_finish2.trim().charAt(2);
 row0_placement4 = row0_placement6_finish2.trim().charAt(3);
 row0_placement5 = row0_placement6_finish2.trim().charAt(4);
 row0_placement6 = row0_placement6_finish2.trim().charAt(5);
 row0_placement7 = row0_placement6_finish2.trim().charAt(6);
 row0_placement8 = row0_placement6_finish2.trim().charAt(7);
 row0_placement9 = row0_placement6_finish2.trim().charAt(8);
 row0_placement10 = row0_placement6_finish2.trim().charAt(9);
 row0_placement11 = row0_placement6_finish2.trim().charAt(10);
 row0_placement12 = row0_placement6_finish2.trim().charAt(11);
 row0_placement13 = row0_placement6_finish2.trim().charAt(12);
 row0_placement14 = row0_placement6_finish2.trim().charAt(13);
	
}
catch(e)
{

}	

	$("#row1_number_placement1").html(row0_placement1);
    $("#row1_number_placement2").html(row0_placement2);
    $("#row1_number_placement3").html(row0_placement3);
    $("#row1_number_placement4").html(row0_placement4);
    $("#row1_number_placement5").html(row0_placement5);
    $("#row1_number_placement6").html(row0_placement6);
    $("#row1_number_placement7").html(row0_placement7);
    $("#row1_number_placement8").html(row0_placement8);
    $("#row1_number_placement9").html(row0_placement9);
    $("#row1_number_placement10").html(row0_placement10);
    $("#row1_number_placement11").html(row0_placement11);
    $("#row1_number_placement12").html(row0_placement12);
    $("#row1_number_placement13").html(row0_placement13);
    $("#row1_number_placement14").html(row0_placement14);


    if(Called_Ticket_One == 1)
    {


//console.log("I HAVE CALLED TICKET ONE");
Called_Ticket_One = 2;

$('#ticket1_row1_placement1').html(row0_placement1);
$('#ticket1_row1_placement2').html(row0_placement2);
$('#ticket1_row1_placement3').html(row0_placement3);
$('#ticket1_row1_placement4').html(row0_placement4);
$('#ticket1_row1_placement5').html(row0_placement5);
$('#ticket1_row1_placement6').html(row0_placement6);
$('#ticket1_row1_placement7').html(row0_placement7);
$('#ticket1_row1_placement8').html(row0_placement8);
$('#ticket1_row1_placement9').html(row0_placement9);
$('#ticket1_row1_placement10').html(row0_placement10);
$('#ticket1_row1_placement11').html(row0_placement11);
$('#ticket1_row1_placement12').html(row0_placement12);
$('#ticket1_row1_placement13').html(row0_placement13);
$('#ticket1_row1_placement14').html(row0_placement14);
    }
    if(Called_Ticket_Two == 1)
    {
    	//console.log("I HAVE CALLED TICKET TWO");
    	Called_Ticket_Two = 2;
$('#ticket2_row2_placement1').html(row0_placement1);
$('#ticket2_row2_placement2').html(row0_placement2);
$('#ticket2_row2_placement3').html(row0_placement3);
$('#ticket2_row2_placement4').html(row0_placement4);
$('#ticket2_row2_placement5').html(row0_placement5);
$('#ticket2_row2_placement6').html(row0_placement6);
$('#ticket2_row2_placement7').html(row0_placement7);
$('#ticket2_row2_placement8').html(row0_placement8);
$('#ticket2_row2_placement9').html(row0_placement9);
$('#ticket2_row2_placement10').html(row0_placement10);
$('#ticket2_row2_placement11').html(row0_placement11);
$('#ticket2_row2_placement12').html(row0_placement12);
$('#ticket2_row2_placement13').html(row0_placement13);
$('#ticket2_row2_placement14').html(row0_placement14);
    }
    if(Called_Ticket_Three == 1)
    {
    	//console.log("I HAVE CALLED TICKET THREE");
Called_Ticket_Three = 2;
$('#ticket3_row3_placement1').html(row0_placement1);
$('#ticket3_row3_placement2').html(row0_placement2);
$('#ticket3_row3_placement3').html(row0_placement3);
$('#ticket3_row3_placement4').html(row0_placement4);
$('#ticket3_row3_placement5').html(row0_placement5);
$('#ticket3_row3_placement6').html(row0_placement6);
$('#ticket3_row3_placement7').html(row0_placement7);
$('#ticket3_row3_placement8').html(row0_placement8);
$('#ticket3_row3_placement9').html(row0_placement9);
$('#ticket3_row3_placement10').html(row0_placement10);
$('#ticket3_row3_placement11').html(row0_placement11);
$('#ticket3_row3_placement12').html(row0_placement12);
$('#ticket3_row3_placement13').html(row0_placement13);
$('#ticket3_row3_placement14').html(row0_placement14);
    }
    if(Called_Ticket_Four == 1)
    {
    	//console.log("I HAVE CALLED TICKET FOUR");
    	Called_Ticket_Four = 2;
$('#ticket4_row4_placement1').html(row0_placement1);
$('#ticket4_row4_placement2').html(row0_placement2);
$('#ticket4_row4_placement3').html(row0_placement3);
$('#ticket4_row4_placement4').html(row0_placement4);
$('#ticket4_row4_placement5').html(row0_placement5);
$('#ticket4_row4_placement6').html(row0_placement6);
$('#ticket4_row4_placement7').html(row0_placement7);
$('#ticket4_row4_placement8').html(row0_placement8);
$('#ticket4_row4_placement9').html(row0_placement9);
$('#ticket4_row4_placement10').html(row0_placement10);
$('#ticket4_row4_placement11').html(row0_placement11);
$('#ticket4_row4_placement12').html(row0_placement12);
$('#ticket4_row4_placement13').html(row0_placement13);
$('#ticket4_row4_placement14').html(row0_placement14);
    }
    if(Called_Ticket_Five == 1)
    {
    	//console.log("I HAVE CALLED TICKET FIVE");
Called_Ticket_Five = 2;
$('#ticket5_row5_placement1').html(row0_placement1);
$('#ticket5_row5_placement2').html(row0_placement2);
$('#ticket5_row5_placement3').html(row0_placement3);
$('#ticket5_row5_placement4').html(row0_placement4);
$('#ticket5_row5_placement5').html(row0_placement5);
$('#ticket5_row5_placement6').html(row0_placement6);
$('#ticket5_row5_placement7').html(row0_placement7);
$('#ticket5_row5_placement8').html(row0_placement8);
$('#ticket5_row5_placement9').html(row0_placement9);
$('#ticket5_row5_placement10').html(row0_placement10);
$('#ticket5_row5_placement11').html(row0_placement11);
$('#ticket5_row5_placement12').html(row0_placement12);
$('#ticket5_row5_placement13').html(row0_placement13);
$('#ticket5_row5_placement14').html(row0_placement14);
    }
    if(Called_Ticket_Six == 1)
    {
    	//console.log("I HAVE CALLED TICKET SIX");
Called_Ticket_Six = 2;
$('#ticket6_row6_placement1').html(row0_placement1);
$('#ticket6_row6_placement2').html(row0_placement2);
$('#ticket6_row6_placement3').html(row0_placement3);
$('#ticket6_row6_placement4').html(row0_placement4);
$('#ticket6_row6_placement5').html(row0_placement5);
$('#ticket6_row6_placement6').html(row0_placement6);
$('#ticket6_row6_placement7').html(row0_placement7);
$('#ticket6_row6_placement8').html(row0_placement8);
$('#ticket6_row6_placement9').html(row0_placement9);
$('#ticket6_row6_placement10').html(row0_placement10);
$('#ticket6_row6_placement11').html(row0_placement11);
$('#ticket6_row6_placement12').html(row0_placement12);
$('#ticket6_row6_placement13').html(row0_placement13);
$('#ticket6_row6_placement14').html(row0_placement14);
    }

    $("#row1_number_placement1").css('background-color','purple');
    $("#row1_number_placement2").css('background-color','purple');
    $("#row1_number_placement3").css('background-color','purple');
    $("#row1_number_placement4").css('background-color','purple');
    $("#row1_number_placement5").css('background-color','purple');
    $("#row1_number_placement6").css('background-color','purple');
    $("#row1_number_placement7").css('background-color','purple');
    $("#row1_number_placement8").css('background-color','purple');
    $("#row1_number_placement9").css('background-color','purple');
    $("#row1_number_placement10").css('background-color','purple');
    $("#row1_number_placement11").css('background-color','purple');
    $("#row1_number_placement12").css('background-color','purple');
    $("#row1_number_placement13").css('background-color','purple');
    $("#row1_number_placement14").css('background-color','purple');
    
    $("#row1_winning_placement1").html(row0_placement1+row0_placement2);
    $("#row1_winning_placement2").html(row0_placement3+row0_placement4);
    $("#row1_winning_placement3").html(row0_placement5+row0_placement6);
    $("#row1_winning_placement4").html(row0_placement7+row0_placement8);
    $("#row1_winning_placement5").html(row0_placement9+row0_placement10);
    $("#row1_winning_placement6").html(row0_placement11+row0_placement12);
    $("#row1_winning_placement7").html(row0_placement13+row0_placement14);
     

    $("#row1_winning_placement1").css('background-color','pink');
    $("#row1_winning_placement2").css('background-color','pink');
    $("#row1_winning_placement3").css('background-color','pink');
    $("#row1_winning_placement4").css('background-color','pink');
    $("#row1_winning_placement5").css('background-color','pink');
    $("#row1_winning_placement6").css('background-color','pink');
    $("#row1_winning_placement7").css('background-color','pink');



    

    
//console.log("ZERO_ONE:");


	

	










 



	//console.log("LOTTERY_RESULT_ONE:"+row0_placement1);
	//console.log("LOTTERY_RESULT_TWO:"+row0_placement2);
	//console.log("LOTTERY_RESULT_THREE:"+row0_placement3);
	//console.log("LOTTERY_RESULT_FOUR:"+row0_placement4);
	//console.log("LOTTERY_RESULT_FIVE:"+row0_placement5);
	//console.log("LOTTERY_RESULT_SIX:"+row0_placement6);
	//console.log("LOTTERY_RESULT_SEVEN:"+row0_placement7);
	//console.log("LOTTERY_RESULT_EIGHT:"+row0_placement8);
	//console.log("LOTTERY_RESULT_NINE:"+row0_placement9);
	//console.log("LOTTERY_RESULT_TEN:"+row0_placement10);
	//console.log("LOTTERY_RESULT_ELEVEN:"+row0_placement11);
	//console.log("LOTTERY_RESULT_TWELVE:"+row0_placement12);
	//console.log("LOTTERY_RESULT_THIRTEEN:"+row0_placement13);
	

     //console.log("FINAL_LOTTERY_RESULTS:"+row0_placement6_finish2);
	





         }


	}

	function Brake_It_Out(target,i,data)
	{


     error_handler_striper(data);




    //$("#Num_Ripper_Tracer").append(target);
    }
Grid_Display_Clear();
var time = 0;
var Auto_Play_Click = false;
function Auto_Play()
{
	time = 0;
	Auto_Play_Click = true;
}
    function Auto_Run()
	{
if(Auto_Play_Click == true)
{
		time++;
		if(time == 1 )
			{
				Get_Ticket('One');
				
			}
		if(time == 5)
			{
				Get_Ticket('Two');
			}
		if(time == 10)
			{
				Get_Ticket('Three');
			}
		if(time == 15)
			{
				Get_Ticket('Four');
			}
		if(time == 20)
			{
				Get_Ticket('Five');
			}
		if(time == 25)
			{
				Get_Ticket('Six');
			}
		if(time == 30)
			{
				Patteren_Finder();
			}		
         	
		}
        
	}
	setInterval(function(){ Auto_Run() }, 5000);
	</script>

	
</html>
