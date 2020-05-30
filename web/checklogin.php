<?php
   include("dbh.php");
   session_start();
  
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = strtoupper($_POST['username']);
      $password = $_POST['password']; 
      echo  $_POST['category'];

      $type = $_POST['category'];

      $sql = "SELECT * FROM user WHERE upper(username) = '$username' and password = '$password' and type ='$type'";
     
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = (isset($row['active']));
      
      $count = mysqli_num_rows($result);
      
      // If result matched $username and $password, table row must be 1 row
	
      if($count == 1) {
        // session_register("username");

         $_SESSION["login_user"] = $username;
            setcookie("username1", $username, time()+3600, "/","", 0);

   

switch ($type) {
   case 'student':
   // echo "string";
        header("location: studentdashboard.php");
        break;
    case 'Faculty':
        header("location: Facultydashboard.php");
        break;
        case 'administration':
      header("location: admindashboard.php");
        break;
        case 'HOD':
      header("location: HODdashboard.php");
        break;
        default:
        header("location: login.php");
    
     }
}
}
