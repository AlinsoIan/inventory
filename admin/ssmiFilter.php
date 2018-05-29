<?php
session_start();
if (!isset($_SESSION['username'])) {
    $m = "Please Login First";

    echo "<script type='text/javascript'>
    alert('$m');
    window.location.replace('../index.php');
    </script>";
}
if ($_SESSION['type'] == "user") {
    session_destroy();
    $m = "Unauthorized Access";
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
    <title>Reports: SSMI</title>

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
                            <a href="../php/logout.php">
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
                    <a href= "#" onclick = "location.href='dashboard.php'">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href= "#" onclick = "location.href='delivery.php'">
                        <i class="material-icons">event_note</i>
                        <span>Delivery</span>
                    </a>
                </li>


                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">assignment</i>
                        <span>PPMP</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href= "#" onclick = "location.href='ppmp.php'" ><strong>Offices</strong></a>
                        </li>
                        <li>
                            <a href= "#" onclick = "location.href='contingency.php'" ><strong>Contingency</strong></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">assignment</i>
                        <span>Issuance</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href= "#" onclick = "location.href='issuance.php'" ><strong>Offices Supplies</strong></a>
                        </li>
                        <li>
                            <a href= "#" onclick = "location.href='disposal.php'" ><strong>Disposal</strong></a>
                        </li>
                        <li>
                            <a href= "#" onclick = "location.href='pendingIssuance.php'" ><strong>Pending Issuance</strong></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href= "#" onclick = "location.href='returns.php'">
                        <i class="material-icons">event_note</i>
                        <span>Returns</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">assignment</i>
                        <span>Inventory</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="items2.php" data-toggle="tooltip" title="Office Supplies"><strong>Category 1</strong></a>
                        </li>
                        <li>
                            <a href="two2.php" data-toggle="tooltip" title="ink & photocopier consumable"><strong>Category 2</strong></a>
                        </li>
                        <li>
                            <a href="three2.php" data-toggle="tooltip" title="Janitorial Supplies"><strong>Category 3</strong></a>
                        </li>
                        <li>
                            <a href="four2.php" data-toggle="tooltip" title="Office Supplies w/ ICS"><strong>Category 4</strong></a>
                        </li>
                        <li>
                            <a href="five2.php" data-toggle="tooltip" title="Office Supplies w/ ICS ( per PPSAS-FROM PAR TO ICS/ C.O. TO M.O.O.E.)"><strong>Category 5</strong></a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">view_list</i>
                        <span>Reports</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="raos.php" data-toggle='tooltip' title='Reports of Avaialable Office Supplies'><strong>RAOS</strong></a>
                        </li>
                        <li class="active">
                            <a href="ssmi.php" data-toggle='tooltip' title='Summary of Supplies and Materials Issued'><strong>SSMI</strong></a>
                        </li>
                        <li>
                            <a href="stockcard.php"><strong>STOCK CARD</strong></a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">settings</i>
                        <span>Monitor</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="reorder.php">
                                <i class="material-icons">error</i>
                                <span>Re-order</span>
                            </a>
                        </li>
                        <li>
                            <a href="toexpire.php">
                                <i class="material-icons">assignment</i>
                                <span>To-Expire</span>
                            </a>
                        </li>
                        <li>
                            <a href="logs.php">
                                <i class="material-icons">view_list</i>
                                <span>Account Logs</span>
                            </a>
                        </li>
                        <li>
                            <a href="history.php">
                                <i class="material-icons">view_list</i>
                                <span>History</span>
                            </a>
                        </li>
                        <li>
                            <a href="updatehistory.php">
                                <i class="material-icons">view_list</i>
                                <span>Update History</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">settings</i>
                        <span>Manage</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="accounts.php">
                                <i class="material-icons">people</i>
                                <span>Accounts</span>
                            </a>
                        </li>
                        <li>
                            <a href="supplier.php">
                                <i class="material-icons">local_shipping</i>
                                <span>Suppliers</span>
                            </a>
                        </li>
                        <li>
                            <a href="offices.php">
                                <i class="material-icons">location_city</i>
                                <span>Offices</span>
                            </a>
                        </li>
                    </ul>
                </li>

        </div>
        <!-- #Menu -->

    </aside>
    <!-- #END# Left Sidebar -->

</section>
<!-- #END# Left Sidebar -->

<!-- Modal for Add Office -->
<div class="modal col-lg-12" id="addOffice" data-backdrop="static">
    <div class="modal-dialog" style="width:90%;">
        <div class="modal-content">
        </div>
    </div>
</div>

<!-- Modal for Edit Office -->
<div class="modal col-lg-12" id="editOffice" data-backdrop="static">
    <div class="modal-dialog" style="width:100%;">
        <div class="modal-content">
        </div>
    </div>
</div>

<!-- Modal for Delete Office -->
<div class="modal col-lg-12" id="deleteOffice" data-backdrop="static">
    <div class="modal-dialog" style="width:20%;">
        <div class="modal-content">
        </div>
    </div>
</div>


<section class="content">
    <div class="container-fluid">
        <div class="container-fluid">

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 class="text-center">
                                SSMI
                            </h2>
                        </div>
                        <div class="row">
                            <h3 class="header">Filter By Date</h3>
                            <div class="col-md-3">
                                <label>From</label>
                                <?php
                                    $a = $_SESSION['from'];
                                    echo "<input disabled type='text' value='" . $a ."' class = 'form-control' >";
                                ?>
                            </div>
                            <div class="col-md-3">
                                <label>To</label>
                                <?php
                                $a = $_SESSION['to'];
                                echo "<input disabled type='text' value='" . $a ."' class = 'form-control' >";
                                ?>
                            </div>



                        </div>
                        <hr>
                        <div class="modal-header">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Office</label>
                                    <?php
                                    require '../php/db.php';
                                    $a = $_SESSION['of'];

                                    $sql = "SELECT officeName FROM offices WHERE officeID = '$a'";
                                    $res = $conn->query($sql);
                                    $r = $res->fetch_row();

                                    echo "<input type='text' disabled='' value='$r[0]' class='form-control'>";
                                    ?>
                                </div>
                                <div class="col-md-2 pull-right">
                                    <label>Responsibility</label>
                                    <?php
                                    require '../php/db.php';
                                    $a = $_SESSION['of'];

                                    $sql = "SELECT rcCode FROM offices WHERE officeID = '$a'";
                                    $res = $conn->query($sql);
                                    $r = $res->fetch_row();

                                    echo "<input type='text' disabled='' value='$r[0]' class='form-control'>";
                                    ?>
                                </div>
                                <div class="col-md-2 pull-right">
                                    <label>Reorder Point</label>
                                    <?php
                                    require '../php/db.php';
                                    $a = $_SESSION['of'];

                                    $sql = "SELECT fppCode FROM offices WHERE officeID = '$a'";
                                    $res = $conn->query($sql);
                                    $r = $res->fetch_row();

                                    echo "<input type='text' disabled='' value='$r[0]' class='form-control'>";
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table id="ehe" class="table table-bordered table-striped table-hover dataTable js-exportable">

                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>RIS</th>
                                        <th>Category</th>
                                        <th>Item</th>
                                        <th>Quantity Issued</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    require '../php/db.php';

                                    $a = $_SESSION['of'];
                                    $az = $_SESSION['from'];
                                    $ax = $_SESSION['to'];

                                    $sql = "SELECT issuance.issuanceDate AS a,risNo,items.categoryNo AS b,items.description AS c,itemissuance.quantityIssued AS d FROM issuance
                                      JOIN itemissuance ON issuance.issuanceId = itemissuance.issuanceID JOIN items ON itemissuance.itemID = items.itemID WHERE issuance.officeID = '$a'
                                      AND issuanceDate BETWEEN '$az' AND '$ax'";

                                    $res = $conn->query($sql);
                                    if ($res) {
                                        while ($row = $res->fetch_assoc()) {
                                            echo "<tr>" .
                                                "<td>" . $row['a'] . "</td>" .
                                                "<td>" . $row['risNo'] . "</td>" .
                                                "<td>" . $row['b'] . "</td>" .
                                                "<td>" . $row['c'] . "</td>" .
                                                "<td>" . $row['d'] . "</td>" .

                                                "</tr>";
                                        }
                                    }

                                    ?>
                                    <tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
        <div class="modal-footer text-center">
            <a href="../admin/ssmi.php" class="btn btn-danger pull-right">BACK</a>
        </div>


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

<script>
    $(document).ready(function () {
        $('#filter').click(function () {
            $from = $('#from').val();
            $to = $('#to').val();
            $id = $('#id').val();
            $.ajax({
                url: 'filterSSMI.php',
                data: {from: $from,to: $to,id:$id },
                dataType: 'JSON',
                success: function (data) {

                    $('#ehe').empty();
                    $('#ehe').append(data);

                }

            });


        });

    });


</script>

</body>

</html>