<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 50%;
    border-collapse: collapse;
}

table, td, th {
    border: 4px solid black;
    padding: 8px;
}

th {text-align: left;}
</style>
</head>
<body>

<!DOCTYPE html>
<head>
<title>Welcome to HOD Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="studentdashboard.php" class="logo">
<font size="4"> <?php
        session_start();

        include_once("dbh.php");
 
        if(   isset($_COOKIE["username1"]))

{
                $username= $_COOKIE["username1"];

         $sql="select full_name from addfaculty where type='HOD' and username='". $username."'";
       // echo "$sql";
       $query = mysqli_query($db , $sql);
          $row = mysqli_fetch_array($query,MYSQLI_ASSOC);
       echo $row['full_name'];

   }
       else{
             header("location: login.php");


       }
        ?></font>
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-tasks"></i>
                <span class="badge bg-success">8</span>
            </a>
            <ul class="dropdown-menu extended tasks-bar">
                <li>
                    <p class="">You have 8 pending tasks</p>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>25% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="45">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Product Delivery</h5>
                                <p>45% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="78">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Payment collection</h5>
                                <p>87% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="60">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>33% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="90">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>

                <li class="external">
                    <a href="#">See All Tasks</a>
                </li>
            </ul>
        </li>
        <!-- settings end -->
        <!-- inbox dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important">4</span>
            </a>
            <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">You have 4 Mails</p>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="images/3.png"></span>
                                <span class="subject">
                                <span class="from">Jonathan Smith</span>
                                <span class="time">Just now</span>
                                </span>
                                <span class="message">
                                    Hello, this is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="images/1.png"></span>
                                <span class="subject">
                                <span class="from">Admin</span>
                                <span class="time">2 min ago</span>
                                </span>
                                <span class="message">
                                    Nice admin template
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="images/3.png"></span>
                                <span class="subject">
                                <span class="from">Tasi sam</span>
                                <span class="time">2 days ago</span>
                                </span>
                                <span class="message">
                                    This is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="images/2.png"></span>
                                <span class="subject">
                                <span class="from">Mr. Perfect</span>
                                <span class="time">2 hour ago</span>
                                </span>
                                <span class="message">
                                    Hi there, its a test
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">See all messages</a>
                </li>
            </ul>
        </li>
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                <i class="fa fa-bell-o"></i>
                <span class="badge bg-warning">3</span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li>
                    <p>Notifications</p>
                </li>
                <li>
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #1 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-danger clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #2 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-success clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #3 overloaded.</a>
                        </div>
                    </div>
                </li>

            </ul>
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/2.png">
                <span class="username">
                    <?php
        include_once("dbh.php");
 
        if(   isset($_COOKIE["username1"]))

{
                $username= $_COOKIE["username1"];

         $sql="select full_name from addfaculty where type='HOD' and username='". $username."'";
       // echo "$sql";
       $query = mysqli_query($db , $sql);
          $row = mysqli_fetch_array($query,MYSQLI_ASSOC);
       echo $row['full_name'];

   }
       else{
             header("location: login.php");



       }
        ?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="Facultyprofile.php"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="Facultyprofile.php"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="login.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="studentdashboard.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Time Table</span>
                    </a>
                     <ul class="sub">
                        <li><a href="hodtimetable_edit.php">POST</a></li>
                        <li><a href="hodtimetable.php">VIEW</a></li></ul>
                    
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-bullhorn"></i>
                        <span>News and Events</span>
                    </a>
                     <ul class="sub">
                        <li><a href="hodnewsedit.php">POST</a></li>
                        <li><a href="hodnewsview.php">VIEW</a></li></ul>
                    
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>View results</span>
                    </a>
                    
                </li>
                <li class="sub-menu">
                    <a href="student_accountsection.php">
                        <i class="fa fa-tasks"></i>
                        <span>Accounts Section</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-envelope"></i>
                        <span>Mail </span>
                    </a>
                    <ul class="sub">
                        <li><a href="mail.html">Inbox</a></li>
                        <li><a href="mail_compose.html">Compose Mail</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>View Attendance</span>
                    </a>
                    <ul class="sub">
                        <li><a href="chartjs.html">Chart js</a></li>
                        <li><a href="flot_chart.html">Flot Charts</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="librarysection.php">
                        <i class="fa fa-university"></i>
                        <span>E-library</span>
                    </a>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-commenting"></i>
                        <span>Feedback Section</span>
                        </a>
                         <ul class="sub">
                        <li><a href="Blue_Envelope_Form.html">Blue Envelope</a></li>
                        <li><a href="Faculty_feedback_form.php">Faculty Feedback</a></li>
                    </ul></li>
                    
                    
                   <!-- <ul class="sub">
                        <li><a href="gallery.html">Gallery</a></li>
            <li><a href="404.html">404 Error</a></li>
                        <li><a href="registration.html">Registration</a></li>
                    </ul> -->
                </li>
                <li>
                    <a href="login.html">
                        <i class="fa fa-user"></i>
                        <span>Login Page</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <!-- banner display-->
        
<div align="center">
<marquee 
 
     direction="left"
     loop="7"
     scrollamount="3"
     scrolldelay="2"
     behavior="alternate"
     width="100%"
     bgcolor="#ff3424"
     
        
     >Welcome
     <?php
        

        include_once("dbh.php");
 
        if(   isset($_COOKIE["username1"]))

{
                $username= $_COOKIE["username1"];

         $sql="select full_name from addstudent where type='student' and username='". $username."'";
       // echo "$sql";
       $query = mysqli_query($db , $sql);
          $row = mysqli_fetch_array($query,MYSQLI_ASSOC);
       echo $row['full_name'];

   }
       else{
             header("location: login.php");


       }
        ?>
 to the ERP of INDIAN INSTITUTE OF ENGINEERING
</marquee>
</div>


<script type="text/javascript">
tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
}

window.onload=function(){
GetClock();
setInterval(GetClock,1000);
}
</script>
<div id="clockbox"></div>
Your IP address is <?php 

echo $_SERVER["REMOTE_ADDR"]; ?>    
 <!-- footer -->
      <div class="footer">
      <div class="wthree-copyright">
        <p>© 2017 Indian Institute of Enginerring | Design by @bhijeet</a></p>
      </div>
      </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->  
<script>
  $(document).ready(function() {
    //BOX BUTTON SHOW AND CLOSE
     jQuery('.small-graph-box').hover(function() {
      jQuery(this).find('.box-button').fadeIn('fast');
     }, function() {
      jQuery(this).find('.box-button').fadeOut('fast');
     });
     jQuery('.small-graph-box .box-close').click(function() {
      jQuery(this).closest('.small-graph-box').fadeOut(200);
      return false;
     });
     
      //CHARTS
      function gd(year, day, month) {
      return new Date(year, month - 1, day).getTime();
    }
    
    graphArea2 = Morris.Area({
      element: 'hero-area',
      padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
      data: [
        {period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
        {period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
        {period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
        {period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
        {period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
        {period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
        {period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
        {period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
        {period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
      
      ],
      lineColors:['#eb6f6f','#926383','#eb6f6f'],
      xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
      pointSize: 2,
      hideHover: 'auto',
      resize: true
    });
    
     
  });
  </script>
<!-- calendar -->
  <script type="text/javascript" src="js/monthly.js"></script>
  <script type="text/javascript">
    $(window).load( function() {

      $('#mycalendar').monthly({
        mode: 'event',
        
      });

      $('#mycalendar2').monthly({
        mode: 'picker',
        target: '#mytarget',
        setWidth: '250px',
        startHidden: true,
        showTrigger: '#mytarget',
        stylePast: true,
        disablePast: true
      });

    switch(window.location.protocol) {
    case 'http:':
    case 'https:':
    // running on a server, should be good.
    break;
    case 'file:':
    alert('Just a heads-up, events will not work when run locally.');
    }

    });
  </script>
  <!-- //calendar -->
</body>
</html>

