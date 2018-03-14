<?php
session_start();
if(!isset($_SESSION['username'])){
    $m="Please Login First";

    echo "<script type='text/javascript'>
    alert('$m');
    window.location.replace('../index.html');
    </script>";
}
if($_SESSION['type'] == "admin"){
    session_destroy();
    $m="Unauthorized Access";
    echo "<script type='text/javascript'>
    alert('$m');
    window.location.replace('../index.html');
    </script>";
}
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Dashboard</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-blue">


<!-- Top Bar -->
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->

<!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="dashboard.php"><h4>General Services Office</h4></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../php/logout.php">
                        <h4>Logout</h4>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header"><h3>
                                        <?php
                echo strtoupper($_SESSION['username']);

                ?>
                    </h3>
                </li>

                <li class="active">
                    <a href="dashboard.php">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="issuance.php">
                        <i class="material-icons">store_mall_directory</i>
                        <span>Issuance</span>
                    </a>
                </li>

                <li>
                    <a href="iar.php">
                        <i class="material-icons">event_note</i>
                        <span>IAR</span>
                    </a>
                </li>
                
               <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">view_list</i>
                        <span>Reports</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="raos.php"><strong>RAOS</strong></a>
                        </li>
                        <li>
                            <a href="rosi.php"><strong>ROSI</strong></a>
                        </li>
                        <li>
                            <a href="ssmi.php"><strong>SSMI</strong></a>
                        </li>
                        <li>
                            <a href="stockcard.php"><strong>STOCK CARD</strong></a>
                        </li>
                    </ul>
                </li>

			</ul>


        </div>
        <!-- #Menu -->

    </aside>
    <!-- #END# Left Sidebar -->

</section>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
        </div>
        <div class="row clearfix">

            <!-- Bar Chart -->
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2 class="text-center">ISSUANCES</h2>
                    </div>
                    <div class="body">
                        <div class="sparkline" data-type="bar" data-width="100%" data-height="150px" data-bar-Width="60" data-bar-Spacing="20" data-bar-Color="rgb(100, 115, 130)">
                            1,2,3,4,5,6,7,8,9,10,11,12
                        </div>

                    </div>

                    <pre>    JAN         FEB        MAR       APRIL        MAY       JUNE       JULY       AUG         SEPT       OCT         NOV        DEC</pre>
                </div>
            </div>
            <!-- #END# Bar Chart -->

            <!-- #END# Pie Chart -->
        </div>
        <!-- Widgets -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan hover-expand-effect">
                    <div class="icon">
                        <a href="../user/issuance.php">
                        <i class="material-icons">store_mall_directory</i>
                        </a>
                    </div>
                    <div class="content">
                        <div class="text">ISSUANCE</div>
                        <?php

                        require '../php/db.php';
                        $sql = "SELECT COUNT(id) FROM issuance";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();

                        echo "<div class='number count-to' data-from='0' data-to='$r[0]' data-speed='15' data-fresh-interval='20'>" . $r[0] . "</div>";
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan hover-expand-effect">
                    <div class="icon">
                        <a href="../user/iar.php">
                        <i class="material-icons">event_note</i>
                        </a>
                    </div>
                    <div class="content">
                        <div class="text">IAR</div>
                        <?php

                        require '../php/db.php';
                        $sql = "SELECT COUNT(id) FROM suppliers";
                        $res = $conn->query($sql);
                        $r = $res->fetch_row();

                        echo "<div class='number count-to' data-from='0' data-to='$r[0]'' data-speed='15' data-fresh-interval='20'>" . $r[0] . "</div>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <!-- Task Info -->

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>TRANSACTIONS</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover dashboard-task-infos">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Login</th>
                                    <th>Type</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Task Info -->
        </div>

    </div>
</section>

<!-- Jquery Core Js -->
<script src="../plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="../plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="../plugins/node-waves/waves.js"></script>

<!-- Sparkline Plugin Js -->
<script src="../plugins/jquery-sparkline/jquery.sparkline.js"></script>

<!-- Custom Js -->
<script src="../js/admin.js"></script>
<script src="../js/pages/charts/sparkline.js"></script>

<!-- Demo Js -->
<script src="../js/demo.js"></script>

</body>

</html>