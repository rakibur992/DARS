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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="home.php">DARS </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <!-- <li class="active"><a href="#"><i class="icon-envelope"></i></a></li> -->
                            <!-- <li><a href="#"><i class="icon-eye-open"></i></a></li> -->
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


                            <ul class="widget widget-menu unstyled">

                                <li class="divider"></li>
                               <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-paste">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>University Information</a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="UniversityInfo.php"><i class="menu-icon icon-paste"></i>General Information </a></li>
                                        <li><a href="TeacherInfo.php"><i class="menu-icon icon-paste"></i>Teacher Distribution </a></li>
                                       <li><a href="StudentInfo.php"><i class="menu-icon icon-paste"></i>Student Distribution </a></li>
                                       <li><a href="ResearchPublications.php"><i class="menu-icon icon-paste"></i>Research and Publications </a></li>
                                       <li><a href="Finances.php"><i class="menu-icon icon-paste"></i>Finances </a></li>
                                       <li><a href="Courses.php"><i class="menu-icon icon-paste"></i>Courses </a></li>
                                    </ul>
                            </li>
                                <li><a href="table.php"><i class="menu-icon icon-table"></i>Tables </a></li>
                                <li><a href="charts.php"><i class="menu-icon icon-bar-chart"></i>Graphical Representation </a></li>
                            </ul>



                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">

                                 <li class="divider"></li>
                                <li class="divider"></li>
                                <li><a href="index.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->

                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">


                                <div class="btn-box-row row-fluid">


                                              <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display"
                                                  width="100%">
                                                  <thead>
                                                    <tr>
                                                        <th>University Name</th>
                                                        <th>University Address</th>
                                                        <th>University Contact</th>
                                                        <th>University Email</th>
                                                        <th>University Websites</th>

                                                    </tr>
                                                  </thead>
                                                  <!--Table head-->
                                                  <!--Table body-->
                                                  <tbody>

                                                    <?php

                                                    $servername = "localhost";
                                                    $username = "root";
                                                    $password = "";
                                                    $dbname = "dars2.0";

                                                    // Create connection
                                                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                                                    // Check connection
                                                    if (!$conn) {
                                                        die("Connection failed: " . mysqli_connect_error());
                                                    }

                                                    $sql = "SELECT  University_Name,University_Address,University_Contact,University_Email,University_Website FROM university WHERE UYear='2017'";
                                                    $result = mysqli_query($conn, $sql);

                                                    if (mysqli_num_rows($result) > 0) {
                                                        // output data of each row
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            echo "<tr>
                                                    <td>" . $row["University_Name"]. "</td>
                                                    <td>" . $row["University_Address"] . "</td>
                                                    <td>". $row["University_Contact"]."</td>
                                                    <td>". $row["University_Email"]. "</td>
                                                    <td> <a  href=https://" .$row["University_Website"]." target='_blank'>". $row["University_Website"].  "</td></a>

                                                    </tr>";
                                                        }

                                                        echo "</table>";
                                                    } else {
                                                        echo "0 results";
                                                    }
                                                    $conn->close();
                                                    ?>

                                                  </tbody>


                        </div>
                    </div>

                    <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Profit Chart</h3>
                                </div>
                                <div class="module-body">
                                    <div class="chart inline-legend grid">
                                        <div id="placeholder2" class="graph" style="height: 500px">
                                        </div>
                                    </div>
                                </div>
                            </div>

                    <div class="module hide">
                                <div class="module-head">
                                    <h3>
                                        Adjust Budget Range</h3>
                                </div>
                                <div class="module-body">
                                    <div class="form-inline clearfix">
                                        <a href="#" class="btn pull-right">Update</a>
                                        <label for="amount">
                                            Price range:</label>
                                        &nbsp;
                                        <input type="text" id="amount" class="input-" />
                                    </div>
                                    <hr />
                                    <div class="slider-range">
                                    </div>
                                </div>
                            </div>



        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2019 DARS  </b>All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>

    </body>
