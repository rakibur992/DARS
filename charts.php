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
                        <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                        <li><a href="#"><i class="icon-eye-open"></i></a></li>
                        <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                    </ul>
                    <form class="navbar-search pull-left input-append" action="#">
                    <input type="text" class="span3">
                    <button class="btn" type="button">
                        <i class="icon-search"></i>
                    </button>
                    </form>
                    <ul class="nav pull-right">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                            <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Item No. 1</a></li>
                                <li><a href="#">Don't Click</a></li>
                                <li class="divider"></li>
                                <li class="nav-header">Example Header</li>
                                <li><a href="#">A Separated link</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Support </a></li>
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
                                </i>Forms</a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="UniversityInfo.php"><i class="menu-icon icon-paste"></i>University Information </a></li>
                                        <li><a href="TeacherInfo.php"><i class="menu-icon icon-paste"></i>Teacher Distribution </a></li>
                                       <li><a href="StudentInfo.php"><i class="menu-icon icon-paste"></i>Student Distribution </a></li>
                                       <li><a href="ResearchPublications.php"><i class="menu-icon icon-paste"></i>Research and Publications </a></li>
                                       <li><a href="Finances.php"><i class="menu-icon icon-paste"></i>Finances </a></li>
                                       <li><a href="Courses.php"><i class="menu-icon icon-paste"></i>Courses </a></li>
                                    </ul>
                            </li>
                                <li><a href="table.php"><i class="menu-icon icon-table"></i>Tables </a></li>
                                <li><a href="charts.php"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
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
                    <div class="content">
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


                        <!--/.module-->
                        <br />
                        <div class="module" id="pie1">
                            <div class="module-head">
                                <h2>
                                    Expense of University  </h2>
                                    <div>
                                   <form action="chart_gen.php" method="post">
                                         <label>Select Year </label>
                                         <select name ="sel1" onchange="this.form.submit">
                                        <?php echo $option2; ?>
                                         </select>
                                </form>
                                </div>

                                <div class="form2">
                               <form action="chart_gen.php" method="post">
                                     <label>Select University </label>
                                     <select name ="sel2" onchange="this.form.submit">
                                    <?php echo $option1; ?>
                                     </select>
                            </form>
                            </div>

                            </div>
                            <canvas id="myPieChart" width="400" height="250"></canvas>
                            <script>
                            var ctx = document.getElementById('myPieChart').getContext('2d');
                            var myPieChart = new Chart(ctx, {
                                type: 'doughnut',
                                data: {
                                    labels: ['Total Education','Research','Salary','Scholarship'
                                              ,'Transport'
                                              ,'Electricity','Medical'
                                              ,'Misc'
                                              ,'Per Student'
                                              ,'Infrustructure&Maintainence'],
                                    datasets: [{
                                        data: <?php print json_encode($data_pie_exp); ?>,
                                        backgroundColor: [
                                          'rgba(250, 109, 4,0.6)',
                                          'rgba(23, 33, 229, 0.6)',
                                          'rgba(127, 218, 59, 0.6)',
                                          'rgba(202, 158, 6, 0.6)',
                                          'rgba(59, 237, 159, 0.6)',
                                          'rgba(59, 232, 237, 0.6)',
                                          'rgba(116, 59, 237, 0.6)',
                                          'rgba(213, 59, 237, 0.6)',
                                          'rgba(255, 106, 106, 0.6)',
                                          'rgba(237, 59, 145, 0.6)'
                                        ],
                                        borderColor: [
                                          'rgba(250, 109, 4,1)',
                                          'rgba(23, 33, 229,  1)',
                                          'rgba(127, 218, 59, 1)',
                                          'rgba(202, 158, 6, 1)',
                                          'rgba(59, 237, 159, 1)',
                                          'rgba(59, 232, 237 1)',
                                          'rgba(116, 59, 237, 1)',
                                          'rgba(213, 59, 237, 1)',
                                          'rgba(255, 106, 10, 1)',
                                          'rgba(237, 59, 145,1)',
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                }
                            });
                            </script>
                        </div>

                        <!--/.module-->
                        <br />
                        <div class="module">
                            <div class="module-head">
                                <h1>Subject Distribution</h1>
                            </div>
                            <canvas id="myChart21" width="50" height="50"></canvas>
                            <script>
                            var ctx = document.getElementById('myChart21').getContext('2d');
                            var myChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ['Arts', 'Sociology', 'Education', 'Science', 'Business', 'Law',
                                  'Pharmacy','Agriculture','Engineering and Technical','Economics'],
                                    datasets: [{
                                        data: <?php print json_encode($data_pie_exp2); ?>,
                                        backgroundColor: [
                                          'rgba(250, 109, 4,0.6)',
                                          'rgba(23, 33, 229, 0.6)',
                                          'rgba(127, 218, 59, 0.6)',
                                          'rgba(202, 158, 6, 0.6)',
                                          'rgba(59, 237, 159, 0.6)',
                                          'rgba(59, 232, 237, 0.6)',
                                          'rgba(116, 59, 237, 0.6)',
                                          'rgba(213, 59, 237, 0.6)',
                                          'rgba(255, 106, 106, 0.6)',
                                          'rgba(237, 59, 145, 0.6)'
                                        ],
                                        borderColor: [
                                          'rgba(250, 109, 4,1)',
                                          'rgba(23, 33, 229,  1)',
                                          'rgba(127, 218, 59, 1)',
                                          'rgba(202, 158, 6, 1)',
                                          'rgba(59, 237, 159, 1)',
                                          'rgba(59, 232, 237 1)',
                                          'rgba(116, 59, 237, 1)',
                                          'rgba(213, 59, 237, 1)',
                                          'rgba(255, 106, 10, 1)',
                                          'rgba(237, 59, 145,1)',
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                    }
                                }
                            });
                            </script>

                        </div>

                        <!--/.module-->
                        <br />
                        <div class="module">
                            <div class="module-head">
                                <h1>Research Project Completed over the years</h1>
                                <form action="chart_gen.php" method="post">
                                      <label>Select University name </label>
                                      <select name ="sel1" onchange="this.form.submit">
                                     <?php echo $option1; ?>
                                      </select>
                            </div>
                            <canvas id="myLineChart3" width="400" height="200"></canvas>
                            <script>
                            var ctx = document.getElementById('myLineChart3').getContext('2d');
                            var myLineChart2 = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: <?php print json_encode($u_yearP); ?>,
                                    datasets: [{
                                        label: 'Income',
                                        data: <?php print json_encode($u_Project); ?>,
                                        fill: false,
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)'
                                        ]},
                                        ],
                                },
                                options: {
                                  //add
                                }
                            });
                            </script>

                        </div>

                        <!--/.module-->
                        <br />
                        <div class="module">
                            <div class="module-head">
                                <h3>
                                    Pie - Default</h3>
                            </div>

                            // code

                        </div>

                        <!--/.module-->
                        <br />
                        <div class="module">
                            <div class="module-head">
                                <h3>
                                    Pie - Default</h3>
                            </div>

                            // code

                        </div>

                        <!--/.module-->
                        <br />
                        <div class="module">
                            <div class="module-head">
                                <h3>
                                    Pie - Default</h3>
                            </div>

                            // code

                        </div>

                        <!--/.module-->
                        <br />
                        <div class="module">
                            <div class="module-head">
                                <h1></h1>
                            </div>

                            // code

                        </div>

                        <!--/.module-->
                        <br />
                        <div class="module">
                            <div class="module-head">
                                <h3>
                                    Pie - Default</h3>
                            </div>

                            // code

                        </div>

                        <!--/.module-->

                    </div>
                    <!--/.content-->
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
