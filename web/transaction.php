<?php
require 'session.php';
//if(!isset($_SESSION['username'])){
//header("location:index.php");
//}
?>  
<!doctype html>
<html>
<head>
<title>Transaction</title>
<link href="files/bootstrap.min.css" rel="stylesheet">
   <script src="files/jquery.min.js"></script>
   <script src="files/bootstrap.min.js"></script>
  <script src="fonts/glyphicons-halflings-regular.svg"></script>
   <script src="fonts/glyphicons-halflings-regular.ttf"></script>
   <script src="fonts/glyphicons-halflings-regular.eot"></script>
   <script src="fonts/glyphicons-halflings-regular.woff"></script>
   <style>
   
.panel-heading {
    padding: 5px 15px;
}

.panel-footer {
	padding: 1px 15px;
	color: #A0A0A0;
}

.profile-img {
	width: 96px;
	height: 96px;
	margin: 0 auto 10px;
	display: block;
	-moz-border-radius: 50%;
	-webkit-border-radius: 50%;
	border-radius: 50%;
}
</style>
</head>
<body>

    <div class="container" style="margin-top:40px">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong> Enter Roll Number to Continue</strong>
					</div>
					<div class="panel-body">
						<form role="form" action="checkinfo.php" method="POST">
							<fieldset>
								<div class="row">
									<div class="center-block">
										<img class="profile-img"
											src="images/photo.png">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span> 
												<input class="form-control" placeholder="Roll Number" name="roll_no" type="text" autofocus>
											</div>
										</div>
										
										<div class="form-group">
											<input type="submit" class="btn btn-lg btn-success btn-block"  value="Check">
										</div> 
									</div>
								</div>
							</fieldset>
						</form>
					</div>
                </div>
			</div>
		</div>
	</div>   
   
