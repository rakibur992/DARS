
<!DOCTYPE html>
<html lang="en">


<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forms</title>
  <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
  <link type="text/css" href="css/theme.css" rel="stylesheet">
  <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
  <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>

<body>

  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
          <i class="icon-reorder shaded"></i>
        </a>

        <a class="brand" href="home.php">
          DARS
        </a>

        <div class="nav-collapse collapse navbar-inverse-collapse">
          <ul class="nav nav-icons">

            <li><a href="charts.php">
                <i class="icon-bar-chart"></i>
              </a></li>
          </ul>

          <form class="navbar-search pull-left input-append" action="#">
            <input type="text" class="span3">
            <button class="btn" type="button">
              <i class="icon-search"></i>
            </button>
          </form>

          <ul class="nav pull-right">

            <li class="nav-user dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="images/user.png" class="nav-avatar" />
                <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Your Profile</a></li>
                <li><a href="#">Edit Profile</a></li>
                <li><a href="#">Account Settings</a></li>
                <li class="divider"></li>
                <li><a href="index.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->



  <div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="span3">
          <div class="sidebar">

            <ul class="widget widget-menu unstyled">
              <li class="active">
                <a href="home.php">
                  <i class="menu-icon icon-dashboard"></i>
                  Dashboard
                </a>
              </li>

            </ul>
            <!--/.widget-nav-->

            <ul class="widget widget-menu unstyled">

              <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-paste">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Information Input</a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="UniversityInfo.php"><i class="menu-icon icon-paste"></i>University Information </a></li>
                                        <li><a href="TeacherInfo.php"><i class="menu-icon icon-paste"></i>Teacher Distribution </a><li><a href="StudentInfo.php"><i class="menu-icon icon-paste"></i>Student Distribution </a></li>
                                        <li><a href="ResearchPublications.php"><i class="menu-icon icon-paste"></i>Research and Publications </a></li>
                                        <li><a href="Finances.php"><i class="menu-icon icon-paste"></i>Finances </a></li>
                                        <li><a href="Courses.php"><i class="menu-icon icon-paste"></i>Subjects </a></li>
                                    </ul>
                            </li>
              <!-- <li><a href="table.php"><i class="menu-icon icon-table"></i>Tables </a></li> -->
              <li><a href="charts.php"><i class="menu-icon icon-bar-chart"></i>Graphical Representation </a></li>

            </ul>
            <!--/.widget-nav-->

            <ul class="widget widget-menu unstyled">

              </li>

              <li>
                <a href="index.php">
                  <i class="menu-icon icon-signout"></i>
                  Logout
                </a>
              </li>
            </ul>

          </div>
          <!--/.sidebar-->
        </div>
        <!--/.span3-->


        <div class="span9">
          <div class="content">

            <div class="module">
              <div class="module-head">
                <h3>Research and Publications</h3>
              </div>
              <div class="module-body">

                <br />

                <form class="form-horizontal row-fluid" action="R&PSQL.php" method="post">

                  <div class="control-group">
                    <label class="control-label" for="basicinput">Year</label>
                    <div class="controls">
                      <div class="input-append">
                        <input type="text" name="Year" placeholder="2018" id="RPyear"class="span8">
                      </div>
                    </div>
                  </div>


                  <div class="control-group">
                    <label class="control-label" for="basicinput">Total Number of Research Journal</label>
                    <div class="controls">
                      <div class="input-append">
                        <input type="text" name="ResearchJournals" placeholder="" id="noofRP"class="span8">
                      </div>
                    </div>
                  </div>

                 <div class="control-group">
                    <label class="control-label" for="basicinput">Total Number of Research Project Completed</label>
                    <div class="controls">
                      <div class="input-append">
                        <input type="text" name="ResearchProjectCompleted" placeholder="" id="RPCom"class="span8">
                      </div>
                    </div>
                  </div>

                 <div class="control-group">
                    <label class="control-label" for="basicinput">Total Number of Foreign Journals Published</label>
                    <div class="controls">
                      <div class="input-append">
                        <input type="text" name="ForeignJournals" placeholder=""id="forRPpub" class="span8">
                      </div>
                    </div>
                  </div>

                 <div class="control-group">
                    <label class="control-label" for="basicinput">Total Number of Local Journals Published</label>
                    <div class="controls">
                      <div class="input-append">
                        <input type="text" name="LocalJournals" placeholder="" id="locRPpub"class="span8">
                      </div>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="basicinput">Total Number of Peer Reviewed Journals Published</label>
                    <div class="controls">
                      <div class="input-append">
                        <input type="text" name="ReviewedJournals" placeholder="" id="noofPRPpub" class="span8">
                      </div>
                    </div>
                  </div>

                  <!-- <div class="control-group">
                    <label class="control-label" for="basicinput">Total Number of Assistant Professors</label>
                    <div class="controls">
                      <div class="input-append">
                        <input type="text" name="AsProfessors" placeholder="" class="span8">
                      </div>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="basicinput">Total Number of Lecturers</label>
                    <div class="controls">
                      <div class="input-append">
                        <input type="text" name="Lecturers" placeholder="" class="span8">
                      </div>
                    </div>
                  </div> -->

                 <!--  <div class="control-group">
                    <label class="control-label" for="basicinput">University Physical Structure Rented</label>
                    <div class="controls">
                      <div class="input-append">
                        <input type="text" placeholder="5.000" class="span8"><span class="add-on">Acre</span>
                      </div>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="basicinput">Number of Schools</label>
                    <div class="controls">
                      <input type="text" id="basicinput" placeholder="Digits" class="span8">
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="basicinput">Number of Departments</label>
                    <div class="controls">
                      <input type="text" id="basicinput" placeholder="Digits" class="span8">
                    </div>
                  </div> -->

                  <!-- <div class="control-group">
                    <label class="control-label">Inline Checkboxes</label>
                    <div class="controls">
                      <label class="checkbox inline">
                        <input type="checkbox" value="">
                        Option one
                      </label>
                      <label class="checkbox inline">
                        <input type="checkbox" value="">
                        Option two
                      </label>
                      <label class="checkbox inline">
                        <input type="checkbox" value="">
                        Option three
                      </label>
                    </div>
                  </div> -->
<!--
                  <div class="control-group">
                    <label class="control-label" for="basicinput">Textarea</label>
                    <div class="controls">
                      <textarea class="span8" rows="5"></textarea>
                    </div>
                  </div> -->

                  <div class="control-group">
                    <br />
                    <div class="controls">
                      <button type="submit" class="btn">Submit Form</button>
                    </div>
                    <br/>
                  </div>
                </form>
              </div>
            </div>





          </div>
          <!--/.content-->
        </div>
        <!--/.span9-->
      </div>
    </div>
    <!--/.container-->
  </div>
  <!--/.wrapper-->
  <div class="footer">
    <div class="container">


      <b class="copyright">&copy; 2019 DARS </b> All rights reserved.
    </div>
  </div>

  <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>
