<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Issuance</title>

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

    <!-- JQuery DataTable Css -->
    <link href="../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-blue">
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

                <a class="navbar-brand" href="issuance.php">
                <?php
                session_start();
                echo strtoupper($_SESSION['username']);

                ?>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right pull-right">



                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">format_align_justify</i>
                        </a>
                        <ul class="dropdown-menu">

                                    <li>
                                        <a href="../php/logout.php">
                                                <h4>Logout</h4>
                                        </a>
                                    </li>


                        </ul>
                    </li>
                    <!-- #END# Notifications -->

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

                    <li>
                        <a href="dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="accounts.php">
                            <i class="material-icons">people</i>
                            <span>Accounts</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="issuance.php">
                            <i class="material-icons">store_mall_directory</i>
                            <span>Issuance</span>
                        </a>
                    </li>
                    <li>
                        <a href="reorder.php">
                            <i class="material-icons">error</i>
                            <span>Re-order</span>
                        </a>
                    </li>
                    <li>
                        <a href="supplier.php">
                            <i class="material-icons">local_shipping</i>
                            <span>Suppliers</span>
                        </a>
                    </li>
                    <li>
                        <a href="ppmp.php">
                            <i class="material-icons">event_note</i>
                            <span>PPMP</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Items</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="items.php"><strong>Category 1</strong></a>
                            </li>
                            <li>
                                <a href="two.php"><strong>Category 2</strong></a>
                            </li>
                            <li>
                                <a href="three.php"><strong>Category 3</strong></a>
                            </li>
                            <li>
                                <a href="four.php"><strong>Category 4</strong></a>
                            </li>
                            <li>
                                <a href="five.php"><strong>Category 5</strong></a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="returns.php">
                            <i class="material-icons">event_note</i>
                            <span>Returns</span>
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

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">pie_chart</i>
                            <span>Settings</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="offices.php">Offices</a>
                            </li>
                            <li>
                                <a href="charts/flot.html">Flot</a>
                            </li>
                            <li>
                                <a href="charts/chartjs.html">ChartJS</a>
                            </li>
                            <li>
                                <a href="charts/sparkline.html">Sparkline</a>
                            </li>
                            <li>
                                <a href="charts/jquery-knob.html">Jquery Knob</a>
                            </li>
                        </ul>
                    </li>


            </div>
            <!-- #Menu -->

        </aside>
        <!-- #END# Left Sidebar -->

    </section>
        <!-- #END# Left Sidebar -->

        <!-- Modal for Add Issuance -->
        <div class="modal col-lg-12" id="addIssuance" data-backdrop="static">
            <div class="modal-dialog" style="width:90%;">
                <div class="modal-content">
                </div>
            </div>
        </div>

        <!-- Modal for Edit Issuance -->
    <div class="modal col-lg-12" id="editIssuance" data-backdrop="static">
        <div class="modal-dialog" style="width:100%;">
            <div class="modal-content">
            </div>
        </div>
    </div>

    <!-- Modal for Delete Issuance -->
    <div class="modal col-lg-12" id="deleteIssuance" data-backdrop="static">
        <div class="modal-dialog" style="width:20%;">
            <div class="modal-content">
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 ">
                    <div class="card">
                        <div class="header">
                            <h2 class="text-center">ISSUANCE</h2>
                            <div class="dropdown show">
                                <a href="issuance.php" class="btn btn-secondary" >
                                    PENDING
                                </a>
                                <a href="issuanceApproved.php" class="btn btn-secondary" >
                                    APPROVED
                                </a>


                            </div>
                        </div>
                        <div class="body">
                            <div class="body table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Division</th>
                                            <th>Office</th>
                                            <th>Responsibility Center</th>
                                            <th>Date/Time</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Process</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                        $conn = new mysqli("localhost","root","","inventory");
                                        if(!$conn){
                                            echo "Error Connecting to database !" . $conn->error;
                                        }

                                        $_SESSION['temp'] =  basename($_SERVER['PHP_SELF']);

                                        $sql = "SELECT * FROM issuance WHERE status = 'pending'";
                                        $res = $conn->query($sql);

                                        if($res){
                                            while($row = $res->fetch_assoc()){
                                                echo "<tr>"
                                                    . "<td>" . $row['division'] ."</td>"
                                                    . "<td>" . $row['office'] ."</td>"
                                                    . "<td>" . $row['responsibility'] ."</td>"
                                                    . "<td>" . $row['dateT'] ."</td>"
                                                    . "<td>" . $row['typeT'] ."</td>"
                                                    . "<td>" . $row['status'] .  "</td>" 

                                                    . "<td>" . "<a href=" .'../php/admin/modal/viewIssuance.php?num=' .$row['id'] . "  " . " class='material-icons' data-toggle='modal' data-target='#editIssuance'>mode_edit</a>" . "  ||  " . "<a href=" .'../php/admin/modal/issueDelete.php?num=' .$row['id'] . " " . " class='material-icons' data-toggle='modal' data-target='#deleteIssuance'>delete</a>" . "</td>";
                                                echo "</tr>";
                                            }

                                        }

                                    ?>
                                    </tbody>
                                </table>
                                <h2 class="title pull-left">
                                    <?php

                                    require '../php/db.php';
                                    $sql = "SELECT COUNT(id) FROM issuance";
                                    $res = $conn->query($sql);
                                    $r = $res->fetch_row();

                                    echo "Total Issuance : " . $r[0];
                                    ?>
                                </h2>

                                <a href="../php/admin/modal/addNewIssuance.php" class="btn btn-primary pull-right" data-toggle="modal" data-target="#editIssuance">Add Issuance</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/tables/jquery-datatable.js"></script>

    <script src="../js/custom.js"></script>



</body>

</html>