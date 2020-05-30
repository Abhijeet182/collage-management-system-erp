<?php

include_once("dbh.php");


    $onebyone=$_POST['subject_name_1'];
    $onebytwo=$_POST['subject_name_2'];
    $onebythree=$_POST['subject_name_3'];
    $onebyfour=$_POST['subject_name_4'];
    $onebyfive=$_POST['subject_name_5'];
    $onebysix=$_POST['subject_name_6'];
    $onebyseven=$_POST['subject_name_7'];
    
    $twobyone=$_POST['subject_name_8'];
    $twobytwo=$_POST['subject_name_9'];
    $twobythree=$_POST['subject_name_10'];
    $twobyfour=$_POST['subject_name_11'];
    $twobyfive=$_POST['subject_name_12'];
    $twobysix=$_POST['subject_name_13'];
    $twobyseven=$_POST['subject_name_14'];
    
    $threebyone=$_POST['subject_name_15'];
    $threebytwo=$_POST['subject_name_16'];
    $threebythree=$_POST['subject_name_17'];
    $threebyfour=$_POST['subject_name_18'];
    $threebyfive=$_POST['subject_name_19'];
    $threebysix=$_POST['subject_name_20'];
    $threebyseven=$_POST['subject_name_21'];
   
    $fourbyone=$_POST['subject_name_22'];
    $fourbytwo=$_POST['subject_name_23'];
    $fourbythree=$_POST['subject_name_24'];
    $fourbyfour=$_POST['subject_name_25'];
    $fourbyfive=$_POST['subject_name_26'];
    $fourbysix=$_POST['subject_name_27'];
    $fourbyseven=$_POST['subject_name_28'];
   
   $fivebyone=$_POST['subject_name_29'];
   $fivebytwo=$_POST['subject_name_30'];
   $fivebythree=$_POST['subject_name_31'];
   $fivebyfour=$_POST['subject_name_32'];
   $fivebyfive=$_POST['subject_name_33'];
   $fivebysix=$_POST['subject_name_34'];
   $fivebyseven=$_POST['subject_name_35'];

    
    

    if(isset($onebyone)&&
    	isset($onebytwo)&&
    	isset($onebythree)&&
    	isset($onebyfour)&&
        isset($onebyfive)&&
        isset($onebysix)&&
        isset($onebyseven)&&
    	
    	isset($twobyone)&&
    	isset($twobytwo)&&
    	isset($twobythree)&&
    	isset($twobyfour)&&
        isset($twobyfive)&&
        isset($twobysix)&&
        isset($twobyseven)&&
    
    	isset($threebyone)&&
    	isset($threebytwo)&&
    	isset($threebythree)&&
    	isset($threebyfour)&&
        isset($threebyfive)&&
        isset($threebysix)&&
        isset($threebyseven)&&
    	
    	isset($fourbyone)&&
    	isset($fourbytwo)&&
    	isset($fourbythree)&&
    	isset($fourbyfour)&&
        isset($fourbyfive)&&
        isset($fourbysix)&&
        isset($fourbyseven)&&
   
        isset($fivebyone)&&
        isset($fivebytwo)&&
        isset($fivebythree)&&
        isset($fivebyfour)&&
        isset($fivebyfive)&&
        isset($fivebysix)&&
        isset($fivebyseven)&&

    	isset($six)
);
{
	$sql="INSERT INTO timetable_2 (onebyone,onebytwo,onebythree,onebyfour,onebyfive,onebysix,onebyseven,twobyone,twobytwo,twobythree,twobyfour,twobyfive,twobysix,twobyseven,threebyone,threebytwo,threebythree,threebyfour,threebyfive,threebysix,threebyseven,fourbyone,fourbytwo,fourbythree,fourbyfour, fourbyfive,fourbysix,fourbyseven,fivebyone,fivebytwo,fivebythree,fivebyfour,fivebyfive,fivebysix,fivebyseven) values(
	'". $onebyone ."',
	'". $onebytwo ."',
	'". $onebythree ."',
	'". $onebyfour ."',
	'". $onebyfive ."',
    '". $onebysix ."',
    '". $onebyseven ."',

	'". $twobyone ."',
	'". $twobytwo ."',
	'". $twobythree ."',
	'". $twobyfour ."',
    '". $twobyfive ."',
    '". $twobysix ."',
    '". $twobyseven ."',


	
	'". $threebyone ."',
	'". $threebytwo ."',
	'". $threebythree ."',
	'". $threebyfour ."',
    '". $threebyfive ."',
    '". $threebysix ."',
    '". $threebyseven ."',
	
	'". $fourbyone ."',
	'". $fourbytwo ."',
	'". $fourbythree ."',
	'". $fourbyfour ."',
    '". $fourbyfive ."',
    '". $fourbysix ."',
    '". $fourbyseven ."',
	
    '". $fivebyone ."',
    '". $fivebytwo ."',
    '". $fivebythree ."',
    '". $fivebyfour ."',
    '". $fivebyfive."',
    '". $fivebysix ."',
    '". $fivebyseven ."')";
}
	//echo $sql;
    $query = mysqli_query($db , $sql);

 //echo($query);
  if($query){
    	header("location: HODdashboard.php");
    }

else{
	echo "Some error encounter";
    echo ($sql);
}

