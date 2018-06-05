<?php
/**
 * Created by PhpStorm.
 * User: Carfin
 * Date: 23/08/2016
 * Time: 11.43
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Baby Pi Care Administration System</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="css/red.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="css/skins/skin-red.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<!-- ADD THE CLASS sidedar-collapse TO HIDE THE SIDEBAR PRIOR TO LOADING THE SITE -->
<body class="layout-boxed skin-red sidebar-collapse sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>B</b>PC</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Baby</b> Pi-Care</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">Admin Baby Pi-Care</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    Alexander Pierce - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Admin Baby Pi-Care</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-image"></i> <span>Gallery</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-pie-chart"></i> <span>Chart</span>
                    </a>
                </li>
                <li class="header">SETTINGS</li>
                <li>
                    <a href="#">
                        <i class="fa fa-users"></i> <span>Officials</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-gears"></i> <span>Config</span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Main Menu</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="callout callout-info">
                        <h4>Info!</h4>
                        <p>This website is under construction.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="box box-solid">
                        <div class="box-header">
                            <i class="fa fa-bar-chart-o"></i>

                            <h3 class="box-title">Humidity Level</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <input type="text" class="knob" id="txtHumidityLevel" value="55" data-skin="tron" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125" data-width="180" data-height="180" data-fgColor="#00a65a" data-readonly="true">

                                    <div class="knob-label">data-angleArc="250"</div>
                                </div>
                                <!-- ./col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            Latest update: <strong>09:11PM</strong>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="box box-solid">
                        <div class="box-header">
                            <i class="fa fa-line-chart"></i>

                            <h3 class="box-title">Room's Temperature</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <input type="text" class="knob" id="txtHumidityLevel" value="25" data-min="0" data-max="100" data-skin="tron" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125" data-width="180" data-height="180" data-fgColor="#3c8dbc" data-readonly="true">

                                    <div class="knob-label">data-angleArc="250"</div>
                                </div>
                                <!-- ./col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            Latest update: <strong>09:11PM</strong>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="box box-solid">
                        <div class="box-header">
                            <i class="fa fa-area-chart"></i>

                            <h3 class="box-title">Area Chart</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="chart">
                                <canvas id="areaChart" style="height:250px"></canvas>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">Select a playlist to play musics</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table no-margin">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Opt</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>#1</td>
                                        <td>Lullaby Song</td>
                                        <td><span class="label label-danger" data-playlist="1">Stopped</span></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="submit" data-playlist="1" class="btn btn-success btn-xs" name="btnPlay"><i class="fa fa-play"></i> Play</button>
                                                <button type="submit" data-playlist="1" class="btn btn-danger btn-xs disabled" name="btnStop"><i class="fa fa-stop"></i> Stop</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#2</td>
                                        <td>Lullaby Song</td>
                                        <td><span class="label label-danger" data-playlist="2">Stopped</span></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" data-playlist="2" class="btn btn-success btn-xs" name="btnPlay"><i class="fa fa-play"></i> Play</button>
                                                <button type="button" data-playlist="2" class="btn btn-danger btn-xs disabled" name="btnStop"><i class="fa fa-stop"></i> Stop</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#3</td>
                                        <td>Lullaby Song</td>
                                        <td><span class="label label-danger" data-playlist="3">Stopped</span></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" data-playlist="3" class="btn btn-success btn-xs" name="btnPlay"><i class="fa fa-play"></i> Play</button>
                                                <button type="button" data-playlist="3" class="btn btn-danger btn-xs disabled" name="btnStop"><i class="fa fa-stop"></i> Stop</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#4</td>
                                        <td>Lullaby Song</td>
                                        <td><span class="label label-danger" data-playlist="4">Stopped</span></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" data-playlist="4" class="btn btn-success btn-xs" name="btnPlay"><i class="fa fa-play"></i> Play</button>
                                                <button type="button" data-playlist="4" class="btn btn-danger btn-xs disabled" name="btnStop"><i class="fa fa-stop"></i> Stop</button>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <label>
                                <input type="checkbox" class="minimal" id="autostopmusic" checked="true"">
                                Auto stop music when the babies is sleeping.
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title">Latest Captured Image</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            Under Construction
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.6
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-yellow"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input type="checkbox" class="pull-right">
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="js/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="js/fastclick.min.js"></script>
<!-- iCheck -->
<script src="js/icheck.min.js"></script>
<!-- knob -->
<script src="js/jquery.knob.min.js"></script>
<!-- knob -->
<script src="js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>

<script>
    $(function () {
        //Red color scheme for iCheck
        $('#autostopmusic').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        });

        /* jQueryKnob */

        $(".knob").knob({
            /*change : function (value) {
             //console.log("change : " + value);
             },
             release : function (value) {
             console.log("release : " + value);
             },
             cancel : function () {
             console.log("cancel : " + this.value);
             },*/
            draw: function () {

                // "tron" case
                if (this.$.data('skin') == 'tron') {

                    var a = this.angle(this.cv)  // Angle
                        , sa = this.startAngle          // Previous start angle
                        , sat = this.startAngle         // Start angle
                        , ea                            // Previous end angle
                        , eat = sat + a                 // End angle
                        , r = true;

                    this.g.lineWidth = this.lineWidth;

                    this.o.cursor
                    && (sat = eat - 0.3)
                    && (eat = eat + 0.3);

                    if (this.o.displayPrevious) {
                        ea = this.startAngle + this.angle(this.value);
                        this.o.cursor
                        && (sa = ea - 0.3)
                        && (ea = ea + 0.3);
                        this.g.beginPath();
                        this.g.strokeStyle = this.previousColor;
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                        this.g.stroke();
                    }

                    this.g.beginPath();
                    this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
                    this.g.stroke();

                    this.g.lineWidth = 2;
                    this.g.beginPath();
                    this.g.strokeStyle = this.o.fgColor;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                    this.g.stroke();

                    return false;
                }
            }
        });
        /* END JQUERY KNOB */

        //--------------
        //- AREA CHART -
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
        // This will get the first returned node in the jQuery collection.
        var areaChart = new Chart(areaChartCanvas);

        var areaChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "Electronics",
                    fillColor: "rgba(210, 214, 222, 1)",
                    strokeColor: "rgba(210, 214, 222, 1)",
                    pointColor: "rgba(210, 214, 222, 1)",
                    pointStrokeColor: "#c1c7d1",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [65, 59, 80, 81, 56, 55, 40]
                },
                {
                    label: "Digital Goods",
                    fillColor: "rgba(60,141,188,0.9)",
                    strokeColor: "rgba(60,141,188,0.8)",
                    pointColor: "#3b8bba",
                    pointStrokeColor: "rgba(60,141,188,1)",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(60,141,188,1)",
                    data: [28, 48, 40, 19, 86, 27, 90]
                }
            ]
        };

        var areaChartOptions = {
            //Boolean - If we should show the scale at all
            showScale: true,
            //Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines: false,
            //String - Colour of the grid lines
            scaleGridLineColor: "rgba(0,0,0,.05)",
            //Number - Width of the grid lines
            scaleGridLineWidth: 1,
            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            //Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines: true,
            //Boolean - Whether the line is curved between points
            bezierCurve: true,
            //Number - Tension of the bezier curve between points
            bezierCurveTension: 0.3,
            //Boolean - Whether to show a dot for each point
            pointDot: false,
            //Number - Radius of each point dot in pixels
            pointDotRadius: 4,
            //Number - Pixel width of point dot stroke
            pointDotStrokeWidth: 1,
            //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
            pointHitDetectionRadius: 20,
            //Boolean - Whether to show a stroke for datasets
            datasetStroke: true,
            //Number - Pixel width of dataset stroke
            datasetStrokeWidth: 2,
            //Boolean - Whether to fill the dataset with a color
            datasetFill: true,
            //String - A legend template
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
            //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            maintainAspectRatio: true,
            //Boolean - whether to make the chart responsive to window resizing
            responsive: true
        };

        //Create the line chart
        areaChart.Line(areaChartData, areaChartOptions);

        //SKRIP UTK PLAYLIST
        $("button[name='btnPlay']").click(function(){
            //alert($(this).data("playlist"));
            var PlaylistId = $(this).data("playlist");
            $.get("proses.php?playlist=" + PlaylistId + "&act=play&autostop=", function(data, status){
                $("button[name='btnStop'][data-playlist='" + PlaylistId + "']").removeClass("disabled");
                $("button[name='btnPlay'][data-playlist='" + PlaylistId + "']").addClass("disabled");

                $("span[data-playlist='" + PlaylistId + "']").html("Playing");
                $("span[data-playlist='" + PlaylistId + "']").removeClass("label-danger");
                $("span[data-playlist='" + PlaylistId + "']").addClass("label-success");
            }).fail( function () {
                alert("Server error");
            });
        });

        $("button[name='btnStop']").click(function(){
            //alert($(this).data("playlist"));
            var PlaylistId = $(this).data("playlist");
            $.get("proses.php?playlist=" + PlaylistId + "&act=stop&autostop=", function(data){
                $("button[name='btnPlay'][data-playlist='" + PlaylistId + "']").removeClass("disabled");
                $("button[name='btnStop'][data-playlist='" + PlaylistId + "']").addClass("disabled");

                $("span[data-playlist='" + PlaylistId + "']").html("Stopped");
                $("span[data-playlist='" + PlaylistId + "']").removeClass("label-success");
                $("span[data-playlist='" + PlaylistId + "']").addClass("label-danger");
            }).fail( function () {
                alert("Server error");
            });
        });

    })
</script>
</body>
</html>

