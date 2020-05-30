<?php

include_once("dbh.php");

$name=$_POST["news_edit_name"];
$date=$_POST["news_edit_date"];
$concered=$_POST["news_edit_option"];
$textarea=$_POST["textarea"];

if(isset($name)&&
   isset($date)&&
   isset($concered)&&
   isset($textarea)
);

{
	$sql="INSERT INTO hodnewsedit (name,date,concered,textarea) values(
'". $name ."',
'". $date ."',
'". $concered ."',
'". $textarea ."')";
}	

$query = mysqli_query($db , $sql);

echo($query);
  if($query){
    	header("location: HODdashboard.php");
    }

else{
	echo "Some error encounter";
    echo ($sql);
}

