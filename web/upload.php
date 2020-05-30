<?php session_start();
        $_SESSION['username'] = "abhijeet";
?>
 
 <?php
        if(isset($_POST['submit'])){
                move_uploaded_file($_FILES['file']['tmp_name'],"C:\xampp\htdocs\erp\web\images".$_FILES['file']['name']);
                $con = mysqli_connect("localhost","root","","erp");
                $q = mysqli_query($con,"UPDATE profileimage SET image = '".$_FILES['file']['name']."' WHERE username = '".$_SESSION['username']."'");
        }
?> 
 
<!DOCTYPE html>
<html>
        <head>
       
        </head>
        <body>
                <form action="" method="post" enctype="multipart/form-data">
                        <input type="file" name="file">
                        <input type="submit" name="submit">
                </form>
               
               
                <?php
                        $con = mysqli_connect("localhost","root","","erp");
                        $q = mysqli_query($con,"SELECT * FROM profileimage");
                        while($row = mysqli_fetch_assoc($q)){
                                echo $row['username'];
                                if($row['image'] == ""){
                                        echo "<img width='100' height='100' src='images/default.jpg' alt='Default Profile Pic'>";
                                } else {
                                        echo "<img width='100' height='100' src='images/".$row['image']."' alt='Profile Pic'>";
                                }
                                echo "<br>";
                        }
                ?>
        </body>
</html>