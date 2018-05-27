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
    <title>Accounts</title>

    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="../css/a.css" rel="stylesheet" type="text/css">
    <link href="../css/icons.css" rel="stylesheet" type="text/css">
    <link href="../css/icons2.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">


    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet"/>


    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet"/>

</head>

<body class="theme-blue">
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
               data-target="#navbar-collapse" aria-expanded="false"></a>
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
                    <a href="#" onclick="location.href='dashboard.php'">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" onclick="location.href='delivery.php'">
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
                    <a href="#" onclick="location.href='issuance.php'">
                        <i class="material-icons">store_mall_directory</i>
                        <span>Issuance</span>
                    </a>
                </li>
                <li>
                    <a href="#" onclick="location.href='returns.php'">
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
                            <a href="#" onclick="location.href='items2.php'" data-toggle="tooltip" title="Office Supplies"><strong>Category 1</strong></a>
                        </li>
                        <li>
                            <a href="#" onclick="location.href='two2.php'" data-toggle="tooltip" title="ink & photocopier consumable"><strong>Category 2</strong></a>
                        </li>
                        <li>
                            <a href="#" onclick="location.href='three2.php'" data-toggle="tooltip" title="Janitorial Supplies"><strong>Category 3</strong></a>
                        </li>
                        <li>
                            <a href="#" onclick="location.href='four2.php'" data-toggle="tooltip" title="Office Supplies w/ ICS"><strong>Category 4</strong></a>
                        </li>
                        <li>
                            <a href="#" onclick="location.href='five2.php'" data-toggle="tooltip" title="Office Supplies w/ ICS ( per PPSAS-FROM PAR TO ICS/ C.O. TO M.O.O.E.)"><strong>Category 5</strong></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">view_list</i>
                        <span>Reports</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="#" onclick="location.href='raos.php'" data-toggle='tooltip' title='Reports of Avaialable Office Supplies'><strong>RAOS</strong></a>
                        </li>
                        <li>
                            <a href="#" onclick="location.href='ssmi.php'" data-toggle='tooltip' title='Summary of Supplies and Materials Issued'><strong>SSMI</strong></a>
                        </li>
                        <li>
                            <a href="#" onclick="location.href='stockcard.php'"><strong>STOCK CARD</strong></a>
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
                            <a href = "#" onclick="location.href='reorder.php'">
                                <i class="material-icons">error</i>
                                <span>Re-order</span>
                            </a>
                        </li>
                        <li>
                            <a href = "#" onclick="location.href='toexpire.php'">
                                <i class="material-icons">assignment</i>
                                <span>To-Expire</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="location.href='logs.php'">
                                <i class="material-icons">view_list</i>
                                <span>Account Logs</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="locaiton.href='history.php'>
                                <i class="material-icons">view_list</i>
                                <span>History</span>
                            </a>
                        </li>
                        <li>
                            <a href = "#" onclick="location.href='updatehistory.php'">
                                <i class="material-icons">view_list</i>
                                <span>Update History</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">settings</i>
                        <span>Manage</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="active">
                            <a href="#" onclick="location.href='accounts.php'">
                                <i class="material-icons">people</i>
                                <span>Accounts</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" onclick="locaiton.href='supplier.php'">
                                <i class="material-icons">local_shipping</i>
                                <span>Suppliers</span>
                            </a>
                        </li>
                        <li>
                            <a href = "#" onclick="location.href='offices.php'">
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

<!-- Modal for Add Account -->
<div class="modal col-lg-12" id="add_account" data-backdrop="static">
    <div class="modal-dialog" style="width:80%;">
        <div class="modal-content">
        </div>
    </div>
</div>

<!-- Modal for Edit Account -->
<div class="modal col-lg-12" id="edit_account" data-backdrop="static">
    <div class="modal-dialog" style="width:80%;">
        <div class="modal-content">
        </div>
    </div>
</div>

<!-- Modal for Delete Account -->
<div class="modal col-lg-12" id="del_account" data-backdrop="static">
    <div class="modal-dialog" style="width:20%;">
        <div class="modal-content">
        </div>
    </div>
</div>


<section class="content">
    <div class="container-fluid">
        <!-- Basic Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2 class="text-center">ACTIVE ACCOUNTS</h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>User Type</th>
                                <th>    </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            require '../php/db.php';
                            $sql = "SELECT * FROM accounts WHERE status = 'active'";
                            $res = $conn->query($sql);

                            if ($res) {
                                while ($row = $res->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . strtoupper($row['firstName'] . " " . $row['lastName']) . "</td>";
                                    echo "<td>" . $row['userName'] . "</td>";
                                    echo "<td>" . $row['password'] . "</td>";
                                    echo "<td>" . $row['userType'] . "</td>";
                                    echo "<td>" . "<a href=" . '../php/admin/modal/editAccount.php?num=' . $row['accountID'] . "  " . " class='material-icons' data-toggle='modal' data-target='#edit_account'>mode_edit</a>" . "    " . "<a href=" . '../php/admin/modal/disableAccount.php?num=' . $row['accountID'] . " " . " class='material-icons' data-toggle='modal' data-target='#del_account'>remove</a>" . "</td>";
                                    echo "</tr>";
                                }
                            }

                            ?>
                            </tbody>
                        </table>
                        <a href= "#" onclick = "location.href='../php/admin/modal/addAccount.php'" class="btn btn-primary pull-right"
                           data-toggle="modal" data-target="#add_account">Add Account</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Table -->


        <!-- Basic Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2 class="text-center">INACTIVE ACCOUNTS</h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>User Type</th>
                                <th>Settings</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            require '../php/db.php';
                            $sql = "SELECT * FROM accounts WHERE status = 'inactive'";
                            $res = $conn->query($sql);

                            if ($res) {
                                while ($row = $res->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . strtoupper($row['firstName'] . " " . $row['lastName']) . "</td>";
                                    echo "<td>" . $row['userName'] . "</td>";
                                    echo "<td>" . $row['password'] . "</td>";
                                    echo "<td>" . $row['userType'] . "</td>";
                                    echo "<td>" . "<a href=" . '../php/admin/modal/editAccount.php?num=' . $row['accountID'] . "  " . " class='material-icons' data-toggle='modal' data-target='#edit_account'>mode_edit</a>" . "    " . "<a href=" . '../php/admin/modal/enableAccount.php?num=' . $row['accountID'] . " " . " class='material-icons' data-toggle='modal' data-target='#del_account'>add</a>" . "</td>";
                                    echo "</tr>";
                                }
                            }

                            ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
</section>


<!-- Jquery Core Js -->
<script src="../plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="../plugins/bootstrap/js/bootstrap.js"></script>


<!-- Waves Effect Plugin Js -->
<script src="../plugins/node-waves/waves.js"></script>

<!-- Sparkline Plugin Js -->
<script src="../plugins/jquery-sparkline/jquery.sparkline.js"></script>

<!-- Custom Js -->
<script src="../js/admin.js"></script>
<script src="../js/pages/charts/sparkline.js"></script>


</body>

</html>