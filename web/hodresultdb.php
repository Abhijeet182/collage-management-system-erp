<?php
include_once ("dbh.php");
	$msg="";
	$target="images/".basename($_FILES['file_upload']['name']);
	$faculty_name=$_POST['result_faculty_name'];
	$sem_numb=$_POST['sem_number'];
	$sem_type=$_POST['sem_type'];
	$sem_year=$_POST['sem_year'];
	$file_upload=$_FILES['file_upload']['name'];
	$file_comment=$_POST['file_comment'];

	if(isset($faculty_name)&&
isset($sem_numb)&&
isset($sem_type)&&
isset($sem_year)&&
isset($file_upload)&&
isset($file_comment)

)
;

{
$sql="INSERT INTO result (name,sem,type,year,file_upload,comment) values(
'". $faculty_name."',
'". $sem_numb."',
'". $sem_type."',
'". $sem_year."',
'". $file_upload."',
'". $file_comment."')";
}
if(move_uploaded_file($_FILES['file_upload']['tmp_name'], $target))
{
	$msg="Image is upload Successfully";
}
else{
	$msg="Image is not uploaded";
}


 $query = mysqli_query($db , $sql);

 

?>