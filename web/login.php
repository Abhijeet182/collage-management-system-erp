<?php
session_start();


?>
<!DOCTYPE html>
<head>
<title>ERP Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2>ERP Login</h2>
	    <?php
              if(   isset($_COOKIE["error"]))

{
                $error= $_COOKIE["error"];
                echo $error;
                                             setcookie("error", "Your Login Name or Password is invalid", time()-10, "/","", 0);


}

                 ?>
		<form action="checklogin.php" method="post">
		<div >
              <label for="category"> <span class="glyphicon glyphicon-user"></span> </span> Login as </label>
				<select  class="form-control form-element" name='category'>
					<option class='drop-down' value='student'> Student </option>			
					<option class='drop-down' value='Faculty'> Faculty </option>			
					<option class='drop-down' value='HOD'> HOD </option>	
					<option class='drop-down' value='HOD'> Director </option>		
					<option class='drop-down' value='administration'> Administration </option>			
				</select>
			</div>
			<br>
			<div class="form-group usn">
              <label for="username"> <span class="glyphicon glyphicon-user"> </span> username</label><br>
        	  <input type="textbox" class="form-control form-element" name="username" placeholder="username">
            </div>
			<div class="form-group password">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
			  <input type="password" class="form-control form-element" name="password" placeholder="Password">
            </div>
			<span><input type="checkbox" />Remember Me</span>
			<h6><a href="#">Forgot Password?</a></h6>
				<div class="clearfix"></div>
				
			<div>
				<input type="submit" value="Login" name="login" <span class="glyphicon glyphicon-lock"></span>  >
				</div>
		</form>
		
</div>
</div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
