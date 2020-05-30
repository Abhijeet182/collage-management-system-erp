<?php

include_once("dbh.php");

$type=$_POST['type'];
$serial_number=$_POST['q17_serialno'];




$f_name=$_POST['q11_fullName']['first'];
$m_name=$_POST['q11_fullName']['middle'];
$l_name=$_POST['q11_fullName']['last'];
$full_name=$f_name." ".$m_name." ".$l_name;




$sa=$_POST['q16_currentAddress']['addr_line1'];
$s2=$_POST['q16_currentAddress']['addr_line2'];
$city=$_POST['q16_currentAddress']['city'];
$state=$_POST['q16_currentAddress']['state'];
$pin=$_POST['q16_currentAddress']['postal'];
$country=$_POST['q16_currentAddress']['country'];
$current_address=$sa." ".$s2." ".$city."".$state."".$pin."".$country;


$email_address=$_POST['q12_emailAddress'];
$phone_number=$_POST['q18_phoneNumber'];

$dob = $_POST['q15_dob']['month']."-". $_POST['q15_dob']['day']."-".$_POST['q15_dob']['year'];

$f_name=$_POST['q19_fatherName']['first'];
$l_name=$_POST['q19_fatherName']['last'];
$father_name=$f_name."".$l_name;


$mobile_number=$_POST['q20_mobileNo'];

$f_name=$_POST['q21_motherName']['first'];
$l_name=$_POST['q21_motherName']['last'];
$mother_name=$f_name."".$l_name;







$dept_name=$_POST['q22_department'];
$dept_id=$_POST['q23_departmentid'];

$year=$_POST['q33_yearOf'];
$username=$_POST['q25_username'];
$password=$_POST['q26_passward'];


 if(isset($type) && 
	isset($full_name) &&
	isset($current_address) &&
	isset($email_address) &&
	isset($phone_number) &&
	isset($dob) &&
	isset($father_name) &&
	isset($mobile_number) &&
	isset($mother_name) &&
	isset($dept_name) &&
	isset($dept_id) &&
	
	isset($year) &&
	isset($username) &&
	isset($password) );
	{

		$sql = "INSERT INTO addstudent (serial_number,full_name,current_address,email_address,phone_number,dob,father_name,mobile_number,mother_name,dept_name,dept_id,year,username,password,type)
		VALUES ('". $serial_number ."',
					'". $full_name ."',
					'". $current_address ."',
					'". $email_address ."',
					'". $phone_number ."',
					'". $dob ."',
					'". $father_name ."',
					'". $mobile_number ."',
					'". $mother_name ."',
					'". $dept_name ."',
					'". $dept_id ."',
					
					'". $year ."',
					'". $username ."',
					'". $password ."',
				    '". $type ."')";
 $query = mysqli_query($db , $sql);

 echo($query);
 $sql = "INSERT INTO `user`(`username`, `password`, `type`) VALUES ('". $username ."',
					'". $password ."',
				    '". $type ."')";
 $query = mysqli_query($db , $sql);

  if($query){
    	header("location: Add_Student.html");
    }

else{
	echo "Some error encounter";
    echo ($sql);
}




}
mysqli_close($db);
?>