<?php
require('session.php');
//if(!isset($_SESSION['username'])){
//}
include('serverinfo.php');
?>
<!doctype html>
<html>
<head>
<title>Make Entry of returned books.</title>
<link href="files/bootstrap.min.css" rel="stylesheet">
   <script src="files/jquery.min.js"></script>
   <script src="files/bootstrap.min.js"></script>
</head>
<body>
<h3 align="center">Make Entry for returned books!</h3>
	<br><br>
	<div class="col-sm-3" align="center">
	<form class="form-horizontal container" role="form" method="post" action="student_return_next.php">
   <div class="form-group">
      <label for="rollno" class="col-sm-2 control-label">Roll no.</label>
      <div class="col-sm-10">
         <input type="number" class="form-control" name="rollno" 
            placeholder="Enter student's rollno here...">
      </div>
   </div>
   <div class="form-group">
      <label for="book_id" class="col-sm-2 control-label">Book ID.</label>
      <div class="col-sm-10">
         <input type="number" class="form-control" name="bookid" 
            placeholder="Enter book id here...">
      </div>
   </div>
   <div class="form-group">
      <label for="damage_ratio" class="col-sm-2 control-label">Damage Ratio</label>
      <div class="col-sm-10">
         <input type="number" class="form-control" name="damage" value = 0 
            placeholder="Enter Damage Ratio here...">
      </div>
   </div>
   
   <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
         <a href="members.php"><button type="button" class="btn btn-warning" data-toggle="collapse" data-target="stud_transaction">Go Back</button></a>
		 <button type="submit" class="btn btn-warning">Re-add to the Vault</button>
      </div>
   </div>
   </form>
   </div>
</body>
</html>