<?php

include_once("dbh.php");


    $onebyone=$_POST['subject_name_1'];
    $onebytwo=$_POST['subject_name_2'];
    $onebythree=$_POST['subject_name_3'];
    $onebyfour=$_POST['subject_name_4'];
    
    $twobyone=$_POST['subject_name_5'];
    $twobytwo=$_POST['subject_name_6'];
    $twobythree=$_POST['subject_name_7'];
    $twobyfour=$_POST['subject_name_8'];
    
    $threebyone=$_POST['subject_name_9'];
    $threebytwo=$_POST['subject_name_10'];
    $threebythree=$_POST['subject_name_11'];
    $threebyfour=$_POST['subject_name_12'];
   
    $fourbyone=$_POST['subject_name_13'];
    $fourbytwo=$_POST['subject_name_14'];
    $fourbythree=$_POST['subject_name_15'];
    $fourbyfour=$_POST['subject_name_16'];
   
   $fivebyone=$_POST['subject_name_17'];
   $fivebytwo=$_POST['subject_name_18'];
   $fivebythree=$_POST['subject_name_19'];
   $fivebyfour=$_POST['subject_name_20'];

    $six=$_POST['subject_name_21'];
    

    if(isset($onebyone)&&
    	isset($onebytwo)&&
    	isset($onebythree)&&
    	isset($onebyfour)&&
    	
    	isset($twobyone)&&
    	isset($twobytwo)&&
    	isset($twobythree)&&
    	isset($twobyfour)&&
    
    	isset($threebyone)&&
    	isset($threebytwo)&&
    	isset($threebythree)&&
    	isset($threebyfour)&&
    	
    	isset($fourbyone)&&
    	isset($fourbytwo)&&
    	isset($fourbythree)&&
    	isset($fourbyfour)&&
   
        isset($fivebyone)&&
        isset($fivebytwo)&&
        isset($fivebythree)&&
        isset($fivebyfour)&&

    	isset($six)
);
{
	$sql="INSERT INTO timetable (onebyone,onebytwo,onebythree,onebyfour, twobyone,twobytwo,twobythree,twobyfour,threebyone,threebytwo,threebythree,threebyfour, fourbyone,fourbytwo,fourbythree,fourbyfour, fivebyone,fivebytwo,fivebythree,fivebyfour,six) values(
	'". $onebyone ."',
	'". $onebytwo ."',
	'". $onebythree ."',
	'". $onebyfour ."',
	
	'". $twobyone ."',
	'". $twobytwo ."',
	'". $twobythree ."',
	'". $twobyfour ."',
	
	'". $threebyone ."',
	'". $threebytwo ."',
	'". $threebythree ."',
	'". $threebyfour ."',
	
	'". $fourbyone ."',
	'". $fourbytwo ."',
	'". $fourbythree ."',
	'". $fourbyfour ."',
	
    '". $fivebyone ."',
    '". $fivebytwo ."',
    '". $fivebythree ."',
    '". $fivebyfour ."',

	'". $six ."')";
}
	//echo $sql;
    $query = mysqli_query($db , $sql);

 echo($query);
  if($query){
    	header("location: HODdashboard.php");
    }

else{
	echo "Some error encounter";
    echo ($sql);
}

