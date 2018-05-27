<?php
session_start();
if(!isset($_SESSION['username'])){
    $m="Please Login First";

    echo "<script type='text/javascript'>
    alert('$m');
    window.location.replace('../index.php');
    </script>";
}
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Issuance</title>

    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="../css/a.css" rel="stylesheet" type="text/css">
    <link href="../css/icons.css" rel="stylesheet" type="text/css">
    <link href="../css/icons2.css" rel="stylesheet" type="text/css">

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
<!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand"><h4>General Services Office</h4></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                </li>
                    <li>
                        <a class="navbar-brand">
                            <h4>
                                <?php
                                    echo strtoupper($_SESSION['username']);
                                ?>
                            </h4>
                        </a>
                        <!-- Example single danger button -->
                        <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="material-icons">account_circle</i>
                    </a>
                    <ul class="dropdown-menu">

                        <li>
                            <a href="#" onclick="location.href='../php/logout.php'">
                                <h4>Logout</h4>
                            </a>
                        </li>


                    </ul>
                        

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
                	 <li>
                        <a href="#" onclick="location.href='delivery.php'">
                            <i class="material-icons">store_mall_directory</i>
                            <span>Delivery</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Issuance</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
                                <a href= "#" onclick = "location.href='issuance.php'" ><strong>Offices Supplies</strong></a>
                            </li>
                            <li>
                                <a href= "#" onclick = "location.href='disposal.php'" ><strong>Disposal</strong></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onclick="location.href='returns.php'">
                            <i class="material-icons">event_note</i>
                            <span>Returns</span>
                        </a>
                    </li>
                    <li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Inventory</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                            <a href="#" onclick="location.href='items2.php'" data-toggle="tooltip" title="Office Supplies"><strong>Category 1</strong></a>
                        </li>
                        <li>
                            <a href="#" onclick="location.href='two2.php'" data-toggle="tooltip" title="Ink & Photocopier Consumable"><strong>Category 2</strong></a>
                        </li>
                        <li>
                            <a href="#" onclick="location.href='three2.php'" data-toggle="tooltip" title="Janitorial Supplies"><strong>Category 3</strong></a>
                        </li>
                        <li>
                            <a href="#" onclick="location.href='four2.php'" data-toggle="tooltip" title="Office Supplies w/ ICS"><strong>Category 4</strong></a>
                        </li>
                        <li>
                            <a href="#" onclick="location.href='five2.php'" data-toggle="tooltip" title="Office Supplies w/ ICS (per PPSAS-FROM PAR TO ICS/ C.O. TO M.O.O.E.)"><strong>Category 5</strong></a>
                        </li>
                            </li>
                        </ul>
                    </li>


                    

                </ul>

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
                            <h2 class="text-center">ISSUANCES</h2>
                        </div>
                        <div class="body">
                            <div class="body table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Division</th>
                                            <th>Office</th>
                                            <th>Date and Time</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                        require '../php/db.php';
                                        $a =$_SESSION['user'];
                                        $_SESSION['temp'] =  basename($_SERVER['PHP_SELF']);

                                        $sql = "SELECT division,offices.officeName,issuanceDate,issuanceTime,status,issuanceID as idd FROM issuance JOIN offices ON issuance.officeID = offices.officeID 
                                        WHERE issuance.accountID = '$a'";
                                        $res = $conn->query($sql);

                                        if($res){
                                            while($row = $res->fetch_assoc()){
                                                echo "<tr>"
                                                    . "<td>" . $row['division'] ."</td>"
                                                    . "<td>" . $row['officeName'] ."</td>"
                                                    . "<td>" . $row['issuanceDate'] . $row['issuanceTime'] ."</td>"
                                                    . "<td>" . $row['status'] ."</td>"

                                                    . "<td>" . "<a href=" .'../php/user/modal/viewIssuance.php?num=' .$row['idd'] . "  " . " class='material-icons' data-toggle='modal' data-target='#editIssuance'>visibility</a>" . "    " . "<a href=" .'../php/user/modal/issueDelete.php?num=' .$row['idd'] . " " . " class='material-icons' data-toggle='modal' data-target='#deleteIssuance'>delete</a>" . "</td>";
                                                echo "</tr>";
                                            }

                                        }

                                    ?>
                                    </tbody>
                                </table>

                                <a href="../php/user/modal/addNewIssuance.php" class="btn btn-primary pull-right" data-toggle="modal" data-target="#editIssuance">Add Issuance</a>
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