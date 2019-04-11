<?php
  session_start();
  if (!isset($_SESSION['username'])) {
      $_SESSION['msg'] = "You must log in first";
      header('location: index.php');
  }
  if (isset($_GET['Logout'])) {
      session_destroy();
      unset($_SESSION['username']);
      header("location: index.php");
  }
  include('chart_gen.php');
  include('combox.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charts</title>
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="css/theme.php" rel="stylesheet">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js" integrity="sha256-oSgtFCCmHWRPQ/JmR4OoZ3Xke1Pw4v50uh6pLcu+fIc=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

<script type="text/javascript" src="js/dy_chart_gen.js"></script>

</head>
<body>

    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <i class="icon-reorder shaded"></i></a><a class="brand" href="home.php">DARS </a>
                <div class="nav-collapse collapse navbar-inverse-collapse">
                    <ul class="nav nav-icons">

                        <li><a href="charts.php"><i class="icon-bar-chart"></i></a></li>
                    </ul>
                    <form class="navbar-search pull-left input-append" action="#">
                    <input type="text" class="span3">
                    <button class="btn" type="button">
                        <i class="icon-search"></i>
                    </button>
                    </form>
                    <ul class="nav pull-right">


                        <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="images/user.png" class="nav-avatar" />
                            <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Your Profile</a></li>
                                <li><a href="#">Edit Profile</a></li>
                                <li><a href="#">Account Settings</a></li>
                                <li class="divider"></li>
                                <li><a href="index.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.nav-collapse -->
            </div>
        </div>
        <!-- /navbar-inner -->
    </div>
    <!-- /navbar -->
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="span3">
                    <div class="sidebar">
                        <ul class="widget widget-menu unstyled">
                            <li class="active"><a href="home.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                            </a></li>

                        </ul>


                        <!--/.widget-nav-->
                        <ul class="widget widget-menu unstyled">

                               <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-paste">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Information Input</a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="UniversityInfo.php"><i class="menu-icon icon-paste"></i>University Information </a></li>
                                        <li><a href="TeacherInfo.php"><i class="menu-icon icon-paste"></i>Teacher Distribution </a></li>
                                       <li><a href="StudentInfo.php"><i class="menu-icon icon-paste"></i>Student Distribution </a></li>
                                       <li><a href="ResearchPublications.php"><i class="menu-icon icon-paste"></i>Research and Publications </a></li>
                                       <li><a href="Finances.php"><i class="menu-icon icon-paste"></i>Finances </a></li>
                                       <li><a href="Courses.php"><i class="menu-icon icon-paste"></i>Courses </a></li>
                                    </ul>
                            </li>
                                <!-- <li><a href="table.php"><i class="menu-icon icon-table"></i>Tables </a></li> -->
                                <li><a href="charts.php"><i class="menu-icon icon-bar-chart"></i>Graphical Representation </a></li>
                            </ul>


                        <!--/.widget-nav-->
                        <ul class="widget widget-menu unstyled">

                            <li><a href="index.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                        </ul>
                    </div>
                    <!--/.sidebar-->
                </div>
                <!--/.span3-->
                <div class="span9">
                    <div class="content" id="pdfgen">
                      <div id="header1">
                        <img src="images/header.jpg">
                      </div>

                        <div class="module" id="bar1">

                            <div class="module-head">
                                <h2>Total Number of Student Studying </h2>

                                <div>
                                     <label>Select Year </label>
                                     <select id ="year1">

                                   <?php echo $option2; ?>
                                     </select>
                            </div>

                          </div >
                               <!--first chart-->

                                 <canvas id="myChart" width="400" height="350"></canvas>


                        </div>
                        <!--/.module-->
                        <br />
                        <div class="module" id="line1" >
                            <div class="module-head">
                                <h2>Growth of Admitted Student  </h2>
                                <div>
                                  <label>Select University </label>
                                  <select id="selUni1" >
                                 <?php echo $option1; ?>
                                  </select>
                            </div>
                            <div class="form2">
                                 <label>Select University </label>
                                 <select id="selUni2" >
                                <?php echo $option1; ?>
                                 </select>
                        </div>
                            </div>

                            <canvas id="myLineChart" width="400" height="200"></canvas>

                        </div>
                        <!--/.module-->
                        <br />
                        <div class="module" id="line2">
                            <div class="module-head">
                                <h2>Income/Expense over the years</h2>
                                <div>
                                     <label>Select University name </label>
                                     <select id="selLine2">
                                    <?php echo $option1; ?>
                                     </select>
                            </div>

                            </div>

                            <canvas id="myLineChart2" width="400" height="200"></canvas>

                        </div>
                        <!--/.module-->
                        <br />
                        <div class="module" id="pie1">
                            <div class="module-head">
                                <h1>Student Distribution</h1>
                                <div>
                                     <label>Select Year </label>
                                     <select id='sel1pie1'>
                                    <?php echo $option2; ?>
                                     </select>
                            <div class="form2">
                                 <label>Select University </label>
                                 <select id="sel2pie1" >
                                <?php echo $option1; ?>
                                 </select>
                        </div>
                            </div>
                            </div>

                            <canvas id="myPieChart1" width="300" height="250"></canvas>

                        </div>

                        <br/>




                        <!--/.module-->
                        <br />
                        <div class="module" id="doughnut">
                            <div class="module-head">
                                <h2>
                                    Expense of University  </h2>
                                    <div>
                                   <form action="chart_gen.php" method="post">
                                         <label>Select Year </label>
                                         <select id ="doughnutyear" >
                                        <?php echo $option2; ?>
                                         </select>
                                </form>
                                </div>

                                <div class="form2">
                               <form action="chart_gen.php" method="post">
                                     <label>Select University </label>
                                     <select id ="doughnutuni" >
                                    <?php echo $option1; ?>
                                     </select>
                            </form>
                            </div>

                            </div>
                            <canvas id="mydoughnutChart" width="400" height="300"></canvas>

                        </div>

                        <!--/.module-->
                        <br />
                        <div class="module" id=subjectchart>
                            <div class="module-head">
                                <h2>Subject Distribution</h2>
                                <div>
                               <form action="chart_gen.php" method="post">
                                     <label>Select Year </label>
                                     <select id ="subjectyear1" >
                                    <?php echo $option2; ?>
                                     </select>
                            </form>
                            </div>

                            <div class="form2">
                           <form action="chart_gen.php" method="post">
                                 <label>Select University </label>
                                 <select id ="subjectuni1" >
                                <?php echo $option1; ?>
                                 </select>
                        </form>
                        </div>
                            </div>
                            <canvas id="myChartsubject" width="50" height="50"></canvas>


                        </div>

                        <!--/.module-->
                        <br />
                        <div class="module" id ="res">
                            <div class="module-head">
                                <h2>Research Project Completed over the years</h2>

                                      <label>Select University name </label>
                                      <select name ="sel1" id= "ResSel">
                                     <?php echo $option1; ?>
                                      </select>
                            </div>
                            <canvas id="myRESLineChart3" width="400" height="200"></canvas>


                        </div>

                        <!--/.module-->
                        <br />
                        <div class="module" id="bar3">
                            <div class="module-head">
                                <h2>Expense On Scholarship By University</h2>

                                     <label>Select Year </label>
                                     <select id='selbar3'>
                                    <?php echo $option2; ?>
                                     </select>
                            </div>

                            <canvas id="barChart3" width="300" height="250"></canvas>

                        </div>

                        <!--/.module-->
                        <br />

                    </div>
                    <!--/.content-->
                      <button type="button" class="btn" onclick="window.print();">Print PDF</button>
                </div>
                <!--/.span9-->
            </div>
        </div>

    <!--/.wrapper-->
    <div class="footer">
        <div class="container">
            <b class="copyright">&copy; 2019 DARS </b>All rights reserved.
        </div>
    </div>
    <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="scripts/common.js" type="text/javascript"></script>



</body>
