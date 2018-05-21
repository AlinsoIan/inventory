<?php
session_start();
if(!isset($_SESSION['username'])){
    $m="Please Login First";

    echo "<script type='text/javascript'>
    alert('$m');
    window.location.replace('index.php');
      </script>";
}
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Items: Category 5</title>

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
                        <a href="delivery.php">
                            <i class="material-icons">event_note</i>
                            <span>Delivery</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="issuance.php">
                            <i class="material-icons">store_mall_directory</i>
                            <span>Issuance</span>
                        </a>
                    </li>
                    <li>
                        <a href="returns.php">
                            <i class="material-icons">event_note</i>
                            <span>Returns</span>
                        </a>
                    </li>
                    <li class="active">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">assignment</i>
                        <span>Inventory</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="items2.php" data-toggle="tooltip" title="Office Supplies"><strong>Category 1</strong></a>
                        </li>
                        <li>
                            <a href="two2.php" data-toggle="tooltip" title="Ink & Photocopier Consumable"><strong>Category 2</strong></a>
                        </li>
                        <li>
                            <a href="three2.php" data-toggle="tooltip" title="Janitorial Supplies"><strong>Category 3</strong></a>
                        </li>
                        <li>
                            <a href="four2.php" data-toggle="tooltip" title="Office Supplies w/ ICS"><strong>Category 4</strong></a>
                        </li>
                        <li  class="active">
                            <a href="five2.php" data-toggle="tooltip" title="Office Supplies w/ ICS (per PPSAS-FROM PAR TO ICS/ C.O. TO M.O.O.E.)"><strong>Category 5</strong></a>
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
                            <a href="raos.php" data-toggle="tooltip" title="Reports of Available Office Supply""><strong>RAOS</strong></a>
                        </li>
                        <li>
                            <a href="ssmi.php" data-toggle="tooltip" title="Summary of Supplies and Material Issued"><strong>SSMI</strong></a>
                        </li>
                        <li>
                            <a href="stockcard.php"><strong>STOCK CARD</strong></a>
                        </li>
                        </ul>
                    </li>
                    


            </div>
            <!-- #Menu -->

        </aside>
        <!-- #END# Left Sidebar -->

    <!-- Modal for Add Item -->
        <div class="modal col-lg-12" id="addItem" data-backdrop="static">
            <div class="modal-dialog" style="width:99%;">
                <div class="modal-content">
                </div>
            </div>
        </div>

    <!-- Modal for Edit Items -->
    <div class="modal col-lg-12" id="editItems" data-backdrop="static">
        <div class="modal-dialog" style="width:100%;">
            <div class="modal-content">
            </div>
        </div>
    </div>

    <!-- Modal for Delete Items -->
    <div class="modal col-lg-12" id="deleteItem" data-backdrop="static">
        <div class="modal-dialog" style="width:20%;">
            <div class="modal-content">
            </div>
        </div>
    </div>

        <!-- Modal for View Items Info -->
        <div class="modal col-lg-12" id="itemInfo" data-backdrop="static">
            <div class="modal-dialog" style="width:80%;">
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
                            <h2 class="text-center">Category 5: Office Supplies w/ ICS ( per PPSAS-FROM PAR TO ICS/ C.O. TO M.O.O.E.)</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                        <th style="width: 20%">Description</th>
                                        <th>Unit</th>
                                        <th>Quantity</th>
                                        <th>Brand</th>
                                        <th>Re-order Point</th>
                                        <th>Supplier</th>
                                        <th>Settings</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                    require '../php/db.php';

                                    $_SESSION['temp'] =  basename($_SERVER['PHP_SELF']);
                                    $_SESSION['cat']= "05";

                                    $sql = "SELECT items.itemID AS idd,description,units.unitName AS a,currentQuantity,brand,inventory.reorderPoint AS c 
                                                  ,suppliers.supplierName AS d
                                         FROM items JOIN suppliers ON items.supplierID = suppliers.supplierID JOIN units ON items.unitID = units.unitID JOIN inventory ON items.itemID = inventory.itemID  WHERE categoryNo = '5'";
                                    $res = $conn->query($sql);

                                    if($res){
                                        while($row = $res->fetch_assoc()){
                                            echo "<tr>"
                                                . "<td>" . $row['description'] ."</td>"
                                                . "<td>" . $row['a'] ."</td>"
                                                . "<td>" . $row['currentQuantity'] .  "</td>"
                                                . "<td>" . $row['brand'] .  "</td>"
                                                . "<td>" . $row['c'] .  "</td>"
                                                . "<td>" . $row['d'] .  "</td>"

                                                . "<td>" . "<a href=" .'../php/user/modal/editItemsICS.php?num=' .$row['idd'] . "  " . " class='material-icons' data-toggle='modal' data-target='#editItems'>visibility</a>" . "<a href=" .'../php/user/modal/viewItemInfo.php?num=' .$row['idd'] . " " . " class='material-icons' data-toggle='modal' data-target='#itemInfo'>info_outline</a>" . "</td>";
                                            echo "</tr>";
                                        }

                                    }

                                    ?>
                                    </tbody>
                                </table>

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